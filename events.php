<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Events • Seat of Wisdom School</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- SwiperJS (slider) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <style>
    .popup-show {
      opacity: 1 !important;
      pointer-events: auto !important;
      transform: translateY(0) !important;
    }
    .particle { position:absolute; bottom:-20px; width:6px; height:6px; background:white; border-radius:50%; opacity:.8; animation:floatUp linear infinite; }
    @keyframes floatUp { from{transform:translateY(0);opacity:.8;} to{transform:translateY(-120vh);opacity:0;} }

    .reveal { opacity:0; transform:translateY(20px); transition:all .7s ease; }
    .reveal.show { opacity:1; transform:translateY(0); }
    
    /* Gallery highlight animation */
    .highlight-gallery {
      animation: pulse-highlight 1.5s ease-in-out;
      position: relative;
    }

    @keyframes pulse-highlight {
      0% {
        box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
      }
      70% {
        box-shadow: 0 0 0 20px rgba(59, 130, 246, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
      }
    }


    /* Fullscreen Image Modal Styles */
/* Fullscreen Image Modal Styles */
#fullImageModal {
  transition: opacity 0.3s ease;
  touch-action: none; /* Allow custom touch handling */
}

#fullImageModal.fade-out {
  opacity: 0;
}

.fullscreen-image {
  /* Base styles */
  max-width: 90vw;
  max-height: 85vh;
  object-fit: contain;
  border-radius: 10px;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
  transition: transform 0.2s ease;
  
  /* Better mobile touch experience */
  -webkit-user-select: none;
  user-select: none;
  -webkit-touch-callout: none;
}

/* Mobile-specific optimization */
@media (max-width: 768px) {
  #fullImageModal {
    padding: 10px;
  }
  
  .fullscreen-image {
    /* Fill more screen space on mobile */
    max-width: 100%;
    max-height: 85vh;
    width: auto;
    height: auto;
    
    /* Better touch interaction */
    touch-action: pan-x pan-y pinch-zoom;
  }
  
  /* Portrait phones */
  @media (max-width: 480px) and (orientation: portrait) {
    .fullscreen-image {
      max-height: 75vh;
      max-width: 100%;
      border-radius: 5px;
    }
  }
  
  /* Landscape phones */
  @media (max-width: 768px) and (orientation: landscape) {
    .fullscreen-image {
      max-height: 80vh;
      max-width: 90vw;
    }
  }
  
  /* Tablets */
  @media (min-width: 481px) and (max-width: 768px) {
    .fullscreen-image {
      max-height: 80vh;
      max-width: 95vw;
    }
  }
}

/* Close button adjustments for mobile */
.close-fullscreen {
  position: absolute;
  top: 20px;
  right: 20px;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  border: none;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  font-size: 24px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  z-index: 10001;
  touch-action: manipulation; /* Better touch response */
}

/* Mobile close button */
@media (max-width: 768px) {
  .close-fullscreen {
    width: 44px;
    height: 44px;
    font-size: 20px;
    top: 16px;
    right: 16px;
    background: rgba(0, 0, 0, 0.8);
  }
  
  /* Make it easier to tap on very small screens */
  @media (max-width: 360px) {
    .close-fullscreen {
      width: 42px;
      height: 42px;
      top: 12px;
      right: 12px;
    }
  }
}

.close-fullscreen:hover,
.close-fullscreen:active {
  background: rgba(0, 0, 0, 0.9);
  transform: scale(1.05);
}

/* Ensure swiper slides are clickable */
.swiper-slide {
  cursor: pointer;
}

.swiper-slide:hover {
  transform: scale(1.02);
}

/* Optional: Add a loading indicator */
.fullscreen-image.loading {
  opacity: 0.5;
}

/* Optional: Add swipe-down to close hint on mobile */
@media (max-width: 768px) {
  #fullImageModal::after {
    content: 'Swipe down or tap X to close';
    position: absolute;
    bottom: 20px;
    left: 0;
    right: 0;
    text-align: center;
    color: rgba(255, 255, 255, 0.7);
    font-size: 14px;
    padding: 8px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 20px;
    margin: 0 20px;
  }
}

/* Modal button container styling */
#eventModal .flex.gap-4 {
  display: flex;
  gap: 1rem;
}

#eventModal a {
  flex-shrink: 0;
}
    /* Filter button active state */
    .filter-btn.active {
      background-color: #1e40af !important;
    }

    /* Smooth transitions */
    #eventsGrid article {
      transition: all 0.3s ease;
    }

    /* Hover effects for event cards */
    #eventsGrid article:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    /* Swiper slide clickable */
    .swiper-slide {
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .swiper-slide:hover {
      transform: scale(1.02);
    }
    
    /* Modal image larger */
    #modalImg {
      min-height: 300px;
    }
    #loading-bar {
  box-shadow: 0 0 10px rgba(231, 81, 35, 0.5);
}
  </style>
  <!-- jsPDF CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<div id="loading-bar" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-pink-500 via-blue-500 to-blue-500 z-[9999] transition-all duration-500 w-0"></div>
  <!-- HEADER -->
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
        <li><a href="about.php" class="hover:text-blue-700">About</a></li>
        <li><a href="services.php" class="hover:text-blue-700">Our Offers</a></li>
        <li><a href="#" class="text-blue-700 font-semibold">Events</a></li>
        <li><a href="contact.php" class="hover:text-blue-700">Contact</a></li>
        <li><a href="Result-portal/login.php" class="hover:text-blue-700">Check Result</a></li>
      </ul>

      <button id="menu-btn" class="md:hidden text-blue-700 text-3xl">☰</button>
    </nav>
    <div id="mobile-menu" class="hidden bg-white/95 backdrop-blur-lg shadow-lg md:hidden">
      <ul class="flex flex-col space-y-2 py-5 px-6 text-gray-700 font-semibold">
        <li><a href="index.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Home</a></li>
        <li><a href="about.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">About</a></li>
        <li><a href="services.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Our Offers</a></li>
        <li><a href="#" class="block w-full text-blue-700 px-4 py-3 rounded-lg bg-blue-100">Events</a></li>
        <li><a href="contact.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Contact</a></li>
        <li><a href="Result-portal/login.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Check Result</a></li>
      </ul>
    </div>
  </header>

  <!-- HERO -->
  <section class="pt-32 pb-24 relative overflow-hidden bg-gradient-to-b from-blue-800 via-blue-700 to-blue-600 text-white">
    <div class="absolute inset-0 opacity-[0.15] bg-[url('https://www.toptal.com/designers/subtlepatterns/uploads/double-bubble-outline.png')] bg-repeat"></div>
    <div id="particles" class="absolute inset-0 pointer-events-none"></div>

    <div class="max-w-5xl mx-auto text-center px-6">
      <h1 class="text-5xl font-extrabold mb-4">School Events & Activities</h1>
      <p class="opacity-90 max-w-2xl mx-auto text-lg">Explore our programs, ceremonies, and community activities.</p>
    </div>
  </section>

  <!-- Fullscreen Image Modal -->
<div id="fullImageModal" class="fixed inset-0 bg-black/90 hidden items-center justify-center z-[9999] p-4">
  <button class="close-fullscreen">✕</button>
  <img id="fullscreenImage" class="fullscreen-image" src="" alt="Fullscreen view">
