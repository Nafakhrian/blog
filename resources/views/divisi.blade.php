@extends('template')


@section('content')
    <!-- main content -->
    <div class="container-fluid ">
        <div class="row">

            <!-- Divisi -->
            <div class="col-xl-12 " >
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Divisi</h6>
                  <div style="float: right;">   
                    <span>
                        <a class="btn btn-primary" name="btn-insert" href="{{ url('createDiv') }}"> <i class="fas fa-plus-circle"></i> &nbsp; ADD DIVISI </a>
                    </span>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body col-xl-4">
                    <form class="p-4 mb-4" method="get" action="{{ url('divisi') }}">
                        <table style="margin-bottom: 10px">
                            <tr>
                                <td><button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button></td>
                                <td><input type="text" class="form-control" name="search" placeholder="Search..."></td>
                            </tr>
                        </table>

                    @if (!empty($filltable))
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th width="50px" style="height: 40px">#</th>
                                <th width="200px">Nama</th>
                                <th width="150px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $noDiv = 0; ?>
                            @foreach($filltable as $div => $divi)
                            <?php $noDiv++; ?>
                            <tr>
                                <td>{{ $noDiv }}</td>
                                <td>{{ $divi->nama_div }}</td>
                                <td>
                                    <a class="btn btn-info" name="btn-update" href="{{ url('/updateDiv', $divi->id_div) }}"> <i class="fas fa-pen"></i></a>
                                    <a class="btn btn-danger" name="btn-delete" href="{{ url('/deleteDiv', $divi->id_div) }}" onclick="return confirm('Yakin ingin menghapus data divisi {{ $divi->nama_div}}?')"> <i class="fas fa-trash"></i></a></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>{{ $filltable->links() }}


                    

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

