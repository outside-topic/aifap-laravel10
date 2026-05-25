document.addEventListener("DOMContentLoaded", (event) => {
  // Register ScrollTrigger
  gsap.registerPlugin(ScrollTrigger);

  // Navbar background effect on scroll
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        navbar.style.boxShadow = '0 8px 32px 0 rgba(10, 49, 97, 0.15)';
      } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.85)';
        navbar.style.boxShadow = '0 8px 32px 0 rgba(10, 49, 97, 0.1)';
      }
    });
  }

  // Hero Section Animations
  const heroTl = gsap.timeline();
  
  if(document.querySelector('.hero-content h1')) {
    heroTl.from('.hero-content .small-intro', { opacity: 0, x: -30, duration: 0.8, ease: "power3.out" })
          .from('.hero-content h1', { opacity: 0, y: 30, duration: 0.8, ease: "power3.out" }, "-=0.4")
          .from('.hero-content p.lead', { opacity: 0, y: 20, duration: 0.8, ease: "power3.out" }, "-=0.4")
          .from('.hero-content .d-flex', { opacity: 0, y: 20, duration: 0.8, ease: "power3.out" }, "-=0.4");
  } else if (document.querySelector('.page-header h1')) {
    heroTl.from('.page-header h1', { opacity: 0, y: 30, duration: 0.8, ease: "power3.out" })
          .from('.page-header p.lead', { opacity: 0, y: 20, duration: 0.8, ease: "power3.out" }, "-=0.4");
  }

  // General Fade Up Animation for sections
  const fadeUpElements = document.querySelectorAll('.gsap-fade-up');
  fadeUpElements.forEach((el) => {
    gsap.from(el, {
      scrollTrigger: {
        trigger: el,
        start: "top 85%",
        toggleActions: "play none none reverse"
      },
      y: 40,
      opacity: 0,
      duration: 0.8,
      ease: "power3.out"
    });
  });

  // Staggered Cards Animation
  const staggeredContainers = document.querySelectorAll('.gsap-stagger-container');
  staggeredContainers.forEach((container) => {
    const cards = container.querySelectorAll('.gsap-stagger-item');
    if(cards.length > 0) {
      gsap.from(cards, {
        scrollTrigger: {
          trigger: container,
          start: "top 80%",
          toggleActions: "play none none reverse"
        },
        y: 40,
        opacity: 0,
        duration: 0.8,
        stagger: 0.15,
        ease: "power3.out"
      });
    }
  });
  
  // Section Title Animation
  const sectionTitles = document.querySelectorAll('.section-title');
  sectionTitles.forEach((title) => {
    gsap.from(title, {
      scrollTrigger: {
        trigger: title,
        start: "top 85%",
        toggleActions: "play none none reverse"
      },
      x: -30,
      opacity: 0,
      duration: 0.8,
      ease: "power3.out"
    });
  });
});


const allAlert = document.querySelectorAll('alert');
if(allAlert){
  
  if(allAlert.length > 0){
    
    setTimeout(() => {
      allAlert.forEach(alert => alert.style.display = "none");
    }, 5000)

  }

}