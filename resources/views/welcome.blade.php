@extends('template')


@section('content')
    <!-- main content -->
    <div class="container-fluid ">
        <div class="row">

            <div class="col-xl-12 " >
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel karyawan</h6>
                  <div style="float: right;">   
                            <a class="btn btn-primary" name="btn-insert" href="{{ url('create') }}"> <i class="fas fa-plus-circle"></i> INSERT </a>
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
                            @foreach($filltable as $table)
                            <?php $no++; ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $table->nik }}</td>
                                <td>{{ $table->nama }}</td>
                                <td>{{ $table->alamat }}</td>
                                <td>{{ $table->email }}</td>
                                <td>@if($table->divisi == '1')
                                        Desain
                                    @elseif($table->divisi == '2')
                                        Programmer
                                    @elseif($table->divisi == '3')
                                        Sales
                                    @endif
                                </td>
                                <td><!-- {{ $table->foto }} -->
                                    <img src="{{ url('uploads/'.$table->foto) }}" style="width: 70px; height: 70px; object-fit: cover;" />
                                </td>
                                <td><a class="btn btn-info" name="btn-update" href="{{ url('/update', $table->id) }}"> <i class="fas fa-pen"></i></a>
                                    <a class="btn btn-danger" name="btn-delete" href="{{ url('/delete', $table->id) }}"> <i class="fas fa-trash"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br> {{ $filltable->links() }}


                    

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
        </div>
    </div>
    <!-- end main content -->
@stop

