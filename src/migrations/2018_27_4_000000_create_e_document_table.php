<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEDocumentTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('e_documents');
        Schema::create('e_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->unsigned();
            $table->string('job')->nullable();
            $table->text('file', 255);
            $table->text('name', 255);
            $table->text('description', 5000);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('e_documents');
    }
}
