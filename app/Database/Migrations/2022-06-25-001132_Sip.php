<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sip extends Migration
{
    public function up()
    {
        //
        $this->forge->addField(
            [
                'id' => ['type' => 'int', 'auto_increment' => true, 'unsigned' => true],
                'name' => ['type' => 'varchar', 'constraint' => 60],
                'address' => ['type' => 'text'],
                'created_at' => ['type' => 'datetime'],
                'updated_at' => ['type' => 'datetime'],
                'deleted_at' => ['type' => 'datetime']
            ]
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('suppliers', true);

        $this->forge->addField(
            [
                'id' => ['type' => 'int', 'auto_increment' => true, 'unsigned' => true],
                'supplier_id' => ['type' => 'int', 'unsigned' => true],
                'name' => ['type' => 'varchar',  'constraint' => 60],
                'price' => ['type' => 'decimal(10,2)'],
                'quantity' => ['type' => 'int'],
                'description' => ['type' => 'text'],
                'created_at' => ['type' => 'datetime'],
                'updated_at' => ['type' => 'datetime'],
                'deleted_at' => ['type' => 'datetime']
            ]
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('supplier_id', 'suppliers', 'id');
        $this->forge->createTable('products', true);

        $this->forge->addField(
            [
                'id' => ['type' => 'int', 'auto_increment' => true, 'unsigned' => true],
                'name' => ['type' => 'varchar', 'constraint' => 60],
                'email' => ['type' => 'varchar', 'constraint' => 60],
                'phone' => ['type' => 'varchar', 'constraint' => 20],
                'address' => ['type' => 'text'],
                'created_at' => ['type' => 'datetime'],
                'updated_at' => ['type' => 'datetime'],
                'deleted_at' => ['type' => 'datetime']
            ]
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('customers', true);

        $this->forge->addField(
            [
                'id' => ['type' => 'int', 'auto_increment' => true, 'unsigned' => true],
                'product_id' => ['type' => 'int', 'unsigned' => true],
                'customer_id' => ['type' => 'int', 'unsigned' => true],
                'created_at' => ['type' => 'datetime'],
                'updated_at' => ['type' => 'datetime'],
                'deleted_at' => ['type' => 'datetime']
            ]
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('product_id', 'products', 'id');
        $this->forge->addForeignKey('customer_id', 'customers', 'id');
        $this->forge->createTable('sales', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('sales', true);
        $this->forge->dropTable('customers', true);
        $this->forge->dropTable('products', true);
        $this->forge->dropTable('suppliers', true);
    }
}
