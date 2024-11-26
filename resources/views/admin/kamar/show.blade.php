@extends('admin.layouts.main')

@section('content')
    <h1 class="mb-0">Detail Data</h1>
    <hr />
        <div class="row mb-3">
            <div class="col mb-3">
                <label class="form-label">Name :</label>
                <input type="text" name="name" class="form-control" placeholder="Book name" value="{{ $about_us->name }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Description :</label>
                <textarea class="form-control" name="desc" placeholder="Description" readonly>{{ $about_us->desc }}</textarea>
            </div>
      </div>
      <div class="row mb-3">
        <div class="col mb-3">
            <label class="form-label">Created At :</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $about_us->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At :</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $about_us->updated_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Foto :</label>
            <input type="text" name="imagebuku" class="form-control" placeholder="foto" value="{{ $about_us->image }}" readonly>
            <img src="{{ asset('ricookimg/'.$about_us->image) }}" style="width: 100px"> 

        </div>
  
    

@endsection