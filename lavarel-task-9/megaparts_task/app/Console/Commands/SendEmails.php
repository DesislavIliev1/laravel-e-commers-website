<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails to all registered users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $users = \App\Models\User::all(); // Replace with your User model

        // foreach ($users as $user) {
        //     // Customize this part to send your email using Laravel's Mail class
        //     Mail::to($user->email)->send(new YourEmailTemplate());
        // //
    
}
}
