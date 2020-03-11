@extends('layout.template')


@section('content')
    <!-- main content -->
    <div class="container-fluid ">
        <div class="row">

            <div class="col-xl-12 " >
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Insert Tabel Karyawan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            Upload Validation Error
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="p-4 mb-4" method="post" action="{{ url('/store') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukan NIK" required>
                        </div>
                         <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" required>
                        </div>
                         <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group">
                            <label>Divisi</label>
                            <select class="form-control" id="divisi" name="divisi">
                                <option value="" hidden>Select Role</option>
                                @foreach($divisi as $div)
                                    <option value="{{ $div->id_div }}">{{ $div->nama_div }}</option>
                                @endforeach
                                <!-- <option value="1">Desain</option>
                                <option value="2">Programmer</option>
                                <option value="3">Sales</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Foto</label><br>
                            <input type="file" name="foto" id="foto" accept=".jpg, .png, .jpeg">
                        </div><br>
                        <button type="submit" id="button1" class="btn btn-primary"><i class="fas fa-plus-circle"></i> INSERT</button>
                        <a href="{{ url('welcome') }}" class="btn btn-danger"><i class="fas fa-times-circle"></i> CANCEL </a>
                        </div>

                    </form>
                    
                </div>
              </div>
            </div>

           
        </div>
    </div>
    <!-- end main content -->
@stop

