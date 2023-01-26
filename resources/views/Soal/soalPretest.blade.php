@extends('pages') 
@section('title', 'Soal Pretest')
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
                <th>Soal Pre Test</th>
                <th>Jawaban A</th>
                <th>Jawaban B</th>
                <th>Jawaban C</th>
                <th>Jawaban D</th>
                <th>Jawaban Benar</th>
                <th>Aksi</th>
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
          <label>Soal Pre Test</label>
          <textarea class="form-control"></textarea>
        </div> 
        <div class="form-group">
          <label>Jawaban A</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Jawaban B</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Jawaban C</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Jawaban D</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>Jawaban Benar</label>
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