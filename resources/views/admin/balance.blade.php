@extends('theme.admin')

@section('content')

    <h3>{{$user->name}}'s balance</h3>
    <div class="content">
        <table class="table table-striped" id="dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Asset</th>
                <th scope="col">Balance</th>
                <th scope="col">Balance(USD)</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assets as $asset)
                <tr>
                    <th scope="row">{{$asset->id}}</th>
                    <td>{{$asset->user->name}}</td>
                    <td>{{ucfirst($asset->asset->name)}}</td>
                    <td>{{$asset->amount}} {{$asset->asset->name}}</td>
                    <td>{{$asset->amount * $asset->asset->rate}} USD</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/edit/userAssets/').'/'.$asset->id}}">Edit</a>
                        <a class="btn btn-sm btn-danger confirm" href="{{url('admin/delete/userAssets/').'/'.$asset->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

