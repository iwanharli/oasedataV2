<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for Oasedata';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        // Add URLs to the sitemap
        $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)->setLastModificationDate(now()));

        $categories = \App\Models\Category::all();
        foreach ($categories as $cat) {
            $sitemap->add(Url::create("/category/{$cat->slug}")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setLastModificationDate($cat->updated_at));
        }

        $tags = \App\Models\Tag::all();
        foreach ($tags as $tag) {
            $sitemap->add(Url::create("/tag/{$tag->slug}")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setLastModificationDate($tag->updated_at));
        }

        $posts = \App\Models\Post::all();
        foreach ($posts as $post) {
            $sitemap->add(Url::create("/news/{$post->slug}")
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setLastModificationDate($post->updated_at));
        }

        $statistics = \App\Models\StatisticPost::all();
        foreach ($statistics as $statistic) {
            $sitemap->add(Url::create("/statistic/{$statistic->slug}")
                ->setPriority(1.0)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setLastModificationDate($statistic->updated_at));
        }



        // Save the sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');

        return 0;
    }
}
