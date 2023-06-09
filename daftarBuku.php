<!DOCTYPE html>

<html>

    <!-- Boilerplate for style-->
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
                rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
                crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" 
              rel="stylesheet">     
        
        <style>
            body {
                font-family: "Noto Sans", 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
            }
        </style>
    </head>

    <body class="bg-dark">
        <div class="container-fluid">
            <!-- 
                Beginning of container
                Code goes below this comment
            -->
            <!-- Navbar-->
            <nav class="navbar navbar-expand-sm bg-white">
                <div class ="container-fluid">
                    <!-- Navbar Items -->
                    <ul class="navbar-nav">
                        <li class="nav-item mt-1">
                            <a class="navbar-brand" href="main.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="daftarBuku.php">Daftar Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftarPeminjaman.php">Peminjaman</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--Table for showing data-->
            <div class="card mt-5">
                <!-- Card Header -->
                <div class="card-header bg-white text-black ">
				    Daftar Buku 
			    </div>

                <!-- Card Body (Table) -->
                <div class="card-body">
                    <table class="table-bordered">
                        <th>
                            
                        </th>
                    </div>
                </div>
            </div>

            <!-- 
                Ending of container
                Code goes above this comment
            -->
        </div>
    </body>
</html>