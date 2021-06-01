<?php

namespace App\Http\Controllers;

use App\Models\information;
use Illuminate\Http\Request;

class InfoApiController extends Controller
{
    //
    public function index(){
        return information::all();
    }
    public function store(){
        request()->validate([
            'name' => 'required',
            'address' => 'required',

        ]);
        return information::create([
            'name' =>request('name'),
            'address' => request('address')
        ]);
    }
    public function update(information $information){
        request()->validate([
            'name' => 'required',
            'address' => 'required',

        ]);
        $information->update([
            'name' => request('name'),
            'address' => request('address'),

        ]);
    }
    public function destroy(information $information){
        $success =$information->delete();

    return [
        'success'=> $success
    ];
    }
}
