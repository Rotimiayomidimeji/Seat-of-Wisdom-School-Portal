<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SEAT OF WISDOM SCHOOL — Home </title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .popup-show {
  opacity: 1 !important;
  pointer-events: auto !important;
  transform: translateY(0) !important;
}

  
    .service-card { position: relative; transition: box-shadow 0.3s ease; }
    .service-card:hover { box-shadow: 0 0 25px rgba(0,120,255,0.45); }
    .service-card::before {
      content: ""; position: absolute; inset: 0; border-radius: 1rem; padding: 2px;
      background: linear-gradient(45deg,#4ab3ff,#005eff);
      -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor; mask-composite: exclude;
      opacity: 0; transition: opacity .25s ease; pointer-events: none;
    }
    .service-card:hover::before { opacity: 1 }

    .particle { position:absolute; bottom:-20px; width:6px; height:6px; background:white; border-radius:50%; opacity:.8; animation:floatUp linear infinite; }
    @keyframes floatUp { from{transform:translateY(0);opacity:.8;} to{transform:translateY(-120vh);opacity:0;} }


    .reveal { opacity:0; transform:translateY(20px); transition:all .7s ease; }
    .reveal.show { opacity:1; transform:translateY(0); }

    /* Service Modal Responsive Fixes */
#service-modal {
  overflow-y: auto;
  align-items: flex-start;
  padding: 20px;
}

#service-modal-content {
  max-height: 85vh;
  overflow-y: auto;
  margin: auto;
  margin-top: 5vh;
  margin-bottom: 5vh;
}

/* Make close button more accessible */
#service-close {
  position: fixed !important;
  top: 20px !important;
  right: 20px !important;
  z-index: 10001;
  width: 44px !important;
  height: 44px !important;
  font-size: 20px !important;
  background: rgba(59, 130, 246, 0.9) !important;
  backdrop-filter: blur(5px);
  border: 2px solid white;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

/* Mobile-specific adjustments */
@media (max-width: 768px) {
  #service-modal {
    padding: 10px;
    align-items: flex-start;
    padding-top: 60px;
  }
  
  #service-modal-content {
    width: 95% !important;
    max-width: 95% !important;
    padding: 20px !important;
    max-height: 75vh;
    margin-top: 10px;
  }
  
  #service-close {
    top: 15px !important;
    right: 15px !important;
    width: 40px !important;
    height: 40px !important;
    font-size: 18px !important;
  }
  
  #service-modal-title {
    font-size: 1.5rem !important;
    margin-bottom: 15px !important;
  }
}

/* Small phones */
@media (max-width: 480px) {
  #service-modal-content {
    padding: 16px !important;
    max-height: 70vh;
  }
  
  #service-modal-title {
    font-size: 1.3rem !important;
  }
  
  /* Reduce text size on very small screens */
  #service-modal-desc {
    font-size: 0.95rem;
  }
  
  #service-modal-desc h4 {
    font-size: 1.1rem !important;
  }
}

/* Event modal also needs fixing */
#event-modal {
  align-items: flex-start;
  padding-top: 40px;
  overflow-y: auto;
}

#event-modal-content {
  max-height: 80vh;
  overflow-y: auto;
  margin: 20px auto;
}

/* Scrollbar styling */
#service-modal-content::-webkit-scrollbar,
#event-modal-content::-webkit-scrollbar {
  width: 6px;
}

#service-modal-content::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

#service-modal-content::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 10px;
}

#service-modal-content::-webkit-scrollbar-thumb:hover {
  background: #555;
}
#loading-bar {
  box-shadow: 0 0 10px rgba(231, 81, 35, 0.5);
}
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

