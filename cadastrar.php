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
    ?>

  </header>
    <main role="main">
      <div class="jumbotron">
        <div class="container">

        <?php
                require("conecta.php");
                  if (isset($_GET['cod']))
                  {
                    if (isset($_GET['opcao']))
                    {
                      $cod = $_GET['cod'];
                      $sql = "delete from trabalho where cod = $cod";
                      $executa = mysqli_query($bancodedados, $sql);
  
                      if($executa){
                        echo "Registro excluido com sucesso";
                        $sucesso = 1;
  
                      }
  
                      else{
                        echo "Erro ao excluir registro";
                        $sucesso = 0;
                      }
                    }
                    else
                    {
                      $cod = $_GET['cod'];
                      $nome = $_POST['nome'];
                      $numero = $_POST['numero'];

                      $sql = "update trabalho set nome = '$nome', numero = '$numero'";
                      $executa = mysqli_query($bancodedados, $sql); 
                    
                      if($executa){
                        echo "Dados alterados com sucesso!";
                        $sucesso = 1;
                      }
  
                      else{
                        echo "Erro ao alterar os dados!";
                        $sucesso = 0;
                      }
                    }
                  }
                  else
                  {
                    if  (isset($_POST['nome'])){
                      $nome = $_POST['nome'];
                      $numero = $_POST['numero'];


  
                      $sql = "insert into trabalho (nome, numero) values ('$nome', '$numero')";
                      $executa = mysqli_query($bancodedados, $sql);
                      
                      if($executa){
                        echo "Dados gravados com sucesso!";
                        $sucesso = 1;
                      }
  
                      else{
                        echo "Erro ao gravar os dados!";
                        $sucesso = 0;
                      }                    
  
  
                    } 
  
  
                  }

                




            ?>



        </div>
      </div>

  
    </main>
    <hr>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>