<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Sistema de login</title>
<link href="css/estilo-index.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
        <div id="areaLogin">

         <form action="login.php" method="post">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Senha">
                </div> 
            </div>
            <div class="form-group">
                <button type="submit" name="btLogar" value="Entrar" class="btn btn-primary btn-block">Logar</button> 
            </div>
        </form>
       <?php if(isset($_GET["login"]) == "error"){ ?>
        <div class="alert alert-danger alert-block alert-aling" role="alert">Ops! E-mail ou Senha estão errado</div>
        <?php } ?>
    </div>
</body>
</html>
