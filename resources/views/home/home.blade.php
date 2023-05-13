@extends('admin/template')
@section('content')
<style>
	.container {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		height: 100vh;
	}

	.barra-wrapper {
		display: flex;
		align-items: center;
		width: 80%;
		max-width: 800px;
		margin-bottom: 80px;
        
	}

	.barra {
		display: flex;
		align-items: right;
		height: 50px;
		background-color: #ccc;
		position: relative;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
		flex: 1;
	}

	.barra-titulo {
        font-weight: bold;
        font-size: 16px;
        color: #333;
        margin-right: 10px;
        margin-left: auto;
    }
        


	.barra-valor {
		font-size: 14px;
		color: #fff;
		margin-right: 10px;
	}

	.barra:nth-child(1) {
		background-color: #FFB6C1;
	}

	.barra:nth-child(2) {
		background-color: #87CEFA;
	}

	.barra:nth-child(3) {
		background-color: #98FB98;
	}

	.barra:nth-child(4) {
		background-color: #FFA07A;
	}
</style>

<div class="container">
	<div class="barra-wrapper">
		<div class="barra-titulo">Número de produtos cadastrados</div>
		<div class="barra">
			<div class="barra-valor">50</div>
		</div>
	</div>

	<div class="barra-wrapper">
		<div class="barra-titulo">Número de vendas no mês</div>
		<div class="barra">
			<div class="barra-valor">30</div>
		</div>
	</div>

	<div class="barra-wrapper">
		<div class="barra-titulo">Número de clientes</div>
		<div class="barra">
			<div class="barra-valor">100</div>
		</div>
	</div>

	<div class="barra-wrapper">
		<div class="barra-titulo">Valor vendido no mês</div>
		<div class="barra">
			<div class="barra-valor">$500</div>
		</div>
	</div>
</div>

@endsection