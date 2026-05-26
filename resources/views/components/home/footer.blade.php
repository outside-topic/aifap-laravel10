    <!-- Footer -->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
            <h4 class="text-white fw-bold mb-3 bg-white rounded-1 px-2 py-4" style="font-family: 'Outfit'; width: fit-content;">
                <img src="{{ asset('/assets/images/logo.png') }}" class="footer-nav" />
            </h4>
            <p class="pe-lg-4" style="font-size: 0.95rem;">AIFAP is committed to Build Competent Finance & Accounting Professionals for a Changing Business World.</p>
            {{-- <div class="social-icons mt-4">
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div> --}}
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
            <h5>About</h5>
            <ul class="footer-links">
                <li><a href="/about">About AIFAP</a></li>
                <li><a href="/certifications">Certifications</a></li>
                <li><a href="/membership">Membership</a></li>
                <li><a href="/corporate-training">Corporate Training</a></li>
            </ul>
            </div>
            <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
            <h5>Verification & Policies</h5>
            <ul class="footer-links">
                <li><a href="/verification">Verification</a></li>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
                <li><a href="/terms-and-condition">Terms & Conditions</a></li>
                <li><a href="/refund-policy">Refund Policy</a></li>
                <li><a href="/code-of-ethics">Code of Ethics</a></li>
                <li><a href="/complaint-and-appeals">Complaint and Appeals</a></li>
                <li><a href="/faq">FAQ</a></li>
            </ul>
            </div>
            <div class="col-lg-3 col-md-4">
            <h5>Contact</h5>
            <ul class="footer-links">
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="mailto:support@aifap.org">Email Support</a></li>
            </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="mb-0">&copy; {{ now()->year }} American Institute of Finance and Accounting Professional (AIFAP). All rights reserved.</p>
            <p class="mt-2 text-muted" style="font-size: 0.8rem;">AIFAP operates as a professional development institute. Participation does not constitute government licensing unless specifically stated.</p>
        </div>
        </div>
    </footer>