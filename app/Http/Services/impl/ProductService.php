<?php


namespace App\Http\Services\impl;


use App\Http\Repositories\eloquent\ProductRepo;
use App\Http\Services\ProductServiceInterface;
use App\Product;

class ProductService implements ProductServiceInterface
{
    protected $productRepo;

    public function __construct(ProductRepo $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getAll()
    {
       return $this->productRepo->getAll();
    }

    public function create($request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->image = $this->uploadImage($request);
        $this->productRepo->storeOrUpdate($product);
    }

    public function update($data, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function findById($id)
    {
       return $this->productRepo->findById($id);
    }
    public function uploadImage($request)
    {
        if (!$request->hasFile('image')) {
            $image_name = 'images/no_image.jpg';
        } else {
            $image = $request->file('image');
            $image_name = 'images/' . date('d-m-Y H:i:s') . '.' . $image->getClientOriginalName();
            $image->storeAs('public/', $image_name);
        }
        return $image_name;
    }
}
