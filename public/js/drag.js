const images = document.querySelectorAll('.image');
const answers = document.querySelectorAll('.answer');
var selectedImage = null;
var selectedAnswer = null;
var counter = 0;
// Menambahkan event listener pada gambar untuk memilih gambar
images.forEach(image => {
    image.addEventListener('click', (e) => {
        $('.images').find('img:not(.correct)').css('background-color', '')
        selectedImage = $(e.target);

        if ((selectedImage).hasClass('correct')) {
            return false
        }

        $(selectedImage).css('background-color', 'red')


        // Cek apakah gambar yang dipilih cocok dengan label jawaban
        // if (selectedImage.id === selectedAnswer.id) {
        //     selectedAnswer.classList.add('correct');  // Tandai jawaban benar dengan warna hijau
        //     selectedAnswer.classList.remove('incorrect');
        // } else {
        //     selectedAnswer.classList.add('incorrect');  // Tandai jawaban salah dengan warna merah
        //     selectedAnswer.classList.remove('correct');
        // }

        // Cek jika semua jawaban benar
        checkAllAnswers();
    });
});

answers.forEach(answer => {
    answer.addEventListener('click', (e) => {
        $('.answers').find('.answer:not(.correct)').css('background-color', '')
        selectedAnswer = $(e.target);

        if ((selectedAnswer).hasClass('correct')) {
            return false
        }

        $(selectedAnswer).css('background-color', 'red')


        // Cek apakah gambar yang dipilih cocok dengan label jawaban
        // if (selectedImage.id === selectedAnswer.id) {
        //     selectedAnswer.classList.add('correct');  // Tandai jawaban benar dengan warna hijau
        //     selectedAnswer.classList.remove('incorrect');
        // } else {
        //     selectedAnswer.classList.add('incorrect');  // Tandai jawaban salah dengan warna merah
        //     selectedAnswer.classList.remove('correct');
        // }

        // Cek jika semua jawaban benar
        checkAllAnswers();
    });
});

// Fungsi untuk memeriksa jika semua jawaban sudah benar
function checkAllAnswers() {
    const result = document.getElementById('result');
    const imageId = selectedImage?.prop('id') ?? null;
    const answerId = selectedAnswer?.prop('id') ?? null;

    const srcImage = $('#' + imageId).prop('src');
    const srcAnswer = $('#' + answerId).prop('src');
    // console.log(imageId, answerId);
    // console.log(srcImage, srcAnswer);

    if ((imageId + '-answer') == answerId) {
        counter++
        $('#' + imageId).prop('src', srcAnswer)
        // $('#' + answerId).remove()
        selectedImage.addClass('correct');
        selectedAnswer.addClass('correct');
        $(selectedAnswer).css('background-color', 'green')
        $(selectedImage).css('background-color', 'green')
        result.textContent = 'Congratulations! You matched all images correctly!';
        result.style.color = 'green';

        if (counter == 4) {
            $('#cardscore').fadeIn()
        }
    } else {
        result.textContent = 'Keep going! Try to match all images correctly.';
        result.style.color = 'orange';
    }

    // const correctAnswers = document.querySelectorAll('.correct');
    // const totalAnswers = answers.length;

    // if (correctAnswers.length === totalAnswers) {
    //     result.textContent = 'Congratulations! You matched all images correctly!';
    //     result.style.color = 'green';
    // } else {
    //     result.textContent = 'Keep going! Try to match all images correctly.';
    //     result.style.color = 'orange';
    // }
}
