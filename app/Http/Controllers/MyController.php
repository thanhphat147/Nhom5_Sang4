<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;

class MyController extends Controller
{
    // public function index() {
    //     // if($id=='index1')
    //     // return view('index1');
    //     // elseif($id=='lienhe.php')
    //     // return view('lienhe');
    //     // elseif($id=='gioithieu.php')
    //     // return view('gioithieu');
    //     // elseif($id=='ghe.php')
    //     // return view('ghe');
    //     // elseif($id=='ban.php')
    //     // return view('ban');
    //     // elseif($id=='login.php')
    //     return view('login');

    // }

    // public function doc2($id) {
    //     return $id;
    // }
    
    // public function index() {
    //     return view('index1');
    // }
    
    // public function index($id="phat") {
    //     return 'User'.$id;
    // }

    public function getAllProduct() {
        $products = Product::all();
        $catalogs = Catalog::all();
        return view('index', ['products' => $products],['catalogs' => $catalogs]);
    }

    public function admin() {
        return "Hello admin";
    }
    public function login() {
        return view("login");
    }


    public function getProductByCatalog($id)
    {
        $products = Catalog::find($id)->product;
        return view('catelogy', ['products' => $products]);
    }
}
