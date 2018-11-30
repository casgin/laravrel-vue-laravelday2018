<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ApiOroscopiController extends Controller
{
    public function dettaglioOroscopo(Request $request)
    {
        $faker = \Faker\Factory::create();

        return response()->json([
            'Segno' => $request->segno,
            'Testo'  => $faker->realText(200, 1)
        ]);
    }

}
