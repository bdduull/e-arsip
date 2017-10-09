<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontrak;
use App\Ka;
use App;
use Carbon\Carbon;

class PrintController extends Controller
{
    public function Cetak(Request $request, $slug)
    {
      if ($slug == "kontraks") {
        $kontraks = Kontrak::all();
        $total = $kontraks->sum('nominal');
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('laporan.print_kontrak', compact('kontraks','total'));
        return $pdf->stream();
      }
      elseif ($slug == "kas") {
        $startDate = new Carbon($request->start_date);
        $kases = Ka::all()->where('created_at', '>=', $startDate)->where('created_at', '<', $startDate->addDays(1));
        $total = $kases->sum('nominal');
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('laporan.print_kas', compact('kases','total'));
        return $pdf->stream();
        // return $kases;
        // return $startDate;
      }
      elseif ($slug == "po") {
        // $kases = Ka::all();
        // $total = $kases->sum('nominal');
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('laporan.print_po');
        return $pdf->stream();
      }
    }
}
