<?php

namespace App\Console\Commands;

use App\Order;
use Illuminate\Console\Command;

class OrderCleanUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove any day old unprocessed New Orders';

    /**
     * Create a new command instance.
     *
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
        $this->comment('Remove day old unprocessed New Orders ---');

        $dayOldUnprocessedOrders = Order::searchDayOldUnprocessedOrders()->get();
        $this->comment(count($dayOldUnprocessedOrders) . ' records found and deleted');

        foreach ($dayOldUnprocessedOrders as $order) {

            $order->delete();
        }
    }
}
