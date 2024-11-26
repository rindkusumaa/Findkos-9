@extends('admin.layouts.main')

@section('content')
    <h1 class="mb-0">Edit book</h1>
    <hr />
    <form action="{{ route('about_us.update', $about_us->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col mb-3">
                <label class="form-label">Name :</label>
                <input type="text" name="name" class="form-control" placeholder="Book name" value="{{ $about_us->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description :</label>
                    <textarea name="desc" id="desc" cols="30" rows="10">{!! $about_us->desc !!}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Info :</label>
                    <textarea name="info" id="desc" cols="30" rows="10">{!! $about_us->info !!}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Foto :</label>
                <input type="file" name="image" class="form-control">
                <label class="form-control">{{ $about_us->image}}</label>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Edit</button>
            </div>
        </div>
    </form>
@endsection