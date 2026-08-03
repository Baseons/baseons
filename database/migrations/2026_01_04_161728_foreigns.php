<?php

use Baseons\Database\Migration\Scheme\Scheme;
use Baseons\Database\Migration\Scheme\Table;

return new class
{
    public string|null $connection = null;

    public function up()
    {
        Scheme::table('sessions', function (Table $table) {
            $table->foreign('id_user', 'users', 'id')->onDelete('CASCADE');
        });
    }

    public function down()
    {
        // Scheme::dropTable('');
    }
};