<div id="loading-bar" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-pink-500 via-red-500 to-blue-500 z-[9999] transition-all duration-500 w-0"></div>

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
      <li><a href="#" class="text-blue-700 font-semibold">Home</a></li>
      <li><a href="about.php" class="hover:text-blue-700">About</a></li>
      <li><a href="services.php" class="hover:text-blue-700">Our Offers</a></li>
      <li><a href="events.php" class="hover:text-blue-700">Events</a></li>
      <li><a href="contact.php" class="hover:text-blue-700">Contact</a></li>
      <li><a href="Result-portal/login.php" class="hover:text-blue-700">Result Portal</a></li>
    </ul>
    <button id="menu-btn" class="md:hidden text-blue-700 text-3xl">☰</button>
  </nav>
  <div id="mobile-menu" class="hidden bg-white/95 backdrop-blur-lg shadow-lg md:hidden">
    <ul class="flex flex-col space-y-2 py-5 px-6 text-gray-700 font-semibold">
      <li><a href="#" class="block w-full px-4 py-3 rounded-lg bg-blue-100 text-blue-700 font-semibold">Home</a></li>
      <li><a href="about.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">About</a></li>
      <li><a href="services.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Our Offers</a></li>
      <li><a href="events.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Events</a></li>
      <li><a href="contact.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Contact</a></li>
      <li><a href="Result-portal/login.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Result Portal</a></li>
    </ul>
  </div>
</header>

<script>
  document.getElementById('menu-btn').addEventListener('click', ()=> document.getElementById('mobile-menu').classList.toggle('hidden'));
</script>

<!-- HERO -->
<section class="pt-28 pb-20 relative overflow-hidden bg-gradient-to-b from-blue-800 via-blue-700 to-blue-600 text-white">
  <div class="absolute inset-0 opacity-[0.15] bg-[url('https://www.toptal.com/designers/subtlepatterns/uploads/double-bubble-outline.png')] bg-repeat"></div>
  <div id="particles" class="absolute inset-0 pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

    <!-- Text -->
    <div class="text-center md:text-left">
      <h1 class="text-5xl font-extrabold mb-4 leading-tight">Buildng Minds, Shaping Futures</h1>
      <p class="opacity-90 max-w-xl text-lg mb-6">Welcome to SEAT OF WISDOM SCHOOL excellence with purpose from Nursery to Junior Secondary.</p>
      <a href="contact.php" class="inline-block px-6 py-3 bg-white text-blue-700 font-semibold rounded-full shadow hover:bg-gray-100 transition">Get Started</a>
    </div>

    <!-- Image placeholder -->
    <div class="w-full h-72 bg-white/20 rounded-xl shadow-inner overflow-hidden">
      <img src="img/hero.jpg" alt="School Hero Image" class="w-full h-full object-cover opacity-90" />
    </div>

  </div>
</section>

<script>
  const particles = document.getElementById('particles');
  for (let i=0;i<25;i++){ const d=document.createElement('div'); d.className='particle'; d.style.left=Math.random()*100+'%'; d.style.animationDuration=5+Math.random()*5+'s'; particles.appendChild(d); }
</script>


<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">


    <div class="order-1 md:order-1 w-full h-72 bg-gray-300 rounded-xl overflow-hidden">
      <img src="img/about.jpg" alt="School image" class="w-full h-full object-cover">
    </div>


    <div class="order-2 md:order-2">
      <h2 class="text-3xl font-extrabold text-blue-800 mb-4">About Our School</h2>
      <p class="text-gray-700 mb-4">Seat of Wisdom provides a balanced education that combines academic excellence with character formation. We nurture curiosity, discipline and compassion in every child.</p>
      <a href="about.php" class="inline-block px-6 py-3 bg-blue-700 text-white rounded-full font-semibold hover:bg-blue-800">Learn More</a>
    </div>

  </div>
</section>

<section id="services" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h3 class="text-3xl font-bold mb-10 text-gray-800">What We Offer</h3>
    <div class="grid md:grid-cols-3 gap-10">

      <!-- Nursery & Primary Education -->
      <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
        <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
          <img src="img/prim.jpg" 
               alt="Nursery and Primary Education"
               class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
               loading="lazy">
        </div>
        <h4 class="text-xl text-blue-700 mb-3 font-semibold">Nursery & Primary Education</h4>
        <p class="text-gray-700 mb-4">Foundational learning with modern teaching methods.</p>
        <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn" 
                data-service="nursery">Read More</button>
      </div>

      <!-- Junior Secondary -->
      <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
        <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
          <img src="img/secou.jpg"
               alt="African students studying"
               class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
               loading="lazy">
        </div>
        <h4 class="text-xl text-blue-700 mb-3 font-semibold">Junior Secondary</h4>
        <p class="text-gray-700 mb-4">Preparing students with strong academics and discipline.</p>
        <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn" 
                data-service="junior">Read More</button>
      </div>

      <!-- Result Checking Portal -->
      <div class="service-card bg-white rounded-2xl shadow-md border p-8 hover:shadow-xl transition duration-300">
        <div class="h-40 bg-gray-300 rounded-xl mb-5 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=400&fit=crop&auto=format"
               alt="Result Checking Portal"
               class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
               loading="lazy">
        </div>
        <h4 class="text-xl text-blue-700 mb-3 font-semibold">Result Checking Portal</h4>
        <p class="text-gray-700 mb-4">A seamless and secure online academic performance checker.</p>
        <button class="mt-4 px-5 py-2 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition read-more-btn" 
                data-service="portal">Read More</button>
      </div>

    </div>
  </div>
</section>

<!-- EVENTS (cards with View details) -->
<section id="events" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <h3 class="text-3xl font-bold mb-10 text-center">Upcoming Events</h3>

    <div class="grid md:grid-cols-3 gap-10">
      <!-- Event Card 1 -->
     <!-- Event Card 1 -->
<article class="bg-white rounded-2xl shadow-md overflow-hidden p-0 reveal" 
         data-title="Inter-House Sports" 
         data-date="2025-03-15" 
         data-desc="Our annual sports competition with students participating in various athletic events, team games, and friendly competitions."
         data-img="img/sport.jpg">
  <div class="h-40 bg-gray-300 rounded-t-2xl overflow-hidden">
    <img src="img/sport.jpg" 
         alt="Inter-House Sports"
         class="w-full h-full object-cover"
         loading="lazy">
  </div>
  <div class="p-6">
    <h4 class="font-semibold mb-2 text-gray-800">Inter-House Sports</h4>
    <p class="text-gray-600 mb-4">Annual sports competition with colourful activities.</p>
    <div class="flex items-center justify-between">
      <button class="open-event-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">
        View details
      </button>
      <a href="#" class="add-to-calendar text-sm text-blue-700 font-semibold hover:text-blue-900 transition">
        Add to calendar
      </a>
    </div>
  </div>
</article>

<!-- Event Card 2 -->
<article class="bg-white rounded-2xl shadow-md overflow-hidden p-0 reveal" 
         data-title="Cultural Day" 
         data-date="2025-04-04" 
         data-desc="Celebrating cultural heritage with traditional dances, music performances, and cultural exhibitions from various regions."
         data-img="img/culral.jpg">
  <div class="h-40 bg-gray-300 rounded-t-2xl overflow-hidden">
    <img src="img/culral.jpg" 
         alt="Cultural Day"
         class="w-full h-full object-cover"
         loading="lazy">
  </div>
  <div class="p-6">
    <h4 class="font-semibold mb-2 text-gray-800">Cultural Day</h4>
    <p class="text-gray-600 mb-4">A showcase of dance, music and heritage.</p>
    <div class="flex items-center justify-between">
      <button class="open-event-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">
        View details
      </button>
      <a href="#" class="add-to-calendar text-sm text-blue-700 font-semibold hover:text-blue-900 transition">
        Add to calendar
      </a>
    </div>
  </div>
</article>

<!-- Event Card 3 (Graduation Day) -->
<article class="bg-white rounded-2xl shadow-md overflow-hidden p-0 reveal" 
         data-title="Graduation Day" 
         data-date="2025-07-15" 
         data-desc="A joyful celebration marking the academic achievements of our students, featuring speeches, awards, and cultural performances."
         data-img="img/graduate.jpg" >
  <div class="h-40 bg-gray-300 rounded-t-2xl overflow-hidden">
    <img src="img/graduate.jpg"  
         alt="Graduation Day"
         class="w-full h-full object-cover"
         loading="lazy">
  </div>
  <div class="p-6">
    <h4 class="font-semibold mb-2 text-gray-800">Graduation Day</h4>
    <p class="text-gray-600 mb-4">Celebrating student achievements and milestones.</p>
    <div class="flex items-center justify-between">
      <button class="open-event-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">
        View details
      </button>
      <a href="#" class="add-to-calendar text-sm text-blue-700 font-semibold hover:text-blue-900 transition">
        Add to calendar
      </a>
    </div>
  </div>
</article>
    </div>
  </div>
</section>





