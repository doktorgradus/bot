<?php
echo json_decode(file_get_contents("php://input"),true);
echo (file_get_contents("php://input"));
print_r(file_get_contents("php://input"));
echo '<a href="images.php">GET_FILE_ID</a>';
?>
