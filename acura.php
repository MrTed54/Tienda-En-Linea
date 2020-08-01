<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Audi catalogo</title>
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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Audi</strong></div>
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
             $respuesta= $conexion ->query("select * from producto  where marcavehiculo like 'Acu%' order by id DESC") or die($conexion-> error);
             while($fila=mysqli_fetch_array($respuesta)){
            ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="producto.php?id=<?php echo $fila["id"]?>">
                    <img src="images/<?php echo $fila["imagen"]?>" alt="<?php echo $fila["modelo"]?>" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="producto.php"><?php echo $fila["modelo"]?></a></h3>
                    <p class="mb-0"><?php echo $fila["descripcion"]?></p>
                    <p class="text-primary font-weight-bold">$<?php echo $fila["precioventa"]?></p>
                  </div>
                </div>
              </div>

             <?php } ?>
            


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Acura</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Audi</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Bmw</span> <span class="text-black ml-auto">(2,124)</span></a></li>
              </ul>
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