@extends('main')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title ..">
                @error('title')
                    <div class="text-danger">{{ $message }} !</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Price</label>
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="999999">
                @error('price')
                    <div class="text-danger">{{ $message }} !</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Desc</label>
                <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" rows="3"></textarea>
                @error('desc')
                    <div class="text-danger">{{ $message }} !</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection