
<body>
    
<nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Peduli Bersama</a> -->
          <p class="navbar-brand fw-bold" style="">Peduli Bersama</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              <a class="nav-link" href="#tentang">Tentang</a>
              <a class="nav-link" href="#help">Bantuan</a>
              <a class="nav-link" href="<?= base_url("index.php/auth") ?>">Login</a>
            
            </div>
          </div>
        </div>
      </nav>
      <div class="clear"></div>
      <!-- content head -->
      <div class="content-header">
          <div class="row">
              <div class="col-lg-6  col1">
                    <div class="content-header-image " style="background-image: url(<?php echo base_url()?>assets/img/sedekah.jpg)"></div>


              </div>
              <div class="col-lg-6 col2">
                <span>
                  <h1>Yuk Sedekah</h1>
                  <h1>Untuk Bekal Akhirat</h1>
                  <div class="button-nav-container row ">
                    
                    <div class="button-nav-header col-sm-5">
                      <a href="<?= base_url("index.php/auth/user_login") ?>">
                      <button type="button" class="btn btn-primary">Wakaf Sekarang</button>
                      </a>
                    </div>
                    <div class="button-nav-header col-md-5">
                      <a href="<?= base_url("index.php/auth/user_login") ?>">
                      <button type="button" class="btn btn-primary">Infaq Sekarang</button>
                       </a>
                   </div>
                  
                </div>
                </span>
              </div>
          </div>
      </div>

      <!-- About -->
      <div class="about-container">
          <div class="about" id="tentang">
        
            <h1>Tentang Peduli Bersama</h1>
            <p>Peduli Bersama adalah suatu lembaga yang bertugas untuk memudahkan orang orang
                dan donatur untuk bersedekah dengan cara menyediakan layanan sedekah online.
                Donasi yang terkumpul akan di serahkan kepada yang lebih membutuhkan.</p>
          </div>

      </div>
      <div class="info">
        <h1>Apa Itu Wakaf dan Infaq ?</h1>
        <div class="info-wakaf">
        <p>Wakaf, adalah menahan harta yang memberikan manfaatnya dijalan Allah. pengertian wakaf menurut istilah, yaitu “perbuatan hukum seseorang atau kelompok orang atau badan hukum yang memisahkan sebagian dari benda miliknya dan melembagakannya untuk selama-lamanya guna kepentingan ibadat atau kerpeluan umum lainnya sesuai dengan ajaran Islam” .</p>  

        </div>
        <div class="info-infaq">
        <p>Infak menurut bahasa adalah dari kata anfaqa-yunfiqu-infaqan yang artinya mendermakan. Sedangkan menurut istilah adalah memberikan sesuatu kepada orang lain baik berupa harta maupun yang lainnya.</p>
        </div>
        
      </div>


    <div class="bantuan row" id="help">
      <h1>Bantuan Melakukan Infaq dan Wakaf di E-Wakaf</h1>
        <div class="col-md-4">
          <div class="step">
          <div class="circle col-3">
            <h2>1</h2>
          </div>
          <div class="step-item col-9">
          <p>Anda harus register terlebih dahulu jika belum memiliki akun. setelah register anda diharuskan login terlebih dahulu.</p>
          </div>
          </div>
        </div>
      <div class="col-md-4">

        <div class="step">
          <div class="circle col-3">
            <h2>2</h2>
          </div>
          <div class="step-item col-9">
          <p>Jika sudah login, maka anda bisa memilih menu antara wakaf, infak dan riwayat transaksi. pilihlah sesuai apa yang anda ingin lakukan.</p>
          </div>
         </div>  
      
      </div>
        <div class="col-md-4">
          <div class="step">
          <div class="circle col-3">
            <h2>3</h2>
          </div>
          <div class="step-item col-9">
          <p>Anda diwajibkan mengisi form wakaf atau infaq terlebih dahulu. Pada form wakaf anda harus memilih kategori dan menuliskan deskripsi tentang apa yang anda wakaf kan. setelah isi form maka anda harus menyelesaikan transaksi sesuai prosedur. </p>
          </div>
        </div>
         <div class="clear"></div>  
        </div>
    </div>
      
    <div class="contact">
      
    </div>

      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>