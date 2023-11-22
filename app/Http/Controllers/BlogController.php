<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class BlogController extends Controller
{
    public function home(){
        $pr = DB::table('tb_pr')->get();
        return view('home',['pr' => $pr]);
    }

//uplod task=========================================================================
    public function NewTask(){
        $mapel = DB::table('tb_mapel')->get();
        $guru = DB::table('tb_guru')->get();
        return view('NewTask',['mapel' => $mapel,'guru' => $guru]);
    }


    public function AddTask(Request $request){
        $faker = Faker::create('id_ID');
        DB::table('tb_pr')->insert([
            'id_pr' => $faker->date,
            'id_mapel' => $request->input('id_mapel'),
            'id_guru' => $request->input('id_guru'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'massage' => $request->input('massage'),
            'uploded_time' => $faker->date,
        ]);
        return redirect('/home');
    }
}
