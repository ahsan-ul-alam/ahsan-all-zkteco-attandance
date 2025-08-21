<?php

namespace Ahsan\AllZktecoAttandance;

use Ahsan\AllZktecoAttandance\Commands\LaravelZktecoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AhsanAllZktecoAttandanceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ahsan-all-zkteco-attandance')
            ->hasConfigFile();
        // ->hasViews()
        // ->hasMigration('create_laravel-zkteco_table')
        // ->hasCommand(LaravelZktecoCommand::class);
    }
}
