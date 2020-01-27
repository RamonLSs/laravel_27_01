<?php

use Illuminate\Database\Seeder;

use App\Libro;
class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Primero borramos por si ejecutamos el seed varias veces
        //no rellenar la tabla cada vez
        DB::table('libros')->truncate(); //vacia la tabla
        factory(Libro::class, 10)->create(); //creo 10 registros
    }
}
