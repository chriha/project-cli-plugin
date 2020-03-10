<?php

/**
 * Plugin for ProjectCLI. More info at
 * https://github.com/chriha/project-cli
 */

namespace __NAMESPACE__\__PLUGIN_NAME__\Commands;

use Chriha\ProjectCLI\Commands\Command;
use Chriha\ProjectCLI\Contracts\Plugin;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class DummyCommand extends Command
{

    /** @var string */
    protected static $defaultName = 'dummy:command';

    /** @var string */
    protected $description = 'Dummy description of the command';


    /**
     * Configure the command by adding a description, arguments and options
     *
     * @return void
     */
    public function configure() : void
    {
        //$this->addArgument('argument', InputArgument::OPTIONAL, 'Argument description', 'default');
        //$this->addOption('name', 'shortcut', InputOption::VALUE_OPTIONAL, 'Option description');
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle() : void
    {
        $this->info('a dummy command');
    }

    /**
     * Make command only available if inside the project
     */
    public static function isActive() : bool
    {
        return PROJECT_IS_INSIDE;
    }

}
