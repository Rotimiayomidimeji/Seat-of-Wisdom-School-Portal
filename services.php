<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Offers • Seat of Wisdom School</title>
 
  <script src="https://cdn.tailwindcss.com"></script>
<style>
      .popup-show {
  opacity: 1 !important;
  pointer-events: auto !important;
  transform: translateY(0) !important;
}
.service-card {
  position: relative;
  transition: box-shadow 0.3s ease;
}

.service-card:hover {
  box-shadow: 0 0 25px rgba(0, 120, 255, 0.55);
}

.service-card::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 1rem;
  padding: 2px;

  /* Create gradient BORDER only, NOT overlay */
  background: linear-gradient(45deg, #4ab3ff, #005eff);
  -webkit-mask: 
      linear-gradient(#fff 0 0) content-box, 
      linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
          mask-composite: exclude;

  opacity: 0;
  transition: opacity 0.3s ease;
  pointer-events: none; /* prevents blocking clicks */
}


.service-card:hover::before {
  opacity: 1;
}

#loading-bar {
  box-shadow: 0 0 10px rgba(231, 81, 35, 0.5);
}
</style>

</head>
<body class="bg-gray-50 text-gray-800">

<div id="loading-bar" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-pink-500 via-blue-500 to-blue-500 z-[9999] transition-all duration-500 w-0"></div>
<header class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur-lg shadow-sm z-50">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
           <div class="flex items-center space-x-3">
  <img src="Result-portal/logo.png" 
     alt="School Logo" 
     class="w-14 h-14 md:w-16 md:h-16 object-contain rounded-full shadow-lg">
  <h1 class="text-2xl md:text-3xl font-bold tracking-wide text-blue-700">
    Seat of Wisdom
  </h1>
</div>

        <!-- Desktop Nav -->
        <ul class="hidden md:flex items-center space-x-8 text-gray-700 font-semibold">
            <li><a href="index.php" class="hover:text-blue-700">Home</a></li>
            <li><a href="about.php" class="hover:text-blue-700">About</a></li>
            <li><a href="#" class="text-blue-700 font-semibold">Our Offers</a></li>
            <li><a href="events.php" class="hover:text-blue-700">Events</a></li>
            <li><a href="contact.php" class="hover:text-blue-700">Contact</a></li>
            <li><a href="Result-portal/login.php" class="hover:text-blue-700">Check Result</a></li>
        </ul>

    <button id="menu-btn" class="md:hidden text-blue-700 text-3xl">☰</button>
  </nav>
  <div id="mobile-menu" class="hidden bg-white/95 backdrop-blur-lg shadow-lg md:hidden">
    <ul class="flex flex-col space-y-2 py-5 px-6 text-gray-700 font-semibold">
      <li><a href="index.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100 ">Home</a></li>
      <li><a href="about.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">About</a></li>
      <li><a href="#" class="block w-full px-4 py-3 rounded-lg bg-blue-100 text-blue-700 font-semibold">Our Offers</a></li>
      <li><a href="events.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Events</a></li>
      <li><a href="contact.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Contact</a></li>
      <li><a href="Result-portal/login.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Check Result</a></li>
    </ul>
  </div>
</header>

<script>
  document.getElementById('menu-btn').addEventListener('click', ()=> document.getElementById('mobile-menu').classList.toggle('hidden'));
</script>

<!-- HERO SECTION -->
<section class="pt-32 pb-24 relative overflow-hidden bg-gradient-to-b from-blue-800 via-blue-700 to-blue-600 text-white">
<div class="absolute inset-0 opacity-[0.15] bg-[url('https://www.toptal.com/designers/subtlepatterns/uploads/double-bubble-outline.png')] bg-repeat"></div>
<div id="particles" class="absolute inset-0 pointer-events-none"></div>

        <div class="max-w-5xl mx-auto text-center px-6">
  <h1 class="text-5xl font-bold mb-4">What we Offer</h2>
  <p class="opacity-90 max-w-2xl mx-auto text-lg">Premium academic and extracurricular programs designed to nurture excellence.</p>
</div>
</section>

