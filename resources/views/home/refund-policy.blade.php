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

<x-home.page-header title="Refund Policy" Subtitle="Transparency, Ethics, and Professional Guidelines" />

  <!-- Policies Content -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row">
        

        <!-- Content Area -->
        <div class="col-12 gsap-fade-up">
          <div class="glass-card bg-white p-5 h-100 shadow-sm tab-content" id="policyTabContent">
            
            <!-- Refund Policy -->
            <div class="tab-pane fade active show" id="refund" role="tabpanel">
              <h2 class="text-blue mb-4">Refund Policy</h2>
              <p class="text-muted">AIFAP aims to maintain fair and transparent refund practices for professional learning activities and membership-related services.</p>

              <h5 class="mt-4">Program Registration Refunds</h5>
              <p class="text-muted"><strong>Before Program Commencement:</strong> Refund requests submitted before the official commencement of a program may be considered subject to administrative charges and applicable terms.</p>
              <p class="text-muted"><strong>After Program Commencement:</strong> Refunds may not be available after access to learning materials, online platforms, live sessions, or program activities has been provided.</p>

              <h5 class="mt-4">Membership Fees</h5>
              <p class="text-muted">Membership fees are generally non-refundable after membership activation and processing. Exceptions may be considered under special circumstances at AIFAP's discretion.</p>

              <h5 class="mt-4">Event Cancellation by AIFAP</h5>
              <p class="text-muted">If AIFAP cancels a program or event, participants may be offered Rescheduling options, Program transfer, Credit note, or Partial/full refund where applicable.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection