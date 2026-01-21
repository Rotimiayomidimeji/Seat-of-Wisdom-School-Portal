<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Seat of Wisdom School</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
            .popup-show {
  opacity: 1 !important;
  pointer-events: auto !important;
  transform: translateY(0) !important;
}
   
    .float-card {
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .float-card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    .input-focus:focus {
      outline: none;
      box-shadow: 0 0 8px rgba(59,130,246,0.7);
      border-color: #3b82f6;
    }

  
    #form-modal {
      display: none;
    }

    .modal-active {
      display: flex !important;
    }
    .modal-card {
      border-radius: 18px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.18);
      animation: fadeIn 0.25s ease-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }

        .particle { position:absolute; bottom:-20px; width:6px; height:6px; background:white; border-radius:50%; opacity:.8; animation:floatUp linear infinite; }
    @keyframes floatUp { from{transform:translateY(0);opacity:.8;} to{transform:translateY(-120vh);opacity:0;} }

    #toast-container {
  position: fixed;
  top: 20px;
  right: 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  z-index: 99999;
}

.toast {
  min-width: 260px;
  padding: 14px 18px;
  border-radius: 12px;
  color: #fff;
  font-size: 15px;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 10px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.25);
  opacity: 0;
  transform: translateX(100%);
  animation: slideIn 0.4s forwards;
}

