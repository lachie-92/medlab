<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Order;
use App\Medlab\Mailer\MedlabMailer;

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
    public function handle(MedlabMailer $mail)
    {
        $order = Order::findOrFail(1016);
        $mail->sendOrderReceivedNoticeToAdmin($order);
        //$mail->sendOrderReceivedNoticeToClient($order);
    }
}
