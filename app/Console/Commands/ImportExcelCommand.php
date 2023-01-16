<?php

namespace App\Console\Commands;

use App\Imports\PostsImport;
use App\Post;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelCommand extends Command
{
    protected $signature = 'import:excel';
    protected $description = 'Get data from excel file';

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function handle(): void
    {
        ini_set('memory_limit', '-1');

        Excel::import(new PostsImport(), public_path('excel/users.xlsx'));

        dd('done!!!');
    }
}
