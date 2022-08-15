console.log('できてるよーーー');
const isCorrect = function(choice_num, correct_id){
document.getElementById(choice_num).className = 'choice_wrong';
const correctChoice = correct_id + '_correct';
document.getElementById(correctChoice).className = 'choice_correct';

}