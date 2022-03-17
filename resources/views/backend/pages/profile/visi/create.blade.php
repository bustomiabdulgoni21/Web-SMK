@extends('backend.layouts.admin')

@section('title', 'Add Visi')

@push('after-style')
  <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ asset('templates/backend') }}/plugins/fontawesome-free/css/all.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('templates/backend') }}/dist/css/adminlte.min.css">
 <!-- summernote -->
 <link rel="stylesheet" href="{{ asset('templates/backend') }}/plugins/summernote/summernote-bs4.min.css">
 <!-- CodeMirror -->
 <link rel="stylesheet" href="{{ asset('templates/backend') }}/plugins/codemirror/codemirror.css">
 <link rel="stylesheet" href="{{ asset('templates/backend') }}/plugins/codemirror/theme/monokai.css">
 <!-- SimpleMDE -->
 <link rel="stylesheet" href="{{ asset('templates/backend') }}/plugins/simplemde/simplemde.min.css">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
            <a class="btn btn-primary" href="{{ url('visi') }}" role="button">Kembali</a>
            
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Visi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    {{--  --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
            </div>
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Visi</h3>
                </div>
                <div class="card-body">
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        {{-- <label for="inputName" class="col-sm-2 col-form-label">Visi</label> --}}
                        {{-- <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="First Name">
                        </div> --}}

                        <div class="modal-body">
                            <section class="content">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card card-outline card-info">
                                    <div class="card-body">
                                      <textarea id="summernote">
                                        
                                      </textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            
                          </div>

                      </div>
                      
                    </form>
                  </div>
                  <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
      </section>
</div>

  <!-- /.content -->
@endsection

@push('after-script')
    <!-- jQuery -->
<script src="{{ asset('templates/backend') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templates/backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/backend') }}/dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('templates/backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="{{ asset('templates/backend') }}/plugins/codemirror/codemirror.js"></script>
<script src="{{ asset('templates/backend') }}/plugins/codemirror/mode/css/css.js"></script>
<script src="{{ asset('templates/backend') }}/plugins/codemirror/mode/xml/xml.js"></script>
<script src="{{ asset('templates/backend') }}/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('templates/backend') }}/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
 $(function () {
   // Summernote
   $('#summernote').summernote()

   // CodeMirror
   CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
     mode: "htmlmixed",
     theme: "monokai"
   });
 })
</script>
@endpush
    