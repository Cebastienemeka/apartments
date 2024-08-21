<?php

namespace App\Controllers;
use App\Models\MembersModel;

class Profile extends BaseController
{
    public function index($id = null)
    {
        $page = new \stdClass();
        $page->title = 'Dashboard';

        // Start the session and check if it's valid
        $session = session();

        // Check if the session is expired
        $userId = $session->get('user_id');

        // Update the last activity time
        $session->set('last_activity', time());

        // Use the user ID from the route if provided, otherwise get it from the session
        $userId = $id ?? $session->get('user_id'); // Ensure this matches the session key

        // Load the MembersModel
        $membersModel = new MembersModel();

        // Fetch user data by ID
        $user = $membersModel->find($userId);

        $lastActivity = $session->get('last_activity');

        if ($userId === null || $lastActivity === null || $lastActivity < time() - 7200) {
            // Destroy the session
            $session->destroy();

            // Redirect to the login page
            return redirect()->to('/login');
        }

        // Prepare data for the view
        $data = [
            'page' => $page,
            'activeMenuItem' => 'profile',
            'user' => $user,
        ];

        return view('user/profiledash', $data);
    }
}
