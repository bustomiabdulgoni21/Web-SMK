 @extends('backend.layouts.admin')
 
 @section('title','Visi')

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
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Visi</h1> --}}
            {{-- modals --}}
             <a class="btn btn-primary" href="{{ url('/visi-create') }}" role="button">Tambah</a>
            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Visi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <section class="content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card card-outline card-info">
                            
                            <div class="card-body">
                              <textarea id="summernote">
                                <strong>Ketikan Visi SMK Ash Shoheh 1</strong>
                              </textarea>
                            </div>
                          </div>
                        </div>
                        <!-- /.col-->
                      </div>
                      <!-- ./row -->
                      
                      <!-- ./row -->
                    </section>
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Visi Sekolah</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- end modals --}}
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
    <!-- /.content-header -->
    <div class="container-fluid">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Visi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>
              <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>
              <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>
              <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
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
 