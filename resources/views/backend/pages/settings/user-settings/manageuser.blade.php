@extends('backend.layouts.admin')
 
 @section('title','Manage User')

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
            <a class="btn btn-primary" href="{{ url('add-manage-user') }}" role="button">Tambah</a>
            
            {{-- end modals --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- /.content --> 
    <div class="container-fluid">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">User Name</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Thornton</td>
            <td>Thornton</td>
            <td>Thornton</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>the Bird</td>
            <td>the Bird</td>
            <td>the Bird</td>
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