<section id="contact" class="py-20 bg-gray-100">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div>
      <h3 class="text-3xl font-bold mb-4">Send Inquiry</h3>
      <p class="text-gray-700 mb-4">Reach out for inquiries, admissions, or support.</p>
      <p class="text-gray-700 mb-2">Phone: <span class="font-semibold">+234 806 770 5751</span></p>
      <p class="text-gray-700 mb-2">Email: <span class="font-semibold">seatwisdom2@gmail.com</span></p>
      <p class="text-gray-700">Address: <span class="font-semibold">Kado Kuchi Beside Chief Palace</span></p>
    </div>
<form id="inquiryForm" class="bg-white p-8 rounded-xl shadow space-y-5">
  <input id="inqName" type="text" placeholder="Your Name" class="w-full p-3 border rounded-lg" required>
  <input id="inqEmail" type="email" placeholder="Email Address" class="w-full p-3 border rounded-lg" required>
  <textarea id="inqMessage" placeholder="Message" class="w-full p-3 border rounded-lg h-32" required></textarea>

  <button id="inqBtn" type="button" class="w-full py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700">
    Send Message
  </button>
</form>

  </div>
</section>

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


<!-- SERVICE MODAL -->
<!-- SERVICE MODAL - IMPROVED -->
<div id="service-modal" class="fixed inset-0 bg-black/70 hidden flex items-start justify-center z-[9999] overflow-y-auto">
  <div id="service-modal-content" class="bg-white rounded-2xl shadow-2xl p-6 md:p-8 w-[95%] md:w-[90%] max-w-2xl relative transform translate-y-10 opacity-0 transition-all duration-300 mt-10 md:mt-20 mb-10">
    <!-- Close button positioned better -->
    <button id="service-close" class="fixed top-4 right-4 md:top-6 md:right-6 bg-blue-600 hover:bg-blue-800 text-white w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center shadow-lg z-50 border-2 border-white transition-all duration-200">✕</button>
    
    <div class="relative">
      <h2 id="service-modal-title" class="text-xl md:text-2xl font-bold text-blue-700 mb-4 md:mb-6 pr-10"></h2>
      <div id="service-modal-desc" class="text-gray-700 space-y-4 text-sm md:text-base max-h-[60vh] md:max-h-[65vh] overflow-y-auto pr-2"></div>
      
      <!-- Scroll indicator for mobile -->
      <div id="scroll-indicator" class="hidden md:flex items-center justify-center mt-4 text-gray-400 text-sm">
        <svg class="w-5 h-5 animate-bounce mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
        Scroll for more content
      </div>
    </div>
  </div>
</div>

<!-- EVENT MODAL - IMPROVED -->
<div id="event-modal" class="fixed inset-0 bg-black/60 hidden flex items-start justify-center z-50 overflow-y-auto py-10">
  <div id="event-modal-content" class="bg-white rounded-2xl max-w-3xl w-[95%] md:w-[90%] mx-auto overflow-hidden shadow-2xl p-4 md:p-6 transform translate-y-6 opacity-0 transition-all duration-300 my-4">
    <!-- Close button -->
    <div class="flex justify-between items-start mb-4">
      <div>
        <p id="event-modal-date" class="text-sm text-blue-700 font-semibold"></p>
        <h3 id="event-modal-title" class="text-xl md:text-2xl font-bold mt-1"></h3>
      </div>
      <button id="event-close" class="text-gray-500 hover:text-gray-700 text-xl bg-white rounded-full w-10 h-10 flex items-center justify-center shadow">✕</button>
    </div>
    
    <div class="mt-4 grid md:grid-cols-2 gap-4 md:gap-6">
      <div id="event-modal-img" class="h-48 md:h-64 bg-gray-200 rounded-lg bg-cover bg-center"></div>
      <div class="flex flex-col">
        <p id="event-modal-desc" class="text-gray-700 text-sm md:text-base"></p>
        <div class="mt-4 md:mt-6 flex flex-col sm:flex-row gap-3">
          <a id="event-modal-add" href="#" class="px-4 py-3 bg-blue-700 text-white rounded-full font-semibold hover:bg-blue-800 transition text-center">Add to Calendar</a>
          <a id="event-modal-gallery" href="#" class="px-4 py-3 border-2 border-blue-700 text-blue-700 rounded-full font-semibold hover:bg-blue-50 transition text-center">View Gallery</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup Notification -->
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

<script>
// Service modal logic with detailed content
const serviceModalEl = document.getElementById('service-modal');
const serviceContentEl = document.getElementById('service-modal-content');
const serviceCloseBtn = document.getElementById('service-close');
const serviceModalTitle = document.getElementById('service-modal-title');
const serviceModalDesc = document.getElementById('service-modal-desc');

// Detailed content for each service
const serviceDetails = {
  'nursery': {
    title: 'Nursery & Primary Education',
    content: `
      <div class="space-y-4">
        <p class="text-gray-700">Our Nursery and Primary program provides a strong foundation for lifelong learning through a blend of modern pedagogy and traditional values.</p>
        
        <h4 class="font-semibold text-blue-700 text-lg mt-4">Key Features:</h4>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
          <li><strong>Age-Appropriate Curriculum</strong>: Designed for children aged 2-11 years</li>
          <li><strong>Montessori-Inspired Learning</strong>: Hands-on activities that develop fine motor skills</li>
          <li><strong>Digital Literacy</strong>: Introduction to basic computer skills from Primary 3</li>
          <li><strong>Character Building</strong>: Weekly moral instruction and etiquette classes</li>
          <li><strong>Extracurricular Activities</strong>: Music, art, sports, and cultural programs</li>
        </ul>
        
        <h4 class="font-semibold text-blue-700 text-lg mt-4">Age Groups:</h4>
        <ul class="list-disc pl-5 space-y-1 text-gray-700">
          <li>Nursery: 2-4 years</li>
          <li>Pre-KG: 4-5 years</li>
          <li>Primary 1-6: 6-11 years</li>
        </ul>
        
        <div class="bg-blue-50 p-4 rounded-lg mt-4">
          <p class="text-blue-700 font-medium">Admission Requirements:</p>
          <p class="text-gray-700 text-sm">Birth certificate, medical report, and previous school records (where applicable).</p>
        </div>
      </div>
    `
  },
  'junior': {
    title: 'Junior Secondary Education',
    content: `
      <div class="space-y-4">
        <p class="text-gray-700">Our Junior Secondary program prepares students for academic excellence and personal growth through comprehensive education.</p>
        
        <h4 class="font-semibold text-blue-700 text-lg mt-4">Academic Program:</h4>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
          <li><strong>Core Subjects</strong>: Mathematics, English, Basic Science, Social Studies</li>
          <li><strong>Technology Education</strong>: Computer Studies, Basic Technology</li>
          <li><strong>Languages</strong>: French and Yoruba (optional)</li>
          <li><strong>Creative Arts</strong>: Music, Fine Arts, Cultural & Creative Arts</li>
          <li><strong>Vocational Studies</strong>: Home Economics, Agricultural Science</li>
        </ul>
        
        <h4 class="font-semibold text-blue-700 text-lg mt-4">Special Programs:</h4>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
          <li><strong>Leadership Training</strong>: Prefect system and student council</li>
          <li><strong>Career Guidance</strong>: Regular counseling and career talks</li>
          <li><strong>STEM Club</strong>: Science, Technology, Engineering, and Mathematics activities</li>
          <li><strong>Debate & Public Speaking</strong>: Weekly debate sessions</li>
          <li><strong>Sports Development</strong>: Football, basketball, athletics training</li>
        </ul>
        
        <h4 class="font-semibold text-blue-700 text-lg mt-4">Assessment:</h4>
        <p class="text-gray-700">Continuous assessment through:</p>
        <ul class="list-disc pl-5 space-y-1 text-gray-700">
          <li>Termly examinations</li>
          <li>Project-based assessments</li>
          <li>Practical demonstrations</li>
          <li>Online quizzes and tests</li>
        </ul>
      </div>
    `
  },
  'portal': {
    title: 'Result Checking Portal',
    content: `
      <div class="space-y-4">
        <p class="text-gray-700">Our secure online portal allows parents and guardians to monitor academic performance in real-time.</p>
        
        <h4 class="font-semibold text-blue-700 text-lg mt-4">Portal Features:</h4>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
          <li><strong>24/7 Access</strong>: Check results anytime, anywhere</li>
          <li><strong>Real-time Updates</strong>: Scores updated immediately after grading</li>
          <li><strong>Detailed Reports</strong>: Subject-by-subject performance analysis</li>
          <li><strong>Teacher Comments</strong>: Personalized feedback from instructors</li>

        </ul>
        
        <h4 class="font-semibold text-blue-700 text-lg mt-4">How to Access:</h4>
        <ol class="list-decimal pl-5 space-y-2 text-gray-700">
          <li>Visit: <code class="bg-gray-100 px-2 py-1 rounded">seatofwisdom.edu.ng/results</code></li>
          <li>Enter student admission number</li>
          
          <li>View and download results</li>
        </ol>
        
        <h4 class="font-semibold text-blue-700 text-lg mt-4">Security Features:</h4>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
          <li>End-to-end encryption</li>
          <li>Two-factor authentication option</li>
          <li>Secure login sessions</li>
          <li>Privacy-protected data storage</li>
        </ul>
        
        <div class="bg-green-50 p-4 rounded-lg mt-4">
          <p class="text-green-700 font-medium">Need Help?</p>
          <p class="text-gray-700 text-sm">Contact our IT support: <strong>portal-support@seatofwisdom.edu.ng</strong> or call <strong>080-XXXX-XXXX</strong></p>
        </div>
      </div>
    `
  }
};

