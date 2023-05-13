@extends('admin/template')
@section('content')
 <!-- Basic File Browser start -->
 <section id="input-file-browser">
    <div class="row">
        <div class="col-md-12">
            <div class=".submenu">
                <div class="card-header">
                    <h4 class="card-title">File input</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                            <label for="formFile" class="form-label">Simple file input</label>
                            <input class="form-control" type="file" id="formFile" />
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <label for="formFileMultiple" class="form-label">Multiple files input</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic File Browser end -->

@endsection