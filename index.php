<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="stylesheet" type="text/css" href="script.js"> 
    <link rel="stylesheet" type="text/css" href="envia.php"> 
    <link rel="icon" href="img/smarkio.png">
    <title>TESTE - SMARKIO</title>
</head>
<body>
    
    <div class="container comentario-container">
        <div class="row">

            <div class="col-lg-6 col-md-6 form-container">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="heading">
                        <h4>Comentário</h4>
                    </div>
                    <form class="form" action="" method="post" enctype="multipart/form-data">
                        <textarea name="mensagem" placeholder="Digite seu comentário"></textarea>
                        <div class="coments"></div>
                        
                        <div class="col-12 my-3 text-center">
                            <button type="submit" class="btn">Comentar</button>
                        </div>
                    </form>
                </div>
            </div>
      
            <div class="col-lg-6 col-md-6 form-comentario">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="comentarios">
                        <h4>Comentários</h4>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
<?
    require 'config.php';
    require 'connection.php';

    $comentario = array(
        'comentario'
    );


   
?>
</body>
</html>