<?php

namespace App\Http\Repositories;

use App\Models\Location;

class LocationRepository
{
    /**
     * Obtener todas las ubicaciones.
     */
    public function getAllLocations()
    {
        return Location::all();
    }
}
