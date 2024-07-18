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
            'Ciemas',
            'Ciracap',
            'Waluran',
            'Surade',
            'Cibitung',
            'Jampang Kulon',
            'Cimanggu',
            'Kalibunder',
            'Cidolog',
            'Sagaranten',
            'Cidadap',
            'Curug Kembar',
            'Pabuaran',
            'Lengkong',
            'Palabuhanratu',
            'Simpenan',
            'Warungkiara',
            'Bantargadung',
            'Jampang Tengah',
            'Purabaya',
            'Cikembar',
            'Nyalindung',
            'Gegerbitung',
            'Sukaraja',
            'Kebonpedes',
            'Cireunghas',
            'Sukalarang',
            'Sukabumi',
            'Kadudampit',
            'Cisaat',
            'Gunungguruh',
            'Cibadak',
            'Cicantayan',
            'Caringin',
            'Nagrak',
            'Ciambar',
            'Cicurug',
            'Cidahu',
            'Parakan Salak',
            'Parung Kuda',
            'Bojong Genteng',
            'Kalapanunggal',
            'Cikidang',
            'Cisolok',
            'Cikakak',
            'Kabandungan',
        ];

        foreach ($list_kecamatan as $kecamatan) {
            Kecamatan::create(['kecamatan' => $kecamatan]);
        }
    }
}
