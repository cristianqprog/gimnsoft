<?php
use Migrations\AbstractMigration;

class CreateCustomersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('customers');
        $table->addColumn('name', 'string')
              ->addColumn('last_name', 'string') 
              ->addColumn('birth_date', 'date') 
              ->addColumn('street', 'string')
              ->addColumn('neighborhood', 'string')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
        $refTable = $this->table('customers');
        $refTable->addColumn('user_id', 'integer', array('signed' => 'disable'))
              ->addForeignKey('user_id', 'users', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
              ->update();        


    }
}
