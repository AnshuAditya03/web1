<html>
    <head>
        <title>Personal details</title>
    </head>
    <body>
        <form action="employee.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td><label>Age</label></td>
                    <td><input type="text" name="age" required></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td><input type="radio" name="Gender" value="Male" required>Male
                        <input type="radio" name="Gender" value="Female" required>Female</td>
                </tr>
                <tr>
                    <td><label>Skills</label></td>
                    <td><input type="checkbox" name="skills[]" value="Java">Java
                        <input type="checkbox" name="skills[]" value="Python">Python
                        <input type="checkbox" name="skills[]" value="Angular">Angular
                        <input type="checkbox" name="skills[]" value="Node.js">Node.js
                        <input type="checkbox" name="skills[]" value="PHP">PHP</td>
                </tr>
                <tr>
                    <td><label>Working Experience</label></td>
                    <td><input type="text" name="exp" required></td></tr>

                    <tr><td><label>Upload CV</label></td>
                    <td><input type="file"  name="cv" accept=".pdf, .doc, .docx" required></td></tr>

                    <tr>
                    <td><input type="submit" name="submit" value="Submit"required></td>
                </tr>

            </table>
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit']))
 {
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["Gender"];
    $experience = $_POST["exp"];
    $cvFileName = $_FILES["cv"]["name"];
    
    // Save the CV file
    $cvUploadPath = "cv_uploads/" . $cvFileName;
    move_uploaded_file($_FILES["cv"]["tmp_name"], $cvUploadPath);
   if(isset($_POST['skills']) && is_array($_POST['skills']))
{
    $skills = $_POST['skills'];
}
    // Store the name and filename in a text file
    $data = "Name: $name\n
    Age: $age\n
    Gender: $gender\n
    Skills:  $skills\n
    Experience: $experience\n
    CV File Name: $cvFileName\n\n";
    file_put_contents("emp.txt", $data, FILE_APPEND);

    echo "CV updated Successfully!!!";
}

?>