<!-- SERVICES GRID -->
<section class="max-w-7xl mx-auto px-6 py-20">
  <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-10">

    <!-- SERVICE 1: Nursery School -->
    <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
      <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
        <img src="img/prim.jpg" 
             alt="Nursery school children learning"
             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
             loading="lazy">
      </div>
      <h3 class="lux-title text-2xl text-blue-700 mb-3">Nursery School</h3>
      <p class="text-gray-700 leading-relaxed">A warm, safe, and inspiring start for young learners with foundational literacy, numeracy, and creativity training.</p>
      <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn"
              data-service="nursery">
        Read More
      </button>
    </div>

    <!-- SERVICE 2: Primary School -->
    <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
      <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
        <img src="img/prim.jpg" 
             alt="Primary school students in class"
             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
             loading="lazy">
      </div>
      <h3 class="lux-title text-2xl text-blue-700 mb-3">Primary School</h3>
      <p class="text-gray-700 leading-relaxed">Comprehensive learning built on strong academic standards and moral development.</p>
      <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn"
              data-service="primary">
        Read More
      </button>
    </div>

    <!-- SERVICE 3: Junior Secondary -->
    <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
      <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
        <img src="img/secou.jpg" 
             alt="Junior secondary students"
             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
             loading="lazy">
      </div>
      <h3 class="lux-title text-2xl text-blue-700 mb-3">Junior Secondary</h3>
      <p class="text-gray-700 leading-relaxed">A solid transition into advanced learning with well-structured subjects and experienced educators.</p>
      <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn"
              data-service="junior">
        Read More
      </button>
    </div>

    <!-- SERVICE 4: After‑School Programs -->
    <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
      <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=600&h=400&fit=crop&auto=format"
             alt="After school sports activities"
             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
             loading="lazy">
      </div>
      <h3 class="lux-title text-2xl text-blue-700 mb-3">After‑School Programs</h3>
      <p class="text-gray-700 leading-relaxed">Engaging activities including arts, music, homework support, and sports to build well-rounded students.</p>
      <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn"
              data-service="after">
        Read More
      </button>
    </div>

    <!-- SERVICE 5: School Transport -->
    <!-- <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
      <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=600&h=400&fit=crop&auto=format" 
             alt="School bus transportation"
             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
             loading="lazy">
      </div>
      <h3 class="lux-title text-2xl text-blue-700 mb-3">School Transport</h3>
      <p class="text-gray-700 leading-relaxed">Safe and reliable transportation for students across designated routes.</p>
      <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn"
              data-service="transport">
        Read More
      </button>
    </div> -->

    <!-- SERVICE 6: Guidance & Counseling -->
    <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
      <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
        <img src="https://images.pexels.com/photos/5699475/pexels-photo-5699475.jpeg?w=600&h=400&fit=crop&auto=format"
             alt="Guidance counseling session"
             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
             loading="lazy">
      </div>
      <h3 class="lux-title text-2xl text-blue-700 mb-3">Guidance & Counseling</h3>
      <p class="text-gray-700 leading-relaxed">Professional support to help students grow emotionally, socially, and academically.</p>
      <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn"
              data-service="counseling">
        Read More
      </button>
    </div>

  </div>
</section>