</div>
  <!-- Swiper Gallery (UPDATED - No calendar/view buttons, larger images) -->
  <section class="max-w-7xl mx-auto px-6 pt-16 reveal bg-gradient-to-b from-blue-200/20 via-blue-300/10 to-blue-200/20 rounded-3xl py-12">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide rounded-3xl overflow-hidden bg-white shadow-xl" 
             data-title="Inter-House Sports Competition" 
             data-date="2025-03-15" 
             data-desc="A day of athletic excellence and team spirit with students competing in various track and field events, relays, and team games. All houses participate in this annual competition showcasing sportsmanship and healthy rivalry."
             data-img="img/img/hero.jpg">
          <div class="h-64 bg-center bg-cover relative" style="background-image:url('img/hero.jpg')">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
          </div>
          <div class="p-8">
            <p class="text-sm text-blue-700 font-semibold">March 15, 2025</p>
            <h3 class="text-2xl font-bold mt-2">Educational Excursion</h3>
            <p class="text-gray-600 mt-4 text-lg">Learning outside the classroom through educational trips.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide rounded-3xl overflow-hidden bg-white shadow-xl" 
             data-title="Cultural Day Celebration" 
             data-date="2025-04-04" 
             data-desc="Experience the rich diversity of our school community through traditional dances, cultural exhibitions, food tasting, and costume parades. Students showcase their heritage through vibrant performances and displays."
             data-img="img/culral.jpg">
          <div class="h-64 bg-center bg-cover relative" style="background-image:url('img/culral.jpg')">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
          </div>
          <div class="p-8">
            <p class="text-sm text-blue-700 font-semibold">April 4, 2025</p>
            <h3 class="text-2xl font-bold mt-2">Cultural Day Celebration</h3>
            <p class="text-gray-600 mt-4 text-lg">Colourful displays, traditional dances, and cultural performances.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide rounded-3xl overflow-hidden bg-white shadow-xl" 
             data-title="Graduation Ceremony" 
             data-date="2025-06-10" 
             data-desc="Celebrating the academic achievements of our graduating students with award presentations, keynote speeches, and the traditional cap toss ceremony. Parents and guardians are invited to witness this milestone achievement."
             data-img="img/graduate.jpg">
          <div class="h-64 bg-center bg-cover relative" style="background-image:url('img/graduate.jpg')">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
          </div>
          <div class="p-8">
            <p class="text-sm text-blue-700 font-semibold">June 10, 2025</p>
            <h3 class="text-2xl font-bold mt-2">Graduation Ceremony</h3>
            <p class="text-gray-600 mt-4 text-lg">Celebrating academic achievements and milestones of our graduates.</p>
          </div>
        </div>

        <!-- Slide 4: NEW EVENT -->
        <div class="swiper-slide rounded-3xl overflow-hidden bg-white shadow-xl" 
             data-title="Annual Science Fair" 
             data-date="2025-05-20" 
             data-desc="Students showcase innovative science projects and experiments including robotics demonstrations, chemistry experiments, environmental projects, and interactive displays. The fair promotes scientific curiosity and innovation."
             data-img="img/life.jpg">
          <div class="h-64 bg-center bg-cover relative" style="background-image:url('img/life.jpg')">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
          </div>
          <div class="p-8">
            <p class="text-sm text-blue-700 font-semibold">May 20, 2025</p>
            <h3 class="text-2xl font-bold mt-2">Annual Science Fair</h3>
            <p class="text-gray-600 mt-4 text-lg">Showcasing student innovations and scientific projects.</p>
          </div>
        </div>

        <!-- Slide 5: NEW EVENT -->
        <div class="swiper-slide rounded-3xl overflow-hidden bg-white shadow-xl" 
             data-title="Inter-House Sports Competition" 
             date="2025-07-15" 
             data-desc="A day of athletics, teamwork and house pride with various sports competitions including track events, relays, and team games. Students compete for their respective houses in a spirit of healthy competition."
             data-img="img/sport.jpg">
          <div class="h-64 bg-center bg-cover relative" style="background-image:url('img/sport.jpg')">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
          </div>
          <div class="p-8">
            <p class="text-sm text-blue-700 font-semibold">July 15, 2025</p>
            <h3 class="text-2xl font-bold mt-2">Inter-House Sports Competition</h3>
            <p class="text-gray-600 mt-4 text-lg">Join us for athletics, relays and spirited house rivalry.</p>
          </div>
        </div>

        <!-- Slide 6: NEW EVENT -->
        <!-- <div class="swiper-slide rounded-3xl overflow-hidden bg-white shadow-xl" 
             data-title="Career Day" 
             data-date="2025-09-10" 
             data-desc="Professionals from various fields visit the school to share their career experiences and insights with students. Interactive sessions help students explore different career paths and make informed decisions about their future."
             data-img="https://images.unsplash.com/photo-1551836026-d5c2c26fc1e7?w=1200&h=600&fit=crop&auto=format">
          <div class="h-64 bg-center bg-cover relative" style="background-image:url('https://images.unsplash.com/photo-1551836026-d5c2c26fc1e7?w=1200&h=600&fit=crop&auto=format')">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
          </div>
          <div class="p-8">
            <p class="text-sm text-blue-700 font-semibold">September 10, 2025</p>
            <h3 class="text-2xl font-bold mt-2">Career Day</h3>
            <p class="text-gray-600 mt-4 text-lg">Exploring future career paths with industry professionals.</p>
          </div>
        </div> -->
      </div>
      <div class="swiper-pagination mt-6"></div>
    </div>
  </section>

  <!-- FILTER & UPCOMING EVENTS (UPDATED - Removed Featured filter, added more past events) -->
  <section class="py-16 max-w-7xl mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center justify-between mb-8 gap-4">
      <h3 class="text-3xl font-bold text-blue-800">School Events</h3>
      
      <div class="flex items-center gap-3">
        <button data-filter="all" class="filter-btn px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition active">All</button>
        <button data-filter="upcoming" class="filter-btn px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">Upcoming</button>
        <button data-filter="past" class="filter-btn px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">Past</button>
      </div>
    </div>

    <div id="eventsGrid" class="grid md:grid-cols-3 gap-8">
      <!-- Event 1: Inter-House Sports Competition -->


      <!-- Event 2: Cultural Day Celebration -->
      <article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" data-category="upcoming" data-title="Cultural Day Celebration" data-date="2025-04-04" data-desc="Colourful performances and heritage displays showcasing the rich diversity of our school community. Features traditional dances, cultural exhibitions, food tasting, and costume parades." data-img="img/culral.jpg">
        <div class="h-48 bg-cover bg-center relative" style="background-image:url('img/culral.jpg')">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
        <div class="p-6">
          <p class="text-sm text-blue-700 font-semibold">April 4, 2025</p>
          <h4 class="text-xl font-bold mt-2">Cultural Day Celebration</h4>
          <p class="mt-3 text-gray-600">A showcase of dance, music and national heritage.</p>
          <div class="mt-4 flex items-center justify-between">
            <button class="open-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">View details</button>
            <a href="#" class="add-to-calendar text-sm text-blue-700 font-semibold hover:text-blue-900 transition" data-title="Cultural Day Celebration" data-date="2025-04-04">Add to calendar</a>
          </div>
        </div>
      </article>

      <!-- Event 3: Graduation Ceremony -->
<article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" data-category="festive" data-title="Christmas Carroll Night" data-date="2024-12-24" data-desc="Join us for a magical Christmas Carroll evening filled with carols, festive performances, and holiday cheer. Our students will present traditional Christmas plays, sing carols, and spread the joy of the season. Featuring special guest performances, Santa's visit, and festive treats for everyone!" data-img="img/carol.jpg">
        <div class="h-48 bg-cover bg-center relative" style="background-image:url('img/carol.jpg')">
          <div class="absolute inset-0 bg-gradient-to-t from-red-800/30 to-transparent"></div>
          <div class="absolute top-3 left-3">
            <span class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded-full">🎄 Festive Event</span>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center gap-2 mb-1">
            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
            </svg>
            <p class="text-sm text-red-700 font-semibold">December 24, 2024 • 6:00 PM</p>
          </div>
          <h4 class="text-xl font-bold mt-2 text-gray-800">Christmas Carroll Night</h4>
          <div class="flex items-center gap-2 mt-2">
            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-600">School Auditorium</span>
          </div>
          <p class="mt-3 text-gray-600">A magical evening of carols, festive performances, and holiday cheer with special guest appearances!</p>
          

            
            <div class="flex items-center justify-between">
              <button class="open-modal px-5 py-2.5 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-full text-sm font-semibold hover:from-red-700 hover:to-red-800 transition shadow-md hover:shadow-lg flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                View Details
              </button>
              <a href="#" class="add-to-calendar text-sm text-red-600 font-semibold hover:text-red-800 transition flex items-center gap-1" data-title="Christmas Carroll Night" data-date="2024-12-24T18:00">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Add to Calendar
              </a>
            </div>
          </div>

      </article>

      <!-- Past Event 1: Academic Excellence Day -->
      <article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" data-category="past" data-title="Academic Excellence Day" data-date="2024-11-20" data-desc="Honouring top performers from last term. Students received awards for outstanding performance in various subjects, along with special recognition for improvement and dedication." data-img="img/graduate.jpg">
        <div class="h-48 bg-cover bg-center relative" style="background-image:url('img/graduate.jpg')">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
        <div class="p-6">
          <p class="text-sm text-blue-700 font-semibold">Nov 20, 2024</p>
          <h4 class="text-xl font-bold mt-2">Academic Excellence Day</h4>
          <p class="mt-3 text-gray-600">Recognising outstanding academic achievements.</p>
          <div class="mt-4 flex items-center justify-between">
            <button class="open-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">View details</button>
            <a href="#swiper-section" class="goto-gallery text-sm text-blue-700 font-semibold hover:text-blue-900 transition">View gallery</a>
          </div>
        </div>
      </article>

            <article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" data-category="past" data-title="Inter-House Sports Competition" data-date="2025-11-15" data-desc="A day of athletics, teamwork and house pride with various sports competitions including track events, relays, and team games. Students compete for their respective houses in a spirit of healthy competition." data-img="img/sport.jpg">
        <div class="h-48 bg-cover bg-center relative" style="background-image:url('img/sport.jpg')">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
        <div class="p-6">
          <p class="text-sm text-blue-700 font-semibold">July 15, 2025</p>
          <h4 class="text-xl font-bold mt-2">Inter-House Sports Competition</h4>
          <p class="mt-3 text-gray-600">Join us for athletics, relays and spirited house rivalry.</p>
          <div class="mt-4 flex items-center justify-between">
            <button class="open-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">View details</button>
            <a href="#swiper-section" class="goto-gallery text-sm text-blue-700 font-semibold hover:text-blue-900 transition">View gallery</a>
          </div>
        </div>
      </article>
      <!-- Past Event 2: Science Fair -->
      <article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" data-category="past" data-title="Annual Science Fair" data-date="2024-10-15" data-desc="Students showcased innovative science projects and experiments. The fair featured robotics demonstrations, chemistry experiments, environmental projects, and interactive displays." data-img="img/life.jpg">
        <div class="h-48 bg-cover bg-center relative" style="background-image:url('img/life.jpg')">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
        <div class="p-6">
          <p class="text-sm text-blue-700 font-semibold">Oct 15, 2024</p>
          <h4 class="text-xl font-bold mt-2">Annual Science Fair</h4>
          <p class="mt-3 text-gray-600">Showcasing student innovations in science and technology.</p>
          <div class="mt-4 flex items-center justify-between">
            <button class="open-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">View details</button>
            <a href="#swiper-section" class="goto-gallery text-sm text-blue-700 font-semibold hover:text-blue-900 transition">View gallery</a>
          </div>
        </div>
      </article>

<article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" 
         data-category="past" 
         data-title="Christmas Celebration 2024" 
         data-date="2024-12-20" 
         data-desc="Our annual Christmas celebration filled with joy, carols, and festive activities. Students performed Christmas plays, sang carols, and participated in gift exchanges. The event featured a special visit from Santa Claus and ended with a festive party."
         data-img="img/chrismass.jpg">
  <div class="h-48 bg-cover bg-center relative" style="background-image:url('img/chrismass.jpg')">
    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
  </div>
  <div class="p-6">
    <p class="text-sm text-blue-700 font-semibold">Dec 20, 2024</p>
    <h4 class="text-xl font-bold mt-2">Christmas Celebration</h4>
    <p class="mt-3 text-gray-600">Festive Christmas celebration with carols, plays, and gifts.</p>
    <div class="mt-4 flex items-center justify-between">
      <button class="open-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">View details</button>
      <a href="#swiper-section" class="goto-gallery text-sm text-blue-700 font-semibold hover:text-blue-900 transition">View gallery</a>
    </div>
  </div>
