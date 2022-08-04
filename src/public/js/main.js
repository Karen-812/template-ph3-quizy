console.log('できてるよーーー');
const isCorrect = function(choice_num, correct_id){
document.getElementById(choice_num).className = 'choice_wrong';
const correct_choice = correct_id + '_correct';
document.getElementById(correct_choice).className = 'choice_correct';

}