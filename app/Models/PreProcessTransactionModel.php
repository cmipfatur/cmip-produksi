<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PreProcessTransactionModel extends Model
{
    use HasFactory;

    public function getData($date_from, $date_to)
    {
        $query = DB::table('ppic_preproses')->orderBy('NO_ID', 'DESC');

        if ($date_from) $query->where('TGL_PREPROSES', '>=', $date_from);
        if ($date_to)   $query->where('TGL_PREPROSES', '<=', $date_to);

        return $query->get();
    }
}
