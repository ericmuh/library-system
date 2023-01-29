<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BiblioKoleski extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'koleksi_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'nomor_registrasi' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'buku_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('koleksi_id', true);
        $this->forge->createTable('collections');
    }

    public function down()
    {
        $this->forge->dropTable('collections');
    }
}


