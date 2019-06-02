<!DOCTYPE html>
<html>
<head>
	<title>VerLogic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<meta charset="utf-8">
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

				
			<div class="container-fluid background text-center mb-5" style="height: 100%; background-color: #27408B; position:relative; left:0; top:0; width:100%; background-repeat: no-repeat;">
					
				<div class="" style="display:hidden; height:150px;"></div>

				<h2 class="display-4 text-white ">

						O melhor sistema para checklist está aqui!

				</h2>

				<div class="" style="display:hidden; height:120px;"></div>
									
			</div>




				<nav class="fixed-top"  id="menu" style="background-color:#293039">


					<ul id="nav-mobile" class="left hide-on-med-and-down">
						<li class="active"><a id="m1" href="inicialNaoLogado.php">Home</a></li>
						<li><a id="m2" href="form-add.php"> Cadastre-se</a></li>
						<li><a id="m3" class="justify-content-end mr-2" href="form-login.php">Sign in</a></li>

					</ul>

				<ul id="slide-out" class="sidenav">
					<li><a class="waves-effect" href="inicialNaoLogado.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a class="waves-effect" href="form-add.php"><i class="far fa-user"></i>   Cadastre-se</a></li>
					<li><div class="divider"></div></li>
					<li><a class="waves-effect" href="form-login.php"><i class="fas fa-sign-in-alt"></i> Sign in</a></li>

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