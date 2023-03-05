<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="css/block.css">
</head>
<body>
    <div class="container">
        <div class="title">Subject</div>
        <div class="content">
          <form action= "u2.php?up_id=<?php echo $_GET['up_id']; ?>  " method="post">
            <div class="user-details">
                
                <div class="input-box">
                        <label for="year">Subject Name</label>
                        <select name="s_name" id="Year" required>
                            <option value="year">Select Subject</option>
                            <option value="Programming Logic Using C">1. Programming Logic Using C</option>
                            <option value="Fundamentals Of Computer & IT">2. Fundamentals Of Computer & IT</option>
                            <option value="Introduction Of Logical Circuit & Degital Design">3. Introduction Of Logical Circuit & Degital Design</option>
                            <option value="Remedial English">4. Remedial English</option>
                            <option value="Mathematics-I">5. Mathematics-I</option>
                            <option value="Management Concept & Practices">6. Management Concept & Practices</option>
                            <option value="Data Structure Using C">7. Data Structure Using C</option>
                            <option value="Fundamental Of Database Management System">8. Fundamental Of Database Management System</option>
                            <option value="Fundamental Of Operating Syatem">9. Fundamental Of Operating Syatem</option>
                            <option value="Mathematics-II">10. Mathematics-II</option>
                            <option value="Object Oriented Programming">11. Object Oriented Programming</option>
                            <option value="Computer Organization & Architecture">12. Computer Organization & Architecture</option>
                            <option value="Introduction To Python">13. Introduction To Python</option>
                            <option value="Discrete Structure & Graph Theory">14. Discrete Structure & Graph Theory</option>
                            <option value="GUI Based Programming Using Visual Basic">15. GUI Based Programming Using Visual Basic</option>
                            <option value="System Design & Software Engineering">16. System Design & Software Engineering</option>
                            <option value="Computer Networks & Communication">17. Computer Networks & Communication</option>
                            <option value="Programming In Java">18. Programming In Java</option>
                            <option value="Optimization Method">19. Optimization Method</option>
                            <option value="Ethics & Values">20. Ethics & Values</option>
                            <option value="Advanced Database Management System">21. Advanced Database Management System</option>
                            <option value="Introduction to Cloud Computing">22. Introduction to Cloud Computing</option>
                            <option value=".Net Framework Using Vb.Net">23. .Net Framework Using Vb.Net</option>
                        </select>
                    </div>
                <div class="input-box">
                    <label for="sem">Subject Code</label>
                    <select name="s_code" id="sem" required>
                        <option>Select Subject code</option>
                        <option value="BCAC 0001">1. BCAC 0001</option>
                        <option value="BCAC 0002"> 2. BCAC 0002</option>
                        <option value="BCAC 0003">3. BCAC 0003</option>
                        <option value="BELH 0005">4. BELH 0005</option>
                        <option value="BMAS 0151">5. BMAS 0151</option>
                        <option value="BBAC 0001">6. BBAC 0001</option>
                        <option value="BCAC 0004">7. BCAC 0004</option>
                        <option value="BCAC 0005">8. BCAC 0005</option>
                        <option value="BCAC 0006">9. BCAC 0006</option>
                        <option value="BMAS 0152">10. BMAS 0152</option>
                        <option value="BCAC 0007">11. BCAC 0007</option>
                        <option value="BCAC 0008">12. BCAC 0008</option>
                        <option value="BCAC 0009">13. BCAC 0009</option>
                        <option value="BCAE 0105">14. BCAE 0105</option>
                        <option value="BCAC 0013">15. BCAC 0013</option>
                        <option value="BCAC 0010">16. BCAC 0010</option>
                        <option value="BCAC 1011">17. BCAC 1011</option>
                        <option value="BCAC 0012">18. BCAC 0012</option>
                        <option value="BMAS 0153">19. BMAS 0153</option>
                        <option value="BELH 0006">20. BELH 0006</option>
                        <option value="BCAE 0001">21. BCAE 0001</option>
                        <option value="BCAE 0203">22. BCAE 0203</option>
                        <option value="BCAE 0206">23. BCAE 0206</option>
                    </select><br><br>
                </div>
               
                <div class="input-box">
                    <label for="year">Year</label>
                    <select name="year" id="Year" required>
                        <option value="">Select Year</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="Sem">Semester</label>
                    <select name="sem" id="Sem" required>
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
                    <span class="details">Course</span>
                    <input name="course" type="text" value="BCA" required name="id" readonly>
                </div>
            </div>
            <div class="button1">
              <input type="submit" value="Add">
            </div>
            <div class="button2">
                <input type="reset" value="Cancel">
            </div>
          </form>
        </div>
      </div>
    
</body>
</html>