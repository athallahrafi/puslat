@extends('layouts.main')
@section('container')
<div class="mt-5 d-flex flex-column justify-content-center align-items-center" style="width:100vw;">
    <div class="mt-5 mb-5 table data-table d-flex flex-column justify-content-start align-items-center" style="background-color: var(--secondary-color);width:80vw;height:60vh;">
        <table class="mt-5 mb-5 table table-bordered table-dark" id="riwayat_sewa">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Nama Alat Berat</th>
                <th>Model Alat Berat</th>
                <th>Mulai Sewa</th>
                <th>Selesai Sewa</th>
                <th>lama Sewa(Jam)</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Dika Alim</td>
                <td>Komatsu</td>
                <td>5-ton Mini Excavator PC-75</td>
                <td>21/05/2023</td>
                <td>28/05/2023</td>
                <td>100</td>
                <td>Rp.17.000.000</td>
            </tr>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        console.log('jquery sudah dimuat');
        $('#riwayat_sewa').dataTable();
    });
</script>
@endsection