@extends('games.wrapper')
@section('title')
    Meat Match Up
@endsection
<link rel="stylesheet" href="{{ asset('css/drag.css') }}">
<style>
    .game-area {
        display: flex;
        gap: 20px;
    }

    .draggable {
        width: auto;
        height: 70px;
        /* aspect-ratio: 1/1; */
        cursor: pointer;
        border-radius: 5px;
        cursor: grab;
        touch-action: none;
        /* Disable default gestures */
        position: relative;
    }

    .draggable:active {
        cursor: grabbing;
    }

    .target {
        box-shadow: inset 3px 3px 10px rgba(61, 61, 61, 0.3),
            inset -13px -13px 30px rgba(255, 255, 255, 0.8);
        border-style: groove;
        align-items: center;
        justify-content: center;
        background-color: #b4b4b4;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }

    .target.correct {
        background-color: #2ecc71;
        border-color: #27ae60;
    }

    .target.wrong {
        background-color: #e74c3c;
        border-color: #c0392b;
    }

    .scoreboard {
        margin-top: 20px;
        font-size: 20px;
    }
</style>
@section('game-content')
    <div id="cardinstruction">
        <div style="text-align: right;">
            <img src="images/draglogo.png" class="draglogo" style="max-width: 100%;">
        </div>
        <br>
        <div id="instruction-board">
            Temukan pasangan dari setiap kotak di baris kiri dengan kotak di baris kanan dan pahami pasangannya karena merupakan petunjuk untuk permainan selanjutnya.
        </div>
        <div class="btn-start-img">
            <img src="images/start.png" alt="" style="max-width: 150px;">
        </div>
        <div class="figure-instruction">
            <img src="images/meat-match-up/14.png" alt="">
        </div>
    </div>
    <div id="cardscore">
        <h1 style="color: gold;">CONGRATULATIONS!</h1>
        <br>
        <img src="images/meat-match-up/110.png" alt="" style="max-width: 100%;">
        <div class="start-button">
        </div>
        <div class="figure-score">
            <img src="images/meat-match-up/14.png" alt="">
            <div class="btn-submit-img">
                <img src="images/main/7.png" alt="" style="max-width: 150px;">
            </div>
        </div>
    </div>
    <div style="text-align: right;">
        <img src="images/draglogo.png" id="draglogo">
    </div>

    <div class="row m-0" style="width: 100%;">
        <div class="col images" style="padding-right: 0px;">
            <div>
                <img src="images/drag1.png" alt="Drag1" class="image">
            </div>
            <div>
                <img src="images/drag2.png" alt="Drag2" class="image">
            </div>
            <div>
                <img src="images/drag3.png" alt="Drag3" class="image">
            </div>
            <div>
                <img src="images/drag4.png" alt="Drag4" class="image">
            </div>
        </div>

        <div class="col" style="padding-left: 0px;">
            <div alt="Drag4" class="image target" data-index="1" id="target1" data-accept="draggable1">
            </div>
            <div alt="Drag4" class="image target" data-index="2" id="target2" data-accept="draggable2">
            </div>
            <div alt="Drag4" class="image target" data-index="3" id="target3" data-accept="draggable3">
            </div>
            <div alt="Drag4" class="image target" data-index="4" id="target4" data-accept="draggable4">
            </div>
        </div>

        <div class="col answers" style="position:relative;padding-right: 0px;">
            <div style="position: absolute;">
                <img src="images/meat-match-up/101.png" data-index="1" id="draggable1" class="answer draggable" draggable="true" data-target="target1">
            </div>
            <div style="position: absolute;top:80px;">
                <img src="images/meat-match-up/100.png" data-index="2" id="draggable2" class="answer draggable" draggable="true" data-target="target2">
            </div>
            <div style="position: absolute;top:160px;">
                <img src="images/meat-match-up/102.png" data-index="3" id="draggable3" class="answer draggable" draggable="true" data-target="target3">
            </div>
            <div style="position: absolute;top:240px;">
                <img src="images/meat-match-up/98.png" data-index="4" id="draggable4" class="answer draggable" draggable="true" data-target="target4">
            </div>
            <div style="position: absolute;top:320px;">
                <img src="images/meat-match-up/99.png" data-index="5" id="draggable5" class="answer draggable" draggable="true" data-target="target5">
            </div>
        </div>
    </div>
    <div class="row scoring"></div>
@endsection
@push('scripts')
    <script>
        const draggables = document.querySelectorAll('.draggable');
        const targets = document.querySelectorAll('.target');

        let score = 0;
        let activeElement = null;
        let offsetX = 0;
        let offsetY = 0;

        const onDragStart = (e) => {
            const event = e.touches ? e.touches[0] : e;
            activeElement = e.target;

            offsetX = event.clientX - activeElement.offsetLeft;
            offsetY = event.clientY - activeElement.offsetTop;

            activeElement.style.position = 'absolute';
            activeElement.style.transition = 'none';
        };

        const onDrag = (e) => {
            if (!activeElement) return;
            const event = e.touches ? e.touches[0] : e;

            activeElement.style.left = `${event.clientX - offsetX}px`;
            activeElement.style.top = `${event.clientY - offsetY}px`;
        };

        const onDragEnd = (e) => {
            if (!activeElement) return;

            const draggable = activeElement;
            activeElement = null;

            targets.forEach((target) => {
                const rect = target.getBoundingClientRect();
                const draggableRect = draggable.getBoundingClientRect();

                // Check collision
                if (
                    draggableRect.left < rect.right &&
                    draggableRect.right > rect.left &&
                    draggableRect.top < rect.bottom &&
                    draggableRect.bottom > rect.top
                ) {
                    if (target.dataset.accept === draggable.id) {
                        target.style.backgroundImage = `url(${draggable.src})`
                        draggable.remove()
                        target.classList.add('correct');

                        // scoring
                        const dataIndex = target.dataset.index
                        $('#scoring' + dataIndex).find('img').prop('src', 'images/meat-match-up/44.png')

                        score += 1;
                    } else {
                        target.classList.add('wrong');
                    }

                    setTimeout(() => {
                        target.classList.remove('correct', 'wrong');
                    }, 500);

                    // Reset draggable position
                    draggable.style.left = '';
                    draggable.style.top = '';

                }
            });
            checkScore(score)
        };

        // Mouse Events
        draggables.forEach((draggable) => {
            draggable.addEventListener('mousedown', onDragStart);
        });
        window.addEventListener('mousemove', onDrag);
        window.addEventListener('mouseup', onDragEnd);

        // Touch Events
        draggables.forEach((draggable) => {
            draggable.addEventListener('touchstart', onDragStart);
        });
        window.addEventListener('touchmove', onDrag);
        window.addEventListener('touchend', onDragEnd);

        function checkScore(score) {
            if (score == 4) {
                $('#cardscore').fadeIn()
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            const targetEl = $('.target');
            let scoreEl = ''
            for (let i = 1; i <= targetEl.length; i++) {
                scoreEl += `<div class="col" id="scoring${i}"><img src="images/meat-match-up/38.png" width="50px"></div>`
            }

            $('.scoring').html(scoreEl)
        })
    </script>
@endpush
