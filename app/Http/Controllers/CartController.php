<?php

namespace App\Http\Controllers;

use App\Http\Cart;
use App\Http\Services\impl\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index(){
        $cart = Session::get('cart');

        return view('shop.cart.cart',compact('cart'));
    }

    function addToCart($id)
    {
        $product = $this->productService->findById($id);
        $oldCart = null;
        if (Session::has('cart'))
        $oldCart = Session::get('cart');
        $newCart = new Cart($oldCart);
        $newCart->add($product);
        Session::put('cart',$newCart);

        return back();
    }
}
