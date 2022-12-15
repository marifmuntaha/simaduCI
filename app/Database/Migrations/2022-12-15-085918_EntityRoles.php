<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EntityRoles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'name' => [
                'type'      => 'VARCHAR',
                'constraint' => 255
            ],
            'desc'  => [
                'type'      => 'VARCHAR',
                'constraint'    => 255
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('entity__roles');
    }

    public function down()
    {
        $this->forge->dropTable('entity__roles');
    }
}
