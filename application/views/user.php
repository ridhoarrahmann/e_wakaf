
    
  

     <div class="content"> 

      <div class="jumbotron" style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(<?= base_url('assets/')?>img/sedekah.jpg);">
        <div class="row">
            <div class="col-md-10 ms-auto me-auto jumbotron-content">
                <div class="halo">
                    <span>
                    <h1>Halo, <?= $user['name'] ?></h1>
                </span>
                    <h1>Yuk Mulai Bersedekah</h1>
                </div>
            </div>
        </div>
      </div>

      <!-- Menu -->
      <div class="menu">
        <h1>Menu</h1>
        <div class="row">
            <div class="col-md-4 menu-item-container">
            <a href="<?= base_url('index.php/user/sedekah')?>">
            <div class="menu-item d-flex justify-content-center align-items-center">    
            
                <div class="menu-item-title">
                    <h3>Wakaf</h3>
                </div>
                
            </div>
            </a>
            </div>
            <div class="col-md-4 menu-item-container" >
                 <a href="<?= base_url('index.php/user/infaq')?>">
                <div class="menu-item d-flex justify-content-center align-items-center">
               
                <div class="menu-item-title">
                    <h3>infak</h3>
                </div>
                
                </div>
            </a>
            </div>
            <div class="col-md-4 menu-item-container" >
                <a href="<?= base_url('index.php/user/history')?>">
                <div class="menu-item d-flex justify-content-center align-items-center">
                
                <div class="menu-item-title">
                    <h3>Riwayat</h3>
                </div>
                
                </div></a>
            </div>
        </div>
      </div>

      
    </div>
    
