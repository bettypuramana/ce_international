@extends('layouts.user.user_layout')
@section('title')
 <title>Careers || CE International</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/user/careers.css') }}" />
@endsection
@section('content')

     <section class="careers-section">
        <div class="overlay">
            <div class="careers-container">
                <h2>CAREERS</h2>
                <p>
                    At CE, we adopt friendliness in the workplace and encourage having a sense of ownership among all
                    employees.
                    We are proud to have a conflict-free atmosphere and a diverse team where every member feels valued,
                    and every opinion is heard and respected.
                </p>

                <form class="careers-form" method="POST" action="{{ route('career.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-row">
                        <input type="text" name="phone" placeholder="Your Phone" value="{{ old('phone') }}" required />
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <label class="file-upload">
                            <input type="file" name="image" required />
                            <span>Attach Resume</span>
                            <i data-lucide="paperclip" class="lucide-icon"></i>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </label>
                    </div>

                    <textarea placeholder="Tell Us More" name="more" rows="5" maxlength="2000" required>{{ old('more') }}</textarea>

                    <div class="form-buttons">
                        <button type="reset" class="reset-btn">Reset</button>
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </section>


@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: @json(session('success')),
            });
        </script>
    @endif

    @if(session('fail'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: @json(session('fail')),
            });
        </script>
    @endif
@endsection 