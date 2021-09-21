<?php

namespace App\Providers;

use App\Respositories\CustomerRepository;
use App\Respositories\CustomerRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RespositriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
    }
}
