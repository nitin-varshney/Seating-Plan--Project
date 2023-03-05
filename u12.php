<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>block</title>
    <link rel="stylesheet" type="text/css" href="css/block.css">
</head>
<body>
    <div class="container">
        <div class="title">Block</div>
        <div class="content">
          <form action="u1.php?update_id=<?php echo $_GET['update_id']; ?>  " method="post">
            <div class="user-details">
                
                <div class="input-box"> 
                    <label for="Sem">Block</label>
                    <select id="Sem" required name="block_no">
                        <option value="year">Select Block</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                        <option value="VII">VII</option>
                        <option value="VIII">VIII</option>
                        <option value="IX">IX</option>
                        <option value="X">X</option>
                    </select><br>
                </div>
                <div class="input-box"> 
                    <label for="Sem">Floor</label>
                    <select id="Sem" required name="floor_no">
                        <option value="year">Select Floor</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select><br>
                </div>
                <div class="input-box">
                    <span class="details">Room</span>
                    <input type="text" placeholder="Enter Room no." required name="room_no">
                </div>
            </div>
            <div class="button1">
              <input type="submit" value="Update">
            </div>
            <div class="button2">
                <input type="reset" value="Cancel">
            </div>
          </form>
        </div>
      </div>
    
</body>
</html>