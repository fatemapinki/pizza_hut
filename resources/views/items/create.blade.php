@extends('layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Coffee
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('pizza.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Item Name:</label>
                    <input type="text" class="form-control" name="pizza_name" />
                </div>
                <div class="form-group">
                    <label for="price">Item Description:</label>
                    <input type="text" class="form-control" name="pizza_description" />
                </div>
                <div class="form-group">
                    <label for="quantity">Item Price:</label>
                    <input type="text" class="form-control" name="pizza_price" />
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
