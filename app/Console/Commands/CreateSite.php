<?php

namespace App\Console\Commands;

use App\Site;
use Illuminate\Console\Command;

class CreateSite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:create
                            {code : The site code to create}
                            {sender_mail : The mail sender mail}
                            {sender_name : The mail sender name}
                            {recipient_mail : The recipient mail}
                            {recipient_name : The recipient name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new site';

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
        $arguments = $this->argument();

        if (Site::create($arguments)) {
            $this->info('Site created successfully');
        } else {
            $this->error('Site was not created');
        };
    }
}
