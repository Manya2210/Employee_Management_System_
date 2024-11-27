<?php include "header.php" ?>

<!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"  style="text-align: center;font-size: 40px;color: #2c1072;">Reply Task</h1>
                    <br><br><br>
                    

                </div>
                <!-- /.container-fluid -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <h4>Task:-</h4>
                                        <br>

                                        <div class="row no-gutters align-items-center justify-content-center">
                                            <?php 
                                            include "../dbcon.php";
                                            $id = $_GET['tid'];
                                            $data = "select * from task where t_id = $id";
                                            $result = mysqli_query($con,$data);
                                            while ($fetch = mysqli_fetch_array($result)) 
                                       
                                            { 
                                            ?>
                                        <form method="post" action="emp_task_insert.php">
                                            <center>
                                                <div class="form-check my-2">

                                                    <textarea class="form-control" cols="60" rows="1" name="task" style="width: 100%;"><?php echo $fetch['task'] ?></textarea>

                                                </div>
                                            </center>    
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <h4>Reply:-</h4>
                                    <br>

                                    <div class="row no-gutters align-items-center justify-content-center" >
                                        
                                            <div class="form-group">
                                                
                                                <textarea class="form-control" cols="60" rows="6" placeholder="Enter message" name="reply" style="width: 100%;"></textarea >
                                                <input type="number" name="t_id" value="<?php echo $fetch['t_id'] ?>" hidden><br><br>
                                                <input type="submit" class="form-btn primary-default-btn transparent-btn" >
                                                <?php 
                                                $name = $_SESSION['name'];
                                                $datan = "select * from replytask where reply_by='$name' and t_id='$id'";
                                                $resultn = mysqli_query($con,$datan);
                                                $fetchn = mysqli_num_rows($resultn);
                                                ?>

                                            </div>

                                            
                                    </form>
                                            
                                    </div>

                                </div>
                            </div>    
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <h4>Admin Reply:-</h4>

                                    <div class="row no-gutters align-items-center justify-content-center">
                                        <?php 
                                        $name = $_SESSION['name'];
                                        $datar = "select * from adminreply where reply_by='$name' and t_id='$id'";
                                        $resultr = mysqli_query($con,$datar);
                                        while($fetchr = mysqli_fetch_array($resultr)){
                                        ?>
                                        <tr>
                                            <td><?php echo $fetchr['adminmsg']; echo "<br>";?></td>
                                        </tr>  
                                        <?php 
                                        }
                                        ?>
                                            
                                        
                                    </div>
                                    <?php  
                                    }
                                    ?>
                                        
                                </div>
                            </div>    
                        </div>   
                    </div>
                </div>




<?php include "footer.php" ?>