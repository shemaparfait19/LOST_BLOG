<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Urubuga rwanjye</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-family: 'Poppins', sans-serif;
    }
    main {
      flex: 1;
    }
    .full-width-image img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- Umutwe w'urubuga (Header) -->
  <header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
      <h1 class="text-2xl font-bold">shemBLOG</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#" class="text-gray-600 hover:text-blue-500">Home</a></li>
          <li><a href="#" class="text-gray-600 hover:text-blue-500">Login</a></li>
          <li><a href="#" class="text-gray-600 hover:text-blue-500">Register</a></li>
          <li><a href="#" class="text-gray-600 hover:text-blue-500">Dashboard</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Full-width Image -->
  <section class="full-width-image">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZZdb6qDfGRWSISbJpWPpbrOeZfM83gCb6qg&s" alt="Full-width banner">
  </section>

  <!-- Ibikubiye mu rubuga (Main Content) -->
  <main class="container mx-auto my-8 px-4">
    <!-- Icyiciro cya "Featured" (Featured Posts) -->
    <section class="mb-12">
      <h2 class="text-3xl font-semibold mb-4">Latest blog posts</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Featured Post 1 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://i0.wp.com/picjumbo.com/wp-content/uploads/beautiful-green-field-scenery-free-image.jpg?w=600&quality=80" alt="Ifoto y'inkuru" class="w-full">
          <div class="p-4">
            <h2 class="text-xl font-semibold mb-2">Umutwe w'Inkuru 1</h2>
            <p class="text-gray-600 mb-4">Inkuru yihariye yibanda ku gitekerezo runaka, cyifitiye akamaro abasomyi...</p>
            <a href="#" class="text-blue-500 hover:underline">Read More</a>
          </div>
        </article>

        <!-- Featured Post 2 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://i0.wp.com/picjumbo.com/wp-content/uploads/beautiful-green-field-scenery-free-image.jpg?w=600&quality=80" alt="Ifoto y'inkuru" class="w-full">
          <div class="p-4">
            <h2 class="text-xl font-semibold mb-2">Umutwe w'Inkuru 2</h2>
            <p class="text-gray-600 mb-4">Amakuru akomeye arebana n'ibintu bikwiye kumenyekana cyane muri iyi minsi...</p>
            <a href="#" class="text-blue-500 hover:underline">Read More -----></a>
          </div>
        </article>

        <!-- Featured Post 3 -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="https://i0.wp.com/picjumbo.com/wp-content/uploads/beautiful-green-field-scenery-free-image.jpg?w=600&quality=80" alt="Ifoto y'inkuru" class="w-full">
          <div class="p-4">
            <h2 class="text-xl font-semibold mb-2">Umutwe w'Inkuru 3</h2>
            <p class="text-gray-600 mb-4">Ubushakashatsi bushya butanga amakuru afatika ku byibanze abantu bakeneye kumenya...</p>
            <a href="#" class="text-blue-500 hover:underline">Read More</a>
          </div>
        </article>
      </div>
    </section>
  </main>

  <!-- Akadomo ka nyuma (Footer) -->
  <footer class="bg-gray-800 text-white py-6 mt-auto">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 RwandaBlog</p>
      <ul class="flex justify-center space-x-4 mt-4">
        <li><a href="#" class="text-gray-400 hover:text-white">Facebook</a></li>
        <li><a href="#" class="text-gray-400 hover:text-white">Twitter</a></li>
        <li><a href="#" class="text-gray-400 hover:text-white">Instagram</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>
