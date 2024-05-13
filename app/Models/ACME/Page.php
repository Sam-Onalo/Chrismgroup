<?php

namespace App\Models\ACME;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Pages\Models\Page as RinvexPage;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Support\Str;

class Page extends RinvexPage
{
    use HasFactory, NodeTrait;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->setTable(config('rinvex.pages.tables.pages'));
        $this->setRules([
            'uri' => 'nullable|regex:/^([0-9a-z\/_-]+)$/|max:150|unique:'.config('rinvex.pages.tables.pages').',uri,NULL,id,domain,'.($this->domain ?? 'null'),
            'slug' => 'required|alpha_dash|max:150|unique:'.config('rinvex.pages.tables.pages').',slug,NULL,id,domain,'.($this->domain ?? 'null'),
            'route' => 'nullable|regex:/^([0-9a-z\._-]+)$/|max:150|unique:'.config('rinvex.pages.tables.pages').',route,NULL,id,domain,'.($this->domain ?? 'null'),
            'domain' => 'nullable|string|strip_tags|max:150',
            'middleware' => 'nullable|string|strip_tags|max:150',
            'title' => 'required|string|strip_tags|max:150',
            'subtitle' => 'nullable|string|strip_tags|max:150',
            'excerpt' => 'nullable|string|max:32768',
            'content' => 'nullable|string|max:262144',
            'view' => 'required|string|strip_tags|max:150',
            'is_active' => 'sometimes|boolean',
            'sort_order' => 'nullable|integer|max:100000',
        ]);

        app('rinvex.pages.pageables')->each(function ($pageable, $key) {
            $field = Str::plural($key);
            $this->mergeFillable([$field]);
            $this->mergeRules([$field => 'nullable|array']);
        });

        Model::__construct($attributes);
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating( function($page) {

            $uri = [];
            if(request()->route('slug')) $uri[] = request()->route('slug');
            $uri[] = $page->uri ?? $page->slug;
            $page->uri = join('/', $uri);

            $route = [];
            if(request()->route('slug')) $route[] = request()->route('slug');
            $route[] = $page->route ?? $page->slug;
            $page->route = join('.', $route);

            // dd($page->toArray());
        });
    }
}
