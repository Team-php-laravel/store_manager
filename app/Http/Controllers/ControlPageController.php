<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Post;
use App\Models\Store;
use App\Models\Storey;
use Illuminate\Http\Request;

class ControlPageController extends Controller
{
    public function home()
    {
        $store = Store::all();
        $news = Post::with('user')->limit(3)->get();
        $tang = Storey::all();
        return view('home', compact('store', 'news', 'tang'));
    }

    public function book(Request $request)
    {
        Book::create($request->all());
        return 1;
    }

    public function about()
    {
        $tang = Storey::all();
        return view('about', compact('tang'));
    }

    public function news()
    {
        $tang = Storey::all();
        $news = Post::with('user')->get();
        return view('new', compact('news', 'tang'));
    }

    public function detail($id)
    {
        $post = Post::with('user')->find($id);
        $news = Post::with('user')->limit(3)->get();
        return view('detail', compact('news', 'post'));
    }
}
