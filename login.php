<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href ="css/bootstrap.css" rel ="stylesheet">
<link href ="css/normalize.css" rel ="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

</head>

<body>
<header>
    <div class="container-fluid">
        <div class="row">
        <img src="img/logo_top.png"><img src="img/mba.png" width="120" >
        <span style="font-size:45px; color:#707070; text-align:right;"><p>Boletim</p></span>
       	 <div class="col-xs-12 col-sm-6 col-md-12 banner"></div>
                 <div class="login">
            <form  action="ope.php"  name="formlogin" method="POST" id="formlogin">
                <input type="email" name="login" id="login"  class="em" placeholder="Email"/>
                <br /> 
                <input type="password" name="senha" id="senha" class="pw" placeholder="Senha"/>
                <br /> 
                <input type="submit" value="Login" class="lg" /> 
            </form>
        </div>
        </div>
    </div>
</header>
<footer>
    <div class="container-fluid">
        <div class="row">
       	 <div class="col-xs-12 col-sm-6 col-md-12"></div>
        </div>
    </div>
</footer>

</body>
</html>