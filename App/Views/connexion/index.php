<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="./connexion/valid" method="POST">
					<div class="login100-form-avatar">
						<img src="assets/img/logo/logo.svg" alt="AVATAR">
					</div>

				
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Pseudo requis !">
						<input class="input100" type="text" name="username" placeholder="Pseudo ou email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mot de passe requis !">
						<input class="input100" type="password" name="pass" placeholder="Mot de passe" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Connexion
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
                    {% if get and get.error == 1 %}
                        {% set error = get.error %}
                        <h3 style="color: #B81B00;text-align: center;">Une erreur est survenue ! (Code erreur : {{ error }})</h3>
                    {% endif %}
                    </div>

					<div class="text-center w-full color_white">
						<a class="txt1" href="./inscription">
							Pas de compte ? En créer un 
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

		
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="assets/js/login.js"></script>

</body>
</html>