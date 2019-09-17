<?php 

//extract data from the post
//set POST variables
$url = 'http://localhost/test_api.php';

// $last_name=urlencode($_POST['last_name']);
// $first_name=urlencode($_POST['first_name']);
// $title=urlencode($_POST['title']);
// $institution= urlencode($_POST['institution']);
// $age=urlencode($_POST['age']);
// $email=urlencode($_POST['email']);
// $phone=urlencode($_POST['phone']);


$last_name='sharma';
$first_name='deepak';
$title='my name is deepak';


$fields = array(
	'lname' => $last_name,
	'fname' =>$first_name,
	'title' => $title,
);

//url-ify the data for the POST
foreach($fields as $key=>$value) {
$fields_string .= $key.'='.$value.'&'; 

}
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);


echo $result;

?>