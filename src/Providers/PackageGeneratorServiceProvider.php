<?php

namespace MichelMelo\LaravelPackageGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use MichelMelo\LaravelPackageGenerator\Console\Command\CommandMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\ControllerMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\DatagridMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\EventMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\ListenerMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\MailMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\MiddlewareMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\MigrationMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\ModelContractMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\ModelMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\ModelProxyMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\ModuleProviderMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\NotificationMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\PackageMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\ProviderMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\RepositoryMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\RequestMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\RouteMakeCommand;
use MichelMelo\LaravelPackageGenerator\Console\Command\SeederMakeCommand;

class PackageGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerCommands();
    }

    /**
     * Register the console commands of this package.
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PackageMakeCommand::class,
                ProviderMakeCommand::class,
                ModuleProviderMakeCommand::class,
                ControllerMakeCommand::class,
                RouteMakeCommand::class,
                MigrationMakeCommand::class,
                ModelMakeCommand::class,
                ModelProxyMakeCommand::class,
                ModelContractMakeCommand::class,
                RepositoryMakeCommand::class,
                SeederMakeCommand::class,
                MailMakeCommand::class,
                CommandMakeCommand::class,
                EventMakeCommand::class,
                ListenerMakeCommand::class,
                MiddlewareMakeCommand::class,
                RequestMakeCommand::class,
                NotificationMakeCommand::class,
                DatagridMakeCommand::class,
            ]);
        }
    }
}
