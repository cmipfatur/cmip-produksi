<?php

namespace App\Http\Controllers;

use App\Models\PreProcessTransactionModel;
use Illuminate\Http\Request;

class PreProcessTransactionController extends Controller
{
    public function index()
    {
        $date_from = request('date_from');
        $date_to   = request('date_to');
        $data      = [];

        if ($date_from || $date_to) {
            $data = (new PreProcessTransactionModel())->getData($date_from, $date_to, 'ppic_preproses');
        }

        return view('PreProcessTransaction.index', compact('data', 'date_from', 'date_to'));
    }

    public function getListPreProcessTransaction()
    {
        $date_from = request('date_from');
        $date_to   = request('date_to');

        $data = (new PreProcessTransactionModel())->getData($date_from, $date_to, 'ppic_preproses');
        return response()->json($data);
    }

    public function getListBonBahanBaku()
    {
        $date_from = request('date_from');
        $date_to   = request('date_to');

        $data = (new PreProcessTransactionModel())->getData($date_from, $date_to, 'ppic_bonbahanbaku_d');
        return response()->json($data);
    }

    public function getListKarat()
    {
        $data = (new PreProcessTransactionModel())->getData('', '', 'karat');
        return response()->json($data);
    }

    public function store(Request $request)
    {
        // store logic here
        return redirect()->route('PreProcessTransaction.index')->with('success', 'Data berhasil disimpan.');
    }

    public function destroy($id)
    {
        // delete logic here
        return redirect()->route('PreProcessTransaction.index')->with('success', 'Data berhasil dihapus.');
    }
}
