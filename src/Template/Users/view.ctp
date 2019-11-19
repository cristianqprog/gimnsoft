<?= $this->Html->css('styleview.css')?>
<!-- <div class="tarjeta"> -->
    <div class="titulo ">
        <h2>Usuario <?= h($user->id) ?></h2>
    </div>
    <div class="info">
        
        <i class="icon far fa-envelope"></i>
        <div class="email"> <?= h($user->email) ?></div>
        <i class=" pass fas fa-key"></i>
        <div class="password"><?= h($user->password) ?></div>
        <div><i class="rol fas fa-user-tag"></i></div>
        <div class="role"><?= h($user->role) ?></div>
        <div> <i class=" state fas fa-toggle-on"></i></div>
        <div class="estado"><?= $user->active ? __('Yes') : __('No'); ?></div>    
    </div> 
<!-- </div> -->    