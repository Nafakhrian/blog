@extends('template')


@section('content')
    <!-- main content -->
    <div class="container-fluid ">
        <div class="row">

            <div class="col-xl-12 " >
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Insert Tabel karyawan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    
                    <form class="p-4 mb-4" method="post" action="{{ url('store') }}" autocomplete="off">
                    @csrf
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="task" id="task" placeholder="Masukan NIK">
                        </div>
                         <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="kode" id="kode" placeholder="Masukan Nama">
                        </div>
                         <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukan Alamat">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="Masukan Email">
                        </div>

                        <button type="submit" id="button1" class="btn btn-primary"><i class="fas fa-plus-circle"></i> INSERT</button>
                        </div>

                    </form>
                    
                </div>
              </div>
            </div>

           
            <div class="col-md-6" id="cardSection">

            </div>
        </div>
    </div>
    <!-- end main content -->
@stop

