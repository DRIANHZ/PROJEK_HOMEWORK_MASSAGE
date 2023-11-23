<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class BlogController extends Controller
{
    public function home(){
        $pr = DB::table('tb_pr')->join('tb_guru','tb_pr.id_guru','=','tb_guru.id_guru')->join('tb_mapel','tb_pr.id_mapel','=','tb_mapel.id_mapel')->orderBy('id_pr','desc')->get();
        $mapel = DB::table('tb_mapel')->get();
        return view('home',['pr' => $pr,'mapel' => $mapel]);
    }

//uplod task=========================================================================
    public function NewTask(){
        $mapel = DB::table('tb_mapel')->get();
        $guru = DB::table('tb_guru')->get();
        return view('NewTask',['mapel' => $mapel,'guru' => $guru]);
    }


    public function AddTask(Request $request){
        // $faker = Faker::create('id_ID');
        $tanggal = date('y-m-d');
        DB::table('tb_pr')->insert([
            'id_pr' => NULL,
            'id_mapel' => $request->input('id_mapel'),
            'id_guru' => $request->input('id_guru'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'massage' => $request->input('massage'),
            'uploded_time' => $tanggal,
        ]);
        return redirect('/home');
    }



    public function hapus($id){

        DB::table('tb_pr')->where('id_pr',$id)->delete();
        return redirect('/home');
    }


    public function filter($mapelId){
        $pr = DB::table('tb_pr')
            ->join('tb_guru', 'tb_pr.id_guru', '=', 'tb_guru.id_guru')
            ->join('tb_mapel', 'tb_pr.id_mapel', '=', 'tb_mapel.id_mapel')
            ->where('tb_pr.id_mapel', '=', $mapelId)
            ->orderBy('id_pr','desc')
            ->get();

        $mapel = DB::table('tb_mapel')->get();

        return view('home', ['pr' => $pr, 'mapel' => $mapel]);
    }

}
