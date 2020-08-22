<!-- Button trigger modal -->
<button hidden id="editModal" type="button" class="btn btn-primary modal-lg" data-toggle="modal" data-target="#ModalEdit">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h1 class="modal-title" id="exampleModalLabel">Edite seus registros aqui</h1>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php if(isset($contrato)): ?>
            <?php $__currentLoopData = $contrato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form method="post" action="<?php echo e(route('homeAjax/updateTable')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <div class="modal-body">

                    <table class="table-responsive table align-items-center">

                        <tr>
                            <th>ID</th>
                            <th>CNPJ</th>
                            <th>RAZAO_SOCIAL</th>
                            <th>NOME_FANTASIA</th>
                            <th>EMAIL</th>
                            <th>in_User</th>
                            <th>LOGOMARCA</th>
                            <th>STATUS</th>
                        </tr>

                        <tbody class="list">
               

                            <td><input style="display:none" name="id[]" value="<?php echo e($item->id); ?>" /><?php echo e($item->id); ?></td>
                            <td><input name="cnpj[]" value="<?php echo e($item->cnpj); ?>" /></td>
                            <td><input name="razao_social[]" value="<?php echo e($item->razao_social); ?>" /></td>
                            <td><input name="nome_fantasia[]" value="<?php echo e($item->nome_fantasia); ?>" /></td>
                            <td><input name="email[]" value="<?php echo e($item->email); ?>" /></td>
                            <td><input name="in_User[]" value="<?php echo e($item->in_User); ?>" /></td>
                            <td><?php echo e($item->logomarca); ?></td>
                            <td><input name="status[]" value="<?php echo e($item->status); ?>" /></td>


                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </div>
        </form>
    </div>
</div><?php /**PATH C:\Users\Matheus\Desktop\LaravelSupera\SuperaTeste\resources\views/components/edit.blade.php ENDPATH**/ ?>