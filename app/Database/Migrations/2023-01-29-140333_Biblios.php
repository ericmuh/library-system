<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biblios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'buku_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'authors' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'average_rating' => [
                'type' => 'FLOAT',
                'constraint' => '2,1'
            ],
            'isbn' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'isbn13' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'language_code' => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            'num_pages' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'ratings_count' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'publication_date' => [
                'type' => 'DATE'
            ],
            'publisher' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'img' => [
                'type' => 'VARCHAR',
                'constraint' => 100
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
        $this->forge->addKey('buku_id', true);
        $this->forge->createTable('biblio_koleksi');
    }

    public function down()
    {
        $this->forge->dropTable('biblio_koleksi');
    }
}
