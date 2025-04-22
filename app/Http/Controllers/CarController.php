<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    
    public readonly Car $car;
    
    public function __construct() {
        $this->car = new Car();
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = $this->car->All();
        return view('cars', ['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->car->create([
            'car_model' => $request->input('car_model'),
            'car_odometer' => $request->input('car_odometer'),
            'car_fabrication_year' => $request->input('car_fabrication_year'),
            'car_fabricator' => $request->input('car_fabricator'),
            'car_category' => $request->input('car_category'),
            'car_rental_value' => $request->input('car_rental_value'),
        ]);

        if ($created) {
            return redirect()->route('cars.index')->with('success', 'Successfuly created');
        }

        return redirect()->route('cars.index')->with('error', 'Error created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car_edit', ['car'=>$car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->car->where('id', $id)->update($request->except(['_token', '_method']));

        if($updated) {
            return redirect()->route('cars.index')->with('success', 'Successfuly updated');
        }

        return redirect()->route('cars.index')->with('error', 'Error update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
