<?php
$con = mysqli_connect('localhost', 'samrat', 'samrat', 'RestSaveLogin');

if(!$con) {
    echo 'Connection Error';
}

// things needed  be added here. 

$companyname =$_POST['companyname'];
$organizationtype= $_POST['organizationtype'];
$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$emailaddress=$_POST['emailaddress'];



$sql ="INSERT INTO datas (Company_Name, Organization_Type, Users_Fullname, Phone_Number, Email_Address) VALUES ('$companyname' ,'$organizationtype', '$name', '$phonenumber', '$emailaddress')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

?>