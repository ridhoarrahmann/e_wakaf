
    <!-- end of topbar -->
    <div class="container-fluid">
                    <h1>Confirmation</h1>
                    
    <!-- end of topbar -->
    <div class="container-fluid">
    <div class="content transaction_draft">
      
          <table class="table table-striped ms-auto me-auto">
            <thead>
              <tr>
                <th scope="col">Id Transaksi</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">email</th>
                <th scope="col">Nominal</th>
                <th scope="col">Date</th>
     
                
                
              </tr>
            </thead>
            <tbody>
            
            <?php foreach($dataWakaf as $ds){ ?>
              <tr>
                <form action="<?= base_url('index.php/admin/confirm_transaction') ?>" method="post">
                  <input type="hidden" name="id_transaction" value="<?=$ds['id_transaksi']?>">
                
                <th scope="row"><?= $ds['id_transaksi'] ?></th>
                <td><?= $ds['username']; ?></td>
                <td><?= $ds['name']; ?></td>
                <td><?= $ds['email']; ?></td>
                <td><?= $ds['nominal']; ?></td>
                <td><?= $ds['date']; ?></td>
                
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


    
