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
                  <div class="col-md-2">
                      <fieldset>
                        <div id="box2" style="margin-left: 80px">
                            <a class="btn btn-primary" name="btn-insert" href="{{ url('create') }}"> Insert Baru</a>
                        </div>
                      </fieldset>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    
                    <form class="p-4 mb-4" id="form" autocomplete="off">
                    
                    @if (!empty($filltable))
                    <table align="center" border="1">
                        <thead>
                            <tr style="text-align: center;">
                                <th width="80px" style="height: 40px">ID</th>
                                <th width="150px">NIK</th>
                                <th width="200px">Nama</th>
                                <th width="200px">Alamat</th>
                                <th width="250px">Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($filltable as $table)
                            <tr style="text-align: center;">
                                <td>{{ $table->id }}</td>
                                <td>{{ $table->nik }}</td>
                                <td>{{ $table->nama }}</td>
                                <td>{{ $table->alamat }}</td>
                                <td>{{ $table->email }}</td>
                                <td><a class="btn btn-info" name="btn-update" style="margin: 5px; margin-right: 0px; color: #fff" href="{{ url('/update', $table->id) }}"> Update</a>
                                    <a class="btn btn-danger" name="btn-delete" style="margin: 5px; margin-left: 0px" href="{{ url('/delete', $table->id) }}"> Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <h2>Tidak ada data karyawan</h2>

                    @endif

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

