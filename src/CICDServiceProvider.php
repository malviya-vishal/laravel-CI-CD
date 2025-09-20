<?php
namespace VishalLaravel\CICDGenerator;
use Illuminate\Support\ServiceProvider;

class CICDServiceProvider extends ServiceProvider{

    public function boot(){
        //publish config and stubs
        $this->publishes([
            __DIR__.'./../config/cicd.php' => \config_path('cicd.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/Templates' => \base_path('cicd-templates'),
        ], 'templates');

        //Register artisan command
        if($this->app->runningInConsole()){
            $this->commands([
                Commands\GenerateCICDFile::class,
            ]);
        }
    }

    public function register(){
        $this->mergeConfigFrom(__DIR__.'/../config/cicd.php', 'cicd');
    }
}