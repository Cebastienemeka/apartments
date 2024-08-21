<?php

namespace App\Controllers;
use App\Models\ApartmentModel;

class About extends BaseController
{
    public function index()
    {
        $apartmentModel = new ApartmentModel();
        $type = $this->request->getGet('type');

        // $apartment = $apartmentModel->findAll();

        if ($type) {
            // Fetch apartments filtered by type
            $apartment = $apartmentModel->where('type', $type)->findAll();
        } else {
            // Fetch all apartments if no type filter is applied
            $apartment = $apartmentModel->findAll();
        }

        $page = new \stdClass();
        $page->title = 'About';

        $data = [
            'page' => $page,
            'apartment' => $apartment,
            'type' => $type,
        ];

        // $activeMenuItem = 'about'; // Set active menu item // for the controller
        // $data['activeMenuItem'] = $activeMenuItem;
        $data['activeMenuItem'] = 'about';

        return view('about', $data);
    }
}
