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

        if ($table === 'karat') {
            return DB::table('karat')
                ->select('NO_ID', 'KARAT', 'KARAT_GOL', 'URUT')
                ->orderBy('URUT', 'ASC')
                ->get();
        }

        if ($table === 'ppic_bonbahanbaku_d') {
            $query = DB::table('ppic_bonbahanbaku_d')
                ->select('NO_ID', 'BUKTI_BONBAHANBAKU', 'TGL_BONBAHANBAKU', 'BB_KARAT', 'BB_NAMA', 'BB_QTYGRAM', 'KET')
                ->orderBy('NO_ID', 'DESC');
        } else {
            $query = DB::table('ppic_preproses')
                ->select('NO_ID', 'BUKTI_PREPROSES', 'TGL_PREPROSES', 'BUKTI_PREPROSES_LAMA', 'PER', 'NOTES')
                ->orderBy('NO_ID', 'DESC');
        }

        if ($date_from) $query->where($date_column, '>=', $date_from);
        if ($date_to)   $query->where($date_column, '<=', $date_to);

        return $query->get();
    }
}
