@extends('main')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title .." value="{{ $product ? $product->title : '' }}">
                @error('title')
                    <div class="text-danger">{{ $message }} !</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Price</label>
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="999999" value="{{ $product ? $product->price : '' }}">
                @error('price')
                    <div class="text-danger">{{ $message }} !</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Desc</label>
                <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" rows="3">{{ $product ? $product->desc : '' }}</textarea>
                @error('desc')
                    <div class="text-danger">{{ $message }} !</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection