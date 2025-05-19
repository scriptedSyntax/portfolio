<?php include 'header.php'; ?>
<!-- 🌟 Hero Section with Tailwind CSS and Background Image -->
<section 
  class="relative bg-gray-900 text-white py-24 px-6 border-b border-gray-700 overflow-hidden"
  style="background-image: url('https://img.freepik.com/free-photo/medical-technology-background-with-hands_23-2148927871.jpg?w=1060&t=st=1684465789~exp=1684466389~hmac=8f367f88cc09c8017a2edcc8f5408c3af2a1a7122129e8c7a119c6e4c2fcb738'); background-size: cover; background-position: center;">
  
  <!-- Overlay for better text contrast -->
  <div class="absolute inset-0 bg-black bg-opacity-60"></div>

  <div class="relative max-w-xl mx-auto text-center">
    <h1 class="text-5xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">
      Samuel Mwangi Ngonjo
    </h1>
    <p class="text-xl md:text-2xl mb-10 text-teal-300 drop-shadow">
      Medical Engineering Technologist
    </p>
    <div class="space-y-6 text-lg text-white max-w-xs mx-auto">
      <p class="flex items-center justify-center gap-3">
        <i class="bi bi-telephone-fill text-emerald-400 text-2xl"></i>
        <span class="drop-shadow">+254 799 594 621</span>
      </p>
      <p class="flex items-center justify-center gap-3">
        <i class="bi bi-envelope-fill text-blue-400 text-2xl"></i>
        <a href="mailto:samuel.mwas97@gmail.com" class="underline hover:text-blue-300 drop-shadow">
          samuel.mwas97@gmail.com
        </a>
      </p>
      <p class="flex items-center justify-center gap-3">
        <i class="bi bi-linkedin text-blue-500 text-2xl"></i>
        <a href="https://linkedin.com/in/samuel-mwangi-11597a245" target="_blank" class="underline hover:text-blue-300 drop-shadow">
          LinkedIn Profile
        </a>
      </p>
    </div>
  </div>
</section>

<!-- 🧠 Professional Summary -->
<section class="relative bg-gradient-to-br from-teal-50 via-white to-blue-50 py-20 px-6">
  <div class="max-w-4xl mx-auto bg-white/90 backdrop-blur-sm shadow-xl rounded-lg p-10 border border-teal-100">
    <h2 class="text-3xl font-bold text-teal-700 mb-6 flex items-center gap-2">
      <i class="bi bi-clipboard2-pulse-fill text-teal-600 text-2xl"></i>
      Professional Summary
    </h2>
    <p class="text-gray-800 text-lg leading-relaxed">
      I’m a dedicated <span class="font-semibold text-emerald-700">Biomedical Engineering Technologist</span> with proven expertise in
      <span class="text-blue-700 font-medium">medical device maintenance</span>, calibration, and hospital systems optimization.
      I ensure optimal performance through preventive and corrective maintenance, maximizing equipment uptime and ensuring strict regulatory compliance.
    </p>
    <p class="text-gray-800 text-lg mt-4 leading-relaxed">
      My experience includes integrating <span class="text-emerald-700 font-medium">computerized maintenance management systems (CMMS)</span>
      to streamline workflows and enhance hospital operational efficiency. I’m driven by a passion for delivering reliable medical technology that elevates patient care and clinical outcomes.
    </p>
  </div>
