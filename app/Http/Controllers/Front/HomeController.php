<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\SocialNetwork;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function Index()
    {
        $posts = Post::with('authorId', 'category')->where('status', 'PUBLISHED')->whereHas('authorId', function ($query)
        {
            $query->where('role_id', 1);
        })->whereHas('category', function ($query)
        {
            $query->where('status', 1);
        })->paginate(setting('site.pagination'));
        $categories = Category::where('status', '1')->orderBy('order', 'ASC')->get();
        $socialNetworks = SocialNetwork::all();
        return view('front.index', compact('socialNetworks', 'categories', 'posts'));
    }
}
