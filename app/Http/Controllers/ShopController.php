<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Trang chủ - Home
    public function index()
    {


        $data = [
            'products' => '',
            'is_home' => 1
        ];

        return view('shop.index', $data);
    }

    // Lấy nhiều sản phẩm theo danh mục
    public function category()
    {
        $data = [
            'is_category' => 1
        ];

        return view('shop.category', $data);
    }

    public function detailProduct()
    {
        $data = [
            'product' => '',
            'is_detail' => 1
        ];

        return view('shop.detail-product', $data);
    }

    public function articles()
    {
        return view('shop.articles');
    }

    public function detailArticle()
    {
        return view('shop.detail-article');
    }

    public function contact()
    {
        return view('shop.contact');
    }
}
