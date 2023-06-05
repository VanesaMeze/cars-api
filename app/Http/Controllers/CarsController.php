<?php

namespace App\Http\Controllers;

use App\Services\CarService;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    protected $carService;
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function index()
    {
        $cars = $this->carService->index();
        return $cars;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $car = $this->carService->store($data);
        return $car;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = $this->carService->show($id);
        return $car;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $car = $this->carService->update($id, $data);
        return $car;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = $this->carService->delete($id);
        return $car;
    }
}
