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
                        echo $this-> Form->input('role', ['options'=>['admin'=>'Administrador','users'=>'Usuario'],'label'=>'Rol']);
                        echo $this->Form->control('active',['label'=>'Activo']);
                       
                    ?>
                </fieldset>
                <?= $this->Form->button('Editar',['class' => 'btn btn-outline-primary']) ?>   
                <?= $this->Form->end() ?> 
    </div>
</div>
        
   