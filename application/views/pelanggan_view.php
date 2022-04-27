 <table>
     <thead>
         <tr>
             <th>No</th>
             <th>nama</th>
             <th>telpon</th>
             <th>alamat</th>
             <th>email</th>
         </tr>
      </thead>
      <tbody>
          <?php
          foreach($pelanggan as $valiues){
              ?>
              <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?php echo $valiues ['nama'] ?></td>
                  <td><?php echo $valiues ['no_telpon'] ?></td>
                  <td><?php echo $valiues ['alamat'] ?></td>
                  <td><?php echo $valiues ['email'] ?></td>
          </tr>

          }

      <t/body>
</table>

          