@props(["title", "subtitle"])

<!-- Page Header -->
  <header class="page-header" style="background: linear-gradient(rgba(10, 49, 97, 0.9), rgba(10, 49, 97, 0.9)), url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
    <div class="container">
      <h1>{{ $title }}</h1>
      <p class="lead">{{ $subtitle }}</p>
    </div>
  </header>