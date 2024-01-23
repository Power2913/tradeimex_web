<?php
    $section_name = $_POST['section_name'];
    $chapter_no = $_POST['chapter_no'];
    $chapter_name = $_POST['chapter_name'];
    $code_value = $_POST['code_value'];
    $code_name = $_POST['code_name'];
    include 'dbconfig.php';
    // sql to create table
    $sql_T = "CREATE TABLE $section_name (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        chapter_no INT(11),
        chapter_name VARCHAR(500),
        code_value VARCHAR(4),
        code_name VARCHAR(500)
    )";
    if ($conn->query($sql_T) === TRUE) {
        $sql ="INSERT INTO `$section_name` (`id`, `chapter_no`, `chapter_name`, `code_value`, `code_name`) VALUES ('','$chapter_no','$chapter_name','$code_value','$code_name')";
        if($conn->query($sql) === TRUE) {
            echo 'Data Submitted';
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error creating table: " . $conn->error;
    }
?>