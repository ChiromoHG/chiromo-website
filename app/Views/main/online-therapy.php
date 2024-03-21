<?= $this->extend('base/base.php'); ?>
<?= $this->section('content'); ?>
<?= $this->include('partials/navbar.php'); ?>

<div class="load"></div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute mt-0 left-0">
    <path fill="#f3f4f5" fill-opacity="1" d="M0,96L0,192L49.7,192L49.7,256L99.3,256L99.3,96L149,96L149,32L198.6,32L198.6,224L248.3,224L248.3,192L297.9,192L297.9,96L347.6,96L347.6,64L397.2,64L397.2,224L446.9,224L446.9,192L496.6,192L496.6,96L546.2,96L546.2,64L595.9,64L595.9,288L645.5,288L645.5,256L695.2,256L695.2,160L744.8,160L744.8,96L794.5,96L794.5,224L844.1,224L844.1,192L893.8,192L893.8,256L943.4,256L943.4,192L993.1,192L993.1,192L1042.8,192L1042.8,160L1092.4,160L1092.4,224L1142.1,224L1142.1,256L1191.7,256L1191.7,256L1241.4,256L1241.4,256L1291,256L1291,192L1340.7,192L1340.7,288L1390.3,288L1390.3,64L1440,64L1440,0L1390.3,0L1390.3,0L1340.7,0L1340.7,0L1291,0L1291,0L1241.4,0L1241.4,0L1191.7,0L1191.7,0L1142.1,0L1142.1,0L1092.4,0L1092.4,0L1042.8,0L1042.8,0L993.1,0L993.1,0L943.4,0L943.4,0L893.8,0L893.8,0L844.1,0L844.1,0L794.5,0L794.5,0L744.8,0L744.8,0L695.2,0L695.2,0L645.5,0L645.5,0L595.9,0L595.9,0L546.2,0L546.2,0L496.6,0L496.6,0L446.9,0L446.9,0L397.2,0L397.2,0L347.6,0L347.6,0L297.9,0L297.9,0L248.3,0L248.3,0L198.6,0L198.6,0L149,0L149,0L99.3,0L99.3,0L49.7,0L49.7,0L0,0L0,0Z">
    </path>
</svg>

<div class="flex justify-center items-center my-10 relative">
    <div class="min-w-0 md:w-2/5 lg:w-9/12 w-full mx-auto text-center">

        <div class="app">
            <h1>To begin, tell us why you're looking for help today.</h1>
            <div class="quiz">
                <h2 id="question">Question goes here</h2>
                <div id="answer-buttons">
                    <button class="btn"></button>
                </div>
<!--                <button id="next-btn">next</button>-->
            </div>
        </div>
    </div>
</div>

<div class="absolute bottom-0 right-0">
    <button id="next-btn"><i class="uil uil-skip-forward pr-2"></i>Next</button>
</div>



<?= $this->include('partials/footer.php'); ?>
<?= $this->endSection(); ?>

<?= $this->section('online-therapy-script'); ?>
<script>
    const questions = [
        {
            question: "What is your age?",
            answers: [
                {text: "19 - 24 Years", correct: false},
                {text: "25 - 30 Years", correct: true},
                {text: "31 - 35 Years", correct: false},
                {text: "35 + Years", correct: false},
            ]
        },

        {
            question: "What is your gender?",
            answers: [
                {text: "Male", correct: true},
                {text: "Female", correct: false},
                {text: "Other", correct: false},
            ]
        },

        {
            question: "Pick the one statement in each group that best describes how you have been feeling for the past week, Including today.This question is required.*",
            answers: [
                {text: "I have a moderate to strong wish to live.", correct: false},
                {text: "I have a weak wish to live.", correct: false},
                {text: "I have no wish to live.", correct: false},
            ]
        },

        {
            question: "Pick the one statement in each group that best describes how you have been feeling for the past week, Including today.This question is required.*",
            answers: [
                {text: "I have no wish to die.", correct: false},
                {text: "I have a weak wish to die", correct: true},
                {text: "I have a moderate to strong wish to die", correct: false},
            ]
        }
    ];

    const questionElement = document.getElementById('question');
    const answerButton = document.getElementById('answer-buttons');
    const nextButton = document.getElementById('next-btn');

    let currentQuestionIndex = 0;
    let score = 0;
    function startQuiz() {
        currentQuestionIndex = 0;
        score = 0;
        nextButton.innerHTML = 'Next';
        showQuestion();
    }

    function showQuestion() {
        resetState();
        let currentQuestion = questions[currentQuestionIndex];
        let questionNo = currentQuestionIndex + 1;
        questionElement.innerHTML = questionNo + '. ' + currentQuestion.question;


        currentQuestion.answers.forEach(answer => {
            let button = document.createElement('button');
            button.innerText = answer.text;
            button.classList.add('btn');
            answerButton.appendChild(button);
            if(answer.correct) {
                button.dataset.correct = answer.correct;
            }
            button.addEventListener('click', selectAnswer);
        })

    }

    function resetState() {
        nextButton.style.display = 'none';
        while (answerButton.firstChild) {
            answerButton.removeChild(answerButton.firstChild);
        }

    }

    function selectAnswer(e){
        const selectedBtn = e.target;
        const isCorrect = selectedBtn.dataset.correct === "true";
        if(isCorrect){
            selectedBtn.classList.add('correct');
            score++;
        }else{
            selectedBtn.classList.add('incorrect');
        }

        Array.from(answerButton.children).forEach(button => {
            if(button.dataset.correct === "true"){
                button.classList.add('correct');
            }

            button.disabled = true;

        });

        nextButton.style.display = 'block';
    }

    function displayScore() {
        resetState();
        questionElement.innerHTML = `You scored ${score} out of ${questions.length} questions`
        nextButton.innerHTML = 'Play Again';
        nextButton.style.display = 'block';
    }

    function handleNextButton() {
        currentQuestionIndex ++;
        if(currentQuestionIndex < questions.length){
            showQuestion();
        }else{
            displayScore();
        }
    }

    nextButton.addEventListener('click', () => {
        if(currentQuestionIndex < questions.length){
            handleNextButton();
        }else{
            startQuiz();
        }
    })

    showQuestion();


</script>
<?= $this->endSection(); ?>
