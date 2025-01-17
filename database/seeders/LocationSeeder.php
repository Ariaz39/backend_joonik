<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Ejecuta la siembra de la tabla de locations.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos de ejemplo en la tabla locations
        Location::insert([
            [
                'code' => 'LOC-001',
                'name' => 'Sede Central',
                'image' => 'https://media.istockphoto.com/id/1601405498/photo/for-rent-sign-in-spain.jpg?s=2048x2048&w=is&k=20&c=NWeep3gZ_QHED6kndv1vqjk63gksMQqBU_TwO5lOUQY=',
                'creationDate' => '2021-01-01',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-002',
                'name' => 'Sede Sur',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2021-04-16',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-003',
                'name' => 'Sede Ambala',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-06-19',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-004',
                'name' => 'Sede Pinares',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2024-03-10',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-005',
                'name' => 'Sede Canaveral',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2022-03-30',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-006',
                'name' => 'Sede Vergel',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2018-01-01',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-007',
                'name' => 'Sede Ancon',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2019-03-14',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-008',
                'name' => 'Sede Salado',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2020-09-25',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-009',
                'name' => 'Sede Kennedy',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2021-01-05',
                'created_at' => now(),
            ],
            [
                'code' => 'LOC-010',
                'name' => 'Sede Candelaria',
                'image' => 'https://media.istockphoto.com/id/944365176/photo/detail-of-a-new-modern-apartment-building.jpg?s=2048x2048&w=is&k=20&c=Glkz923PVNQ2xUtwqPyuO5egf3Sj__qlS8e0Jbr3nqg=',
                'creationDate' => '2023-02-12',
                'created_at' => now(),
            ]
        ]);
    }
}
