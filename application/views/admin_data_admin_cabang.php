
    <!-- end of topbar -->
    <div class="container-fluid">
                    <h1>Data Admin Cabang</h1>
                    
    <!-- end of topbar -->
    <div class="container-fluid">
    <div class="content transaction_draft">
      
          <table class="table table-striped ms-auto me-auto">
            <thead>
              <tr>
                <th scope="col">Id</th>
                
                <th scope="col">Username</th>
                
                <th scope="col">Cabang</th>

                <th scope="col">Detail</th>
                
                
              </tr>
            </thead>
            <tbody>
               
            <?php foreach($dataCabang as $dc){ ?>
              <tr>
                <form action="<?= base_url('index.php/admin/detail_cabang') ?>" method="POST">
                <input type="hidden" value="<?= $dc['username']?>" name="username">
                <th scope="row"><?= $dc['id'] ?></th> 
                <td><?= $dc['username']; ?></td>
                <td><?= $dc['cabang']; ?></td>
                <td><button type="submit" class="btn btn-primary" value="<?= $dc['id']?>">Detail</button></td>
                </form>
               
                
               
            </tr>
              <?php } ?>
              
              
             
            
              
            </tbody>
          </table>

    </div>
                   
                    
    </div>

    <!-- close div in navbar file layout -->
    </div>
</div>  


    
