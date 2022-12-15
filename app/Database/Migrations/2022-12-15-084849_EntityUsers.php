<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EntityUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'username' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'unique'        => true
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'fullname' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'image' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'role' => [
                'type'          => 'INT'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('entity__users');
    }

    public function down()
    {
        $this->forge->dropTable('entity__users');
    }
}
