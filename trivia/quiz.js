// select all elements
const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const qImg = document.getElementById("qImg");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const counter = document.getElementById("counter");
const timeGauge = document.getElementById("timeGauge");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");

// create our questions
let questions = [
    {
        question : "Who directed the aquaman?",
        imgSrc : "img/aquaman.jpg",
        choiceA : "James Wan",
        choiceB : "Peter Safran",
        choiceC : "Will Beall",
        correct : "A"
    },{
        question : "What was the budge of a wrinkle in time ?",
        imgSrc : "img/awrinkleintime.jpg",
        choiceA : "$165.00 Million",
        choiceB : "$103.00 Million",
        choiceC : "$133.00 Million",
        correct : "B"
    },{
        question : "What is the highest grossing movie of all time?",
        imgSrc : "img/boxoffice.jpg",
        choiceA : "Titanic",
        choiceB : "Avengers: Infinity War",
        choiceC : "Avatar",
        correct : "C"
    },{
        question : "What is the name of Will Smith’s character in Independence Day?",
        imgSrc : "img/independence.jpg",
        choiceA : "Oscar",
        choiceB : "Del Spooner",
        choiceC : "Captain Steven Hiller",
        correct : "C"
    },{
        question : "What is the only Disney song to win a Grammy Award for Song of the Year?",
        imgSrc : "img/disney.jpg",
        choiceA : "A Whole New World",
        choiceB : "You Can Fly",
        choiceC : "Friend Like Me",
        correct : "A"
    },{
        question : "What color were the slippers in the orginal wizard of Oz??",
        imgSrc : "img/wizard.jpg",
        choiceA : "gold",
        choiceB : "sliver",
        choiceC : "red",
        correct : "B"
    },{
        question : "In the movie star wars, what is the emperors last name?",
        imgSrc : "img/star.png",
        choiceA : "palpatine",
        choiceB : "Death Star",
        choiceC : "CR90 Corvette",
        correct : "A"
    },{
        question : "In the terminator, Sarah conner was played by who?  ?",
        imgSrc : "img/terminator.jpg",
        choiceA : "Bess Motta",
        choiceB : "Linda hamilton",
        choiceC : "Harriet Medin",
        correct : "B"
    },{
        question : "The first movie given the title 'Blockbuster'was which movie?",
        imgSrc : "img/block.jpg",
        choiceA : "Gone With the Wind",
        choiceB : "Jaws",
        choiceC : "The Exorcist (1973)",
        correct : "B"
    },{
        question : "Which screenwriter has received the most Oscar nominations?",
        imgSrc : "img/oscars.jpg",
        choiceA : "Woody Aleen",
        choiceB : "Paddy Chayefsky",
        choiceC : "Ben Affleck",
        correct : "A"
    }
];

// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
const questionTime = 10; // 10s
const gaugeWidth = 150; // 150px
const gaugeUnit = gaugeWidth / questionTime;
let TIMER;
let score = 0;

// render a question
function renderQuestion(){
    let q = questions[runningQuestion];
    
    question.innerHTML = "<p>"+ q.question +"</p>";
    qImg.innerHTML = "<img src="+ q.imgSrc +">";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}

start.addEventListener("click",startQuiz);

// start quiz
function startQuiz(){
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();
    renderCounter();
    TIMER = setInterval(renderCounter,1000); // 1000ms = 1s
}

// render progress
function renderProgress(){
    for(let qIndex = 0; qIndex <= lastQuestion; qIndex++){
        progress.innerHTML += "<div class='prog' id="+ qIndex +"></div>";
    }
}

// counter render

function renderCounter(){
    if(count <= questionTime){
        counter.innerHTML = count;
        timeGauge.style.width = count * gaugeUnit + "px";
        count++
    }else{
        count = 0;
        // change progress color to red
        answerIsWrong();
        if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
    }
}

// checkAnwer

function checkAnswer(answer){
    if( answer == questions[runningQuestion].correct){
        // answer is correct
        score++;
        // change progress color to green
        answerIsCorrect();
    }else{
        // answer is wrong
        // change progress color to red
        answerIsWrong();
    }
    count = 0;
    if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        // end the quiz and show the score
        clearInterval(TIMER);
        scoreRender();
    }
}

// answer is correct
function answerIsCorrect(){
    document.getElementById(runningQuestion).style.backgroundColor = "#0f0";
}

// answer is Wrong
function answerIsWrong(){
    document.getElementById(runningQuestion).style.backgroundColor = "#f00";
}

// score render
function scoreRender(){
    scoreDiv.style.display = "block";
    
    // calculate the amount of question percent answered by the user
    const scorePerCent = Math.round(100 * score/questions.length);
    
    // choose the image based on the scorePerCent
    let img = (scorePerCent >= 80) ? "img/5.png" :
              (scorePerCent >= 60) ? "img/4.png" :
              (scorePerCent >= 40) ? "img/3.png" :
              (scorePerCent >= 20) ? "img/2.png" :
              "img/1.png";
    
    scoreDiv.innerHTML = "<img src="+ img +">";
    scoreDiv.innerHTML += "<p>"+ scorePerCent +"%</p>";
}





















