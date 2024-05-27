<?php require_once __DIR__ . '/partials/_header.php'; ?>

<style>
    body {
        background-color: #BCA674 ;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;

        * {
            box-sizing: border-box;
        }
    }
    .custom-button-color {
        background-color: #E6DCBC;
    }
</style>
<body class="text-gray-800">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="bg-white p-10 rounded-lg shadow-lg flex flex-col md:flex-row md:space-x-10">

            <img src="img/gogle-maps.png" alt="Contact Image" class="bg-gray-100 p-8 rounded-lg mb-6 md:mb-0 md:w-1/2 object-cover">

            <form action="/contact" method="post" class="bg-white p-8 rounded-lg w-full md:w-1/2 max-w-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-6">contact</h2>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="phone">Phone number</label>
                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-200" type="text" id="phone" name="tel">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="email">Email</label>
                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-200" type="email" id="email" name="email">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="message">Your message</label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-yellow-200" id="message" name="message" rows="4"></textarea>
                </div>
                <button class="w-full custom-button-color text-gray-800 py-2 px-4 rounded-md shadow-sm hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-200">Send</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php require_once __DIR__ . '/partials/_footer.php'; ?>
