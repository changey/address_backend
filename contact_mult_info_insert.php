<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$groupId = $_GET['groupId'];
//echo $groupId;
$dataJson = $_POST['contactsJson'];
$dataJsonNoSlashes = stripslashes($dataJson);

//$contactsJson = '[{"name":"b"},{"c":"d"},{"e":"f"}]';
$dataDetails = json_decode($dataJsonNoSlashes, true);
$contactDetails = $dataDetails["contacts"];
$groupId = $dataDetails["groupId"];
$user = $dataDetails["user"];

foreach ($contactDetails as $contact)
{
    $name = $contact["name"];
    $gender = $contact["gender"];
    $tagString = $contact["tagString"];
    $university = $contact["university"];
    $job = $contact["job"];
    $tel = $contact["tel"];
    $email = $contact["email"];

    $query = "SELECT * FROM contacts";
    $totalContactId = mysql_num_rows (mysql_query($query));
    
    if ($tel != "") {
        $query = "SELECT * FROM contacts WHERE tel='$tel' AND groupId = '$groupId'";
    
        if (!mysql_num_rows(mysql_query($query))) {
            $query = "INSERT INTO contacts (name, groupId, gender, tagString, university,
        job, tel, email) VALUES('$name', '$groupId', '$gender', 
        '$tagString', '$university', '$job', '$tel',
        '$email')";
            mysql_query($query);

            $totalContactId += 1;

            $query = "INSERT INTO favorites (contactId, groupId, user, favorites) 
        VALUES('$totalContactId', '$groupId', '$user', 0)";
            mysql_query($query);
        } 
    }
    else {
        echo 'baba';
        $query = "INSERT INTO contacts (name, groupId, gender, tagString, university,
        job, tel, email) VALUES('$name', '$groupId', '$gender', 
        '$tagString', '$university', '$job', '$tel',
        '$email')";
        mysql_query($query);

        $totalContactId += 1;

        $query = "INSERT INTO favorites (contactId, groupId, user, favorites) 
        VALUES('$totalContactId', '$groupId', '$user', 0)";
        mysql_query($query);

    }
}

//$contacts = explode(',', $contactDetails);
//$length = count($contacts);
//
//for ($i=0; $i<$length; $i++) {
//	$name = $contacts[$i];
//	echo $name;
//	$query = "INSERT INTO contacts (name, groupId) VALUES('$name', '$groupId')";
//			mysql_query($query);
//}
		

mysql_close($con);
ob_end_flush(); 
?>