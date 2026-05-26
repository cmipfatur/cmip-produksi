<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. PROSES VALIDASI
        // Memastikan inputan dari user sesuai dengan aturan
        $request->validate([
            'name'       => 'required|string|max:100',
            'type'       => 'required|string|max:100',
            'file_name'  => 'required|mimes:jpg,jpeg,png,pdf|max:2048', // Maksimal 2MB
            'keterangan' => 'nullable|string',
        ], [
            // Pesan error kustom (Opsional)
            'file_name.mimes' => 'Format file harus berupa JPG, PNG, atau PDF!',
            'file_name.max'   => 'Ukuran file tidak boleh lebih dari 2MB!',
        ]);

        // 2. PROSES UPLOAD FILE
        $namaFile = null;
        if ($request->hasFile('file_name')) {
            $file = $request->file('file_name');
            // Membuat nama file unik (Misal: 16928374_cincin.jpg)
            $namaFile = time() . '_' . $file->getClientOriginalName();

            // Menyimpan file ke dalam folder: storage/app/public/produk
            $file->storeAs('public/product', $namaFile);
        }

        // 3. PROSES SIMPAN KE DATABASE

        // CARA A: Menggunakan Eloquent Model (Sangat Disarankan)
        /*
        Produk::create([
            'name'       => $request->name,
            'type'       => $request->type,
            'file_name'  => $namaFile,
            'keterangan' => $request->keterangan,
        ]);
        */

        // CARA B: Menggunakan Query Builder (Gunakan ini jika Anda belum membuat File Model)
        DB::table('nama_tabel_produk_anda')->insert([
            'name'       => $request->name,
            'type'       => $request->type,
            'file_name'  => $namaFile,
            'keterangan' => $request->keterangan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4. KEMBALIKAN KE HALAMAN TABEL DENGAN PESAN SUKSES
        return redirect()->route('produk.index')->with('success', 'Data produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Mengambil data produk berdasarkan ID menggunakan Query Builder
        $product = DB::table('products')->where('id', $id)->first();

        // Jika produk tidak ditemukan, kembalikan ke halaman utama dengan error
        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Data produk tidak ditemukan!');
        }

        return view('pages.product-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
