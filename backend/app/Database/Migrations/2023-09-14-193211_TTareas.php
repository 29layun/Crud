<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TTareas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tarea' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'estado' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('t_tareas');
    }

    public function down()
    {
        $this->forge->dropTable('t_tareas');
    }
}
