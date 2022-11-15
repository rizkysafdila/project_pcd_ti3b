@extends('dashboard.layouts.main')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
                   <!-- DataTales Example -->
           <div class="table-responsive">
  <table class="table align-middle" width="100%" cellspacing="5">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jumlah Transaksi</th>
        <th>Jumlah Total Uang</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Pulsa</td>
        <td>10</td>
        <td class="align-top">Rp.150.000</td>
        <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <!-- Chart library -->
    <script src="./plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>

@endsection
