
    <div class="content transaction_history">
      
          <table class="table table-striped ms-auto me-auto">
            <thead>
              <tr>
                <th scope="col">date</th>
                <th scope="col">id</th>
               
                <th scope="col">Kategori</th>
                <th scope="col">status</th>
                <th scope="col">Print Out</th>
                
              </tr>
            </thead>
            <tbody>
            <?php foreach($transaction as $tr){ ?>
              <tr>
                <th scope="row"><?= $tr['date'] ?></th>
              
                <td><?= $tr['id_transaksi']; ?></td>
                <td><?= $tr['category']; ?></td>
                <td><?= $tr['status']; ?></td>
                <td><?= $tr['kode_transaksi']; ?></td>
                <td><a href="<?= base_url('index.php/user/printOut/'.$tr['kode_transaksi'])?>"><button class="btn btn-primary">Detail</button></a></td>
                
              </tr>
              <?php } ?>
              
             
            
              
            </tbody>
          </table>

    </div>
