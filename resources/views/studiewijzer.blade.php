<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Studiewijzer')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')
<main class="container mt-3">
    <div class="section-title">
        <h2>INFO</h2>
        <p>Studiewijzer</p>
    </div>

    <div class="container">

        <div class="row studiewijzer">
            <div class="col-xl-5 col-12 box sb1" id="quiz"></div>
            <img class="col-5" id="thomasbot" src="/assets/img/bot2.svg" alt="thomas bot">
        </div>

        <div id="mobielestudiewijzer">
            <div class="row mt-3 mb-3">
                <button id="previous">Vorige</button>
                <button id="next">Volgende</button>
                <button id="submit">Finish</button>
            </div>

            <div class="row font-weight-bold pb-3" id="results"></div>
            <p class="row" id="resultapp"></p>
            <p class="row" id="resultai"></p>
            <p class="row" id="resultccs"></p>
            <p class="row" id="resultdi"></p>
            <p class="row" id="resultiot"></p>
        </div>

        <script>
            (function () {
                // Functions
                function buildQuiz() {
                    // variable to store the HTML output
                    const output = [];

                    // for each question...
                    myQuestions.forEach(
                        (currentQuestion, questionNumber) => {

                            // variable to store the list of possible answers
                            const answers = [];

                            // and for each available answer...
                            for (letter in currentQuestion.answers) {

                                // ...add an HTML radio button
                                answers.push(
                                    `<label>
              <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
            </label>`
                                );
                            }

                            // add this question and its answers to the output
                            output.push(
                                `<div class="slider">
            <div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
                            );
                        }
                    );

                    // finally combine our output list into one string of HTML and put it on the page
                    quizContainer.innerHTML = output.join('');
                }

                function showResults() {
                    // verzamel antwoordcontainers van de quiz
                    const answerContainers = quizContainer.querySelectorAll('.answers');

                    // tellers
                    let numAPP = 0;
                    let numAI = 0;
                    let numCCS = 0;
                    let numDI = 0;
                    let numIOT = 0;
                    let numWerk = 0;

                    // elke vraag
                    myQuestions.forEach((currentQuestion, questionNumber) => {

                        // vind het geselecteerde antwoord
                        const answerContainer = answerContainers[questionNumber];
                        const selector = `input[name=question${questionNumber}]:checked`;
                        const userAnswer = (answerContainer.querySelector(selector) || {}).value;

                        // if voor APP
                        if (userAnswer === currentQuestion.antwoordApp) {
                            numAPP++;
                            // answerContainers[questionNumber].style.color = 'pink';
                        }

                        // if voor AI
                        if (userAnswer === currentQuestion.antwoordAi) {
                            numAI++;
                            // answerContainers[questionNumber].style.color = 'orange';
                        }

                        // if voor CSS
                        if (userAnswer === currentQuestion.antwoordCcs) {
                            numCCS++;
                            // answerContainers[questionNumber].style.color = 'green';
                        }

                        // if voor DI
                        if (userAnswer === currentQuestion.antwoordDi) {
                            numDI++;
                            // answerContainers[questionNumber].style.color = 'lightblue';
                        }

                        // if voor IOT
                        if (userAnswer === currentQuestion.antwoordIot) {
                            numIOT++;
                            // answerContainers[questionNumber].style.color = 'blue';
                        }

                        // if studeren na het werk
                        if (userAnswer === currentQuestion.antwoordWerk) {
                            numWerk++;
                        }
                    });

                    // toon de antwoorden
                    var tekstapp = `${numAPP} van ${myQuestions.length} voor Application Development`;
                    var tekstai = `${numAI} van ${myQuestions.length} voor Artificial Intelligence`;
                    var tekstccs = `${numCCS} van ${myQuestions.length} voor Cloud & Cyber Security`;
                    var tekstdi = `${numDI} van ${myQuestions.length} voor Digital Innovation`;
                    var tekstiot = `${numIOT} van ${myQuestions.length} voor Internet Of Things`;

                    $('#resultapp').text(tekstapp);
                    $('#resultai').text(tekstai);
                    $('#resultccs').text(tekstccs);
                    $('#resultdi').text(tekstdi);
                    $('#resultiot').text(tekstiot);


                    if (numWerk === 1) {
                        var tekstwerk = `Je overweegt best studeren na het werk.`;

                        $('#results').text(tekstwerk);
                    }
                }

                function showSlide(n) {
                    slides[currentSlide].classList.remove('active-slide');
                    slides[n].classList.add('active-slide');
                    currentSlide = n;
                    if (currentSlide === 0) {
                        previousButton.style.display = 'none';
                    } else {
                        previousButton.style.display = 'inline-block';
                    }
                    if (currentSlide === slides.length - 1) {
                        nextButton.style.display = 'none';
                        submitButton.style.display = 'inline-block';
                    } else {
                        nextButton.style.display = 'inline-block';
                        submitButton.style.display = 'none';
                    }
                }

                function showNextSlide() {
                    showSlide(currentSlide + 1);
                }

                function showPreviousSlide() {
                    showSlide(currentSlide - 1);
                }

                // Variables
                const quizContainer = document.getElementById('quiz');

                const submitButton = document.getElementById('submit');
                const myQuestions = [
                    {
                        question: "Naar welk vak gaat je voorkeur?",
                        answers: {
                            a: "SQL",
                            b: "Projectwerk",
                            c: "Python",
                            d: "Netwerken",
                            e: "Home automation"
                        },
                        antwoordApp: "c",
                        antwoordAi: "a",
                        antwoordCcs: "d",
                        antwoordDi: "b",
                        antwoordIot: "e",

                        correctAnswer: "b"
                    },
                    {
                        question: "Ben je op zoek naar een dagopleiding?",
                        answers: {
                            a: "Ja",
                            b: "Nee",
                        },
                        antwoordApp: "a",
                        antwoordAi: "a",
                        antwoordCcs: "a",
                        antwoordDi: "a",
                        antwoordIot: "a",

                        antwoordWerk: "b"
                    },
                    {
                        question: "Ben je geïnteresseerd in code?",
                        answers: {
                            a: "Ja",
                            b: "Nee"
                        },
                        antwoordApp: "a",
                        antwoordAi: "a",
                        antwoordCcs: "a",
                        antwoordDi: "a",
                        antwoordIot: "a"
                    },
                    {
                        question: "Welke richting zou je het liefste volgen?",
                        answers: {
                            a: "Ai",
                            b: "Di",
                            c: "App",
                            d: "Ccs",
                            e: "Iot"
                        },
                        antwoordApp: "c",
                        antwoordAi: "a",
                        antwoordCcs: "d",
                        antwoordDi: "b",
                        antwoordIot: "e"
                    }
                ];

                // Kick things off
                buildQuiz();

                // Pagination
                const previousButton = document.getElementById("previous");
                const nextButton = document.getElementById("next");
                const slides = document.querySelectorAll(".slider");
                let currentSlide = 0;

                // Show the first slide
                showSlide(currentSlide);

                // Event listeners
                submitButton.addEventListener('click', showResults);
                previousButton.addEventListener("click", showPreviousSlide);
                nextButton.addEventListener("click", showNextSlide);
            })();

        </script>
        <div>
            <div>
                <div>
</main>


{{--  Footer  --}}
@include('shared.footer')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
