<?php

namespace App\Controllers;

use App\Models\AircraftModel;

class Aircraftcrud extends BaseController
{
    public function index()
    {
        $aircraftModel = new AircraftModel();
        $data['aircrafts'] = $aircraftModel->orderBy('id', 'DESC')->findAll();
        return view('aircraft/list', $data);
    }

    public function create()
    {
        return view('aircraft/create');
    }

    public function store()
    {
        $aircraftModel = new AircraftModel();

        $data = [
            'model' => $this->request->getVar('model'),
            'brand' => $this->request->getVar('brand'),
            'type' => $this->request->getVar('type'),
            'numberOfEngines' => $this->request->getVar('numberOfEngines'),
        ];

        $aircraftModel->insert($data);
        return $this->response->redirect(base_url('/aircrafts-list'));
    }

    public function singleAircraft($id = null)
    {
        $aircraftModel = new AircraftModel();
        $data['aircraft_obj'] = $aircraftModel->where('id', $id)->first();
        return view('aircraft/edit', $data);
    }

    public function update()
    {
        $aircraftModel = new AircraftModel();
        $id = $this->request->getVar('id');
        $data = [
            'model' => $this->request->getVar('model'),
            'brand' => $this->request->getVar('brand'),
            'type' => $this->request->getVar('type'),
            'numberOfEngines' => $this->request->getVar('numberOfEngines'),
        ];
        $aircraftModel->update($id, $data);
        return $this->response->redirect(base_url('/aircrafts-list'));
    }

    public function delete($id = null)
    {
        $aircraftModel = new AircraftModel();
        $data['aircraft'] = $aircraftModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/aircrafts-list'));
    }
}
