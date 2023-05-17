@extends('admin/template')
@section('content')
<html>






	<div class="container">
		<h1 class="titulo">Cadastrar</h1>
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
                                  <label class="form-label1" for="first-name-icon">Titulo do site</label>
                                  <div class="input-group input-group-merge">
                                <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Titulo do site" />
                                  </div>
                              </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                            <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                <label for="formFile" class="form-label1">Logo</label>
                                <input class="form-control" type="file" id="formFile" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                            <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                <label for="formFile" class="form-label1">Favicon</label>
                                <input class="form-control" type="file" id="formFile" />
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label class="form-label1" for="phone-number">Telefone</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">BR (+55)</span>
                                    <input type="text" class="form-control phone-number-mask" placeholder=" XX 9xxxx xxxx" id="phone-number" />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label class="form-label1" for="phone-number">Whasapp</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">BR (+55)</span>
                                    <input type="text" class="form-control phone-number-mask" placeholder=" XX 9xxxx xxxx" id="phone-number" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label1" for="first-name-icon">Endereço</label>
                                    <div class="input-group input-group-merge">
                                  <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Endereço" />
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
                                    <label class="form-label1" for="email-id-icon">Email do formulario</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Email do formulario" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                 <section class="basic-textarea">
                                    <div class="row"><div class="col-12">
                                            <div class="mb-1">
                                                <label class="form-label1" for="exampleFormControlTextarea1">Códigos para header</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Códigos para header"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12">
                                <div class="mb-1">
                                 <section class="basic-textarea">
                                    <div class="row"><div class="col-12">
                                            <div class="mb-1">
                                                <label class="form-label1" for="exampleFormControlTextarea1">Endereço Google Maps</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Códigos para header"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mb-1">
                                <label class="form-label1" for="modern-address">CEP de Origem - Calculo Sedex</label>
                                <input type="text" id="modern-address" class="form-control" placeholder="98  Borough bridge Road, Birmingham" />
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label1" for="email-id-icon">E-mail Mercado pago
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="E-mail Mercado pago" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label1" for="first-name-icon">Descrição</label>
                                    <div class="input-group input-group-merge">
                                  <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Descrição" />
                                    </div>
                                </div>
                              </div>

                              <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label1" for="first-name-icon">Keywords</label>
                                    <div class="input-group input-group-merge">
                                  <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Keywords" />
                                    </div>
                                </div>
                              </div>
@endsection