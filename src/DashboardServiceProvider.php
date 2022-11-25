<?php 

namespace Rivan\Dashboard;


use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','dashboard');
    }
    public function register()
    {

    }
}

?>