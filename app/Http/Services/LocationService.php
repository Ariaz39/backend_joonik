<?php

namespace App\Http\Services;

use App\Http\Repositories\LocationRepository;

class LocationService
{
    protected LocationRepository $locationRepository;

    /**
     * Constructor del servicio.
     *
     * @param LocationRepository $locationRepository
     */
    public function __construct(LocationRepository $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    /**
     * Obtener todas las ubicaciones.
     */
    public function getAllLocations()
    {
        return $this->locationRepository->getAllLocations();
    }
}
