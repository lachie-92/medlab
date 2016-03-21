<?php

namespace App\Console\Commands;

use App\Product;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Xero_Contact;

class QuickFix extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quick:fix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for running temp codes';

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
        $multi_120 = Product::findOrFail(4);

        $multi_120->delete();
    }
}
