<?php

namespace App\Controllers;
use App\Models\FormModel;


class Contact extends BaseController
{
    public function index()
    {
        $page = new \stdClass();
        $page->title = 'Contact';

        $data = [
            'page' => $page,
        ];

        $data['activeMenuItem'] = 'contact';

        return view('contact', $data);
    }

    public function submit()
    {

        $formModel = new FormModel();

        $formData = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
        ];

        $affected  = $formModel->insert($formData);

        if ($affected > 0) {

            // Redirect with success message
            return redirect()->to('contact')->with('success', 'Message sent successfully');
        } else {
            // Redirect with error message if room not found
            return redirect()->back()->withInput()->with('error', 'Message not sent');
        }
    }
}


