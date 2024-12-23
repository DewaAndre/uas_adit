<nav id="navbar" class="fixed top-0 left-0 w-full bg-transparent transition duration-300 z-10">
    <div class="container mx-auto px-20 flex items-center justify-between h-16">
        {{-- logo --}}
        <div class=" flex flex-shrink-0">
            <img src="{{ asset('img/badung.png') }}" alt="Logo" class="h-16 w-auto"> 
            <h2 class="m-auto font-bold">SANGEH</h2>
        </div>

        {{-- menu --}}
        <ul id="menu" class="hidden md:flex space-x-8">
            <li><a href="#" class="text-black font-bold hover:text-gray-400">Profil Desa</a></li>
            <li><a href="#" class="text-black font-bold hover:text-gray-400">Layanan</a></li>
            <li><a href="#" class="text-black font-bold hover:text-gray-400">Kontak</a></li>
            <li><a href="/login" class="text-white font-bold hover:text-gray-800 bg-[#1A5770] px-8 py-2 rounded-3xl">Login</a></li>
        </ul>

        {{-- hamburger menu --}}
        <button id="hamburger" class="block md:hidden text-black hover:text-gray-400">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    {{-- responsive --}}
    <div id="responsiveMenu" class="hidden md:hidden bg-white shadow-md">
        <ul class="space-y-4 p-4 text-center">
            <li><a href="#" class="text-black hover:text-gray-400">Profil Desa</a></li>
            <li><a href="#" class="text-black hover:text-gray-400">Layanan</a></li>
            <li><a href="#" class="text-black hover:text-gray-400">Kontak</a></li>
            <li><a href="#" class="text-white hover:text-gray-800 bg-[#1A5770] px-8 py-2 rounded-3xl">Login</a></li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.getElementById("navbar");
        const hamburger = document.getElementById("hamburger");
        const responsiveMenu = document.getElementById("responsiveMenu");

        // Navbar background change on scroll
        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.remove("bg-transparent");
                navbar.classList.add("bg-white", "shadow-md");
            } else {
                navbar.classList.remove("bg-white", "shadow-md");
                navbar.classList.add("bg-transparent");
            }
        });

        // Toggle responsive menu
        hamburger.addEventListener("click", function () {
            responsiveMenu.classList.toggle("hidden");
        });
    });
</script>
