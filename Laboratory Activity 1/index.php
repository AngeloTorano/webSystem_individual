<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <title>Movie Library</title>
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
        .containerY{
            border-radius: 10px;
        }
        .carousel-item{
            height: 500px;
            object-fit: cover;
        }
        .carousel-inner{
            border-radius: 10px;
            transition: all ease-in-out 0.5s;
        }
        .btn:hover{
            background:rey;
            backdrop-filter: blur(10px);
            transform:scale(1.05)
        }
        .card{
            background-color: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px); 
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
        }
    </style>
</head>
<body>
<!-- header -->
    <header>
        <?php include 'index/header.php'?>
    </header>

<!-- section 1 -->
  <section class="movie_bg d-flex justify-content-center align-items-center vh-100" id="slider">
      <?php include 'index/section1.php';?>
  </section>

<!-- section 2 -->
    <section class="p-5 bg-secondary" id="genres">
    <?php include 'index/section2.php';?> 
    </section>

<!-- section 3 -->
    <section class="movie_bg text-light p-5 pt-lg-5 text-center text-sm-start d-flex justify-content-center align-items-center vh-100" id="about">
      <?php include 'index/section3.php'?>
    </section>

<!-- footer -->
    <footer class="p-3 bg-dark text-white text-center position-relative">
      <?php include 'index/footer.php'?>
    </footer>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>