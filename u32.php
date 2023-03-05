<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="css/new.css">
</head>
<body>
    <div class="container" style="width: fit-content; height: fit-content;">
        <img src="images/user1.png" class="user1" style="top: 50px;"> 
        <div class="title">New User</div>
        <div class="content">
          <form action="u3.php?u_id=<?php echo $_GET['u_id']; ?>  " method="post">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter your name" name="fullname">
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="phone" placeholder="Enter your number"  name="phonenumber">
              </div>
              <div class="input-box">
                <span class="details">University Roll</span>
                <input type="text" placeholder="Enter your Roll" name="universityroll">
              </div>
              <div class="input-box">
                <label for="year">Year</label>
                <select id="Year" style="color: rgb(137, 150, 25);" name="year">
                    <option value="year">Select Year</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                </select>
              </div>
              <div class="input-box"> 
                <label for="Sem">Semester</label>
                <select id="Sem" name="semester">
                    <option value="year">Select Sem</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                    <option value="VI">VI</option>
                </select><br><br>
              </div>
            </div>
            <p style="color: rgba(255, 255, 255, 0.562);">Already have an account?<a href="login1.html" 
              style="color: rgb(137, 150, 25); font-size: 12px; line-height: 12px;">Login</p><br><br>

              <style>
                .btn
  {
      border: none;
      outline: none;
      height: 30px;
      width: 30%;
      background: #fff;
      color: #000;
      font-size: 18px;
      border-radius: 4px;
  }
 
  .btn:hover
  {
      cursor: pointer;
      background-color: rgb(137, 150, 25);
      color: #000;
  }
              </style>
              <input type="Submit" name="" value="Update" class="btn" style="float: left; ">
              <input type="reset" name="" value="Cancel" class="btn" style="float: left; margin-left: 15px;">
              <a href="adminpage.php"><input  name="Back" value="Back" class="btn"  style="margin-left: 15px;" ></a>
          </form>
        </div>
      </div>
    
</body>
</html>