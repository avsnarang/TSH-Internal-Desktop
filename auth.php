<?php

// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';

// Set the Client ID, Client Secret, and Redirect URI.
$clientId = '584175274872-hlf4ccq2q15ki7ua6h2sanijnind4lj9.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://www.tsh.edu.in/auth.php';

// Create the client object and set the authorization configuration
// from the client_secret.json you downloaded from the Developer Console.
$client = new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('email');

// Exchange the authorization code for an access token.
$client->authenticate($_GET['code']);
$accessToken = $client->getAccessToken();

// Check to see if there was an error.
if (!isset($accessToken)) {
  die('Error fetching access token');
}

// Use the access token to retrieve the user's email address.
$service = new Google_Service_Oauth2($client);
$user = $service->userinfo->get();
$email = $user->email;

// Redirect the user to a different page based on their email address.
if (strpos($email, 'admin@tsh.edu.in') !== false) {
  header('Location: http://www.tsh.edu.in/adminOffice/head/it_head.php');
} else {
  header('Location: http://www.tsh.edu.in/wrong.php');
}