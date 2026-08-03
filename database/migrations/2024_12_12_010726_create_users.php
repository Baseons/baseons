<?php

use Baseons\Database\Migration\Scheme\Scheme;
use Baseons\Database\Migration\Scheme\Table;

return new class
{
    public string|null $connection = null;

    public function up()
    {
        Scheme::table('users', function (Table $table) {
            $table->id();

            $table->bigInt('id_user_create')->index();
            $table->boolean('active')->default(1);
            $table->varchar('name')->index();
            $table->varchar('email')->unique()->index();
            $table->varchar('password');
            $table->varchar('otp');
            $table->varchar('recovery');
            $table->varchar('phone')->index();
            $table->varchar('cellphone')->index();
            $table->varchar('photo');
            $table->text('description');
            $table->timestamp('birth_at');

            $table->dates();
        });
    }

    public function down()
    {
        Scheme::dropTable('users');
    }
};
