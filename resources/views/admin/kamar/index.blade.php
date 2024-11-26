@extends('admin.layouts.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    {{-- <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0"></h1>
        <a href="{{ url('admin/about_us/create') }}" class="btn btn-primary">+</a>
    </div>  
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($about_us->count() > 0)
                
            @foreach ($about_us as $about_us)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $about_us->name }}</td>
                <td class="align-middle">{!! $about_us->desc !!}</td>
                <td class="align-middle">
                    <img src="{{ asset('ricookimg/'.$about_us->image) }}" style="width: 100px"> 
                </td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('about_us.show', $about_us->id) }}" type="button" class="btn btn-secondary">Detail</a>
                        <a href="{{ route('about_us.edit', $about_us->id) }}" type="button" class="btn btn-warning">Edit</a>
                        <form action="{{ route('about_us.destroy', $about_us->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger m-0">Delete</button>
                        </form>
                      </div>
                </td>
            </tr>
            @endforeach

            @else
                <tr>
                    <td class="text-center" colspan="5">Dataset not found</td>
                </tr>
                
            @endif

        </tbody>    
    </table> 

    

</div>
<!-- /.container-fluid -->
@endsection