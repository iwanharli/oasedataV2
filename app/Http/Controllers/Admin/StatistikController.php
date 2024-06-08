<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\StatisticPost;
use App\Models\Tag;
use App\Services\Admin\StatistikService;
use Illuminate\Http\Request;

class StatistikController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            return StatistikService::datatable_get_all();
        }
        return view('pages.admin.statistik.index',[
            'all' => @$all,
            'published' => @$published,
            'draft' => @$draft,
            'trash' => @$trash
        ]);
    } // end func


    public function create()
    {
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        $tags = Tag::all();

        return view('pages.admin.statistik.create',[
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } // end func



    public function store(Request $request)
    {
        $post = StatistikService::save_data($request);

        var_dump($post); exit;

        return redirect()
                    ->route('statistik.index')
                    ->with('success', 'Sukses! Statistik Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatisticPost  $statisticPost
     * @return \Illuminate\Http\Response
     */
    public function show(StatisticPost $statisticPost)
    {
        return response()->json($statisticPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatisticPost  $statisticPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatisticPost $statisticPost)
    {
        $validatedData = $request->validate([
            'user_id' => 'sometimes|exists:users,id',
            'post_title' => 'sometimes|string|max:255',
            'post_teaser' => 'sometimes|string|max:255',
            'post_content' => 'sometimes|string',
            'slug' => 'sometimes|string|max:255|unique:statistic_posts,slug,' . $statisticPost->id,
            'json_data' => 'sometimes|json',
            'post_status' => 'sometimes|string|max:255',
        ]);

        $statisticPost->update($validatedData);

        return response()->json($statisticPost);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatisticPost  $statisticPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatisticPost $statisticPost)
    {
        $statisticPost->delete();

        return response()->json(null, 204);
    }
}
