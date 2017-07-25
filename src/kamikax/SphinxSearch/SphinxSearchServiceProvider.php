<?php
namespace kamikax\SphinxSearch;

use Illuminate\Support\ServiceProvider;


class SphinxSearchServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function register()
    {
        $this->app->singleton(SphinxSearch::class, function ($app) {
            return new SphinxSearch;
        });
    }
    public function boot()
    {
        $this->publishes([
            ## Original
            //__DIR__.'../../../../config/sphinxsearch.php' => config_path('sphinxsearch.php'),
            ## https://github.com/sngrl/sphinxsearch/issues/3
            __DIR__.'/../../../config/sphinxsearch.php' => config_path('sphinxsearch.php'),
        ]);
    }
}
