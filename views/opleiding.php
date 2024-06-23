<?php require_once __DIR__ . '/partials/_header.php'; ?>
<body class="bg-brown">
  <div class="container mx-auto p-4">
    <header class="bg-brown-light p-4 text-center">
      <h1 class="text-2xl font-bold">Opleidingspagina</h1>
    </header>
    <main class="mt-4">
      <section class="mb-8">
        <div class="flex flex-col md:flex-row">
          <div class="bg-brown-light md:w-1/2 p-4">
            <h2 class="text-xl text-black font-bold">Over ons</h2>
            <p class="mt-2 pb-6">
              Welkom bij onze software developer opleiding. Onze cursus biedt uitgebreide kennis en vaardigheden in programmeren, software engineering, en systeemontwerp. Je leert werken met verschillende programmeertalen en tools en krijgt praktijkgerichte opdrachten en projecten om je vaardigheden in de echte wereld te testen.
            </p>
            <button class="bg-button font-bold py-2 px-4 rounded"><a href="/inschrijf">Inschrijven</a></button>
          </div>
          <div class="bg-brown-light md:w-1/2 p-4 flex justify-center">
            <video controls class="pb-6 w-full max-w-3xl h-auto">
              <source src="video/IntroFilmpje.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </section>
      <section class="mb-8">
        <div class="flex flex-col md:flex-row">
          <div class="bg-brown-light md:w-1/2 p-4 flex justify-center">
            <img src="img/horeca2.jpg" alt="Office" class="w-full max-w-xs">
          </div>
          <div class="bg-brown-light md:w-1/2 p-4">
            <h2 class="text-xl font-bold text-black">Informatie</h2>
            <p class="mt-2 pb-6">
              <strong>Toelatingseisen:</strong>
              <ul class="list-disc ml-6 mt-2">
                <li>Minimaal een middelbare schooldiploma (havo, vwo, of mbo-niveau 4)</li>
                <li>Basiskennis van wiskunde en logica</li>
                <li>Interesse in technologie en programmeren</li>
                <li>Bereidheid om hard te werken en zelfstandig te leren</li>
              </ul>
              Onze opleiding is geschikt voor zowel beginners als degenen met enige ervaring in programmeren. We bieden een ondersteunende leeromgeving met ervaren docenten die klaar staan om je te helpen slagen.
            </p>
            <button class="bg-button font-bold py-2 px-4 rounded"><a href="/inschrijf">Inschrijven</a></button>
          </div>
        </div>
      </section>
      <section class="mb-4">
        <div class="flex items-center justify-center pt-2">
        </div>
      </section>
      <section class="mb-4">
        <div class="flex items-center justify-center pt-2">
          <div class="game-container">
            <h2 class="text-black">HORECA MEMORY GAME</h2>
            <div class="game"></div>
            <button class="text-black bg-button reset" onclick="window.location.reload();">RESET GAME</button>
            <div class="completed-message">Completed</div>
        </div>
        <script>
              const emojis = ["🍕","🍕","🏨","🏨","🌭","🌭","🍹","🍹","🥪","🥪","🍳","🍳","🥩","🥩","👨‍🍳","👨‍🍳"];
            let shuf_emojis = emojis.sort(() => Math.random() - 0.5);
            let firstCard, secondCard;
            let lockBoard = false;
    
            function createBoard() {
                const gameContainer = document.querySelector('.game');
                shuf_emojis.forEach(emoji => {
                    let box = document.createElement('div');
                    box.className = 'item';
                    box.dataset.emoji = emoji;
                    box.innerHTML = emoji;
                    box.addEventListener('click', flipCard);
                    gameContainer.appendChild(box);
                });
            }
    
            function flipCard() {
                if (lockBoard || this === firstCard || this.classList.contains('matched')) return;
                this.classList.add('boxOpen');
    
                if (!firstCard) {
                    firstCard = this;
                    return;
                }
    
                secondCard = this;
                lockBoard = true;
    
                checkForMatch();
            }
    
            function checkForMatch() {
                if (firstCard.dataset.emoji === secondCard.dataset.emoji) {
                    firstCard.classList.add('matched');
                    secondCard.classList.add('matched');
                    resetBoard();
                    checkCompletion();
                } else {
                    setTimeout(() => {
                        firstCard.classList.remove('boxOpen');
                        secondCard.classList.remove('boxOpen');
                        resetBoard();
                    }, 1000);
                }
            }
    
            function checkCompletion() {
                const allMatched = document.querySelectorAll('.item.matched').length === emojis.length;
                if (allMatched) {
                    document.querySelector('.completed-message').style.display = 'block';
                }
            }
    
            function resetBoard() {
                [firstCard, secondCard, lockBoard] = [null, null, false];
            }
    
            createBoard();
        </script>
        </div>
      </section>
    </main>
  </div>
  <?php require_once __DIR__ . '/partials/_footer.php' ?>
