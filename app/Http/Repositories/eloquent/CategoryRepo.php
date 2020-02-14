<?php


namespace App\Http\Repositories\eloquent;


use App\Category;
use App\Http\Repositories\CategoryRepoInterface;

class CategoryRepo implements CategoryRepoInterface
{
    protected $categories;

    public function __construct(Category $categories)
    {
        $this->categories = $categories;
    }

    public function getAll()
    {
       return  $this->categories->all();
    }

    public function storeOrUpdate($obj)
    {
       $obj->save();
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function findById($id)
    {
      return $this->categories->findOrFail($id);
    }
}
