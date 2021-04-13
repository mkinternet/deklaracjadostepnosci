<?php namespace Mkinternet\Deklaracjadostepnosci\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('mkinternet_deklaracjadostepnosci_settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mkinternet_deklaracjadostepnosci_settings');
    }
}
