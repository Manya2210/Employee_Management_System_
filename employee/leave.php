<?php include "header.php" ?>

 <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container-fluid">
        <h2 class="main-title" style="text-align: center;font-size: 40px;color: #176399">Leave Status</h2>
        
        <div class="row">
          <div class="col-lg-12">
            <div class="users-table table-wrapper">
              <table class="posts-table" style="text-align:center;">
                                <thead>
                                    <tr class="users-table-info" style="text-align: center;background-color: #176399;color: white;font-size: 18px;font-weight: bold;    border-block: 6px solid #243332;">
                                        <th  style="border: 3px solid;">Leave_from</th>
                                        <th  style="border: 3px solid;">Leave_to</th>
                                        <th  style="border: 3px solid;">Earning Leave</th>
                                        <th  style="border: 3px solid;">Medical Leave</th>
                                        <th  style="border: 3px solid;">Casual Leave</th>
                                        <th  style="border: 3px solid;">Apply by</th>
                                        <th style="border: 3px solid;">Status</th>
                                        <th  style="border: 3px solid;">Comment</th>
                                        
                                    </tr>
                                </thead>
               
                                <tbody>
                                <?php
                                include "../dbcon.php";

                                $data = "select * from apply_leave ";
                                $result = mysqli_query($con,$data); 

                                while ($fetch = mysqli_fetch_array($result)) {
                      
                   
                                ?>
                                    <tr>
                    
                                        <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['leave_from'] ?></td>
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['leave_to'] ?></td>
                          
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['earning_leave'] ?></td>
                                        
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['medical_leave'] ?></td>
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['casual_leave'] ?></td>
                                        
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['apply_by'] ?></td>
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['status'] ?></td>
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['comment'] ?></td>
                                       
                                      
                                        
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