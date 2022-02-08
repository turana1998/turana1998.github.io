suallar = [{
        id: 1,
        sual: '2+2=?',
        cavablar: [3, 4, 34, 5, 45],
        cavab: 1
    },
    {
        id: 2,
        sual: '4+2=?',
        cavablar: [7, 23, 67, 6, 123, 890],
        cavab: 3
    },
    {
        id: 3,
        sual: '7+2=?',
        cavablar: [16, 6, 9],
        cavab: 2
    },

    {
        id: 4,
        sual: 'Son yazilan kodun basa dusulme faizi?',
        cavablar: ["0%", '1.2%', '3%', 'Men uje basin buraxmisam'],
        cavab: 3
    },
    {
        id: 5,
        sual: 'Bu gun hava nece olacaq?',
        cavablar: ["Ela olacaq", 'Havani bos ver kodunda problem olmasin', 'Pis', 'Menimcun hec fergi yoxdu'],
        cavab: 1
    }
]



// suallarin ekranda gosterilmesi
// gosterilecek olan datalarin istehsal olunmasi (Controller)
// sual 
// cavab
// datalarin gosterileceyi UI elementlerin istehsal olunmasi (View)
// cavablarin ekranda gosterilmesi

function getQuestion(_id, data = suallar) {

    for (let i in data) {
        if (data[i].id == _id) {
            return data[i].sual
        }
    }

}

function getGuestionChoises(_id, data = suallar) {
    for (let i in data) {
        if (data[i].id == _id) {
            return data[i].cavablar
        }
    }
}

function getCorrectAnswer(_id, data = suallar) {
    for (let i in data) {
        if (data[i].id == _id) {
            return data[i].cavab
        }
    }
}

function checkAnswer(userAnswer, correctAnswer) {
    if (userAnswer == correctAnswer) {
        return true
    } else {
        return false
    }
}

function showResult(elem, question_id, userAnswer) {

    if (elem.getAttribute('clicked') == "0") {
        if (checkAnswer(userAnswer, getCorrectAnswer(question_id))) {
            elem.style.background = 'yellow'
        } else {
            elem.style.background = 'green'
        }
    } else {

        alert('Sadece bir cavab haqqiniz var')
    }
    for (let i = 0; i < elem.parentElement.children.length; i++) {
        elem.parentElement.children[i].setAttribute('clicked', '1')
    }

}

function QuestionView(question_id) {
    return `<div class="quiz-question alert alert-danger mt-3 mb-0"><span>Sual No:${question_id}</span> ${getQuestion(question_id)}</div>`
}

function QuestionAnswersView(question_id) {
    let answersData = getGuestionChoises(question_id);
    let letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', ]
    let answers = "";
    for (let i = 0; i < answersData.length; i++) {
        answers += `<div class="quiz-answer alert alert-primary m-0" clicked='0' onclick="showResult(this,${question_id},${i})">${letters[i]} ) ${answersData[i]} </div>`
    }
    let template = `
    <div class="quiz-answers">
            ${answers}
    </div>`

    return template;
}

function QuizItem(question_id) {

    return `
    <div class = "quiz-item" >
        ${QuestionView(question_id)}
        ${QuestionAnswersView(question_id)}
    </div>
    `
}


let quiz = document.querySelector('.quiz')

for (let i = 0; i < suallar.length; i++) {
    quiz.innerHTML += QuizItem(i + 1)
}