<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    DB::table('users')->update(['status' => 'no active']);
}

public function down()
{
     DB::table('users')->update(['status' => 'active']);
}
};
