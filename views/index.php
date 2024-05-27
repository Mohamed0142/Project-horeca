<?php require_once __DIR__ . '/partials/_header.php'; ?>


<!-- Main Image Section -->
<div class="relative">
    <img src="img/Home.png" alt="Catering Home website" class="w-full h-96 object-cover">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 text-center">
        <h1 class="text-4xl font-bold mb-4">Catering Home website</h1>
        <div>
            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded m-2">Read More</button>
            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded m-2">Contact Us</button>
        </div>
    </div>
</div>

<!-- Info Sections -->
<div class="container mx-auto my-8 px-4">
    <div class="flex flex-wrap -mx-4">
        <!-- Contact Section -->
        <div class="w-full md:w-1/3 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden text-center">
                <img src="img/Home-contact.png" alt="Contact Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="font-bold text-xl mb-2">Contact ons</h2>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ip consectetur adipiscing elit.</p>
                    <a href="/contact" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded inline-block">contact ons!</a>
                </div>
            </div>
        </div>
        <!-- About Us Section -->
        <div class="w-full md:w-1/3 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden text-center">
                <img src="img/Home-inschrijf.png" alt="About Us Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="font-bold text-xl mb-2">Inschrijven</h2>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ip consectetur adipiscing elit.</p>
                    <a href="/about" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded inline-block">Over ons!</a>
                </div>
            </div>
        </div>
        <!-- Read More Section -->
        <div class="w-full md:w-1/3 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden text-center">
                <img src="img/Home-read-more.png" alt="Read More Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="font-bold text-xl mb-2">Opleiding</h2>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ip consectetur adipiscing elit.</p>
                    <a href="/contact" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded inline-block">contact ons!</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php require_once __DIR__ . '/partials/_footer.php'; ?>
