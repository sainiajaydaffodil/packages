<?php

namespace SainiSunny246\DaffoAdmin;

use Illuminate\Support\ServiceProvider;
/**
 * Description of DaffoAdminServiceProvider
 *
 * @author daffolap-679
 */
class DaffoAdminServiceProvider extends ServiceProvider{
    
    //put your code here
    public function boot()
    {
        $this->loadRoutes();
        $this->loadResources();
    }
    
    public function register() {
        parent::register();
    }
    
    public function loadRoutes()
    {
         $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    
    public function loadResources()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views','SainiSunny246/DaffoAdmin');
    }
}