// Event listeners for Read More buttons
document.querySelectorAll('.read-more-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const serviceKey = btn.dataset.service;
    
    if (serviceDetails[serviceKey]) {
      serviceModalTitle.textContent = serviceDetails[serviceKey].title;
      serviceModalDesc.innerHTML = serviceDetails[serviceKey].content;
    } else {
      serviceModalTitle.textContent = 'Service Details';
      serviceModalDesc.innerHTML = `
        <div class="space-y-3">
          <p class="text-gray-700">Comprehensive information about our educational services.</p>
          <p class="text-gray-700">For detailed information about specific programs, please contact our admissions office.</p>
          <div class="bg-blue-50 p-4 rounded-lg">
            <p class="font-medium text-blue-700">Contact Admissions:</p>
            <p class="text-gray-700 text-sm">Email: admissions@seatofwisdom.edu.ng</p>
            <p class="text-gray-700 text-sm">Phone: 080-XXXX-XXXX</p>
          </div>
        </div>
      `;
    }
    
    // Show modal with animation
    serviceModalEl.classList.remove('hidden');
    requestAnimationFrame(() => { 
      serviceContentEl.classList.remove('translate-y-10'); 
      serviceContentEl.classList.add('opacity-100'); 
      serviceContentEl.style.transform = 'translateY(0)'; 
    });
  });
});

// Close modal functions
serviceCloseBtn.addEventListener('click', closeServiceModal);
serviceModalEl.addEventListener('click', (e) => { 
  if (e.target === serviceModalEl) closeServiceModal(); 
});

function closeServiceModal() { 
  serviceContentEl.classList.add('translate-y-10'); 
  serviceContentEl.classList.remove('opacity-100'); 
  setTimeout(() => {
    serviceModalEl.classList.add('hidden');
    document.body.style.overflow = 'auto'; // Restore scrolling
  }, 280); 
}

// Event modal logic (unique names)
const eventModalEl = document.getElementById('event-modal');
const eventContentEl = document.getElementById('event-modal-content');
const eventCloseBtn = document.getElementById('event-close');
const eventModalTitle = document.getElementById('event-modal-title');
const eventModalDate = document.getElementById('event-modal-date');
const eventModalDesc = document.getElementById('event-modal-desc');
const eventModalImg = document.getElementById('event-modal-img');
const eventAdd = document.getElementById('event-modal-add');
const eventGallery = document.getElementById('event-modal-gallery');

document.querySelectorAll('.open-event-modal').forEach(btn => {
  btn.addEventListener('click', (e)=>{
    const card = e.target.closest('article');
    eventModalTitle.textContent = card.getAttribute('data-title') || card.querySelector('h4')?.textContent || 'Event';
    const rawDate = card.getAttribute('data-date');
    eventModalDate.textContent = rawDate ? new Date(rawDate).toLocaleDateString() : '';
    eventModalDesc.textContent = card.getAttribute('data-desc') || '';
    eventModalImg.style.backgroundImage = `url('${card.getAttribute('data-img') || "https://via.placeholder.com/600x400"}')`;
    // Generate ICS file for calendar
const title = eventModalTitle.textContent;
const date = rawDate ? new Date(rawDate) : new Date();
const y = date.getFullYear();
const m = String(date.getMonth()+1).padStart(2,'0');
const d = String(date.getDate()).padStart(2,'0');
const ics = `BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
SUMMARY:${title}
DTSTART:${y}${m}${d}T090000
DTEND:${y}${m}${d}T100000
END:VEVENT
END:VCALENDAR`;
const blob = new Blob([ics],{type:'text/calendar'});
const url = URL.createObjectURL(blob);
eventAdd.href = url;
eventAdd.download = `${title}.ics`;

eventGallery.href = '#';

    eventModalEl.classList.remove('hidden');
    requestAnimationFrame(()=>{ eventContentEl.classList.remove('translate-y-6'); eventContentEl.classList.add('opacity-100'); eventContentEl.style.transform='translateY(0)'; });
  });
});

