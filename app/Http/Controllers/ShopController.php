<?php

namespace App\Http\Controllers;

use App\Article;
use App\Contact;
use Illuminate\Http\Request;

class ShopController extends GeneralController
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

    public function getArticles()
    {
        $articles = Article::latest()->paginate(20);

        return view('shop.articles', ['data' => $articles]);
    }

    public function getArticle($slug)
    {

        $article = Article::where(['slug' => $slug, 'is_active' => 1])->first();

        return view('shop.detail-article', ['data' => $article]);
    }

    public function contact()
    {
        return view('shop.contact');
    }

    public function createContact(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'content' => 'required'
        ]);

        //luu vào csdl
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();

        // chuyển về trang chủ
        return redirect('/');
    }
}
