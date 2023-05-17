@extends('admin/template')
@section('content')
<html>

	<div class="container">
		<h1 class="titulo">Pedidos - listagem</h1>
	</div>
</body>
<section id="basic-vertical-layouts">
  <div class="row">
      <div class="col-md-6 col-12">
          <div class="cardusuarios">
        
        
            <div class="input-group">
                <button class="btn btn-outline-primary" type="button">
                    <i data-feather="search"></i>
                </button>
                <input type="text" class="form-control" placeholder="Buscar Pedidos!" aria-label="Amount" />
                <button class="btn btn-outline-primary" type="button">Buscar Pedidos!</button>
        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">CPF / CNPJ</th>
                                        <th scope="col">Fone</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Estado</th>


                                        <tr>
                                        
                                        <td>Ronald Frest</td>
                                        <td>Ronald Frest</td>
                                        <td>Ronald Frest</td>
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


@endsection