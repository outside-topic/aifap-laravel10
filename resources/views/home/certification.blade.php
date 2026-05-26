@extends('layouts.home-layout')

@section('content')

<x-home.page-header title="Certifications & Programs" Subtitle="Professional Learning for Modern Finance & Accounting Professionals" />

<!-- Introduction -->
  <section class="section-padding bg-light-gray">
    <div class="container text-center gsap-fade-up">
      <p class="lead text-muted" style="max-width: 900px; margin: 0 auto;">AIFAP offers professional development programs designed to support practical learning, workplace capability enhancement, and continuous professional growth across finance, accounting, audit, taxation, banking, compliance, and corporate management disciplines. Our certifications, executive learning programs, and specialized training initiatives are developed to encourage industry relevance, ethical professional practice, and practical business understanding within evolving financial and organizational environments.</p>
    </div>
  </section>

  <!-- Professional Certifications -->
  <section class="section-padding">
    <div class="container">
      <h2 class="section-title text-center mx-auto mb-5 d-block">Professional Certifications</h2>
      <p class="text-center text-muted mb-5 gsap-fade-up">Designed to support technical understanding, practical application, analytical capability, and professional development.</p>

      <div class="row gsap-stagger-container">
        <!-- Finance -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Finance Certifications</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Programs focused on financial management concepts, business finance practices, budgeting, and decision-making.</p>
            <ul class="benefit-list small">
              <li>Financial management principles</li>
              <li>Business finance practices</li>
              <li>Financial decision-making</li>
              <li>Financial strategy awareness</li>
              <li>Applied finance concepts</li>
            </ul>
          </div>
        </div>
        <!-- Accounting -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Accounting Certifications</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Professional learning covering accounting principles, operations, and practical applications.</p>
            <ul class="benefit-list small">
              <li>Accounting fundamentals</li>
              <li>Financial statement understanding</li>
              <li>Accounting processes</li>
              <li>Practical operations</li>
              <li>Professional accounting practices</li>
            </ul>
          </div>
        </div>
        <!-- Audit -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Audit & Compliance</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Support understanding of governance, internal controls, audit concepts, and responsible practices.</p>
            <ul class="benefit-list small">
              <li>Internal controls</li>
              <li>Compliance awareness</li>
              <li>Risk-based auditing</li>
              <li>Audit reporting</li>
            </ul>
          </div>
        </div>
        <!-- Taxation -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Taxation Programs</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Focused on taxation principles, compliance awareness, and practical tax-related understanding.</p>
            <ul class="benefit-list small">
              <li>Tax compliance awareness</li>
              <li>Business taxation concepts</li>
              <li>Tax documentation</li>
              <li>Regulatory awareness</li>
            </ul>
          </div>
        </div>
        <!-- Banking -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Banking & Financial Services</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Knowledge development within banking operations and customer-focused practices.</p>
            <ul class="benefit-list small">
              <li>Banking operations</li>
              <li>Financial services practices</li>
              <li>Branch operations</li>
              <li>Financial professionalism</li>
            </ul>
          </div>
        </div>
        <!-- Financial Analysis -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Financial Analysis</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Focused on analytical thinking, financial interpretation, and business analysis.</p>
            <ul class="benefit-list small">
              <li>Financial statement analysis</li>
              <li>Business performance</li>
              <li>Financial forecasting</li>
              <li>Data interpretation</li>
            </ul>
          </div>
        </div>
        <!-- Budgeting -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Budgeting & Cost Management</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Learning programs covering budgeting techniques, cost analysis, and resource management.</p>
            <ul class="benefit-list small">
              <li>Budget preparation</li>
              <li>Cost management</li>
              <li>Financial planning</li>
              <li>Resource allocation</li>
            </ul>
          </div>
        </div>
        <!-- Risk Management -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Risk Management</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Support understanding of business risk, financial risk awareness, and mitigation.</p>
            <ul class="benefit-list small">
              <li>Enterprise risk</li>
              <li>Financial risk concepts</li>
              <li>Compliance-related risks</li>
              <li>Operational risk</li>
            </ul>
          </div>
        </div>

        <!-- Corporate Finance -->
        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Corporate Finance</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Support understanding of corporate financial practices and business strategy alignment.</p>
            <ul class="benefit-list small">
              <li>Corporate finance principles</li>
              <li>Business strategy</li>
              <li>Capital allocation</li>
              <li>Financial leadership</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 gsap-stagger-item">
          <div class="glass-card bg-light-gray">
            <h3 class="text-blue">Investment & Wealth Management</h3>
            <div class="d-flex gap-3">
              <h5 class="color-primary-red">Fee:</h5>
              <h5 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 990</h5>
            </div>
            <p class="small text-muted mb-3">Professional learning focused on investment awareness, wealth management concepts, financial planning approaches, and client-oriented financial understanding.</p>
            <ul class="benefit-list small">
              <li>Investment fundamentals</li>
              <li>Portfolio awareness </li>
              <li>Wealth management concepts</li>
              <li>Client-focused financial planning</li>
              <li>Financial market understanding</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Specialized Programs -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0 gsap-fade-up">
          <h2 class="section-title">Specialized Programs</h2>

          <p class="mt-4 text-muted">AIFAP specialized learning initiatives are designed to support executives, professionals, learners, and organizations seeking focused development opportunities in modern finance and accounting environments.</p>
          <div class="mt-4">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Executive Learning" class="img-fluid rounded-xl shadow">
          </div>
        </div>
        <div class="col-lg-7 ps-lg-5">
          <div class="row gsap-stagger-container">
            <div class="col-md-6 mb-4 gsap-stagger-item">
              <h5 class="text-blue fw-bold border-bottom pb-2">Executive Programs</h5>
              
              <p class="small text-muted">For managers, senior professionals, business leaders, and decision-makers seeking strategic and practical business knowledge.</p>
              <ul class="d-flex flex-column flex-wrap gap-1 ps-0" style="list-style-type: none; font-size: 12px; font-weight: bold;">
                <li>Executive-level discussions</li>
                <li>Practical business insights</li>
                <li>Leadership-focused learning</li>
                <li>Industry-oriented perspectives</li>
              </ul>
            </div>
            <div class="col-md-6 mb-4 gsap-stagger-item">
              <h5 class="text-blue fw-bold border-bottom pb-2">CPD Programs</h5>
              
              <p class="small text-muted">To encourage ongoing learning, professional engagement, and competency enhancement.</p>
              <ul class="d-flex flex-column flex-wrap gap-1 ps-0" style="list-style-type: none; font-size: 12px; font-weight: bold;">
                <li>Short learning sessions</li>
                <li>Technical updates</li>
                <li>Professional refreshers</li>
                <li>Industry-focused discussions</li>
              </ul>
            </div>
            <div class="col-md-6 mb-4 gsap-stagger-item">
              <h5 class="text-blue fw-bold border-bottom pb-2">Short Courses</h5>
              
              <p class="small text-muted">Provide practical understanding of specific finance, accounting, or business-related topics within shorter learning durations.</p>
              <ul class="d-flex flex-column flex-wrap gap-1 ps-0" style="list-style-type: none; font-size: 12px; font-weight: bold;">
                <li>Flexible learning</li>
                <li>Practical application</li>
                <li>Skill-focused sessions</li>
                <li>Accessible learning opportunities</li>
              </ul>
            </div>
            <div class="col-md-6 mb-4 gsap-stagger-item">
              <h5 class="text-blue fw-bold border-bottom pb-2">Online Learning</h5>
              <p class="small text-muted">Support professionals and learners through virtual and blended learning environments.</p>
              <ul class="d-flex flex-column flex-wrap gap-1 ps-0" style="list-style-type: none; font-size: 12px; font-weight: bold;">
                <li>Self-paced options</li>
                <li>Online learning access</li>
                <li>Digital learning materials</li>
                <li>Flexible participation</li>
              </ul>
            </div>
            <div class="col-md-12 mb-4 gsap-stagger-item">
              <h5 class="text-blue fw-bold border-bottom pb-2">Masterclasses & Workshops</h5>
              
              <p class="small text-muted">Interactive learning sessions designed to encourage practical discussion, professional interaction, and applied understanding of industry topics.</p>
              <ul class="d-flex flex-wrap gap-1 ps-0 flex-column" style="list-style-type: none; font-size: 12px; font-weight: bold;">
                <li>Interactive facilitation</li>
                <li>Case-based discussions</li>
                <li>Practical exercises</li>
                <li>Knowledge-sharing sessions</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Training Categories List -->
  <section class="section-padding">
    <div class="container text-center gsap-fade-up">
      <h2 class="section-title text-center mx-auto mb-5 d-block">Training Categories</h2>

      <div class="d-flex flex-wrap gap-3">

        <div class="w-100 text-dark bg-primary-subtle px-4 py-3 pill fs-6 border border-primary-subtle" style="font-weight: 400; flex: 1;">
          <h6>Financial Reporting</h6>
          <div class="d-flex gap-3 justify-content-center mx-auto">
              <h6 class="color-primary-red">Fee:</h6>
              <h6 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 575</h6>
          </div>
          <p>Programs focused on understanding financial reports, reporting structures, and practical reporting practices within business environments.</p>
        </div>

        <div class="w-100 text-dark bg-primary-subtle px-4 py-3 pill fs-6 border border-primary-subtle" style="font-weight: 400;">
          <h6>IFRS & IAS</h6>
          <div class="d-flex gap-3 justify-content-center mx-auto">
              <h6 class="color-primary-red">Fee:</h6>
              <h6 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 575</h6>
          </div>
          <p>Learning initiatives designed to support awareness and understanding of international financial reporting concepts and accounting standards.</p>
        </div>

        <div class="w-100 text-dark bg-primary-subtle px-4 py-3 pill fs-6 border border-primary-subtle" style="font-weight: 400;">
          <h6>Financial Planning & Analysis</h6>
          <div class="d-flex gap-3 justify-content-center mx-auto">
              <h6 class="color-primary-red">Fee:</h6>
              <h6 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 575</h6>
          </div>
          <p>Programs supporting analytical capability, financial interpretation, planning concepts, and business performance understanding.</p>
        </div>

        <div class="w-100 text-dark bg-primary-subtle px-4 py-3 pill fs-6 border border-primary-subtle" style="font-weight: 400;">
          <h6>Internal Audit</h6>
          <div class="d-flex gap-3 justify-content-center mx-auto">
              <h6 class="color-primary-red">Fee:</h6>
              <h6 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 575</h6>
          </div>
          <p>Learning opportunities focused on audit processes, internal controls, governance awareness, and compliance-oriented practices.</p>
        </div>

        <div class="w-100 text-dark bg-primary-subtle px-4 py-3 w-full pill fs-6 border border-primary-subtle" style="font-weight: 400;">
          <h6>Management Accounting</h6>
          <div class="d-flex gap-3 justify-content-center mx-auto">
              <h6 class="color-primary-red">Fee:</h6>
              <h6 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 575</h6>
          </div>
          <p>Programs covering budgeting, cost management, business performance analysis, and management-focused financial practices.</p>
        </div>

        <div class="w-100 text-dark bg-primary-subtle px-4 py-3 pill fs-6 border border-primary-subtle" style="font-weight: 400;">
          <h6>Treasury & Cash Management</h6>
          <div class="d-flex gap-3 justify-content-center mx-auto">
              <h6 class="color-primary-red">Fee:</h6>
              <h6 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 575</h6>
          </div>
          <p>Professional learning focused on liquidity awareness, treasury operations concepts, cash flow understanding, and financial resource management.</p>
        </div>

        <div class="w-100 text-dark bg-primary-subtle px-4 py-3 pill fs-6 border border-primary-subtle" style="font-weight: 400;">
          <h6>Financial Leadership</h6>
          <div class="d-flex gap-3 justify-content-center mx-auto">
              <h6 class="color-primary-red">Fee:</h6>
              <h6 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 575</h6>
          </div>
          <p>Programs supporting leadership capability within finance and business environments, including decision-making, strategic thinking, and professional communication.</p>
        </div>

        <div class="w-100 text-dark bg-primary-subtle px-4 py-3 pill fs-6 border border-primary-subtle" style="font-weight: 400;">
          <h6>Data Analytics for Finance</h6>
          <div class="d-flex gap-3 justify-content-center mx-auto">
              <h6 class="color-primary-red">Fee:</h6>
              <h6 class="color-primary-red"><i class="fa-solid fa-dollar-sign"></i> 575</h6>
          </div>
          <p>Learning initiatives designed to support practical understanding of data analysis, reporting tools, financial analytics concepts, and business insights.</p>
        </div>

      </div>
      
      <div class="alert alert-secondary mt-5 text-start" style="font-size: 0.85rem;">
        <strong>DISCLAIMER:</strong> AIFAP programs are intended for professional development, executive learning, and continuing education purposes. Participation in programs does not constitute government licensing, or statutory authorization unless specifically stated by relevant authorities or regulatory bodies.
      </div>
    </div>
  </section>

@endsection