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
        $validated = $request->validate([
            'car_model' => 'required|string',
            'car_odometer' => 'required|integer',
            'car_fabrication_year' => 'required|integer|min:1900',
            'car_fabricator' => 'required',
            'car_category' => 'required|string',
            'car_rental_value' => 'required|numeric|min:0',
        ], [
            'car_model.required' => 'O modelo do carro é obrigatório.',
            'car_odometer.required' => 'A quilometragem é obrigatória.',
            'car_odometer.integer' => 'A quilometragem deve ser um número inteiro.',
            'car_fabrication_year.required' => 'O ano de fabricação é obrigatório.',
            'car_fabrication_year.integer' => 'O ano de fabricação deve ser um número.',
            'car_fabrication_year.min' => 'O ano de fabricação deve ser maior ou igual a 1900.',
            'car_fabricator.required' => 'A marca do carro é obrigatória.',
            'car_category.required' => 'A categoria do carro é obrigatória.',
            'car_rental_value.required' => 'O valor do aluguel é obrigatório.',
            'car_rental_value.numeric' => 'O valor do aluguel deve ser numérico.',
            'car_rental_value.min' => 'O valor do aluguel não pode ser negativo.',
        ]);

        $created = $this->car->create($validated);

        if ($created) {
            return redirect()->route('cars.index')->with('success', 'Novo veículo adicionado com sucesso.');
        }

        return redirect()->route('cars.index')->with('error', 'Falha ao tentar adicionar o veículo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(car $car)
    {
        return view('cars')->with('delete',['car' => $car]);
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
        $validated = $request->validate([
            'car_model' => 'required|string',
            'car_odometer' => 'required|integer',
            'car_fabrication_year' => 'required|integer|min:1900',
            'car_fabricator' => 'required',
            'car_category' => 'required|string',
            'car_rental_value' => 'required|numeric|min:0',
        ], [
            'car_model.required' => 'O modelo do carro é obrigatório.',
            'car_odometer.required' => 'A quilometragem é obrigatória.',
            'car_odometer.integer' => 'A quilometragem deve ser um número inteiro.',
            'car_fabrication_year.required' => 'O ano de fabricação é obrigatório.',
            'car_fabrication_year.integer' => 'O ano de fabricação deve ser um número.',
            'car_fabrication_year.min' => 'O ano de fabricação deve ser maior ou igual a 1900.',
            'car_fabricator.required' => 'A marca do carro é obrigatória.',
            'car_category.required' => 'A categoria do carro é obrigatória.',
            'car_rental_value.required' => 'O valor do aluguel é obrigatório.',
            'car_rental_value.numeric' => 'O valor do aluguel deve ser numérico.',
            'car_rental_value.min' => 'O valor do aluguel não pode ser negativo.',
        ]);

        $car = $this->car->find($id);

        if (!$car) {
            return redirect()->route('cars.index')->with('error', 'Veículo não encontrado.');
        }

        $updated = $car->update($validated);

        if ($updated) {
            return redirect()->route('cars.index')->with('success', 'Veículo atualizado com sucesso.');
        }

        return redirect()->route('cars.index')->with('error', 'Erro ao tentar atualizar o veículo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = $this->car->where('id', $id)->delete();

        if ($deleted) {
            return redirect()->route('cars.index')->with('success', 'Veículo deletado com sucesso.');
        }
        
        return redirect()->route('cars.index')->with('error', 'Falha ao tentar deletar o veículo.');
    }
}
