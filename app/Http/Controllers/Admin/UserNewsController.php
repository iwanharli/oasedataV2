<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\News;
use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class UserNewsController extends Controller
{
    public function index()
    {
        if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Editor') {
            $news = News::with(['user', 'category'])->latest()->get();
        } else {
            $news = News::where('users_id', Auth::user()->id)->with(['user', 'category'])->latest()->get();
        }

        if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Editor') {
            $all = News::count();
            $published = News::where('post_status', 'Published')->count();
            $draft = News::where('post_status', 'Draft')->count();
            $trash = News::onlyTrashed()->count();
        } else {
            $all = News::where('users_id', Auth::user()->id)->count();
            $published = News::where(['post_status' => 'Published', 'users_id' => Auth::user()->id])->count();
            $draft = News::where(['post_status' => 'Draft', 'users_id' => Auth::user()->id])->count();
            $trash = News::onlyTrashed()->count();
        }

        return view('pages.user.news.index', [
            'news' => $news,
            'all' => $all,
            'published' => $published,
            'draft' => $draft,
            'trash' => $trash
        ]);
    }
}
