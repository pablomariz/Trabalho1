// João Pablo Souza Mariz, souzamariz27@gmail.com

<!DOCTYPE html>
  <html lang="pt-br">
    <head>


      <title>Trabalho 1</title>

      <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <header>

    <?php
      require("cabecalho.php");
      if(isset($_GET['cod']))
      {
        require("conecta.php");
        $cod = $_GET['cod'];
        $sql = "select * from trabalho where cod = $cod";
        $executa = mysqli_query($bancodedados, $sql);
        if ($linha = mysqli_fetch_array($executa))
        {
          $nome       = $linha['nome'];
          $numero   = $linha['numero'];

        }
      }
    ?>

  </header>
    <main role="main">
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Trabalho 1</h1>

          <?php
             if (isset($_GET['cod']))
             {
          ?>
            <form method="POST" action="cadastrar.php?cod=<?php echo $cod;?>">
          <?php } else {?>

            <form method="POST" action="cadastrar.php">
          <?php } ?>


<form method="POST" action="cadastrar.php">
  <div class="form-group">
    
  

   <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="nome" 
    value = "<?php if(isset($_GET['cod'])) echo $nome; ?>">
    
    <label for="numero">Número</label>
    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="numero"
    value = "<?php if(isset($_GET['cod'])) echo $numero; ?>">

    
  </div>



  <input type="submit" class="btn btn-primary" value="Gravar">

  
    </main>
    <hr>

 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>