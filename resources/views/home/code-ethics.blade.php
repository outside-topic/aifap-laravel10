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

<x-home.page-header title="Code of Ethics" Subtitle="Transparency, Ethics, and Professional Guidelines" />

  <!-- Policies Content -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row">
        

        <!-- Content Area -->
        <div class="col-12 gsap-fade-up">
          <div class="glass-card bg-white p-5 h-100 shadow-sm tab-content" id="policyTabContent">
            
            <!-- Code of Ethics -->
            <div class="tab-pane fade show active" id="ethics" role="tabpanel">
              <h2 class="text-blue mb-4">Code of Ethics</h2>
              <p class="text-muted">AIFAP encourages ethical behavior, professionalism, integrity, respect, and responsible conduct among members, learners, trainers, staff, and stakeholders.</p>

              <h5 class="mt-4">Ethical Principles</h5>
              <ul class="benefit-list text-muted mt-3">
                <li><strong>Integrity:</strong> Act honestly, ethically, and responsibly in professional interactions.</li>
                <li><strong>Professional Conduct:</strong> Maintain respectful and professional behavior within learning and workplace environments.</li>
                <li><strong>Respect for Laws:</strong> Comply with applicable laws, regulations, and professional obligations.</li>
                <li><strong>Confidentiality:</strong> Respect confidential information and sensitive professional data.</li>
                <li><strong>Fairness & Respect:</strong> Promote diversity, inclusion, fairness, and respectful communication.</li>
                <li><strong>Responsible Representation:</strong> Avoid misleading representation of qualifications, experience, or professional status.</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection