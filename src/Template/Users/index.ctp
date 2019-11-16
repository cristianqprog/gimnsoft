    <div class="table-responsive">
            <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                  
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->active) ?></td>
                   
                    <td class="actions">
                        <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $user->id], ['class' => 'btn btn-primary', 'escape'=>false]) ?>
                        <?= $this->Html->link('<i class="fas fa-user-edit"></i>', ['action' => 'edit', $user->id], ['class' => 'btn btn-success', 'escape'=>false]) ?> 
                         <?= $this->Form->postLink('<i class="fas fa-trash-alt"></i>', ['action' => 'delete', $user->id], ['confirm' => 'Eliminar usuario ?', 'class' => 'btn btn-danger', 'escape'=>false]) ?> 
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
        </nav>
        </div>
    </div>    
    
<style type="text/css">
    
    a{
        color: white;
    }
    .table-dark th, .table-dark td, .table-dark thead th {
    border-color: #000000;
}
</style>