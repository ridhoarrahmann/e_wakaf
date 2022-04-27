
    <!-- end of topbar -->
    <div class="container-fluid">
    <div class="content transaction_draft">
        <h1>Konfirmasi Transaksi</h1>
          <table class="table table-striped ms-auto me-auto">
            <thead>
              <tr>
                <th scope="col">Id Transaksi</th>
                <th scope="col">Nama</th>
                <th scope="col">email</th>
                <th scope="col">Nominal</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
            
            <?php foreach($transaction_draft as $tr){ ?>
              
              <tr>
              
              
                <th scope="row"><?= $tr['id_transaksi'] ?></th>
                
                <td><?= $tr['name']; ?></td>
                <td><?= $tr['email']; ?></td>
                <td><?= $tr['nominal']; ?></td>
                <td><?= $tr['category']; ?></td>
                
                <td>
                <form action="<?= base_url('index.php/admin/transaction_confirmation') ?>" method="post">
                <a href="<?= base_url("index.php/admin/transaction_confirmation");?>">
                  <button type="submit" name="id_transaction" class="btn btn-primary" value="<?= $tr['id_transaksi']?>" >Konfirmasi</button>
                </a>
                </form>
                </td>
                
              </tr>
              
            
              <?php } ?>
              </form>
             
            
              
            </tbody>
          </table>

    </div>
                   
                    
    </div>

    <!-- close div in navbar file layout -->
    </div>
</div>  


    