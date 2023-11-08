<?php


namespace App\classes;
use App\classes\Product;


class Home
{
    public $msg, $product, $products, $detail, $singleProduct, $title;
    public function index()
    {
        return view('home', [
            'title' => 'Home page'
        ]);
    }
    public function product()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        return view('product', [
            'title' => 'All products page',
            'products'=>$this->products
        ]);
    }
    public function detail($id)

    {
        $this->product = new Product();
        $this->singleProduct = $this->product->getProductById($id);
        return view('detail',[
            'product' => $this->singleProduct,
            'title' => 'Product'
        ]);
    }
    public function login()
    {
        return view('login', ['title' => 'Login']);
    }
    public function prime()
    {
        return view('prime', ['title' => 'prime']);
    }
}