<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate_in_order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the migrations in the order specified in the file app/Console/Comands/MigrateInOrder.php \n Drop all the table in db before execute the command.';

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
        $migrations = [
                '2014_10_12_000000_create_users_table.php',
                '2014_10_12_100000_create_password_resets_table.php',
                '2019_08_19_000000_create_failed_jobs_table.php',
                '2020_11_27_184857_edit_columns_in_users_table.php',
                '2020_11_21_134221_create_category_table.php',
                '2020_11_21_134052_create_subcategory_table.php',
                '2020_11_21_191200_create_sysfile_table.php',
                '2020_12_01_225235_create_details_table.php',
                '2020_11_28_152807_create_offert_table.php',

            ];

            foreach($migrations as $migration)
            {
            $basePath = 'database/migrations/';
            $migrationName = trim($migration);
            $path = $basePath.$migrationName;
            $this->call('migrate:refresh', [
            '--path' => $path ,
            ]);
            }
    }
}
