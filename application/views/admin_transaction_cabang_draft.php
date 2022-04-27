
    <!-- end of topbar -->
    <div class="container-fluid">
    <div class="content transaction_draft">
      <h1>Konfirmasi Transaksi Cabang</h1>
      
          <table class="table table-striped ms-auto me-auto">
            <thead>
              <tr>
                <th scope="col">Id Transaksi</th>
                <th scope="col">Cabang</th>
                <th scope="col">Nama</th>
                <th scope="col">Telepon</th>
                <th scope="col">Nominal</th>
                <th scope="col">Kategori</th>
                <th scope="col">Lembaga</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
            
            <?php foreach($transaction_draft as $tr){ ?>
              
              <tr>
              
              
                <th scope="row"><?= $tr['id_transaksi'] ?></th>
                <td><?= $tr['cabang_name']; ?></td>
                <td><?= $tr['name']; ?></td>
                <td><?= $tr['phone']; ?></td>
                <td><?= $tr['nominal']; ?></td>
                <td><?= $tr['category']; ?></td>
                <td><?= $tr['lembaga_name']; ?></td>
                
                <td>
                <form action="<?= base_url('index.php/admin/transaction_confirmation_cabang') ?>" method="post">
                <a href="<?= base_url("index.php/admin/transaction_confirmation_cabang");?>">
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


    