<!-- ABOUT PAGE - Option A Luxury Layout -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About • Seat of Wisdom School</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
        .popup-show {
  opacity: 1 !important;
  pointer-events: auto !important;
  transform: translateY(0) !important;
}
    .particle { position:absolute; bottom:-20px; width:6px; height:6px; background:white; border-radius:50%; opacity:.8; animation:floatUp linear infinite; }
    @keyframes floatUp { from{transform:translateY(0);opacity:.8;} to{transform:translateY(-120vh);opacity:0;} }
#loading-bar {
  box-shadow: 0 0 10px rgba(231, 81, 35, 0.5);
}
 </style>


  


</head>
<body class="bg-gray-50 text-gray-800">

<!-- Top Loading Line -->


<div id="loading-bar" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-pink-500 via-blue-500 to-blue-500 z-[9999] transition-all duration-500 w-0"></div>



<!-- HEADER (reuse from services) -->
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
    <ul class="hidden md:flex items-center space-x-8 text-gray-700 font-semibold">
      <li><a href="index.php" class="hover:text-blue-700">Home</a></li>
      <li><a href="#" class="text-blue-700 font-semibold">About</a></li>
      <li><a href="services.php" class="hover:text-blue-700">Our Offers</a></li>
      <li><a href="events.php" class="hover:text-blue-700">Events</a></li>
      <li><a href="contact.php" class="hover:text-blue-700">Contact</a></li>
      <li><a href="Result-portal/login.php" class="hover:text-blue-700">Check Result</a></li>
    </ul>
    <button id="menu-btn" class="md:hidden text-blue-700 text-3xl">☰</button>
  </nav>
  <div id="mobile-menu" class="hidden bg-white/95 backdrop-blur-lg shadow-lg md:hidden">
    <ul class="flex flex-col space-y-2 py-5 px-6 text-gray-700 font-semibold">
      <li><a href="index.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Home</a></li>
      <li><a href="#" class="block w-full px-4 py-3 rounded-lg bg-blue-100 text-blue-700 font-semibold">About</a></li>
      <li><a href="services.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100 ">Our Offers</a></li>
      <li><a href="events.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Events</a></li>
      <li><a href="contact.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100 ">Contact</a></li>
      <li><a href="Result-portal/login.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Check Result</a></li>
    </ul>
  </div>
</header>

<script>
  document.getElementById('menu-btn').addEventListener('click', ()=> document.getElementById('mobile-menu').classList.toggle('hidden'));
</script>

<!-- HERO -->
<section class="pt-32 pb-24 relative overflow-hidden bg-gradient-to-b from-blue-800 via-blue-700 to-blue-600 text-white">
  <div class="absolute inset-0 opacity-[0.15] bg-[url('https://www.toptal.com/designers/subtlepatterns/uploads/double-bubble-outline.png')] bg-repeat"></div>
  <div id="particles" class="absolute inset-0 pointer-events-none"></div>

  <div class="max-w-5xl mx-auto text-center px-6">
    <h1 class="text-5xl font-bold mb-4">About Our School</h1>
    <p class="opacity-90 max-w-2xl mx-auto text-lg">Building excellence, shaping character, and inspiring a love for lifelong learning.</p>

    <!-- Breadcrumb -->
    <!-- <div class="mt-6 text-blue-100 text-sm">
      <a href="index.php" class="hover:underline">Home</a> • <span class="text-white font-semibold">About</span>
    </div> -->
  </div>
</section>

<!-- STORY SECTION -->
<section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center reveal">
  <div>
    <h2 class="text-4xl font-bold text-blue-700 mb-5">Our Story</h2>
    <p class="text-gray-700 leading-relaxed mb-4">Seat of Wisdom School was founded with a mission to nurture the minds and hearts of young learners through quality education rooted in excellence and character.</p>
    <p class="text-gray-700 leading-relaxed">For years, we have provided a supportive environment where students grow academically, morally, and socially under the guidance of dedicated educators.</p>
  </div>

  <div class="h-72 rounded-xl overflow-hidden">
    <!-- Option 1: African school building/students -->
    <img src="img/about.jpg" 
         alt="Seat of Wisdom School students in classroom"
         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110"
         loading="lazy">
  </div>
</section>

<!-- MISSION & VISION -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-6 text-center mb-14">
    <h2 class="text-4xl text-blue-700 font-bold">Mission & Vision</h2>
  </div>
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
    <div class="p-10 bg-white rounded-3xl shadow-xl border service-card">
      <h3 class="text-2xl font-bold text-blue-700 mb-4">Our Mission</h3>
      <p class="text-gray-700 leading-relaxed">To provide quality and holistic education that develops confident, responsible, and God‑fearing learners equipped for future success.</p>
    </div>
    <div class="p-10 bg-white rounded-3xl shadow-xl border service-card">
      <h3 class="text-2xl font-bold text-blue-700 mb-4">Our Vision</h3>
      <p class="text-gray-700 leading-relaxed">To become a center of academic excellence where students are shaped into leaders of positive influence in society.</p>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="py-20 bg-blue-50/50">
  <div class="max-w-7xl mx-auto px-6 text-center mb-14">
    <h2 class="text-4xl text-blue-700 font-bold">Our Core Values</h2>
  </div>
  <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto">
    <div class="p-8 bg-white rounded-2xl shadow service-card text-center">
      <div class="text-5xl mb-4">⭐</div>
      <h4 class="text-xl font-bold text-blue-700 mb-2">Excellence</h4>
      <p class="text-gray-700">We aim for the highest academic and moral standards.</p>
    </div>
    <div class="p-8 bg-white rounded-2xl shadow service-card text-center">
      <div class="text-5xl mb-4">🤝</div>
      <h4 class="text-xl font-bold text-blue-700 mb-2">Integrity</h4>
      <p class="text-gray-700">We uphold honesty, responsibility, and strong values.</p>
    </div>
    <div class="p-8 bg-white rounded-2xl shadow service-card text-center">
      <div class="text-5xl mb-4">📘</div>
      <h4 class="text-xl font-bold text-blue-700 mb-2">Discipline</h4>
      <p class="text-gray-700">We encourage respect, structure, and focused learning.</p>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="py-20 bg-white reveal">
  <div class="max-w-7xl mx-auto px-6 text-center mb-14">
    <h2 class="text-4xl text-blue-700 font-bold">Our Impact in Numbers</h2>
  </div>
  <div class="grid md:grid-cols-4 gap-10 max-w-6xl mx-auto text-center">
    <div>
      <h3 class="text-5xl font-extrabold text-blue-700">200+</h3>
      <p class="text-gray-600 mt-2">Students</p>
    </div>
    <div>
      <h3 class="text-5xl font-extrabold text-blue-700">30+</h3>
      <p class="text-gray-600 mt-2">Teachers</p>
    </div>
    <div>
      <h3 class="text-5xl font-extrabold text-blue-700">10+</h3>
      <p class="text-gray-600 mt-2">Awards</p>
    </div>
    <div>
      <h3 class="text-5xl font-extrabold text-blue-700">98%</h3>
      <p class="text-gray-600 mt-2">Graduation Rate</p>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="py-20 bg-blue-50/50 reveal">
  <div class="max-w-7xl mx-auto px-6 text-center mb-14">
    <h2 class="text-4xl text-blue-700 font-bold">Life at Seat of Wisdom</h2>
  </div>
  <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto px-6">
    <!-- Image 1: Classroom Learning -->
    <div class="h-40 bg-gray-300 rounded-xl overflow-hidden shadow-xl hover:scale-[1.03] transition-transform duration-500">
      <img src="img/hero.jpg" 
           alt="Students learning in classroom"
           class="w-full h-full object-cover"
           loading="lazy">
    </div>
    
    <!-- Image 2: Sports Activities -->
    <div class="h-40 bg-gray-300 rounded-xl overflow-hidden shadow-xl hover:scale-[1.03] transition-transform duration-500">
      <img src="img/life.jpg" 
           alt="School sports activities"
           class="w-full h-full object-cover"
           loading="lazy">
    </div>
    
    <!-- Image 3: Cultural Events -->
    <div class="h-40 bg-gray-300 rounded-xl overflow-hidden shadow-xl hover:scale-[1.03] transition-transform duration-500">
      <img src="img/life2.jpg" 
           alt="Cultural day celebrations"
           class="w-full h-full object-cover"
           loading="lazy">
    </div>
  </div>
</section>

<!-- PRINCIPAL MESSAGE -->
<section class="py-24 bg-white reveal">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <div class="bg-white rounded-3xl shadow-2xl p-12 border">
      <h2 class="text-3xl font-bold text-blue-700 mb-6">Message from the Proprietor</h2>
      <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto">"At Seat of Wisdom School, we believe every child carries greatness within. Our dedication is to nurture that greatness through academic guidance, structured discipline, and moral development."</p>
    </div>
  </div>
</section>


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
<!-- JS: particles + reveal -->
<script>
const particles=document.getElementById("particles");
for(let i=0;i<25;i++){const d=document.createElement("div");d.classList.add("particle");d.style.left=Math.random()*100+"%";d.style.animationDuration=5+Math.random()*5+"s";particles.appendChild(d);}      
</script>
<script>
const revealEls=document.querySelectorAll(".reveal");
const obs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.remove("opacity-0","translate-y-10");e.target.classList.add("opacity-100","translate-y-0");}});},{threshold:0.2});
revealEls.forEach(el=>{el.classList.add("opacity-0","translate-y-10","transition-all","duration-700");obs.observe(el);});
</script>
<script>
window.addEventListener("scroll",()=>{
  const box=document.getElementById("lux-cta");
  const r=box.getBoundingClientRect().top;
  if(r<window.innerHeight-120){box.classList.add("opacity-100","translate-y-0");}
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
