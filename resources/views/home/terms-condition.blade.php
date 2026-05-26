@extends('layouts.home-layout')

@section('content')

@push("css")
    <style>
    /* Accordion Custom Styling */
    .accordion-button:not(.collapsed) {
      color: var(--primary-blue);
      background-color: rgba(10, 49, 97, 0.05);
      box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
    }
    .nav-pills .nav-link {
      color: var(--gray-600);
      font-weight: 500;
      border-radius: 8px;
    }
    .nav-pills .nav-link.active {
      background-color: var(--primary-blue);
      color: var(--white);
    }
  </style>
@endpush

<x-home.page-header title="Terms & Conditions" Subtitle="Transparency, Ethics, and Professional Guidelines" />

  <!-- Policies Content -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row">
        

        <!-- Content Area -->
        <div class="col-12 gsap-fade-up">
          <div class="glass-card bg-white p-5 h-100 shadow-sm tab-content" id="policyTabContent">
            

            <!-- Terms & Conditions -->
            <div class="tab-pane fade show active" id="terms" role="tabpanel">
              <h2 class="text-blue mb-4">Terms & Conditions</h2>
              <p class="text-muted">These Terms & Conditions govern the use of AIFAP services, websites, membership systems, professional development programs, and related activities. By accessing AIFAP services, users agree to comply with these terms.</p>
              
              <h5 class="mt-4">Professional Development Services</h5>
              <p class="text-muted">AIFAP provides professional development programs, executive learning activities, membership services, corporate training solutions, and professional engagement initiatives. Participation in programs does not guarantee employment, statutory licensing, or regulatory recognition unless specifically stated by relevant authorities.</p>

              <h5 class="mt-4">User Responsibilities</h5>
              <p class="text-muted">Users agree to provide accurate information, use services responsibly, respect intellectual property rights, maintain professional conduct, and avoid misuse of systems or platforms.</p>

              <h5 class="mt-4">Intellectual Property</h5>
              <p class="text-muted">Training materials, website content, logos, branding elements, and learning resources remain the property of AIFAP or respective owners unless otherwise stated. Unauthorized reproduction, resale, or distribution is prohibited without written permission.</p>

              <h5 class="mt-4">Membership & Certification Limitation</h5>
              <p class="text-muted">Membership or certification participation does not constitute government licensing, regulatory authority, or legal authorization to practice regulated professions unless specifically stated by applicable authorities.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection