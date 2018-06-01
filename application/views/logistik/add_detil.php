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
 <div class="card card-accent-success">
    <div class="card-header">
      <h5>  Detil Pesanan </h5>
    </div>
     
 <div class="row-fluid">
  <div class="card-body">
            <div class="span6">
                <form action="<?php echo base_url(). 'c_detilpesanan/add_detil_pesanan/'.$id_pesanan; ?>" name ="userinput"  method="POST">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th width="150px">Nama Barang</th>
                                <th width="250px">Spesifikasi Barang</th>
                                <th width="50px">Volume</th>
                                <th width="50px">Satuan</th>
                                <th width="80px"></th>
                            </tr>
                        </thead>
                        <!--elemet sebagai target append-->
                        <tbody id="itemlist">
                            <tr>
                                <td><input name="nama_input[0]" class="form-control" /></td>
                                <td><input name="spesifikasi_input[0]" class="form-control" /></td>
                                <td><input name="volume_input[0]" class="form-control" /></td>
                                <td><input name="satuan_input[0]" class="form-control" /></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-default" onclick="additem(); return false"><i class="glyphicon glyphicon-plus"></i>Tambah</button>
                                    <button name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i>Selesai</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>


                    <?php
                      // // pas nambah disave dulu ke array terus kalo misal udah di click slesai lempar ke controller
                      // if (isset($_POST['submit'])){
                      //   $nama = $_POST['nama_input'];
                      //   $spesifikasi = $_POST['spesifikasi_input'];
                      //   $volume = $_POST['volume_input'];
                      //   $satuan = $_POST['satuan_input'];

                      //   print_r( $nama);

                      //   redirect(base_url('c_detilpesanan/add_detailpesanan'))
                      // }

                    ?>
                </form>
                </div>
                </div>
            </div>
            </main>
            </div>


            <script>
              
              var i = 1;
              function additem() {
                var itemlist = document.getElementById('itemlist');
                
              //                membuat element
                var row = document.createElement('tr');
                var nama = document.createElement('td');
                var spesifikasi = document.createElement('td');
                var volume = document.createElement('td');
                var satuan = document.createElement('td');
                var aksi = document.createElement('td');

              //                meng append element
                itemlist.appendChild(row);
                row.appendChild(nama);
                row.appendChild(spesifikasi);
                row.appendChild(volume);
                row.appendChild(satuan);
                row.appendChild(aksi);

              //                membuat element input
                var nama_input = document.createElement('input');
                nama_input.setAttribute('name', 'nama_input[' + i + ']');
                nama_input.setAttribute('class', 'form-control');

                var spesifikasi_input = document.createElement('input');
                spesifikasi_input.setAttribute('name', 'spesifikasi_input[' + i + ']');
                spesifikasi_input.setAttribute('class', 'form-control');

                var volume_input = document.createElement('input');
                volume_input.setAttribute('name', 'volume_input[' + i + ']');
                volume_input.setAttribute('class', 'form-control');

                var satuan_input = document.createElement('input');
                satuan_input.setAttribute('name', 'satuan_input[' + i + ']');
                satuan_input.setAttribute('class', 'form-control');



                var hapus = document.createElement('span');

                nama.appendChild(nama_input);
                spesifikasi.appendChild(spesifikasi_input);
                volume.appendChild(volume_input);
                satuan.appendChild(satuan_input);

                aksi.appendChild(hapus);

                hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i>Hapus </button>';
              //                Aksi Delete
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };

                i++;
              }
            </script>