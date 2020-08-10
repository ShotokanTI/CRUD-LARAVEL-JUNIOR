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
            @if(isset($contrato))
            @foreach($contrato as $item)
            <form method="post" action="{{route('homeAjax/updateTable')}}" enctype="multipart/form-data">
            @csrf
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
               

                            <td><input style="display:none" name="id[]" value="{{$item->id}}" />{{$item->id}}</td>
                            <td><input name="cnpj[]" value="{{$item->cnpj}}" /></td>
                            <td><input name="razao_social[]" value="{{$item->razao_social}}" /></td>
                            <td><input name="nome_fantasia[]" value="{{$item->nome_fantasia}}" /></td>
                            <td><input name="email[]" value="{{$item->email}}" /></td>
                            <td><input name="in_User[]" value="{{$item->in_User}}" /></td>
                            <td>{{$item->logomarca}}</td>
                            <td><input name="status[]" value="{{$item->status}}" /></td>


                        </tbody>
                        @endforeach
                        @endif
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </div>
        </form>
    </div>
</div>