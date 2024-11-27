<?php include "header.php" ?>

 <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container-fluid">
        <h2 class="main-title" style="text-align: center;font-size: 40px;color: #2c1072;">Dashboard</h2>
        
        <div class="row">
          <div class="col-lg-12">
            <div class="users-table table-wrapper">
              <table class="posts-table" style="text-align: center;">
                <thead>
                  <tr class="users-table-info" style="text-align: center;background-color: #45589cdb;color: white;font-size: 18px;font-weight: bold;    border-block: 6px solid #301981;">
                    <th style="border: 3px solid;">S.No</th>
                    <th style="border: 3px solid;">Name</th>
                    <th style="border: 3px solid;">Surname</th>
                    <th style="border: 3px solid;">Email</th>
                    <th style="border: 3px solid;">Action</th>
                  </tr>
                </thead>
                 <?php
                    include "../dbcon.php";

                    $data = "select * from ems";
                    $result = mysqli_query($con,$data); 

                    while ($fetch = mysqli_fetch_array($result)) {
                      
                   
                    ?>
                <tbody>
                  <tr>
                    <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['id'] ?></td>
                    <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['fname'] ?></td>
                    <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['lname'] ?></td>
                    <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['email'] ?></td>
                    <td>
                      <a href="reg_update.php?id=<?php echo $fetch['id'] ?>" class="btn btn-success" style="background-color: #45589cdb!important;padding: 5px;color: white;border: 1px white;border-radius: 7px;">View</a>
                    <a href="reg_update.php?id=<?php echo $fetch['id'] ?>" class="btn btn-success" style="background-color: #45589cdb!important;padding: 5px;color: white;border: 1px white;border-radius: 7px;">EDIT</a>
                    <a href="reg_delete.php?id=<?php echo $fetch['id'] ?>" class="btn btn-danger"style="background-color: #45589cdb!important;padding: 5px;color: white;border: 1px white;border-radius: 7px;">DELETE</a>
                    </td>
                  </tr>
                  <?php 
                    }
                    ?> 
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </main>



<?php include "footer.php" ?>