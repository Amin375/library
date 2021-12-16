<?php

namespace App\Console\Commands;

use App\Mail\SendMail;
use App\Models\Loan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
//use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class CheckDateMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

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
        $now = Carbon::now();

        $loanDate = $loan['created_at'];
//        $loanDate = Carbon::create($loan['created_at']->format('d-m-Y'));
        $expiredDate = Carbon::parse($loanDate)->addMinute()->format('d-m-Y');

        if($now->greaterThanOrEqualTo($expiredDate)){
            Mail::to($loan->user)->send(new SendMail($loan));
        }
//        $first->greaterThanOrEqualTo($second)
//        return Command::SUCCESS;
    }
}
