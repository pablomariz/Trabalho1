<!DOCTYPE html>
  <html lang="pt-br">
    <head>


      <title>Trabalho 1</title>

      <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>


  <body>
    <header>
<hr>
    <div class="container">
      <h2 class=""> Dados adicionados</h2>
      <table class="table table-bordered table-hover">
        <tr>
                <th>Nome</th>
                <th>Número</th>
                <th>Editar</th>
                <th>Excluir</th>
              </tr>

  
              <?php
              require("conecta.php");
              $sql = "select * from trabalho";
              $executa = mysqli_query($bancodedados, $sql);
              while($linha = mysqli_fetch_array($executa))
              {
                echo "<tr>";
                echo "<td>".$linha['nome']."</td>";
                echo "<td>".$linha['numero']."</td>";


                echo "<td> <a href='formcad.php?cod=".$linha['cod']."'>EDITAR </a></td>";
                echo "<td> <a href='cadastrar.php?cod=".$linha['cod']."&opcao=e'>EXCLUIR </a></td>";
              }
            ?>
  
    </main>
    <hr>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>