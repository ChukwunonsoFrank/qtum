@extends('theme.admin')

@section('content')

    <h2>Edit {{$build['type']}}</h2>
    <div class="content">

        <form action="" class="form" method="POST">
            @csrf

            @foreach($build['fields'] as $field)

                <label for="{{$field}}">{{ucfirst(real_names($field))}}</label>
                <input type="text" name="{{$field}}" id="{{$field}}" value="{{$data->$field}}" class="form-control">
                <br>

            @endforeach

            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div>

@endsection

