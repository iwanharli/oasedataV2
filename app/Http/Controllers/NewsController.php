<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use App\Models\BreakingNews;
use App\Models\Post;
use App\Models\StatisticPost;
use App\Models\Category;
use App\Models\HeadlineCategory;
use App\Models\User;
use App\Models\Photo;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\Redaction;
use App\Models\Disclaimer;
use App\Models\Guideline;
use App\Models\Contact;
use App\Models\BreakingNewsCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $post = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->paginate(3);

        $news = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->paginate(3);

        $breaking_news = BreakingNews::with(['post'])->latest()->get();

        $headlines = Headline::with(['post'])->latest()->get();
        $gadget = Post::with(['user', 'category'])->where([
            ['categories_id', '=', 3],
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(6)->latest()->get();
        $games = Post::with(['user', 'category'])->where([
            ['categories_id', '=', 5],
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(8)->latest()->get();
        $tutorials = Post::with(['user', 'category'])->where([
            ['categories_id', '=', 13],
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->get();

        return view('pages.portal.news', [
            'post' => $post,
            'news' => $news,
            'breaking_news' => $breaking_news,
            'headlines' => $headlines,
            'gadget' => $gadget,
            'games' => $games,
            'tutorials' => $tutorials
        ]);
    }

    public function newsDetail($slug)
    {
        $post = Post::with(['user', 'category'])->where('slug', $slug)->firstOrFail();

        $latest_post = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(6)->latest()->get();
        $related_post = Post::with(['user', 'category'])->where([
            ['users_id', '=', $post->users_id],
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(3)->latest()->get();

        if ($post->sub_categories != NULL) {
            $sc = Category::where('id', $post->sub_categories)->firstOrFail();
        } else {
            $sc = '';
        }

        return view('pages.home.detail', [
            'post' => $post,
            'sc' => $sc,
            'latest_post' => $latest_post,
            'related_post' => $related_post
        ]);
    }
}
