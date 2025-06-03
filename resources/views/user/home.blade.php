@extends('layouts.user.user_layout')
@section('title')
    <title>CE International</title>
@endsection
@section('content')

    <section class="hero">
        <div class="hero-text">
            <div>Innovate</div>
            <div>Integrate</div>
            <div>Inspire</div>
        </div>
    </section>

    <section class="section">
        <div class="section-text">
            <p>
                CE International combines world-class standards with a deep commitment to innovation, sustainability,
                local
                values and integrity. Our diverse team of experts and professionals delivers tailored services across
                various industries, ensuring transformative results for our clients in Qatar and Oman.<br><br>

                In an era where globalization has reshaped every industry, it has unquestionably elevated sectors like
                education and engineering by establishing global standards. However, international companies and global
                organizations often struggle to fully understand local contexts or align their efforts with the true
                values
                and priorities of the communities they serve. This disconnect can lead to solutions and services that
                meet
                global benchmarks but lack the relevance for true and sustainable impact, essential to fulfill the
                nuanced
                needs of local communities.<br><br>

                Driven by a vision to bridge this divide, foster meaningful change and create a positive legacy, CE
                International was founded by seasoned experts with extensive leadership experience in top-tier global
                organizations and deep understanding of the challenges that arise when global methods does not adapt to
                local landscapes. We offer a trusted partnership that harmonizes global expertise with a deep commitment
                to
                local values and priorities.<br><br>

                Our Quality Assurance System is developed around the procedures of every service we provide,
                guaranteeing
                that diversity does not in any way compromise the quality. Diversity empowers us to approach every
                challenge
                from multiple perspectives, enabling a comprehensive understanding and the development of holistic,
                effective solutions.</p><br>
            <p class="section-under"><strong style="color: rgb(230, 214, 26); font-size: 24px;">Partner with us to
                    experience the perfect
                    balance
                    of global excellence and local integrity.</strong></p>
        </div>
    </section>

    <div class="values">OUR VALUES</div>
    <section class="values-aboutus">
        <div class="value-item">
            <img src="{{ asset('assets/uploads/icons/Innovation.png') }}" alt="innovation Icon">
            <div class="value-content">
                <div class="value-subtitle">
                    <h3>Innovation & Solutions</h3>
                </div>
                <div class="value-text">
                    <p>We believe that exceptional solutions are the results of dedication to fostering an atmosphere of
                        innovation and creative thinking. We have cultivated a culture that encourages every team member
                        to think beyond conventional limits, challenge norms and collaborate, allowing the team to push
                        boundaries and overcome obstacles. Our commitment to this philosophy ensures that our solutions
                        are not only effective but also flexible and transformative.
                    </p>
                </div>
            </div>
        </div>
        <div class="value-item" style="background-color: #fff;">
            <img src="{{ asset('assets/uploads/icons/ethics.png') }}" alt="ethics Icon">
            <div class="value-content">
                <div class="value-subtitle">
                    <h3>Ethics & Integrity</h3>
                </div>
                <div class="value-text">
                    <p>
                        We are professionals, and we strive to consistently live up to the ethics and integrity that
                        make up a professional. We conduct our business according to the highest ethical standards,
                        maintain openness and transparency in all our business relationships, and hold ourselves
                        accountable for what we do.</p>
                </div>
            </div>
        </div>
        <div class="value-item">
            <img src="{{ asset('assets/uploads/icons/environment.png') }}" alt="environment Icon">
            <div class="value-content">
                <div class="value-subtitle">
                    <h3>Environment & Sustainability</h3>
                </div>
                <div class="value-text">
                    <p>
                        We take our role in protecting the environment very seriously. We help our clients to achieve
                        sustainable outcomes, and we follow sustainable practices in our workplaces. Our engineers,
                        partner with our clients to create energy-efficient and green developments that take the
                        protection of the environment into consideration in their design and use of materials.
                    </p>
                </div>
            </div>
        </div>
        <div class="value-item" style="background-color: #fff;">
            <img src="{{ asset('assets/uploads/icons/excellence.png') }}" alt="Excellence Icon">
            <div class="value-content">
                <div class="value-subtitle">
                    <h3>Excellence & Competency</h3>
                </div>
                <div class="value-text">
                    <p>We follow pre-set and well-defined action plans that enable us to meet and surpass the
                        quality standards demanded by our clients. We make sure to excel at the core competencies
                        required for cost, time and quality control, and we strive for continued improvement.</p>
                </div>
            </div>
        </div>
        <div class="value-item">
            <img src="{{ asset('assets/uploads/icons/meaningful.png') }}" alt="Change Icon">
            <div class="value-content">
                <div class="value-subtitle">
                    <h3>Meaningful Change & Positive Legacy</h3>
                </div>
                <div class="value-text">
                    <p>Our team makes us who we are, and we are committed to supporting and developing the team,
                        empowering everyone on it to achieve their full potential. We are also an integral part of the
                        local communities in which we operate. As such, we take our commitment to the rules and customs
                        of these communities personally, striving to contribute positively and give back wherever we can
                        as part of fulfilling our corporate social responsibility.</p>
                </div>
            </div>
        </div>

    </section>

    <div class="values">EXPERTISE</div>
    <section class="section2 expertise-section">
        <div class="expertise-item">
            <div class="expertise-image"><img src="{{ asset('assets/uploads/expertise/engineering.png') }}" alt="Expertise Image"
                    style="width:100%"></div>
            <div class="expertise-text">
                <h3>ENGINEERING</h3>
                <p class="underH">ENGINEERING IS NOT MERELY A DISCIPLINE; IT IS THE CORNERSTONE THAT SHAPES ALL OUR
                    SERVICES</p>
                <p>
                    <br><br>
                    CE International embraces a philosophy where engineering extends beyond being part of our offerings;
                    it is a mindset and a lifestyle that influences every project we manage. This dedication ensures
                    that from initial design to final execution, each solution we provide is crafted with innovation and
                    precision. <br><br>
                    Our experts delivered solutions for prestigious projects and landmarks worldwide. This diverse
                    experience has equipped us with a wealth of expertise, enabling us to overcome challenges in a
                    manner that surpasses our clients' expectations.
                </p>
                <a href="expertise.html"><button class="expertise-button">
                        Explore More
                        <i data-lucide="arrow-right"></i>
                    </button></a>
            </div>
        </div>
        <div class="expertise-item" id="section-integrated">
            <div class="expertise-text">
                <h3>INTEGRATED RESOLUTION SERVICES</h3>
                <p class="underH">CONTRACTS, CLAIMS, EXPERTS, ARBITRATORS, AND DISPUTE MANAGEMENT</p>
                <br><br>
                <p>
                    Well-structured balanced contracts pave the way for smooth execution, effective conflict resolution,
                    and a strong foundation for long-term collaboration, ultimately driving business success. Our
                    technical and legal professionals are seasoned experts in drafting, reviewing and effectively
                    administering various contracts, supporting our clients reduce business risk, lessen the chances of
                    disputes. CE International offers comprehensive claim and dispute management services, from drafting
                    to resolution, ensuring unparalleled support in resolving complex disputes and maximizing the
                    success rate of claims. Crafting a strategy, coupled with an effective presentation of narratives,
                    facts, and evidence, and the correct assertion of rightful entitlements, is crucial for successful
                    dispute resolutions.</p>
            </div>
            <div class="expertise-image"><img src="{{ asset('assets/uploads/expertise/expertise2.png') }}" alt="Expertise Image"
                    style="width:100%"></div>
        </div>
        <div class="expertise-item" id="section-education">
            <div class="expertise-image"><img src="{{ asset('assets/uploads/expertise/expertise3.png') }}" alt="Expertise Image"
                    style="width:100%"></div>
            <div class="expertise-text">
                <h3>EDUCATION</h3>
                <p class="underH">WE BELIEVE IN THE POWER OF KNOWLEDGE</p>
                <p>
                    <br>
                    CE International aims to contribute to local economic transformation, paving the way for a more
                    industrially productive and innovative community. Since any real, sustainable impact on communities
                    must begin with education, our vision for meaningful change is rooted in supporting the
                    implementation of output-oriented educational initiatives introducing robotics, programming, and
                    future-focused skills at early academic stages through higher educational stages. Through
                    partnerships with top institutions in the Middle East, UK, and US, CE International delivers
                    tailored solutions, helping schools choose programs that suit their social and linguistic contexts
                    for optimal outcomes. We additionally offer specialized training programs designed to educate and
                    equip SMEs with essential skills in contract management and dispute resolution, supporting their
                    professional growth and development. Our educational experts also cooperate with Oman Ministry of
                    Education to design programs, train educators, and develop curricula aligned with local values and
                    priorities.
                </p>
            </div>
        </div>
        <div class="expertise-item">
            <div class="expertise-text">
                <h3>MINING</h3>
                <p class="underH">IN-HOUSE CAPABILITY & COMPLEMENTARY ALLIANCES</p>
                <br><br>
                <p>
                    The Sultanate of Oman boasts rich mineral resources, including metals and industrial minerals. The
                    mining sector is integral to Oman’s economic diversification program outlined in the 2040 vision. CE
                    International is interested in this sector, attracted not only by the prospects for profitable
                    investments but also by the opportunity to enhance socio-economic development in Oman's underserved
                    regions, aligning our initiatives with the national agenda.</p>
                <a href="mining.html"><button class="expertise-button">Explore More<i
                            data-lucide="arrow-right"></i></button></a>
            </div>
            <div class="expertise-image"><img src="{{ asset('assets/uploads/expertise/expertise4.png') }}" alt="Expertise Image"
                    style="width:100%"></div>
        </div>
        <div class="expertise-item" id="section-defense">
            <div class="expertise-image"><img src="{{ asset('assets/uploads/expertise/expertise5.png') }}" alt="Expertise Image"
                    style="width:100%"></div>
            <div class="expertise-text">
                <h3>DEFENSE</h3>
                <p class="underH">TRAINING, EQUIPMENT & CYBER SECURITY</p>
                <p>
                    <br>
                    Our defense offerings are not limited to procuring a comprehensive range of high-quality products
                    but also
                    extends to tailored solutions designed for military and law enforcement agencies in the Sultanate of
                    Oman,
                    supported by robust after-sales services to ensure long-term value and reliability. Additionally, we
                    provide
                    detailed training needs assessments to thoroughly understand operational requirements, anticipate
                    challenges,
                    and develop customized, integrated training programs that meet specific objectives. Our advanced,
                    scalable
                    cybersecurity solutions and strategies are powered by a team of experts and trusted partners with
                    extensive
                    experience working with governments and leading global institutions, including two of the largest
                    banks
                    worldwide.
                </p>
            </div>
        </div>
        <div class="expertise-item" id="section-bpo">
            <div class="expertise-text">
                <h3>BPO</h3>
                <p class="underH">BUSINESS PROCESS OUTSOURCING</p>
                <br><br>
                <p>
                    Outsourcing non-core or administrative functions to CE International allows our clients to
                    reallocate valuable time and resources to focus on their core business operations and production
                    activities, areas critical to their success. Our BPO services are flexible and can be tailored to
                    meet the specific needs of each client. We adapt to the scope and workload of any task, ensuring
                    cost-effective delivery while adhering to the highest quality control standards. By leveraging our
                    expertise, clients can achieve operational efficiency while maintaining focus on their strategic
                    goals.</p>
            </div>
            <div class="expertise-image"><img src="{{ asset('assets/uploads/expertise/expertise6.png') }}" alt="Expertise Image"
                    style="width:100%"></div>
        </div>
    </section>

@endsection
@section('js')
@endsection 