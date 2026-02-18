@extends('theme.admin')

@section('content')

    <h2>All transactions</h2>
    <div class="content">
        <table class="table table-striped" id="dataTable">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Asset</th>
                <th scope="col">Amount</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <th scope="row">{{$transaction->id}}</th>
                    <td>{{$transaction->owner->name}}</td>
                    <td>{{$transaction->asset->name}}</td>
                    <td>{{$transaction->amount}} {{$transaction->asset->name}}</td>
                    <td>{{$transaction->type_explained($transaction->type)}}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{url('admin/edit/transactions/').'/'.$transaction->id}}">Edit</a>

                        <a class="btn btn-sm btn-danger confirm" href="{{url('admin/delete/transactions/').'/'.$transaction->id}}">Delete</a>

                        @if($transaction->status==2)

                            <a href="{{url('admin/approve/transactions/')}}/{{$transaction->id}}" class="btn btn-sm btn-success confirm">Approve</a>

                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

