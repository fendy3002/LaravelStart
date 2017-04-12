<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CacheQueue implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($calledFrom)
    {
        // contoh passing parameter ke job
        $this->calledFrom = $calledFrom;
    }
    private $calledFrom;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $content = "Executed at: " . gmdate("c") . ", Called from: {$this->calledFrom} \n";
        $logPath = storage_path('logs/queue.log');
        touch($logPath);
        file_put_contents($logPath, $content, FILE_APPEND);
    }
}
