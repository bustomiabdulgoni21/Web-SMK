@extends('backend.layouts.admin')
 
 @section('title','Staf SMK')

{{-- @push('after-style')
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
@endpush --}}
     
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Staf SMK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NUPTK</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jabatan</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Pilih Jabatan...</option>
                        <option value="1">Kepala Sekolah</option>
                        <option value="2">Waka. Kurikulum</option>
                        <option value="3">Waka. Kesiswaan</option>
                        <option value="4">Waka. Hubin</option>
                        <option value="5">Waka. Humas</option>
                        <option value="6">Ka. Prog Pemesinan</option>
                        <option value="7">Ka. Prog Kendaraan Ringan</option>
                        <option value="8">Ka. Tata Usaha</option>
                        <option value="9">Bendahara</option>
                        <option value="10">Staf Tata Usaha</option>
                        <option value="11">Juru Bengkel TPM</option>
                        <option value="12">Juru Bengkel TKR</option>
                        <option value="13">Pembina OSIS</option>
                        <option value="14">Pembina ROHIS</option>
                        <option value="15">Pembina PRAMUKA</option>
                        <option value="16">Pembina Olahraga</option>
                        <option value="17">Koordinator BK/ BP</option>
                    </select>
                    {{-- <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form> --}}
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Alamat</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">No. Telp</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                    {{-- upload foto --}}
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Foto</label>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                          </div>
                          <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                      </div>
                      </form>
                </div>
                {{-- end upload foto --}}

                {{-- <div class="modal-body"> --}}
                    
                </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            {{-- end modals --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Staf SMK</li>
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
            <th scope="col">NUPTK</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Email</th>
            <th scope="col">Foto</th>
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