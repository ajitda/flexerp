<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon;
use DB;
use Storage;
use Mail;
class Backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Backup:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Making a backup of your database';

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
       //set filename with date and time of backup
        $filename = "backup-" . Carbon\Carbon::now()->format('Y-m-d_H-i-s') . ".sql";

        //mysqldump command with account credentials from .env file. storage_path() adds default local storage path
        $command = sprintf("mysqldump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') . "  > " . storage_path() . "/" . $filename);

        $returnVar = NULL;
        $output  = NULL;
        //exec command allows you to run terminal commands from php 
        exec($command, $output, $returnVar);

        //if nothing (error) is returned
        if(!$returnVar){
            //get mysqldump output file from local storage
            $getFile = Storage::disk('local')->get($filename);
            // put file in backups directory on s3 storage
            Storage::disk('s3')->put("backups/" .  $filename, $getFile);
            // delete local copy
            Storage::disk('local')->delete($filename); 
            $this->info("Backup Created Successfully");
        }else{
            // if there is an error send an email 
            Mail::raw('There has been an error backing up the database.', function ($message) {
                $message->to("ajitdas2900@gmail.com", "Rich")->subject("Backup Error");
            });
        }

        
    }
}
