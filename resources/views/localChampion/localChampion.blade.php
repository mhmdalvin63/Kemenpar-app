@extends('pages') 
@section('title', 'Local Champion')
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
        <h4><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</button></h4> 
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
                <th>Nama</th> 
                <th>Tempat Lahir</th> 
                <th>Tanggal Lahir</th> 
                <th>Jenis Kelamin</th> 
                <th>NIK</th> 
                <th>NPWP</th> 
                <th>No.HP</th> 
                <th>Pekerjaan</th> 
                <th>Pendidikan Terakhir</th> 
                <th>Aktivitas</th> 
                <th>No. Rek</th> 
                <th>Nama Bank</th> 
                <th>Nama Rek</th> 
                <th>Aksi</th> 
              </tr> 
            </thead> 
            <tbody class="ui-sortable"> 
                <tr> 
                    <td> 
                      <div class="sort-handler ui-sortable-handle text-center"> 
                        <i class="fas fa-th"></i> 
                      </div> 
                    </td> 
                    <td>Muhammad Alvin</td> 
                    <td class="align-middle"> 
                      <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;"> 
                        <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div> 
                      </div> 
                    </td> 
                    <td> 
                      <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"> 
                    </td> 
                    <td>2018-01-20</td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><div class="badge badge-success">Completed</div></td> 
                    <td><a href="#" class="btn btn-secondary">Detail</a></td> 
                  </tr> 
            </tbody> 
          </table> 
        </div> 
      </div> 
    </div> 
  </div> 
</div> 

<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" style="display: none; background-color: transparent;" aria-hidden="true"> 
  <div class="modal-dialog" role="document"> 
    <div class="modal-content"> 
      <div class="modal-header"> 
        <h5 class="modal-title">Modal title</h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: grey;"> 
          <span aria-hidden="true">×</span> 
        </button> 
      </div> 
      <div class="modal-body"> 
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select class="form-control">
            <option>Laki-Laki</option>
            <option>Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label>NIK</label>
          <input type="number" class="form-control">
        </div>
        <div class="form-group">
          <label>NPWP</label>
          <input type="number" class="form-control">
        </div>
        <div class="form-group">
          <label>No.HP</label>
          <input type="number" class="form-control">
        </div>
        <div class="form-group">
          <label>Pekerjaan</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Pendidikan Terakhir</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Aktivitas</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>No.Rek</label>
          <input type="number" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama Bank</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama Rekening</label>
          <input type="text" class="form-control">
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