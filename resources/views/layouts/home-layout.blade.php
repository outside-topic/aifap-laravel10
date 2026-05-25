<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AIFAP | American Institute of Finance and Accounting Professional</title>
  <meta name="description" content="Empowering Future-Ready Finance & Accounting Professionals through professional learning, executive certifications, and membership pathways.">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">

  @stack("css")

</head>
<body>

  

  @if (session('success'))
    <div class="alert alert-success gap-5 d-flex flex-wrap justify-content-between position-fixed" role="alert" style="bottom: 15px; right: 15px; z-index: 999;">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if (session('failed'))
    <div class="alert gap-5 flex-wrap alert-danger d-flex justify-content-between position-fixed" role="alert" style="bottom: 15px; right: 15px; z-index: 999;">
      {{ session('failed') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

    <x-home.nav />

    @yield('content')

    <x-home.footer />

    <!-- Bootstrap & GSAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="{{ asset('/assets/js/scripts.js') }}"></script>
</body>
</html>