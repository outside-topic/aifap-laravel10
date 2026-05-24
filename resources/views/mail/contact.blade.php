<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .emt-outer {
    background: var(--color-background-secondary, #f3f4f6);
    padding: 2rem 1rem;
    border-radius: var(--border-radius-lg, 12px);
    font-family: var(--font-sans, system-ui, sans-serif);
  }

  .emt-card {
    max-width: 580px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: var(--border-radius-lg, 12px);
    overflow: hidden;
    border: 0.5px solid rgba(0, 0, 0, 0.08);
  }

  .emt-top-bar {
    height: 4px;
    background: #B31942;
  }

  .emt-header {
    background: #0A3161;
    padding: 2rem 2rem 1.75rem;
    text-align: center;
  }

  .emt-logo-wrap {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 1.25rem;
  }

  .emt-logo-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: rgba(179, 25, 66, 0.2);
    border: 0.5px solid rgba(179, 25, 66, 0.35);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .emt-logo-icon i {
    font-size: 20px;
    color: #d12250;
  }

  .emt-logo-name {
    font-size: 16px;
    font-weight: 500;
    color: #f3f4f6;
    letter-spacing: 0.04em;
  }

  .emt-header-title {
    font-size: 13px;
    color: rgba(243, 244, 246, 0.5);
    letter-spacing: 0.08em;
    text-transform: uppercase;
  }

  .emt-body {
    padding: 2rem;
  }

  .emt-subject-bar {
    background: #f8f9fa;
    border: 0.5px solid #e5e7eb;
    border-radius: var(--border-radius-md, 8px);
    padding: 10px 14px;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .emt-subject-label {
    font-size: 11px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #9ca3af;
    white-space: nowrap;
  }

  .emt-subject-value {
    font-size: 13px;
    color: #1f2937;
    font-weight: 500;
  }

  .emt-greeting {
    font-size: 15px;
    color: #1f2937;
    margin-bottom: 1.25rem;
    line-height: 1.6;
  }

  .emt-intro {
    font-size: 14px;
    color: #4b5563;
    line-height: 1.7;
    margin-bottom: 1.5rem;
  }

  .emt-fields {
    border: 0.5px solid #e5e7eb;
    border-radius: var(--border-radius-md, 8px);
    overflow: hidden;
    margin-bottom: 1.5rem;
  }

  .emt-field-row {
    display: grid;
    grid-template-columns: 160px 1fr;
    border-bottom: 0.5px solid #e5e7eb;
  }

  .emt-field-row:last-child {
    border-bottom: none;
  }

  .emt-field-key {
    background: #f8f9fa;
    padding: 11px 14px;
    font-size: 12px;
    font-weight: 500;
    color: #6b7280;
    text-transform: uppercase;
    letter-spacing: 0.07em;
    display: flex;
    align-items: flex-start;
    gap: 7px;
    padding-top: 13px;
  }

  .emt-field-key i {
    font-size: 14px;
    color: #9ca3af;
    margin-top: 1px;
    flex-shrink: 0;
  }

  .emt-field-val {
    padding: 12px 14px;
    font-size: 14px;
    color: #1f2937;
    line-height: 1.6;
  }

  .emt-field-val.emt-inquiry-badge {
    display: flex;
    align-items: center;
  }

  .emt-badge {
    display: inline-block;
    background: rgba(179, 25, 66, 0.08);
    color: #B31942;
    font-size: 12px;
    font-weight: 500;
    padding: 3px 10px;
    border-radius: 20px;
    border: 0.5px solid rgba(179, 25, 66, 0.2);
  }

  .emt-message-block {
    background: #f8f9fa;
    border: 0.5px solid #e5e7eb;
    border-left: 3px solid #B31942;
    border-radius: 0 var(--border-radius-md, 8px) var(--border-radius-md, 8px) 0;
    padding: 14px 16px;
    margin-bottom: 1.5rem;
  }

  .emt-message-label {
    font-size: 11px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #9ca3af;
    margin-bottom: 8px;
  }

  .emt-message-text {
    font-size: 14px;
    color: #374151;
    line-height: 1.75;
  }

  .emt-divider {
    border: none;
    border-top: 0.5px solid #e5e7eb;
    margin: 1.5rem 0;
  }

  .emt-closing {
    font-size: 14px;
    color: #4b5563;
    line-height: 1.7;
    margin-bottom: 1.25rem;
  }

  .emt-signature {
    font-size: 14px;
    color: #1f2937;
  }

  .emt-sig-name {
    font-weight: 500;
    color: #0A3161;
    font-size: 15px;
  }

  .emt-sig-role {
    font-size: 12px;
    color: #6b7280;
    margin-top: 2px;
  }

  .emt-footer {
    background: #0A3161;
    padding: 1.25rem 2rem;
    text-align: center;
  }

  .emt-footer-links {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    margin-bottom: 10px;
    flex-wrap: wrap;
  }

  .emt-footer-link {
    font-size: 12px;
    color: rgba(243, 244, 246, 0.5);
    text-decoration: none;
  }

  .emt-footer-note {
    font-size: 11px;
    color: rgba(243, 244, 246, 0.3);
    line-height: 1.6;
  }
</style>

<h2 class="sr-only">AIFAP contact inquiry email template showing sender details, inquiry type, and message body</h2>

<div class="emt-outer">
  <div class="emt-card">
    <div class="emt-top-bar"></div>

    <div class="emt-header">
      <div class="emt-logo-wrap">
        <div class="emt-logo-icon"><i class="ti ti-building" aria-hidden="true"></i></div>
        <span class="emt-logo-name">AIFAP</span>
      </div>
      <div class="emt-header-title">New Contact Inquiry</div>
    </div>

    <div class="emt-body">
      <div class="emt-subject-bar">
        <span class="emt-subject-label">Subject</span>
        <span class="emt-subject-value">New Inquiry — {{ $data['inquiryType'] . '||' . $data['first_name'] }}</span>
      </div>

      <p class="emt-greeting">Dear AIFAP Team,</p>
      <p class="emt-intro">A new inquiry has been submitted through the AIFAP contact portal. The details are provided below.</p>

      <div class="emt-fields">
        <div class="emt-field-row">
          <div class="emt-field-key"><i class="ti ti-user" aria-hidden="true"></i>First name</div>
          <div class="emt-field-val">{{ $data['first_name'] }}</div>
        </div>
        <div class="emt-field-row">
          <div class="emt-field-key"><i class="ti ti-user" aria-hidden="true"></i>Last name</div>
          <div class="emt-field-val">{{ $data['last_name'] }}</div>
        </div>
        <div class="emt-field-row">
          <div class="emt-field-key"><i class="ti ti-mail" aria-hidden="true"></i>Email address</div>
          <div class="emt-field-val" style="color:#134e96;">{{ $data['email'] }}</div>
        </div>
        <div class="emt-field-row">
          <div class="emt-field-key"><i class="ti ti-tag" aria-hidden="true"></i>Inquiry type</div>
          <div class="emt-field-val emt-inquiry-badge"><span class="emt-badge">{{ $data['inquiryType'] }}</span></div>
        </div>
      </div>

      <div class="emt-message-block">
        <div class="emt-message-label">Message</div>
        <div class="emt-message-text">{{ $data['message'] }}</div>
      </div>

      <hr class="emt-divider">

      <p class="emt-closing">Please respond to this inquiry within 2–3 business days. You may reply directly to the
        sender's email address listed above.</p>

      <div class="emt-signature">
        <div>Kind regards,</div>
        <div class="emt-sig-name" style="margin-top:8px;">AIFAP Registry Office</div>
        <div class="emt-sig-role">Professional Development & Membership Institute</div>
        <div class="emt-sig-role" style="margin-top:4px; color:#B31942;">info@aifap.org</div>
      </div>
    </div>

    
  </div>
</div>