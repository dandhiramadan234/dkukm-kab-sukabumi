<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_kecamatan = [
            'Bantargadung',
            'Bojong Genteng',
            'Caringin',
            'Ciambar',
            'Cibadak',
            'Cibitung',
            'Cicantayan',
            'Cicurug',
            'Cidadap',
            'Cidahu',
            'Cidolog',
            'Ciemas',
            'Cikakak',
            'Cikembar',
            'Cikidang',
            'Cimanggu',
            'Ciracap',
            'Cireunghas',
            'Cisaat',
            'Cisolok',
            'Curugkembar',
            'Geger Bitung',
            'Gunung Guruh',
            'Jampang Kulon',
            'Jampang Tengah',
            'Kabandungan',
            'Kadudampit',
            'Kalapa Nunggal',
            'Kali Bunder',
            'Kebonpedes',
            'Lengkong',
            'Nagrak',
            'Nyalindung',
            'Pabuaran',
            'Parakan Salak',
            'Parung Kuda',
            'Palabuhan Ratu',
            'Purabaya',
            'Sagaranten',
            'Simpenan',
            'Sukabumi',
            'Sukalarang',
            'Sukaraja',
            'Surade',
            'Tegal Buleud',
            'Waluran',
            'Warung Kiara',
        ];

        foreach ($list_kecamatan as $kecamatan) {
            Kecamatan::create(['kecamatan' => $kecamatan]);
        }
    }
}
