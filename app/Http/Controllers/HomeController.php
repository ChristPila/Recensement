<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //SELECT extract(MONTH from created_at) as mois, count(id) as nombre FROM `objectifs` WHERE 1
        $liste_recense = DB::select('SELECT extract(MONTH from created_at) as mois, extract(YEAR from created_at) as annee, count(id) as nombre FROM `recenses` group by mois, annee order by mois desc limit 12');
          array_multisort($liste_recense);
        $chartRecense = json_encode($liste_recense);
        return view('dashboard', compact(
            'chartRecense',
        ));
    }
}
