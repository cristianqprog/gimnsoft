<?php
use Migrations\AbstractMigration;

class CreateRolesTable extends AbstractMigration
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
        $roles =  $this->table('roles');
        $roles->addColumn('rol_description','string',['limit'=>30])
             ->create();

       
    }
}
