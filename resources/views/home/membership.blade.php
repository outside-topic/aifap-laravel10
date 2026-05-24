@extends('layouts.home-layout')

@section('content')

<x-home.page-header title="Membership Overview" Subtitle="Become Part of a Global Professional Finance & Accounting Community" />


  <!-- Introduction -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 gsap-fade-up">
          <h2 class="section-title">AIFAP Membership</h2>
          <p class="mt-4 text-muted">AIFAP membership is designed to support continuous professional development, professional networking, industry engagement, and lifelong learning for individuals working or aspiring to work within finance, accounting, audit, taxation, banking, compliance, and related business disciplines.</p>
          <p class="text-muted">The membership structure provides pathways for students, early-career professionals, experienced practitioners, executives, trainers, consultants, and industry leaders to participate in professional learning and engagement opportunities.</p>
          <div class="mt-4 d-flex flex-wrap gap-2">
            <span class="badge bg-primary text-white p-2 px-3 rounded-pill">Professional growth</span>
            <span class="badge bg-primary text-white p-2 px-3 rounded-pill">Continuous learning</span>
            <span class="badge bg-primary text-white p-2 px-3 rounded-pill">Ethical practice</span>
            <span class="badge bg-primary text-white p-2 px-3 rounded-pill">Industry engagement</span>
          </div>
        </div>
        <div class="col-lg-6 ps-lg-5">
          <div class="glass-card bg-white shadow-sm p-5 gsap-fade-up">
            <h3 class="mb-4 text-blue">Common Benefits for Members</h3>
            <ul class="benefit-list">
              <li><strong>Professional Recognition:</strong> Pathways designed to support development.</li>
              <li><strong>CPD Opportunities:</strong> Access to webinars, workshops, technical sessions.</li>
              <li><strong>Networking:</strong> Connect with professionals, trainers, and consultants.</li>
              <li><strong>Learning Resources:</strong> Articles, industry insights, and materials.</li>
              <li><strong>Digital Credential:</strong> Eligible members receive digital verification.</li>
              <li><strong>Professional Events:</strong> Participation in conferences and forums.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Membership Categories -->
  <section class="section-padding">
    <div class="container">
      <h2 class="section-title text-center mx-auto mb-5 d-block">Membership Categories</h2>
      
      <div class="row gsap-stagger-container">
        
        <!-- Student Member -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4">
            <h4 class="text-blue">Student Member</h4>
            <p>(AIFAP-SM)</p>
            <div class="price-tag">USD 50<span>/yr</span></div>
            <p class="small text-muted mb-4">Individuals currently enrolled in a recognized educational program related to finance, accounting, business, banking, economics, or management.</p>
            <ul class="benefit-list text-start small mb-4">
              <li>Undergraduate & Diploma students</li>
              <li>Early-stage learners</li>
              <li>Student-focused learning activities</li>
              <li>Digital membership recognition</li>
            </ul>
            <button type="button" class="btn btn-outline-custom w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#applicationModal">Apply Now</button>
          </div>
        </div>

        <!-- Associate Member -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4">
            <h4 class="text-blue">Associate Member</h4>
            <p> (AIFAP-AM)</p>
            <div class="price-tag">USD 120<span>/yr</span></div>
            <p class="small text-muted mb-4">Diploma/certification with 2+ years experience in Finance/Accounting, or Business qualification with 7+ years experience.</p>
            <ul class="benefit-list text-start small mb-4">
              <li>Entry-level & Junior executives</li>
              <li>Career transition professionals</li>
              <li>Professional development opportunities</li>
              <li>Networking access</li>
            </ul>
            <button type="button" class="btn btn-outline-custom w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#applicationModal">Apply Now</button>
          </div>
        </div>

        <!-- Professional Member -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4">
            <h4 class="text-blue">Professional Member</h4>
            <p>(AIFAP-PM)</p>
            <div class="price-tag">USD 200<span>/yr</span></div>
            <p class="small text-muted mb-4">Graduation/Diploma with 10 years experience OR Professional Qualification with 5 years experience in related fields.</p>
            <ul class="benefit-list text-start small mb-4">
              <li>Finance professionals & Accountants</li>
              <li>Auditors & Tax professionals</li>
              <li>Advanced professional networking</li>
              <li>Industry-focused webinars</li>
            </ul>
            <button type="button" class="btn btn-outline-custom w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#applicationModal">Apply Now</button>
          </div>
        </div>

        <!-- Senior Professional Member -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item offset-lg-2">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4">
            <h4 class="text-blue">Senior Professional Member</h4>
            <p>(AIFAP-SPM)</p>
            <div class="price-tag">USD 300<span>/yr</span></div>
            <p class="small text-muted mb-4">Graduation/Diploma with 15 years experience OR Professional Qualification with 10 years experience.</p>
            <ul class="benefit-list text-start small mb-4">
              <li>Senior managers & Finance leaders</li>
              <li>Controllers & Department heads</li>
              <li>Leadership engagement opportunities</li>
              <li>Executive networking access</li>
            </ul>
            <button type="button" class="btn btn-outline-custom w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#applicationModal">Apply Now</button>
          </div>
        </div>

        <!-- Fellow Member -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-white border text-center h-100 membership-card p-4" style="border: 2px solid var(--primary-red) !important;">
            <h4 class="text-red">Fellow Member</h4>
            <p>(FAIFAP)</p>
            <div class="price-tag">USD 400<span>/yr</span></div>
            <p class="small text-muted mb-4">Extensive professional contribution. Typically 20+ years of relevant professional experience with demonstrated leadership.</p>
            <ul class="benefit-list text-start small mb-4">
              <li>Senior industry leaders & Consultants</li>
              <li>Executive professionals</li>
              <li>Leadership & advisory engagement</li>
              <li>Priority participation in activities</li>
            </ul>
            <button type="button" class="btn btn-secondary-custom w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#applicationModal">Apply Now</button>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- Apply & Verification -->
  <section id="apply" class="section-padding bg-light-gray">
    <div class="container">
      <div class="row">
        <!-- Application Procedure -->
        <div class="col-lg-6 mb-5 mb-lg-0 gsap-fade-up">
          <h2 class="section-title">Apply for Membership</h2>
          <p class="text-muted mt-4">Individuals interested in becoming part of the AIFAP professional community may apply online by selecting the appropriate membership category and submitting the required information.</p>
          
          <div class="mt-4">
            <div class="d-flex mb-4">
              <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">1</div>
              <div>
                <h5 class="mb-1 text-blue">Select Membership Category</h5>
                <p class="small text-muted mb-0">Choose the category most relevant to your background and experience.</p>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">2</div>
              <div>
                <h5 class="mb-1 text-blue">Complete Application</h5>
                <p class="small text-muted mb-0">Fill out the form with accurate professional and educational information.</p>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">3</div>
              <div>
                <h5 class="mb-1 text-blue">Submit Documents</h5>
                <p class="small text-muted mb-0">Provide Academic certificates, Resume/CV, Experience documents, etc.</p>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">4</div>
              <div>
                <h5 class="mb-1 text-blue">Review & Activation</h5>
                <p class="small text-muted mb-0">Applications are reviewed. Approved applicants receive membership confirmation.</p>
              </div>
            </div>
          </div>
          
          <button type="button" class="btn btn-primary-custom mt-3" data-bs-toggle="modal" data-bs-target="#applicationModal">Start Application</button>
        </div>
        
        <!-- Renewal & Verification -->
        <div class="col-lg-6 ps-lg-5">
          <div class="sticky-top" style="top: 100px; z-index: 1;">
            <div class="glass-card bg-white shadow-sm mb-4 gsap-fade-up p-4">
              <h3 class="text-blue">Membership Renewal</h3>
              <p class="small text-muted mt-3">AIFAP encourages members to maintain active membership status through periodic renewal to continue accessing benefits.</p>
              <ul class="benefit-list small mt-3">
                <li>Update professional information if required.</li>
                <li>Complete applicable renewal payment.</li>
                <li>Receive updated membership confirmation.</li>
              </ul>
              <p class="small text-danger">Failure to renew may result in inactive membership status.</p>
            </div>

            <div class="glass-card bg-white shadow-sm gsap-fade-up p-4">
              <h3 class="text-blue">Membership Verification</h3>
              <p class="small text-muted mt-3">AIFAP provides online membership verification services for eligible membership categories to support authenticity and professional transparency.</p>
              <ul class="benefit-list small mt-3">
                <li>Digital verification support</li>
                <li>Membership authenticity confirmation</li>
                <li>Verification ID/reference system</li>
              </ul>
              <div class="alert alert-secondary mt-3 mb-0" style="font-size: 0.8rem; padding: 0.5rem;">
                <strong>Disclaimer:</strong> Verification services confirm membership status within AIFAP records only and should not be interpreted as government licensing or regulatory endorsement.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Application Modal -->
  <div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <h5 class="modal-title text-blue fw-bold" id="applicationModalLabel">Membership Application</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <p class="text-muted small mb-4">Please provide your details below. Our team will contact you later to submit your academic certificates and experience documents.</p>
          <form methpod="POST" action="/member-apply-mail">
             @csrf
              @if ($errors->any())
                <ul>
                  @foreach ($errors as $error)
                    <li>{{ $error->message }}</li>
                  @endforeach
                </ul>
              @endif
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="appFirstName" class="form-label small fw-bold text-muted">First Name<span class="text-danger">*</span></label>
                <input name="first_name" type="text" class="form-control p-2 bg-light" id="appFirstName" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="appLastName" class="form-label small fw-bold text-muted">Last Name<span class="text-danger">*</span></label>
                <input name="last_name" type="text" class="form-control p-2 bg-light" id="appLastName" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="appEmail" class="form-label small fw-bold text-muted">Email Address<span class="text-danger">*</span></label>
                <input name="email" type="email" class="form-control p-2 bg-light" id="appEmail" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="appPhone" class="form-label small fw-bold text-muted">Phone Number<span class="text-danger">*</span></label>
                <input name="contact" type="tel" class="form-control p-2 bg-light" id="appPhone" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="appCategory" class="form-label small fw-bold text-muted">Membership Category<span class="text-danger">*</span></label>
              <select name="memberType" class="form-select p-2 bg-light" id="appCategory" required>
                <option value="" selected disabled>Select Category...</option>
                <option value="student">Student Member</option>
                <option value="associate">Associate Member</option>
                <option value="professional">Professional Member</option>
                <option value="senior">Senior Professional Member</option>
                <option value="fellow">Fellow Member</option>
              </select>
            </div>
            <div class="row">
              <div class="col-md-8 mb-3">
                <label for="appEducation" class="form-label small fw-bold text-muted">Highest Qualification<span class="text-danger">*</span></label>
                <input  name="highest_qualification" type="text" class="form-control p-2 bg-light" id="appEducation" placeholder="e.g. BSc in Finance" required>
              </div>
              <div class="col-md-4 mb-4">
                <label for="appExperience" class="form-label small fw-bold text-muted">Years of Exp.<span class="text-danger">*</span></label>
                <input name="experience" type="number" class="form-control p-2 bg-light" id="appExperience" min="0" required>
              </div>
            </div>
            <button type="submit" class="btn btn-primary-custom w-100 py-2 mt-2">Submit Application</button>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection