@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <a href="/category/create/" class="btn btn-info">create Category</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categories</div>
                    <table class="table table-bordered">
                        <tr>
                            <th>category id</th>
                            <th>category Name</th>
                            <th>category Actions</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="/category/{{$category->id}}/edit/" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection