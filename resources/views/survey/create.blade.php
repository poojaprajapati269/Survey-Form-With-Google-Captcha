@extends('layouts.app')

@section('title', 'Survey Form')

@section('content')
    @include('layouts.header')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card shadow-lg">
                    <div class="card-header text-grey text-center">
                        <h4 class="mt-3">Customer Satisfaction Survey</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('survey.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="service_name" class="form-label">Service Name:</label>
                                <select name="service_name" class="form-select" required>
                                    <option value="">Select Service</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="SEO">SEO</option>
                                    <option value="eCommerce">eCommerce</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Overall Rating:</label><br>
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="rating" id="star-{{ $i }}" value="{{ $i }}" class="form-check-input">
                                        <label class="form-check-label" for="star-{{ $i }}">
                                            @for ($j = 1; $j <= $i; $j++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                        </label>
                                    </div>
                                @endfor
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Are you satisfied with our service?</label><br>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="satisfaction" value="Yes" required class="form-check-input">
                                    <label class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="satisfaction" value="No" class="form-check-input">
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Why did you choose us?</label>
                                <select name="reason" class="form-select" required>
                                    <option value="">Select Reason</option>
                                    <option value="Quality">Quality</option>
                                    <option value="Cost">Cost</option>
                                    <option value="Management">Management</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Comment:</label>
                                <textarea name="comment" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="mb-3">
                                {!! NoCaptcha::display() !!}
                                @error('g-recaptcha-response')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.footer')

@endsection
