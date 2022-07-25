const quizData = [
    {
        question: "اكبر نجم في المجموعة الشمسية ؟",
        a: "الشمس",
        b: "الشعرى",
        c: "الدب الأصغر",
        d: "كسيوبيا ذات العرش",
        correct: "a",
    },
    {
        question: "ثاني أقرب نجم إلى الأرض ؟",
        a: "الشمس",
        b: "قنطور",
        c: "نبتون",
        d: "أورانوس",
        correct: "b",
    },
    {
        question: "تصنف الشمس كـ؟",
        a: "قزم أبيض",
        b: "عملاق أحمر",
        c: "كوكب طبيعي",
        d: "لا شيء مما ذكر",
        correct: "a",
    },
    {
        question: "أكبر نجم  في مجرة درب التبانة ؟ ",
        a: "آر دبليو الملتهب",
        b: "يو واي سكوتي",
        c: "في 354 الملتهب",
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
                <h2>
           لقد حصلت على 
                ${score}/${quizData.length} 
                من الإجابات الصحيحة
                </h2>

           <button onclick="location.reload()">
                    إعادة 
            </button>
            
            <button onclick = "location.href='../quiz.html'"  >
                الصفحة الرئيسية
            </button>
           `
       }
    }
})