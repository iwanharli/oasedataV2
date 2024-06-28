<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Statistic;
use App\Models\Tag;
use App\Services\Admin\StatistikService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserStatisticController extends Controller
{

    public function index()
    {
        if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Editor') {
            $statistic = Statistic::with(['user', 'category'])->latest()->get();
        } else {
            $statistic = Statistic::where('users_id', Auth::user()->id)->with(['user', 'category'])->latest()->get();
        }

        if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Editor') {
            $all = Statistic::count();
            $published = Statistic::where('post_status', 'Published')->count();
            $draft = Statistic::where('post_status', 'Draft')->count();
            $trash = Statistic::onlyTrashed()->count();
        } else {
            $all = Statistic::where('users_id', Auth::user()->id)->count();
            $published = Statistic::where(['post_status' => 'Published', 'users_id' => Auth::user()->id])->count();
            $draft = Statistic::where(['post_status' => 'Draft', 'users_id' => Auth::user()->id])->count();
            $trash = Statistic::onlyTrashed()->count();
        }

        return view('pages.user.statistic.index', [
            'statistic' => $statistic,
            'all' => $all,
            'published' => $published,
            'draft' => $draft,
            'trash' => $trash
        ]);
    } // end func


    public function create()
    {
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        $tags = Tag::all();

        return view('pages.user.statistic.create', [
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } // end func



    public function store(Request $request)
    {
        $post = StatistikService::save_data($request);

        return redirect()
            ->route('statistik.index')
            ->with('success', 'Sukses! Statistik Berhasil Disimpan');
    }


    public function edit($id)
    {
        $item = Statistic::findOrFail($id);
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        $sub_categories = Category::where('parent_id', $item->categories_id)->orderby('name', 'asc')->get();
        $tags = Tag::all();
        $json_data = json_decode($item->json_data, true);

        return view('pages.admin.statistik.edit', [
            'item' => $item,
            'categories' => $categories,
            'sub_categories' => $sub_categories,
            'tags' => $tags,
            'json_data' => $json_data
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = StatistikService::update_data($id, $request);

        return redirect()
            ->route('statistik.index')
            ->with('success', 'Sukses! Statistik Berhasil Disimpan');
    }


    public function destroy($id)
    {
        $item = Statistic::findorFail($id);

        $item->delete();

        return redirect()
            ->route('statistik.index')
            ->with('success', 'Sukses! Pos Berhasil Dihapus');
    }

    public function force_delete($id)
    {
        $item = Statistic::onlyTrashed()->findOrFail($id);

        Storage::delete($item->post_image);

        $item->forceDelete();

        return redirect()
            ->route('statistik-trash')
            ->with('success', 'Sukses! 1 Pos dihapus secara permanen.');
    }

    public function restore_data($id)
    {
        Statistic::withTrashed()->find($id)->restore();

        return redirect()
            ->route('statistik-trash')
            ->with('success', 'Sukses! 1 Pos berhasil dikembalikan dari sampah.');
    }
}