</article>

      <!-- Past Event 4: NEW - School Excursion -->
      <article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" data-category="past" data-title="Educational Excursion" data-date="2024-08-10" data-desc="Students visited historical sites and museums as part of their learning experience. The excursion provided practical learning opportunities and enriched classroom knowledge with real-world applications." data-img="img/hero.jpg">
        <div class="h-48 bg-cover bg-center relative" style="background-image:url('img/hero.jpg')">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
        <div class="p-6">
          <p class="text-sm text-blue-700 font-semibold">Aug 10, 2024</p>
          <h4 class="text-xl font-bold mt-2">Educational Excursion</h4>
          <p class="mt-3 text-gray-600">Learning outside the classroom through educational trips.</p>
          <div class="mt-4 flex items-center justify-between">
            <button class="open-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">View details</button>
            <a href="#swiper-section" class="goto-gallery text-sm text-blue-700 font-semibold hover:text-blue-900 transition">View gallery</a>
          </div>
        </div>
      </article>

      <!-- Upcoming Event 5: NEW - Career Day -->
      <!-- <article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" data-category="upcoming" data-title="Career Day" data-date="2025-09-10" data-desc="Professionals from various fields will visit the school to share their career experiences and insights with students. Interactive sessions will help students explore different career paths and make informed decisions about their future." data-img="https://images.unsplash.com/photo-1551836026-d5c2c26fc1e7?w=800&h=500&fit=crop&auto=format">
        <div class="h-48 bg-cover bg-center relative" style="background-image:url('https://images.unsplash.com/photo-1551836026-d5c2c26fc1e7?w=800&h=500&fit=crop&auto=format')">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
        <div class="p-6">
          <p class="text-sm text-blue-700 font-semibold">Sep 10, 2025</p>
          <h4 class="text-xl font-bold mt-2">Career Day</h4>
          <p class="mt-3 text-gray-600">Exploring future career paths with industry professionals.</p>
          <div class="mt-4 flex items-center justify-between">
            <button class="open-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">View details</button>
            <a href="#" class="add-to-calendar text-sm text-blue-700 font-semibold hover:text-blue-900 transition" data-title="Career Day" data-date="2025-09-10">Add to calendar</a>
          </div>
        </div>
      </article> -->

      <!-- Upcoming Event 6: NEW - Art Exhibition -->
      <!-- <article class="bg-white rounded-2xl shadow-md overflow-hidden reveal" data-category="upcoming" data-title="Art Exhibition" data-date="2025-07-15" data-desc="Showcasing the artistic talents of our students through paintings, sculptures, digital art, and craft works. The exhibition features works from all grade levels and celebrates creativity and self-expression." data-img="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=800&h=500&fit=crop&auto=format">
        <div class="h-48 bg-cover bg-center relative" style="background-image:url('https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=800&h=500&fit=crop&auto=format')">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
        <div class="p-6">
          <p class="text-sm text-blue-700 font-semibold">July 15, 2025</p>
          <h4 class="text-xl font-bold mt-2">Annual Art Exhibition</h4>
          <p class="mt-3 text-gray-600">Displaying creative works and artistic talents of our students.</p>
          <div class="mt-4 flex items-center justify-between">
            <button class="open-modal px-4 py-2 bg-blue-700 text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">View details</button>
            <a href="#" class="add-to-calendar text-sm text-blue-700 font-semibold hover:text-blue-900 transition" data-title="Art Exhibition" data-date="2025-07-15">Add to calendar</a>
          </div>
        </div>
      </article> -->
    </div>

    <div class="mt-10 text-center">
      <button id="downloadUpcoming" class="inline-block bg-blue-700 text-white px-6 py-3 rounded-full font-semibold shadow hover:bg-blue-800 transition">Download Upcoming Events Calendar (PDF)</button>
    </div>
  </section>

  <!-- Modal -->
  <div id="eventModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full mx-auto overflow-hidden shadow-2xl">
      <div class="p-8">
        <div class="flex justify-between items-start">
          <div>
            <p id="modalDate" class="text-sm text-blue-700 font-semibold"></p>
            <h3 id="modalTitle" class="text-3xl font-bold mt-2"></h3>
          </div>
          <button id="closeModal" class="text-gray-500 text-2xl hover:text-gray-700">✕</button>
        </div>

        <div class="mt-6 grid md:grid-cols-2 gap-8">
          <div id="modalImg" class="min-h-64 bg-gray-200 rounded-lg bg-cover bg-center"></div>
          <div class="flex flex-col">
            <p id="modalDesc" class="text-gray-700 text-lg leading-relaxed"></p>
            <div class="mt-8 flex gap-4">
              <a id="modalAddCal" href="#" class="px-5 py-3 bg-blue-700 text-white rounded-full font-semibold hover:bg-blue-800 transition">Add to Calendar</a>
              <a id="modalGallery" href="#swiper-section" class="goto-gallery-modal px-5 py-3 border-2 border-blue-700 text-blue-700 rounded-full font-semibold hover:bg-blue-50 transition">View Gallery</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Countdown Section -->
