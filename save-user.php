<?php
session_start();
 
require_once 'vendor/autoload.php';
require_once 'class-db.php';
 
$client_id = "584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com";
$id_token = $_POST['response'];
$client = new Google_Client(['client_id' => $client_id]);
$payload = $client->verifyIdToken($id_token); // verify JWT token received
 
if ($payload) {
    $db = new DB();
 
    // send user data to the database
    $db->upsert_user($payload);
 
    // set user id in session aka log in the user
    if(!isset($_SESSION['uid'])) {
        $_SESSION['uid'] = $payload['sub'];
        $g_email = $payload['email'];
        
        echo $g_email;
    }
 
    echo 'success';
} else {
    echo 'Invalid Token';
}