<!-- WHY CHOOSE US SECTION -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h3 class="lux-title text-3xl text-blue-700 mb-6">Why Choose Us</h3>
    <p class="max-w-2xl mx-auto text-gray-700 mb-12">
      We provide a structured, moral, and academically rich environment that shapes confident and exceptional learners.
    </p>

    <div class="grid md:grid-cols-3 gap-10">

      <!-- QUALITY EDUCATION -->
      <div class="p-8 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition">
        <div class="mb-5 flex justify-center">
          <div class="w-16 h-16 bg-blue-600 text-white flex items-center justify-center rounded-full animate-pulse">
            🎓
          </div>
        </div>
        <h4 class="lux-title text-xl mb-3">Quality Education</h4>
        <p class="text-gray-600">Experienced teachers and a well-structured curriculum for all levels.</p>
      </div>

      <!-- SAFE ENVIRONMENT -->
      <div class="p-8 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition">
        <div class="mb-5 flex justify-center">
          <div class="w-16 h-16 bg-blue-600 text-white flex items-center justify-center rounded-full animate-bounce">
            🛡️
          </div>
        </div>
        <h4 class="lux-title text-xl mb-3">Safe Environment</h4>
        <p class="text-gray-600">A secure, welcoming, and child‑friendly environment for learning.</p>
      </div>

      <!-- MODERN FACILITIES -->
      <div class="p-8 bg-gray-50 rounded-2xl shadow hover:shadow-lg transition">
        <div class="mb-5 flex justify-center">
          <div class="w-16 h-16 bg-blue-600 text-white flex items-center justify-center rounded-full animate-pulse">
            🏫
          </div>
        </div>
        <h4 class="lux-title text-xl mb-3">Modern Facilities</h4>
        <p class="text-gray-600">Equipped classrooms, extracurricular spaces, and digital learning systems.</p>
      </div>

    </div>
  </div>
</section>

<!-- Luxury CTA Section -->
<section class="relative py-20 bg-gradient-to-b from-white via-blue-50/30 to-white overflow-hidden">
    <div class="max-w-5xl mx-auto px-6">
        
        <div class="bg-white/40 backdrop-blur-xl border border-white/60 shadow-2xl rounded-3xl p-10 md:p-14 
                    transform transition-all duration-700 ease-out hover:scale-[1.015] opacity-0 translate-y-10"
             id="luxury-cta">

            <h2 class="text-4xl font-extrabold text-center text-blue-800 mb-6">
                Ready to Join Seat of Wisdom?
            </h2>

            <p class="text-center text-gray-700 text-lg mb-10">
                Take the first step toward quality education built on excellence and character.
            </p>

            <div class="flex flex-col md:flex-row justify-center gap-5">
                <a href="contact.php" class="px-10 py-4 bg-blue-700 text-white rounded-full text-lg font-semibold 
                                  shadow-lg hover:bg-blue-800 hover:shadow-xl transition">
                    Apply for Admission
                </a>

                <a href="contact.php" class="px-10 py-4 bg-white text-blue-700 border border-blue-700 rounded-full 
                                  text-lg font-semibold shadow-lg hover:bg-blue-50 hover:shadow-xl transition">
                    Contact Us
                </a>
            </div>

        </div>
    </div>
</section>

<script>
    // Fade-up animation on scroll
    const cta = document.getElementById("luxury-cta");

    function revealCTA() {
        const rect = cta.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            cta.classList.remove("opacity-0", "translate-y-10");
            cta.classList.add("opacity-100", "translate-y-0");
        }
    }

    window.addEventListener("scroll", revealCTA);
    revealCTA();
</script>



