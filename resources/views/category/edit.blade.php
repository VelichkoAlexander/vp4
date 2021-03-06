@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Category</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('category.update', ['id'=> $category->id])}}">
                            @method('PATCH')
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Cat Name</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="name" required
                                           autofocus
                                           value="{{$category->name}}"
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Cat desc</label>

                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="desc" required
                                           value="{{$category->desc}}">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>

                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{route('category.index')}}/{{$category->id}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


