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
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium neque quis aliquam praesentium? Dolorum enim repellendus doloribus provident ad itaque voluptatem quae? Aspernatur, impedit! Voluptate dicta expedita accusamus dolorum sed veniam numquam aperiam tempora fuga? Est provident expedita mollitia necessitatibus possimus, quibusdam rem enim fuga ad, molestiae dolores ipsam ut eum exercitationem iusto ea explicabo illum id rerum ipsum vero doloribus, blanditiis voluptatem consequatur. Illo, in possimus. Ea exercitationem quod dicta vel impedit earum placeat sed perspiciatis commodi, suscipit, perferendis dolorum autem quidem odit voluptas culpa! Repudiandae quod placeat aliquid quidem ab rem quaerat accusamus dolorem omnis reprehenderit nulla, culpa cum voluptatibus ducimus, autem molestias vel delectus iusto voluptates ratione. Incidunt libero error, asperiores exercitationem nesciunt doloremque expedita quae placeat?
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
            <img src="img/horeca2.jpg" alt="Office" class="">
          </div>
          <div class="bg-brown-light md:w-1/2 p-4">
            <h2 class="text-xl font-bold text-black">Informatie</h2>
            <p class="mt-2 pb-6">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, minima! Aperiam, laboriosam suscipit. Asperiores illum sequi porro, eaque, rem aliquam neque quasi voluptatem eum perferendis doloribus, totam sed iure reiciendis aperiam praesentium. Soluta provident quod laborum ipsa, nesciunt harum magnam voluptas omnis saepe a, expedita temporibus aut, culpa aliquid maiores laboriosam quo quidem repellendus? Voluptate soluta sit natus magni voluptatem recusandae cumque laborum ut, ratione quas error corrupti, praesentium laudantium. Praesentium cum odit molestiae minus commodi aut ex. Reprehenderit veritatis vel, mollitia illum ducimus molestias corrupti perspiciatis ipsa aliquid nihil sunt labore fugit, illo officia repellat omnis repellendus incidunt. Molestiae soluta alias temporibus assumenda non, ex in sunt ut sit, voluptatibus sequi odit, impedit nemo! Quibusdam possimus perspiciatis eius commodi.
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