<section class="py-20 bg-gradient-to-b from-blue-100/50 to-blue-50 text-center">
  <h2 class="text-4xl font-extrabold text-blue-900 mb-4">Next Event Starts In</h2>
  <p class="text-lg text-gray-700 mb-10">Stay prepared for the next big activity</p>

  <div class="max-w-3xl mx-auto backdrop-blur-xl bg-blue-900 shadow-2xl rounded-3xl p-10 border border-white/50">
    <div id="countdown-container">
      <div id="countdown" class="flex justify-center gap-12 text-4xl font-bold tracking-wide text-white drop-shadow">
        <div><span id="days">00</span><br><span class="text-sm font-normal text-white">Days</span></div>
        <div><span id="hours">00</span><br><span class="text-sm font-normal text-white">Hours</span></div>
        <div><span id="minutes">00</span><br><span class="text-sm font-normal text-white">Minutes</span></div>
        <div><span id="seconds">00</span><br><span class="text-sm font-normal text-white">Seconds</span></div>
      </div>
      <!-- Status message will be inserted here by JavaScript -->
    </div>
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

  <div id="popup" style="position: fixed; bottom: 30px; right: 30px; background: white; padding: 18px 22px; border-radius: 12px; box-shadow: 0px 8px 25px rgba(0,0,0,0.15); border-left: 5px solid #1e3a8a; font-family: Arial, sans-serif; font-size: 15px; color: #333; opacity: 0; pointer-events: none; transform: translateY(20px); transition: all .35s ease; z-index: 9999;"></div>

  <script>
    // Mobile menu
    document.getElementById('menu-btn').addEventListener('click', () => document.getElementById('mobile-menu').classList.toggle('hidden'));

    // Particles animation
    const particles = document.getElementById("particles");
    for(let i=0; i<25; i++){
      const d = document.createElement("div");
      d.classList.add("particle");
      d.style.left = Math.random()*100+"%";
      d.style.animationDuration = 5+Math.random()*5+"s";
      particles.appendChild(d);
    }

    // Reveal on scroll
    const reveals = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(entry=>{ 
        if(entry.isIntersecting){ 
          entry.target.classList.add('show'); 
          io.unobserve(entry.target); 
        } 
      });
    }, {threshold: 0.15});
    reveals.forEach(r=> io.observe(r));

    // Filter functionality (UPDATED - removed featured filter)
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('.filter-btn').forEach(b => {
          b.classList.remove('active');
        });
        
        // Add active class to clicked button
        this.classList.add('active');
        
        const filter = this.dataset.filter;
        const events = document.querySelectorAll('#eventsGrid article');
        
        events.forEach(event => {
          if (filter === 'all') {
            event.style.display = 'block';
          } else {
            const categories = event.dataset.category.split(' ');
            if (categories.includes(filter)) {
              event.style.display = 'block';
            } else {
              event.style.display = 'none';
            }
          }
        });
      });
    });

    // Modal functionality
    const modal = document.getElementById('eventModal');
    const closeModalBtn = document.getElementById('closeModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDate = document.getElementById('modalDate');
    const modalDesc = document.getElementById('modalDesc');
    const modalImg = document.getElementById('modalImg');
    const modalAddCal = document.getElementById('modalAddCal');
    const modalGallery = document.getElementById('modalGallery');

// Function to open modal
function openModal(title, date, desc, img, calendarTitle = null) {
  modalTitle.textContent = title;
  modalDate.textContent = new Date(date).toLocaleDateString('en-US', { 
    weekday: 'long', 
    year: 'numeric', 
    month: 'long', 
    day: 'numeric' 
  });
  modalDesc.textContent = desc;
  modalImg.style.backgroundImage = `url('${img}')`;
  
  // Set calendar button data
  modalAddCal.dataset.title = calendarTitle || title;
  modalAddCal.dataset.date = date;
  
  // Check if event is in the past
  const eventDate = new Date(date);
  const today = new Date();
  // Reset to beginning of day for accurate comparison
  today.setHours(0, 0, 0, 0);
  eventDate.setHours(0, 0, 0, 0);
  
  if (eventDate < today) {
    // Hide "Add to Calendar" for past events
    modalAddCal.style.display = 'none';
    // Make "View Gallery" button primary and full width
    modalGallery.className = 'goto-gallery-modal px-5 py-3 bg-blue-700 text-white rounded-full font-semibold hover:bg-blue-800 transition text-center';
    modalGallery.style.width = '100%';
    modalGallery.style.display = 'block';
  } else {
    // Show both buttons for upcoming events (default state)
    modalAddCal.style.display = 'inline-block';
    modalGallery.className = 'goto-gallery-modal px-5 py-3 border-2 border-blue-700 text-blue-700 rounded-full font-semibold hover:bg-blue-50 transition';
    modalGallery.style.width = 'auto';
    modalGallery.style.display = 'inline-block';
  }
  
  modal.classList.remove('hidden');
  modal.classList.add('flex');
  document.body.style.overflow = 'hidden';
}

// Open modal from cards
document.querySelectorAll('.open-modal').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    const article = this.closest('article');
    const title = article.dataset.title;
    const date = article.dataset.date;
    const desc = article.dataset.desc;
    const img = article.dataset.img;
    
    openModal(title, date, desc, img, title);
  });
});

    // Open modal from swiper slides
// Open fullscreen image from swiper slides
// Open modal from swiper slides
document.querySelectorAll('.swiper-slide').forEach(slide => {
  slide.addEventListener('click', function() {
    const title = this.dataset.title;
    const date = this.dataset.date;
    const desc = this.dataset.desc;
    const img = this.dataset.img;
    const eventDate = new Date(date);
    const today = new Date();
    
    // Determine if it's past based on date comparison
    const category = eventDate < today ? 'past' : 'upcoming';
    
    openModal(title, date, desc, img, title, category);
  });
});

// Function to open fullscreen image
function openFullscreenImage(imageUrl) {
  const modal = document.getElementById('fullImageModal');
  const image = document.getElementById('fullscreenImage');
  
  image.src = imageUrl;
  modal.classList.remove('hidden');
  modal.classList.add('flex');
  document.body.style.overflow = 'hidden';
}

// Function to close fullscreen image
function closeFullscreenImage() {
  const modal = document.getElementById('fullImageModal');
  modal.classList.add('fade-out');
  
  setTimeout(() => {
    modal.classList.remove('flex', 'fade-out');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
  }, 300);
}

// Close fullscreen image with X button
document.querySelector('.close-fullscreen').addEventListener('click', closeFullscreenImage);

