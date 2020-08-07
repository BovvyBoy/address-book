<?php include('core/init.php');  ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("INSERT INTO `contacts` (first_name, last_name, address_1, address_2, city, province, postcode, phone) 
            VALUES (:first_name, :last_name, :address_1, :address_2, :city, :province, :postcode, :phone)");

//Bind Values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':address_1', $_POST['address_1']);
$db->bind(':address_2', $_POST['address_2']);
$db->bind(':city', $_POST['city']);
$db->bind(':province', $_POST['province']);
$db->bind(':postcode', $_POST['postcode']);
$db->bind(':phone', $_POST['phone']);

if($db->execute()) {
    echo "Contact Was Created!";
} else {
    echo "Contact Could Not Be Created!";
}

?>