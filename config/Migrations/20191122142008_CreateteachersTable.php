<?php
use Migrations\AbstractMigration;

class CreateteachersTable extends AbstractMigration
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
        $table = $this->table('teachers');
        $table->addColumn('name', 'string')
              ->addColumn('last_name', 'string') 
              ->addColumn('birth_date', 'date') 
              ->addColumn('matricula', 'string')
              ->addColumn('street', 'string')
              ->addColumn('neighborhood', 'string')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }
}
