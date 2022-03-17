@extends('layouts.app')

@section('title','Formulir PSB')
    

@section('content')
<section id="join" class="join">
    <div class="container">
    
      <div class="section-header">
        <h2 class="mt-5">Formulir Pendaftaran Siswa</h2>
      </div>
    </div>
    

    {{--  form  --}}
    <div class="section">
    <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                              <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap Siswa</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control">
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control">
                                </div>
                              </div>
                              <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                      Laki-laki
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                      Perempuan
                                    </label>
                                  </div>
                                </div>
                              </fieldset>
                              <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                              </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Foto Upload</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="file" id="formFile">
                                </div>
                              </div>
                            <div class="row mb-3">
                              
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                            </div>
                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  end form  --}}

</section>
@endsection


