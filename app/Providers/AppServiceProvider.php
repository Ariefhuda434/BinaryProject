<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Gerakan;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $userId = Auth::id();
                $historyGerakans = Gerakan::whereHas('users', function ($query) use ($userId) {
                    $query->where('id_user', $userId);
                })->where('status', 'selesai')->get();
                
                $view->with('historyGerakans', $historyGerakans);
            }
        });
    }
}
