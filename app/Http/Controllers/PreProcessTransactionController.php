<?php

namespace App\Http\Controllers;

use App\Models\PreProcessTransactionModel;
use Illuminate\Http\Request;

class PreProcessTransactionController extends Controller
{
    public function index()
    {
        $date_from = request('date_from');
        $date_to = request('date_to');

        $data = [];

        if ($date_from || $date_to) {
            $data = (new PreProcessTransactionModel())->getData($date_from, $date_to);
        }

        return view('PreProcessTransaction.index', compact(
            'data',
            'date_from',
            'date_to'
        ));
    }
}
