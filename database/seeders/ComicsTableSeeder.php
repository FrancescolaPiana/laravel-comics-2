<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// ci importiamo sempre il model
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // leggiamo il contenuto del array
        $comics = config('comics');
        // dd($comics);
        foreach ($comics as $comic) {
            $newComic = new Comic();
            //migrationvalue --  arrayvalue 
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->url = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->save();
        }
    }
}