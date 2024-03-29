<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSurveys extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'question'    => [
                'type' => 'TEXT',
            ],
            'rating'    => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('surveys');
    }

    public function down()
    {
        $this->forge->dropTable('surveys');
    }
}
