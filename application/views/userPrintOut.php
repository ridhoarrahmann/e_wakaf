
    <div class="content">
        <div class="form-sedekah-container">
            <div class="form">
            <h1>PrintOut</h1>
            
<div class="frame" id="frame">
            <table class="table table-bordered" cellpadding="7" style="border:20px;">
  <thead>

  <img src="<?php echo base_url('') ?>assets/img/logoside.png" alt="" class="ms-auto me-auto logo" style="width:400px; margin-bottom:30px;">
<span style="font-size:17px; line-height:15px; margin-top:50px;">

<p>Tanggal <?= date('d/m/y');?></p>
 <p>Kepada <?= $data_transaksi['name'];?></p>
 <p>Nomor Telepon <?= $data_transaksi['phone'] ?></p>
 <p>Telah Melakukan <?= $data_transaksi['category'] ?> sebagai berikut :</p>

</span>    

  <tr></tr>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama</th>
      <th scope="col">Kategori wakaf</th>
      <th scope="col">Jenis Wakaf</th>
      <th scope="col">status</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $data_transaksi['id_transaksi'] ?></th>
      <td><?= $data_transaksi['name'] ?></td>
      <td><?= $data_transaksi['wakaf_type'] ?></td>
      <td><?= $data_wakaf['jenis'] ?></td>
      <td><?= $data_transaksi['status'] ?></td>
    </tr>
    
   
  </tbody>
  
</table>
<!-- frame -->
</div>
<button  onclick="print_page()" class="btn btn-primary" >Print</button>
        
            
                
        

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

