@extends('admin/template')
@section('content')
<!-- Basic Tables start -->
<html>

	<div class="container">
		<h1 class="titulo">Clientes</h1>
	</div>
</body>
<button class="botao">Criar novo</button>
<div class="row" id="basic-table">
    <div class="col-9">
        <div class="cardusuarios">

                <table class="datatables-basic table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
                <!--/ Basic table -->

@endsection