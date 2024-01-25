@extends('layouts.main')
@section('container')
<div class="mt-5 d-flex flex-column justify-content-center align-items-center" style="width:100vw;">
    <div class="mt-5 mb-5 table data-table d-flex flex-column justify-content-start align-items-center" style="background-color: var(--secondary-color);width:80vw;height:60vh;">
        <table class="mt-5 mb-5 table table-responsive row-border" id="riwayat_sewa">
            {{-- <tr>
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
            </tr> --}}
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
            </tr>
            <tr>
                <td>Makr</td>
                <td>Makr</td>
            </tr>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        console.log('jquery sudah dimuat');
        $('#riwayat_sewa').dataTable();
    });
    // $(document).ready(function() {
    //     $('#riwayat_sewa').dataTable({
    //         "bJQueryUI": true,
    //         "sPaginationType": "full_numbers",
    //         "bPaginate": false,
    //         "bFilter": true,
    //         "bSort": true,
    //         "aaSorting": [
    //         [1, "asc"]
    //         ],
    //         "aoColumnDefs": [{
    //         "bSortable": false,
    //         "aTargets": [0]
    //         }, {
    //         "bSortable": true,
    //         "aTargets": [1]
    //         }, {
    //         "bSortable": false,
    //         "aTargets": [2]
    //         }],
    //     });
    // });
</script>
@endsection