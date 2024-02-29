<?php

namespace App\Controllers;

use App\Models\UserModel;
use Google_Client;

class UserController extends BaseController
{
    public function create()
    {
        // Load the UserModel
        $model = new UserModel();

        // Get the Google user data
        $idToken = $this->request->getPost('idToken');

        // Create a new Google client
        $client = new Google_Client(['client_id' => 'YOUR_CLIENT_ID']);  // Replace with your Google Client ID

        // Verify the id token
        $payload = $client->verifyIdToken($idToken);
        if ($payload) {
            $email = $payload['email'];
            $password = $payload['sub']; // Use the Google user ID as the password

            // Create the user
            $model->create_user($email, $password);

            // Redirect or show a success message
        } else {
            // Invalid ID token
        }
    }

    public function get($email)
    {
        // Load the UserModel
        $model = new UserModel();

        // Get the user
        $user = $model->get_user($email);

        // Return the user data or show it in a view
    }

    
}