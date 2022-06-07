    <div class="content">
        <div class="form-sedekah-container " style="margin-top: 50px;">
            <div class="form mt-5" >
            <h1>Form Wakaf</h1>
            <form method="post" action="<?= base_url('index.php/user/sedekah')?>">
            <table cellpadding="7">

            <tr>
                    <td><label for="id_user"> Id User</label></td>
                    <td><input type="text" class="form-sedekah"name="id_user" id="id_user" value="<?= $user['id']?>" readonly></td>
                </tr>


                 <tr>
                    <td><label for="username"> Username</label></td>
                    <td><input type="text" class="form-sedekah"name="username" id="username" value="<?= $user['username']?>" readonly></td>
                </tr>
              

                <tr>
                    <td><label for="name"> Nama</label></td>
                    <td><input type="text" class="form-sedekah"name="name" id="name" value="<?= $user['name']?>" readonly></td>
                </tr>
                <tr>
                    <td> <label for="email">E-Mail</label> </td>
                    <td><input type="text" class="form-sedekah" name="email" id="email" value="<?= $user['email'] ?>" readonly></td>
                </tr>
                <tr>
                    <td><label for="phone"> phone</label></td>
                    <td><input type="text" class="form-sedekah"name="phone" id="phone" value="<?= $user['phone']?>" readonly></td>
                </tr>
                <tr>
                <td><label for="wakaf_type"> Kategori</label></td>
                    <td><select name="wakaf_type" id="wakaf_type" class="form-sedekah">
                        <option value="properti">Properti</option>
                        <option value="kendaraan">Kendaraan</option>
                        <option value="elektronik">elektronik</option>
                        
                    </select></td>
                </tr>
                <tr>
                    <td><label for="cabang">Cabang</label></td>
                    <td><select name="cabang" id="cabang" class="form-sedekah">
                        <?php foreach($cabang as $cbg){ ?>
                                <option value="<?= $cbg['cabang'] ?>"><?= $cbg['cabang'] ?></option>
                            <?php }?>
                    </select></td>
                </tr>

       
               
               
                    
              
                <tr>
                    <td></td>
                    <td><div class="btn-container"><a href=""></a><button type="subm    ``it" class="btn btn-primary ms-auto me-auto">Selanjutnya    </button></div></td>
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
           
            
            <th scope="col">Kategori</th>
            <th scope="col">status</th>
            
          </tr>
        </thead>
        <tbody>
        <?php foreach($transaction as $tr){ ?>
          <tr>
            <th scope="row"><?= $tr['date'] ?></th>
            
          
            <td><?= $tr['category']; ?></td>
            <td><?= $tr['status']; ?></td>
            
          </tr>
          <?php } ?>
          
         
        
          
        </tbody>
      </table>

            

    </div>
