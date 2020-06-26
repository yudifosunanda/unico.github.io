
<html lang="en">
<head>
    <title>User List</title>
        <link rel="stylesheet" type="text/css" href="/assets/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.21/pagination/simple_incremental_bootstrap.js"></script>
        <script src="https://kit.fontawesome.com/094d34d232.js" crossorigin="anonymous"></script>
</head>
<body>
<!--nav -->
    <nav class="nav  navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid ">
        <div class="row m-0">
          <div class="col-2">
            <a href="/" class="fas fa-chevron-left fa-lg m-2 a-custom text-dark"> </a>
          </div>
          <div class="col-8">
            <div  id="txt-register"><center><b>User List</b></center></div>
          </div>
          <div class="col-2">
          </div>
        </div>
      </div>
    </nav>

   <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-12">
        <div class="table-responsive">
            <table class="table table-sm t-grey" id="table">
               <thead class="">
                  <tr>
                     <th class="table-th-grey">ID</th>
                     <th class="table-th-grey">Name</th>
                     <th class="table-th-grey">Email</th>
                  </tr>
               </thead>
            </table>
         </div>
       </div>
      </div>
    </div>

 <script>
  $(document).ready(function() {
         $('#table').DataTable({
           "infoCallback": function( settings, start, end, max, total, pre ) {
             return '<div class="grey f-grey">' + start +" - "+ end + " of " + total +'</div>';
           },
           language: {

             paginate: {
              next: '<i class="fas fa-chevron-right paging-new grey">', // or '→'
             previous: '<i class="fas fa-chevron-left paging-new grey">'
           },
             lengthMenu: '<div class="grey f-grey"> Items per page  <select class="s-items grey">'+
               '<option value="5">5</option>'+
               '<option value="10">10</option>'+
               '<option value="20">20</option>'+
               '<option value="30">30</option>'+
               '<option value="40">40</option>'+
               '<option value="50">50</option>'+
               '<option value="-1">All</option>'+
               '</select> </div>'
           },

               pageLength: 5,
               lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
               pagingType: "simple",
               dom: '<rt><"container"<"row"<"col-md-6 col-sm-6 col-7 d-flex flex-row-reverse"i><"col-md-6 col-sm-6 col-5 pr-0"p><"col-md-12 col-sm-12 col-12 d-flex flex-row-reverse pt-3"l>>>',
               processing: true,
               serverSide: true,
               ajax: '{{ url('index') }}',
               columns: [
                        { data: 'id', name: 'id', orderable: false },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email', orderable: false  }
                     ]

            });

          });


   </script>
</body>
</html>
