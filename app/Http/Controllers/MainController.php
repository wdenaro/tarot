<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MainController extends Controller {




    public function splash() {

        $result = DB::table('meanings')
            ->leftJoin('suits', 'meanings.suit', '=', 'suits.suit')
            ->inRandomOrder()
            ->limit(1)
            ->get();

        return view('card', ['card' => $result[0]]);

    }




}
