@extends('layouts.app')

@section('title', 'Survey Data')

@section('content')
@include('layouts.header')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-green">Survey Responses</h2>
        <a href="{{ route('survey.create') }}" class="btn btn-success">+ Add Survey</a>
    </div>

    <div class="card shadow-lg p-3">
        <div class="table-responsive">
            <table id="surveyTable" class="table table-bordered table-striped">
                <thead class="header-table">
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>Rating</th>
                        <th>Satisfaction</th>
                        <th>Reason</th>
                        <th>Comments</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($surveys as $survey)
                        <tr>
                            <td>{{ $survey->id }}</td>
                            <td>{{ $survey->service_name }}</td>
                            <td>{{ $survey->rating }}</td>
                            <td>{{ $survey->satisfaction }}</td>
                            <td>{{ $survey->reason }}</td>
                            <td>{{ $survey->comment }}</td>
                            <td>{{ $survey->created_at->format('d M, Y h:i A') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No survey data found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('layouts.footer')
@endsection
