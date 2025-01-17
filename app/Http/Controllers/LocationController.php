<?php

namespace App\Http\Controllers;

use App\Http\Services\LocationService;
use Illuminate\Http\JsonResponse;

class LocationController extends Controller
{
    protected $locationService;

    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    /**
     * Retorna una lista de sedes (locations).
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Obtener todas las ubicaciones a través del servicio
        $locations = $this->locationService->getAllLocations();

        // Retornar los datos en formato JSON
        return response()->json($locations);
    }
}
