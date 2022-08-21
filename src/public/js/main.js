const isCorrect = function(choice_num, question_id){
// choice_num：choice_{{$choice->question_id}}_correct/wrong1・２
// question_id：choice_{{$choice->question_id}}
document.getElementById(choice_num).classList.add('choice_wrong');
const correctChoice = question_id + '_correct';
const wrongChoice = question_id + '_wrong1';
const wrongChoice2 = question_id + '_wrong2';
document.getElementById(correctChoice).classList.add('choice_correct');
document.getElementById(wrongChoice).classList.add = ('choice_another');
document.getElementById(wrongChoice2).classList.add = ('choice_another');
}