<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEModuleTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('e_modules');
        Schema::create('e_modules', function (Blueprint $t) {
            $t->increments('id');
            $t->text('name', 255);
            $t->text('description', 5000);
            $t->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('e_modules');
    }
}
