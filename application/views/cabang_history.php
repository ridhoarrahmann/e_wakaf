
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
                
                <th scope="col">Nama</th>
               
                <th scope="col">Nominal</th>
                <th scope="col">Category</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                
                
              </tr>
            </thead>
            <tbody>
               
            <?php foreach($transaksi as $tr){ ?>
              <tr>
                <form action="<?= base_url('index.php/admin/confirm_transaction') ?>" method="post">
                  <input type="hidden" name="id_transaction" value="<?=$tr['id_transaksi']?>">
                
                <th scope="row"><?= $tr['id_transaksi'] ?></th>
                
                <td><?= $tr['name']; ?></td>
                
                <td><?= $tr['phone']; ?></td>
                <td><?= $tr['category']; ?></td>
                <td><?= $tr['date']; ?></td>
                <td><?= $tr['status']; ?></td>
                
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


    
