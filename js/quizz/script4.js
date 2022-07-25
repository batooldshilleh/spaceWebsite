const quizData = [
    {
        question: "اسم المجرة التي تقع فيها المجموعة الشمسية ؟",
        a: "العين السوداء",
        b: "درب التبانة",
        c: "سحابة ماجلان الكبرى",
        d: "المرأة المسلسلة",
        correct: "b",
    },
    {
        question: "أقرب مجرة لنا؟",
        a: "العين السوداء",
        b: "سحابة مجلان",
        c: "المرأة المسلسلة",
        d: "درب التبانة",
        correct: "c",
    },
    {
        question: "أكبر مجرة تم إكتشافها؟",
        a: "مجرة المذنب",
        b: "درب التبانة",
        c: "مالين 1",
        d: " عنقود",
        correct: "a",
    },
    {
        question: "أي من التالي من أشكال المجرات  ",
        a: "اللولبية",
        b: "البيضاوية",
        c: "الغير منظمة",
        d: "جميع الاجابات صحيحة",
        correct: "d",
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
            
            <button onclick = "window.location.href='../quiz.html'"  >
                الصفحة الرئيسية
            </button>
           `
       }
    }
})