</section>
<!-- 💼 Professional Experience -->
<section class="py-20 px-6 bg-gradient-to-b from-white to-teal-50">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-3xl font-bold text-teal-700 mb-10 flex items-center gap-2">
      <i class="bi bi-briefcase-fill text-teal-600 text-2xl"></i>
      Professional Experience
    </h2>

    <!-- KU Hospital -->
    <div class="bg-white rounded-xl shadow-md p-6 mb-8 border-l-4 border-emerald-500">
      <h3 class="text-xl font-bold text-emerald-700 mb-1">Biomedical Engineering Technologist</h3>
      <p class="text-sm text-gray-600 mb-4 flex items-center gap-2">
        <i class="bi bi-hospital-fill text-emerald-500"></i>
        Kenyatta University Teaching, Referral & Research Hospital • Mar 2024 – May 2024
      </p>
      <ul class="list-disc list-inside text-gray-700 space-y-2 text-base">
        <li>Executed preventive maintenance schedules across various departments.</li>
        <li>Repaired high-acuity equipment such as ventilators and defibrillators.</li>
        <li>Applied predictive monitoring to reduce surprise failures.</li>
        <li>Led installations and commissioning of advanced medical systems.</li>
        <li>Calibrated high-precision tools including MRI chillers and dental units.</li>
        <li>Increased uptime to 95% by streamlining maintenance protocols.</li>
        <li>Created SOPs and supported hospital policy development for asset tracking.</li>
      </ul>
    </div>

    <!-- Thika Hospital -->
    <div class="bg-white rounded-xl shadow-md p-6 mb-8 border-l-4 border-blue-500">
      <h3 class="text-xl font-bold text-blue-700 mb-1">Biomedical Engineering Technologist</h3>
      <p class="text-sm text-gray-600 mb-4 flex items-center gap-2">
        <i class="bi bi-building-fill-gear text-blue-500"></i>
        Thika Level 5 Hospital • Nov 2023 – Jan 2024
      </p>
      <ul class="list-disc list-inside text-gray-700 space-y-2 text-base">
        <li>Upgraded imaging systems and plant infrastructure for better performance.</li>
        <li>Reduced downtime by 20% via proactive maintenance measures.</li>
        <li>Rolled out a CMMS solution improving task management and response times.</li>
        <li>Enforced QA protocols and safety standards during device inspections.</li>
      </ul>
    </div>

    <!-- Medibridge -->
    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-cyan-500">
      <h3 class="text-xl font-bold text-cyan-700 mb-1">Consultant & Field Technician</h3>
      <p class="text-sm text-gray-600 mb-4 flex items-center gap-2">
        <i class="bi bi-truck-front-fill text-cyan-500"></i>
        Medibridge Kenya • Aug 2023 – Nov 2023
      </p>
      <ul class="list-disc list-inside text-gray-700 space-y-2 text-base">
        <li>Installed and serviced critical care equipment across multiple facilities.</li>
        <li>Conducted on-site training for biomedical staff and clinicians.</li>
        <li>Advised procurement teams and conducted rigorous device safety audits.</li>
      </ul>
    </div>
  </div>
</section>

<!-- 🎓 Education -->
<section class="bg-white py-20 px-6">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-emerald-700 mb-12 flex items-center justify-center gap-3">
      <i class="bi bi-journal-richtext text-emerald-500 text-2xl"></i> Education & Learning Journey
    </h2>

    <div class="relative border-l-4 border-emerald-500 pl-6 space-y-12">

      <!-- Diploma -->
      <div class="bg-emerald-50 p-6 rounded-md shadow hover:shadow-lg transition-all duration-300 group relative">
        <div class="absolute -left-3 top-4 w-6 h-6 bg-emerald-500 rounded-full ring-4 ring-white"></div>
        <h3 class="text-xl font-semibold text-emerald-800 group-hover:text-emerald-900">
          Diploma in Medical Engineering Technology
        </h3>
        <p class="text-sm text-gray-600 mt-1 mb-2">
          <i class="bi bi-building-fill text-emerald-600 mr-1"></i> Kenya Medical Training College • 2024
        </p>
        <p class="text-gray-700">
          <span class="font-medium">Key Courses:</span> Clinical Engineering, Biostatistics, Hospital Plant & Building, Health Informatics.
        </p>
      </div>

      <!-- Self-Study -->
      <div class="bg-blue-50 p-6 rounded-md shadow hover:shadow-lg transition-all duration-300 group relative">
        <div class="absolute -left-3 top-4 w-6 h-6 bg-blue-500 rounded-full ring-4 ring-white"></div>
        <h3 class="text-xl font-semibold text-blue-800 group-hover:text-blue-900">
          Computer Science in Healthcare (Self-Study)
        </h3>
        <p class="text-sm text-gray-600 mt-1 mb-2">
          <i class="bi bi-laptop-fill text-blue-600 mr-1"></i> Ongoing Independent Study
        </p>
        <p class="text-gray-700">
          <span class="font-medium">Topics Covered:</span> Python Programming, AI in Medicine, HIS, Cybersecurity, Cloud in Health.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- 🧾 Certifications -->
<section class="py-20 px-6 bg-gray-50">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-emerald-700 mb-10 flex items-center justify-center gap-2">
      <i class="bi bi-award-fill text-emerald-500 text-2xl"></i> Certifications & Training
    </h2>

    <div class="space-y-5">
      <div class="flex items-start gap-3">
        <i class="bi bi-check-circle-fill text-emerald-500 mt-1 text-lg"></i>
        <p class="text-gray-700">Defibrillator Calibration – <span class="font-medium">Fluke Biomedical</span></p>
      </div>
      <div class="flex items-start gap-3">
        <i class="bi bi-check-circle-fill text-emerald-500 mt-1 text-lg"></i>
        <p class="text-gray-700">Neonatal Device QA – <span class="font-medium">Fluke Biomedical</span></p>
      </div>
      <div class="flex items-start gap-3">
        <i class="bi bi-check-circle-fill text-blue-500 mt-1 text-lg"></i>
        <p class="text-gray-700">PET/CT Quality Assurance – <span class="font-medium">GE Healthcare</span></p>
      </div>
      <div class="flex items-start gap-3">
        <i class="bi bi-check-circle-fill text-blue-500 mt-1 text-lg"></i>
        <p class="text-gray-700">Oxygen Access & QA – <span class="font-medium">Biomedical Association of Zambia</span></p>
      </div>
      <div class="flex items-start gap-3">
        <i class="bi bi-check-circle-fill text-emerald-500 mt-1 text-lg"></i>
        <p class="text-gray-700">Prosim 4 & 8 Medical Equipment – <span class="font-medium">Fluke Biomedical</span></p>
      </div>
      <div class="flex items-start gap-3">
        <i class="bi bi-check-circle-fill text-emerald-500 mt-1 text-lg"></i>
        <p class="text-gray-700">NIBP Test Optimization – <span class="font-medium">Fluke Biomedical</span></p>
      </div>
    </div>
  </div>
