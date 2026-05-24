@extends('layouts.home-layout')

@section('content')

<!-- Hero Banner -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 hero-content">
          <div class="small-intro">Professional Learning & Executive Certifications</div>
          <h1>Empowering Future-Ready Finance & Accounting Professionals</h1>
          <p class="lead">Professional learning, executive certifications, membership pathways, and continuous development opportunities designed to support practical capability, ethical practice, and career growth in finance and accounting.</p>
          <div class="d-flex gap-3 mt-4 flex-wrap">
            <a href="/certification" class="btn btn-primary-custom">Explore Certifications</a>
            <a href="/membership" class="btn btn-secondary-custom">Become a Member</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About AIFAP -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 gsap-fade-up">
          <img src="{{ asset('/assets/images/homeimg1.jpg') }}" alt="Professional Networking" class="img-fluid rounded-xl shadow-lg">
        </div>
        <div class="col-lg-6 ps-lg-5">
          <h2 class="section-title">About AIFAP</h2>
          <p class="mt-4 text-muted gsap-fade-up">The American Institute of Finance and Accounting Professional (AIFAP) is a professional development and membership institute focused on promoting practical learning, professional capability development, and ethical standards within finance, accounting, audit, taxation, and related business disciplines.</p>
          <p class="text-muted gsap-fade-up">AIFAP provides professional certifications, executive learning programs, corporate training solutions, and continuing professional development opportunities designed to support workplace relevance and lifelong learning.</p>
          
          <div class="row mt-4 gsap-stagger-container">
            <div class="col-md-6 mb-3 gsap-stagger-item">
              <h5 class="text-blue fw-bold">Industry-Focused</h5>
              <p class="small text-muted">Programs designed with practical workplace application in mind.</p>
            </div>
            <div class="col-md-6 mb-3 gsap-stagger-item">
              <h5 class="text-blue fw-bold">Continuous Learning</h5>
              <p class="small text-muted">Encouraging ongoing learning and professional growth.</p>
            </div>
            <div class="col-md-6 mb-3 gsap-stagger-item">
              <h5 class="text-blue fw-bold">Networking</h5>
              <p class="small text-muted">Connecting professionals, learners, trainers, and organizations.</p>
            </div>
            <div class="col-md-6 mb-3 gsap-stagger-item">
              <h5 class="text-blue fw-bold">Ethical Practice</h5>
              <p class="small text-muted">Supporting integrity, accountability, and responsible conduct.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Certifications -->
  <section class="section-padding">
    <div class="container text-center">
      <h2 class="section-title text-center mx-auto">Featured Certifications & Executive Programs</h2>
      <p class="section-subtitle mx-auto mt-4 gsap-fade-up">AIFAP offers professional development programs across finance, accounting, compliance, corporate leadership, and business management disciplines.</p>
      
      <div class="row mt-5 gsap-stagger-container text-start">
        <div class="col-lg-3 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card">
            <div class="card-icon">
              <i class="fa-solid fa-austral-sign"></i>
            </div>
            <h3>Finance & Accounting</h3>
            <p class="small">Programs covering financial reporting, budgeting, accounting operations, and financial management concepts.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card">
            <div class="card-icon">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3>Audit & Compliance</h3>
            <p class="small">Learning pathways focused on governance, internal controls, compliance awareness, and risk-based approaches.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card">
            <div class="card-icon">
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <h3>Financial Analysis</h3>
            <p class="small">Programs supporting analytical thinking, reporting interpretation, and business-focused financial decision-making.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card">
            <div class="card-icon">
              <i class="fa-solid fa-user-tie"></i>
            </div>
            <h3>Executive Leadership</h3>
            <p class="small">Professional learning opportunities for managers, executives, and business leaders working within finance.</p>
          </div>
        </div>
      </div>
      <div class="mt-4 text-center">
        <a href="/certification" class="btn btn-outline-custom mt-3 gsap-fade-up">View All Programs <i class="fa-solid fa-arrow-right ms-1"></i></a>
      </div>
    </div>
  </section>


  <!-- Membership Benefits & Why Choose Us -->
  <section class="section-padding bg-light-gray position-relative" style="background: linear-gradient(rgba(243, 244, 246, 0.9), rgba(243, 244, 246, 0.9)), url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover fixed;">
    <div class="container">
      <div class="row">
        <!-- Why Choose AIFAP -->
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h2 class="section-title">Why Choose AIFAP</h2>
          <p class="mt-4 gsap-fade-up">AIFAP aims to provide accessible, practical, and professionally relevant learning opportunities that support continuous growth within modern business environments.</p>
          
          <ul class="benefit-list mt-4 gsap-stagger-container">
            <li class="gsap-stagger-item"><strong>Practical Learning Focus:</strong> Emphasize workplace relevance and real-world application.</li>
            <li class="gsap-stagger-item"><strong>Flexible Opportunities:</strong> Online, blended, and instructor-led learning options.</li>
            <li class="gsap-stagger-item"><strong>Modern Perspective:</strong> Designed with awareness of changing financial practices.</li>
            <li class="gsap-stagger-item"><strong>Continuous Culture:</strong> Encouraging lifelong professional development.</li>
            <li class="gsap-stagger-item"><strong>Ethical Approach:</strong> Promoting integrity and accountability.</li>
          </ul>
        </div>
        
        <!-- Membership Benefits -->
        <div class="col-lg-6 ps-lg-5">
          <div class="glass-card bg-white p-5 shadow-lg gsap-fade-up">
            <h2 class="section-title mb-4" style="font-size: 2rem;">Membership Benefits</h2>
            <p class="text-muted">Designed to support professional engagement, learning participation, and networking opportunities.</p>
            
            <div class="row mt-4">
              <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                  <div class="text-red me-3 fs-3"><i class="fa-solid fa-trophy"></i></div>
                  <div><strong class="text-blue d-block">Recognition</strong><small class="text-muted">Professional pathways</small></div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                  <div class="text-red me-3 fs-3"><i class="fa-solid fa-book-open"></i></div>
                  <div><strong class="text-blue d-block">CPD Opportunities</strong><small class="text-muted">Webinars & workshops</small></div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                  <div class="text-red me-3 fs-3"><i class="fa-solid fa-globe"></i></div>
                  <div><strong class="text-blue d-block">Networking</strong><small class="text-muted">Connect globally</small></div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                  <div class="text-red me-3 fs-3"><i class="fa-solid fa-circle-check"></i></div>
                  <div><strong class="text-blue d-block">Digital Verification</strong><small class="text-muted">Credential system</small></div>
                </div>
              </div>
            </div>
            
            <a href="/membership" class="btn btn-primary-custom w-100 mt-4">Join the Professional Community <i class="fa-solid fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Membership Categories -->
  <section class="section-padding bg-light-gray text-center">
    <div class="container">
      <h2 class="section-title text-center mx-auto">Corporate Training Solutions </h2>
      <div class="row mt-5">

        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4 rounded-2">
            <h4 class="text-blue">Student Member</h4>
            <div class="price-tag">USD 50<span>/yr</span></div>
            <p class="small text-muted mb-4">Individuals currently enrolled in a recognized educational program related to finance, accounting, business, banking, economics, or management.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4 rounded-2">
            <h4 class="text-blue">Associate Member</h4>
            <div class="price-tag">USD 120<span>/yr</span></div>
            <p class="small text-muted mb-4">Diploma/certification with 2+ years experience in Finance/Accounting, or Business qualification with 7+ years experience.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4 rounded-2">
            <h4 class="text-blue">Professional Member</h4>
            <div class="price-tag">USD 200<span>/yr</span></div>
            <p class="small text-muted mb-4">Graduation/Diploma with 10 years experience OR Professional Qualification with 5 years experience in related fields.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item offset-lg-2" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4 rounded-2">
            <h4 class="text-blue">Senior Professional Member</h4>
            <div class="price-tag">USD 300<span>/yr</span></div>
            <p class="small text-muted mb-4">Graduation/Diploma with 15 years experience OR Professional Qualification with 10 years experience.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4 rounded-2" style="border: 2px solid var(--primary-red) !important;">
            <h4 class="text-red">Fellow Member</h4>
            <div class="price-tag">USD 400<span>/yr</span></div>
            <p class="small text-muted mb-4">Extensive professional contribution. Typically 20+ years of relevant professional experience with demonstrated leadership.</p>
          </div>
        </div>

      </div>
      <a href="/membership" class="btn btn-primary-custom mt-4">Join the Professional Community <i class="fa-solid fa-arrow-right ms-1"></i></a>
    </div>
  </section>

  <!-- Coporate Solution -->
  <section class="section-padding text-center">
    <div class="container">
      <h2 class="section-title text-center mx-auto">Corporate Training Solutions </h2>
      <p class="section-subtitle mx-auto mt-4 gsap-fade-up">AIFAP supports organizations through customized professional learning and capability development initiatives tailored to business and workforce needs.</p>
      <div class="row justify-content-center gap-3">

        <p class="nav-pill bg-color-primary px-3 py-2 rounded-5 text-white" style="width: fit-content;">
          Corporate Finance Training 
        </p>

        <p class="nav-pill bg-color-primary px-3 py-2 rounded-5 text-white" style="width: fit-content;">
          Executive Development 
        </p>

        <p class="nav-pill bg-color-primary px-3 py-2 rounded-5 text-white" style="width: fit-content;">
          Technical Workshops 
        </p>

        <p class="nav-pill bg-color-primary px-3 py-2 rounded-5 text-white" style="width: fit-content;">
          Competency Development 
        </p>

        <p class="nav-pill bg-color-primary px-3 py-2 rounded-5 text-white" style="width: fit-content;">
          Customized Learning Solutions 
        </p>

      </div>
      <a href="/corporate-trainning" class="btn btn-primary-custom mt-4">View All Solutions <i class="fa-solid fa-arrow-right ms-1"></i></a>
    </div>
  </section>

  <!--  -->
  <section class="section-padding">

    <div class="container">

      <h2 class="sr-only text-center mb-5">AIFAP Professional Standards and Ethics section outlining ethical conduct, responsibilities, and
      disclaimer</h2>
    
      <div class="pse-wrap">
        <div class="pse-header">
          <div class="pse-eyebrow">Institute Standards</div>
          <div class="pse-title">Professional Standards &amp; Ethics</div>
          <div class="pse-subtitle">AIFAP — Commitment to integrity, accountability, and responsible conduct</div>
        </div>
    
        <div class="pse-body">
          <p class="pse-intro">AIFAP encourages ethical conduct, professional responsibility, integrity, and continuous
            learning across all professional development activities. The institute promotes respectful engagement, responsible
            business practices, and professional accountability among learners, members, trainers, and partner organizations.
          </p>
    
          <div class="pse-pillars-label">Core principles</div>
          <div class="pse-pillars-grid">
            <div class="pse-pillar-card">
              <div class="pse-pillar-icon text-white border-white"><i class="fa-solid fa-check" aria-hidden="true"></i></div>
              <div class="pse-pillar-text">Ethical professional behavior</div>
            </div>
            <div class="pse-pillar-card">
              <div class="pse-pillar-icon text-white border-white"><i class="fa-classic fa-solid fa-scale-balanced" aria-hidden="true"></i></div>
              <div class="pse-pillar-text">Respect for applicable laws and regulations</div>
            </div>
            <div class="pse-pillar-card">
              <div class="pse-pillar-icon text-white border-white"><i class="fa-solid fa-stamp" aria-hidden="true"></i></div>
              <div class="pse-pillar-text">Honest representation of qualifications and experience</div>
            </div>
            <div class="pse-pillar-card">
              <div class="pse-pillar-icon text-white border-white"><i class="fa-solid fa-chart-line" aria-hidden="true"></i></div>
              <div class="pse-pillar-text">Continuous competency development</div>
            </div>
            <div class="pse-pillar-card">
              <div class="pse-pillar-icon text-white border-white"><i class="fa fa-users" aria-hidden="true"></i></div>
              <div class="pse-pillar-text">Responsible workplace conduct</div>
            </div>
          </div>
    
          <div class="pse-disclaimer">
            <i class="ti ti-info-circle pse-disclaimer-icon" aria-hidden="true"></i>
            <div>
              <div class="pse-disclaimer-label">Disclaimer</div>
              <div class="pse-disclaimer-text">AIFAP operates as a professional development and membership institute.
                Participation in certification, programs or membership activities does not constitute government licensing or
                statutory authority unless specifically stated by relevant authorities.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section text-center">
    <div class="container position-relative z-1">
      <h2 class="section-title mx-auto text-white">Join international Community of Finance & Accounting Professionals</h2>
      <p class="lead mt-4 mb-5 mx-auto" style="max-width: 800px; opacity: 0.9;">Become part of a professional learning network focused on continuous development, practical capability enhancement, and ethical professional engagement. Whether you are a student, practitioner, executive, trainer, or consultant, AIFAP offers opportunities for growth.</p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="/membership" class="btn btn-secondary-custom btn-lg px-5">Apply for Membership</a>
        <a href="/corporate-trainning" class="btn btn-outline-light btn-lg px-5 border-2 fw-bold" style="border-radius:8px;">Corporate Training</a>
      </div>
    </div>
  </section>

@endsection