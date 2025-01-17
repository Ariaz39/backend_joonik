<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class LocationController extends Controller
{
    /**
     * Retorna una lista de sedes (locations).
     *
     * Este método recupera un conjunto de datos estáticos relacionados con las sedes (locations),
     * incluyendo información como el código de la sede, nombre, imagen representativa y fecha de creación.
     * Los datos se retornan en formato JSON con un código de respuesta HTTP 200.
     *
     * @return JsonResponse Retorna un objeto JsonResponse con la lista de sedes.
     */
    public function index(): JsonResponse
    {
        $locations = [
            [
                'code' => 'LOC-001',
                'name' => 'Sede Central',
                'image' => 'https://media.istockphoto.com/id/1601405498/photo/for-rent-sign-in-spain.jpg?s=2048x2048&w=is&k=20&c=NWeep3gZ_QHED6kndv1vqjk63gksMQqBU_TwO5lOUQY=',
                'creationDate' => '2021-01-01',
            ],
            [
                'code' => 'LOC-002',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
            [
                'code' => 'LOC-003',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
            [
                'code' => 'LOC-004',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
            [
                'code' => 'LOC-005',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
            [
                'code' => 'LOC-006',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
            [
                'code' => 'LOC-007',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
            [
                'code' => 'LOC-008',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
            [
                'code' => 'LOC-009',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
            [
                'code' => 'LOC-010',
                'name' => 'Sede Norte',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-15',
            ],
        ];

        return response()->json($locations, 200);
    }
}
