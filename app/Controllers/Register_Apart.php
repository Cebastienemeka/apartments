<?php

namespace App\Controllers;

use App\Models\MembersModel;
use Config\Services;

class Register_Apart extends BaseController
{
    public function index()
    {
        $page = new \stdClass();
        $page->title = 'Register';

        $data = [
            'page' => $page,
            'activeMenuItem' => 'register_apart',
        ];

        return view('register_apart', $data);
    }

    public function register_apart()
    {
        $validation = Services::validation();

        $validationRules = [
            'firstname' => [
                'rules' => 'required|alpha_space|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'First name is required.',
                    'alpha_space' => 'First name can only contain alphabetic characters and spaces.',
                    'min_length' => 'First name must be at least 3 characters long.',
                    'max_length' => 'First name cannot exceed 50 characters.',
                ],
            ],
            'lastname' => [
                'rules' => 'required|alpha_space|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'Last name is required.',
                    'alpha_space' => 'Last name can only contain alphabetic characters and spaces.',
                    'min_length' => 'Last name must be at least 3 characters long.',
                    'max_length' => 'Last name cannot exceed 50 characters.',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[members.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'You must provide a valid email address.',
                    'is_unique' => 'This email address is already registered.',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must be at least 8 characters long.',
                ],
            ],
            'confirm-password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Confirm Password is required.',
                    'matches' => 'Confirm Password does not match the Password.',
                ],
            ],
            'phone' => [
                'rules' => 'required|regex_match[/^\+?[0-9\s\-\(\)]+$/]',
                'errors' => [
                    'required' => 'Phone number is required.',
                    'regex_match' => 'Phone number is not in a valid format.',
                ],
            ],
        ];

        $formData = $this->request->getPost();

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $formData['password'] = password_hash($formData['password'], PASSWORD_DEFAULT);
        unset($formData['confirm-password']);

        $membersModel = new MembersModel();
        $affected = $membersModel->insert($formData);

        if ($affected > 0) {
            $this->sendRegistrationEmail($formData['email'], $formData['firstname']);
            return redirect()->to('login')->with('success', 'Registration successful. Please check your email for confirmation.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Registration not successful');
        }
    }

    private function sendRegistrationEmail($email, $firstname)
    {
        $emailService = Services::email();

        $emailService->setTo($email);
        $emailService->setFrom('cebastienemeka@gmail.com', 'Service Apartment');
        $emailService->setSubject('Registration Confirmation');

        $loginUrl = base_url('login'); // Replace with your actual login URL

        // Logo image URL (replace with your actual logo image URL)
        $logoUrl = base_url('assets/img/rounded_logo_brand.png');

        $message = "
        <html>
        <head>
            <style>
                /* Add any additional styles here */
            </style>
        </head>
        <body>
            <img src=\"$logoUrl\" alt=\"Service Apartment Logo\" style=\"display: block; margin: 0 auto; max-width: 20%;\">
            <br>
            <p>Dear $firstname,</p>
            <p>Thank you for registering on our platform. We are excited to have you with us.</p>
            <p><a href=\"$loginUrl\" style=\"display: inline-block; padding: 10px 20px; font-size: 16px; color: white; background-color: #4CAF50; text-align: center; text-decoration: none; border-radius: 5px;\">Click here to login</a></p>
            <br>
            <p>Best regards,<br>Service Apartment</p>
        </body>
        </html>
    ";

        $emailService->setMessage($message);
        $emailService->setMailType('html'); // Set email type to HTML

        // Debugging output
        $emailService->setNewLine("\r\n");
        $emailService->setCRLF("\r\n");

        if (!$emailService->send()) {
            log_message('error', 'Failed to send registration email to ' . $email);
            // Output the email debugger information for better debugging
            echo $emailService->printDebugger(['headers']);
        }
    }
}
