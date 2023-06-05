<?php

namespace App\Services;

use App\Models\Car;

class CarService

{
    public function index()
    {
        return Car::all();
    }

    public function show($id)
    {
        return Car::findOrFail($id);
    }

    public function store($data)
    {
        return Car::create($data);
    }

    public function update($id, $data)
    {
        $car = Car::findOrFail($id);
        $car->update($data);
        return $car;
    }

    public function delete($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return $car;
    }
}