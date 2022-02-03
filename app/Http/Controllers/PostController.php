<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){   

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts',[
            "title" => "All Post" . $title,
            //"posts" => Post::all()
            /**
             *  == INI NAMANYA LAZY LOADING ==
             *  - kalo pake ini nanti nanti databasenya lambat karna bakal jalanin banyak sekali query
             *  - karna querinya ngambil di semua cth : author,category
             *  - bisa dicek lewat clockwork
             *  "posts" => Post::latest()->get()
             */

            // Kalo ini namanya egger Loading (kebalikan di atas)
            // "posts" => Post::with(['author', 'category'])->latest()->get()

            // masi egger loading tapi with(['author', 'category']) disimpen di model (Post.php)
            // disamping latest ada filter() itu ngambil dari model (Post.php)

            //ini untuk menampilkan semua
            //"posts" => Post::latest()->filter(request(['search','category', 'author']))->get()
            // ini untuk menampilkan pake pagination

            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => $post['title'],
            "post" => $post
        ]);
    }
}