// Close fullscreen image when clicking outside the image
document.getElementById('fullImageModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeFullscreenImage();
  }
});

// Close fullscreen image with Escape key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape' && !document.getElementById('fullImageModal').classList.contains('hidden')) {
    closeFullscreenImage();
  }
});

    // Close modal
    closeModalBtn.addEventListener('click', () => {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.style.overflow = 'auto';
    });

    modal.addEventListener('click', (e) => { 
      if(e.target === modal) { 
        modal.classList.add('hidden'); 
        modal.classList.remove('flex'); 
        document.body.style.overflow = 'auto';
      } 
    });

    // Add to calendar functionality (for modal button)
    modalAddCal.addEventListener('click', function(e) {
      e.preventDefault();
      addToCalendar(this.dataset.title, this.dataset.date);
    });

    // Add to calendar functionality (for card buttons)
    document.querySelectorAll('.add-to-calendar').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const title = this.dataset.title;
        const date = this.dataset.date;
        addToCalendar(title, date);
      });
    });

    // Function to add to calendar
    function addToCalendar(title, dateStr) {
      const date = new Date(dateStr);
      const year = date.getFullYear();
      const month = String(date.getMonth() + 1).padStart(2, '0');
      const day = String(date.getDate()).padStart(2, '0');
      
      const icsContent = `BEGIN:VCALENDAR
VERSION:2.0
CALSCALE:GREGORIAN
BEGIN:VEVENT
SUMMARY:${title}
DTSTART;VALUE=DATE:${year}${month}${day}
DTEND;VALUE=DATE:${year}${month}${day}
LOCATION:Seat of Wisdom School
DESCRIPTION:${title} - Seat of Wisdom School Event
END:VEVENT
END:VCALENDAR`;
      
      const blob = new Blob([icsContent], { type: 'text/calendar;charset=utf-8' });
      const url = URL.createObjectURL(blob);
      
      const a = document.createElement('a');
      a.href = url;
      a.download = `Seat_of_Wisdom_${title.replace(/\s+/g, '_')}.ics`;
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      URL.revokeObjectURL(url);
      
      showNotification(`"${title}" added to your calendar!`, 'success');
    }

    // Gallery link functionality (from modal)
    modalGallery.addEventListener('click', function(e) {
      e.preventDefault();
      // Close modal first
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.style.overflow = 'auto';
      
      // Then scroll to swiper section
      setTimeout(() => {
        const swiperSection = document.querySelector('section.bg-gradient-to-b.from-blue-200\\/20');
        if (swiperSection) {
          swiperSection.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
          });
          
          // Highlight effect
          swiperSection.classList.add('highlight-gallery');
          setTimeout(() => {
            swiperSection.classList.remove('highlight-gallery');
          }, 1500);
        }
      }, 300);
    });

    // Gallery link functionality (from cards)
    document.querySelectorAll('.goto-gallery').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        
        const swiperSection = document.querySelector('section.bg-gradient-to-b.from-blue-200\\/20');
        if (swiperSection) {
          swiperSection.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
          });
          
          swiperSection.classList.add('highlight-gallery');
          setTimeout(() => {
            swiperSection.classList.remove('highlight-gallery');
          }, 1500);
        }
      });
    });

    // Swiper initialization
    const swiper = new Swiper('.mySwiper', {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      slidesPerView: 1,
      spaceBetween: 20,
      breakpoints: {
        640: {
          slidesPerView: 1.1,
          centeredSlides: true
        },
        768: {
          slidesPerView: 1.2,
          centeredSlides: true
        },
        1024: {
          slidesPerView: 1.3,
          centeredSlides: true
        }
      }
    });

    // Download PDF functionality (FIXED)
    document.getElementById('downloadUpcoming').addEventListener('click', function() {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF({ unit: 'pt', format: 'a4' });
      
      // Header
      doc.setFillColor(30, 64, 175); // Blue-800
      doc.rect(0, 0, 595, 100, 'F');
      
      // School logo/initials
      doc.setFillColor(255, 255, 255);
      doc.circle(50, 50, 25, 'F');
      doc.setFillColor(30, 64, 175);
      doc.circle(50, 50, 20, 'F');
      doc.setTextColor(255, 255, 255);
      doc.setFontSize(18);
      doc.text('SW', 50, 55, { align: 'center', baseline: 'middle' });
      
      // School name
      doc.setFontSize(24);
      doc.setFont('helvetica', 'bold');
      doc.text('Seat of Wisdom School', 100, 40);
      
      // Contact info
      doc.setFontSize(10);
      doc.setFont('helvetica', 'normal');
      doc.text('Events Calendar 2025', 100, 60);
      doc.text('Generated: ' + new Date().toLocaleDateString(), 100, 75);
      doc.text('Contact: info@seatofwisdom.edu | Tel: 080-XXXX-XXXX', 100, 90);
      
      // Title
      doc.setFontSize(16);
      doc.setTextColor(30, 64, 175);
      doc.text('UPCOMING EVENTS CALENDAR', 40, 130);
      
      // Line
      doc.setDrawColor(30, 64, 175);
      doc.setLineWidth(2);
      doc.line(40, 140, 555, 140);
      
      let y = 170;
      const events = document.querySelectorAll('#eventsGrid article[data-category="upcoming"]');
      
      if (events.length === 0) {
        doc.setFontSize(12);
        doc.setTextColor(100);
        doc.text('No upcoming events found.', 40, y);
        doc.save('Seat_of_Wisdom_Upcoming_Events.pdf');
        showNotification('PDF downloaded successfully!', 'success');
        return;
      }
      
      events.forEach((event, index) => {
        if (y > 750) {
          doc.addPage();
          y = 40;
        }
        
        const title = event.dataset.title || 'Untitled Event';
        const date = event.dataset.date || 'Date not set';
        const desc = event.dataset.desc || 'No description available';
        
        // Event box
        doc.setFillColor(240, 247, 255);
        doc.roundedRect(30, y - 15, 535, 80, 5, 5, 'F');
        doc.setDrawColor(219, 234, 254);
        doc.setLineWidth(1);
        doc.roundedRect(30, y - 15, 535, 80, 5, 5, 'S');
        
        // Event title
        doc.setFontSize(13);
        doc.setFont('helvetica', 'bold');
        doc.setTextColor(30, 64, 175);
        doc.text(`${index + 1}. ${title}`, 45, y);
        
        // Event date
        doc.setFontSize(11);
        doc.setFont('helvetica', 'normal');
        doc.setTextColor(75, 85, 99);
        doc.text(`Date: ${new Date(date).toLocaleDateString('en-US', { 
          weekday: 'short', 
          year: 'numeric', 
          month: 'short', 
          day: 'numeric' 
        })}`, 45, y + 18);
        
        // Event description
        const splitDesc = doc.splitTextToSize(desc, 500);
        doc.text(splitDesc, 45, y + 35);
        
        y += 100;
      });
      
      // Footer
      doc.setFontSize(10);
      doc.setTextColor(100);
      doc.text('© 2025 Seat of Wisdom School - All Rights Reserved', 297, 800, { align: 'center' });
      
      doc.save('Seat_of_Wisdom_Upcoming_Events.pdf');
      showNotification('PDF calendar downloaded successfully!', 'success');
    });

    // Countdown timer
