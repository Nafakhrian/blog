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

    <title>NF-Corp</title>
</head>

<body style="background-color: #e6e6e6">

	<!-- top bar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >
        <div class="col-md-6" style="font-size: 18pt; ">
                <style>
                    #aa:link {color: black; text-decoration: none;}
                    #aa:visited {color: black; text-decoration: none;}
                    #aa:hover {color: black; text-decoration: none;}
                    #aa:active {color: black; text-decoration: none;}
                </style>
                <a href="{{ url('welcome') }}" id="aa"> Data NF-Corp. </a>
        </div>
        <div class="col-md-6">
            <div style="float: right;">
            <ul style="list-style-type: none; margin-top: 10px">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="{{ url('/img/profile/account.png') }}" style="width: 35px; height: 35px">
                        <span>&nbsp; {{ auth()->user()->nama}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-hashtag fa-sm fa-fw mr-2 text-gray-400"></i> {{ auth()->user()->id_user}}
                        </a>
                       <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('logout') }}" >
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
            </div>
        </div>
        <br>
    </nav>
    <!-- end top bar -->

@yield('content')

    <!-- footer -->
     <footer class="sticky-footer">
        <div class="container my-auto">
          	<div class="copyright text-center my-auto">
            	<span>Copyright &copy; NF-Corp 2020</span>
                <br>
                <br>
          	</div>
        </div>
    </footer>
    <!-- end footer -->


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