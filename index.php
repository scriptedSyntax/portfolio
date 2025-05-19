<?php include('header.php'); ?>
<!-- 🌟 Hero Section -->
<section class="relative bg-gradient-to-b from-white via-gray-50 to-white text-center py-28 px-6 overflow-hidden">
  <div class="max-w-4xl mx-auto relative z-10">
    <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6 drop-shadow">
      Engineer by Profession.<br class="hidden md:block" /> Problem Solver by Nature.
    </h1>
    <p class="text-lg md:text-xl text-gray-700 max-w-2xl mx-auto mb-10">
      Whether I’m improving hospital systems or building scalable backend software, I solve real-world problems with precision, performance, and innovation.
    </p>
    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
      <a href="biomed.php" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-full shadow-lg transition duration-300">
        👨‍⚕️ Explore Biomedical
      </a>
      <a href="tech.php" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-full shadow-lg transition duration-300">
        💻 Explore Software
      </a>
    </div>
  </div>

  <!-- Decorative Gradient Blobs -->
  <div class="absolute top-0 left-0 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
</section>

<!-- 🧭 Career Mode Selector -->
<section class="bg-gray-900 text-white py-20 px-6">
  <h2 class="text-3xl font-semibold text-center mb-4">What Do You Need Today?</h2>
  <p class="text-center mb-10 text-gray-300 max-w-xl mx-auto">
    Discover how I deliver impact—whether in a clinical setting or a codebase. Choose your path and unlock proven solutions.
  </p>
  <div class="flex flex-col md:flex-row justify-center gap-8 max-w-5xl mx-auto">
    <a href="biomed.php" 
       class="career-card bg-emerald-700 hover:bg-emerald-800 text-white p-8 rounded-xl shadow-lg text-center flex-1 transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-emerald-400"
       aria-label="Explore Biomedical Engineering Career Path">
      <i class="bi bi-heart-pulse-fill text-5xl mb-5"></i>
      <h3 class="text-2xl font-extrabold mb-3">Biomedical Engineering</h3>
      <p class="text-sm mb-6 leading-relaxed max-w-md mx-auto">
        Trusted expertise in medical device maintenance, calibration, and clinical systems optimization. Join hundreds improving healthcare technology.
      </p>
      <button
        class="bg-white text-emerald-700 font-semibold px-6 py-3 rounded-full shadow-md hover:bg-gray-100 transition duration-300 w-full max-w-xs mx-auto">
        👨‍⚕️ See How I Make a Difference →
      </button>
    </a>

    <a href="tech.php" 
       class="career-card bg-blue-700 hover:bg-blue-800 text-white p-8 rounded-xl shadow-lg text-center flex-1 transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-blue-400"
       aria-label="Explore Software Engineering Career Path">
      <i class="bi bi-cpu-fill text-5xl mb-5"></i>
      <h3 class="text-2xl font-extrabold mb-3">Software Engineering</h3>
      <p class="text-sm mb-6 leading-relaxed max-w-md mx-auto">
        AI, automation, and SaaS solutions powered by Python, Django, and modern tools. Build scalable, secure software with me.
      </p>
      <button
        class="bg-white text-blue-700 font-semibold px-6 py-3 rounded-full shadow-md hover:bg-gray-100 transition duration-300 w-full max-w-xs mx-auto">
        💻 Explore Real-World Software Impact →
      </button>
    </a>
  </div>
</section>


<!-- ⚡ Hybrid Advantage -->
<section class="bg-white text-gray-800 py-20 px-6">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-3xl font-extrabold mb-6">Engineering Precision Meets Digital Intelligence</h2>
    <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
      My background bridges hospital technology and software systems. From defibrillators to APIs, I understand machines, systems, and data — and how to make them work better.
    </p>
  </div>
</section>