// Countdown timer - automatically finds nearest upcoming event
function getNextEventDate() {
  // Get all upcoming events from the page
  const upcomingEvents = document.querySelectorAll('#eventsGrid article[data-category="upcoming"]');
  const now = new Date();
  let closestEventDate = null;
  let closestEvent = null;

  upcomingEvents.forEach(event => {
    const eventDate = new Date(event.dataset.date);
    
    // Only consider future events
    if (eventDate > now) {
      if (!closestEventDate || eventDate < closestEventDate) {
        closestEventDate = eventDate;
        closestEvent = event;
      }
    }
  });

  return { date: closestEventDate, event: closestEvent };
}

function updateCountdown() {
  const { date: eventDate, event: eventElement } = getNextEventDate();
  const countdownContainer = document.getElementById('countdown');
  const statusMessage = document.getElementById('countdown-status') || document.createElement('p');
  
  // Create status message element if it doesn't exist
  if (!document.getElementById('countdown-status')) {
    statusMessage.id = 'countdown-status';
    statusMessage.className = 'text-lg text-white/90 mt-4 font-medium';
    countdownContainer.parentNode.appendChild(statusMessage);
  }

  // If no upcoming events found
  if (!eventDate) {
    document.getElementById("days").textContent = "--";
    document.getElementById("hours").textContent = "--";
    document.getElementById("minutes").textContent = "--";
    document.getElementById("seconds").textContent = "--";
    statusMessage.textContent = "No upcoming events scheduled yet. Check back soon!";
    return;
  }

  const now = new Date();
  const diff = eventDate - now;

  // If event has passed (shouldn't happen with auto detection, but just in case)
  if (diff <= 0) {
    document.getElementById("days").textContent = "00";
    document.getElementById("hours").textContent = "00";
    document.getElementById("minutes").textContent = "00";
    document.getElementById("seconds").textContent = "00";
    
    // Find the next event after this one
    setTimeout(() => {
      updateCountdown(); // Try to find another event
    }, 1000);
    return;
  }

  // Calculate time remaining
  const days = Math.floor(diff / (1000 * 60 * 60 * 24));
  const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((diff % (1000 * 60)) / 1000);

  // Update countdown display
  document.getElementById("days").textContent = String(days).padStart(2, '0');
  document.getElementById("hours").textContent = String(hours).padStart(2, '0');
  document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
  document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');

  // Update status message with event name
  if (eventElement) {
    const eventTitle = eventElement.dataset.title || "Upcoming Event";
    statusMessage.textContent = `Counting down to: ${eventTitle}`;
  }
}

// Initialize countdown
setInterval(updateCountdown, 1000);
updateCountdown();

// Also update countdown when events are filtered
document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    setTimeout(updateCountdown, 100); // Small delay to ensure DOM updates
  });
});

    // Notification function
    function showNotification(message, type = 'info') {
      const popup = document.getElementById('popup');
      popup.textContent = message;
      popup.style.borderLeftColor = type === 'success' ? '#10b981' : '#3b82f6';
      popup.classList.add('popup-show');
      
      setTimeout(() => {
        popup.classList.remove('popup-show');
      }, 3000);
    }

    // Activate default filter
    const defaultFilterBtn = document.querySelector('.filter-btn[data-filter="all"]');
    if (defaultFilterBtn) defaultFilterBtn.click();
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