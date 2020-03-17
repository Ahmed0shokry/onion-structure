<?php

namespace App\Providers;

use AppCore\Domain\Repository\Regulation\IRegulationClassRepository;
use AppCore\Domain\Repository\Regulation\IRegulationTypeRepository;
use AppCore\Persistence\Regulation\RegulationClassRepository;
use AppCore\Persistence\Regulation\RegulationTypeRepository;
use Illuminate\Support\ServiceProvider;

class RegulationServiceProvider extends ServiceProvider
{

    protected $defer = true;
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(IRegulationTypeRepository::class, function(){
           return new RegulationTypeRepository();
       });
        $this->app->bind(IRegulationClassRepository::class, function(){
            return new RegulationClassRepository();
        });
    }

    public function provides()
    {
        return [
            IRegulationTypeRepository::class,
            IRegulationClassRepository::class,
        ];
    }
}
