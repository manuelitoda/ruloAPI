<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => "INT",
                'unsigned' => true,
                'auto_increment' => true,
                'null' => false
            ],
            'username' => [
                'type' => "VARCHAR",
                'constraint' => 255,
                'null' => true,
                'unique' => true
            ],
            'password' => [
                'type' => "VARCHAR",
                'constraint' => 255,
                'null' => true,
                'unique' => true
            ],
            "created TIMESTAMP DEFAULT CURRENT_TIMESTAMP",
            "updated TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP",
            'deleted' => [
                'type' => "DATETIME",
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
