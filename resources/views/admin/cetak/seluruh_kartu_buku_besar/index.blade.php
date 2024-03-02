@extends('admin.layout.core')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
        </div>
    </div>
    <!-- row -->
    <div class="row tm-content-row">
        
        <div class="container mt-5">
            <h2 class="mb-4">Pilih Tanggal dan Tahun</h2>
        
            <form id="myForm" method="GET" action="/cetak/memorial_saldo_awal">
              <div class="form-group">
                <label for="tanggal">Cetak sesuai dengan:</label>
                <select class="form-control" id="selectPerkiraan" name="sesuai_dengan" required>
                  <option value="urut_noperkiraan">Urut No Perkiraan</option>
                  <option value="urut_tanggal">Urut Tanggal</option>
                </select>
              </div>
        
              <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
            </form>
          </div>
       
       
    </div>
</div>
@endsection
