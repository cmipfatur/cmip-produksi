<?php

namespace App\Http\Controllers;

use App\Models\PreProcessTransactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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
        $request->validate([
            'voucher_code' => 'required|string|max:255',
            'process_date' => 'required|string',
            'old_voucher' => 'nullable|string|max:255',
            'period' => 'required|string|max:20',
            'admin' => 'required|string|max:255',
            'notes' => 'nullable|string|max:1000',
            'rec' => 'required|array',
            'process_voucher' => 'nullable|array',
            'next_process' => 'nullable|array',
            'karat' => 'nullable|array',
            'process_date_detail' => 'nullable|array',
            'operator_a' => 'nullable|array',
            'operator_b' => 'nullable|array',
            'product_name' => 'nullable|array',
            'gram_a' => 'nullable|array',
            'gram_b' => 'nullable|array',
            'gram_c' => 'nullable|array',
            'gram_d' => 'nullable|array',
            'gram_e' => 'nullable|array',
            'gram_f' => 'nullable|array',
            'gram_total' => 'nullable|array',
            'detail_notes' => 'nullable|array',
            'initial_weight' => 'nullable|string',
            'reject_weight' => 'nullable|string',
            'shrinkage_weight' => 'nullable|string',
        ]);

        $normalizeNumber = function ($value) {
            if ($value === null || $value === '') {
                return 0;
            }
            return (float) str_replace([',', ' '], ['', ''], $value);
        };

        $normalizeDate = function ($value) {
            if (empty($value)) {
                return null;
            }
            try {
                return Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
            } catch (\Exception $e) {
                return null;
            }
        };

        $now = Carbon::now()->format('Y-m-d H:i:s');
        $userName = Auth::user()->name ?? 'SYSTEM';

        $headerData = [
            'BUKTI_PREPROSES' => strtoupper($request->input('voucher_code')),
            'TGL_PREPROSES' => $normalizeDate($request->input('process_date')),
            'BUKTI_PREPROSES_LAMA' => strtoupper($request->input('old_voucher', '')),
            'ADMIN' => strtoupper($request->input('admin')),
            'NOTES' => strtoupper($request->input('notes', '')),
            'PER' => strtoupper($request->input('period')),
            'GT_QTYGRAM_PROSESSEBELUMNYA' => $normalizeNumber($request->input('initial_weight', 0)),
            'GT_AFKIRQTYGRAMPREPROSES' => $normalizeNumber($request->input('reject_weight', 0)),
            'GT_SUSUTQTYGRAMPREPROSES' => $normalizeNumber($request->input('shrinkage_weight', 0)),
            'GT_QTYGRAM_PROSES' => 0,
            'GT_QTYPCS_PROSES' => 0,
            'UN_SIMPAN' => $userName,
            'DT_SIMPAN' => $now,
        ];

        $rows = [];
        $recList = $request->input('rec', []);
        $processVouchers = $request->input('process_voucher', []);
        $nextProcesses = $request->input('next_process', []);
        $karats = $request->input('karat', []);
        $processDates = $request->input('process_date_detail', []);
        $operatorAList = $request->input('operator_a', []);
        $operatorBList = $request->input('operator_b', []);
        $productNames = $request->input('product_name', []);
        $gramsA = $request->input('gram_a', []);
        $gramsB = $request->input('gram_b', []);
        $gramsC = $request->input('gram_c', []);
        $gramsD = $request->input('gram_d', []);
        $gramsE = $request->input('gram_e', []);
        $gramsF = $request->input('gram_f', []);
        $gramTotals = $request->input('gram_total', []);
        $qtyPcs = $request->input('QTYPCS_PROSES', []);
        $detailNotes = $request->input('detail_notes', []);
        $period = strtoupper($request->input('period'));

        foreach ($recList as $index => $rec) {
            $processVoucher = $processVouchers[$index] ?? '';
            $productName = $productNames[$index] ?? '';
            $nextProcess = strtoupper($nextProcesses[$index] ?? '');
            $karat = strtoupper($karats[$index] ?? '');
            $processDate = $normalizeDate($processDates[$index] ?? '');
            $gramA = $normalizeNumber($gramsA[$index] ?? 0);
            $gramB = $normalizeNumber($gramsB[$index] ?? 0);
            $gramC = $normalizeNumber($gramsC[$index] ?? 0);
            $gramD = $normalizeNumber($gramsD[$index] ?? 0);
            $gramE = $normalizeNumber($gramsE[$index] ?? 0);
            $gramF = $normalizeNumber($gramsF[$index] ?? 0);
            $gramTotal = $normalizeNumber($gramTotals[$index] ?? ($gramA + $gramB + $gramC + $gramD + $gramE + $gramF));
            $qtyPc = $normalizeNumber($qtyPcs[$index] ?? 0);

            // skip empty detail rows
            if (empty($rec) && empty($processVoucher) && empty($productName)) {
                continue;
            }

            $rows[] = [
                'BUKTI_PREPROSES' => strtoupper($request->input('voucher_code')),
                'BUKTI_PREPROSES_LAMA' => strtoupper($request->input('old_voucher', '')),
                'REC' => $rec,
                'BUKTI_PROSES' => $processVoucher,
                'PROSES_SELANJUTNYA' => $nextProcess,
                'PP_KARAT' => $karat,
                'TGL_PROSES' => $processDate,
                'OPERATOR_A_PROSES' => strtoupper($operatorAList[$index] ?? ''),
                'OPERATOR_B_PROSES' => strtoupper($operatorBList[$index] ?? ''),
                'PR_NAMA' => strtoupper($productName),
                'QTYGRAM_A_PROSES' => $gramA,
                'QTYGRAM_B_PROSES' => $gramB,
                'QTYGRAM_C_PROSES' => $gramC,
                'QTYGRAM_D_PROSES' => $gramD,
                'QTYGRAM_E_PROSES' => $gramE,
                'QTYGRAM_F_PROSES' => $gramF,
                'QTYGRAM_PROSES' => $gramTotal,
                'QTYPCS_PROSES' => $qtyPc,
                'KET' => strtoupper($detailNotes[$index] ?? ''),
                'PER' => $period,
                'UN_SIMPAN' => $userName,
                'DT_SIMPAN' => $now,
            ];
        }

        DB::transaction(function () use ($headerData, $rows) {
            $preProcessId = DB::table('ppic_preproses')->insertGetId($headerData);

            if (!empty($rows)) {
                foreach ($rows as &$row) {
                    $row['ID'] = $preProcessId;
                }
                unset($row);
                (new PreProcessTransactionModel())->storeData('ppic_preproses_d', $rows);
            }

            $totalGram = 0;
            $totalPcs = 0;
            foreach ($rows as $row) {
                $totalGram += isset($row['QTYGRAM_PROSES']) ? (float) $row['QTYGRAM_PROSES'] : 0;
                $totalPcs += isset($row['QTYPCS_PROSES']) ? (float) $row['QTYPCS_PROSES'] : 0;
            }

            DB::table('ppic_preproses')
                ->where('NO_ID', $preProcessId)
                ->update([
                    'GT_QTYGRAM_PROSES' => $totalGram,
                    'GT_QTYPCS_PROSES' => $totalPcs,
                ]);
        });

        $redirectParams = array_filter([
            'date_from' => $request->input('date_from'),
            'date_to' => $request->input('date_to'),
        ]);

        return redirect()->route('PreProcessTransaction.index', $redirectParams)->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = (new PreProcessTransactionModel())->getEditData($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'voucher_code'         => 'required|string|max:255',
            'process_date'         => 'required|string',
            'old_voucher'          => 'nullable|string|max:255',
            'period'               => 'required|string|max:20',
            'admin'                => 'required|string|max:255',
            'notes'                => 'nullable|string|max:1000',
            'rec'                  => 'required|array',
            'process_voucher'      => 'nullable|array',
            'next_process'         => 'nullable|array',
            'karat'                => 'nullable|array',
            'process_date_detail'  => 'nullable|array',
            'operator_a'           => 'nullable|array',
            'operator_b'           => 'nullable|array',
            'product_name'         => 'nullable|array',
            'gram_a'               => 'nullable|array',
            'gram_b'               => 'nullable|array',
            'gram_c'               => 'nullable|array',
            'gram_d'               => 'nullable|array',
            'gram_e'               => 'nullable|array',
            'gram_f'               => 'nullable|array',
            'gram_total'           => 'nullable|array',
            'detail_notes'         => 'nullable|array',
            'initial_weight'       => 'nullable|string',
            'reject_weight'        => 'nullable|string',
            'shrinkage_weight'     => 'nullable|string',
        ]);

        $normalizeNumber = function ($value) {
            if ($value === null || $value === '') return 0;
            return (float) str_replace([',', ' '], ['', ''], $value);
        };

        $normalizeDate = function ($value) {
            if (empty($value)) return null;
            try {
                return Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
            } catch (\Exception $e) {
                return null;
            }
        };

        $now      = Carbon::now()->format('Y-m-d H:i:s');
        $userName = Auth::user()->name ?? 'SYSTEM';
        $period   = strtoupper($request->input('period'));

        $headerData = [
            'BUKTI_PREPROSES'             => strtoupper($request->input('voucher_code')),
            'TGL_PREPROSES'               => $normalizeDate($request->input('process_date')),
            'BUKTI_PREPROSES_LAMA'        => strtoupper($request->input('old_voucher', '')),
            'ADMIN'                       => strtoupper($request->input('admin')),
            'NOTES'                       => strtoupper($request->input('notes', '')),
            'PER'                         => $period,
            'GT_QTYGRAM_PROSESSEBELUMNYA' => $normalizeNumber($request->input('initial_weight', 0)),
            'GT_AFKIRQTYGRAMPREPROSES'    => $normalizeNumber($request->input('reject_weight', 0)),
            'GT_SUSUTQTYGRAMPREPROSES'    => $normalizeNumber($request->input('shrinkage_weight', 0)),
            'UN_UPDATE'                   => $userName,
            'DT_UPDATE'                   => $now,
        ];

        $rows = [];

        foreach ($request->input('rec', []) as $index => $rec) {
            $processVoucher = $request->input('process_voucher', [])[$index] ?? '';
            $productName    = $request->input('product_name', [])[$index] ?? '';

            if (empty($rec) && empty($processVoucher) && empty($productName)) continue;

            $gramA = $normalizeNumber($request->input('gram_a', [])[$index] ?? 0);
            $gramB = $normalizeNumber($request->input('gram_b', [])[$index] ?? 0);
            $gramC = $normalizeNumber($request->input('gram_c', [])[$index] ?? 0);
            $gramD = $normalizeNumber($request->input('gram_d', [])[$index] ?? 0);
            $gramE = $normalizeNumber($request->input('gram_e', [])[$index] ?? 0);
            $gramF = $normalizeNumber($request->input('gram_f', [])[$index] ?? 0);

            $rows[] = [
                'ID'                  => $id,
                'BUKTI_PREPROSES'     => strtoupper($request->input('voucher_code')),
                'BUKTI_PREPROSES_LAMA' => strtoupper($request->input('old_voucher', '')),
                'REC'                 => $rec,
                'BUKTI_PROSES'        => $processVoucher,
                'PROSES_SELANJUTNYA'  => strtoupper($request->input('next_process', [])[$index] ?? ''),
                'PP_KARAT'            => strtoupper($request->input('karat', [])[$index] ?? ''),
                'TGL_PROSES'          => $normalizeDate($request->input('process_date_detail', [])[$index] ?? ''),
                'OPERATOR_A_PROSES'   => strtoupper($request->input('operator_a', [])[$index] ?? ''),
                'OPERATOR_B_PROSES'   => strtoupper($request->input('operator_b', [])[$index] ?? ''),
                'PR_NAMA'             => strtoupper($productName),
                'QTYGRAM_A_PROSES'    => $gramA,
                'QTYGRAM_B_PROSES'    => $gramB,
                'QTYGRAM_C_PROSES'    => $gramC,
                'QTYGRAM_D_PROSES'    => $gramD,
                'QTYGRAM_E_PROSES'    => $gramE,
                'QTYGRAM_F_PROSES'    => $gramF,
                'QTYGRAM_PROSES'      => $normalizeNumber($request->input('gram_total', [])[$index] ?? ($gramA + $gramB + $gramC + $gramD + $gramE + $gramF)),
                'QTYPCS_PROSES'       => 0,
                'KET'                 => strtoupper($request->input('detail_notes', [])[$index] ?? ''),
                'PER'                 => $period,
                'UN_UPDATE'           => $userName,
                'DT_UPDATE'           => $now,
            ];
        }

        (new PreProcessTransactionModel())->updateData($id, $headerData, $rows);

        $redirectParams = array_filter([
            'date_from' => $request->input('date_from'),
            'date_to' => $request->input('date_to'),
        ]);

        return redirect()->route('PreProcessTransaction.index', $redirectParams)->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // delete logic here
        $redirectParams = array_filter([
            'date_from' => request('date_from'),
            'date_to' => request('date_to'),
        ]);

        return redirect()->route('PreProcessTransaction.index', $redirectParams)->with('success', 'Data berhasil dihapus.');
    }
}
