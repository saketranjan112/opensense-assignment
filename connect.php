<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = new mysqli('localhost', 'root', '','job_application');

// get the post records
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$linkedin = $_POST['linkedin'];
$drupal = $_POST['drupal'];
$position = $_POST['position'];
$start = $_POST['start'];
$phone = $_POST['phone'];
$lastCom = $_POST['lastCompany'];
$comments = $_POST['comments'];
$currentCity = $_POST['currentCity'];
$cityName = $_POST['cityName'];
$relocate = $_POST['relocate'];

echo $currentCity."<br>".$email."</br>".$linkedin."<br>".$drupal."<br>".$position."<br>".$start."<br>".$phone."<br>".$lastCom."<br>".$comments."<br>".$cityName."<br>".$relocate;
echo $fname;
echo $lname;

// database insert SQL code


if($con->connect_error){
	die('connection failed : '.$con->connect_error);
}else{
	$stmt = $con->prepare("insert into submissions(first_name, last_name, email, linkedin_profile, drupal_profile, position, start_days, mobile_no, current_city, city_name, relocate, last_company, comments) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssssisssss", $fname, $lname, $email, $linkedin, $drupal, $position, $start, $phone,$currentCity, $cityName, $relocate, $lastCom, $comments);
	$stmt->execute();
	echo "Form Submitted";
	echo "$currentCity";
	$stmt->close();
	$con->close();
}




?>