<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('type');
            $table->string('title');
            $table->string('tags')->nullable();
            $table->text('info_content');
            $table->string('receiver_wording')->nullabble();
            $table->smallInteger('sender_id');
            $table->string('info_cover_pic');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}