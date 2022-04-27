
    <div class="content">
        <div class="form-sedekah-container">
            <div class="form">
            <h1>Form Infak</h1>
            <form method="post" action="<?= base_url('index.php/user/infaq')?>">
            <table cellpadding="7">

            <tr>
                    <td><label for="id_user"> Id User</label></td>
                    <td><input type="text" class="form-sedekah"name="id_user" id="id_user" value="<?= $user['id']?>"></td>
                </tr>


                 <tr>
                    <td><label for="username"> Username</label></td>
                    <td><input type="text" class="form-sedekah"name="username" id="username" value="<?= $user['username']?>"></td>
                </tr>
              

                <tr>
                    <td><label for="name"> Nama</label></td>
                    <td><input type="text" class="form-sedekah"name="name" id="name" value="<?= $user['name']?>"></td>
                </tr>
                <tr>
                    <td> <label for="email">E-Mail</label> </td>
                    <td><input type="text" class="form-sedekah" name="email" id="email" value="<?= $user['email'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="phone"> phone</label></td>
                    <td><input type="text" class="form-sedekah"name="phone" id="phone" value="<?= $user['phone']?>"></td>
                </tr>
                <tr>
                    <td><label for="category"> Kategori</label></td>
                    <td><select name="category" id="category" class="form-sedekah">
                        <option value="infak">Infaq</option>
                        
                    </select></td>
                </tr>
                <tr>
                    <td><label for="amount">Jumlah</label></td>
                    <td><input type="text" class ="form-sedekah"name="amount" id="amount"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><div class="btn-container"><button type="submit" class="btn btn-primary ms-auto me-auto">Sedekah    </button></div></td>
                </tr>
                
                    <small><?= form_error('email') ?> </small>
                    <small><?= form_error('amount') ?> </small>
            </table>
            
                
            </form>

        </div>
        </div>
    </div>
    <div class=" transaction_history " style="margin-top: 80px;">
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

