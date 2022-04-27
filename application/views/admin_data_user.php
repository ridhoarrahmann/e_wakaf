
    <!-- end of topbar -->
    <div class="container-fluid">
                    <h1>Data Users</h1>
                    
    <!-- end of topbar -->
    <div class="container-fluid">
    <div class="content transaction_draft">
      
          <table class="table table-striped ms-auto me-auto">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">email</th>
                <th scope="col">Phone</th>
     
                
                
              </tr>
            </thead>
            <tbody>
               
            <?php foreach($dataUser as $du){ ?>
              <tr>
                
                
                <th scope="row"><?= $du['id'] ?></th>
                <td><?= $du['name']; ?></td>
                <td><?= $du['username']; ?></td>
                <td><?= $du['email']; ?></td>
                <td><?= $du['phone']; ?></td>
               
                
               
            </tr>
              <?php } ?>
              
              
             
            
              
            </tbody>
          </table>

    </div>
                   
                    
    </div>

    <!-- close div in navbar file layout -->
    </div>
</div>  


    
