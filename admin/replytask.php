<?php include "header.php" ?>

 <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container-fluid">
        <h2 class="main-title" style="text-align: center;font-size: 40px;color: #2c1072;">Reply Task</h2>
        
        <div class="row">
          <div class="col-lg-12">
            <div class="users-table table-wrapper">
              <table class="posts-table" style="text-align: center;">
                                <thead>
                                    <tr class="users-table-info"  style="text-align: center;background-color: #45589cdb;color: white;font-size: 18px;font-weight: bold;    border-block: 6px solid #301981;">
                                        <th  style="font-weight: bold;">Rid</th>
                                        <th  style="font-weight: bold;">Task</th>
                                        <th  style="font-weight: bold;">Employee Reply</th>
                                        <th  style="font-weight: bold;">Tid</th>
                                        <th  style="font-weight: bold;">Reply by</th>
                                        <th  style="font-weight: bold;">Date-time</th>
                                        <th  style="font-weight: bold;">Reply</th>
                                        <th  style="font-weight: bold;">Action</th>
                                        
                                    </tr>
                                </thead>
               
                                <tbody>
                                <?php
                                include "../dbcon.php";

                                $data = "select * from replytask ";
                                $result = mysqli_query($con,$data); 

                                while ($fetch = mysqli_fetch_array($result)) {
                      
                   
                                ?>
                                    <tr>
                    
                                        <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['r_id'] ?></td>
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['task'] ?></td>
                          
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['reply'] ?></td>
                                        
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['t_id'] ?></td>
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['reply_by'] ?></td>
                                        
                                        <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['datatime'] ?></td>
                                        <td style="font-weight: bold;color: black;font-size: 17px;">
                                           
                                            <form method="post" action="replymessage.php?a=<?php echo $fetch['r_id'] ?>">
                                                <textarea name="adminmsg"  class="form-control"></textarea>
                                                
                                            
                                            
                                        </td>
                                        <td style="font-weight: bold;color: black;font-size: 17px;">
                                                <button class="form-btn primary-default-btn transparent-btn">Send reply</button>
                                            </form>
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