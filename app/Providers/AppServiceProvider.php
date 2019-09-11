<?php

namespace App\Providers;

use App\Repositories\FamilyRepository;
use App\Services\BaseService;
use App\Services\FamilyService;
use Illuminate\Support\ServiceProvider;

use App\Services\Contracts\BaseService as BaseServiceInterface;
use App\Repositories\Contracts\FamilyRepository as FamilyRepositoryInterface;
use App\Services\Contracts\FamilyService as FamilyServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseServiceInterface::class, BaseService::class);
        $this->app->bind(FamilyServiceInterface::class, FamilyService::class);
        $this->app->bind(FamilyRepositoryInterface::class, FamilyRepository::class);
    }
}
