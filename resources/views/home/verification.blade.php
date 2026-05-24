@extends('layouts.home-layout')

@section('content')

<x-home.page-header title="Verification" Subtitle="Become Part of a Global Professional Finance & Accounting Community" />


    <section class="section-padding">

        <div class="container">

            <h2 class="sr-only">AIFAP Verification Section — search by unique ID to verify certificates, memberships, partnerships,
            and accredited institutes</h2>
        
            <div class="vfy-wrap">
            <div class="vfy-header">
                <div class="vfy-eyebrow">Public Verification Portal</div>
                <div class="vfy-title">Credential Verification</div>
                <div class="vfy-subtitle">Verify the authenticity of AIFAP-issued certificates, memberships, partnerships, and
                accredited institutes using a unique ID.</div>
            </div>
        
                <div class="vfy-body">
                    <div class="vfy-search-block">
                    <div class="vfy-field-label">Verification type</div>
                    <select class="vfy-select" id="vfy-select">
                        <option value="all" data-prefix="" data-placeholder="Enter any AIFAP ID">— Select verification type —</option>
                        <option value="cert" data-prefix="AIFAP-CERT-" data-placeholder="e.g. AIFAP-CERT-2024-00182">Certificate
                        Verification</option>
                        <option value="mem" data-prefix="AIFAP-MEM-" data-placeholder="e.g. AIFAP-MEM-2024-00045">Membership
                        Verification</option>
                        <option value="part" data-prefix="AIFAP-PART-" data-placeholder="e.g. AIFAP-PART-2024-00012">Partnership
                        Verification</option>
                        <option value="acc" data-prefix="AIFAP-ACC-" data-placeholder="e.g. AIFAP-ACC-2024-00008">Accredited Institute
                        Verification</option>
                    </select>

                    <div class="vfy-field-label">Unique ID</div>
                    <div class="vfy-search-row">
                        <div class="vfy-input-wrap">
                        <i class="ti ti-search vfy-input-icon" aria-hidden="true"></i>
                        <input class="vfy-input" id="vfy-input" type="text" placeholder="Enter any AIFAP ID" />
                        </div>
                        <button class="vfy-btn">
                        <i class="ti ti-shield-check" aria-hidden="true"></i>
                        Verify
                        </button>
                    </div>
                    <div class="vfy-hint" id="vfy-hint">Enter the ID exactly as printed on your credential document.</div>
                    </div>

                    <div class="vfy-types-label">Verification types</div>
                    <div class="vfy-cards-grid">
                    <div class="vfy-card" data-card="cert">
                        <div class="vfy-card-top">
                        <div class="vfy-card-icon-wrap"><i class="ti ti-certificate" aria-hidden="true"></i></div>
                        <i class="ti ti-arrow-right vfy-card-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="vfy-card-name">Certificate Verification</div>
                        <div class="vfy-card-id">AIFAP-CERT-XXXX</div>
                    </div>
                    <div class="vfy-card" data-card="mem">
                        <div class="vfy-card-top">
                        <div class="vfy-card-icon-wrap"><i class="ti ti-id-badge" aria-hidden="true"></i></div>
                        <i class="ti ti-arrow-right vfy-card-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="vfy-card-name">Membership Verification</div>
                        <div class="vfy-card-id">AIFAP-MEM-XXXX</div>
                    </div>
                    <div class="vfy-card" data-card="part">
                        <div class="vfy-card-top">
                        <div class="vfy-card-icon-wrap"><i class="ti ti-handshake" aria-hidden="true"></i></div>
                        <i class="ti ti-arrow-right vfy-card-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="vfy-card-name">Partnership Verification</div>
                        <div class="vfy-card-id">AIFAP-PART-XXXX</div>
                    </div>
                    <div class="vfy-card" data-card="acc">
                        <div class="vfy-card-top">
                        <div class="vfy-card-icon-wrap"><i class="ti ti-building" aria-hidden="true"></i></div>
                        <i class="ti ti-arrow-right vfy-card-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="vfy-card-name">Accredited Institute Verification</div>
                        <div class="vfy-card-id">AIFAP-ACC-XXXX</div>
                    </div>
                    </div>

                    <div class="vfy-note">
                    <i class="ti ti-info-circle vfy-note-icon" aria-hidden="true"></i>
                    <div class="vfy-note-text text-white">Each AIFAP credential carries a unique ID printed on the document. Enter the exact ID
                        as shown to confirm authenticity. For assistance, contact the AIFAP registry office.</div>
                    </div>
                </div>
            </div>

        </div>


    </section>

@endsection