<footer class="bg-blue-700 text-white py-10">
  <div class="max-w-7xl mx-auto px-5 grid md:grid-cols-3 gap-10">
    
    <!-- First Column -->
    <div>
      <h4 class="font-bold text-xl mb-3">SEAT OF WISDOM</h4>
      <p class="text-gray-200">Shaping the leaders of tomorrow through quality education.</p>

      <!-- Social Media Section -->
      <div class="flex flex-wrap justify-center md:justify-start gap-3 md:gap-4 mt-5">
        
        <!-- WhatsApp -->
        <a href="https://wa.me/2348067705751" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-white/20 hover:bg-white/30 rounded-full transition duration-300 transform hover:scale-110 shadow-md hover:shadow-lg group"
           title="Chat with us on WhatsApp">
          <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/whatsapp.svg"
               class="w-6 h-6 md:w-7 md:h-7 invert"
               alt="WhatsApp">
          <span class="sr-only">WhatsApp</span>
        </a>
        
        <!-- Facebook -->
        <a href="https://facebook.com/SeatOfWisdomSchoolAbuja" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-white/20 hover:bg-white/30 rounded-full transition duration-300 transform hover:scale-110 shadow-md hover:shadow-lg group"
           title="Follow us on Facebook">
          <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/facebook.svg"
               class="w-6 h-6 md:w-7 md:h-7 invert"
               alt="Facebook">
          <span class="sr-only">Facebook</span>
        </a>
        
        <!-- Instagram -->
        <a href="https://instagram.com/mhiz_jacinta1" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-white/20 hover:bg-white/30 rounded-full transition duration-300 transform hover:scale-110 shadow-md hover:shadow-lg group"
           title="Follow us on Instagram">
          <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/instagram.svg"
               class="w-6 h-6 md:w-7 md:h-7 invert"
               alt="Instagram">
          <span class="sr-only">Instagram</span>
        </a>

      </div>

      <!-- Optional: Add note about response times -->
      <p class="text-sm text-blue-100 mt-4 text-center md:text-left">
        💬 WhatsApp: Quickest response during school hours
      </p>
    </div> <!-- Closing div for first column -->

    <!-- Second Column -->
    <div>
      <h4 class="font-bold text-lg mb-3">Quick Links</h4>
      <ul class="space-y-2 text-gray-200">
        <li><a href="about.php" class="hover:underline">About</a></li>
        <li><a href="services.php" class="hover:underline">Our Offers</a></li>
        <li><a href="events.php" class="hover:underline">Events</a></li>
        <li><a href="contact.php" class="hover:underline">Contact</a></li>
      </ul>
    </div> <!-- Closing div for second column -->

    <!-- Third Column -->
    <div>
      <h4 class="font-bold text-lg mb-3">Subscribe</h4>
      <p class="text-gray-200 mb-3">Get updates on school events and news.</p>
      <form id="subscribeForm" class="flex w-full">
        <input id="subscribeEmail" name="email" type="email" 
               placeholder="Email" required
               class="p-3 rounded-l-lg w-full text-gray-800" />
        <button id="subscribeBtn"
                class="bg-blue-600 text-white px-6 font-semibold rounded-r-lg">
          Subscribe
        </button>
      </form>
    </div> <!-- Closing div for third column -->
    
  </div> <!-- Closing div for grid -->
  
  <p class="text-center mt-10 text-gray-200 text-sm">© 2025 Seat of Wisdom School. All Rights Reserved.</p>
</footer>


  <div id="popup" style="
    position: fixed;
    bottom: 30px;
    right: 30px;
    background: white;
    padding: 18px 22px;
    border-radius: 12px;
    box-shadow: 0px 8px 25px rgba(0,0,0,0.15);
    border-left: 5px solid #1e3a8a;
    font-family: Arial, sans-serif;
    font-size: 15px;
    color: #333;
    opacity: 0;
    pointer-events: none;
    transform: translateY(20px);
    transition: all .35s ease;
    z-index: 9999;
"></div>
<!-- MODAL OVERLAY -->
<div id="service-modal" class="fixed inset-0 bg-black/60 hidden flex justify-center items-center z-[9999] transition-all duration-500 ease-out"class="fixed inset-0 bg-black/60 hidden flex justify-center items-end md:items-center z-[9999] transition-all duration-500 ease-out">
<div id="modal-content" class="bg-white rounded-2xl shadow-xl p-8 w-[90%] max-w-xl text-gray-800 relative transform translate-y-10 opacity-0 transition-all duration-500">




 <button 
  id="close-modal"
  class="absolute -top-3 -right-3 bg-blue-700 hover:bg-blue-900 hover:shadow-lg hover:shadow-blue-500/40 transition-all duration-300 text-white w-10 h-10 rounded-full flex items-center justify-center text-xl">

      ✕
    </button>

    <h2 id="modal-title" class="text-3xl font-bold text-blue-700 mb-4"></h2>
    <p id="modal-description" class="text-gray-700 leading-relaxed"></p>

  </div>
</div>

<script>
const modal = document.getElementById("service-modal");
const modalTitle = document.getElementById("modal-title");
const modalDesc = document.getElementById("modal-description");
const closeModal = document.getElementById("close-modal");

