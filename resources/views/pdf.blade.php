<!doctype html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	 <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>Laporan PDF NF-Corp.</h4>
		<h6><a target="_blank" href="{{ url('/') }}">NF-Corp.</a></h5>
	</center><br>

		<div class="col-md-12">
			<h5>Tabel Karyawan</h5>
			<table class='table table-bordered'>
				<thead>
					<tr>
						<th >#</th>
	                    <th >NIK</th>
	                    <th >Nama</th>
	                    <th >Alamat</th>
	                    <th >Email</th>
	                    <th >Divisi</th>
	                    <th >Foto</th>
					</tr>
				</thead>
				<tbody>
					@php $x=1 @endphp
					@foreach($karyawan as $k)
					<tr>
						<td>{{ $x++ }}</td>
						<td>{{$k->nik}}</td>
						<td>{{$k->nama}}</td>
						<td>{{$k->alamat}}</td>
						<td>{{$k->email}}</td>
						<td>{{$k->Divisi->nama_div}}</td>
						<td><img src="{{ url('uploads/'.$k->foto) }}" style="width: 70px; height: 70px; object-fit: cover;" /></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<br>
		<div class="col-md-12">
			<h5>Tabel Divisi</h5>
			<table class='table table-bordered'>
				<thead>
					<tr>
						<th >#</th>
	                    <th >Nama</th>
					</tr>
				</thead>
				<tbody>
					@php $y=1 @endphp
					@foreach($divisi as $d)
					<tr>
						<td>{{ $y++ }}</td>
						<td>{{ $d->nama_div}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<br>
		<div class="col-md-12">
			<h5>Tabel User</h5>
			<table class='table table-bordered'>
				<thead>
					<tr>
						<th >#</th>
	                    <th >Nama</th>
	                    <th >Username</th>
	                    <th >Password</th>
					</tr>
				</thead>
				<tbody>
					@php $z=1 @endphp
					@foreach($user as $u)
					<tr>
						<td>{{ $z++ }}</td>
						<td>{{$u->nama}}</td>
						<td>{{$u->username}}</td>
						<td>{{$u->password}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
 
	</div>
 
</body>
</html>