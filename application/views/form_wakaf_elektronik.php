<div class="content">
        <div class="form-sedekah-container " style="margin-top: 50px;">
            <div class="form mt-5" >
            <h1>Form Wakaf Properi</h1>
            <form method="post" action="<?= base_url('index.php/user/wakaf_elektronik')?>">
            <table cellpadding="7">

            <tr>
                    <td></td>
                    <td><input type="hidden" class="form-sedekah"name="id_user" id="id_user" value="<?= $user['id']?>" readonly></td>
                </tr>
              
                <tr>
                    <td><label for="elektronik_type">Jenis Elektronik</label></td>
                    <td><select name="jenis_elektronik" id="elektronik_type" class="form-sedekah">
                        <option value="komputer">Tanah</option>
                        <option value="laptop">Rumah</option>
                        <option value="smartphone">Rumah</option>
                        
                    </select></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama model</label></td>
                    <td><input type="text" class="form-sedekah"name="nama" id="nama" ></td>
                </tr>
                
                
         
                

                <tr>
                    <td></td>
                    <td><div class="btn-container"><button type="submit" class="btn btn-primary ms-auto me-auto">Wakaf   </button></div></td>
                </tr>
                
                    <small><?= form_error('email') ?> </small>
                    <small><?= form_error('amount') ?> </small>
            </table>
              
            
                
            </form>
        </div>
        </div>
        
    <div class=" transaction_history " style="margin-top: 200px;">
      <h2 style="text-align:center;" >Riwayat Transaksi</h2>
      <table class="table table-striped ms-auto me-auto"  style="margin-top: 30px;" >
        
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
