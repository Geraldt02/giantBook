<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::create([
            'publisher_id'=> 1, //gramedia pustaka utama, fiction
            'title'=> "The Star Diaries",
            'author'=> "Stanislaw Lem",
            'year'=> 2022,
            'synopsis'=> "Kisah ini berpusat pada seorang penjelajah luar angkasa: Ijon Tichy. Dalam penjelajahannya ke berbagai galaksi, Tichy menjadi delegasi untuk Perserikatan Planet-Planet, menyelinap masuk ke planet robot gila, mencoba menduplikasi dirinya sendiri dalam operasi penyelamatan sejarah peradaban manusia, hingga masuk ke planet rahasia di mana segala sesuatu yang ada dalam diri manusia dapat diprogram dengan eksak. Perjumpaannya dengan peradaban futuristik yang jauhnya ratusan juta mil itulah, sains, rasionalitas, kehendak bebas, keyakinan, dan kesucian menjadi pertanyaan besar.",
            'image'=> "/img/cover/theStarDiaries.jpg"
        ]);

        Book::create([
            'publisher_id'=> 2, //Elex Media Komputindo, romance
            'title'=> "The Siren",
            'author'=> "Tiffany Reisz",
            'year'=> 2021,
            'synopsis'=> "Nora Sutherlin, seorang penulis novel terkenal yang karya-karyanya selalu masuk daftar penjualan terbaik. Dia yakin naskah terakhir yang sedang dia tulis akan melampaui semua karyanya sebelumnya. Naskah itu begitu serius dan personal, dan harus diperlakukan secara istimewa. Zachary Easton, seorang editor keras kepala dan bertangan dingin, menganggap naskah Nora hanyalah kelas teri. Zach bersedia menyunting naskah itu hanya jika ceritanya ditulis ulang sesuai standarnya. Nora sepenuhnya menyetujui itu, dan sepenuhnya meyakinkan Zach bahwa yang dia tulis bukanlah sekadar cerita, melainkan kisah yang nyata.",
            'image'=> "/img/cover/theSiren.jpg"
        ]);

        Book::create([
            'publisher_id'=> 1, //gramedia pustaka utama, thriller
            'title'=> "28",
            'author'=> "Jeong You-Jeong",
            'year'=> 2022,
            'synopsis'=> "Segalanya berawal dari pria paruh baya yang ditemukan sekarat dengan mata semerah darah di lantai kamar mandi apartemennya. Anjing-anjing di dalam apartemennya juga tewas atau sekarat dengan kondisi yang sama. Keesokan harinya, para anggota damkar dan paramedis UGD yang berusaha menyelamatkan pria tersebut mulai mengalami gejala mata merah yang serupa, lalu tewas dalam waktu singkat. Hanya Han Ki-joon, ketua tim tanggap darurat, yang belum terinfeksi. Sejak saat itu, semakin banyak warga Hwayang yang tewas akibat wabah misterius tersebut. Ki-joon berusaha mengeluarkan istri dan bayinya dari Hwayang, tetapi pemerintah mendadak mengumumkan situasi darurat dan mengerahkan pasukan militer untuk memblokir setiap jalan keluar dari kota.",
            'image'=> "/img/cover/28.jpg"
        ]);

        Book::create([
            'publisher_id'=> 1, //Gramedia Pustaka Utama, action
            'title'=> "Harry Potter",
            'author'=> "J.k. Rowling",
            'year'=> 2018,
            'synopsis'=> "Menjadi Harry Potter memang sulit dan sekarang pun tidak lebih mudah ketika ia menjadi pegawai Kementerian Sihir yang kelelahan, suami, dan ayah tiga anak usia sekolah. Sementara Harry berjuang menghadapi masa lalu yang mengikutinya, putra bungsunya, Albus, harus berjuang menghadapi beban warisan keluarga yang tak pernah ia inginkan. Ketika masa lalu dan masa sekarang melebur, ayah dan anak pun mengetahui fakta yang tidak menyenangkan: terkadang kegelapan datang dari tempat-tempat yang tak terduga.",
            'image'=> "/img/cover/HarryPotter.jpg"
        ]);

        Book::create([
            'publisher_id'=> 2, //Elex Media Komputindo, thriller
            'title'=> "Silent Demon",
            'author'=> "Fino Y.K.",
            'year'=> 2022,
            'synopsis'=> "Detektif Sugi sama sekali tidak mengira jika pembunuhan seorang wanita bule di stasiun MRT Jakarta mengarah ke situasi yang sangat berbahaya. Ibu kota ternyata terancam wabah virus mematikan. Bersama detektif Laura, Sugi harus berkejaran dengan waktu untuk menangkap pelaku yang amat licin atau malapetaka besar takkan bisa terhindarkan.",
            'image'=> "/img/cover/SilentDemon.jpg"
        ]);

        Book::create([
            'publisher_id'=> 3, //Diandra Primamitra Media, romance
            'title'=> "A Longing Heart",
            'author'=> "Meike Sumeler",
            'year'=> 2022,
            'synopsis'=> "Di setiap perpisahan hampir selalu menyisakan luka duka yang menggores pedih. Rasa kehilangan atas seseorang yang disayangi akan menjadi pukulan terbesar dalam hidup. Kini, yang tersisa hanyalah rindu yang mencengkeram sukma. Masih adalah harapan bagi cinta Kei Lee dan Joselyn Dee? Kei Lee: “Aku tak pernah membunuh rasa rindu ini sampai pertemuan nyata memuaskannya.” Joselyn Dee: “Musim akan terus berganti, tapi kerinduan ini akan tetap bergaung abadi.”Saat takdir mempertemukan mereka kembali, hanya seuntai kata indah yang terucap, ‘izinkan aku mencintaimu. Kekasih!",
            'image'=> "/img/cover/aLongingHeart.jpg"
        ]);

    }
}
