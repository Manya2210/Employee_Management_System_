<?php include "header.php" ?>

 <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container-fluid">
       <h2 class="main-title" style="text-align: center;font-size: 40px;color:  #176399">See Assigned Task</h2>
        
        <div class="row">
          <div class="col-lg-12">
            <div class="users-table table-wrapper">
              <table class="posts-table" style="text-align: center;">
                <thead>
                                    <tr class="users-table-info" style="text-align: center;background-color: #176399;color: white;font-size: 18px;font-weight: bold;    border-block: 6px solid #243332;">
                                        <th style="border: 3px solid;">S. No.</th>
                                        <th style="border: 3px solid;">Task</th>
                                        <th style="border: 3px solid;">Assign by</th>
                                        <th  style="border: 3px solid;">Date-time</th>
                                        <th  style="border: 3px solid;">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include "../dbcon.php";
                            
                                $a = $_SESSION['eid'];

                                $data = "select * from task where e_id='$a'";
                                $result = mysqli_query($con,$data); 

                                while ($fetch = mysqli_fetch_array($result)) {
                      
                   
                                ?>
                                    <tr>
                    
                                        <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['t_id'] ?></td>
                          
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['task'] ?></td>
                                        <?php 
                                        $assign_by = $fetch['assign_by'];
                                        $data_n = "select * from ems where id = $assign_by";
                                        $res_n = mysqli_query($con,$data_n);
                                        $fetch_n = mysqli_fetch_array($res_n);
                                        ?>
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch_n['fname'] ?></td>
                                        
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['datatime'] ?></td>
                                        <td><a  class="form-btn primary-default-btn transparent-btn" href="replytask.php?tid=<?php echo $fetch['t_id'] ?>" style="background-color:  #176399!important;">Reply Task</a></td>
                                        
                                        
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