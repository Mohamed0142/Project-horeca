<?php require_once __DIR__ . '/partials/_header.php'; ?>

<body>
    <div class="container">
        <h2>Your information was sent successfully!</h2>
        <p>You will be redirected back to the form in 3 seconds.</p>
    </div>

    <script>
        setTimeout(function(){
            window.location.href = '/inschrijf';
        }, 3000);
    </script>
</body>

<?php require_once __DIR__ . '/partials/_footer.php'; ?>
