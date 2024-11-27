<?php include "header.php" ?>

 <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container-fluid">
         <h2 class="main-title" style="text-align: center;font-size: 40px;color: #176399">View Leave</h2>
        
        <div class="row">
          <div class="col-lg-12">
            <div class="users-table table-wrapper">
              <table class="posts-table" style="text-align:center;">
                <thead>
                  <tr class="users-table-info" style="text-align: center;background-color: #176399;color: white;font-size: 18px;font-weight: bold;    border-block: 6px solid #243332;">
                    <th style="border: 3px solid;">L.Id</th>
                    <th style="border: 3px solid;">Valid From</th>
                    <th style="border: 3px solid;">Valid Upto</th>
                    <th style="border: 3px solid;">Earning Leave</th>
                    <th style="border: 3px solid;">Medical Leave</th>
                    <th style="border: 3px solid;">Casual Leave</th>
                  </tr>
                </thead>
                 <?php
                    include "../dbcon.php";
                    $eid=$_SESSION['eid'];
                    $data = "select * from assignleave where assigned_to=$eid";
                    $result = mysqli_query($con,$data); 
                    $fetch = mysqli_fetch_array($result);
                  ?>

                <tbody>
                  <tr>
                    <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['l_id'] ?></td>
                    <td style="font-weight: bold;color: #023c52;font-size: 17px;"><?php echo $fetch['valid_from'] ?></td>
                    <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['valid_to'] ?></td>
                    <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['earning_leave'] ?></td>
                    <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['medical_leave'] ?></td>
                    <td style="font-weight: bold;color: black;font-size: 17px;"><?php echo $fetch['casual_leave'] ?></td>
                  </tr>
                
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </main>

  <main class="page-center">
  <article class="sign-up" style="width: 100%;">
    <h1 class="sign-up__title"  style="text-align: center;font-size: 40px;color: #176399">Apply For Leave</h1>
    <form class="sign-up-form form" method="post" action="eleave_insert.php" >
      <label class="form-label-wrapper">
        <p class="form-label" >Leave_from</p>
        <input type="date" class="form-control" name="leave_from" placeholder="dd-mm-yyyy" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Leave_to</p>
        <input type="date" class="form-control" name="leave_to" placeholder="dd-mm-yyyy" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Earning Leave</p>
        <input type="text" class="form-control" name="earning_leave" placeholder="no. of leave assigned">
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Medical Leave</p>
        <input type="text" class="form-control" name="medical_leave" placeholder="no. of leave assigned">
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Casual Leave</p>
        <input type="text" class="form-control" name="casual_leave" placeholder="no. of leave assigned">
      </label>
     <br><br><br>
      <button class="form-btn primary-default-btn transparent-btn" style="background-color: #176399!important">Submit</button>
    </form>
  </article>
</main>


<?php include "footer.php" ?>