@extends('admin/template')
@section('content')
<html>

	<div class="container">
		<h1 class="titulo">Banners</h1>
	</div>
</body>
<button class="botao">Criar novo banner</button>
  <section id="basic-vertical-layouts">
  <div class="row">
      <div class="col-md-6 col-12">
          <div class="cardusuarios">
              <div class="card-body">
                  <form class="form form-vertical">
                      <div class="row">
                          <div class="col-12">
                              <div class="mb-1">
                                  <label class="form-label1" for="first-name-icon">Título</label>
                                  <div class="input-group input-group-merge">
                                      <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Título" />
                                  </div>
                              </div>

                              <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label1" for="first-name-icon">Subtítulo (Opcional)</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Subtítulo (Opcional)" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label1" for="first-name-icon">Texto do botão</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Texto do botão" />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label1" for="first-name-icon">Link do botão</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Link do botão" />
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label1" for="basicSelect">Tipo de link</label>
                                        
                                            <select class="form-select" id="basicSelect">
                                                
                                                <option>Interno</option>
                                                 <option>Externo</option>
                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label1" for="basicSelect">Status</label>
                                             <select class="form-select" id="basicSelect">
                                                <option>Publicado</option>
                                                 <option>Desabilitado</option>
                                            </select>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                                <input class="form-control" type="file" id="formFile" />
                                            </div>

                                           
    
                                             <div>
                                                <button type="submit" class="btn btn-primary me-1">Salvar</button>
                                            </div>


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