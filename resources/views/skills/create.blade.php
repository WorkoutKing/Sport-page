@include('partials._nav')
@extends('main')


@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
    <h1 class="main_heading">Upload skill!</h1>
    <p class="upload_skill_page"> Upload skill and level up and compete with other PROS, if your skill was done correct then you will get points if no then good luck next time! </p>
<form id="multiStepForm" method="POST" action="{{ route('skills.store') }}" enctype="multipart/form-data">
    @csrf

    <!-- Step 1: Select Category -->
    <div class="form-step" data-step="1">
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id" required>
            <option value="">-- Select Category --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }} {{ $category->r_or_s }}</option>
            @endforeach
        </select>
        <button type="button" class="next-step">Next</button>
    </div>

    <!-- Step 2: Enter Number -->
    <div class="form-step" data-step="2">
        <label for="number">Number:</label>
        <input type="text" id="number" name="number" value="{{ old('number') }}" required>
        @error('number')
            <div>{{ $message }}</div>
        @enderror
        <button type="button" class="prev-step">Previous</button>
        <button type="button" class="next-step">Next</button>
    </div>

    <!-- Step 3: Upload Video and Enter YouTube URL -->
    <div class="form-step" data-step="3">
        <label for="video">Video:</label>
        <input type="file" id="video" name="video" accept="video/*" max="200000">
        @error('video')
            <div>{{ $message }}</div>
        @enderror

        <label for="youtube_url">YouTube URL:</label>
        <input type="text" id="youtube_url" name="youtube_url" value="{{ old('youtube_url') }}">
        @error('youtube_url')
            <div>{{ $message }}</div>
        @enderror

        <button type="button" class="prev-step">Previous</button>
        <button type="submit">Submit</button>
    </div>
</form>
</div>
<script>
    $(document).ready(function () {
        const formSteps = $('.form-step');
        const nextButtons = $('.next-step');
        const prevButtons = $('.prev-step');

        formSteps.not(':first').hide();

        nextButtons.on('click', function () {
            const currentStep = $(this).closest('.form-step');

            // Check if required fields in the current step are filled
            const requiredFields = currentStep.find('[required]');
            const invalidFields = requiredFields.filter(function () {
                return $(this).val().trim() === '';
            });

            if (invalidFields.length > 0) {
                alert('Please fill in all required fields before proceeding.');
                return;
            }

            const nextStep = currentStep.next('.form-step');

            currentStep.hide();
            nextStep.show();
        });

        prevButtons.on('click', function () {
            const currentStep = $(this).closest('.form-step');
            const prevStep = currentStep.prev('.form-step');

            currentStep.hide();
            prevStep.show();
        });
    });
</script>

@endsection
