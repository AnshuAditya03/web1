<html>
    <head>
        <title>Personal details</title>
    </head>
    <body>
        <form action="emp.php" method="post" enctype="multipart/form-data">
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

            </table>
        </form>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $skills = $_POST["skills"];
    $experience = $_POST["experience"];
    $cvFileName = $_FILES["cv"]["name"];
    
    // Save the CV file
    $cvUploadPath = "cv_uploads/" . $cvFileName;
    move_uploaded_file($_FILES["cv"]["tmp_name"], $cvUploadPath);

    // Store the name and filename in a text file
    $data = "Name: $name\nSkills: $skills\nExperience: $experience\nCV File Name: $cvFileName\n\n";
    file_put_contents("cv_data.txt", $data, FILE_APPEND);

    echo "CV updated successfully.";
} else {
    echo "Invalid request.";
}
?>