
    <div class="content">
        <div class="form-sedekah-container">
            <div class="form">
            <h1>Form Sedekah</h1>
            <form method="post" action="<?= base_url('index.php/user/sedekah')?>">
            <table cellpadding="7">

            <tr>
                    <td><label for="id_user"> Id User</label></td>
                    <td><textarea name="desc" id="" cols="30" rows="10"></textarea></td>
                </tr>


             
             
               
                    
              
                <tr>
                    <td></td>
                    <td><div class="btn-container"><button type="submit" class="btn btn-primary ms-auto me-auto">Wakaf    </button></div></td>
                </tr>
                
                    <small><?= form_error('email') ?> </small>
                    <small><?= form_error('amount') ?> </small>
            </table>
            
                
            </form>
        </div>
        </div>
    </div>
