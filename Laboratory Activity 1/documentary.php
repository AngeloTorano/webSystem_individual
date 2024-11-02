<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <title>Action</title>
    <style>
        .bg{
        background-image: url(img/bg.jpg);
        background-size: cover; 
        background-repeat: no-repeat;
        background-position:center;
        background-attachment: fixed;  
        }
       .container{
        margin-top: 70px;
        padding-bottom: 50px;
        padding-top: 50px;
        padding-left: 50px;
        padding-right: 50px;
        justify-content: center;
        align-items: center;
        color: white;
        border-radius: 20px;
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

    <section class="bg vh-100 pt-5">
      <div class="container bg-secondary">
        <div class="containerX ">
          <div class="row featurette">
            <div class="col-md-7 ">
              <h1 class="featurette-heading fw-normal lh-1"><center>Catch Me If You Can
              </center><span class="text-body-secondary"></span></h1>
              <div class="content m-5 p-5">
                <p class="lead">Frank Abagnale Jr. (Leonardo DiCaprio) worked as a doctor, a lawyer,
                  and a co-pilot for a major airline — all before his 18th birthday. A
                  master of deception, he was also a brilliant forger, whose skill gave
                  him his first real claim to fame. At the age of 17, Frank Abagnale Jr.
                  became the most successful bank robber in U.S. history. FBI Agent
                  Carl Hanratty (Tom Hanks) makes it his mission to capture Frank and
                  bring him to justice, but Frank is always one step ahead of him.                  
                  
                </p>
              </div>

                </div>
                  
            <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="transparent"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
              <image height="500" width="500" href="img/documentary.jpg" />
            </svg>
            <a type="submit" class="btn btn-light mt-3 w-100" href="https://youtu.be/71rDQ7z4eFg?si=s0xYURdi0zkC-zyC ">Watch Now</a>
            </div>
            
          </div>             
        </div>
      </div>
    </section>


    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>