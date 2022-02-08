@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card card-subtitle">
                <div class="card-header">Products</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                              <th>
                                    Name
                              </th>
                              <th>
                                    Price
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>
                                    Delete
                              </th>
                        </thead>
                        <tbody>
                              @foreach($products as $product)
                                    <tr>
                                          <td>{{ $product->name }}</td>
                                          <td>{{ $product->price }}</td>
                                          <td>
                                                <a href="{{ route('products.edit', ['product' => $product->id ]) }}" class="btn btn-primary btn-xs">Edit</a>
                                          </td>
                                          <td>
                                                <form action="{{ route('products.destroy', ['product' => $product->id ]) }}" method="post">
                                                      {{ csrf_field() }}
                                                      {{ method_field('DELETE') }}
                                                      <button class="btn btn-xs btn-danger">Delete</button>
                                                </form>
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
