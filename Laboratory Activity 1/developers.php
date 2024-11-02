<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <title>Developers</title>

    <style>
         .navbar-brand{
            font-family: 'Bebas Neue';
            font-size: 35px;
            background-color: #ffffff;
        }
         .movie_bg{
        background-image: url(img/bg.jpg);
        background-size: cover; 
        background-repeat: no-repeat;
        background-position:center;
        background-attachment: fixed;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="main.php"><img src="img/logo.png" alt="Movie Library" width="100" height="60">Movie Library</a>
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <center>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a href="main.php"class="nav-link">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Genres</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">About</a>
                      </li>
                      <li class="nav-item">
                      <a href="developers.php" class="nav-link">Developers</a>
                      </li>
                    </ul>
                </div>
            </center>
            </div>
        </nav>
    </header>

    <section class="movie_bg p-5 bg-dark d-flex align-items-center justify-content-center vh-100" >
        <div class="container">
          
          <div class="row g-4">
            
            
            <div class="col-xxl-4 col-xl-3 col-lg-6 col-md-12 col-sm-12 ">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img src="img/khim.jpg" class=" mb-5" alt="" width="200"/>
                  <h3 class="card-title mb-3">Khim Angelo M. Franco </h3>
                  <p class="card-text">
                    The iconic, friendly forest spirit from My Neighbor Totoro is known for its large, 
                    fluffy appearance and playful nature, often seen riding the Catbus or sleeping in the forest.
                  </p>
                  <a href="https://www.facebook.com/khimangelo.franco?mibextid=ZbWKwL"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="https://www.instagram.com/khim.gelo?igsh=MTk2eHV4cXZrempncw=="><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-3 col-lg-6 col-md-12 col-sm-12 ">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img src="img/kinah.jpg" class=" mb-5" alt="" width="200"/>
                  <h3 class="card-title mb-3">Rusette Shekinah M. Araneta</h3>
                  <p class="card-text">
                    The iconic, friendly forest spirit from My Neighbor Totoro is known for its large, 
                    fluffy appearance and playful nature, often seen riding the Catbus or sleeping in the forest.
                  </p>
                  <a href="https://www.facebook.com/shekinah.araneta?mibextid=ZbWKwL"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="https://www.instagram.com/shekinaharaneta?igsh=MXhlbjJpZHJzemRhaw=="><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-3 col-lg-6 col-md-12 col-sm-12 ">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img src="img/angelo.jpg" class=" mb-5" alt="" width="200"/>
                  <h3 class="card-title mb-3">Angelo A. Torano</h3>
                  <p class="card-text">
                    The iconic, friendly forest spirit from My Neighbor Totoro is known for its large, 
                    fluffy appearance and playful nature, often seen riding the Catbus or sleeping in the forest.
                  </p>
                  <a href="https://www.facebook.com/kingmimo19?mibextid=ZbWKwL"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="https://www.instagram.com/torano_ange.lo?igsh=MTZ2NzlmaHgxMDdsbw=="><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    
    <footer class="p-3 bg-dark text-white text-center position-relative">
        <div class="container">
          <p class="lead">Copyright &copy; 2024 Movie Library</p>
          <a href="#" class="position-absolute bottom-0 end-0 p-5 text-success">
            <i class="bi bi-arrow-up-circle h1"></i>
          </a>
        </div>
    </footer>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>