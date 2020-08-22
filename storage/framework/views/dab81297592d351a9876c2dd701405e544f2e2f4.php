<!-- Button trigger modal -->
<button hidden id="modalContrato" type="button" class="btn btn-primary modal-lg" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody class="list">

                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->cnpj); ?></td>
                        <td><?php echo e($item->razao_social); ?></td>
                        <td><?php echo e($item->nome_fantasia); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->in_User); ?></td>
                        <td><?php echo e($item->logomarca); ?></td>
                        <td><?php echo e($item->status); ?></td>



                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\Matheus\Desktop\LaravelSupera\SuperaTeste\resources\views/components/search.blade.php ENDPATH**/ ?>