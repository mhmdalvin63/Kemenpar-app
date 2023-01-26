@extends('pages')
@section('title', 'Sosialisasi')
@section('content')
<style>
  .modal-backdrop {
    position: relative;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: white;
}
</style>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create</button></h4>
        <div class="card-header-action">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped" id="sortable-table">
            <thead>
              <tr>
                <th class="text-center">
                  <i class="fas fa-th"></i>
                </th>
                <th>DPP</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Desa/Kampung Wisata</th>
                <th>Tempat Kegiatan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="ui-sortable">
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" style="display: none; background-color: transparent;" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content col-md-12">
      <div class="modal-header">
        <h5 class="modal-title">Form Kegiatan Sosialisasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Destinasi Pariwisata Prioritas</label>
          <select class="form-control">
            <option disabled>Pilih</option>
            <option>Toba</option>
            <option>BYP</option>
            <option>BTS</option>
            <option>Lombok</option>
            <option>Labuan Bajo</option>
            <option>Wakatobi</option>
          </select>
        </div>
        <div class="form-group">
          <label>Desa/Kampung Wisata</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Kecamatan</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Kabupaten</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label>Tanggal Pelaksanaan</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label>Tempat Kegiatan</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama PIC Desa (PCO)</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Kontak PIC Desa</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama Kepala Desa</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Kontak Kepala Desa</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama POKDARWIS</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Kontak POKDARWIS</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>NIK POKDARWIS</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Jumlah Peserta</label>
          <input type="number" class="form-control">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Peserta Laki-laki</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Peserta Perempuan</label>
            <input type="number" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label>Pengisi Acara</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Sambutan Dinas</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Moderator</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>MC</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Kemenparekraf</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Narasumber 1</label>
            <input type="number" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Narasumber 2</label>
            <input type="number" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label>Lampiran Surat Dan Administrasi</label>
          <input type="file" class="form-control">
        </div>
        <div class="form-group">
          <label>Lampiran Foto Dan Kegiatan</label>
          <input type="file" class="form-control">
        </div>
        <div class="form-group">
          <label>Lampiran Daftar Peserta</label>
          <input type="file" class="form-control">
        </div>
        <div class="form-group">
          <label>Catatan Kegiatan</label>
          <textarea class="form-control" required=""></textarea>
        </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
