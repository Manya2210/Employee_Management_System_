<?php include "header.php" ?>

 <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container-fluid">
        <h2 class="main-title" style="text-align: center;font-size: 40px;color: #2c1072;">Assigned Tasks</h2>
        
        <div class="row">
          <div class="col-lg-12">
            <div class="users-table table-wrapper">
              <table class="posts-table" style="text-align: center;">
                <thead>
                  <tr class="users-table-info"  style="text-align: center;background-color: #45589cdb;color: white;font-size: 18px;font-weight: bold;    border-block: 6px solid #301981;">
                    <th>E.Id</th>
                    <th>Task</th>
                    <th>Assigned by</th>
                    <th>Time of Task Assigned</th>
                  </tr>
                </thead>
                 <?php
                    include "../dbcon.php";

                    $data = "select * from task";
                    $result = mysqli_query($con,$data); 

                    while ($fetch = mysqli_fetch_array($result)) {
                      
                   
                    ?>
                <tbody>
                  <tr>
                    <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['e_id'] ?></td>
                    <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['task'] ?></td>
                    <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['assign_by'] ?></td>
                    <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['datatime'] ?></td>
                    
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