<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class LocationController extends Controller
{
    /**
     * Retorna una lista de sedes (locations).
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Datos simulados (pueden venir de un archivo JSON o base de datos)
        $locations = [
            [
                'code' => 'LOC-001',
                'name' => 'Sede Central',
                'image' => 'https://via.placeholder.com/150/0000FF/FFFFFF?text=Sede+Central',
                'creationDate' => '2021-01-01',
            ],
            [
                'code' => 'LOC-002',
                'name' => 'Sede Norte',
                'image' => 'https://via.placeholder.com/150/FF0000/FFFFFF?text=Sede+Norte',
                'creationDate' => '2022-06-15',
            ],
        ];

        return response()->json($locations, 200);
    }
}
