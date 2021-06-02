{% if session and session.grade != "Joueur" %}
<!DOCTYPE html>
<html lang="fr-FR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrateur - {{ session.name }} </title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Panel v<sup>1.0</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Gestion
            </div>
            {% if cr_actu.create_actu == 0 and md_actu.modify_actu == 0 %}
            {% else %}
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-bullhorn"></i>
                    <span>Gestion des actualités</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Choisir une action :</h6>
                        {% if session and not cr_actu.create_actu == false and cr_actu.create_actu == 1 %}
                        <a class="collapse-item" href="./admin/add_actuality">Créer une actualité</a>
                        {% endif %}
                        {% if session and not md_actu.modify_actu == false and md_actu.modify_actu == 1 %}
                        <a class="collapse-item" href="./admin/see_actuality">Voir les acutalités</a>
                        {% endif %}
                    </div>
                </div>
            </li>
            {% endif %}

            {% if cr_user.create_user == 0 and md_user.modify_user == 0 %}
            {% else %}
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Gestion des utilisateurs</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Choisir une action :</h6>
                        {% if session and not cr_user.create_user == false and cr_user.create_user == 1 %}
                        <a class="collapse-item" href="./admin/add_account">Ajouter un utilisateur</a>
                        {% endif %}
                        {% if session and not md_user.modify_user == false and md_user.modify_user == 1 %}
                        <a class="collapse-item" href="./admin/see_users">Voir les utilisateurs</a>
                        {% endif %}
                    </div>
                </div>
            </li>
            {% endif %}

            {% if rcon.rcon == 0 %}
            {% else %}
             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-hammer"></i>
                    <span>Commandes modérateur</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Choisir une action :</h6>
                        {% if session and not rcon.rcon == false and rcon.rcon == 1 %}
                        <a class="collapse-item" href="./admin/rcon">Commandes RCON</a>
                        {% endif %}
                    </div>
                </div>
            </li>
            {% endif %}
            {% if session and session.admin %}
             <!-- Nav Item - Utilities Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3"
                    aria-expanded="true" aria-controls="collapseUtilities3">
                    <i class="fas fa-user-shield"></i>
                    <span>Gestion des grades</span>
                </a>
                <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Choisir une action :</h6>
                        <a class="collapse-item" href="./admin/create_grade">Créer un grade</a>
                        <a class="collapse-item" href="./admin/modify_grade">Modifier un grade</a>
                    </div>
                </div>
            </li>
            {% endif %}
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Autres
            </div>

           
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="https://discord.gg/4g7PgHgMyK">
                    <i class="fab fa-discord"></i>
                    <span>Discord de support</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fab fa-goodreads-g"></i>
                    <span>Version du jeu : {{ server.version }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                  
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       

                       


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session.name }}</span>
                                {% if session and session.img_link %}
                                <img class="img-profile rounded-circle"src="{{ session.img_link }}">
                                {% else %}
                                <img class="img-profile rounded-circle"src="assets/img/undraw_profile.svg">
                                {% endif %}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Nombre d'utilisateurs</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ all_users }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                        {% if server and server.gq_online == true %}
                            <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Status du serveur</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Ouvert</div>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-lock-open fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% else %}
                            <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Status du serveur</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Fermé</div>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-window-close fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endif %}
                                
                        </div>

                          <!-- Pending Requests Card Example -->
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Auto-Connexion</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{ server.gq_joinlink }}">{{ server.gq_joinlink }}</a></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Nombre de joueurs in-game ( {{ server.gq_name }} )</div>
                                            {% if server and server.gq_numplayers != NULL %}
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ server.gq_numplayers }}/{{ server.gq_maxplayers }} ( {{ server.gq_maxplayers - server.gq_numplayers }} places restantes )</div>
                                            {% else %}
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Serveur fermé ou données non récupérables</div>
                                            {% endif %}
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-gamepad fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                       
                
                <!-- /.container-fluid -->
                      <!-- DataTales Example -->
             <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Joueurs en ligne</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Nombre de morts</th>
                                            <th>Temps de jeu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Nombre de morts</th>
                                            <th>Temps de jeu</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        {% for player in server.players %}
                                            {% if not player.name %}
                                                {% set player_name = "En cours de connexion" %}
                                            {% else %}
                                                {% set player_name = player.name %}
                                            {% endif %}
                                        <tr>
                                            <td>{{ player_name }}</td>
                                            <td>{{ player.score }}</td>
                                            <td>{{ player.time|round|date('H:i:s', '+00:00 GMT') }}</td>
                                        </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
          
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; {{ server.gq_hostname }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr de vouloir vous déconnecter ? </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Utilisez le bouton "Me déconnecter" pour fermer votre session et revenir au site.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" href="./deconnexion">Me déconnecter</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>


    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/demo/datatables-demo.js"></script>
</body>

</html>
{% else %}
    <h3>Pas la permission</h3>
{% endif %}