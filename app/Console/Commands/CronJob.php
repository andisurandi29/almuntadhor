<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pembayaran;

class CronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:tagihan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tagihan untuk pembayaran uang bulanan santri';

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
        // return 0;

        $dataTagihan = Pembayaran::get();

        foreach($dataTagihan as $key => $value) {
            // print_r($value);
            return view('pengurus.v_pembayaran', $value);
        }
        // print_r($dataTagihan);
    }
}
