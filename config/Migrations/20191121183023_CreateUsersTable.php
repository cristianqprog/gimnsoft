<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('email', 'string', array('limit' => 100))
              ->addColumn('password', 'string')
              ->addColumn('active', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
         $refTable = $this->table('users');
         $refTable->addColumn('rol_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('rol_id', 'roles', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();      
    }
}