eventCloseBtn.addEventListener('click', closeEventModal);
eventModalEl.addEventListener('click',(e)=>{ if(e.target === eventModalEl) closeEventModal(); });
function closeEventModal(){ eventContentEl.classList.add('translate-y-6'); eventContentEl.classList.remove('opacity-100'); setTimeout(()=> eventModalEl.classList.add('hidden'), 280); }

// Reveal on scroll
const revealEls = document.querySelectorAll('.reveal');
const obs = new IntersectionObserver(entries=>{ entries.forEach(entry=>{ if(entry.isIntersecting){ entry.target.classList.add('show'); obs.unobserve(entry.target); } }); }, {threshold:0.15});
revealEls.forEach(r=> obs.observe(r));

const addBtns = document.querySelectorAll('.add-to-calendar');
addBtns.forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    const card = btn.closest('article');
    const title = card.getAttribute('data-title');
    const rawDate = card.getAttribute('data-date');
    const date = rawDate ? new Date(rawDate) : new Date();
    const y = date.getFullYear();
    const m = String(date.getMonth()+1).padStart(2,'0');
    const d = String(date.getDate()).padStart(2,'0');
    const ics = `BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
SUMMARY:${title}
DTSTART:${y}${m}${d}T090000
DTEND:${y}${m}${d}T100000
END:VEVENT
END:VCALENDAR`;
    const blob = new Blob([ics],{type:'text/calendar'});
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `${title}.ics`;
    document.body.appendChild(a);
    a.click();
    a.remove();
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


<script>
document.getElementById("inqBtn").addEventListener("click", function () {
    const name = document.getElementById("inqName").value.trim();
    const email = document.getElementById("inqEmail").value.trim();
    const message = document.getElementById("inqMessage").value.trim();
    const btn = document.getElementById("inqBtn");

    if (!name || !email || !message) {
        showPopup("Please fill all fields.", false);
        return;
    }

    btn.disabled = true;
    btn.innerHTML = "Sending... ⏳";

    fetch("mails/send-enquiry.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: `name=${name}&email=${email}&message=${message}`
    })
    .then(res => res.text())
    .then(data => {
        if (data === "success") {
            btn.innerHTML = "Sent ✔";
            showPopup("Your inquiry has been sent successfully! We will reply shortly.", true);
            document.getElementById("inquiryForm").reset();
        } else {
            btn.innerHTML = "Send Message";
            showPopup("Something went wrong. Please try again.", false);
        }
        btn.disabled = false;
    });
});

/* Beautiful popup */
function showPopup(message, success = true) {
    const popup = document.createElement("div");
    popup.innerHTML = `
      <div style="
        position:fixed;top:0;left:0;width:100%;height:100%;
        background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;
        z-index:9999;
      ">
        <div style="
          background:white;padding:25px;border-radius:12px;max-width:350px;width:90%;
          text-align:center;box-shadow:0 5px 20px rgba(0,0,0,0.2);
        ">
          <h3 style="font-size:20px;color:${success ? '#0a8a27' : '#c90000'};">
            ${success ? "✔ Success" : "⚠ Error"}
          </h3>
          <p style="margin-top:10px;font-size:15px;color:#555;">${message}</p>
          <button onclick="this.parentElement.parentElement.remove()"
            style="margin-top:20px;padding:10px 25px;border:none;border-radius:8px;
            background:${success ? '#0a8a27' : '#c90000'};color:white;font-weight:bold;cursor:pointer;">
            OK
          </button>
        </div>
      </div>
    `;
    document.body.appendChild(popup);
}
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
