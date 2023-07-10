<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EarlyCervix</title>
  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom css file link -->
  <link rel="stylesheet" href="styles.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <style>
    div.card img{
      height: 200px;
      object-fit: cover;
    }
    .card-body h5{
      font-size: 1.8rem;
    }
    .card-body p{
      font-size: 1.5rem;
    }
    div.container{
      margin-bottom: 50px;
    }
    div.container h2{
      font-size: 2.3rem;
      margin-bottom: 10px;
    }
  </style>
  <!-- header section starts -->
  <header>
    <a href="#" class="logo"><i class="fa-solid fa-user-doctor"></i> EarlyCervix</a>
    <div id="menu-bar" class="fas fa-bars"></div>
    <nav class="navbar">
      <a href="index.html">Inicio</a>
      <a href="#explicacion">Explicación</a>
      <a href="#speciality">Especialidad</a>
      <!-- <a href="#programa">Explicacion</a> -->
      <a href="#resultado">Resultado</a>
    </nav>
  </header>
  <!-- header section ends -->

  <!--resultado section starts -->
  <section id="resultado" class="resultado">

    <div class="content">
      <h3>Resultados</h3>
      <!-- <p><b><?= $resultadoTexto ?></b></p>
          <p><b>Sintomas principales: </b> <?= $probSinPri ?>%</p>
          <p><b>Sintomas secundarios: </b> <?= $probSinSec ?>%</p>
          <p><b>Probabilidad Total: </b> <?= $resultadoProb ?>%</p> -->


      <p><b><?= $_GET["resultadoTexto"] ?></b></p>
      <p><b>Sintomas principales: </b> <?= $_GET["probSinPri"] ?>%</p>
      <p><b>Sintomas secundarios: </b> <?= $_GET["probSinSec"] ?>%</p>
      <p><b>Probabilidad Total: </b> <?= $_GET["resultadoProb"] ?>%</p>



      <a href="../index.php" class="btn">Volver</a>
    </div>
    <div class="image">
      <img src="../assets/images/primari.jpg" alt="image">
    </div>
  </section>


  <div class="container">
    <h2><b>Lugares de atención recomendado</b></h2>
    <div class="row row-cols-3 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="../assets/images/img1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Liga Peruana de Lucha Contra el Cáncer (LPLCC)</h5>
            <p class="card-text">Av. Angamos Oeste 858, Miraflores, Lima</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../assets/images/img2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Clínica Ricardo Palma</h5>
            <p class="card-text">Av. Javier Prado Este 1059, San Isidro, Lima</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../assets/images/img3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Clínica Anglo Americana</h5>
            <p class="card-text">Av. Alfredo Salazar 350, San Isidro, Lima</p>
          </div>
        </div>
      </div>
  </div>
  <!--resultado section ends -->


  <!-- custom js file link -->
  <script src="script.js"></script>
</body>

</html>