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

    public function published()
    {
        if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Editor') {
            $news = News::where('post_status', 'Published')->with(['user', 'category'])->latest()->get();
        } else {
            $news = News::where(['post_status' => 'Published', 'users_id' => Auth::user()->id])->with(['user', 'category'])->latest()->get();
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

    public function draft()
    {
        if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Editor') {
            $news = News::where('post_status', 'Draft')->with(['user', 'category'])->latest()->get();
        } else {
            $news = News::where(['post_status' => 'Draft', 'users_id' => Auth::user()->id])->with(['user', 'category'])->latest()->get();
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

    public function trash()
    {
        $news = News::onlyTrashed()->with(['user', 'category'])->latest()->get();

        $all = News::count();
        $published = News::where('post_status', 'Published')->count();
        $draft = News::where('post_status', 'Draft')->count();
        $trash = News::onlyTrashed()->count();

        return view('pages.user.news.index', [
            'news' => $news,
            'all' => $all,
            'published' => $published,
            'draft' => $draft,
            'trash' => $trash
        ]);
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('pages.user.news.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'categories_id' => 'required',
            'sub_categories' => 'nullable',
            'post_title' => 'required|max:255',
            'post_teaser' => 'required',
            'post_content' => 'required',
            'slug' => 'unique:posts',
            'post_image' => 'required|image|file|max:10240',
            'post_image_description' => 'required',
        ]);

        $content = $request->post_content;

        $validatedData['post_content'] = $content;
        $validatedData['post_teaser'] = Str::limit(strip_tags($request->post_teaser), 140);

        if ($request->file('post_image')) {

            $image = $request->file('post_image');
            $path = $image->hashName('public/assets/post-images');

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1200, 675);

            Storage::put($path, (string) $image_resize->encode());

            $validatedData['post_image'] = $path;
            //$validatedData['post_image'] = $request->file('post_image')->store('assets/post-images');
        }

        if ($request->publish) {
            $validatedData['post_status'] = 'Published';
        } else {
            $validatedData['post_status'] = 'Draft';
        }

        if ($request->is_schedule == 'Ya') {
            $validatedData['published_at'] = $request->published_at;
        } else {
            $validatedData['published_at'] = date('Y-m-d H:i:s');
        }

        $validatedData['users_id'] = auth()->user()->id;
        $validatedData['slug'] = Str::slug($request->post_title);

        $post = News::create($validatedData);

        $post->tag()->attach($request->tags);

        return redirect()
            ->route('news.index')
            ->with('success', 'Sukses! Pos Berhasil Disimpan');
    }

    // Display the specified resource.
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    // Show the form for editing the specified resource.
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $news->update($validatedData);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