// Full detailed content for each service
const serviceDetails = {
  nursery: {
    title: "Nursery School",
    desc: `
      Our nursery curriculum includes:
      <ul class="list-disc ml-5 mt-3">
        <li>Foundational literacy & numeracy</li>
        <li>Creative arts & expression</li>
        <li>Motor skills development</li>
        <li>Safe, stimulating learning environment</li>
        <li>Dedicated early-childhood caregivers</li>
      </ul>
    `
  },
  primary: {
    title: "Primary School",
    desc: `
      Key offerings include:
      <ul class="list-disc ml-5 mt-3">
        <li>Strong academic foundation</li>
        <li>Moral & character development</li>
        <li>STEM-aligned subjects</li>
        <li>Experienced teachers</li>
      </ul>
    `
  },
  junior: {
    title: "Junior Secondary",
    desc: `
      Subjects & features:
      <ul class="list-disc ml-5 mt-3">
        <li>Mathematics, English, Basic Science</li>
        <li>ICT & Digital Literacy</li>
        <li>Social Studies & Cultural Education</li>
        <li>Introductory Technology</li>
      </ul>
    `
  },
  after: {
    title: "After-School Programs",
    desc: `
      Activities include:
      <ul class="list-disc ml-5 mt-3">
        <li>Homework support</li>
        <li>Music & arts</li>
        <li>Sports & recreation</li>
        <li>Leadership training</li>
      </ul>
    `
  },
  transport: {
    title: "School Transport",
    desc: `
      Our transport system offers:
      <ul class="list-disc ml-5 mt-3">
        <li>Designated pick-up routes</li>
        <li>Well-maintained school buses</li>
        <li>Professional drivers</li>
        <li>Safe and punctual operations</li>
      </ul>
    `
  },
  counseling: {
    title: "Guidance & Counseling",
    desc: `
      Student support includes:
      <ul class="list-disc ml-5 mt-3">
        <li>Emotional development</li>
        <li>Career guidance</li>
        <li>Academic mentoring</li>
        <li>Behavioral counseling</li>
      </ul>
    `
  }
};

// Open modal
document.querySelectorAll(".read-more-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    const serviceKey = btn.dataset.service;

    modalTitle.textContent = serviceDetails[serviceKey].title;
    modalDesc.innerHTML = serviceDetails[serviceKey].desc;

    modal.classList.remove("hidden");

    const content = document.getElementById("modal-content");

    // start invisible + down
    content.classList.add("translate-y-10", "opacity-0");

    // animate to visible
    setTimeout(() => {
      content.classList.remove("translate-y-10", "opacity-0");
      content.classList.add("translate-y-0", "opacity-100");
    }, 10);
  });
});


// Close modal
closeModal.addEventListener("click", closeServiceModal);


// Close when clicking outside
modal.addEventListener("click", (e) => {
  if (e.target === modal) modal.classList.add("hidden");
});

// Modal slide-up animation




function closeServiceModal() {
  const modal = document.getElementById("service-modal");
  const content = document.getElementById("modal-content");

  content.classList.add("translate-y-10", "opacity-0");

  setTimeout(() => {
    modal.classList.add("hidden");
  }, 400);
}

</script>
<script>
// 3D Tilt Effect
document.querySelectorAll(".service-card").forEach(card => {
  card.addEventListener("mousemove", e => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left - rect.width / 2;
    const y = e.clientY - rect.top - rect.height / 2;

    card.style.transform = `rotateX(${(-y / 20)}deg) rotateY(${x / 20}deg) scale(1.03)`;
  });

  card.addEventListener("mouseleave", () => {
    card.style.transform = "rotateX(0deg) rotateY(0deg) scale(1)";
  });
});
</script>
<script>
// Scroll reveal
const revealElements = document.querySelectorAll(".reveal");

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("opacity-100", "translate-y-0");
      entry.target.classList.remove("opacity-0", "translate-y-10");
    }
  });
}, { threshold: 0.2 });

revealElements.forEach(el => {
  el.classList.add("opacity-0", "translate-y-10", "transition-all", "duration-700");
  observer.observe(el);
});
</script>

<script>
// Floating particles
const particlesContainer = document.getElementById("particles");

for (let i = 0; i < 25; i++) {
  const dot = document.createElement("div");
  dot.classList.add("particle");
  dot.style.left = Math.random() * 100 + "%";
  dot.style.animationDuration = 5 + Math.random() * 5 + "s";
  particlesContainer.appendChild(dot);
}
</script>

