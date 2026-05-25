@extends('layouts.home-layout')

@section('content')

<x-home.page-header title="Connect With AIFAP" Subtitle="Communication, Collaboration, and Professional Engagement" />

  <!-- Contact Section -->
  <section class="section-padding bg-light-gray">
    <div class="container">
      <div class="row">
        <!-- Contact Information -->
        <div class="col-lg-5 mb-5 mb-lg-0 gsap-fade-up">
          <h2 class="section-title">Get in Touch</h2>
          <p class="text-muted mt-4">Whether you are a learner, finance professional, corporate organization, training provider, or potential partner, AIFAP welcomes opportunities for communication, collaboration, and professional engagement.</p>
          
          <div class="mt-5">
            <div class="d-flex mb-4">
              <div class="text-red fs-3 me-3"><i class="fa-solid fa-message"></i></div>
              <div>
                <h5 class="text-blue mb-1">General Inquiries</h5>
                <p class="small text-muted mb-0">Questions about AIFAP, certifications, or learning activities.</p>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="text-red fs-3 me-3"><i class="fa-solid fa-handshake"></i></div>
              <div>
                <h5 class="text-blue mb-1">Membership Support</h5>
                <p class="small text-muted mb-0">Information regarding categories, renewal, and benefits.</p>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="text-red fs-3 me-3"><i class="fa-solid fa-building"></i></div>
              <div>
                <h5 class="text-blue mb-1">Corporate Solutions</h5>
                <p class="small text-muted mb-0">Customized learning and organizational capability development.</p>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="text-red fs-3 me-3"><i class="fa-solid fa-link"></i></div>
              <div>
                <h5 class="text-blue mb-1">Partnership & Collaboration</h5>
                <p class="small text-muted mb-0">Academic, corporate, and professional collaboration opportunities.</p>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="text-red fs-3 me-3"><i class="fa-solid fa-check-circle"></i></div>
              <div>
                <h5 class="text-blue mb-1">Verification Support</h5>
                <p class="small text-muted mb-0">Assistance regarding certificate or membership verification.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-7 ps-lg-5 gsap-fade-up">
          <div class="glass-card bg-white shadow p-5">
            <h3 class="text-blue mb-4">Send us a Message</h3>
            <form method="POST" action="/contact-mail">
              @csrf
              @if ($errors->any())
                <ul class="text-danger">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              @endif
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName" class="form-label text-muted small fw-bold">First Name <span class="text-danger">*</span> </label>
                  <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control p-3 bg-light" id="firstName" placeholder="John" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName" class="form-label text-muted small fw-bold">Last Name</label>
                  <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control p-3 bg-light" id="lastName" placeholder="Doe">
                </div>
              </div>
              <div class="mb-3">
                <label for="emailAddress" class="form-label text-muted small fw-bold">Email Address<span class="text-danger">*</span></label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control p-3 bg-light" id="emailAddress" placeholder="john.doe@example.com" required>
              </div>
              <div class="mb-3">
                <label for="inquiryType" class="form-label text-muted small fw-bold">Inquiry Type<span class="text-danger">*</span></label>
                <select name="inquiryType" class="form-select p-3 bg-light" id="inquiryType" required>
                  <option value="" selected disabled>Select an option...</option>
                  <option value="general">General Inquiries</option>
                  <option value="membership">Membership Support / Application</option>
                  <option value="corporate">Corporate Solutions / Proposal</option>
                  <option value="partnership">Partnership & Collaboration</option>
                  <option value="verification">Verification Support</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="messageBody" class="form-label text-muted small fw-bold">Message<span class="text-danger">*</span></label>
                <textarea name="message" class="form-control p-3 bg-light" id="messageBody" rows="5" placeholder="How can we help you?" required>{{ old('message') }}</textarea>
              </div>
              <button type="submit" class="btn btn-primary-custom w-100 py-3">Submit Inquiry</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection