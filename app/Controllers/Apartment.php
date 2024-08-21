<?php

namespace App\Controllers;
use App\Models\ApartmentModel;


class Apartment extends BaseController
{
    public function index()
    {
        // $apartmentModel = new ApartmentModel();
        // $apartment = $apartmentModel -> findAll();

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
        $page->title = 'Apartment';

        $data = [
            'apartment' => $apartment,
            'page' => $page,
            'type' => $type,
        ];

        $data['activeMenuItem'] = 'property';


        return view('apartment', $data);
    }
}
