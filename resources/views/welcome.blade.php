@extends('template')


@section('content')
    <!-- main content -->
    <div class="container-fluid ">
        <div class="row">

            <!-- Karyawan -->
            <div class="col-xl-12 " >
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Karyawan</h6>
                  <div style="float: right;">   
                            <a class="btn btn-primary" name="btn-insert" href="{{ url('create') }}"> <i class="fas fa-plus-circle"></i> &nbsp; ADD KARYAWAN </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    
                    <form class="p-4 mb-4" method="get" action="{{ url('search') }}">
                        <table style="margin-bottom: 10px">
                            <tr>
                                <td><button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button></td>
                                <td><input type="text" class="form-control" name="srch" placeholder="Search..."></td>
                            </tr>
                        </table>
                    
                    @if (!empty($filltable))
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th width="50px" style="height: 40px">#</th>
                                <th width="90px">NIK</th>
                                <th width="180px">Nama</th>
                                <th width="130px">Alamat</th>
                                <th width="180px">Email</th>
                                <th width="120px">Divisi</th>
                                <th width="100px">Foto</th>
                                <th width="110px">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            @foreach($filltable as $table => $karyawan)
                            <?php $no++; ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $karyawan->nik }}</td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->alamat }}</td>
                                <td>{{ $karyawan->email }}</td>
                                <td>    
                                    @foreach($divisi as $div)
                                        @if($div->id_div == $karyawan->divisi)
                                            {{ $div->nama_div }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <img src="{{ url('uploads/'.$karyawan->foto) }}" style="width: 70px; height: 70px; object-fit: cover;" />
                                </td>
                                <td>
                                    <a class="btn btn-info" name="btn-update" href="{{ url('/update', $karyawan->id) }}"> <i class="fas fa-pen"></i></a>
                                    <a class="btn btn-danger" name="btn-delete" href="{{ url('/delete', $karyawan->id) }}" onclick="return confirm('Yakin ingin menghapus data karyawan {{ $karyawan->nama}}?')"> <i class="fas fa-trash"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>{{ $filltable->links() }}


                    

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

            <!-- Divisi -->
            <div class="col-xl-12 " >
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Divisi</h6>
                  <div style="float: right;">   
                    <span class="btn-insert-div">
                        <a class="btn btn-primary" name="btn-insert" href="{{ url('createDiv') }}"> <i class="fas fa-plus-circle"></i> &nbsp; ADD DIVISI </a>
                    </span>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body col-xl-4">
                    <span>Max : 5 Divisi</span>
                    <form class="p-4 mb-4" method="get" action="{{ url('searchDiv') }}">
                    
                    @if (!empty($filltable))
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th width="50px" style="height: 40px">#</th>
                                <th width="180px">Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $noDiv = 0; ?>
                            @foreach($divisi as $div => $divi)
                            <?php $noDiv++; ?>
                            <tr>
                                <td>{{ $noDiv }}</td>
                                <td>{{ $divi->nama_div }}</td>
                                <td>
                                    <a class="btn btn-info" name="btn-update" href="{{ url('/updateDiv', $divi->id_div) }}"> <i class="fas fa-pen"></i></a>
                                    <a class="btn btn-danger" name="btn-delete" href="{{ url('/deleteDiv', $divi->id_div) }}" onclick="return confirm('Yakin ingin menghapus data divisi {{ $divi->nama_div}}?')"> <i class="fas fa-trash"></i></a></td>
                            </tr>
                            <?php 
                                if ($noDiv >= 5) {
                                    ?>
                                        <style type="text/css">
                                            .btn-insert-div {
                                              cursor: not-allowed;
                                              opacity: 0.5;
                                            }
                                            .btn-insert-div > a {
                                              color: currentColor;
                                              display: inline-block;  /* For IE11/ MS Edge bug */
                                              pointer-events: none;
                                              text-decoration: none;
                                            }
                                        </style>
                                    <?php
                                }

                            ?>

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

