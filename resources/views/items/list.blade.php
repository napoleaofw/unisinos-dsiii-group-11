<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lar São Vicente de Paula - UNISINOS DSIII - Grupo 11</title>

  <!-- Custom fonts for this template -->
  <link href="{{ mix('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ mix('vendor/startbootstrap-sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{ mix('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Lar São Vicente de Paula</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Sistema v1.0.0
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Suprimentos</h6>
            <a class="collapse-item active" href="/items">Itens</a>
            <a class="collapse-item" href="/requirements">Necessidades</a>
          </div>
        </div>
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
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nome do Usuário</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Atividades
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Itens</h1>
          <p class="mb-4">Lista de itens cadastrados no sistema.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Registros</h6>
            </div>
            <div class="card-body">
              <a href="/items/form" class="btn btn-primary" style="float: right; margin-bottom: 20px;">Novo registro</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Código</th> 
                      <th>Descrição</th>
                      <th>Categoria</th>
                      <th>Unidade de medida</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Código</th> 
                      <th>Descrição</th>
                      <th>Categoria</th>
                      <th>Unidade de medida</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Fralda</td>
                      <td>Higiene</td>
                      <td>PT - Pacote</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Papel higiênico</td>
                      <td>Higiene</td>
                      <td>PT - Pacote</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Creme dental</td>
                      <td>Higiene</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Escova de dentes</td>
                      <td>Higiene</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Pente</td>
                      <td>Higiene</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Camiseta manga longa</td>
                      <td>Vestuário</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Casaco</td>
                      <td>Vestuário</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Calça de moletom</td>
                      <td>Vestuário</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Calça jeans</td>
                      <td>Vestuário</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Tênis</td>
                      <td>Vestuário</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Arroz</td>
                      <td>Alimentos</td>
                      <td>kg - Kilograma</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Feijão</td>
                      <td>Alimentos</td>
                      <td>kg - Kilograma</td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Frango</td>
                      <td>Alimentos</td>
                      <td>kg - Kilograma</td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>Alface</td>
                      <td>Alimentos</td>
                      <td>kg - Kilograma</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>Tomate</td>
                      <td>Alimentos</td>
                      <td>kg - Kilograma</td>
                    </tr>
                    <tr>
                      <td>16</td>
                      <td>Bengala</td>
                      <td>Locomoção</td>
                      <td>UN - Unidade</td>
                    </tr>
                    <tr>
                      <td>17</td>
                      <td>Cadeira de rodas</td>
                      <td>Locomoção</td>
                      <td>UN - Unidade</td>
                    </tr>
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
            <span>Copyright &copy; 2019 Lar São Vicente de Paula. Todos os direitos reservados.</span>
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

  <!-- Bootstrap core JavaScript-->
  <script src="{{ mix('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ mix('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ mix('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ mix('vendor/startbootstrap-sb-admin-2/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ mix('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ mix('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script type="text/javascript">
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
      $('#dataTable').DataTable({
        "language": {
          "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
        },
        "order": [[ 2, "asc" ]]
      });
    });
  </script>

  <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
