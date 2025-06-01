@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">All Bursary Applications</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Institution</th>
                <th>Course</th>
                <th>Amount</th>
                <th>Submitted</th>
                <th>Attachments</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $app)
            <tr>
                <td>{{ $app->full_name }}</td>
                <td>{{ $app->institution_name }}</td>
                <td>{{ $app->course }}</td>
                <td>Ksh {{ number_format($app->amount_requested) }}</td>
                <td>{{ $app->created_at->format('d M Y') }}</td>
                <td>
                    @if($app->id_copy_path)
                    <a href="{{ asset('storage/' . $app->id_copy_path) }}" target="_blank">ID</a>
                    @endif
                    @if($app->transcript_path)
                    | <a href="{{ asset('storage/' . $app->transcript_path) }}" target="_blank">Transcript</a>
                    @endif
                    @if($app->admission_letter_path)
                    | <a href="{{ asset('storage/' . $app->admission_letter_path) }}" target="_blank">Letter</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection