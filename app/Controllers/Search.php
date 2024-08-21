<?php

namespace App\Controllers;

use App\Models\ApartmentModel;
use CodeIgniter\Controller;

class Search extends Controller
{
    public function index()
    {
        $apartmentModel = new ApartmentModel();
        $data['apartment'] = $apartmentModel->findAll();
        return view('search_view', $data);
    }

    public function searchData()
    {
        $keyword = $this->request->getGet('keyword');
        $propertyType = $this->request->getGet('propertyType');
        $location = $this->request->getGet('location');

        $apartmentModel = new ApartmentModel();
        $results = $apartmentModel->search($keyword, $propertyType, $location);

        return $this->response->setJSON($results);
    }
}
