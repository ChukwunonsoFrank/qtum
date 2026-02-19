@extends('theme.admin')

@section('content')

    <h2>Edit {{ $build['type'] }}</h2>
    <div class="content">

        <form action="" class="form" method="POST">
            @csrf

            @foreach ($build['fields'] as $field)
                <label for="{{ $field }}">{{ ucfirst(real_names($field)) }}</label>
                <input type="text" name="{{ $field }}" id="{{ $field }}" value="{{ $data->$field }}"
                    class="form-control">
                <br>
            @endforeach

            @if ($build['type'] === 'User')
                <h3>Documents & Profile</h3>

                <label>Zip Code</label>
                <p style="color: #000;">{{ $data->zip_code ?? 'N/A' }}</p>

                <label>Identity Number</label>
                <p style="color: #000;">{{ $data->identity_number ?? 'N/A' }}</p>

                <label>Address</label>
                <p style="color: #000;">{{ $data->address ?? 'N/A' }}</p>

                <label>Proof Document Type</label>
                <p style="color: #000;">
                    {{ $data->proof_document_type ? ucwords(str_replace('-', ' ', $data->proof_document_type)) : 'N/A' }}
                </p>

                <label>Proof Document</label>
                @if ($data->proof_document_path)
                    <div>
                        <img src="{{ asset('storage/' . $data->proof_document_path) }}" alt="Proof Document">
                    </div>
                @else
                    <p>N/A</p>
                @endif
                <br>

                <label>Profile Picture</label>
                @if ($data->profile_picture)
                    <div>
                        <img src="{{ asset('storage/' . $data->profile_picture) }}" alt="Profile Picture">
                    </div>
                @else
                    <p>N/A</p>
                @endif
                <br>
            @endif

            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div>

@endsection
