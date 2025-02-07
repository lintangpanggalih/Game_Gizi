const cards = document.querySelectorAll(".card");
let cardOne, cardTwo;
let disableDeck = false;
let matchedCard = 0;

function flipCard(e) {
    let clickedCard = e.target; //getting user clicked card

    if (clickedCard !== cardOne && !disableDeck) {
        clickedCard.classList.add("flip");

        if (!cardOne) {
            return (cardOne = clickedCard); //return the cardOne value to clickedCard
        }
        cardTwo = clickedCard;

        disableDeck = true;

        let cardOneImg = cardOne.querySelector("img.img-memory"),
            cardTwoImg = cardTwo.querySelector("img.img-memory");

        matchCards(cardOneImg, cardTwoImg);
    }
}

function matchCards(img1, img2) {
    let target_img1 = img1.getAttribute("data-id"),
        target_img2 = img2.getAttribute("data-id");

    let sameType = false;
    if (
        (img1.classList.contains("food") && img2.classList.contains("food")) ||
        (img1.classList.contains("description") &&
            img2.classList.contains("description"))
    ) {
        sameType = true;
    }

    if (target_img1 === target_img2 && !sameType) {
        // if two cards img matched
        matchedCard++; //increment matched value by one

        setTimeout(() => {
            // if two card not matched
            cardOne.classList.add("beat");
            cardTwo.classList.add("beat");
            // cardOne = cardTwo = '';//setting both card value to blank
        }, 400);

        setTimeout(() => {
            // removing both shake and flip classes from the both card after 1.2s
            cardOne = cardTwo = ""; //setting both card value to blank
            disableDeck = false;
        }, 1000);
        cardOne.removeEventListener("click", flipCard);
        cardTwo.removeEventListener("click", flipCard);
        // cardOne.classList.remove('shake', 'flip');
        // cardTwo.classList.remove('shake', 'flip');

        if (matchedCard == 16) {
            // if matched value is 8 that means user has matched all the cards
            $("#cardscore").fadeIn();

            // setTimeout(() => {
            //     return shuffleCard();
            // }, 1000); //calling shuffleCard function after 1s

            $.ajax({
                url: "{{ route('game.save-session') }}",
                type: "PUT",
                data: {
                    score: matchedCard,
                    stage: "mineral-memory",
                },
                success: function (response) {
                    console.log(response);
                },
                error: function (response) {
                    console.log(response);
                },
            });
        }

        // return disableDeck = false;
    } else {
        setTimeout(() => {
            // if two card not matched
            cardOne.classList.add("shake"); // adding shake class to both card after 400ms
            cardTwo.classList.add("shake");
        }, 400);

        setTimeout(() => {
            // removing both shake and flip classes from the both card after 1.2s
            cardOne.classList.remove("shake", "flip");
            cardTwo.classList.remove("shake", "flip");
            cardOne = cardTwo = ""; //setting both card value to blank

            disableDeck = false;
        }, 1200);
    }
}

function shuffleCard() {
    matchedCard = 0;
    cardOne = cardTwo = "";

    let arr = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8]; //creating array of 16 items and each item is repeated twice
    arr.sort(() => (Math.random() > 0.5 ? 1 : -1)); //sorting array item randomly
    const cardsArr = Array.from(cards);
    const shuffledItems = cardsArr.sort(() => Math.random() - 0.5);
    const container = document.getElementById("cards-container");

    container.innerHTML = "";
    shuffledItems.forEach((item) => container.appendChild(item));
}
shuffleCard();

cards.forEach((card) => {
    // adding click event to all cards
    card.addEventListener("click", flipCard);
});
