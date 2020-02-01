<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

    <title>UTS</title>
</head>

<body onload="readTask()">

    <nav class="navbar navbar-light bg-primary mb-4">
        <span class="navbar-brand mb-0 h1">Data Karyawan</span>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-10" id="firstSection" style="margin: 0 auto;">
                <form class="border p-4 mb-4" id="form" autocomplete="off">

                    <!-- @if (!empty($filltable)) -->
                    <table align="center" border="1">
                        <thead>
                            <tr style="text-align: center;">
                                <th width="80px">ID</th>
                                <th width="150px">NIK</th>
                                <th width="200px">Nama</th>
                                <th width="200px">Alamat</th>
                                <th width="250px">Email</th>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- @else -->
                    <h2>Tidak ada data karyawan</h2>

                    <!-- @endif -->

                </form>
            </div>
            <div class="col-md-6" id="cardSection">

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
   <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
    <script src="index.js"></script>
</body>

</html>