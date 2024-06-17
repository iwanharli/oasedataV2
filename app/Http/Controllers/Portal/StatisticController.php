<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\NewsCategory;
use App\Models\StatisticPost;

class StatisticController extends Controller
{
    public function statistikAll()
    {

        $statistik_all = StatisticPost::with(['user'])->where([
            ['post_status', '=', 'Published'],
            ['created_at', '<', now()],
        ])->latest()->paginate(3);

        var_dump($statistik_all);
    }

    public function statistikDetail($slug)
    {
        $post = StatisticPost::with(['user'])->where('slug', $slug)->firstOrFail();

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

        $json_data = json_decode($post->json_data, true);
        $data_fix = [];

        // var_dump($json_data); exit;

        foreach ($json_data as $key => $value) :
            $data_fix['labels'][] = $value['label'];
            $data_fix['values'][] = $value['value'];
        endforeach;

        $apex_data = [
            'name' => 'Test Chart',
            'data' => $data_fix['values'],
            'categories' => $data_fix['labels']
        ];

        // var_dump($apex_data); exit;

        return view('pages.home.detail-statistik', [
            'post' => $post,
            'sc' => $sc,
            'latest_post' => $latest_post,
            'related_post' => $related_post,
            'apex_data' => $apex_data
        ]);
    }
}
