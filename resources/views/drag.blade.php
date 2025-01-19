@extends('wrapper')
@section('title')
    Home
@endsection
<link rel="stylesheet" href="{{ asset('css/drag.css') }}">
<style>
    #draglogo {
        width: 20vh;
        margin-bottom: 10vh;

    }

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
@section('content')
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
            <div alt="Drag4" class="image target" id="target1" data-accept="draggable1">
            </div>
            <div alt="Drag4" class="image target" id="target2" data-accept="draggable2">
            </div>
            <div alt="Drag4" class="image target" id="target3" data-accept="draggable3">
            </div>
            <div alt="Drag4" class="image target" id="target4" data-accept="draggable4">
            </div>
        </div>

        <div class="col answers" style="position:relative;padding-right: 0px;">
            <div style="position: absolute;">
                <img src="images/meat-match-up/101.png" id="draggable1" class="answer draggable" draggable="true" data-target="target1">
            </div>
            <div style="position: absolute;top:80px;">
                <img src="images/meat-match-up/100.png" id="draggable2" class="answer draggable" draggable="true" data-target="target2">
            </div>
            <div style="position: absolute;top:160px;">
                <img src="images/meat-match-up/97.png" id="draggable3" class="answer draggable" draggable="true" data-target="target3">
            </div>
            <div style="position: absolute;top:240px;">
                <img src="images/meat-match-up/98.png" id="draggable4" class="answer draggable" draggable="true" data-target="target4">
            </div>
            <div style="position: absolute;top:320px;">
                <img src="images/meat-match-up/99.png" id="draggable5" class="answer draggable" draggable="true" data-target="target5">
            </div>
        </div>
    </div>

    <script>
        const draggables = document.querySelectorAll('.draggable');
        const targets = document.querySelectorAll('.target');
        const scoreDisplay = document.getElementById('score');
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
                        score += 10;
                    } else {
                        target.classList.add('wrong');
                        score -= 5;
                    }
                    // console.log(draggable);

                    setTimeout(() => {
                        target.classList.remove('correct', 'wrong');
                    }, 500);

                    // Reset draggable position
                    draggable.style.left = '';
                    draggable.style.top = '';
                    scoreDisplay.textContent = score;
                }
            });
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
    </script>
@endsection
