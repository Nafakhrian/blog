@extends('templateLanding')


@section('content')
    <!-- main content -->
    <div class="container-fluid ">
        <div class="row" >

            <!-- Karyawan -->
            <div class="col-xl-12 " style="margin: 0 auto">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="m-0 font-weight-bold text-primary">Karyawan</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    
                    <form class="p-4 mb-4" method="get" action="{{ url('/') }}">
                    @if (!empty($fillkaryawan))
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
                            @foreach($fillkaryawan as $table => $karyawan)
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
                    </table>{{ $fillkaryawan->links() }}

                    @else
                    <h2>Tidak ada data karyawan</h2>

                    @endif
                    </form>

                </div>
                <!-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        
                    </nav>
                </div> -->
              </div>
            </div>

            <!-- User -->
            <div class="col-xl-6 " style="margin: 0 auto">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="m-0 font-weight-bold text-primary">Divisi</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form class="p-4 mb-4" method="get" action="{{ url('/') }}">
                    @if (!empty($filldivisi))
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th width="50px" style="height: 40px">#</th>
                                <th width="200px">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $noDiv = 0; ?>
                            @foreach($filldivisi as $div => $divi)
                            <?php $noDiv++; ?>
                            <tr>
                                <td>{{ $noDiv }}</td>
                                <td>{{ $divi->nama_div }}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <h2>Tidak ada data divisi</h2>

                    @endif
                    </form>

                </div>
                <!-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        
                    </nav>
                </div> -->
              </div>
            </div>

            <!-- DIvisi -->
            <div class="col-xl-6 " style="margin: 0 auto">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="m-0 font-weight-bold text-primary">User</h5>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form class="p-4 mb-4" method="get" action="{{ url('/') }}">
                    @if (!empty($filluser))
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th width="50px" style="height: 40px">#</th>
                                <th >Nama</th>
                                <th >Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $noUser = 0; ?>
                            @foreach($filluser as $use => $user)
                            <?php $noUser++; ?>
                            <tr>
                                <td>{{ $noUser }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->username }}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <h2>Tidak ada data divisi</h2>

                    @endif
                    </form>

                </div>
                <!-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        
                    </nav>
                </div> -->
              </div>
            </div>
        </div>
    </div>
    <!-- end main content -->
@stop

