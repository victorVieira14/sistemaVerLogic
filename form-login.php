<!doctype html>
<?php session_start() ?>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
 
    <body>

        <?php 
        
            include_once 'headerNaoLogado.php';
        
        ?>



        <div class="container" style="justify-content: center;">
    
            <form action="login.php" method="post">

                <div class="text-center h1 mb-4"><i style="color:#27408B;">Login</i> </div>

                <div class="row">
                      
                </div>
            
                <div class="row">

                    
                <div class="col-sm-12 md-12 lg-12">
                            <div class="input-field col s12">

                                <i class="material-icons prefix fas fa-envelope-open-text mt-2" style="color:#27408B;"></i>
                                <input name="email" id="icon_prefix_email" type="email">
                                <label for="icon_prefix_email" style="font-size:20px;">Email</label>
                            </div>

                        </div>


                        <div class="col-sm-12 md-12 lg-12">
                            <div class="input-field col s12">

                                <i class="material-icons prefix fas fa-key mt-2" style="color:#27408B;"></i>
                                <input name="password" id="icon_prefix_senha" type="password">
                                <label for="icon_prefix_senha" style="font-size:20px;">Senha</label>
                            </div>
                        </div>
                    </div>


                    <?php if (@$_SESSION['error']){  ?>
                        <div class="col-sm-12 md-12 lg-12">
                                <button type="button" class="btn btn-danger btn-block w-100 text-white mb-3">
                                  <strong>Email ou senha incorretos</strong>
                                </button>                    
                        </div>

                    <?php }unset($_SESSION['error']); ?>    
        
                    
                    <?php if (@$_SESSION['email_senha']){  ?>
                        <div class="col-sm-12 md-12 lg-12">
                                <button type="button" class="btn btn-block w-100 text-white mb-3" style="background-color: #27408B;">
                                    <strong> Email ou senha não informados</strong>
                                </button>                    
                        </div>
                    <?php }unset($_SESSION['email_senha']); ?>

                    <div class="col-sm-12 md-12 lg-12 text-center mb-3">
                        <input type="submit" class="btn mt-2 text-center text-white" style="background-color:#27408B;" value="Entrar">
                    </div>


                    <div class="display-5 text-center"><a href="form-add.php" style="color:#27408B;text-decoration: none;" class="h5">Não é cadastrado? <b>cadastre-se</b></a></div>
  
                </div>
            </form>
        </div>

        <?php 

            include_once 'footer.php';
        
        ?>


    </body>
</html>