<?php

namespace Database\Seeders;

use App\Models\ACME\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $html = view('admin.page.default')->render();

        $cpage = Page::create([
            'uri' => 'services/shipping',
            // 'slug' => 'test-page',
            'route' => 'frontend.services.shipping',
            'title' => 'Shipping',
            'content' => $html,
            'view' => 'frontend.page',
        ]);

        $pages = collect(['Shipping Agency', 'Bunkering/Fresh Watter Supplies', 'Supercargo Operations', 'P & I Correspondents', 'Chartering']);
        $pages->each( function ($page) use ($cpage, $html) {
            $page = Page::create([
                'title' => $page,
                'content' => $html,
                'view' => "frontend.page",
            ]);

            $uri = [];
            $uri[] = $cpage->uri;
            $uri[] = $page->uri;
            $page->uri = join('/', $uri);

            $route = [];
            $route[] = $cpage->slug;
            $route[] = $page->slug;
            $page->route = join('.', $route);

            $page->save();

            $cpage->appendNode($page);
        });


        $cpage = Page::create([
            'uri' => 'services/marine',
            // 'slug' => 'test-page',
            'route' => 'frontend.services.marine',
            'title' => 'Marine',
            'content' => $html,
            'view' => 'frontend.page',
        ]);

        $pages = collect(['Offshore Support', 'Jetty/Technical Operations', 'Ship To Ship Transfer', 'Towage & Barge Operations']);
        $pages->each( function ($page) use ($cpage, $html) {
            $page = Page::create([
                'title' => $page,
                'content' => $html,
                'view' => "frontend.page",
            ]);

            $uri = [];
            $uri[] = $cpage->uri;
            $uri[] = $page->uri;
            $page->uri = join('/', $uri);

            $route = [];
            $route[] = $cpage->slug;
            $route[] = $page->slug;
            $page->route = join('.', $route);

            $page->save();

            $cpage->appendNode($page);
        });


        $cpage = Page::create([
            'uri' => 'services/logistics',
            // 'slug' => 'test-page',
            'route' => 'frontend.services.logistics',
            'title' => 'Logistics',
            'content' => $html,
            'view' => 'frontend.page',
        ]);

        $pages = collect(['Customs Clearing/Forwarding', 'Crew Change', 'Hotel Reservation']);
        $pages->each( function ($page) use ($cpage, $html) {
            $page = Page::create([
                'title' => $page,
                'content' => $html,
                'view' => "frontend.page",
            ]);

            $uri = [];
            $uri[] = $cpage->uri;
            $uri[] = $page->uri;
            $page->uri = join('/', $uri);

            $route = [];
            $route[] = $cpage->slug;
            $route[] = $page->slug;
            $page->route = join('.', $route);

            $page->save();

            $cpage->appendNode($page);
        });


        $oil = Page::create([
            'uri' => 'services/oil',
            // 'slug' => 'test-page',
            'route' => 'frontend.services.oil',
            'title' => 'Oil',
            'content' => $html,
            'view' => 'frontend.page',
        ]);

        $gas = Page::create([
            'uri' => 'services/gas',
            // 'slug' => 'test-page',
            'route' => 'frontend.services.gas',
            'title' => 'Gas',
            'content' => $html,
            'view' => 'frontend.page',
        ]);


    }
}
