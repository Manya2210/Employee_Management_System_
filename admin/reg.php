<?php include"header.php" ?>

<main class="page-center">
  <article class="sign-up" style="width: 100%;">
    <h1 class="sign-up__title">Register Employee</h1>
    <form class="sign-up-form form" method="post" action="reg_insert.php" >
      <label class="form-label-wrapper">
        <p class="form-label">First Name</p>
        <input class="form-input" name="fname" type="text" placeholder="Enter your First name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Last Name</p>
        <input class="form-input" type="text" name="lname" placeholder="Enter your Last name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" name="email" placeholder="Enter your email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name="password" placeholder="Enter your password" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Age</p>
        <input class="form-input" type="text" name="Age" placeholder="Enter your age" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Mobile no.</p>
        <input class="form-input" type="text" name="phone" placeholder="Enter your Mobile no." required>
      </label>
      <label  class="form-label-wrapper">Gender:</label><br>
        <input class="form-input" type="radio" name="gender" value="male" required> Male<br>
        <input class="form-input" type="radio" name="gender" value="female" required> Female<br><br>
      <label class="form-label-wrapper">Department</label><br>
        <select  name="department" style="width: 100%;"><br>
            <option></option>
            <option class="form-input" value="sales">Sales</option>
            <option class="form-input" value="marketing">Marketing</option>
            <option class="form-input" value="human-resources">Human Resources</option>
            <option class="form-input" value="production">Production</option>
        </select>
        <br><br>
      <label class="form-label-wrapper">Role</label><br>
        <select  name="role" style="width: 100%;">
            <option></option>
            <option class="form-input" value="admin">Admin</option>
            <option class="form-input" value="employee">Employee</option>
        </select>

        <br><br><br>

      <button class="form-btn primary-default-btn transparent-btn">Submit</button>
    </form>
  </article>
</main>

<?php include "footer.php" ?>