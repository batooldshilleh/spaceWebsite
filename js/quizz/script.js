const quizData = [
    {
        question: "الكوكب الذي يمتلك أكبر عدد من الأقمار ؟",
        a: "زحل",
        b: "المشتري",
        c: "كلاهما",
        d: "لا أحد منهما",
        correct: "b",
    },
    {
        question: "أحد الكواكب التالية يصنف ككوكب قزم؟",
        a: "الأرض",
        b: "بلوتو",
        c: "نبتون",
        d: "أورانوس",
        correct: "b",
    },
    {
        question: "أقرب الكواكب إلى الشمس؟",
        a: "عطارد",
        b: "الزهرة",
        c: "المشتري",
        d: "نبتون",
        correct: "a",
    },
    {
        question: "أقل الكواكب كثافة في المجموعة الشمسية ",
        a: "المريخ",
        b: "الأرض",
        c: "عطار",
        d: "لا شيء مما ذكر",
        correct: "b",
    },


];

const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')


let currentQuiz = 0
let score = 0

loadQuiz()

function loadQuiz() {

    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }

       currentQuiz++

       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>You answered ${score}/${quizData.length} questions correctly</h2>

           <button onclick="location.reload()">
                    إعادة 
            </button>
            
            <button onclick = "window.location.href='quiz.html'"  >
                الصفحة الرئيسية
            </button>
           `
       }
    }
})