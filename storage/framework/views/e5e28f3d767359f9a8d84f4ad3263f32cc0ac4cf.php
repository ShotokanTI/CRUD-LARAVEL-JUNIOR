

<?php $__env->startSection('main'); ?>

<?php echo $__env->make('layouts.navbars.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="msgVazio" style="position:absolute;z-index:9999">

</div>

<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
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
                            <!--NOME-->
                            <div class="row">
                                <div class="form-group col-6">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                        </div>
                                        <input class="form-control dados" placeholder="NOME" type="text" name="nome">

                                        <button type="search" value="nome" class="btn btn-primary btn-fab btn-icon btn-round btn-search">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <div style="display:none" id="NOME" class="alert alert-danger" role="alert">
                                        Busca não encontrada : NOME vazio,tente digitar um valor.
                                    </div>
                                </div>

                                <!--CPF-->
                                <div class="form-group col-6">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                        </div>
                                        <input class="form-control dados" placeholder="CPF" type="text" name="cpf">
                                        <span class="emptyField"></span>
                                        <button type="search" class="btn btn-primary btn-fab btn-icon btn-round btn-search" value="cpf">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <div style="display:none" id="CPF" class="alert alert-danger" role="alert">
                                        Busca não encontrada : CPF vazio,tente digitar um valor.
                                    </div>
                                </div>
                                <!--DATA NASCIMENTO-->
                                <div class="form-group col-6">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                        </div>
                                        <input class="form-control dados" placeholder="Data_Nascimento" type="date" name="data_nascimento">
                                    </div>
                                </div>
                                <!--TELEFONE-->
                                <div class="form-group col-6">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="TELEFONE" type="text" name="telefone">
                                    </div>
                                </div>
                                <!--Endereco-->
                                <div class="form-group col-12">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Endereco" type="text" name="endereco">
                                    </div>
                                </div>
                                <!--Estados-->
                                <div class="form-group col-12">
                                <div style="text-align:center">Selecione seu estado</div>
                                    <select class="form-control" name="estado" id="estado">
                                        <option value="*">Selecione seu estado</option>
                                    </select>
                                </div>
                                <!--Cidades-->
                                <div id="fieldCidades" style="display:none" class="form-group col-12">
                                <div style="text-align:center">Adicione sua cidade</div>
                                    <select class="form-control" name="cidades" id="cidades">
                                        <option value="*">Selecione sua cidade</option>
                                    </select>
                                </div>
                                <!--Roles-->

                                <div class="form-group col-12">
                                    <div style="text-align:center">Adicione seus roles</div>
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Roles" type="text" name="roles">
                                        <button type="button" class="btn btn-primary" id="btnSelect">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>

                                </div>

                                <!--select roles-->
                                <div id="selectRoles" style="display:none" class="form-group col-12">

                                    <select class="form-control" name="rolesSelect[]" id="rolesSelect">
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

</div>
</div>


<?php echo $__env->make('layouts.footers.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $('#btnSelect').click(function() {
            let roles = $('input[name=roles]').val()
            $('#rolesSelect').append(`<option>${roles}</option>`)
            $('input[name=roles]').val('');
            $('#selectRoles').show()
        })
        $.ajax({
            type: 'GET',
            url: "<?php echo e(route('backEstados')); ?>",
            success: function(data) {
                // $('#estado').html(data);
                for (i in data) {
                    $('#estado').append(`<option value=${data[i]['id']}>${data[i]['sigla']}</option>`)
                }
            },

        });

        $('#estado').change(function() {

            let valorEstadoEscolhido = $(this).val()
            let url = '<?php echo e(route("backCidades", ":id")); ?>';
            url = url.replace(':id', valorEstadoEscolhido);
            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#cidades').html('')
                    for (i in data) {
                        $('#cidades').append(`<option value=${data[i]['id']}>${data[i]['cidade']}</option>`)
                    }
                },
            });
            $('#fieldCidades').show()
        })
        $('.btn-search').click(function(e) {
            e.preventDefault();

            let cnpj = $("input[placeholder=CNPJ]").val() == '' ? '' : $("input[placeholder=CNPJ]").val()
            let razaosocial = $("input[placeholder=RAZAOSOCIAL]").val() == '' ? '' : $("input[placeholder=RAZAOSOCIAL]").val()
            let nomefantasia = $("input[placeholder=NOMEFANTASIA]").val() == '' ? '' : $("input[placeholder=NOMEFANTASIA]").val()

            cnpj = cnpj.replace(/[^a-zA-Z0-9 ]/g, "")

            let param = {
                'cnpj': cnpj,
                'razao_social': razaosocial,
                'nome_fantasia': nomefantasia
            }

            let url = '<?php echo e(route("homeAjax.show", ":id")); ?>';
            let escolhido = $(this).val()
            if (escolhido) {
                url = url.replace(':id', param[escolhido]);
            }

            if (cnpj != '' || razaosocial != '' || nomefantasia != '') {

                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        escolhido: escolhido
                    },
                    success: function(data) {
                        $('#modalPesquisa').html(data);

                        $('#modalContrato').click();
                    },

                });
            }

        });



        $("button[value]").click(function() {
            let dados = {
                'cnpj': 'cnpj',
                'razao_social': 'razao_social',
                'nome_fantasia': 'nome_fantasia'
            }
            let registroNome = $(this).val()

            let registroValor = $('input[name=' + registroNome + ']').val()

            for (i in dados) {
                if (registroNome == dados[i] && registroValor == '') {
                    $('#' + dados[i]).show()
                    $("#" + registroNome + "_search").remove()
                }
            }
        })

        $('input[name]').keypress(function(e) {
            let dados = {
                'cnpj': 'cnpj',
                'razao_social': 'razao_social',
                'nome_fantasia': 'nome_fantasia'
            }
            let registro = $(this).attr('name')
            let valorRegistro = $(this).val().length
            for (i in dados) {
                if (registro == dados[i]) {

                    if (valorRegistro === 0 || isNaN(valorRegistro)) {
                        $('input[name=' + registro + ']').css('color', '')

                        $("#" + registro + "_search").remove()

                        $('#' + dados[i]).hide()

                    }

                }
            }
        })

        $('button[type=button]').click(function() {
            let btnValue = $(this).val()
            if (btnValue == "Alterar") {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo e(route('homeAjax/exibir')); ?>",
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>"
                    },
                    success: function(data) {
                        $('#modalEdit').html(data);

                        $('#editModal').click();
                    },

                });


            } else if (btnValue == "Deletar") {



                $.ajax({
                    type: 'POST',
                    url: "<?php echo e(route('homeAjax/exibirDelete')); ?>",
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>"
                    },
                    success: function(data) {
                        $('#modalPesquisa').html(data);

                        $('#modalContrato').click();
                    },

                });

            }

            if (btnValue == 'Limpar') {
                $('#formContrato').each(function() {
                    this.reset();
                });
            }
        })
    })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Matheus\Desktop\LaravelSupera\SuperaTeste\resources\views/home.blade.php ENDPATH**/ ?>