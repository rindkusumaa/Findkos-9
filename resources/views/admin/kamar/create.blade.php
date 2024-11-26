@extends('admin.layouts.main')
@section('content')
<h1 class="mb-0">Add Data</h1>
<hr />
<form action="{{ route('about_us.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="name" >
        </div>
  </div>
  @error('name')
  <div class="alert alert-danger">{{ $message }}</div>  
  @enderror

  <div class="row mb-3">
        <div class="col">
            <textarea name="desc" id="desc" cols="30" rows="10" class="form-control @error('desc') is-invalid @enderror"></textarea>
        </div>
        @error('desc')
        <div class="alert alert-danger">{{ $message }}</div>  
        @enderror

        <div class="col">
            <textarea name="info" id="desc" cols="30" rows="10" class="form-control @error('info') is-invalid @enderror"></textarea>
        </div>
        @error('info')
        <div class="alert alert-danger">{{ $message }}</div>  
        @enderror


        <label for="exampleImputEmail" class="form-label">Masukan Foto</label>
        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>  
            @enderror
        </div>
  </div>

</form>
@endsection