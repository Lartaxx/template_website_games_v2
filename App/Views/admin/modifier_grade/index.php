{% if session and session.admin == 1 %}
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
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
                    <span>Gestion des actualités</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Choisir une action :</h6>
                        {% if session and not cr_actu.create_actu == false and cr_actu.create_actu == 1 %}
                        <a class="collapse-item" href="../admin/add_actuality">Créer une actualité</a>
                        {% endif %}
                        {% if session and not md_actu.modify_actu == false and md_actu.modify_actu == 1 %}
                        <a class="collapse-item" href="../admin/see_actuality">Voir les acutalités</a>
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
                    <span>Commandes modérateur</span>
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
                        <a class="collapse-item" href="../admin/create_grade">Créer un grade</a>
                        <a class="collapse-item" href="#"><b>Modifier un grade</b></a>
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
                <a class="nav-link" href="#">
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

                       
                
       <!-- /.container-fluid -->
                      <!-- DataTales Example -->
                      {% if get and get.valid == 1 %}
                        <h3 style="color: green;">Le grade a bien été modifiée !</h3>
                    {% endif %}
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tous les grades ({{ grades|length }})</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom du grade</th>
                                            <th>Créer actualité</th>
                                            <th>Modifier actualité</th>
                                            <th>Créer un utilisateur</th>
                                            <th>Modifier un utilisateur</th>
                                            <th>RCON</th>
                                            <th>Modification</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom du grade</th>
                                            <th>Créer actualité</th>
                                            <th>Modifier actualité</th>
                                            <th>Créer un utilisateur</th>
                                            <th>Modifier un utilisateur</th>
                                            <th>RCON</th>
                                            <th>Modification</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        {% for _, v in grades %}
                                        <tr>    
                                            <td>{{ v.grade_name }}</td>
                                            <td>{{ v.create_actu }}</td>
                                            <td>{{ v.modify_actu }}</td>
                                            <td>{{ v.create_user }}</td>
                                            <td>{{ v.modify_user }}</td>
                                            <td>{{ v.rcon }}</td>
                                            <td class="annonce" data-toggle="modal" data-target="#modalLoginAvatar" grade_id={{ v.id }} nom_grade={{  v.grade_name }} create_actu={{ v.create_actu }} modify_actu={{ v.modify_actu }} create_user={{ v.create_user }} modify_user={{ v.modify_user }} rcon={{ v.rcon }}>Modifier le grade {{ v.grade_name }}</td>
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
                <label for="exampleInputEmail1">Nom du grade</label>
                <input type="text" class="form-control" id="nom_grade" aria-describedby="emailHelp" placeholder="Modifier le titre de l'annonce">
            </div>
            <h4 class="text-center">Actualités : </h4>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="cr_actu">
                                                <label class="custom-control-label" for="customCheck">Créer une actualité
                                                    </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" name="md_actu">
                                                <label class="custom-control-label" for="customCheck2">Modifier une actualité
                                                    </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="text-center">Utilisateurs : </h4>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3" name="cr_user">
                                                <label class="custom-control-label" for="customCheck3">Créer un utilisateur
                                                    </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4" name="md_user">
                                                <label class="custom-control-label" for="customCheck4">Modifier un utilisateur
                                                    </label>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="text-center">Rcon : </h4>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5" name="rcon">
                                                <label class="custom-control-label" for="customCheck5">Utiliser les commandes RCON
                                                    </label>
                                            </div>
                                        </div>
            <br>
            <a id="send" class="btn btn-primary">Envoyer</a>
        </form>

        

    </div>
    <!--/.Content-->
  </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>


    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/demo/datatables-demo.js"></script>


    <script>
    $(document).ready(function() {
        $(".annonce").off("click").on("click", function() {
            id_bdd = $(this).attr("grade_id");
            grade_name = $(this).attr("nom_grade");
            create_actu = $(this).attr("create_actu");
            modify_actu = $(this).attr("modify_actu");
            create_user = $(this).attr("create_user");
            modify_user = $(this).attr("modify_user");
            rcon = $(this).attr("rcon");
            $("#nom_grade").val(grade_name);
            $("#customCheck").attr("checked", Boolean(Number(parseInt(create_actu))));
            $("#customCheck2").attr("checked", Boolean(Number(parseInt(modify_actu))));
            $("#customCheck3").attr("checked", Boolean(Number(parseInt(create_user))));
            $("#customCheck4").attr("checked", Boolean(Number(parseInt(modify_user))));
            $("#customCheck5").attr("checked", Boolean(Number(parseInt(rcon))));
            
           
            $("#send").off("click").on("click", function() {
                const grade_name = $("#nom_grade").val();
                const perm1 = ($("#customCheck")[0].checked) ? 1 : 0 ;
                const perm2 = ($("#customCheck2")[0].checked) ? 1 : 0 ;
                const perm3 = ($("#customCheck3")[0].checked) ? 1 : 0 ;
                const perm4 = ($("#customCheck4")[0].checked) ? 1 : 0 ;
                const perm5 = ($("#customCheck5")[0].checked) ? 1 : 0 ;
                
                $.post("../admin/modify_grade/valid", {id: id_bdd, create_actu: perm1, modify_actu: perm2, create_user: perm3, modify_user: perm4, rcon: perm5, grade_name: grade_name}, function(res) {
                    if (res) {
                   document.location.reload();
                   window.location.replace("../admin/modify_grade?valid=1");
                    }
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