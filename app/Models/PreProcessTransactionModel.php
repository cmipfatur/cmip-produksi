<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PreProcessTransactionModel extends Model
{
    use HasFactory;

    public function getData($date_from, $date_to, $table)
    {
        if ($table === 'ppic_bonbahanbaku_d') {
            $date_column = 'TGL_BONBAHANBAKU';
        } else {
            $date_column = 'TGL_PREPROSES';
        }

        $query = DB::table($table)->orderBy('NO_ID', 'DESC');

        if ($date_from) $query->where($date_column, '>=', $date_from);
        if ($date_to)   $query->where($date_column, '<=', $date_to);

        return $query->get();
    }
}