<!-- 🖼️ Project Gallery -->
<section class="bg-gray-50 py-20 px-6">
  <h2 class="text-3xl font-extrabold text-center mb-12 text-teal-700">
    Selected Work Highlights
  </h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

    <!-- Card 1: LinkedIn -->
    <a href="https://linkedin.com/in/samuel-mwangi-11597a245" target="_blank" rel="noopener noreferrer" class="block bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
      <img src="https://img.freepik.com/free-vector/festive-last-minute-coupon-background-with-chat-bubble_1017-45035.jpg?ga=GA1.1.1371894334.1745239415&semt=ais_hybrid&w=740" alt="Django Admin AI Health" class="w-full h-56 object-cover">
      <div class="p-6">
        <h3 class="text-xl font-semibold text-teal-700 mb-2 hover:text-blue-600 transition-colors cursor-pointer">
          Django Admin for AI Health App
        </h3>
        <p class="text-teal-600 text-sm">
          Streamlined healthcare management by creating an intuitive, easy-to-use administrative interface.
        </p>
      </div>
    </a>

    <!-- Card 2: GitHub -->
    <a href="https://github.com/scriptedSyntax" target="_blank" rel="noopener noreferrer" class="block bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
      <img src="https://img.freepik.com/free-vector/festive-last-minute-coupon-background-with-chat-bubble_1017-45035.jpg?ga=GA1.1.1371894334.1745239415&semt=ais_hybrid&w=740" alt="REST API Monitor" class="w-full h-56 object-cover">
      <div class="p-6">
        <h3 class="text-xl font-semibold text-teal-700 mb-2 hover:text-blue-600 transition-colors cursor-pointer">
          RESTful API Monitor Dashboard
        </h3>
        <p class="text-teal-600 text-sm">
          Delivered a real-time monitoring system to keep API performance visible and reliable.
        </p>
      </div>
    </a>

    <!-- Card 3: LinkedIn -->
    <a href="https://linkedin.com/in/samuel-mwangi-11597a245" target="_blank" rel="noopener noreferrer" class="block bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
      <img src="https://img.freepik.com/free-vector/festive-last-minute-coupon-background-with-chat-bubble_1017-45035.jpg?ga=GA1.1.1371894334.1745239415&semt=ais_hybrid&w=740" alt="Biomedical Equipment Lifecycle Tracker" class="w-full h-56 object-cover">
      <div class="p-6">
        <h3 class="text-xl font-semibold text-teal-700 mb-2 hover:text-blue-600 transition-colors cursor-pointer">
          Biomedical Equipment Lifecycle Tracker
        </h3>
        <p class="text-teal-600 text-sm">
          Enabled proactive maintenance by tracking the entire lifecycle of critical medical devices.
        </p>
      </div>
    </a>

  </div>
</section>


<!-- 📩 Final CTA -->
<section class="bg-gradient-to-r from-teal-50 to-blue-50 text-center py-24 px-6">
  <h2 class="text-4xl font-extrabold mb-6 text-teal-700 drop-shadow-md">
    Let’s Work Together
  </h2>
  <p class="text-gray-700 max-w-xl mx-auto mb-10 text-lg">
    Whether it’s freelance projects, consulting, or a full-time role, I’m excited to collaborate and bring your ideas to life.
  </p>
  <div class="inline-flex flex-col sm:flex-row justify-center gap-6">
    <a href="/assets/Samuel_Mwangi_Resume.pdf" target="_blank" 
       class="inline-block bg-gradient-to-r from-teal-600 to-teal-500 hover:from-teal-700 hover:to-teal-600 
                  text-white px-8 py-4 rounded-full shadow-lg transition-all duration-300 font-semibold
                  flex items-center justify-center gap-2">
      <i class="bi bi-file-earmark-text-fill text-lg"></i> Download Resume
    </a>
    <a href="mailto:samuelmwas262@gmail.com" 
       class="inline-block bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 
                  text-white px-8 py-4 rounded-full shadow-lg transition-all duration-300 font-semibold
                  flex items-center justify-center gap-2">
      <i class="bi bi-envelope-fill text-lg"></i> Contact Me
    </a>
  </div>
</section>


<?php include('footer.php'); ?>
