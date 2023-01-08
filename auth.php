<?php

// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';

// Set the Client ID, Client Secret, and Redirect URI.
$clientId = 'YOUR_CLIENT_ID';
$clientSecret = 'YOUR_CLIENT_SECRET';
$redirectUri = 'YOUR_REDIRECT_URI';

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
if (strpos($email, '@example.com') !== false) {
  header('Location: http://example.com/example-page');
} else {
  header('Location: http://example.com/other-page');
}