<?php

namespace App\Console\Commands;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {--name=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

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
        // $name = $this->argument( key: 'name');
        // $email = $this->argument( key: 'email');
        // $password = $this->argument( key: 'password');

        // User::create([
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => bcrypt($password),
        //     ]
        // );

        $name = $this->option('name') ?? Str::random(8);
        $password = $this->option('password') ?? Str::random(12);

        
        info('succesfully create email : ' . $name . '@gmail.com' . ' password : ' . $password . ' With Username : ' . $name);
    }
}