<style>
.particle {
  position: absolute;
  bottom: -20px;
  width: 6px;
  height: 6px;
  background: white;
  border-radius: 50%;
  opacity: 0.8;
  animation: floatUp linear infinite;
}

@keyframes floatUp {
  from { transform: translateY(0); opacity: 0.8; }
  to { transform: translateY(-120vh); opacity: 0; }
}
</style>


<script>
// Mobile swipe reveal effect
let startX = 0;

document.querySelectorAll(".service-card").forEach(card => {
  card.addEventListener("touchstart", e => {
    startX = e.touches[0].clientX;
  });

  card.addEventListener("touchend", e => {
    const diff = e.changedTouches[0].clientX - startX;

    if (Math.abs(diff) > 40) {
      card.classList.add("shadow-2xl", "scale-[1.03]");
      setTimeout(() => {
        card.classList.remove("shadow-2xl", "scale-[1.03]");
      }, 300);
    }
  });
});
</script>


<script>
function showPopup(msg, type = "success") {
    const pop = document.getElementById("popup");
    pop.innerText = msg;
    pop.style.borderLeftColor = type === "success" ? "#1e3a8a" : "red";
    pop.classList.add("popup-show");

    setTimeout(() => {
        pop.classList.remove("popup-show");
    }, 3000);
}

document.querySelector("#subscribeForm").addEventListener("submit", async function(e) {
    e.preventDefault();

    let email = document.querySelector("#subscribeEmail").value.trim();
    let btn = document.querySelector("#subscribeBtn");

    btn.innerText = "Sending...";
    btn.disabled = true;

    try {
        let response = await fetch("mails/subscribe.php", {
            method: "POST",
            headers: {"Content-Type": "application/x-www-form-urlencoded"},
            body: "email=" + encodeURIComponent(email)
        });

        let text = await response.text();

        let result;
        try {
            result = JSON.parse(text);
        } catch (err) {
            showPopup("Invalid server response", "error");
            btn.innerText = "Subscribe";
            btn.disabled = false;
            return;
        }

        if (result.status === "success") {
            showPopup("🎉 Subscribed Successfully!", "success");
            document.querySelector("#subscribeForm").reset();
        } else {
            showPopup("❌ " + result.message, "error");
        }
    } catch (err) {
        showPopup("❌ Network error!", "error");
    }

    btn.innerText = "Subscribe";
    btn.disabled = false;
});
</script>

<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-8 right-8 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 transform translate-y-20 opacity-0 z-40">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
  </svg>
</button>

<style>/* Back to Top Button Animation */
#backToTop.show {
  transform: translateY(0);
  opacity: 1;
}

#backToTop:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);
}

/* Mobile adjustments */
@media (max-width: 768px) {
  #backToTop {
    bottom: 20px;
    right: 20px;
    padding: 12px;
  }
}

@media (max-width: 480px) {
  #backToTop {
    bottom: 16px;
    right: 16px;
    padding: 10px;
  }
}
</style>

<script>
  // Back to Top Button
const backToTopBtn = document.getElementById('backToTop');

// Show/hide button based on scroll position
window.addEventListener('scroll', () => {
  if (window.pageYOffset > 300) {
    backToTopBtn.classList.add('show');
  } else {
    backToTopBtn.classList.remove('show');
  }
});

// Smooth scroll to top
backToTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
</script>

<script>
  // Smooth Loading Progress Bar
  const loadingBar = document.getElementById('loading-bar');
  let progress = 0;

  // Simulate gradual progress until page fully loads
  const interval = setInterval(() => {
    progress += Math.random() * 10; // random increment
    if (progress < 90) {
      loadingBar.style.width = progress + '%';
    }
  }, 150);

  // When page finishes loading (including images)
  window.addEventListener('load', () => {
    clearInterval(interval);
    loadingBar.style.width = '100%';
    setTimeout(() => {
      loadingBar.style.opacity = '0';
      setTimeout(() => loadingBar.remove(), 500); // remove from DOM after fade-out
    }, 600);
  });
</script>
</body>
</html>
