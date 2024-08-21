<?php

namespace App\Controllers;

use App\Models\ApartmentModel;

class Home extends BaseController
{
    public function index()
    {
        $apartmentModel = new ApartmentModel();
        $type = $this->request->getGet('type');

        if ($type) {
            // Fetch apartments filtered by type
            $apartment = $apartmentModel->where('type', $type)->findAll();
        } else {
            // Fetch all apartments if no type filter is applied
            $apartment = $apartmentModel->findAll();
        }

        $page = new \stdClass();
        $page->title = 'Home';

        $data = [
            'page' => $page,
            'apartment' => $apartment,
            'type' => $type,
        ];

        $data['activeMenuItem'] = 'home';

        return view('home', $data);
    }

    
}
?>
