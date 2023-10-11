<?php
//this program will only make sure data is given through the post
if($_SERVEER["REQUEST_METHOD"]=="POST"){
    $name1=test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
    $website=test_input($_POST["website"]);
    $comment=test_inpunt($_POST["comment"]);
    $gender=test_input($_POST["gender"]);
}
echo $name1."<br/>".$email."br/>".$website."<br/>".$comment."<br/>".$gender;
function test_input($data){
    $dat=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($dat);
    return $data;
}
?>