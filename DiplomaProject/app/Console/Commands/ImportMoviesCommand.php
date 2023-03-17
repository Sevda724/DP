<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Cache;


class ImportMoviesCommand extends Command
{
    protected $signature = 'import:catalogs';
    protected $description = 'Import movies data from CSV file';

    public function handle()
    {
        /*if (Schema::hasTable('catalogs')) {
            Schema::dropIfExists('catalogs');
        }  else {
            Schema::create('catalogs', function (Blueprint $table) {
                $table->bigIncrements('id')->autoIncrement();
                $table->string('Category')->nullable();
                $table->string('Title')->nullable();
                $table->text('Description')->nullable();
                $table->text('Text')->nullable();
                $table->string('Photo')->nullable();
                $table->integer('Year')->nullable();
                $table->string('Director')->nullable();
                $table->string('Trailer')->nullable();
                $table->string('Awards')->nullable();
            });

        }*/

        Schema::create('catalogs', function (Blueprint $table) {
                $table->bigIncrements('id')->autoIncrement();
                $table->string('Category')->nullable();
                $table->string('Title')->nullable();
                $table->text('Description')->nullable();
                $table->text('Text')->nullable();
                $table->string('Photo')->nullable();
                $table->integer('Year')->nullable();
                $table->string('Director')->nullable();
                $table->string('Trailer')->nullable();
                $table->text('Awards')->nullable();
            });


        $file = public_path('catalogsData/csv_data.csv');

        if (!file_exists($file)) {
            $this->error('CSV file not found!');
            return;
        }

        $csvData = file_get_contents($file);
        $rows = array_map("str_getcsv", explode("\n", $csvData));
        $header = array_shift($rows);
        $data = array();
        foreach ($rows as $row) {
            if (count($header) != count($row)) {
                continue;
            }
            $data[] = array_combine($header, $row);
        }

        DB::table('catalogs')->insert($data);

        $this->info('Import completed successfully.');
    }
}
