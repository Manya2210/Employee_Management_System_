<?php include "header.php" ?>
<br><br>

 <!-- ! Main -->
 <div class="col-md-12">
            <h1 class="m-0 text-center"  style="font-weight: bold!important;font-size: 35px;color:#0061f7!important;border-bottom: 2px solid;text-align: center; ">Assign Leave</h1>         
</div><!-- /.col -->

               <br><br><br><br>
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <!-- Earnings (Monthly) Card Example -->
                        
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body" style="height: 350px;box-shadow: 0px 0px 20px rgb(118 148 193)">
                                    <h4 style="text-align: center;padding: 12px;font-size: 25px;border-bottom: 2px solid;color: #0061f7;">Employee</h4>
                                    <br><br>
                                    <div class="row no-gutters align-items-center" style="font-size: 23px;font-weight: 400;padding: 15px;">
                                        <?php 
                                        include "../dbcon.php";
                                        $data = "select * from ems where role = 'employee'";
                                        $result = mysqli_query($con,$data);
                                        while ($fetch = mysqli_fetch_array($result)) 
                                       
                                        {
                                        ?>
                                        <form method="post" action="leave_insert.php" class="sign-up-form form" style="width: 100%;">
                                            <div class="form-check my-2">
                                                <input type="checkbox" class="form-check-input" name="assigned_to[]" value="<?php echo $fetch['id'] ?>">
                                                <label class="form-check-input-label"><?php echo $fetch['fname'] ?></label>
                                            </div>
                                        <?php  
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        

                        </div>
                        <div class="col-md-6">
                        
                            <div class="card border-left-info shadow h-100 py-2" >
                                <div class="card-body" style="height: 350px;box-shadow: 0px 0px 20px rgb(118 148 193)">
                                    <h4 style="text-align: center;padding: 12px;font-size: 25px;border-bottom: 2px solid;color: #0061f7;">All Apply Leave</h4>

                                    <br><br>
                                    <div class="row no-gutters align-items-center" style="padding: 18px;">
                                        <div class="form-group">
                                           <label style="font-weight: bold;">Valid from:</label>
                                           <input type="date" class="form-control" name="valid_from" placeholder="dd-mm-yyyy">
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                           <label  style="font-weight: bold;">Valid to:</label>
                                           <input type="date" class="form-control" name="valid_to" placeholder="dd-mm-yyyy">
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                           <label  style="font-weight: bold;">Earning Leave:</label>
                                           <input type="text" class="form-control" name="earning_leave" placeholder="no. of leave assigned">
                                        </div>
                                        <div class="form-group">
                                           <label  style="font-weight: bold;">Medical Leave:</label>
                                           <input type="text" class="form-control" name="medical_leave" placeholder="no. of leave assigned">
                                        </div>
                                        <div class="form-group">
                                           <label  style="font-weight: bold;" >Casual Leave:</label>
                                           <input type="text" class="form-control" name="casual_leave" placeholder="no. of leave assigned">
                                        </div>
                                        


                                    </div>
                                    <center>
                                    <button class="form-btn primary-default-btn transparent-btn" style="    width: 231px;">Submit</button>
                                    </center>
                                    </form>
                                </div>
                            
                            </div>
                        </div>
                        
                    </div>
                </div>
   



<?php include "footer.php" ?>            




