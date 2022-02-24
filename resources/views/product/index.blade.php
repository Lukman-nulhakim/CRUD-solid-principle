@extends('main')
@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus"></i> Create</a>
        <table class="table table-hover text-center">
            <thead>
                <th>Title</th>
                <th>Price</th>
                <th>Desc</th>
                <th>#</th>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->desc }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Data masih kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection