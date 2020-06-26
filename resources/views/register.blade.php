<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/datepicker/css/bootstrap-datepicker.min.css">
    <script src="/assets/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://kit.fontawesome.com/094d34d232.js" crossorigin="anonymous"></script>
    <title>Register</title>
  </head>
  <body>

    <nav class="nav  navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid ">
        <div class="row m-0">
          <div class="col-2 col-md-2">
            <a href="/login" class="fas fa-chevron-left fa-lg m-2 a-custom text-dark"> </a>
          </div>
          <div class="col-8 col-md-8">
            <div  id="txt-register"><center><b>Register</b></center></div>
          </div>
          <div class="col-2 col-md-2">
          </div>
        </div>
      </div>
    </nav>

    <div class="form ">
      <div class="container-fluid ">
        <div class="row">

            <div class="col-0 col-md-3">
            </div>
            <div class="col-12 col-md-6">
                <form action="/registering" method="post">
                  {{csrf_field()}}
                  <div class="form-group">
                    <input name="name" type="text" class="form-control form-txt-reg" placeholder="Name" >
                  </div>
                  <div class="form-group">
                    <input name="email" type="text" class="form-control form-txt-reg" placeholder="Email" >
                  </div>
                  <div class="form-group  input-group date">
                    <input name="password" type="password" class="form-control form-txt-reg" placeholder="Password" id="showpass"  >
                    <div class="p-1 border-font-reg" >
                        <i class="fas fa-eye fa-lg" id="togleshowpass"  onclick="Togglepass()"></i>
                    </div>
                  </div>
                  <div class="form-group  input-group date">
                    <input name="password_confirmation" type="password" class="form-control form-txt-reg" placeholder="Re-enter Password" id="showrepass">
                    <div class="p-1 border-font-reg" >
                        <i class="fas fa-eye fa-lg"  id="togleshowrepass"  onclick="Togglerepass()"></i>
                    </div>
                  </div>
                  <div class="form-group input-group date"  >
                    <input name="birthday" type="text" class="form-control birth form-txt-reg" placeholder="Birthday"  data-provide="datepicker">
                    <div class="p-1 border-font-reg" >
                      <img src="/img/calendar.png" class="img-fluid" alt="Responsive image" >
                    </div>
                  </div>
                  <div class="form-group">
                    <a href="/login" class="btn btn-warning-new-2  float-left w-25" >Back</a>
                    <input type="submit" class="btn btn-warning-new float-right w-25" value="Register">
                  </div>
                </form>
            </div>
            <div class="col-0 col-md-3">
          </div>
        </div>
      </div>
  </div>

<!-- Notification here -->

<!-- Modal Succes -->
<div class="modal fade" id="Msuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog m-notif" role="document">
    <div class="modal-content ">
        <div class="alert  alert-dismissible fade show alertsucces-custom m-0" role="alert">
              {{Session('alertsucces')}}
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Failed -->
<div class="modal fade" id="Mfailed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog m-notif" role="document">
    <div class="modal-content ">
      <div class="modal-body">
      <center>Register Eror, please check the data{{Session('alertfailed')}}</center>
      </div>
      <button type="button" class="btn btn-warning-new m-3" data-dismiss="modal" aria-label="Close">
        Ok
      </button>
    </div>
  </div>
</div>


  <?php
      if(session()->has('alertsucces')){
        echo"
        <script>
          $(document).ready(function(){
          $('#Msuccess').modal('show');
          });
        </script>
      ";

     }else if(session()->has('alertfailed')||$errors->has('name')||$errors->has('email')||$errors->has('password')||$errors->has('birthday')){
        echo"
        <script>
          $(document).ready(function(){
          $('#Mfailed').modal('show');
          });
        </script>";
      }

   ?>

  <script type="text/javascript">

  $('.birth').datepicker({
      format: "yyyy-mm-dd"
    }).on('change', function(){
        $('.datepicker').hide();
  });

  function Togglepass() {
            var temp = document.getElementById("showpass");
            if (temp.type === "password") {
                temp.type = "text";
            }else {
                temp.type = "password";
            }
        }

  function Togglerepass() {
            var temp = document.getElementById("showrepass");
            if (temp.type === "password") {
                temp.type = "text";
            }else {
                temp.type = "password";
            }
        }


  </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
