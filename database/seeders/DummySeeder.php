<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\Departemen;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jabatan1 = new Jabatan();
        $jabatan1->jabatan = 'HRD';
        $jabatan1->gaji = 10000000;
        $jabatan1->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('123456');
        $user->save();

        $jabatan2 = new Jabatan();
        $jabatan2->jabatan = 'Sales';
        $jabatan2->gaji = 10000000;
        $jabatan2->save();

        $departemen = new Departemen();
        $departemen->departemen = 'IT';
        $departemen->save();

        $departemen2 = new Departemen();
        $departemen2->departemen = 'Non-IT';
        $departemen2->save();

        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Pegawai::create([
                'NIP' => $faker->unique()->numerify('#####'), 
                'nama' => $faker->name, 
                'departemen_id' => $faker->numberBetween(1, 2), 
                'jabatan_id' => $faker->numberBetween(1, 2), 
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'tgl_lahir' => $faker->date('d-m-Y', 'now'),
                'email' => $faker->unique()->safeEmail,
                'telepon' =>$faker->numerify('08#########'), 
                'status' => $faker->randomElement(['Kontrak', 'Karyawan-Tetap', 'Part-Time', 'Magang']), 
                'foto' => $faker->imageUrl(640, 480, 'people', true),
            ]);
        }
    }
}
