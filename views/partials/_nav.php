<header>
    <nav>
        <ul class='nav-bar flex justify-between items-center p-4'>
            <input type='checkbox' id='check' class='hidden' />
            <span class="menu flex space-x-4">
                <li><a href="/">Home</a></li>
                <li><a href="/about">Info</a></li>
                <li><a href="/inschrijf">Inschrijven</a></li>
                <li><a href="/contact">Contact Ons</a></li>
            </span>
            <div class="flex items-center space-x-4">
                <?php 
                session_start();
                if(isset($_SESSION['loggedin'])){
                    echo "<li><a href='/dashboard' class='bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded'>Dashboard</a></li>";
                    echo "<li><a href='?logout=true' class='bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded'>Logout</a></li>";
                } else {
                    echo "<li><a href='/login' class='bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded'>Login</a></li>";
                }
                ?>
            </div>
            <label for="check" class="close-menu cursor-pointer"><i class="fas fa-times"></i></label>
            <label for="check" class="open-menu cursor-pointer"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
    <?php 
    if(isset($_SESSION['loggedin'])){
        echo "<div id='welcome-message' class='flex items-center justify-between text-lg bg-blue-100 text-blue-700 p-2 rounded mt-2 mx-4'>
                <p>Welkom, ".$_SESSION['email']."</p>
                <button id='close-btn' class='text-blue-700 hover:text-blue-900 font-bold px-2'>&times;</button>
              </div>";
    }	 
    ?>
</header>


<?php 
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: /");
    exit();
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var closeBtn = document.getElementById('close-btn');
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                var welcomeMessage = document.getElementById('welcome-message');
                if (welcomeMessage) {
                    welcomeMessage.style.display = 'none';
                }
            });
        }
    });
</script>
