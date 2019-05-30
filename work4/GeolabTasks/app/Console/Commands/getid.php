<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB; 

class getid extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:id {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gets id from blogs';

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
        $argument= $this->argument("id");
        $results = DB::select('select * from blog where id ='.$argument, array(1));
         $this->info(print_r($results));
        // dd($results);
        
    }
}
