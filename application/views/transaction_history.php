
    <div class="content transaction_history">
      
          <table class="table table-striped ms-auto me-auto">
            <thead>
              <tr>
                <th scope="col">date</th>
                <th scope="col">Nominal</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">status</th>
                
              </tr>
            </thead>
            <tbody>
            <?php foreach($transaction as $tr){ ?>
              <tr>
                <th scope="row"><?= $tr['date'] ?></th>
                <td><?= $tr['nominal']; ?></td>
                <td><?= $tr['username']; ?></td>
                <td><?= $tr['category']; ?></td>
                <td><?= $tr['status']; ?></td>
                
              </tr>
              <?php } ?>
              
             
            
              
            </tbody>
          </table>

    </div>
