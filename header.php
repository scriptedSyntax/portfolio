<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
  $isDark = $currentPage === 'tech.php'; // Only tech.php gets dark theme
  $isIndex = $currentPage === 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Samuel Mwangi Ngonjo – Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          borderRadius: {
            'smooth': '1.25rem',
          },
        },
      },
    };
  </script>

  <style>
    html {
      scroll-behavior: smooth;
    }
    .nav-link:hover {
      color: #0ea5e9;
    }
    .career-card:hover {
      transform: scale(1.05);
      transition: all 0.3s ease-in-out;
    }
    .glass {
      backdrop-filter: blur(12px);
      background-color: rgba(255, 255, 255, 0.25);
    }
    .glass-dark {
      backdrop-filter: blur(12px);
      background-color: rgba(17, 24, 39, 0.6);
    }
  </style>
</head>

<body class="font-sans 
  <?php 
    echo $isDark ? 'bg-gray-900 text-white' : (
      $isIndex ? 'bg-gradient-to-br from-gray-100 via-white to-gray-900 text-neutral-800' : 'bg-white text-gray-800'
    ); 
  ?>
">

<!-- 🧭 Navigation Bar -->
<header class="<?php echo $isDark ? 'glass-dark' : 'glass'; ?> shadow-md sticky top-0 z-50 border-b border-gray-700 rounded-b-smooth" x-data="{ open: false }">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <a href="index.php" class="text-xl font-bold <?php echo $isDark ? 'text-white' : 'text-gray-900'; ?> hover:text-blue-500 transition">
      Samuel Mwangi
    </a>

    <!-- Desktop Links -->
    <nav class="space-x-6 hidden md:inline-block">
      <a href="biomed.php" class="nav-link <?php echo $currentPage === 'biomed.php' ? 'text-green-500 font-semibold' : ($isDark ? 'text-gray-300' : 'text-gray-600'); ?>">Biomedical</a>
      <a href="tech.php" class="nav-link <?php echo $currentPage === 'tech.php' ? 'text-green-400 font-semibold' : ($isDark ? 'text-gray-300' : 'text-gray-600'); ?>">Tech</a>
      <a href="mailto:samuelmwas262@gmail.com" class="nav-link <?php echo $isDark ? 'text-blue-300' : 'text-gray-600'; ?>">Contact</a>
    </nav>

    <!-- Hamburger Button -->
    <button 
      @click="open = !open"
      class="md:hidden text-3xl focus:outline-none text-blue-600 hover:text-blue-800 transition"
      :class="{ 'rotate-90': open }"
      aria-label="Toggle Navigation"
    >
      <i class="bi bi-list"></i>
    </button>
  </div>

  <!-- Mobile Menu -->
  <nav 
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4"
    class="md:hidden bg-white dark:bg-gray-800 text-center py-4 space-y-4 text-lg"
    style="display: none;"
  >
    <a href="biomed.php" class="block <?php echo $currentPage === 'biomed.php' ? 'text-green-500 font-semibold' : 'text-gray-700 dark:text-gray-300'; ?>">Biomedical</a>
    <a href="tech.php" class="block <?php echo $currentPage === 'tech.php' ? 'text-green-400 font-semibold' : 'text-gray-700 dark:text-gray-300'; ?>">Tech</a>
    <a href="mailto:samuelmwas262@gmail.com" class="block text-blue-600 dark:text-blue-400">Contact</a>
  </nav>
</header>