</section>

<!-- 🛠️ Skills -->
<section class="bg-gradient-to-b from-white via-gray-50 to-white py-20 px-6">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-emerald-700 mb-10 flex items-center justify-center gap-2">
      <i class="bi bi-tools text-emerald-500 text-2xl"></i> Skills
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-gray-700">
      <!-- Technical Skills -->
      <div>
        <h3 class="text-xl font-semibold mb-3 text-emerald-600 flex items-center gap-2">
          <i class="bi bi-cpu-fill text-emerald-500"></i> Technical Skills
        </h3>
        <ul class="space-y-2">
          <li class="flex items-start gap-2">
            <i class="bi bi-check-circle-fill text-emerald-500 mt-1"></i> Medical Device Troubleshooting
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-check-circle-fill text-emerald-500 mt-1"></i> Calibration & QA Testing
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-check-circle-fill text-emerald-500 mt-1"></i> Regulatory Risk Management
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-check-circle-fill text-emerald-500 mt-1"></i> Maintenance Scheduling
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-check-circle-fill text-emerald-500 mt-1"></i> CMMS Systems
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-check-circle-fill text-emerald-500 mt-1"></i> Technical Documentation
          </li>
        </ul>
      </div>

      <!-- Soft Skills -->
      <div>
        <h3 class="text-xl font-semibold mb-3 text-blue-600 flex items-center gap-2">
          <i class="bi bi-people-fill text-blue-500"></i> Soft Skills
        </h3>
        <ul class="space-y-2">
          <li class="flex items-start gap-2">
            <i class="bi bi-star-fill text-blue-500 mt-1"></i> Analytical Thinking
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-star-fill text-blue-500 mt-1"></i> Communication & Collaboration
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-star-fill text-blue-500 mt-1"></i> Project Management
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-star-fill text-blue-500 mt-1"></i> Attention to Detail
          </li>
          <li class="flex items-start gap-2">
            <i class="bi bi-star-fill text-blue-500 mt-1"></i> Leadership
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 📋 Referees (Collapsible CTA) -->
<section class="py-20 px-6 bg-gradient-to-r from-white via-gray-50 to-white text-center" x-data="{ open: false }">
  <div class="max-w-xl mx-auto">
    <button 
      @click="open = !open" 
      class="flex items-center justify-center gap-2 mx-auto text-2xl font-semibold text-gray-800 hover:text-emerald-600 transition"
      aria-expanded="false"
    >
      <i class="bi bi-eye-slash-fill text-xl"></i> Referees <i :class="open ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="text-lg transition-all duration-200"></i>
    </button>

    <div x-show="open" x-transition class="mt-6 text-gray-700">
      <p class="mb-6 text-lg">
        It’s just me here — no bureaucracy or red tape. If you’re serious about references, just <strong>reach out</strong>. I’ll connect you directly with the right person.
      </p>

      <div class="flex justify-center gap-4">
        <a href="mailto:samuel.mwas97@gmail.com" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-full shadow transition">
          <i class="bi bi-envelope-fill"></i> Email Me
        </a>
        <a href="/assets/Samuel_Mwangi_Resume.pdf" class="inline-flex items-center gap-2 bg-gray-800 hover:bg-gray-900 text-white px-5 py-2 rounded-full shadow transition">
          <i class="bi bi-download"></i> Resume PDF
        </a>
      </div>

      <div class="flex justify-center gap-6 mt-8 text-gray-600 text-xl">
        <a href="https://linkedin.com/in/samuel-mwangi-11597a245" target="_blank" class="hover:text-blue-700 transition"><i class="bi bi-linkedin"></i></a>
        <a href="mailto:samuel.mwas97@gmail.com" class="hover:text-emerald-600 transition"><i class="bi bi-envelope-fill"></i></a>
        <a href="tel:+254799594621" class="hover:text-emerald-500 transition"><i class="bi bi-telephone-fill"></i></a>
      </div>

      <p class="text-sm text-gray-500 mt-4 italic">
        Trust is personal. Let’s start there.
      </p>
    </div>
  </div>
</section>


<?php include 'footer.php'; ?>
