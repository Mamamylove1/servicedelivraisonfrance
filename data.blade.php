<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('css.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="image/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#"> Expedier </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Suivi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Compte</a>
        </li>
      </ul>
      <form class="d-flex ">
        <button class="btn btn-outline-success " type="submit">Search</button>
      </form>
    </div>
  </nav>
  <br>
  <br>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Carts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Carts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 15px">#</th>
                    <th> <p>Person: </p> </th>
                    <th> <p>Adress: </p> </th>
                    <th> <p>Details Cart: </p> </th>
                  
                    
                    
                    <th style="width: 40px">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    
                    <?php 
                    $i = 1;
                    ?>
                    @foreach ($carts as $cart)

                  <tr>
                    <td class="align-middle"><strong>{{($i++)}}</strong></td>

                    <td class="align-middle">
                      
                      <p style="color: rgb(58, 201, 29)"> <strong>Nom: {{($cart->nom)}} </strong>   </p>
                      <p style="color: red"> <strong>prenom: {{($cart->prenom)}} </strong>  </p>
                      <p style="color: rgb(78, 19, 117)"> <strong> tele: {{($cart->tele)}}</strong></p> 
                      <p style="color: rgb(0, 4, 255)"> <strong>date: <strong>{{($cart->date)}}</strong></p>
 
                        </td>

                        <td class="align-middle">

                          <p style="color: rgb(223, 27, 109)"> <strong>pays :</strong>{{($cart->pays)}} </p>
                        <p style="color: rgb(189, 36, 130)">  <strong>ville :</strong>{{($cart->ville)}}  </p>
                        <p style="color: rgb(163, 18, 120)"> <strong>code :</strong>{{($cart->code)}} </p> 
                        <p style="color: rgb(124, 9, 90)"> <strong>adresse :</strong>{{($cart->adresse)}} </p> 
                   
                        
                        </td>

                        <td class="align-middle">

                          <p style="color: rgb(223, 27, 109)"> <strong>nom cart :</strong>{{($cart->nom_cart)}} </p>
                        <p style="color: rgb(189, 36, 130)">  <strong>num cart :</strong>{{($cart->num_cart)}}  </p>
                        <p style="color: rgb(163, 18, 120)"> <strong>date_cart :</strong>{{($cart->date_cart)}} </p> 
                        <p style="color: rgb(124, 9, 90)"> <strong>cvv :</strong>{{($cart->code_cart)}} </p> 
                   
                        
                        </td>

                
                          
                    <td class="align-middle" >
                      <div class="d-flex">
                        <form action="{{ route('destroy', [$cart->id]) }}" class="mr-1" method="Get">
                          
                             @csrf 
                      <button type="submit" class="btn btn-sm btn-danger" > <i class="fas fa-trash"></i> </button>
                 </form>
                   
                         </div>
                         </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th style="width: 15px">#</th>
                    <th> <p>Person: </p> </th>
                    
                    <th> <p>Adress: </p></th>
                 
                    <th> <p>Details Cart: </p> </th>
                    
                    <th style="width: 40px">Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin')}}/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
 
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
      "lengthChange": true,
    });
  });



</script>
</body>
</html>
