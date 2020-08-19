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
                    @foreach($result as $item)
                    <tbody class="list">


                        <td>
                            <form action="{{ route('homeAjax.destroy', $item->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->cnpj}}</td>
                        <td>{{$item->razao_social}}</td>
                        <td>{{$item->nome_fantasia}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->in_User}}</td>
                        <td>{{$item->logomarca}}</td>
                        <td>{{$item->status}}</td>



                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>