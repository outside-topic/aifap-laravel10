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

<x-home.page-header title="Complaints & Appeals" Subtitle="Transparency, Ethics, and Professional Guidelines" />

  <!-- Policies Content -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row">

        <!-- Content Area -->
        <div class="col-12 gsap-fade-up">
          <div class="glass-card bg-white p-5 h-100 shadow-sm tab-content" id="policyTabContent">
            
            

            <!-- Complaints & Appeals -->
            <div class="tab-pane fade show active" id="complaints" role="tabpanel">
              <h2 class="text-blue mb-4">Complaints & Appeals</h2>
              <p class="text-muted">AIFAP encourages fair, respectful, and transparent handling of complaints and appeals related to its activities and services.</p>

              <h5 class="mt-4">Complaints Procedure</h5>
              <p class="text-muted">Complaints may relate to Learning activities, Membership services, Administrative matters, Trainer conduct, Service quality, or Operational concerns.</p>
              <p class="text-muted">AIFAP aims to review complaints fairly, maintain confidentiality where appropriate, respond within a reasonable timeframe, and seek practical resolution where possible.</p>

              <h5 class="mt-4">Appeals Procedure</h5>
              <p class="text-muted">Individuals may submit appeals regarding Membership decisions, Assessment outcomes, Administrative decisions, or Participation-related matters. Appeals should include clear explanation and supporting information.</p>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

@endsection