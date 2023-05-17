@extends('admin/template')
@section('content')
<html>

	<div class="container">
		<h1 class="titulo">Categorias</h1>
	</div>
</body>
<button class="botao">Criar categorias</button>
<div class="row" id="basic-table">
    <div class="col-9">
        <div class="cardusuarios">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome da categoria</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Ações</th> 
                            <tr>
                            
                            <td>Ronald Frest</td>
                            <td>intelbras</td>
                            <td>
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <i data-feather="edit-2" class="me-50"></i>
                                            <span>Edit</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i data-feather="trash" class="me-50"></i>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Basic Tables end -->

@endsection