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
        $table     = request('table', 'ppic_preproses');
        $data      = [];

        if ($date_from || $date_to) {
            $data = (new PreProcessTransactionModel())->getData($date_from, $date_to, $table);
        }

        return view('PreProcessTransaction.index', compact('data', 'date_from', 'date_to'));
    }

    public function getListPreProcessTransaction()
    {
        $date_from = request('date_from');
        $date_to   = request('date_to');
        $table     = request('table', 'ppic_preproses');

        $data = (new PreProcessTransactionModel())->getData($date_from, $date_to, $table);
        return response()->json($data);
    }

    public function getListBonBahanBaku()
    {
        $date_from = request('date_from');
        $date_to   = request('date_to');
        $table     = request('table', 'ppic_bonbahanbaku_d');

        $data = (new PreProcessTransactionModel())->getData($date_from, $date_to, $table);
        return response()->json($data);
    }
}
