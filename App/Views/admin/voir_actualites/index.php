{% if session and not has_perm == false and has_perm.modify_actu == 1 %}
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
     <link href="../assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">


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
                <a class="nav-link" href="../admin">
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
                    <span>Gestion des actualit??s</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Choisir une action :</h6>
                        {% if session and not cr_actu.create_actu == false and cr_actu.create_actu == 1 %}
                        <a class="collapse-item" href="../admin/add_actuality">Cr??er une actualit??</a>
                        {% endif %}
                        {% if session and not has_perm.modify_actu == false and has_perm.modify_actu == 1 %}
                        <a class="collapse-item" href="#"><b>Voir les acutalit??s</b></a>
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
                        <a class="collapse-item" href="../admin/add_account">Ajouter un utilisateur</a>
                        {% endif %}
                        {% if session and not md_user.modify_user == false and md_user.modify_user == 1 %}
                        <a class="collapse-item" href="../admin/see_users">Voir les utilisateurs</a>
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
                    <span>Commandes mod??rateur</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Choisir une action :</h6>
                        {% if session and not rcon.rcon == false and rcon.rcon == 1 %}
                        <a class="collapse-item" href="../admin/rcon">Commandes RCON</a>
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
                        <a class="collapse-item" href="../admin/create_grade">Cr??er un grade</a>
                        <a class="collapse-item" href="../admin/modify_grade">Modifier un grade</a>
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
                                    D??connexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   

                         


                    <!-- Content Row -->

                       
                
       <!-- /.container-fluid -->
                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Toutes les annonces ({{ all_annonces|length }})</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Contenu</th>
                                            <th>Administrateur</th>
                                            <th>Date de publication</th>
                                            <th>Modification</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Contenu</th>
                                            <th>Administrateur</th>
                                            <th>Date de publication</th>
                                            <th>Modification</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        {% for annonce in all_annonces %}
                                        <tr>
                                            <td>{{ annonce.title }}</td>
                                            <td>{{ annonce.content }}</td>
                                            <td>{{ annonce.by_admin }}</td>
                                            <td>{{ annonce.date }}</td>
                                            <td class="annonce" annonce_id="{{ annonce.id }}" annonce_title="{{ annonce.title }}" annonce_content="{{ annonce.content }}" annonce_date={{ annonce.date }} annonce_admin={{ annonce.by_admin }}  data-toggle="modal" data-target="#modalLoginAvatar">Modifier l'annonce n??{{ annonce.id }}</td>
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
                        <span>Copyright &copy; </span>
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
                    <h5 class="modal-title" id="exampleModalLabel">??tes-vous s??r de vouloir vous d??connecter ? </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Utilisez le bouton "Me d??connecter" pour fermer votre session et revenir au site.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" href="./deconnexion">Me d??connecter</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
     
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2" id="user_name">Bonjour, {{ session.name }}</h5>

        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre de l'annonce</label>
                <input type="text" class="form-control" id="annonce_title" aria-describedby="emailHelp" placeholder="Modifier le titre de l'annonce">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contenu de l'annonce</label>
                <textarea style="resize: vertical !important;"class="form-control" id="annonce_content" placeholder="Contenu de l'annonce"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Date de l'annonce</label>
                <input type="text" class="form-control" id="annonce_date" placeholder="Date de publication de l'annonce" disabled>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Administrateur</label>
                <input type="text" class="form-control" id="annonce_admin" placeholder="Date de publication de l'annonce" disabled>
            </div>
            <br>
            <a id="send" class="btn btn-primary">Envoyer</a>
        </form>

        

    </div>
    <!--/.Content-->
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


    <script>
    $(document).ready(function() {
        $(".annonce").off("click").on("click", function() {
            id_bdd = $(this).attr("annonce_id");
            annonce_title = $(this).attr("annonce_title");
            annonce_content = $(this).attr("annonce_content");
            annonce_date = $(this).attr("annonce_date");
            annonce_admin = $(this).attr("annonce_admin");

            $("#annonce_title").val(annonce_title);
            $("#annonce_content").html(annonce_content);
            $("#annonce_date").attr("value", annonce_date);
            $("#annonce_admin").attr("value", annonce_admin);
            
           
            $("#send").off("click").on("click", function() {
                const title_val = $("#annonce_title").val();
                const content_val = $("#annonce_content").val();
                $.post("../admin/see_actuality/modify", {id: id_bdd, title: title_val, content: content_val}, function(res) {
                    document.location.reload();
                })
            })
        })
    })
    
    </script>
</body>

</html>
{% else %}
    <h3>Pas la permission</h3>
{% endif %}