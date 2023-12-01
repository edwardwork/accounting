<?php

namespace App\Providers;

use App\Models\HomePage;
use App\Models\OurService;
use App\Nova\ArticleResource;
use App\Nova\QuestionResource;
use App\Nova\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\Menu;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::footer(function ($request) {
            return '';
        });

        Nova::mainMenu(static function (Request $request, Menu $menu) {
            return [
                MenuSection::make('Customers', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(QuestionResource::class),
                ])->icon('user')->collapsable(),

                MenuSection::make('Settings', [
                    MenuItem::link('Home page settings', '/resources/home-page-resources/' . HomePage::query()->value('id') . '/edit'),
                    MenuItem::link('Our services page settings', '/resources/our-service-resources/' . OurService::query()->value('id') . '/edit'),
//                    MenuItem::resource(ArticleResource::class),
                ])->icon('lock-closed')->collapsable(),

            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
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
}
