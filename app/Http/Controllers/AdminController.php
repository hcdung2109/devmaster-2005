<?php

namespace App\Http\Controllers;

use App\Article;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // trang dashboard
    public function index()
    {
        $numOrder = Order::count(); // đếm số đơn hàng
        $numArticle = Article::count(); // số bài viết
        $numProduct = Product::count(); // số sản phẩm
        $numUser = User::count(); // số người dùng

        $data = [
            'numOrder' => $numOrder,
            'numArticle' => $numArticle,
            'numProduct' => $numProduct,
            'numUser' => $numUser
        ];

        return view('admin.dashboard', $data);
    }

    public static function abc()
    {

    }
}

