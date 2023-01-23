<?php   
require_once('db_connect.php');

session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM user WHERE id ='$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);


?>



<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <h1>Depois de muita dor e sofrimento você <?php echo $dados['nome'] ?> conseguiu
    </h1>    


    </body>
    </html>
</html>