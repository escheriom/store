@extends('admin/template')
@section('content')
<html>

	<div class="container">
		<h1 class="titulo">Cadastrar Clientes</h1>
	</div>
</body>
 <section id="basic-vertical-layouts">
  <div class="row">
      <div class="col-md-6 col-12">
          <div class="cardusuarios">
              <div class="card-body">
                  <form class="form form-vertical">
                      <div class="row">
                            <div class="col-12">
                              <div class="mb-1">
                                  <label class="form-label1" for="first-name-icon">Nome</label>
                                  <div class="input-group input-group-merge">
                                <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Nome" />
                                  </div>
                              </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label1" for="first-name-icon">CPF-CNPJ</label>
                                    <div class="input-group input-group-merge">
                                  <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="CPF-CNPJ" />
                                    </div>
                                </div>
                              </div>

                              <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label1" for="email-id-icon">Email</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Email" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                <label class="form-label1" for="modern-address">CEP</label>
                                <input type="text" id="modern-address" class="form-control" placeholder="98  Borough bridge Road, Birmingham" />
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label1" for="first-name-icon">Endereço</label>
                                    <div class="input-group input-group-merge">
                                  <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Endereço" />
                                    </div>
                                </div>
                              </div>

                               <div class="col-md-6 col-12">
                                             
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label1" for="last-name-column">Complemento</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Complemento" name="lname-column" />
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label1" for="last-name-column">Número</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Número" name="lname-column" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label1" for="last-name-column">Cidade</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Cidade" name="lname-column" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label1" for="last-name-column">Estado</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Estado" name="lname-column" />
                                                </div>
                                            </div>
                                <div class="col-12">
                                <div class="mb-1">

                                    <label class="form-label1" for="first-name-icon">Login</label>
                                    <div class="input-group input-group-merge">
                                  <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="login" />
                                    </div>
                                </div>
                              </div>

                              <div class="mb-1">
                                <label class="form-label1" for="password-icon">senha</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="lock"></i></span>
                                    <input type="password" id="password-icon" class="form-control" name="contact-icon" placeholder="Senha" />
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1">Salvar</button>
                            </div>
@endsection