<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //menambah kolom baru

            $table->string('username', 100);
            $table->string('address', 1000);
            $table->string('phoneNumber', 20);
            $table->string('birthdate')->nullable();
            $table->string('agama', 20);
            $table->tinyInteger('jenisKelamin');

            //modifikasi name dan email
            $table->renameColumn('name', 'fullname');
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
