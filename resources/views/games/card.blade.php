@extends('games.wrapper')
@section('title')
    Home
@endsection

<link rel="stylesheet" href="{{ asset('css/card.css') }}">
<style>
    .start-button {
        font-size: 0.9rem;
    }

    #cards-container {
        row-gap: 0px;
    }
</style>

@section('content')
    <div id="cardinfo">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img class="info-img" style="max-width: 100%;">
        <div class="figure-result">
            <img src="images-v2/mineral-memory/15.png" alt="">
        </div>
    </div>
    <div id="cardinstruction">
        <div style="text-align: right;">
            <img src="images-v2/mineral-memory/27.png" class="draglogo" style="max-width: 100%;">
        </div>
        <br>
        <div id="instruction-board">
            Temukan pasangan deskripsi yang tepat dari setiap kotak yang berisi gambar. hafalkan karena merupakan petunjuk untuk permainan selanjutnya.
        </div>
        <div class="btn-start-img">
            <img src="images-v2/start.png" alt="" style="max-width: 150px;">
        </div>
        {{-- <div class="figure-instruction">
            <img src="images-v2/mineral-memory/15.png" alt="">
        </div> --}}
    </div>
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images-v2/mineral-memory/111.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images-v2/mineral-memory/15.png" alt="">
            <div class="btn-submit-img">
                <img src="images-v2/main/7.png" alt="" style="max-width: 150px;">
            </div>
        </div>
    </div>

    <div style="text-align: right;">
        <img src="images-v2/mineral-memory/27.png" id="draglogo">
    </div>
    <div class="cards" id="cards-container">
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-1.png" class="img-memory food" data-id="card-img-1" data-src="images-v2/responses/160.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-2.png" class="img-memory food" data-id="card-img-2" data-src="images-v2/responses/158.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-3.png" class="img-memory food" data-id="card-img-3" data-src="images-v2/responses/157.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-4.png" class="img-memory food" data-id="card-img-4" data-src="images-v2/responses/164.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-5.png" class="img-memory food" data-id="card-img-5" data-src="images-v2/responses/164.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-6.png" class="img-memory food" data-id="card-img-6" data-src="images-v2/responses/162.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-7.png" class="img-memory food" data-id="card-img-7" data-src="images-v2/responses/163.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-8.png" class="img-memory food" data-id="card-img-8" data-src="images-v2/responses/161.png" alt="Card Image">
            </div>
        </div>

        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img1.png" class="img-memory description" data-id="card-img-1" data-src="images-v2/responses/160.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img2.png" class="img-memory description" data-id="card-img-2" data-src="images-v2/responses/158.png" alt="card-image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img3.png" class="img-memory description" data-id="card-img-3" data-src="images-v2/responses/157.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img4.png" class="img-memory description" data-id="card-img-4" data-src="images-v2/responses/164.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img5.png" class="img-memory description" data-id="card-img-5" data-src="images-v2/responses/164.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img6.png" class="img-memory description" data-id="card-img-6" data-src="images-v2/responses/162.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img7.png" class="img-memory description" data-id="card-img-7" data-src="images-v2/responses/163.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img8.png" class="img-memory description" data-id="card-img-8" data-src="images-v2/responses/161.png" alt="Card Image">
            </div>
        </div>

        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-1.png" class="img-memory food" data-id="card-img-1" data-src="images-v2/responses/160.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-2.png" class="img-memory food" data-id="card-img-2" data-src="images-v2/responses/158.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-3.png" class="img-memory food" data-id="card-img-3" data-src="images-v2/responses/157.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-4.png" class="img-memory food" data-id="card-img-4" data-src="images-v2/responses/164.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-5.png" class="img-memory food" data-id="card-img-5" data-src="images-v2/responses/164.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-6.png" class="img-memory food" data-id="card-img-6" data-src="images-v2/responses/162.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-7.png" class="img-memory food" data-id="card-img-7" data-src="images-v2/responses/163.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img-8.png" class="img-memory food" data-id="card-img-8" data-src="images-v2/responses/161.png" alt="Card Image">
            </div>
        </div>

        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img1.png" class="img-memory description" data-id="card-img-1" data-src="images-v2/responses/160.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img2.png" class="img-memory description" data-id="card-img-2" data-src="images-v2/responses/158.png" alt="card-image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img3.png" class="img-memory description" data-id="card-img-3" data-src="images-v2/responses/157.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img4.png" class="img-memory description" data-id="card-img-4" data-src="images-v2/responses/164.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img5.png" class="img-memory description" data-id="card-img-5" data-src="images-v2/responses/164.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img6.png" class="img-memory description" data-id="card-img-6" data-src="images-v2/responses/162.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img7.png" class="img-memory description" data-id="card-img-7" data-src="images-v2/responses/163.png" alt="Card Image">
            </div>
        </div>
        <div class="card">
            <div class="view front-view">
                <img src="/images-v2/mineral-memory/39.png" alt="">
            </div>
            <div class="view back-view">
                <img src="/images-v2/img8.png" class="img-memory description" data-id="card-img-8" data-src="images-v2/responses/161.png" alt="Card Image">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script src="/js/card.js?v={{ \Str::uuid() }}"></script> --}}
    <script>
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
                trueSound.currentTime = 0;
                trueSound.preload = "auto";
                trueSound.play();

                // if two cards img matched
                matchedCard++; //increment matched value by one

                setTimeout(() => {
                    // if two card not matched
                    cardOne.classList.add("beat");
                    cardTwo.classList.add("beat");
                    // cardOne = cardTwo = '';//setting both card value to blank

                    $('#cardinfo').find('.info-img').prop('src', img2.getAttribute('data-src'))
                    $('#cardinfo').fadeIn(500)
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
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(response) {
                            console.log(response);
                        },
                    });
                }

                // return disableDeck = false;
            } else {
                falseSound.currentTime = 0;
                falseSound.preload = "auto";
                falseSound.play();

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
    </script>
@endpush
