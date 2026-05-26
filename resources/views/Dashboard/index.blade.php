@extends('layouts.app')

@section('content')

<div class="row mb-4">

    <div class="col-md-3">
        <div class="card p-3 d-flex flex-row gap-3">
            <div class="stat-icon bg-blue"><i class="bi bi-file-earmark"></i></div>
            <div>
                <small>Total Order</small>
                <h4>1.245</h4>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card p-3 d-flex flex-row gap-3">
            <div class="stat-icon bg-green"><i class="bi bi-box"></i></div>
            <div>
                <small>Produksi</small>
                <h4>856</h4>
            </div>
        </div>
    </div>

</div>

{{-- GRID --}}
<div class="row g-3">

    @for($i=0;$i<8;$i++)
    <div class="col-md-3">
        <div class="card">
            <div class="p-3 bg-danger text-white rounded-top">
                BB10/VIII/24
            </div>
            <div class="p-3">
                <small class="text-muted">BAGI BAHAN COR</small><br>
                <span class="text-danger fw-bold">{{ rand(200,700) }} HARI MASA KERJA</span>
            </div>
        </div>
    </div>
    @endfor

</div>

@endsection
