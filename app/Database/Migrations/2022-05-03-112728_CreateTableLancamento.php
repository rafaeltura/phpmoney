<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableLancamento extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'chave' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'usuarios_id' => [
                'type' => 'INT',
                'constraint' => 9
            ],
            'categorias_id' => [
                'type' => 'INT',
                'constraint' => 9
            ],
            'valor' => [
                'type' => 'DECIMAL(8,2)',
                'unsigned' => TRUE
            ],
            'data' => [
                'type' => 'date',
            ],
            'notificar_por_email' => [
                'type' => 'TINYINT(1)',
                'default' => 2,
                'comment' => 'Indica se será enviado um email de notificacao quando o lancamento vender. 1 => SIM, 2 => NÃO'
            ],
            'consolidado' => [
                'type' => 'TINYINT(1)',
                'default' => 2,
                'comment' => 'Indica se o lancamento entrara nos calculos de saldo. 1 => SIM, 2 => NÃO'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
        ]);

        $this->forge
            ->addKey('chave')
            ->addForeignKey('usuarios_id', 'usuario', 'id', 'NO ACTION', 'CASCADE')
            ->addForeignKey('categorias_id', 'categoria', 'id', 'NO ACTION', 'CASCADE')
            ->createTable('lancamento');
    }

    public function down()
    {
        $this->forge->dropTable('lancamento');
    }
}
