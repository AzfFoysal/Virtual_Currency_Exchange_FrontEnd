<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>

    {{-- nav bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">VCES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chat Box</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact support</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">....</a></li>
                            <li><a class="dropdown-item" href="#">....</a></li>
                            <li><a class="dropdown-item" href="#">....</a></li>
                            <li><a class="dropdown-item" href="#">....</a></li>
                            <li><a class="dropdown-item" href="#">....</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- <li><a class="dropdown-item" href="#">Announcement</a></li> -->
                        </ul>
                    </li>
                </ul>

                <!--Navbar-->
          <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  <!--/.Navbar-->



                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#">Register/Login</a>
                    </li>
                </ul>

            </div>

          



        </div>
    </nav>


    {{-- cards --}}

    <div class="text-center mt-5">
        <h1>Welcome To VCES</h1>
        
​   <picture>
        <!-- <source srcset="https://media3.giphy.com/media/c5wbvuaVVLWzC/giphy.gif" type="image/svg+xml"> -->
        <source srcset="https://www.fintechcompliance.co.uk/wp-content/uploads/2016/09/Fintech-infographic-cover.png" type="image/svg+xml">
        <img src="..." class="img-fluid img-thumbnail" alt="...">
    </picture>

    </div>
    
    <div class="container " >

        {{-- row 1 --}}
        <div class="row ">

            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
            <picture>
            <source srcset="https://i.gifer.com/CDMk.gif" type="image/svg+xml">
        <img src="..." class="img-fluid img-thumbnail" alt="...">
    </picture>
                <!-- <img src="..." class="img-thumbnail" alt="..."> -->
                <div class="card-body">
                
        

                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 760</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 4.3/5</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Go to post</a>
                    <!-- <a href="#" class="btn btn-info">go to shop</a> -->
                </div>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
            <picture>
            <source srcset="https://i.gifer.com/CDMk.gif" type="image/svg+xml">
        <img src="..." class="img-fluid img-thumbnail" alt="...">
    </picture>
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 400</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 4.6/5</li>
                </ul>
                <div class="card-body">
                        <a href="#" class="btn btn-primary">Go to post</a>
                        <!-- <a href="#" class="btn btn-info">go to shop</a> -->
                </div>
            </div>
            </div>


            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
            <picture>
            <source srcset="https://i.gifer.com/CDMk.gif" type="image/svg+xml">
        <img src="..." class="img-fluid img-thumbnail" alt="...">
    </picture>
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 400</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 3.3/5</li>
                </ul>
                <div class="card-body">
                        <a href="#" class="btn btn-primary">Go to post</a>
                        <!-- <a href="#" class="btn btn-info">go to shop</a> -->
                </div>
            </div>

            </div>
        </div>

        {{-- row 2 --}}
        <div class="row ">

            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
            <picture>
            <source srcset="https://i.gifer.com/CDMk.gif" type="image/svg+xml">
        <img src="..." class="img-fluid img-thumbnail" alt="...">
    </picture>
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 760</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 4.3/5</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Go to post</a>
                    <!-- <a href="#" class="btn btn-info">go to shop</a> -->
                </div>
            </div>
            </div>

            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
            <picture>
            <source srcset="https://i.gifer.com/CDMk.gif" type="image/svg+xml">
        <img src="..." class="img-fluid img-thumbnail" alt="...">
    </picture>
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 400</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 4.6/5</li>
                </ul>
                <div class="card-body">
                        <a href="#" class="btn btn-primary">Go to post</a>
                        <!-- <a href="#" class="btn btn-info">go to shop</a> -->
                </div>
            </div>
            </div>


            <div class="col-sm-4">
            <div class="card" style="max-width: 18rem;">
            <picture>
            <source srcset="https://i.gifer.com/CDMk.gif" type="image/svg+xml">
        <img src="..." class="img-fluid img-thumbnail" alt="...">
    </picture>
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Price : 400</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">Ratting : 3.3/5</li>
                </ul>
                <div class="card-body">
                        <a href="#" class="btn btn-primary">Go to post</a>
                        <!-- <a href="#" class="btn btn-info">go to shop</a> -->
                </div>
            </div>

            </div>
        </div>




<!-- Footer -->



        <footer class="text-center text-white" style="background-color: #f1f1f1;">

  <!-- Grid container -->
  <div class="container pt-4">

    <!-- Section: Social media -->
    <section class="mb-4">
    <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">


  
    <!-- Section: Social media -->
    <section class="mb-4">
     <!-- Facebook -->
<a style="color: #3b5998;" href="#!" role="button"
  ><i class="fab fa-facebook-f fa-lg"></i
></a>

<!-- Twitter -->
<a style="color: #55acee;" href="#!" role="button"
  ><i class="fab fa-twitter fa-lg"></i
></a>

<!-- Google -->
<a style="color: #dd4b39;" href="#!" role="button"
  ><i class="fab fa-google fa-lg"></i
></a>

<!-- Instagram -->
<a style="color: #ac2bac;" href="#!" role="button"
  ><i class="fab fa-instagram fa-lg"></i
></a>
   
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->



  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="https://vcesbd.com/">VCESBD.com</a>
  </div>
  <!-- Copyright -->


</footer>

<!-- Footer End -->





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</div>
</body>

</html>
