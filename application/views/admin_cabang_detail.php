

    <!-- end of topbar -->
    <div class="container-fluid">
                    <h1>Transaksi Admin Cabang</h1>
                    
    <!-- end of topbar -->
    <div class="container-fluid">
    <div class="content transaction_draft">
      
          <table class="table table-striped ms-auto me-auto">
            <thead>
              <tr>
                <th scope="col">Id-Transaksi</th>
                
                <th scope="col">Nama</th>
                
                <th scope="col">Nominal</th>

                <th scope="col">category</th>

                <th scope="col">Waktu</th>
                
                
              </tr>
            </thead>
            <tbody>
               
            <?php foreach($transaction_cabang as $tc){ ?>
              <tr>
                
                <input type="hidden" value="<?= $tc['username']?>" name="username">
                <th scope="row"><?= $tc['id_transaksi'] ?></th> 
                <td><?= $tc['name']; ?></td>
                <td><?= $tc['nominal']; ?></td>
                <td><?= $tc['category']; ?></td>
                <td><?= $tc['date']; ?></td>
               
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


    
