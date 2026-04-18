<?php

use Baseons\Database\Migration\Scheme\Scheme;
use Baseons\Database\Migration\Scheme\Table;

return new class
{
    public string|null $connection = null;

    public function up()
    {
        Scheme::table('sessions', function (Table $table) {
            $table->id();

            $table->bigInt('id_user')->index();
            $table->boolean('active')->default(1);
            $table->boolean('success')->default(0);
            $table->varchar('token')->unique()->index();
            $table->varchar('app_version');
            $table->varchar('ipv4');
            $table->varchar('ipv6');
            $table->json('geolocation');
            $table->boolean('device_virtual');
            $table->varchar('device_model');
            $table->varchar('device_name');
            $table->varchar('device_os');
            $table->varchar('device_sdk_version');
            $table->varchar('device_ios_version');
            $table->varchar('device_platform');
            $table->varchar('device_system');
            $table->varchar('info')->index();
            $table->dates();
        });
    }

    public function down()
    {
        Scheme::dropTable('sessions');
    }
};
