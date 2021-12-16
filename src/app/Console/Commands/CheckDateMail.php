<?php

namespace App\Console\Commands;

use App\Models\Loan;
use Illuminate\Console\Command;

class CheckDateMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if the expiration date of the loan has been reached.';

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
    public function handle(Loan $loan)
    {


//        return Command::SUCCESS;
    }
}
