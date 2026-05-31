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

    public function storeData($table, $data)
    {
        return DB::table($table)->insert($data);
    }

    public function getEditData($id)
    {
        $header = DB::table('ppic_preproses')
            ->where('NO_ID', $id)
            ->first();

        $detail = DB::table('ppic_preproses_d')
            ->where('ID', $id)
            ->orderBy('REC', 'ASC')
            ->get();

        return [
            'header' => $header,
            'detail' => $detail,
        ];
    }

    public function updateData($id, array $headerData, array $rows)
    {
        DB::transaction(function () use ($id, $headerData, $rows) {
            DB::table('ppic_preproses')
                ->where('NO_ID', $id)
                ->update($headerData);

            DB::table('ppic_preproses_d')
                ->where('ID', $id)
                ->delete();

            $totalGram = 0;
            $totalPcs  = 0;

            if (!empty($rows)) {
                $this->storeData('ppic_preproses_d', $rows);

                foreach ($rows as $row) {
                    $totalGram += (float) ($row['QTYGRAM_PROSES'] ?? 0);
                    $totalPcs  += (float) ($row['QTYPCS_PROSES']  ?? 0);
                }
            }

            DB::table('ppic_preproses')
                ->where('NO_ID', $id)
                ->update([
                    'GT_QTYGRAM_PROSES' => $totalGram,
                    'GT_QTYPCS_PROSES'  => $totalPcs,
                ]);
        });
    }
}
