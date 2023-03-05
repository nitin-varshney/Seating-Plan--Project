<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="css/style3.css">
</head>

<body>
    <div class="container">
        <div class="title">Datesheet</div>
        <div class="content">
            <form action="datesheet.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <label for="year">Subject Name</label>
                        <select id="Year" name="s_name">
                        <option value="">Select subject name</option>
                        <?php
                        include "connection.php";
                    
            
                        $query = "SELECT * FROM subjects";
                    $result = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($result);?>
                        <?php
                        if($result){
                                
                            while($Row = mysqli_fetch_assoc($result)){
                        echo "
                        <option value='".$Row['s_name']."'>".$Row['s_name']."</option> ?>";
                    } }?>
                    </select>
                    </div>
                    <div class="input-box">
                        <label for="sem">Subject Code</label>
                        <select id="Year" name="s_code">
                        <option value="">Select subject code</option>
                        <?php
                        include "connection.php";
                    
            
                        $query = "SELECT * FROM subjects";
                        $result = mysqli_query($conn,$query);

                        $row = mysqli_num_rows($result);?>
                        <?php
                        if($result){
                                
                            while($Row = mysqli_fetch_assoc($result)){
                        echo "
                        <option value='".$Row['s_code']."'>".$Row['s_code']."</option> ?>";
                        } }?>
                        </select><br><br>
                    </div>
                    <div class="input-box">
                        <label for="year">Year</label>
                        <select name="year" id="Year" >
                            <option value="">Select Year</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="Sem">Semester</label>
                        <select name="sem" id="Sem" >
                            <option value="year">Select Sem</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                        </select><br><br>
                    </div>
                    <div class="input-box">
                        <label for="Term">Term</label>
                        <select name="term" id="details">
                            <option value="year">Select Term</option>
                            <option value="Mid">Mid</option>
                            <option value="End">End</option>
                        </select><br><br>
                    </div>
                    <div class="input-box">
                        <span class="details">Exam Date</span>
                        <input name="e_date" type="date" placeholder="Enter the Date"
                            style="color: rgb(137, 150, 25);">
                    </div>
                    <div class="input-box">
                        <span class="details">Exam Time</span>
                        <input name="e_time" id="t1" onchange="t()" type="time" placeholder="Enter the Time" 
                            style="color: rgb(137, 150, 25);">
                    </div>
                    <div class="input-box">
                        <span class="details">Exam eTime</span>
                        <input name="e_etime" id="t1" onchange="t()" type="time" placeholder="Enter the Time" 
                            style="color: rgb(137, 150, 25);">
                    </div>
                </div>
                <div class="button1">
                    <input type="submit" value="Add">
                </div>
                <div class="button2">
                    <input type="reset" value="Cancel">
                </div>
                <div class="button3">
                    <input class="btn" type="button" value="Back">
                </div>
            </form>
        </div>
    </div>

</body>

</html>