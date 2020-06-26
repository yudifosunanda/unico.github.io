<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/094d34d232.js" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body>

<!-- nav top-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

    </nav>

<!-- logo-->
        <div class="container-fluid">
          <div class="row">
              <div class="col-12 col-md-12 p-0">
                  <div class="logo">
                    <center><img src="/img/Logo.png" class="img-fluid" alt="Responsive image"></center>
                  </div>
              </div>
          </div>
        </div>

<!-- form-->
    <div class="form ">
      <div class="container-fluid ">
        <div class="row">
            <div class="col-0 col-md-3">
            </div>
            <div class="col-12 col-md-6 ">
                <form action="/login_processing" method="post" name="formlogin">
                  {{csrf_field()}}
                  <div class="form-group">
                    <input name="email" type="text" class="form-control" placeholder="Email" id="form-txt-login">
                  </div>
                  <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" id="form-txt-login">
                  </div>
                  <div class="form-group">
                    <input name="login" type="submit" class="btn btn-warning-new w-100" value="Login">
                  </div>
                  <div class="form-group">
                    <a href="/register" class="btn btn-warning-new-2 w-100" >Register</a>
                  </div>
                </form>
            </div>
            <div class="col-0 col-md-3">
          </div>
        </div>
      </div>
  </div>

  <!-- Notification here -->
  <!-- Modal Login Eror -->
  <div class="modal fade" id="Malertfaileddata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog m-notif" role="document">
      <div class="modal-content ">
        <div class="modal-body">
        <center>{{Session('alertfaileddata')}}</center>
        </div>
        <button type="button" class="btn btn-warning-new m-3" data-dismiss="modal" aria-label="Close">
          Ok
        </button>
      </div>
    </div>
  </div>
  <!-- Modal Session Expired-->
  <div class="modal fade" id="Malertsesionexpired" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog m-notif" role="document">
      <div class="modal-content ">
        <div class="modal-body">
        <center>{{Session('alertsesionexpired')}}</center>
        </div>
        <button type="button" class="btn btn-warning-new m-3" data-dismiss="modal" aria-label="Close">
          Ok
        </button>
      </div>
    </div>
  </div>


    <?php

        if(session()->has('alertfaileddata')){
          echo"
          <script>
            $(document).ready(function(){
            $('#Malertfaileddata').modal('show');
            });
          </script>
        ";

      }else if(session()->has('alertsesionexpired')){
          echo"
          <script>
            $(document).ready(function(){
            $('#Malertsesionexpired').modal('show');
            });
          </script>";
        }

     ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
