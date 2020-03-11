@extends('layout.templateLanding')


@section('content')
    <!-- main content -->
    <div class="container-fluid ">
        <div class="row" >

            <!-- Karyawan -->
            <div class="col-xl-8" style="margin: 0 auto">
                <div class="col-xl-12 " >
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <a href="#collapseKaryawanCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseKaryawanCard">
                        <h5 class="m-0 font-weight-bold text-primary">List Karyawan</h5>
                    </a>
                    <!-- Card Body -->
                    <div class="collapse show" id="collapseKaryawanCard">
                    <div class="card-body">
                        @if (!empty($karyawan))
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th width="auto" style="height: 40px">#</th>
                                <th width="auto">NIK</th>
                                <th width="auto">Nama</th>
                                <th width="auto">Alamat</th>
                                <th width="auto">Email</th>
                                <th width="auto">Divisi</th>
                                <th width="auto">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            @foreach($karyawan as $table => $karyawan)
                            <?php $no++; ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $karyawan->nik }}</td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->alamat }}</td>
                                <td>{{ $karyawan->email }}</td>
                                <td>{{ $karyawan->Divisi->nama_div }}
                                </td>
                                <td>
                                    <img src="{{ url('uploads/'.$karyawan->foto) }}" style="width: 70px; height: 70px; object-fit: cover;" />
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    

                    @else
                    <h2>Tidak ada data karyawan</h2>

                    @endif
                    </div>
                    </div>
                    <!-- <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            
                        </nav>
                    </div> -->
                  </div>
                </div>

            </div>


        </div>
    </div>
    <!-- end main content -->
@stop

