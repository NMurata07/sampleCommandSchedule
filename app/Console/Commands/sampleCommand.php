<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Carbon\Carbon;

class sampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sample:cmd {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //
        // echo 1;
        echo $this->argument('id') . "\n";
        echo Carbon::now() . "\n";

        // $user = User::find($this->argument('id'));
        // echo $user->name . "\n";
        // echo $user->email . "\n";
        // echo $user->password . "\n";
    }
}
