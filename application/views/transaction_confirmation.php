
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
                <th scope="col">Action</th>
                
                
              </tr>
            </thead>
            <tbody>
               
            <?php foreach($transaksi_draft as $tr){ ?>
              <tr>
                <form action="<?= base_url('index.php/admin/status_update') ?>" method="post">
                  <input type="hidden" name="id_transaction" value="<?=$tr['id_transaksi']?>">
                
                <th scope="row"><?= $tr['id_transaksi'] ?></th>
                <td><?= $tr['username']; ?></td>
                <td><?= $tr['name']; ?></td>
                <td><?= $tr['email']; ?></td>
                <td><?= $tr['nominal']; ?></td>
                <td><?= $tr['date']; ?></td>
                <td><button type="submit" class="btn btn-primary" >Primary</button></td>
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


    
    </div>

    <!-- close div in navbar file layout -->
    </div>
</div>  