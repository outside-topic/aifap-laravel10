@extends('layouts.home-layout')

@section('content')
 
<x-home.page-header title="Corporate Training" Subtitle="Corporate Learning Solutions for Modern Business & Financial Environments" />


  <!-- Intro Section -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 gsap-fade-up">
          <h2 class="section-title">Corporate Learning Solutions</h2>
          <p class="mt-4 text-muted">AIFAP supports organizations through practical, industry-focused corporate learning and professional development solutions designed to strengthen workforce capability, enhance professional competencies, and support continuous organizational learning.</p>
          <p class="text-muted">Our corporate training services are structured to support finance teams, accounting professionals, business leaders, compliance functions, and operational departments through customized learning initiatives aligned with workplace needs.</p>
          
          <h4 class="mt-4 text-blue">Delivery Formats</h4>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <span class="badge bg-white text-dark border p-2">In-house workshops</span>
            <span class="badge bg-white text-dark border p-2">Virtual learning sessions</span>
            <span class="badge bg-white text-dark border p-2">Executive masterclasses</span>
            <span class="badge bg-white text-dark border p-2">Blended learning</span>
            <span class="badge bg-white text-dark border p-2">Customized corporate academies</span>
            <span class="badge bg-white text-dark border p-2">Technical learning programs</span>
          </div>
        </div>
        <div class="col-lg-6 ps-lg-5">
          <div class="row gsap-stagger-container">
            <div class="col-sm-6 mb-4 gsap-stagger-item">
              <div class="glass-card bg-white p-4">
                <h5 class="text-blue">Finance & Accounting</h5>
                <p class="small text-muted mb-0">Support technical and practical finance-related competencies.</p>
              </div>
            </div>
            <div class="col-sm-6 mb-4 gsap-stagger-item">
              <div class="glass-card bg-white p-4">
                <h5 class="text-blue">Leadership & Mgt.</h5>
                <p class="small text-muted mb-0">Learning initiatives for supervisors, managers, and business leaders.</p>
              </div>
            </div>
            <div class="col-sm-6 mb-4 gsap-stagger-item">
              <div class="glass-card bg-white p-4">
                <h5 class="text-blue">Compliance & Governance</h5>
                <p class="small text-muted mb-0">Support awareness of internal controls and responsible conduct.</p>
              </div>
            </div>
            <div class="col-sm-6 mb-4 gsap-stagger-item">
              <div class="glass-card bg-white p-4">
                <h5 class="text-blue">Business Performance</h5>
                <p class="small text-muted mb-0">Focus on reporting, analytics, decision-making, and understanding.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Training Types -->
  <section class="section-padding">
    <div class="container">
      <div class="row gsap-stagger-container">
        
        <!-- In-House -->
        <div class="col-lg-4 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray h-100 p-4 border">
            <h3 class="text-blue mb-4">In-House Training</h3>
            <p class="small text-muted">Conducted at client premises, virtual platforms, or selected training venues.</p>
            <ul class="benefit-list small mt-4">
              <li>Organization-Specific Learning</li>
              <li>Flexible Delivery Schedules</li>
              <li>Team-Based Collaborative Learning</li>
              <li>Cost-Effective for multiple participants</li>
            </ul>
          </div>
        </div>

        <!-- Customized -->
        <div class="col-lg-4 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray h-100 p-4 border">
            <h3 class="text-blue mb-4">Customized Programs</h3>
            <p class="small text-muted">Adapted based on industry context, capability levels, operational challenges, and technical needs.</p>
            <ul class="benefit-list small mt-4">
              <li>Industry-Specific Learning</li>
              <li>Role-Based Learning</li>
              <li>Competency-Focused Learning</li>
              <li>Executive Learning Solutions</li>
            </ul>
          </div>
        </div>

        <!-- Needs Assessment -->
        <div class="col-lg-4 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray h-100 p-4 border">
            <h3 class="text-blue mb-4">Training Need Assessment</h3>
            <p class="small text-muted">Identifying workforce learning needs and capability gaps through structured assessment approaches.</p>
            <ul class="benefit-list small mt-4">
              <li>Organizational Assessment</li>
              <li>Functional Assessment</li>
              <li>Individual Capability Assessment</li>
              <li>Structured Learning Recommendations</li>
            </ul>
          </div>
        </div>

        <!-- Finance Leadership -->
        <div class="col-lg-4 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray h-100 p-4 border">
            <h3 class="text-blue mb-4">Finance Leadership</h3>
            <p class="small text-muted">Supporting the development of practical leadership capability within finance environments.</p>
            <ul class="benefit-list small mt-4">
              <li>Strategic Financial Thinking</li>
              <li>Decision-Making Capability</li>
              <li>Leadership Communication</li>
              <li>Team Leadership & Partnership</li>
            </ul>
          </div>
        </div>

        <!-- Accounting Excellence -->
        <div class="col-lg-4 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray h-100 p-4 border">
            <h3 class="text-blue mb-4">Accounting Excellence</h3>
            <p class="small text-muted">Support practical accounting capability, operational effectiveness, and professional understanding.</p>
            <ul class="benefit-list small mt-4">
              <li>Practical Accounting Applications</li>
              <li>Financial Reporting Awareness</li>
              <li>Process Improvement</li>
              <li>Ethical Accounting Practices</li>
            </ul>
          </div>
        </div>

        <!-- Consulting & Advisory -->
        <div class="col-lg-4 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray h-100 p-4 border">
            <h3 class="text-blue mb-4">Consulting & Advisory</h3>
            <p class="small text-muted">Professional advisory related to learning, capability enhancement, and workforce initiatives.</p>
            <ul class="benefit-list small mt-4">
              <li>Learning framework development</li>
              <li>Professional capability planning</li>
              <li>Corporate learning strategy</li>
              <li>Competency development</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Employee Certification -->
  <section class="section-padding bg-light-gray text-center">
    <div class="container">
      <div class="glass-card bg-white shadow p-5 max-w-800 mx-auto gsap-fade-up">
        <h2 class="section-title text-center mx-auto mb-4 d-block" style="font-size: 2rem;">Employee Certification Programs</h2>
        <p class="text-muted mb-4">Organizations may partner with AIFAP to provide structured professional development and certification pathways for employees. Programs are designed to encourage continuous learning, skills enhancement, technical learning, and professional engagement.</p>
        
        <div class="d-flex justify-content-center gap-4 flex-wrap mt-4">
          <div class="text-center">
            <h4 class="text-blue mb-1">Paths</h4>
            <p class="small text-muted">Structured Learning</p>
          </div>
          <div class="text-center">
            <h4 class="text-blue mb-1">Growth</h4>
            <p class="small text-muted">Capability Dev</p>
          </div>
          <div class="text-center">
            <h4 class="text-blue mb-1">Recognition</h4>
            <p class="small text-muted">Certificates issued</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Request Proposal CTA -->
  <section class="cta-section text-center">
    <div class="container position-relative z-1">
      <h2 class="section-title mx-auto text-white">Request a Corporate Learning Proposal</h2>
      <p class="lead mt-4 mb-5 mx-auto" style="max-width: 800px; opacity: 0.9;">Organizations interested in customized learning solutions, workforce development initiatives, or professional training support may contact AIFAP to discuss learning objectives. Let's build practical learning solutions that support professional growth within your organization.</p>
      <a href="/contact" class="btn btn-outline-light btn-lg px-5 border-2 fw-bold" style="border-radius:8px;">Contact Us to Request Proposal</a>
    </div>
  </section>


@endsection