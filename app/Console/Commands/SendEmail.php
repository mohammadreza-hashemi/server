<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {user?* }
    {--M|message}
     {--id=*}
     {--Q|queue=} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a marketing email to a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $arguments = $this->argument('user');
        foreach ($arguments as $user) {
            Log::info("email job dispatche to user with id : " . $user);
        }

//        if ($this->confirm('Do you wanna make microservice?', true)) {
//            $className = $this->ask('What is your ClassName?');
//            $name = $this->choice('What is your name?', ['Taylor', 'Dayle']);
//
//            $arguments = $this->argument('user');
//            $queueName = $this->options('queue');
//            foreach ($arguments as $user) {
//                Log::info("email job dispatche to user with id : " . $user);
//            }
//
//            $this->info('The command was successful!');
//            $this->info('The command was successful!');
//
//            $this->table(
//                ['Name', 'Email'],
//                User::all(['name', 'email'])->toArray()
//            );

//        $drip->send(User::find($this->argument('user')));
        //


    }
}
