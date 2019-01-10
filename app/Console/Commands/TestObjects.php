<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ObjectService\Sphere;

class TestObjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:objects';

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
        $sphere = new Sphere();
        $sphere->setValue('color', 'red');
        dd($sphere->generate());
    }
}
