

        <div class="col">

                <!-- Table -->
                    <div class="col-lg-6 col-md-8">
                        <div class="card bg-secondary shadow border-0">
                            <div>
                                <div id="modalPesquisa">
                                </div>
                                <div id="modalEdit">

                                </div>
                                 <?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, []); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                <div class="container">
                                    <?php if($errors->any()): ?>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="alert">

                                        <ul style="list-style: none;">
                                            <li style="color:red"><?php echo e($error); ?></li>
                                        </ul>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php endif; ?>
                                <script>
                                    if ('<?php echo e(session("status")); ?>') {
                                        alert('<?php echo e(session("status")); ?>')
                                    }
                                </script>

                                <div class='card-body px-lg-3 py-lg-1'>

                                    <form id="formContrato" method="post" action="<?php echo e(route('homeAjax.store')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <input class="form-control dados" placeholder="CNPJ" type="text" name="cnpj">

                                                <button type="search" value="cnpj" class="btn btn-primary btn-fab btn-icon btn-round btn-search">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                            <div style="display:none" id="cnpj" class="alert alert-danger" role="alert">
                                                Busca não encontrada : CNPJ vazio,tente digitar um valor.
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <input class="form-control dados" placeholder="RAZAOSOCIAL" type="text" name="razao_social">
                                                <span class="emptyField"></span>
                                                <button type="search" class="btn btn-primary btn-fab btn-icon btn-round btn-search" value="razao_social">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                            <div style="display:none" id="razao_social" class="alert alert-danger" role="alert">
                                                Busca não encontrada : Razao social vazio,tente digitar um valor.
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>
                                                <input class="form-control dados" placeholder="NOMEFANTASIA" type="text" name="nome_fantasia">
                                                <button type="search" value="nome_fantasia" class="btn btn-primary btn-fab btn-icon btn-round btn-search">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                            <div style="display:none" id="nome_fantasia" class="alert alert-danger" role="alert">
                                                Busca não encontrada : Nome fantasia vazio,tente digitar um valor.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="EMAIL" type="text" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="in_User" type="text" name="in_User">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-cloud-upload-96"></i></span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file" name="logomarca" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select class="custom-select" name="status" id="status">
                                                <option value="0">0 - Ativado</option>
                                                <option value="1">1 - Desativado</option>
                                            </select>
                                        </div>
                                         <?php if (isset($component)) { $__componentOriginal2cfb2727414d28f1d2ba20b22e14c0766904fa52 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Panel::class, []); ?>
<?php $component->withName('panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal2cfb2727414d28f1d2ba20b22e14c0766904fa52)): ?>
<?php $component = $__componentOriginal2cfb2727414d28f1d2ba20b22e14c0766904fa52; ?>
<?php unset($__componentOriginal2cfb2727414d28f1d2ba20b22e14c0766904fa52); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

 
    <?php /**PATH C:\Users\Matheus\Desktop\LaravelSupera\SuperaTeste\resources\views/components/form-unidade.blade.php ENDPATH**/ ?>