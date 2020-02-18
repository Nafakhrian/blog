@extends('templateLog')


@section('contentLog')

    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <span class="h3 text-gray-900 mb-4" >Register</span>
                    <br>
                     <br>
                </div>
                                
                <form class="user" method="post" action="{{ url('/storeLogin') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama" required>
                     </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Username" name="username" required>
                     </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" placeholder="Password" name="password" required>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Register">
                </form>
            </div>
        </div>
    </div>
@stop
