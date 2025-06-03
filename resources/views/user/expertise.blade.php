@extends('layouts.user.user_layout')
@section('title')
    <title>Expertise || CE International</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/user/expertise.css') }}" />
@endsection
@section('content')
    <section class="engineering-section" id="engineering-section">
        <h2 class="section-title">ENGINEERING</h2>
        <p class="engineering-text">At CE International, engineering is not merely a discipline; it is the cornerstone
            that
            shapes all our services. We embrace a philosophy where engineering extends beyond basic service, it is a
            mindset and a lifestyle that influences every project we manage. This dedication ensures that from initial
            design to final execution, each solution we provide is crafted with innovation and precision. CE
            International is committed to delivering solutions focused on commercial viability, functionality,
            durability, and safety.</p>
        <img src="{{ asset('assets/uploads/engineering/eng1.png') }}" alt="">
        <p class="engineering-text">
            The engineering solutions we provide are the result of integrated inputs from multiple engineering
            disciplines. We synthesize the unique contributions of our experts into a cohesive and impactful final
            product. Our experts have successfully delivered solutions for prestigious projects and landmarks around the
            globe. This wide-ranging experience has equipped us with a profound depth of expertise, enabling us to
            address challenges comprehensively and exceed our clients’ expectations across the following sectors:
        </p>
        <div class="hero-style">
            <img src="{{ asset('assets/uploads/engineering/eng5.png') }}" alt="">
        </div>
        <p class="engineering-text">Partnering with CE International means a commitment not only to delivering projects
            on time, within budget, and to the required quality but also to extending the delivery projects’ anticipated
            value, functionality, and positive impact on the local community.</p>
    </section>

    <section class="section2 expertise-section">
        <div class="expertise-item">
            <div class="expertise-image"><img src="{{ asset('assets/uploads/engineering/eng2.png') }}" alt="Expertise Image"
                    style="width:100%"></div>
            <div class="expertise-text">
                <h3>EXPERTS QUALIFICATION HIGHLIGHTS</h3>
                <ul>
                    <li>Professors, Doctors and Advanced degree holders</li>
                    <li>Patent Holders</li>
                    <li>Chartered Engineers</li>
                    <li>Certified project professionals</li>
                </ul>
            </div>
        </div>
        <div class="expertise-item" id="section-integrated">
            <div class="expertise-text">
                <h3>CE COLLECTIVE STRENGTH</h3>
                <ul>
                    <li>Centuries of combined experience</li>
                    <li>Multi-discipline capabilities</li>
                    <li>Global insights and perspectives</li>
                    <li>Innovative problem-solving approach</li>
                </ul>

            </div>
            <div class="expertise-image"><img src="{{ asset('assets/uploads/engineering/eng3.png') }}" alt="Expertise Image"
                    style="width:100%"></div>
        </div>
    </section>

    <section class="eng-services">
        <div class="eng-title">
            ENGINEERING SERVICES
        </div>
    </section>
    <section class="accordion-sec">
        <div class="accordion">
            <div class="accordion-section active">PRE-FEED AND FEED</div>
            <div class="accordion-content" style="display: block;">
                <p>
                    At the intersection of innovation and precision, our Pre-FEED and FEED services optimize your
                    project's
                    DNA from day one. Our approach focuses on reducing risks and laying a solid foundation for
                    successful
                    project execution, aligning with industry best practices to efficiently meet your strategic goals.
                </p>
                <br>
                <img src="{{ asset('assets/uploads/engineering/DURABILITY.png') }}" alt="Diagram" class="diagram-image">
            </div>

            <div class="accordion-section">PROJECT MANAGEMENT AND DELIVERY</div>
            <div class="accordion-content">
                <p>As Employer’s Engineer, we serve as independent advocates for our clients, managing every detail of
                    their projects and portfolios entrusted to us to ensure success. Our commitment encompasses
                    comprehensive management throughout the project lifecycle, with a relentless focus on safeguarding
                    our clients' interests. Additionally, we offer the necessary project management team and expertise
                    required to ensure the successful delivery of projects.</p>
            </div>

            <div class="accordion-section">STRATEGIC CONSULTING AND ADVISORY</div>
            <div class="accordion-content">
                <p>Our experts are comprised of visionaries, forward-thinking strategists, innovators, and problem
                    solvers dedicated to delivering tailored solutions. We excel in crafting customized approaches that
                    address unique complex challenges and opportunities of your business. We are committed to guiding
                    our clients toward new heights of success through insightful, data-driven strategies and actionable
                    plans.</p>
            </div>

            <div class="accordion-section">EXPERT ENGINEERING OPINIONS AND REPORTS</div>
            <div class="accordion-content">
                <p>Our seasoned experts deliver independent opinions and reports to support decision-making and
                    effectively resolve disputes. Our reports are used in courts and arbitrations, backed by our
                    experienced experts, who are well-prepared for rigorous cross-examination.</p>
            </div>
        </div>
    </section>

@endsection
@section('js')
<script>
    const sections = document.querySelectorAll('.accordion-section');
    const contents = document.querySelectorAll('.accordion-content');

    sections.forEach((section, index) => {
        section.addEventListener('click', () => {
            const isActive = section.classList.contains('active');
            sections.forEach(s => s.classList.remove('active'));
            contents.forEach(c => c.style.display = 'none');

            if (!isActive) {
                section.classList.add('active');
                contents[index].style.display = 'block';
            }
        });
    });
</script>
@endsection 