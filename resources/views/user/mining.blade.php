@extends('layouts.user.user_layout')
@section('title')
    <title>Mining || CE International</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/user/mining.css') }}" />
@endsection
@section('content')

    <section class="mining-section">
        <div class="mining-under">
            <h2 class="mining-title">
                IN-HOUSE CAPABILITY & COMPLEMENTARY ALLIANCES
            </h2>
            <div class="mining-text">
                <p>Sultanate of Oman has rich and Diverse mineral deposits and resources, including metals and
                    industrial
                    minerals. The industry is on growth trajectory, supported by the government’s focus as part of the
                    economic diversification program, a key pillar on Oman’s 2040 Vision.</p>
                <br>
                <p>CE International interest in this sector is not only driven by the clear potential for profitable
                    investment in this strategic industry, aligning with our realization of the national agenda, but
                    also
                    the potential long-term value it offers to the Sultanate and its significant impact on the
                    socio-economic development of less fortunate cities and villages.</p>
                <br>
                <p>We offer a comprehensive portfolio of services through in-house expertise, being part of CE
                    International, coupled with strategic partnerships with specialized international companies known
                    for
                    their excellence. This approach is strategically designed with understanding of the entire mining
                    value
                    chain, allowing CE Mining the flexibility to manage any task or project component and enables the
                    expansion of its service offerings to include additional alliances, expertise, and know-how. </p>
                <br>
                <p>CE Mining adds value to the mining value chain by fostering a collaborative, proactive approach,
                    pursuing
                    continuous production, and demonstrating the ability to address complex challenges, thereby
                    benefiting
                    all stakeholders involved.</p>

            </div>
        </div>
    </section>

    <section class="exp1-section">
        <div>
            <img src="{{ asset('assets/uploads/mining/exp1.png') }}" alt="">
        </div>
    </section>
    <div class="services">
        <div class="services-title">MINING SERVICES</div>
    </div>
    <section class="services-under">
        <div class="services-text">
            <p>CE Mining is currently equipped to deliver world-class services in three workstreams</p>
        </div>
    </section>
    <section class="exp2-section">
        <p></p>
        <div>
            <img src="{{ asset('assets/uploads/mining/exp2.png') }}" alt="">
        </div>
    </section>


@endsection
@section('js')
@endsection 