<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class updateCatalog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'command:name';
    protected $signature = 'amazon:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To update the amazon Catalog';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Amazon Catalog Updated!");
    }
}
