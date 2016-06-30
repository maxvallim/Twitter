<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link   href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>    
  <script src="js/bootstrap.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
 
<body>

    <div class="container">
      
        <div class="row">
                <h3>TWITTER - AGENDA DE CONTATOS</h3>
        </div>
            <div class="row">
                <p>
                <a href="create.php" class="btn btn-success">Novo</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Celular</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM customers ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['mobile'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn" href="read.php?id='.$row['id'].'">Detalha</a>';
                            echo ' ';
                            echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Atualiza</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Exclui</a>';
                            echo '</td>';                                                     
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
    
          </div>

    </div> <!-- /container -->
</body>
</html>