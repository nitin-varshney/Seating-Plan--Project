<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="css/seating1.css">
</head>
<body>
    <div class="container">
        <div class="title">Seating Plan</div>
        <div class="content">
          <form action="seating.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">University Roll</span>
                    <!-- <input type="text" value="" placeholder="Enter your Roll" required name="universityroll"> -->
                    <select id="Year" required name="universityroll">
                        <option value="">Select Year</option>
                <?php
                    include "connection.php";
                    
            
                    $query = "SELECT * FROM Student";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);?>
                        <?php
                        if($result){
                                
                            while($Row = mysqli_fetch_assoc($result)){
                        echo "
                        <option value='".$Row['universityroll']."'>".$Row['universityroll']."</option>
                   ";
                    } }?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="year">Year</label>
                    <select id="Year" required name="year">
                        <option value="">Select year</option>
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                    </select>
                </div>
                <div class="input-box"> 
                    <label for="Sem">Semester</label>
                    <select id="Sem" required name="sem">
                        <option value="year">Select Sem</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                    </select><br>
                </div> 
                <div class="input-box">
                    <span class="details">Course</span>
                    <input type="text" value="BCA" name="course">
                </div> 
                <div class="input-box">
                    <label for="Sem">Term</label>
                    <select id="Sem" name="term">
                        <option value="year">Select Term</option>
                        <option value="I">Mid</option>
                        <option value="II">End</option>
                    </select><br>
                </div>
                <div class="input-box"> 
                    <label for="Sem">Block</label>
                    <select id="Year" required name="block"> 
                        <option value="">Select Block</option>
                <?php
                    include "connection.php";
                    
            
                    $query = "SELECT * FROM blocks";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);?>
                        <?php
                        if($result){
                                
                            while($Row = mysqli_fetch_assoc($result)){
                        echo "
                        <option value='".$Row['block_no']."'>".$Row['block_no']."</option> ?>";
                    } }?>
                    </select>
                </div>
                <div class="input-box"> 
                    <label for="Sem">Floor</label>
                    <select id="Year" required name="floor"> 
                        <option value="">Select floor</option>
                <?php
                    include "connection.php";
                    
            
                    $query = "SELECT * FROM blocks";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);?>
                        <?php
                        if($result){
                                
                            while($Row = mysqli_fetch_assoc($result)){
                        echo "
                        <option value='".$Row['floor_no']."'>".$Row['floor_no']."</option> ?>";
                    } }?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="Sem">Room</label>    
                    <select id="Year" required name="room">
                        <option value="">Select room</option>
                        <?php
                        include "connection.php";
                    
            
                        $query = "SELECT * FROM blocks";
                        $result = mysqli_query($conn,$query);

                        $row = mysqli_num_rows($result);?>
                        <?php
                        if($result){
                                
                            while($Row = mysqli_fetch_assoc($result)){
                        echo "
                        <option value='".$Row['room_no']."'>".$Row['room_no']."</option> ?>";
                        } }?>
                    </select>
                </div>
            </div>
            <div class="button1">
              <input type="submit" value="Add">
            </div>
            <div class="button2">
                <input type="submit" value="Cancel">
            </div>
            <div class="button3" >
                <input type="submit" value="Back" >
            </div>
          </form>
        </div>
      </div>
    
</body>
</html>