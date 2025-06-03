@extends('layouts.user.user_layout')
@section('title')
    <title>Contact US || CE International</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/user/contactus.css') }}" />
@endsection
@section('content')

    <section class="contact-section">
        <h2 class="section-title">CONNECT WITH CE</h2>

        <div class="contact-cards">
            <div class="contact-card">
                <h3>QATAR</h3>
                <p>Tel: +974 4411 2536</p>
                <p>Al Reem Tower, West Bay, 11<sup>th</sup> Floor</p>
                <p>P.O. Box: 24355, Doha, Qatar</p>
                <br><br>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.067019546984!2d51.519378!3d25.324492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c5113bb09ec9%3A0x9e6b2b0a4b6ea56d!2sAl%20Reem%20Tower!5e0!3m2!1sen!2sqa!4v1681111111111"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="contact-card">
                <h3>OMAN</h3>
                <p>Tel: +968 2413 7442</p>
                <p>Ghala, Al Fardan Heights, Fourth Floor</p>
                <p>P.O. Box: 47, P.C: 138, Muscat,<br>Sultanate of Oman</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14625.664221315354!2d58.36965381799943!3d23.5894071984952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91ffa3832a0e45%3A0xfa389b1ecd8dc53d!2zQWxmYXJkYW4gSGVpZ2h0cyDYp9mE2YHYsdiv2KfZhiDZh9in2YrYqtiz!5e0!3m2!1sen!2sqa!4v1748333476026!5m2!1sen!2sqa"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="contact-email">
            <a href="mailto:info@ce-international.com" class="email-btn">
                Email Us: info@ce-international.com
            </a>
        </div>
    </section>


@endsection
@section('js')
@endsection 