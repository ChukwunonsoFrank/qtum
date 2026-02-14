@extends('theme.admin')

@section('content')

    <h2>Deposits</h2>
    <div class="content">
        <table class="table table-striped" id="dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Asset</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($deposits as $deposit)
                    <tr>
                        <th scope="row">{{$deposit->id}}</th>
                        <td>{{$deposit->owner->name}}</td>
                        <td>{{$deposit->asset->name}}</td>
                        <td>{{$deposit->amount}} {{$deposit->asset->name}}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{url('admin/edit/transactions/').'/'.$deposit->id}}">Edit</a>

                            <a class="btn btn-sm btn-danger confirm" href="{{url('admin/delete/transactions/').'/'.$deposit->id}}">Delete</a>

                            @if($deposit->status!=1)

                            <a href="{{url('admin/approve/transactions/')}}/{{$deposit->id}}" class="btn btn-sm btn-success confirm">Approve</a>

                            @endif
                        </td>
                    </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

