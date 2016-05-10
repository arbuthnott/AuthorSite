<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use App\Work;
use App\Tag;
use App\Article;
use App\Series;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //
        $router->bind('work', function($alias) {
            $work = Work::where('alias', $alias)->firstOrFail();
            return $work ? $work : $alias;
        });
        $router->bind('tag', function($name) {
            $tag = Tag::where('name', $name)->first();
            return $tag ? $tag : $name;
        });
        $router->bind('article', function($articleId) {
            $article = Article::where('id', $articleId)->first();
            return $article ? $article : $articleId;
        });
        $router->bind('series', function($alias) {
            $series = Series::where('alias', $alias)->first();
            return $series ? $series : $alias;
        });

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
