<?php

namespace App\Http\Controllers;

use App\Http\Services\impl\ProductService;
use App\Http\Services\ProductServiceInterface;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class ShopController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();

        return view('shop.home',compact('products'));
    }
}
