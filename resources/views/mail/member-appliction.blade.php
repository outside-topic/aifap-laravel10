<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .met-outer {
    background: var(--color-background-secondary, #f3f4f6);
    padding: 2rem 1rem;
    border-radius: var(--border-radius-lg, 12px);
    font-family: var(--font-sans, system-ui, sans-serif);
  }

  .met-card {
    max-width: 580px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: var(--border-radius-lg, 12px);
    overflow: hidden;
    border: 0.5px solid rgba(0, 0, 0, 0.08);
  }

  .met-top-bar {
    height: 4px;
    background: #B31942;
  }

  .met-header {
    background: #0A3161;
    padding: 2rem 2rem 1.75rem;
    text-align: center;
  }

  .met-logo-wrap {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 1.25rem;
  }

  .met-logo-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: rgba(179, 25, 66, 0.2);
    border: 0.5px solid rgba(179, 25, 66, 0.35);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .met-logo-icon i {
    font-size: 20px;
    color: #d12250;
  }

  .met-logo-name {
    font-size: 16px;
    font-weight: 500;
    color: #f3f4f6;
    letter-spacing: 0.04em;
  }

  .met-header-title {
    font-size: 13px;
    color: rgba(243, 244, 246, 0.5);
    letter-spacing: 0.08em;
    text-transform: uppercase;
  }

  .met-body {
    padding: 2rem;
  }

  .met-subject-bar {
    background: #f8f9fa;
    border: 0.5px solid #e5e7eb;
    border-radius: var(--border-radius-md, 8px);
    padding: 10px 14px;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .met-subject-label {
    font-size: 11px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #9ca3af;
    white-space: nowrap;
  }

  .met-subject-value {
    font-size: 13px;
    color: #1f2937;
    font-weight: 500;
  }

  .met-greeting {
    font-size: 15px;
    color: #1f2937;
    margin-bottom: 1.25rem;
    line-height: 1.6;
  }

  .met-intro {
    font-size: 14px;
    color: #4b5563;
    line-height: 1.7;
    margin-bottom: 1.5rem;
  }

  .met-section-label {
    font-size: 11px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #9ca3af;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .met-section-label i {
    font-size: 13px;
  }

  .met-fields {
    border: 0.5px solid #e5e7eb;
    border-radius: var(--border-radius-md, 8px);
    overflow: hidden;
    margin-bottom: 1.5rem;
  }

  .met-field-row {
    display: grid;
    grid-template-columns: 175px 1fr;
    border-bottom: 0.5px solid #e5e7eb;
  }

  .met-field-row:last-child {
    border-bottom: none;
  }

  .met-field-key {
    background: #f8f9fa;
    padding: 11px 14px;
    font-size: 12px;
    font-weight: 500;
    color: #6b7280;
    text-transform: uppercase;
    letter-spacing: 0.07em;
    display: flex;
    align-items: center;
    gap: 7px;
  }

  .met-field-key i {
    font-size: 14px;
    color: #9ca3af;
    flex-shrink: 0;
  }

  .met-field-val {
    padding: 11px 14px;
    font-size: 14px;
    color: #1f2937;
    line-height: 1.5;
  }

  .met-badge {
    display: inline-block;
    background: rgba(179, 25, 66, 0.08);
    color: #B31942;
    font-size: 12px;
    font-weight: 500;
    padding: 3px 10px;
    border-radius: 20px;
    border: 0.5px solid rgba(179, 25, 66, 0.2);
  }

  .met-badge-blue {
    display: inline-block;
    background: rgba(19, 78, 150, 0.08);
    color: #134e96;
    font-size: 12px;
    font-weight: 500;
    padding: 3px 10px;
    border-radius: 20px;
    border: 0.5px solid rgba(19, 78, 150, 0.2);
  }

  .met-divider {
    border: none;
    border-top: 0.5px solid #e5e7eb;
    margin: 1.5rem 0;
  }

  .met-notice {
    background: #f8f9fa;
    border: 0.5px solid #e5e7eb;
    border-left: 3px solid #0A3161;
    border-radius: 0 var(--border-radius-md, 8px) var(--border-radius-md, 8px) 0;
    padding: 12px 16px;
    margin-bottom: 1.5rem;
    font-size: 13px;
    color: #4b5563;
    line-height: 1.7;
  }

  .met-closing {
    font-size: 14px;
    color: #4b5563;
    line-height: 1.7;
    margin-bottom: 1.25rem;
  }

  .met-signature {
    font-size: 14px;
    color: #1f2937;
  }

  .met-sig-name {
    font-weight: 500;
    color: #0A3161;
    font-size: 15px;
    margin-top: 8px;
  }

  .met-sig-role {
    font-size: 12px;
    color: #6b7280;
    margin-top: 2px;
  }

  .met-sig-email {
    font-size: 12px;
    color: #B31942;
    margin-top: 4px;
  }

  .met-footer {
    background: #0A3161;
    padding: 1.25rem 2rem;
    text-align: center;
  }

  .met-footer-links {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    margin-bottom: 10px;
    flex-wrap: wrap;
  }

  .met-footer-link {
    font-size: 12px;
    color: rgba(243, 244, 246, 0.5);
  }

  .met-footer-note {
    font-size: 11px;
    color: rgba(243, 244, 246, 0.3);
    line-height: 1.6;
  }
</style>

<h2 class="sr-only">AIFAP membership application email template showing applicant personal details, membership category,
  qualification, and experience</h2>

<div class="met-outer">
  <div class="met-card">
    <div class="met-top-bar"></div>

    <div class="met-header">
      <div class="met-logo-wrap">
        <div class="met-logo-icon"><i class="ti ti-id-badge" aria-hidden="true"></i></div>
        <span class="met-logo-name">AIFAP</span>
      </div>
      <div class="met-header-title">New Membership Application</div>
    </div>

    <div class="met-body">
      <div class="met-subject-bar">
        <span class="met-subject-label">Subject</span>
        <span class="met-subject-value">Membership Application — John Smith | Associate Member</span>
      </div>

      <p class="met-greeting">Dear AIFAP Membership Team,</p>
      <p class="met-intro">A new membership application has been submitted through the AIFAP portal. Please review the
        applicant's details below and proceed with the verification process.</p>

      <div class="met-section-label"><i class="ti ti-user-circle" aria-hidden="true"></i> Personal details</div>
      <div class="met-fields" style="margin-bottom: 1.25rem;">
        <div class="met-field-row">
          <div class="met-field-key"><i class="ti ti-user" aria-hidden="true"></i>First name</div>
          <div class="met-field-val">{{ $data['first_name'] }}</div>
        </div>
        <div class="met-field-row">
          <div class="met-field-key"><i class="ti ti-user" aria-hidden="true"></i>Last name</div>
          <div class="met-field-val">{{ $data['last_name'] }}</div>
        </div>
        <div class="met-field-row">
          <div class="met-field-key"><i class="ti ti-mail" aria-hidden="true"></i>Email address</div>
          <div class="met-field-val" style="color: #134e96;">{{ $data['email'] }}</div>
        </div>
        <div class="met-field-row">
          <div class="met-field-key"><i class="ti ti-phone" aria-hidden="true"></i>Phone number</div>
          <div class="met-field-val">{{ $data['contact'] }}</div>
        </div>
      </div>

      <div class="met-section-label"><i class="ti ti-award" aria-hidden="true"></i> Professional profile</div>
      <div class="met-fields">
        <div class="met-field-row">
          <div class="met-field-key"><i class="ti ti-id-badge" aria-hidden="true"></i>Membership category</div>
          <div class="met-field-val"><span class="met-badge">{{ $data['memberType'] }}</span></div>
        </div>
        <div class="met-field-row">
          <div class="met-field-key"><i class="ti ti-school" aria-hidden="true"></i>Highest qualification</div>
          <div class="met-field-val"><span class="met-badge-blue">{{ $data['highest_qualification'] }}</span></div>
        </div>
        <div class="met-field-row">
          <div class="met-field-key"><i class="ti ti-briefcase" aria-hidden="true"></i>Years of experience</div>
          <div class="met-field-val">{{ $data['experience'] }}</div>
        </div>
      </div>

      <hr class="met-divider">

      <div class="met-notice">
        <strong style="color: #0A3161;">Next steps:</strong> Please review the submitted details and contact the
        applicant within 3–5 business days to confirm membership eligibility and next steps.
      </div>

      <p class="met-closing">For any queries regarding this application, you may reach the applicant directly via the
        email address or phone number provided above.</p>

      <div class="met-signature">
        <div>Kind regards,</div>
        <div class="met-sig-name">AIFAP Membership Registry</div>
        <div class="met-sig-role">Professional Development & Membership Institute</div>
        <div class="met-sig-email">membership@aifap.org</div>
      </div>
    </div>

  </div>
</div>