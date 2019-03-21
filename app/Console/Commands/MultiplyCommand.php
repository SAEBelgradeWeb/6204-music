<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MultiplyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'utilities:multiply {--O|operation=multiply}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Multiplying some numbers';

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
        $operation = $this->option('operation');
        $no1 = $this->ask("Give me the first number");
        $no2 = $this->ask("Give me the second number");
        if($operation == "divide") {
            $result = (int)$no1 / (int)$no2;
        } else {
            $result = (int)$no1 * (int)$no2;
        }
        $this->info("The result is {$result}");
    }
}
