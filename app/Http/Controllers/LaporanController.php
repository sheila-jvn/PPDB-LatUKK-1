<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\Pendaftar;
use Illuminate\Http\Request;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftars = Pendaftar::latest()->paginate(5);
  
        return view('laporans.index',compact('pendaftars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporans.create');
    }


    // public function show(Laporan $laporan)
    // {
    //     return view('laporans.show',compact('laporan'));
    // }


    // public function destroy(Laporan $laporan)
    // {
    //     //
    // }

   

    public function print(Request $request)
    {

        // $request->validate([
        //     'startDate'=> 'required',
        //     'endDate'=> 'required',
        //     ]);
        $pendaftarans = $request->pendaftaran;
        $from = $request->startDate;
        $to = $request->endDate;

        $title ="Laporan From: ".$from."To:".$to;
        $redirect = route('laporans');   
        if(isset($from) && isset($to)){
            $startDate = $from;
            $endDate = $to;

            $pendaftars = Pendaftar::whereBetween('tanggal', [$startDate,$endDate])->latest()->paginate(5);
            $startDate = explode(' ', $startDate)[0];
            $endDate = explode(' ', $endDate)[0];

            return view('laporans.print', compact('pendaftars', 'startDate', 'endDate', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            $pendaftars = Pendaftar::latest()->paginate(5);

            return view('laporans.print', compact('pendaftars', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
  
    }

}