<?php

namespace Marshmallow\NovaStyling\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'marshmallow:install-nova-theme';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the resources for the Marshmallow Nova Theme';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $views_to_copy = [
            'footer.blade.php',
            'logo.blade.php',
            'meta.blade.php',
            'user.blade.php',
        ];

        foreach ($views_to_copy as $blade_file) {
            File::copy(__DIR__.'/../../resources/views/nova/partials/' . $blade_file, base_path('resources/views/vendor/nova/partials/' . $blade_file));
        }

        $this->info('Resources have been copies.');

        Artisan::call('vendor:publish', [
            '--provider' => 'Marshmallow\NovaStyling\ThemeServiceProvider',
            '--force' => true,
        ]);
    }
}
