<?= $this->Html->css('styleedit.css')?>
<div>
    <div class="titulo">
        <h2>Editar Usuario</h2>
    </div>
    <div class="formulario-grupo">
       
        <?= $this->Form->create($user) ?>
                <fieldset>
                    
                    <?php
                        echo $this->Form->control('email',['label'=>'Correo Electronico']);
                        echo $this->Form->control('password',['label'=>'Contraseña']);
                        echo $this->Form->control('role',['label'=>'Rol','value'=>'j','value'=>'jnn']);
                        echo $this->Form->control('active',['label'=>'Activo']);
                       echo $this-> Form->input('Rol', ['options'=>['admin'=>'Administrador','users'=>'Usuario']]);
                    ?>
                </fieldset>
                <?= $this->Form->button('Editar',['class' => 'btn btn-outline-primary']) ?>    
    </div>
</div>
        
   