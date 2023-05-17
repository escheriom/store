@extends('admin/template')
@section('content')
<html>

	<div class="container">
		<h1 class="titulo">Usuários</h1>
	</div>
</body>
<button class="botao">Criar novo</button>
  <section id="basic-vertical-layouts">
  <div class="row">
      <div class="col-md-6 col-12">
          <div class="cardusuarios">
              <div class="card-header">
                  <h4 class="card-title">Alterar</h4>
                  <p class="card-text">
                    Utilize a ferramenta para Alterar um novo administrador do sistema.
                  </p>
                </div>
              <div class="card-body">
                  <form class="form form-vertical">
                      <div class="row">
                          <div class="col-12">
                              <div class="mb-1">
                                  <label class="form-label" for="first-name-icon">Nome</label>
                                  <div class="input-group input-group-merge">
                                      <span class="input-group-text"><i data-feather="user"></i></span>
                                      <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Nome" />
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="mb-1">
                                  <label class="form-label" for="email-id-icon">Email</label>
                                  <div class="input-group input-group-merge">
                                      <span class="input-group-text"><i data-feather="mail"></i></span>
                                      <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Email" />
                                  </div>
                              </div>
                          </div>
                            <div class="col-12">
                              <div class="mb-1">
                                  <label class="form-label" for="password-icon">senha</label>
                                  <div class="input-group input-group-merge">
                                      <span class="input-group-text"><i data-feather="lock"></i></span>
                                      <input type="password" id="password-icon" class="form-control" name="contact-icon" placeholder="Senha" />
                                  </div>
                              </div>
                          </div>
                          
                          <div class="col-12">
                            <div class="mb-1">
                              <button type="reset" class="btn btn-primary me-1">Alterar</button>
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