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

<x-home.page-header title="FAQ" Subtitle="Transparency, Ethics, and Professional Guidelines" />

  <!-- Policies Content -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row">
        

        <!-- Content Area -->
        <div class="col-12 gsap-fade-up">
          <div class="glass-card bg-white p-5 h-100 shadow-sm tab-content" id="policyTabContent">

            <!-- FAQ -->
            <div class="tab-pane fade show active" id="faq" role="tabpanel">
              <h2 class="text-blue mb-4">Frequently Asked Questions</h2>
              
              <div class="accordion mt-4" id="faqAccordion">
                
                <div class="accordion-item mb-3 border rounded">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold text-blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                      What is AIFAP?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">
                      AIFAP is a professional development and membership institute focused on finance, accounting, business, audit, taxation, and related professional learning areas.
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-3 border rounded">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-bold text-blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                      Does AIFAP provide government licensing?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">
                      No. AIFAP operates as a professional development and membership institute and does not act as a statutory licensing or regulatory authority unless specifically stated.
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-3 border rounded">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fw-bold text-blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                      Who can apply for membership?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">
                      Students, professionals, executives, consultants, educators, trainers, and individuals interested in finance and accounting professional development may apply subject to membership criteria.
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-3 border rounded">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed fw-bold text-blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                      How can I verify a certificate or membership?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">
                      Eligible certificates and memberships may be verified through AIFAP's verification system or support channels.
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-3 border rounded">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed fw-bold text-blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                      Are membership fees refundable?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted">
                      Membership fees are generally non-refundable after activation unless otherwise approved under exceptional circumstances.
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection