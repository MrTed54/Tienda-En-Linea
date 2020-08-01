<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SimpleZone Store</title>
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
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0 "><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Tienda</strong></div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">


            <div class="row mb-5">
            <?php

              include("./php/conexion.php");
             $respuesta= $conexion ->query("select * from producto order by id DESC") or die($conexion-> error);
             while($fila=mysqli_fetch_array($respuesta)){
            ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="producto.php?id=<?php echo $fila["id"]?>">
                    <img src="images/<?php echo $fila["imagen"]?>" alt="<?php echo $fila["modelo"]?>" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a class="text-black" href="producto.php"><?php echo $fila["modelo"]?></a></h3>
                    <p class="mb-0"><?php echo $fila["descripcion"]?></p>
                    <p class="text-dark font-weight-bold">$<?php echo $fila["precioventa"]?></p>
                  </div>
                </div>
              </div>

             <?php } ?>
            


            </div>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group mr-2" role="group" aria-label="Third group">
                <button type="button" class="btn btn-secondary">1</button>
                <button type="button" class="btn btn-secondary">2</button>
                <button type="button" class="btn btn-secondary">3</button>
                <button type="button" class="btn btn-secondary">4</button>
              </div>
            
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="acura.php" class="d-flex"><span>Acura</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="audi.php" class="d-flex"><span>Audi</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                <li class="mb-1"><a href="bmw.php" class="d-flex"><span>Bmw</span> <span class="text-black ml-auto">(2,124)</span></a></li>
              </ul>
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
        </div>
        
      </div>
    </div>
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