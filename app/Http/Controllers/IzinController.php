<?php

namespace App\Http\Controllers;
use App\Izin as Izinn;
use App\User;
use App\Http\Requests\Izin;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    public function index ()
    {
        $izin = Izinn::selectRaw('izin.id, tanggal_izin, users.name as pegawai')
        ->leftJoin('users', 'users.id', 'izin.user_id')
        ->get();

        return response()->json([
            'success'=>true,
            'message'=>'List Data Izin',
            'data'=>$izin,
        ],200);
    }

    public function show ($id)
    {
        $izin = Izinn::selectRaw('izin.id, tanggal_izin, users.name as pegawai')
        ->leftJoin('users', 'users.id', 'izin.user_id')
        ->where('izin.id', $id)
        ->first();

        return response()->json([
            'success'=>true,
            'message'=>'Detail Izin',
            'data'=>$izin
        ],200);
    }

    public function store(Izin $request)
    {
        $izin = Izinn::create([
            'tanggal_izin'=>$request->tanggal_izin,
            'status_izin'=>'Menunggu',
            'file'=>$request->file,
            'user_id'=>$request->user_id
        ]);

        return response()->json([
            'success'=>true,
            'message'=>'Berhasil disimpan',
            'data'=>$izin
        ],201);
    }
}
