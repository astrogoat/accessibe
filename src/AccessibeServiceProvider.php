<?php

namespace Astrogoat\Accessibe;

use Astrogoat\Accessibe\Settings\AccessibeSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AccessibeServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('accessibe')
            ->settings(AccessibeSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ])->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToEnd(['accessibe::script']);
            });
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('accessibe')->hasViews()->hasConfigFile();
    }
}
