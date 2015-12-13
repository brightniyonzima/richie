<?php
include('TMDb.php');

// Default English language
$tmdb = new TMDb('API-key');

// Set-up the class with your own language
$tmdb_nl = new TMDb('API-key', 'nl');

// If you want to load the TMDb-config (default FALSE)
$tmdb_load_config = new TMDb('API-key', 'en', TRUE);

// After initialize the class
// First request a token from API
$token = $tmdb->getAuthToken();

// Request valid session for that particular user from API
$session = $tmdb->getAuthSession();

//Retrieve config with initialisation of the class
$tmdb = new TMDb('API-key', 'en', TRUE);

//Retrieve (cached) config when the class is already initialised
$config = $tmdb->getConfig();

//Retrieve config when the class is already initialised from TMDb (always new request)
$config = $tmdb->getConfiguration();

//Filepath retrieved from a method (Backdrop image)
$filepath = '/eJhymb0SiOd39L3BDe7aO7iQhQx.jpg';

//Get image URL for the backdrop image in its original size
$image_url = $tmdb->getImageUrl($filepath, TMDb::IMAGE_BACKDROP, 'original');
?>
