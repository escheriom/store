@extends('admin/template')
@section('content')
<html>

	<div class="container">
		<h1 class="titulo">Categorias - Editar</h1>
	</div>
</body>
<button class="botao">Criar Categorias</button>
  <section id="basic-vertical-layouts">
  <div class="row">
      <div class="col-md-6 col-12">
          <div class="cardusuarios">
              <div class="card-header">
                  <h4 class="card-title">EDITAR CATEGORIA</h4>
                </div>
              <div class="card-body">
                  <form class="form form-vertical">
                      <div class="row">
                          <div class="col-12">
                              <div class="mb-1">
                                  <label class="form-label1" for="first-name-icon">Nome da Categoria</label>
                                  <div class="input-group input-group-merge">
                                      
                                      <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Nome da Categoria" />
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="mb-1">
                                  <label class="form-label1" for="email-id-icon">Slug</label>
                                  <div class="input-group input-group-merge">
                                      
                                      <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Slug" />
                                  </div>
                              </div>
                          <div class="col-12">
                              <button type="reset" class="btn btn-primary me-1">Salvar</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

</div>
</section>
<!-- Basic Vertical form layout section end -


@endsection