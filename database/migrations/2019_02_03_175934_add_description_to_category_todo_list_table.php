<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionToCategoryTodoListTable extends Migration
{
    public function up()
    {
        Schema::table('category_todo_list', function($table)
        {
            $table->string('description');
        });
    }



    public function down()
    {
        Schema::table('category_todo_list', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
