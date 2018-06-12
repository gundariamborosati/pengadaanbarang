<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
    <span class="navbar-toggler-icon"></span>
    </button>
    <style type="text/css">
    body { font-family: sans-serif; }
    </style>
    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>">Dashboard</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Selamat datang <?php echo $this->session->userdata('username');?>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="<?php echo base_url('/c_logistik/form_update');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
          <a class="dropdown-item" href="<?php echo base_url('c_logistik/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>"><i class="icon-speedometer"></i>Logistik Dashboard </a>
          </li>
          <li class="nav-title">
            Menu
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>"><i class="fa fa-home"></i> Home</a>
          </li>
           <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_pesanan/listPesanan');?>"><i class="fa fa-shopping-cart"></i> Pesanan </a>
              </li>
           <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i> Kirim Surat </a>          
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                 <a class="nav-link" href="<?php echo base_url('/c_suratKeluar/inputSuratCustomer');?>"><i class="fa fa-comment"></i> Customer </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-download"></i> Vendor </a>
              </li> 
            </ul>
          </li>  
          </li>
          </li>
           <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i>Dokumen</a>          
            <ul class="nav-dropdown-items">   
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_suratKeluar/viewSuratKeluarLogistik');?>"><i class="fa fa-share"></i> Surat Keluar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" <?php echo base_url('/c_suratMasuk/surat_masukLogistik/');?>" > <i class="fa fa-download"></i> Kotak Masuk</a>
              </li>
          
            </ul>
          </li>   
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-pencil"></i>Kelola</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_logistik/kelola_user');?>"><i class="fa fa-user"></i> Kelola user</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_progress/viewProgress');?>"><i class="fa fa-tasks"></i> Kelola progress pengadaan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_statusPesanan/input');?>"><i class="fa fa-shopping-cart"></i> Kelola status pesanan</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_ulasan/viewUlasanlog');?>"><i class="fa fa-comment"></i>View Ulasan</a>
          </li>
          <li class="divider"></li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">
      
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Logistik</a></li>
        <li class="breadcrumb-item active">Kelola Pesanan</li>

        <!-- Breadcrumb Menu-->
      </ol>
      <!-- /.conainer-fluid -->
     
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h5> Kirim Spph </h5>
          </div>
          <body>
                  <!-- Navigation -->

   
      <?php foreach($pesanan as $detil): ?>
     <div id="page-wrapper">
      <div class="row">
          <div class="col-lg-12">
                       
          </div>
                    <!-- /.col-lg-12 -->
          </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                      </div>
                           <!--  <div class="panel-body"> -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-6">
                              <?php echo form_open_multipart(base_url('c_suratKeluar/kirim_spphvendor')) ;?>
                            <div class="form-group">
                 <!-- departemen -->
                            
                               <div class="form-group">
                                <label for="tipe" class="col-md-3 control-label">Vendor</label>
                                  <div class="col-md-7 required">
                                      <input type="type" id="tujuan_vendor" name="tujuan_vendor" velue="<?php echo $user['status']; ?>" ">        
                                  </div>
                              </div>
                            <input type="hidden" id="tujuan_vendor" name="tujuan_vendor" velue="">
                            <input type="hidden" id="no_surat" name="no_surat" velue="$detil['no_surat']">
                            <input type="hidden" id="jenis_surat" name="jenis_surat" velue="SPPH">                            
                         
                              <div class="form-group">
                                <label for="tipe" class="col-md-3 control-label">Upload File </label>
                                  <div class="col-md-7 required">
                                    <input type="file" class="form-control" placeholder="choose file" name="file" value="file" required>
                                  </div>
                              </div>

                            <div class="form-group">
                              <label for="tipe" class="col-md-3 control-label"><br>Penanggung Jawab </label>
                                <div class="col-md-7 required">
                                  <input type="text" name="penanggung_jawab" class="form-control"  rows="7" cols="80" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="tipe" class="col-md-3 control-label">Contact</label>
                                <div class="col-md-7 required">
                                  <input type="text" name="no_hp" class="form-control"  rows="7" cols="80" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="tipe" class="col-md-3 control-label">pesan</label>
                                <div class="col-md-7 required">
                                  <textarea name="pesan" class="form-control"  rows="7" cols="80" ></textarea>
                                </div>
                            </div>

                              <div class="form-group">
                                <div class="col-md-7 required">
                                  <button type="submit" name="simpan" value="submit" class="btn btn-primary">kirim</button>
                                </div>
                              </div> 
                          </form>
                              </div>
            </div>
           </div>
            </div>
            </div>
            <?php endforeach; ?>
            </main>
            </div>