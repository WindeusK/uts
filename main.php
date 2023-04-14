<!DOCTYPE html>

<html>
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
            Content goes below this line
        -->

        <!--Title-->
        <div class="d-flex justify-content-center align-self-center">
            
            <div class="jumbotron pt-4 text-white">
                <center>
                <h1>Biblio Library</h1>
                <h4>Project UTS</h4>
                </center>
            </div>
        </div>

        <!--Buttons group-->

        <!--Button 1-->
        <div class="d-flex justify-content-center align-self-center">
        <button type="button" class="btn btn-light rounded-lg mt-5" href="daftarBuku.php">
                Daftar Buku
        </button>
        </div>

        <!--Button 2-->
        <div class="d-flex justify-content-center align-self-center">
        <button type="button" class="btn btn-light rounded-lg mt-5" href="daftarPeminjaman.php">
                Daftar Peminjaman
        </button>
        </div>

        <!--Button 3-->
        <div class="d-flex justify-content-center align-self-center">
        <button type="button" class="btn btn-light rounded-lg mt-5" href="tambahBuku.php">
                Tambah Buku
        </button>
        </div>

        <!--Button 4-->
        <div class="d-flex justify-content-center align-self-center">
        <button type="button" class="btn btn-light rounded-lg mt-5" href="tambahBuku.php">
                Tambah Peminjaman
        </button>
        </div>
        <!--
            End of container
            Content goes ABOVE this line
        -->
        </div>
    </body>
</html>