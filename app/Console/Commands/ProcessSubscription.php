<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Session;

class ProcessSubscription extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:process {--subscriptionDays=7}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process subscriptions';

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
     * @return int
     */
    public function handle()
    {
        $subscriptionDays = $this->option('subscriptionDays');

        // Retrieve subscription details from the session or your storage mechanism
        $total = Session::get('subscription_total');
        // Perform any necessary actions with the subscription details
        // ...

        // Update the subscription status or perform any other required operations

        $this->info('Subscriptions processed successfully.');

        return 0;
    }
}