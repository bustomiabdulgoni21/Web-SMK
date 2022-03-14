@extends('layouts.app')

@section('title','Formulir PSB')
    
@section('content')
<section id="join" class="join">
    <div class="container">
    
      <div class="section-header">
        <h2 class="mt-5">Formulir PSB</h2>
      </div>
      <div class="container-fluid">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Siswa Lengkap</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tempat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="date">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Pilih Jenis Kelamin ....</option>
                <option>Pria</option>
                <option>Wanita</option>
              </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Jurusan</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Pilih ....</option>
              <option>Teknik Pemesinan (TPM)</option>
              <option>Teknik Kendaraan Ringan (TKR)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Pendidikan Terakhir</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Pilih Pendidikan Terakhir ..</option>
                <option>SMP - Sekolah Menengah Pertama</option>
                <option>SD - Sekolah Dasar</option>
              </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Pilih Agama ....</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Konghuchu</option>
              </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Foto</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upload Foto">
        </div>
        <br>
        <button type="button" class="btn btn-primary">Kirim</button>
    </div>
    
    </div>
</section>
@endsection