.toast.success { background: linear-gradient(135deg, #28C76F, #19A85B); }
.toast.error   { background: linear-gradient(135deg, #EA5455, #D43940); }
.toast.loading { background: linear-gradient(135deg, #0396FF, #007BCE); }

.toast i {
  font-size: 18px;
}

@keyframes slideIn {
  from { opacity: 0; transform: translateX(100%); }
  to   { opacity: 1; transform: translateX(0); }
}

@keyframes fadeOut {
  from { opacity: 1; transform: translateX(0); }
  to   { opacity: 0; transform: translateX(100%); }
}

#loading-bar {
  box-shadow: 0 0 10px rgba(231, 81, 35, 0.5);
}

  </style>
</head>
<div id="toast-container"></div>

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
    <ul class="hidden md:flex items-center space-x-8 text-gray-700 font-semibold">
      <li><a href="index.php" class="hover:text-blue-700">Home</a></li>
      <li><a href="about.php" class="hover:text-blue-700">About</a></li>
      <li><a href="services.php" class="hover:text-blue-700">Our Offers</a></li>
      <li><a href="events.php" class="hover:text-blue-700">Events</a></li>
      <li><a href="#" class="text-blue-700 font-semibold">Contact</a></li>
      <li><a href="Result-portal/login.php" class="hover:text-blue-700">Check Result</a></li>
    </ul>
    <button id="menu-btn" class="md:hidden text-blue-700 text-3xl">☰</button>
  </nav>
  <div id="mobile-menu" class="hidden bg-white/95 backdrop-blur-lg shadow-lg md:hidden">
    <ul class="flex flex-col space-y-2 py-5 px-6 text-gray-700 font-semibold">
      <li><a href="index.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Home</a></li>
      <li><a href="about.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">About</a></li>
      <li><a href="services.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100 ">Our Offers</a></li>
      <li><a href="events.php" class="block w-full px-4 py-3 rounded-lg hover:bg-blue-100">Events</a></li>
      <li><a href="#" class="block w-full px-4 py-3 rounded-lg bg-blue-100 text-blue-700 font-semibold">Contact</a></li>
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
    <h1 class="text-5xl font-bold mb-4">Contact Us</h1>
    <p class="opacity-90 max-w-2xl mx-auto text-lg">We are here to assist you. Reach out to our team for inquiries, admissions, support, or general information.</p>

    <!-- Breadcrumb -->
    <!-- <div class="mt-6 text-blue-100 text-sm">
      <a href="index.php" class="hover:underline">Home</a> • <span class="text-white font-semibold">About</span>
    </div> -->
  </div>
</section>


<!-- <section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-14 items-start"> -->

<div class="max-w-7xl mx-auto px-6 py-20">
  <div class="bg-white shadow-2xl rounded-2xl p-8 float-card">
    <h3 class="text-4xl font-bold text-blue-700 mb-6">Get in Touch</h3>
    <p class="text-gray-600 mb-6">Fill out the form and our team will reach back to you quickly.</p>

<form class="grid grid-cols-1 md:grid-cols-2 gap-5" id="main-contact-form">

  <select name="inquiry_type" class="p-4 rounded-xl border input-focus w-full" required>
    <option value="">Inquiry Type</option>
    <option value="Admissions">Admissions</option>
    <option value="Support">Support</option>
    <option value="General">General Inquiry</option>
  </select>

  <select name="contact_method" class="p-4 rounded-xl border input-focus w-full" required>
    <option value="">Preferred Contact Method</option>
    <option value="Email">Email</option>
    <option value="Phone">Phone</option>
    <option value="WhatsApp">WhatsApp</option>
  </select>

  <input name="name" type="text" placeholder="Your Name" class="p-4 rounded-xl border input-focus w-full" required />
  <input name="email" type="email" placeholder="Your Email" class="p-4 rounded-xl border input-focus w-full" required />

  <input name="phone" type="text" placeholder="Phone Number" class="p-4 rounded-xl border input-focus w-full md:col-span-2" />

  <textarea name="message" placeholder="Your Message" rows="4" class="p-4 rounded-xl border input-focus w-full md:col-span-2" required></textarea>

  <div class="flex gap-4 md:col-span-2">
    <button  type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white py-4 rounded-xl font-semibold text-lg">
      Send Message
    </button>

    <button type="button" onclick="openVisitModal()"
      class="w-full border-2 border-blue-600 text-blue-700 hover:bg-blue-50 py-4 rounded-xl font-semibold text-lg">
      Book a Visit
    </button>
  </div>

</form>

  </div>
</div>



  </div>

  <!-- SCHOOL INFO SIDE -->
<!-- SCHOOL INFORMATION (NOW BELOW FORM) -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 mt-10">
  <h3 class="text-3xl md:text-4xl font-bold text-blue-700 mb-8 text-center md:text-left">School Information</h3>

  <!-- ADDRESS + CONTACT (SIDE BY SIDE ON DESKTOP, STACKED ON MOBILE) -->
  <div class="grid md:grid-cols-2 gap-6 md:gap-8">
    
    <!-- Left Column: Address Card -->
    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
      <div class="flex items-start space-x-4">
        <!-- School Building Icon -->
        <div class="flex-shrink-0">
          <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
          </svg>
        </div>
        
        <!-- Address Details -->
        <div class="flex-1">
          <h4 class="text-xl font-bold text-gray-800 mb-2">Seat of Wisdom School</h4>
          <div class="space-y-2 text-gray-700">
            <div class="flex items-start">
              <svg class="w-5 h-5 mr-2 mt-0.5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-sm md:text-base">Kado Kuchi Beside Chief Palace, Abuja, Nigeria</span>
            </div>
            
            <div class="flex items-start text-gray-600">
              <svg class="w-5 h-5 mr-2 mt-0.5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3"/>
              </svg>
              <span class="text-sm md:text-base">Easily accessible from major roads in Abuja</span>
            </div>
          </div>
          
          <!-- Action Buttons -->
          <div class="flex flex-wrap gap-2 md:gap-3 mt-6">
            <a 
              href="https://www.google.com/maps/dir/?api=1&destination=9.0475273,7.499812&destination_place_id=ChIJfVpV4lCQPBARq6OopHgTfwE"
              target="_blank"
              rel="noopener noreferrer"
              class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 shadow hover:shadow-md text-sm md:text-base"
            >
              <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
              </svg>
              Directions
            </a>
            
            <a 
              href="https://www.google.com/maps/place/Seat+of+Wisdom+School/@9.0475273,7.4976233,17z/data=!3m1!4b1!4m6!3m5!1s0x104e0be99d4b3b99:0x2ff4456efc010c15!8m2!3d9.047522!4d7.499812!16s%2Fg%2F11j0_bj_sf"
              target="_blank"
              rel="noopener noreferrer"
              class="inline-flex items-center px-4 py-2 bg-white text-blue-600 rounded-lg hover:bg-gray-50 transition duration-300 shadow border border-blue-200 hover:border-blue-300 text-sm md:text-base"
            >
              <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
              </svg>
              View Map
            </a>
            
            <button 
              onclick="copyAddress()"
              class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 rounded-lg hover:bg-gray-200 transition duration-300 text-sm md:text-base"
            >
              <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
              </svg>
              Copy Address
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column: Contact Card -->
    <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-100">
      <div class="flex items-start space-x-4">
        <!-- Contact Icon -->
        <div class="flex-shrink-0">
          <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 11l4-4m0 0l-4-4m4 4H3"/>
          </svg>
        </div>
        
        <div class="flex-1">
          <h4 class="text-xl font-bold text-blue-600 mb-4">Contact Information</h4>
          
          <div class="space-y-4">
            <!-- Phone -->
            <div class="flex items-center">
              <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <div>
                <p class="text-sm text-gray-500">Phone Number</p>
                <a href="tel:+2348067705751" class="text-gray-800 font-medium hover:text-blue-600 transition duration-300 text-base md:text-lg">
                  +234 806 770 5751
                </a>
              </div>
            </div>
            
            <!-- Email -->
            <div class="flex items-center">
              <svg class="w-6 h-6 text-red-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <div>
                <p class="text-sm text-gray-500">Email Address</p>
                <!-- Fixed the email address (added @) -->
                <a href="mailto:seatwisdom2@gmail.com" class="text-gray-800 font-medium hover:text-blue-600 transition duration-300 text-base md:text-lg break-all">
                  seatwisdom2@gmail.com
                </a>
              </div>
            </div>
            
            <!-- School Hours -->
            <div class="flex items-center">
              <svg class="w-6 h-6 text-purple-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <div>
                <p class="text-sm text-gray-500">School Hours</p>
                <p class="text-gray-800 font-medium text-base">Mon - Fri: 8:00 AM - 6:00 PM</p>
                <p class="text-gray-600 text-sm">Sat: 9:00 AM - 1:00 PM</p>
              </div>
            </div>
            
            <!-- Quick Action Buttons -->
            <div class="flex flex-wrap gap-2 mt-6 pt-4 border-t border-gray-100">
              <a href="tel:+2348067705751" class="inline-flex items-center px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300 text-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Call Now
              </a>
              
              <a href="mailto:seatwisdom2@gmail.com" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300 text-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Send Email
              </a>
              
              <a href="https://wa.me/2348067705751" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-300 text-sm">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.76.982.998-3.675-.236-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.9 6.994c-.004 5.45-4.436 9.88-9.885 9.88m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.333.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.333 11.893-11.893 0-3.18-1.24-6.162-3.495-8.411"/>
                </svg>
                WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- WHY CHOOSE US (CENTERED BELOW) -->
  <div class="max-w-4xl mx-auto mt-8 md:mt-12">
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 shadow-xl rounded-2xl p-6 border border-blue-100">
      <h4 class="text-2xl md:text-3xl font-semibold text-blue-600 mb-4 text-center">Why Choose Seat of Wisdom School?</h4>
      
      <div class="grid md:grid-cols-2 gap-4 md:gap-6">
        <div class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
            <span class="text-blue-600 font-bold">✓</span>
          </div>
          <div>
            <h5 class="font-semibold text-gray-800">Experienced Academic Staff</h5>
            <p class="text-gray-600 text-sm mt-1">Qualified teachers with years of teaching experience</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
            <span class="text-blue-600 font-bold">✓</span>
          </div>
          <div>
            <h5 class="font-semibold text-gray-800">Safe Learning Environment</h5>
            <p class="text-gray-600 text-sm mt-1">Secure campus with modern safety facilities</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
            <span class="text-blue-600 font-bold">✓</span>
          </div>
          <div>
            <h5 class="font-semibold text-gray-800">Modern Classrooms & ICT Labs</h5>
            <p class="text-gray-600 text-sm mt-1">State-of-the-art facilities for quality education</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-3">
          <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
            <span class="text-blue-600 font-bold">✓</span>
          </div>
          <div>
            <h5 class="font-semibold text-gray-800">Strong Moral & Academic Foundation</h5>
            <p class="text-gray-600 text-sm mt-1">Holistic development combining academics and values</p>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-6">
        <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 font-semibold shadow-md hover:shadow-lg">
          Enroll Today
        </a>
      </div>
    </div>
  </div>
</section>

<script>
function copyAddress() {
  const address = "Seat of Wisdom School, Kado Kuchi Beside Chief Palace, Abuja, Nigeria";
  navigator.clipboard.writeText(address).then(() => {
    alert('Address copied to clipboard!');
  });
}
</script>


<!-- CONTACT TEAM SECTION -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 py-16">
  <h3 class="text-3xl md:text-4xl font-bold text-center text-blue-700 mb-12">Meet Our Team</h3>

  <!-- Container to center the 2 cards on desktop -->
  <div class="flex flex-col lg:flex-row justify-center items-stretch gap-8 lg:gap-12">
    
    <!-- PERSON 1 -->
    <div class="w-full lg:w-1/2 max-w-lg bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
      <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
        <!-- Profile Image -->
        <div class="flex-shrink-0">
          <img src="img/about.jpg" class="w-40 h-40 lg:w-48 lg:h-48 rounded-full object-cover border-4 border-blue-100 shadow-lg" />
        </div>
        
        <!-- Profile Info -->
        <div class="flex-1 text-center lg:text-left">
          <h4 class="text-2xl lg:text-3xl font-bold text-blue-700 mb-1">Mrs. Gloria Adams</h4>
          <p class="text-gray-600 text-lg mb-6">Proprietor</p>
          
          <div class="space-y-4 mb-8">
            <div class="flex items-center justify-center lg:justify-start">
              <svg class="w-6 h-6 text-red-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <span class="text-gray-800 text-lg font-medium">gloria.adams@school.com</span>
            </div>
            
            <div class="flex items-center justify-center lg:justify-start">
              <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <span class="text-gray-800 text-lg font-medium">+234 801 234 5678</span>
            </div>
          </div>
          
          <button onclick="openModal('Mrs. Gloria Adams')" class="w-full px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-xl font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-[1.02]">
            Send Message
          </button>
        </div>
      </div>
    </div>

    <!-- PERSON 2 -->
    <div class="w-full lg:w-1/2 max-w-lg bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
      <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
        <!-- Profile Image -->
        <div class="flex-shrink-0">
          <img src="img/about.jpg" class="w-40 h-40 lg:w-48 lg:h-48 rounded-full object-cover border-4 border-blue-100 shadow-lg" />
        </div>
        
        <!-- Profile Info -->
        <div class="flex-1 text-center lg:text-left">
          <h4 class="text-2xl lg:text-3xl font-bold text-blue-700 mb-1">Mr. John Bello</h4>
          <p class="text-gray-600 text-lg mb-6">Head Teacher</p>
          
          <div class="space-y-4 mb-8">
            <div class="flex items-center justify-center lg:justify-start">
              <svg class="w-6 h-6 text-red-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <span class="text-gray-800 text-lg font-medium">john.bello@school.com</span>
            </div>
            
            <div class="flex items-center justify-center lg:justify-start">
              <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <span class="text-gray-800 text-lg font-medium">+234 805 998 1122</span>
            </div>
          </div>
          
          <button onclick="openModal('Mr. John Bello')" class="w-full px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-xl font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-[1.02]">
            Send Message
          </button>
        </div>
      </div>
    </div>

  </div>

  <!-- Optional note -->
  <p class="text-center text-gray-500 mt-10 text-base">
    Need to contact another department? <a href="mailto:info@school.com" class="text-blue-600 hover:text-blue-800 font-medium underline">Send a general inquiry</a>
  </p>
</section>

<!-- MODAL FORM -->
<div id="form-modal" class="fixed inset-0 bg-black/60 z-[100] hidden">
  <div class="min-h-full w-full flex items-center justify-center p-4">
    <div class="bg-white rounded-xl md:rounded-2xl max-w-md w-full max-h-[85vh] overflow-hidden">
      <!-- Modal Header with Close Button -->
      <div class="sticky top-0 bg-white border-b border-gray-200 px-4 py-3 flex justify-between items-center">
        <h3 class="text-lg md:text-xl font-bold text-blue-700">Send a Message</h3>
        <button onclick="closeModal()" class="w-8 h-8 flex items-center justify-center text-xl md:text-2xl text-gray-500 hover:text-red-600 rounded-full hover:bg-gray-100 transition">
          ×
        </button>
      </div>
      
      <!-- Scrollable Form Content -->
      <div class="overflow-y-auto" style="max-height: calc(85vh - 60px)">
        <div class="p-4 md:p-6">
          <form id="contact-form" class="space-y-4">
            <!-- Receiver Field -->
            <div class="space-y-1">
              <span class="text-xs font-medium text-gray-500">To:</span>
              <input name="receiver" id="receiver" type="text" readonly 
                class="w-full p-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-700 text-sm" />
            </div>

            <!-- Name Field -->
            <div class="space-y-1">
              <span class="text-xs font-medium text-gray-500">Your Name</span>
              <input name="name" type="text" placeholder="Full name" 
                class="w-full p-3 rounded-lg border border-gray-300 bg-white placeholder:text-gray-400 text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500" required />
            </div>

            <!-- Email Field -->
            <div class="space-y-1">
              <span class="text-xs font-medium text-gray-500">Your Email</span>
              <input name="email" type="email" placeholder="email@example.com" 
                class="w-full p-3 rounded-lg border border-gray-300 bg-white placeholder:text-gray-400 text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500" required />
            </div>

            <!-- Message Field -->
            <div class="space-y-1">
              <span class="text-xs font-medium text-gray-500">Message</span>
              <textarea name="message" placeholder="Type your message here..." rows="4" 
                class="w-full p-3 rounded-lg border border-gray-300 bg-white placeholder:text-gray-400 text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 resize-none" required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold text-sm md:text-base transition duration-200 shadow-md hover:shadow-lg active:scale-[0.98]">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Smooth modal animation */
  #form-modal .bg-white {
    animation: modalSlideUp 0.2s ease-out;
  }

  @keyframes modalSlideUp {
    from {
      opacity: 0;
      transform: translateY(10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Better scrolling on mobile */
  .overflow-y-auto::-webkit-scrollbar {
    width: 4px;
  }
  
  .overflow-y-auto::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
  }
  
  .overflow-y-auto::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
  }
  
  .overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
</style>


<div id="visit-modal" class="fixed inset-0 bg-black/60 flex justify-center items-center p-4 hidden">
  <div class="modal-card bg-white w-full max-w-md p-6 relative max-h-[90vh] overflow-y-auto rounded-2xl">

  
    <button onclick="closeVisitModal()" class="absolute top-3 left-4 text-2xl font-bold text-gray-600 hover:text-red-600">×</button>

    <h3 class="text-2xl font-bold text-blue-700 mb-4 text-center">Book a School Visit</h3>

<form id="visit-form" class="space-y-4 mt-6">

  <input name="parent_name" type="text" placeholder="Parent's Full Name" class="w-full p-3 rounded-lg border input-focus" required />

  <input name="phone" type="text" placeholder="Phone Number" class="w-full p-3 rounded-lg border input-focus" required />

  <input name="student_name" type="text" placeholder="Student Name (Optional)" class="w-full p-3 rounded-lg border input-focus" />

  <input name="visit_date" type="date" class="w-full p-3 rounded-lg border input-focus" required />

  <input name="visit_time" type="time" class="w-full p-3 rounded-lg border input-focus" required />

 

  <button  type="submit"  class="w-full bg-blue-700 hover:bg-blue-800 text-white py-3 rounded-xl font-semibold">Book Visit</button>

</form>


  </div>
</div>
</div>
<script>
const particles=document.getElementById("particles");
for(let i=0;i<25;i++){const d=document.createElement("div");d.classList.add("particle");d.style.left=Math.random()*100+"%";d.style.animationDuration=5+Math.random()*5+"s";particles.appendChild(d);}      
</script>

<script>
  function openModal(name){
    document.getElementById('receiver').value = name;
    document.getElementById('form-modal').classList.add('modal-active');
  }
  function closeModal(){
    document.getElementById('form-modal').classList.remove('modal-active');
  }
</script>


<script>
  function openVisitModal() {
    const modal = document.getElementById('visit-modal');
    modal.classList.remove('hidden');
    modal.classList.add('modal-active');
  }

  function closeVisitModal() {
    const modal = document.getElementById('visit-modal');
    modal.classList.remove('modal-active');
    modal.classList.add('hidden');
  }
</script>


<!-- MAP SECTION -->
<section class="max-w-7xl mx-auto px-6 pb-20">
  <h3 class="text-4xl font-bold text-center text-blue-700 mb-8">Visit Us</h3>
  <p class="text-center mb-6 text-gray-600">Our school is located in a serene and accessible location.</p>
  
  <!-- Map Container with Relative Positioning for School Location Pin -->
  <div class="relative w-full h-96 rounded-2xl shadow-lg overflow-hidden">
    <iframe 
      class="w-full h-full"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.380259548183!2d7.49762327502907!3d9.047527289335025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0be99d4b3b99%3A0x2ff4456efc010c15!2sSeat%20of%20Wisdom%20School!5e0!3m2!1sen!2sng!4v1690476967165!5m2!1sen!2sng"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="Seat of Wisdom School Location Map"
    ></iframe>
    
    <!-- Custom School Location Pin -->
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-full">
      <div class="flex flex-col items-center">
        <!-- School Location Label -->
        <div class="mb-1 px-3 py-1 bg-blue-600 text-white rounded-lg shadow-md text-sm font-semibold whitespace-nowrap">
          School Location
        </div>
        <!-- Pin Icon -->
        <div class="relative">
          <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
          </svg>
          <!-- School Icon on Pin -->
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
            </svg>
          </div>
        </div>
        <!-- Address Text Below Pin -->
        <div class="mt-2 px-3 py-2 bg-white/90 backdrop-blur-sm rounded-lg shadow-sm max-w-xs text-center">
          <p class="text-xs font-medium text-gray-800">Kado Kuchi</p>
          <p class="text-xs text-gray-600">Beside Chief Palace</p>
        </div>
      </div>
    </div>
  </div>
  
  
    </div>
  </div>
</section>

<script>
function copyAddress() {
  const address = "Seat of Wisdom School, Kado Kuchi Beside Chief Palace, Abuja, Nigeria";
  navigator.clipboard.writeText(address).then(() => {
    alert('Address copied to clipboard!');
  });
}
</script>

<!-- FAQ SECTION -->
<section class="max-w-7xl mx-auto px-6 py-20">
  <h3 class="text-4xl font-bold text-center text-blue-700 mb-10">Frequently Asked Questions</h3>

  <div class="space-y-4" id="faq-container">
    <div class="bg-white shadow-md rounded-xl overflow-hidden">
      <button class="w-full text-left px-6 py-4 font-semibold text-lg flex justify-between items-center faq-btn">
        How do I enroll my child?
        <span class="text-2xl">+</span>
      </button>
      <div class="px-6 pb-4 text-gray-600 faq-content hidden">
        Enrollment is easy! Visit our admissions office or contact us via phone or email for guidance.
      </div>
    </div>

    <div class="bg-white shadow-md rounded-xl overflow-hidden">
      <button class="w-full text-left px-6 py-4 font-semibold text-lg flex justify-between items-center faq-btn">
        What is the school fee structure?
        <span class="text-2xl">+</span>
      </button>
      <div class="px-6 pb-4 text-gray-600 faq-content hidden">
        Fees vary by level. Contact our administration for full breakdown and available payment plans.
      </div>
    </div>

    <div class="bg-white shadow-md rounded-xl overflow-hidden">
      <button class="w-full text-left px-6 py-4 font-semibold text-lg flex justify-between items-center faq-btn">
        Do you offer transportation services?
        <span class="text-2xl">+</span>
      </button>
      <div class="px-6 pb-4 text-gray-600 faq-content hidden">
        Yes! We provide safe and reliable transport for students across major routes.
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.faq-btn').forEach((btn)=>{
    btn.addEventListener('click',()=>{
      const content = btn.nextElementSibling;
      const icon = btn.querySelector('span');

      if(content.classList.contains('hidden')){
        content.classList.remove('hidden');
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.textContent = '−';
      } else {
        content.classList.add('hidden');
        icon.textContent = '+';
      }
    });
  });
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



  <script>
function showToast(type, message, duration = 3000) {
  const container = document.getElementById('toast-container');
  const toast = document.createElement('div');
  toast.className = `toast ${type}`;

  let icon = "🔔";

  if (type === "error")   icon = "❌";
  if (type === "loading") icon = "⏳";

  toast.innerHTML = `<i>${icon}</i> ${message}`;
  container.appendChild(toast);

  setTimeout(() => {
    toast.style.animation = "fadeOut 0.4s forwards";
    setTimeout(() => toast.remove(), 400);
  }, duration);
}
</script>

<script>
// Change button to loading state
function setButtonLoading(btn, text="Sending...") {
  btn.dataset.original = btn.innerHTML;
  btn.innerHTML = `<span class="flex items-center justify-center gap-2">
                     <span class="animate-spin border-2 border-white border-t-transparent rounded-full w-5 h-5"></span>
                     ${text}
                   </span>`;
  btn.disabled = true;
  btn.classList.add("opacity-70", "cursor-not-allowed");
}

// Restore original state
function setButtonNormal(btn) {
  btn.innerHTML = btn.dataset.original;
  btn.disabled = false;
  btn.classList.remove("opacity-70", "cursor-not-allowed");
}
</script>


<script>
// MAIN CONTACT FORM
document.getElementById('main-contact-form').addEventListener('submit', async (e)=>{
  e.preventDefault();
  const btn = e.target.querySelector("button[type='submit']");
  
  setButtonLoading(btn, "Sending...");
  
  const r = await postForm('main-contact-form','contact');

  if(r.status === 'success'){
    showToast('success', r.message);
    e.target.reset();
  } else {
    showToast('error', r.message);
  }

  setButtonNormal(btn);
});

// STAFF MODAL FORM
document.getElementById('contact-form').addEventListener('submit', async (e)=>{
  e.preventDefault();
  const btn = e.target.querySelector("button[type='submit']");
  
  setButtonLoading(btn, "Sending...");
  
  const r = await postForm('contact-form','staff');

  if(r.status === 'success'){
    showToast('success', r.message);
    e.target.reset();
    closeModal();
  } else {
    showToast('error', r.message);
  }

  setButtonNormal(btn);
});

// BOOK VISIT FORM
document.getElementById('visit-form').addEventListener('submit', async (e)=>{
  e.preventDefault();
  const btn = e.target.querySelector("button[type='submit']");
  
  setButtonLoading(btn, "Booking...");
  
  const r = await postForm('visit-form','visit');

  if(r.status === 'success'){
    showToast('success', r.message);
    e.target.reset();
    closeVisitModal();
  } else {
    showToast('error', r.message);
  }

  setButtonNormal(btn);
});
</script>

<script>
  async function postForm(formId, formType) {
    const form = document.getElementById(formId);
    const fd = new FormData(form);
    fd.append('formType', formType);

    const res = await fetch('mails/send_message.php', {
        method: 'POST',
        body: fd
    });

    return await res.json();
}

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
