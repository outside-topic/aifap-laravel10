@extends('layouts.home-layout')

@section('content')

<x-home.page-header title="Partnerships & Accreditation" Subtitle="Building Collaborative Learning & Professional Development Networks" />


  <!-- Intro -->
  <section class="section-padding bg-light-gray text-center">
    <div class="container gsap-fade-up">
      <p class="lead text-muted mx-auto" style="max-width: 900px;">AIFAP welcomes collaboration with educational institutions, corporate organizations, training providers, professional learning centers, consultants, and industry experts interested in promoting professional development, workforce capability enhancement, and continuous learning initiatives.</p>
      
      <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
        <span class="badge bg-white text-dark border p-2">Professional integrity</span>
        <span class="badge bg-white text-dark border p-2">Quality learning</span>
        <span class="badge bg-white text-dark border p-2">Ethical conduct</span>
        <span class="badge bg-white text-dark border p-2">Mutual growth</span>
        <span class="badge bg-white text-dark border p-2">Continuous improvement</span>
      </div>
    </div>
  </section>

  <!-- Partnership Types -->
  <section class="section-padding">
    <div class="container">
      <div class="row gsap-stagger-container">
        
        <!-- Academic Partnerships -->
        <div class="col-lg-6 mb-5 gsap-stagger-item">
          <div class="glass-card bg-light-gray p-5 h-100 border">
            <h3 class="text-blue mb-3">Academic Partnerships</h3>
            <p class="text-muted">Collaboration with universities, colleges, professional institutes, academies, and educational organizations interested in supporting professional learning and workforce capability development.</p>
            <h6 class="mt-4 text-blue fw-bold">Partnership Areas:</h6>
            <ul class="benefit-list small mt-2">
              <li>Joint Learning Initiatives (workshops, seminars)</li>
              <li>Student Development Programs</li>
              <li>Executive Education Support</li>
              <li>Knowledge Sharing Activities</li>
            </ul>
            <h6 class="mt-4 text-blue fw-bold">Benefits:</h6>
            <ul class="benefit-list small mt-2">
              <li>Professional Collaboration</li>
              <li>Student Development Support</li>
              <li>Professional Visibility</li>
              <li>Industry Engagement</li>
            </ul>
          </div>
        </div>

        <!-- Corporate Partnerships -->
        <div class="col-lg-6 mb-5 gsap-stagger-item">
          <div class="glass-card bg-light-gray p-5 h-100 border">
            <h3 class="text-blue mb-3">Corporate Partnerships</h3>
            <p class="text-muted">AIFAP collaborates with organizations interested in workforce learning, professional capability development, executive education, and continuous professional development initiatives.</p>
            <h6 class="mt-4 text-blue fw-bold">Partnership Areas:</h6>
            <ul class="benefit-list small mt-2">
              <li>Workforce Learning Solutions</li>
              <li>Executive Development Programs</li>
              <li>Professional Engagement Activities</li>
              <li>Capability Development Initiatives</li>
            </ul>
            <h6 class="mt-4 text-blue fw-bold">Benefits:</h6>
            <ul class="benefit-list small mt-2">
              <li>Customized Learning Support</li>
              <li>Workforce Capability Enhancement</li>
              <li>Industry Knowledge Sharing</li>
              <li>Organizational Visibility</li>
            </ul>
          </div>
        </div>

        <!-- Authorized Learning Centers -->
        <div class="col-lg-6 mb-5 gsap-stagger-item">
          <div class="glass-card bg-light-gray p-5 h-100 border">
            <h3 class="text-blue mb-3">Authorized Learning Centers</h3>
            <p class="text-muted">AIFAP may authorize eligible training providers, learning organizations, and professional development institutions to support delivery of selected learning activities.</p>
            <h6 class="mt-4 text-blue fw-bold">Suitable For:</h6>
            <p class="small text-muted">Professional training institutes, Learning academies, Corporate learning providers, Executive education centers.</p>
            <h6 class="mt-4 text-blue fw-bold">Benefits:</h6>
            <ul class="benefit-list small mt-2">
              <li>Authorized Learning Recognition</li>
              <li>Program Delivery Opportunities</li>
              <li>Marketing & Professional Visibility</li>
              <li>Access to Learning Resources</li>
            </ul>
          </div>
        </div>

        <!-- Accredited Institutes -->
        <div class="col-lg-6 mb-5 gsap-stagger-item">
          <div class="glass-card bg-light-gray p-5 h-100 border" style="border: 2px solid var(--primary-blue) !important;">
            <h3 class="text-blue mb-3">Accredited Institutes</h3>
            <p class="text-muted">AIFAP may recognize selected institutions through an accreditation or quality recognition process designed to support structured professional learning and quality-focused educational practices.</p>
            <h6 class="mt-4 text-blue fw-bold">Accreditation Areas:</h6>
            <ul class="benefit-list small mt-2">
              <li>Professional Learning Practices</li>
              <li>Quality Management Processes</li>
              <li>Learner Engagement & Support</li>
              <li>Continuous Improvement Frameworks</li>
            </ul>
            <div class="alert alert-secondary small mt-4 mb-0">
              <strong>Notice:</strong> Intended for professional development and quality-focused learning purposes, not as governmental or statutory accreditation.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Apply for Partner / Accreditation -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="glass-card bg-white shadow-lg p-5 max-w-800 mx-auto gsap-fade-up">
        <h2 class="section-title text-center mx-auto mb-4 d-block">Apply for Partnership or Accreditation</h2>
        <p class="text-muted text-center mb-5">Organizations interested in collaboration, learning partnership, authorized learning center status, or accreditation opportunities may apply through the official AIFAP application process.</p>
        
        <div class="d-flex mb-4 align-items-center">
          <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 50px; height: 50px; min-width: 50px; font-size: 1.25rem;">1</div>
          <div>
            <h5 class="mb-1 text-blue">Submit Online Inquiry</h5>
            <p class="small text-muted mb-0">Complete the partnership/accreditation application form on our contact page.</p>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 50px; height: 50px; min-width: 50px; font-size: 1.25rem;">2</div>
          <div>
            <h5 class="mb-1 text-blue">Provide Information</h5>
            <p class="small text-muted mb-0">Share details regarding organization profile, learning activities, operational structure.</p>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 50px; height: 50px; min-width: 50px; font-size: 1.25rem;">3</div>
          <div>
            <h5 class="mb-1 text-blue">Evaluation & Discussion</h5>
            <p class="small text-muted mb-0">AIFAP reviews suitability, alignment, and professional considerations, followed by discussion.</p>
          </div>
        </div>
        <div class="d-flex mb-4 align-items-center">
          <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 50px; height: 50px; min-width: 50px; font-size: 1.25rem;">4</div>
          <div>
            <h5 class="mb-1 text-blue">Approval & Engagement</h5>
            <p class="small text-muted mb-0">Approved organizations receive formal communication and activate their partnership.</p>
          </div>
        </div>
        
        <div class="text-center mt-5">
          <a href="/contact" class="btn btn-primary-custom btn-lg px-5">Submit Partnership Inquiry</a>
        </div>
      </div>
      
      <div class="alert alert-secondary mt-5 text-center mx-auto" style="max-width: 800px; font-size: 0.85rem;">
        <strong>Important Disclaimer:</strong> Partnership, authorization, accreditation, or recognition by AIFAP reflects participation within AIFAP professional development and quality-focused frameworks only and should not be interpreted as government licensing, statutory accreditation, or regulatory authorization unless explicitly stated by relevant authorities.
      </div>
    </div>
  </section>

@endsection