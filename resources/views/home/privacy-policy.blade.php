@extends('layouts.home-layout')

@section('content')

<x-home.page-header title="Pirvacy Policy" Subtitle="Transparency, Ethics, and Professional Guidelines" />

<!-- Policies Content -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row">

        <!-- Content Area -->
        <div class="col-12 gsap-fade-up">
          <div class="glass-card bg-white p-5 h-100 shadow-sm tab-content" id="policyTabContent">
            
            <!-- Privacy Policy -->
            <div class="tab-pane fade show active" id="privacy" role="tabpanel">
              <h2 class="text-blue mb-4">Privacy Policy</h2>
              <h5 class="mt-4">Introduction</h5>
              <p class="text-muted">The American Institute of Finance and Accounting Professional (AIFAP) values privacy, confidentiality, and responsible handling of personal information. This Privacy Policy explains how AIFAP may collect, use, store, and protect information provided through its website, membership applications, certification activities, training programs, events, and professional engagement platforms.</p>
              
              <h5 class="mt-4">Information We May Collect</h5>
              <p class="text-muted">AIFAP may collect information including Full name, Email address, Contact number, Professional information, Educational background, Membership information, Payment-related information, Training participation records, Verification-related information, and Website usage data.</p>
              
              <h5 class="mt-4">Purpose of Information Collection</h5>
              <p class="text-muted">Information may be used for Membership administration, Program registration and delivery, Certificate issuance and verification, Communication regarding learning activities, Customer support, Professional engagement activities, and Service improvement and operational management.</p>

              <h5 class="mt-4">Sharing of Information</h5>
              <p class="text-muted">AIFAP does not intentionally sell personal information to third parties. Information may only be shared with authorized service providers, when legally required, for verification purposes where applicable, or with user consent.</p>
            </div>

            <!-- Terms & Conditions -->
            <div class="tab-pane fade" id="terms" role="tabpanel">
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

            <!-- Refund Policy -->
            <div class="tab-pane fade" id="refund" role="tabpanel">
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

            <!-- Code of Ethics -->
            <div class="tab-pane fade" id="ethics" role="tabpanel">
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

            <!-- Complaints & Appeals -->
            <div class="tab-pane fade" id="complaints" role="tabpanel">
              <h2 class="text-blue mb-4">Complaints & Appeals</h2>
              <p class="text-muted">AIFAP encourages fair, respectful, and transparent handling of complaints and appeals related to its activities and services.</p>

              <h5 class="mt-4">Complaints Procedure</h5>
              <p class="text-muted">Complaints may relate to Learning activities, Membership services, Administrative matters, Trainer conduct, Service quality, or Operational concerns.</p>
              <p class="text-muted">AIFAP aims to review complaints fairly, maintain confidentiality where appropriate, respond within a reasonable timeframe, and seek practical resolution where possible.</p>

              <h5 class="mt-4">Appeals Procedure</h5>
              <p class="text-muted">Individuals may submit appeals regarding Membership decisions, Assessment outcomes, Administrative decisions, or Participation-related matters. Appeals should include clear explanation and supporting information.</p>
            </div>

            <!-- FAQ -->
            <div class="tab-pane fade" id="faq" role="tabpanel">
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