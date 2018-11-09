<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="row px-2 py-2">
        <div class="col">

          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">TIPO CADASTRO</th>
                <th scope="col">NOME INSTITUIÇÃO</th>
                <th scope="col">RESPONSÁVEL INSTITUIÇÃO</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NOME DA FEIRA</th>
                <th scope="col">RUA</th>
                <th scope="col">NUMERO</th>
                <th scope="col">CEP</th>
                <th scope="col">CIDADE</th>
                <th scope="col">UF</th>
                <th scope="col">PAÍS</th>
                <th scope="col">SITE DA FEIRA</th>
                <th scope="col">NOME CORDENADOR</th>
                <th scope="col">EMAIL CORDENADOR</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  $con = new PDO("mysql:host=172.16.0.2;dbname=MOSTRA_JUNIOR", "site", "sys22wep", 
                                                                                                  array(
                                                                                                          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                                                                                                          PDO::ATTR_PERSISTENT => false,
                                                                                                          PDO::ATTR_EMULATE_PREPARES => false,
                                                                                                          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                                                                                                  ));
                  $rowQuery = $con->prepare("SELECT * FROM M_CADASTRO");
                  $rowQuery->execute();
                  $cont = 0;
                  $datas = $rowQuery->fetchAll(PDO::FETCH_ASSOC);          
                  for ($i = 0; $i < count($datas); $i++)
                  {
                    echo "<tr>";
                    echo "<td class='col'>";
                    echo ++$cont;                      
                    echo "</td>";
                    echo "<td class='col'>";
                    echo $datas[$i]['C_TIPO_CADASTRO'];                      
                    echo "</td>";                    
                    echo "<td class='col'>";
                    echo $datas[$i]['C_NOME_INSTITUICAO'];
                    echo "</td>";
                    echo "<td>";
                    echo $datas[$i]['C_RESPONSAVEL_INSTITUICAO'];
                    echo "</td>";
                    echo "<td>";
                    echo $datas[$i]['C_TELEFONE_RESPONSAVEL_INSTITUICAO'];
                    echo "</td>";
                    echo "<td>";
                    echo $datas[$i]['C_EMAIL_REPOSANSAVEL_INSTITUICAO'];
                    echo "</td>";
                    echo "<td>";
                    echo $datas[$i]['C_NOME_FEIRA_DE_CIENCIAS'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_RUA_FEIRA_DE_CIENCIAS'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_NUMERO_FEIRA_DE_CIENCIAS'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_CEP_FEIRA_DE_CIENCIAS'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_CIDADE_FEIRA_DE_CIENCIAS'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_UF_FEIRA_DE_CIENCIAS'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_PAIS_FEIRA_DE_CIENCIAS'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_SITE_FEIRA_DE_CIENCIAS'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_NOME_CORDENADOR_FEIRA'];
                    echo "</td>";                    
                    echo "<td>";
                    echo $datas[$i]['C_EMAIL_CORDENADOR_FEIRA'];
                    echo "</td>";
                    echo "</tr>";
                  }            
                php?>
              </tr>
            </tbody>
          </table>          

        </div>  
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>