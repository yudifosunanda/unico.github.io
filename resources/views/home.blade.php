<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/094d34d232.js" crossorigin="anonymous"></script>
    <title>Sentral Tukang</title>
  </head>
  <body>

    <!--navbar  -->
    <div class="container-fluid ">
      <div class="row">
        <div class="col-12 col-md-12 pl-0 pr-0">
          <div class="navbarcolor pt-1 pb-1">
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="/userlist"> User List</a>
              <a href="/logout"> Logout</a>
              </div>

              <nav id="navtoppo"  class="navbar navbar-expand-lg  navpo topnavpo nav  ">
                  <span class="icon" onclick="openNav()">
                    <i class="fas fa-bars "> </i>
                  </span>
                  <a class="brand" style="margin: 0; float: none; text-align:center" href="#">
                    <img src="/img/logo.png" />
                  </a>
              </nav>
          </div>
        </div>
      </div>
    </div>

<!-- corousel -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/img/s1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/img/s2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/img/s3.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>

<!-- the line -->
    <div class="container-fluid theline mt-2">
    </div>

<!-- search bar -->
    <div class="container pt-1">
      <div class="row">
        <div class="col-0 col-md-4 col-sm-1">
        </div>
        <div class="col-12 col-md-4 col-sm-10 d-flex justify-content-center">
          <input class="form-control  border-radius-search " type="search" style="font-family: FontAwesome" placeholder="&#xf002 Search"  aria-label="Search">
        </div>
        <div class="col-0 col-md-4 col-sm-1">
        </div>
      </div>
    </div>


<!-- Menu-->
  <div class="container pt-2 m-height">
    <div class="row">
        <div class="col-3 col-md-3 ">
            <div class="menu">
            <center>
            <a class="a-black" href="#"><img class="d-block " src="/img/menus/m1.png" alt="Third slide">
            </center>
              <div class="m-name">
                Materials
              </div>
            </a>
            </div>
          </div>
          <div class="col-3 col-md-3 ">
              <div class="menu">
                  <center>
                  <a class="a-black"  href="#"><img class="d-block " src="/img/menus/m2.png" alt="Third slide">
                </center>
                <div class="m-name">
                  Tools
                </div>
                </a>
              </div>
            </div>
            <div class="col-3 col-md-3 ">
                <div class="menu">
                    <center>
                    <a class="a-black"  href="#"><img class="d-block " src="/img/menus/m3.png" alt="Third slide">
                  </center>
                  <div class="m-name">
                    Fitting
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-3 col-md-3 ">
                  <div class="menu">
                      <center>
                    <a class="a-black"  href="#">  <img class="d-block " src="/img/menus/m4.png" alt="Third slide">
                    </center>
                    <div class="m-name">
                      Others
                    </div>
                    </a>
                  </div>
                </div>
        </div>
    </div>

<!-- Footer-->
  <div class="container-fluid">
    <div class="footer">
      <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link active m-footer mr-auto m-footer-c" href="/"><i class="fas fa-home"> </i></a>
        <a class="nav-item nav-link  m-footer ml-auto m-footer-c" href="#"><i class="fas fa-user-circle"></i></a>
      </nav>
    </div>
  </div>




<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
