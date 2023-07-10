<?php namespace App\DataBase\Migrations;

use CodeIgniter\Database\Migration;

class perso extends Migration{
    public function up()
    {
        $this->forge->addField([
            'id_Persona' => [
                'type'           => 'INT',  
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Numero' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Email' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'tipoUsuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Contra' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            
        ]);
        $this->forge->addKey('id_Persona', true);
        $this->forge->createTable('Persona');
    }

    public function down()
    {
        $this->forge->dropTable('Persona');
    }
}