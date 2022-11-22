<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Publisher::create([
            'name'=> "Gramedia Pustaka Utama",
            'address'=> "Jl. Palmerah Barat 29-37 10270, RT.1/RW.2, Gelora, Tanah Abang, Central Jakarta City, Jakarta 10270",
            'phone'=> "02153650110",
            'email'=> "redaksi@gramediapustakautama.id",
            'image'=> "img\logo\gramediaPustaka.png"
        ]);

        Publisher::create([
            'name'=> "Elex Media Komputindo",
            'address'=> "Jl. Palmerah Barat No.29 - 32, RT.1/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270",
            'phone'=> "02153650110",
            'email'=> "kompas@elexmedia.co.id",
            'image'=> "img\logo\lexMedia.png"
        ]);

        Publisher::create([
            'name'=> "diandra primamitra media",
            'address'=> "Komplek  Perumahan Taman Cemara F.102, Krodan, Maguwoharjo, Yogyakarta 55282",
            'phone'=> "2747151049",
            'email'=> "diandramitra@gmail.com",
            'image'=> "img\logo\diandra.jpg"
        ]);

    }
}
