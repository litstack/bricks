<?php

namespace Litstack\Bricks\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lit-bricks:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will install the node package of bricks.';

    /**
     * Create new ExtendCommand instance.
     *
     * @param  Filesystem $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Handle command.
     *
     * @return bool|null
     */
    public function handle()
    {
        //http://patorjk.com/software/taag/#p=display&h=1&v=0&f=Slant&t=Lit%20Bricks
        $this->info('    __     _  __     ____         _        __        ');
        $this->info('   / /    (_)/ /_   / __ ) _____ (_)_____ / /__ _____');
        $this->info('  / /    / // __/  / __  |/ ___// // ___// //_// ___/');
        $this->info(' / /___ / // /_   / /_/ // /   / // /__ / ,<  (__  ) ');
        $this->info('/_____//_/ \__/  /_____//_/   /_/ \___//_/|_|/____/  ');
        $this->info("\n----- installing -----\n");

        $this->publishConfig();
        $this->runNpmInstall(base_path());

        $this->info("\n----- finished -----\n");

        $this->info('Add the following line to your app.js:');
        $this->info("require('lit-bricks');");
    }

    /**
     * Run npm install.
     *
     * @param  string $base
     * @param  bool   $verbose
     * @return void
     */
    protected function runNpmInstall($base, $verbose = false)
    {
        $cmd = "cd {$base}; npm i vendor/litstack/bricks";
        if ($verbose) {
            passthru($cmd);
        } else {
            shell_exec($cmd);
        }
    }

    /**
     * Publish the bricks config.
     *
     * @return void
     */
    protected function publishConfig()
    {
        Artisan::call('vendor:publish --provider="Litstack\Bricks\BricksServiceProvider" --tag=config');
    }
}
