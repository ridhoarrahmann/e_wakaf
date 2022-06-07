  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">E-Wakaf</a> -->
          <div class="profile ms-auto">
            <p><?= $user['name']?></p>
        </div>
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-auto">

              <a class="nav-link active " aria-current="page" href="<?= base_url('index.php/user')?>">Beranda</a>
              <a class="nav-link" href="<?= base_url('index.php/user/sedekah')?>">Wakaf</a>
              <a class="nav-link" href="<?= base_url('index.php/user/infaq')?>">Infaq</a>
              <a class="nav-link " href="<?= base_url('index.php/user/history')?>">Riwayat</a>
              <a class="nav-link " href="<?= base_url('index.php/auth/logout')?>">Log Out</a>
            
            </div>
            
          </div>
         
        </div>
      </nav>