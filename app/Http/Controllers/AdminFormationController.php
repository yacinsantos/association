<?php

namespace App\Http\Controllers;

use App\Categorie;

use Illuminate\Http\Request;

class AdminFormationController extends Controller
{   

    public function create(){

        return view('admin.formations.add_formation') ;

    }

    public function store(Request $request){

      return 'hhelo';

    }
}
