@extends('layout.templateUpdate')


@section('content')
    <!-- main content -->
    <div class="container-fluid ">
        <div class="row">

            <div class="col-xl-12 " >
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Tabel karyawan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body col-xl-10">
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

                    <form class="p-4 mb-4" method="post" action="{{ url('/updateStore/' . $datas->id) }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="id" id="id" placeholder="Masukan ID" value="{{ $datas->id }}" hidden="true">
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukan NIK" value="{{ $datas->nik }}" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $datas->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" value="{{ $datas->alamat }}" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Masukan Email" value="{{ $datas->email }}" required>
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <select class="form-control" id="divisi" name="divisi">
                                    <option value="" hidden>Select Role</option>
                                    @foreach($divisi as $div)
                                        <option value="{{ $div->id_div }}" {{ ($datas->divisi == $div->id_div) ? 'selected' : ''}} >{{ $div->nama_div }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto</label><br>
                                <img src="{{ url('uploads/'.$datas->foto) }}" alt="{{ $datas->foto }}" width="300px" class="figure-img img-fluid rounded"/>
                                <figcaption class="figure-caption">{{ $datas->foto }}</figcaption><br>
                                <input type="file" name="foto" accept=".jpg, .png, .jpeg">
                            </div><br>
                            <button type="submit" id="button1" class="btn btn-primary"><i class="fas fa-plus-circle"></i> UPDATE </button>
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

