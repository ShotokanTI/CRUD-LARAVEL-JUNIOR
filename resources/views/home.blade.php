@extends('base')

@section('main')

@include('layouts.navbars.navbar')
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
                    <x-header />
                    <div class="container">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert">

                            <ul style="list-style: none;">
                                <li style="color:red">{{ $error }}</li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <script>
                        if ('{{session("status")}}') {
                            alert('{{session("status")}}')
                        }
                    </script>

                    <div class='card-body px-lg-3 py-lg-1'>

                        <form id="formContrato" method="post" action="{{ route('homeAjax.store') }}" enctype="multipart/form-data">
                            @csrf

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
                            <x-panel />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@include('layouts.footers.guest')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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

        let url = '{{ route("homeAjax.show", ":id") }}';
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
        console.log(valorRegistro)
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
                url: "{{ route('homeAjax/exibir')}}",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    $('#modalEdit').html(data);

                    $('#editModal').click();
                },

            });


        } else if (btnValue == "Deletar") {



            $.ajax({
                type: 'POST',
                url: "{{ route('homeAjax/exibirDelete')}}",
                data: {
                    _token: "{{ csrf_token() }}"
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
</script>

@endsection