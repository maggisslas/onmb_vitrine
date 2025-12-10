<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class MembreController extends Controller
{
    public function liste_membres($type=false){

        // dd($type);

        $url = config('base.variables.apiHost').'/member/all';
        $members = Http::post($url, [
                            "code" => "___onmb___member___",
                            "type" => $type,
                        ]);
        // dd( $members->json());
        $members = $members->json();


        // if ($type) {
        //     $members = DB::table('members')->where('nbr_year_due' , '<=' , '0' )->get();
        // }else{
        //     $members = DB::table('members')->get();
        // }

        return view('pages.medecins.liste_medecins' , compact('type','members'));
    }

}
