@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="container text-center mt-5" style="position: relative; z-index: 2;">
            <!-- Begin Form -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.8);">
                        <!-- Added transparency -->
                        <div class="card-header" style="font-family: 'Lobster', cursive; font-size: 24px;">Moving
                            Service
                        </div>
                        <form action="{{ route('form.submit') }}" method="POST">
                            @csrf
                            <!-- CSRF Token for Laravel form submission -->
                            <div class="card-body">

                                <!-- Description Field -->
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        required>
                                </div>

                                <!-- Other Description Field -->
                                <div class="mb-3">
                                    <label for="other_description" class="form-label">Other Description</label>
                                    <input type="text" class="form-control" id="other_description"
                                        name="other_description" required>
                                </div>

                                <!-- Select Date Field -->
                                <div class="mb-3">
                                    <label for="date" class="form-label">Select Date</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Form -->
        </div>
    </div>
</div>

<style>
    body {
        background: url('backgroundp.jpg') no-repeat center center fixed;
        background-size: cover;
    }

    .container::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('background.jpg') no-repeat center center;
        background-size: cover;
        opacity: 0.4;
        z-index: 1;
    }

    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
</style>
@endsection