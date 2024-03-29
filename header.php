<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Job Science</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta charset="utf-8">
    <link rel="icon" type="text/css" href="img/LOGOcompleto.png">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		*{
		padding: 0;
		margin: 0;
		}
		html{
			font-family: Comic Sans MS;
			text-decoration: none;
		}
		header div nav li a{
			font-size: 20px;
			text-decoration: none;
		}
		nav-content{
			color:white;
			text-decoration: none;
		}
		nav-content:hover{
			color:white;
			text-decoration: none;
		}
		nav li a:hover{
			text-decoration: none;
			color:black;
		}
		
		#m1{
			color:white;
			text-decoration: none;
		}
		#m1:hover{
			color:white;
			text-decoration: none;
		}
		#m2{
			color:white;
			text-decoration: none;
		}
		#m2:hover{
			color:white;
			text-decoration: none;
		}
		#m3{
			color:white;
			text-decoration: none;
		}
		#m3:hover{
			color:white;
			text-decoration: none;
		}
		.container{
			width: 80%;
			margin: 0 auto;
			position: relative;
		}
		#menu{
			background: rgb(6, 115, 134);
		}
		#logo{
			right: 80px;
		}
		#sair{
			top: 20px;
			position: relative;
			right: 10px;
		}
		h2{
            max-width:600px;
            text-align:center;
            margin:60px auto;
            color: #fff;
        }
		h2:after{
				content:'|';
				margin-left:5px;
				opacity:1;
				color:white;
				animation: pisca .7s infinite;
		}
		@keyframes pisca{
				0%, 100%{
						opacity:1;
				}
				50%{
						opacity:0;
				}
		}
	</style>
</head>
<body>


	<!-- menu do usuario logado -->
	<header>
			<div class="container-fluidx" >

				
			<div class="container-fluid background text-center mb-3" style="height: 100%; background-color: #27408B; position:relative; left:0; top:0; width:100%; background-repeat: no-repeat;">
					
				<div class="" style="display:hidden; height:150px;"></div>

				<h2 class="display-4 text-white ">

						O melhor sistema para checklist está aqui!

				</h2>

				<div class="" style="display:hidden; height:120px;"></div>
									
			</div>




				<nav class="fixed-top"  id="menu" style="background-color:#293039">


					<ul id="nav-mobile" class="left hide-on-med-and-down" style="position:relative;">
						<li class="active"><a id="m1" href="paginaLogado.php">Home</a></li>
						<li><a id="m2" href="veiculos.php">Veículos</a></li>
						<li><a id="m2" href="index.php">Checklist</a></li>
						<li><a id="m3" href="form-login.php">Sign out</a></li>
					</ul>


				<ul id="slide-out" class="sidenav">
					
					<li><div class="user-view">
					<div class="background">
						<img src="img/fundoSide.jpg" class="w-100 d-flex flex-column">
					</div>
					<a href="editaInforUser.php"><img class="circle" src="img/user3.jpg"></a>
					<a href="#nome"><span class="white-text name"><?php echo $_SESSION['user_name']; ?></span></a>
					<a href="#email"><span class="white-text email"><?php echo $_SESSION['user_email']; ?></span></a>
					</span></a>
						
					
					
					</div></li>
					<li><a href="paginaLogado.php"><i class="fas fa-home"></i>        Home</a></li>
					<li><a href="veiculos.php"><i class="fas fa-car"></i>        Veículos</a></li>
					<li><a class="waves-effect" href="index.php"><i class="fas fa-clipboard-list"></i>         Checklist</a></li>
					<li><div class="divider"></div></li>
					<li><a class="waves-effect" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign out </a></li>

				</ul>
				<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-home mt-3" style="font-size:2em; color:white;"></i> </a>
					
				</nav>
			</div>
	</header>
	<!-- menu do usuario logado -->


</body>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});
  });
</script>
<script type="text/javascript" src="js/all.min.js"></script>


<script>
        function typeWriter(elemento){
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';
            textoArray.forEach((letra, i) => {
                setTimeout(() => elemento.innerHTML += letra, 110 * i);
        
            });
        }
        
        //pega o que esta escrito 
        const titulo = document.querySelector('h2');
        typeWriter(titulo);
    </script>

</html>