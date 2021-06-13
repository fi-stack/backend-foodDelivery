<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unisgned' => true,
				'auto_increment' => true
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'created_at' => [
				'type' => 'DATETIME'
			],
			'updated_at' => [
				'type' => 'DATETIME'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('admin');
	}

	public function down()
	{
		$this->forge->dropTable('admin');
	}
}
