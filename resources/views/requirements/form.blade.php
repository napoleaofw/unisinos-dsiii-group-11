<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lar São Vicente de Paula - UNISINOS DSIII - Grupo 11</title>

  <!-- Custom fonts for this template-->
  <link href="{{ mix('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ mix('vendor/startbootstrap-sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">

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
            <a class="collapse-item" href="/items">Itens</a>
            <a class="collapse-item active" href="/requirements">Necessidades</a>
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
          <h1 class="h3 mb-4 text-gray-800">Necessidade</h1>

          <div class="row">

            <div class="col-lg-12">

              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Formulário de necessidade do sistema</h6>
                </div>
                <div class="card-body">

                  @if($errors->any())
                    <div class="card border-left-danger alert alert-danger">
                      <div class="card-body">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  @endif

                  <p>Preencha os dados para cadastrar uma nova necessidade no sistema.</p>
                  <!-- <p>Preencha os dados para atualizar a necessidade no sistema.</p> -->
                  
                  <form action="{{ isset($record->id) ? route('requirements.update', $record->id) : route('requirements.store') }}" method="POST">
                    @csrf
                    @method(isset($record->id) ? "PUT" : "POST")
                    <div class="form-group">
                      <select class="form-control" name="item_id" id="item">
                        <option value="">Selecione o item</option>
                        @foreach($itemRecords as $itemRecord)
                          <option value="{{ $itemRecord->id }}" {{ $itemRecord->id == old('item_id', $record->item_id) ? "selected" : "" }}>{{ $itemRecord->description }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="urgency_id" id="urgency">
                        <option value="">Selecione a urgência</option>
                        @foreach($urgencyRecords as $urgencyRecord)
                          <option value="{{ $urgencyRecord->id }}" {{ $urgencyRecord->id == old('urgency_id', $record->urgency_id) ? "selected" : "" }}>{{ $urgencyRecord->description }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantidade" value="{{ old('quantity', $record->quantity) }}">
                    </div>
                    <a href="/requirements" class="btn btn-primary">Cancelar</a>
                    <input type="submit" class="btn btn-success ml-3 float-right" value="Salvar">
                    @if(isset($record->id))
                      <a class="btn btn-danger float-right" href="#" data-toggle="modal" data-target="#deleteModal">
                        Excluir
                      </a>
                    @endif
                  </form>
                </div>
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

  @if(isset($record->id))
    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Excluir registro</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Você tem certeza de que deseja excluir esse registro?</p>
            <p>Os dados serão removidos permanentemente do sistema.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
            <form action="{{ route('requirements.destroy', $record->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Excluir">
            </form>
          </div>
        </div>
      </div>
    </div>
  @endif

  <!-- Bootstrap core JavaScript-->
  <script src="{{ mix('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ mix('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ mix('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ mix('vendor/startbootstrap-sb-admin-2/js/sb-admin-2.min.js') }}"></script>

  <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>