<?php

namespace Devtemple\Fastit;

use Illuminate\Support\ServiceProvider;

class ViewsServiceProvider extends ServiceProvider
{
    /**
     * Arrayable module views, which defining module name and views name for specific module
     * @var array $views
     */
    protected $views = [
        'Core' => 'fastit-master'
    ];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->getModulesViews();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function getModulesViews()
    {
        foreach ($this->views as $key => $row) {
            $this->loadViewsFrom(__DIR__ . '/modules/' . $key . '/resourses/views', $row);
        }
    }
}
