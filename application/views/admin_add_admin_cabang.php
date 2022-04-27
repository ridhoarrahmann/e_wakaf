
    <div class="content">
        <div class="form-sedekah-container">
            <div class="form">
            <h1>Tambah Admin Cabang</h1>
            <form method="post" action="<?= base_url('index.php/admin/add_admin_cabang')?>">
            <table cellpadding="7">



                 <tr>
                    <td><label for="username"> Username</label></td>
                    <td><input type="text" class="form-sedekah"name="username" id="username" ></td>
                </tr>
                <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" class ="form-sedekah"name="password" id="amount"></td>
                </tr>
                <tr>
                        <td><label for="cabang_name">Nama Cabang</label></td>
                        <td><input type="text" class ="form-sedekah"name="cabang_name" id="amount"></td>
                </tr>
     
              
               
               
                
                <tr>
                    <td></td>
                  
                    <td><div class="btn-container"><button type="submit" class="btn btn-primary ms-auto me-auto">Tambah   </button></div></td>
                </tr>
                
                    <small><?= form_error('username') ?> </small>
                    <small><?= form_error('password') ?> </small>
                    <small><?= form_error('cabang_name') ?> </small>
            </table>
            
                
            </form>
        </div>
        </div>
    </div>
