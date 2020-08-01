<?php 
  include("./php/conexion.php");
  if( isset($_GET['id'])){
    $resultado=$conexion->query("select * from producto where id=".$_GET['id']) or die($conexion->error);
   if(mysqli_num_rows($resultado) > 0){
     $fila = mysqli_fetch_row($resultado);
   }
  }else{
    //Redireccion
    header("Location: ./index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/<?php echo $fila[6];?>" alt="<?php echo $fila[1]?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1];?></h2>
           <p>Existente: <?php echo $fila[4]?></p>
            <p><strong class="text-primary h4">$<?php echo $fila[9]?></strong></p>
          
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="cart.php?id=<?php echo $fila[0];?>" class="buy-now btn btn-sm btn-secondary">Add To Cart</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categorias</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0 " id="promos" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="acura.php">
                      <figure class="image">
                        <img src="images/autos/acura.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Bujias</span>
                        <h3>Acura</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" id="promos" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="audi.php">
                      <figure class="image">
                        <img src="images/autos/audi.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Bujias</span>
                        <h3>Audi</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0"  id="promos" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="bmw.php">
                      <figure class="image">
                        <img src="images/autos/bmw.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Bujias</span>
                        <h3>Bmw</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        </div>s
    <?php include("./layouts/footer.php"); ?> 
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>