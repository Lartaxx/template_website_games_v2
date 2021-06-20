{% if session and not has_perm == false and has_perm.create_actu == 1 %}
<!DOCTYPE html>
<html lang="fr-FR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Lartaxx">

    <title>Administrateur - {{ session.name }}</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenue {{ session.name }}</h1>
                                    </div>
                                    <form class="user" action="./add_actuality/valid" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Entrez un titre" name="title">
                                        </div>
                                        <div class="form-group">
                                        <textarea class="form-control form-control-user" placeholder="Entrer un contenu (<br> pour faire un saut de ligne )" name="content"></textarea>

                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Créer l'actualité
                                        </button>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="../admin">Retour au panel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

     <!-- Bootstrap core JavaScript-->
     <script src="../assets/js/jquery/jquery.min.js"></script>
    <script src="../assets/js/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/js/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>


    <script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/demo/datatables-demo.js"></script>

</body>

</html>
{% else %}
    <h3>Pas la permission !</h3>
{% endif %}