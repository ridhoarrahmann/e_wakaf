
    <div class="content">
        <div class="form-sedekah-container">
            <div class="form">
            <h1 style="text-align:center;">Form Infaq</h1>
            <small><?= form_error('username') ?> </small>
                    
            <form method="post" action="<?= base_url('index.php/admin_cabang/add_infaq')?>" class="d-flex justify-content-center">
            <table cellpadding="7" class="ms-auto me-auto">

            


               
              
            <tr>
                    <td><label for="username">username</label></td>
                    <td><input type="text" class="form-sedekah"name="username" id="username" value="<?=$user['username']?>"></td>
                </tr>
                <tr>
                    <td><label for="namacabang">Nama Cabang</label></td>
                    <td><input type="text" class="form-sedekah"name="namacabang" id="namacabang" value="<?=$user['cabang']?>"></td>
                </tr>
                <tr>
                    <td><label for="name"> Nama</label></td>
                    <td><input type="text" class="form-sedekah"name="name" id="name"></td>
                </tr>
           
                <tr>
                    <td><label for="phone"> phone</label></td>
                    <td><input type="text" class="form-sedekah"name="phone" id="phone" ></td>
                </tr>
                <tr>
                    <td><label for="category"> Kategori</label></td>
                    <td><input type="text" class="form-sedekah" name="category" id="category" value="Infaq" ></td>
                </tr>
                <tr>
                    <td><label for="lembaga"> Lembaga</label></td>
                    <td><input type="text" class="form-sedekah" name="lembaga" id="lembaga" value="perorangan" ></td>
                </tr>
                <tr>
                    <td><label for="amount">Jumlah</label></td>
                    <td><input type="text" class ="form-sedekah"name="amount" id="amount"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <small><?= form_error('name') ?> </small>
                    <small><?= form_error('phone') ?> </small>
                    <small><?= form_error('category') ?> </small>
                    <small><?= form_error('amount') ?> </small>
                        <div class="btn-container"><button type="submit" class="btn btn-primary ms-auto me-auto">Sedekah    </button></div></td>
                </tr>
                    
            </table>
            
                
            </form>
        </div>
        </div>
    </div>
