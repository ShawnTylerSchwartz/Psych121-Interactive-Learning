function random() {
  var x = Math.random();
  return x;
};
    
var bls_output = "CTRL_GROUP-";
var rand_output = random();
var the_dot = ".";
var csv_name = "csv";
    
var afranco = bls_output + rand_output + the_dot + csv_name;
    
function saveData(filename, filedata){
  $.ajax({
    type:'post',
    cache: false,
    url: 'save_data.php',
    data: {filename: filename, filedata: filedata}
  });
};

jsPsych.init({
    display_element: $('#jspsych-target'), timeline: [intro_instructions, consent_block, age_college_block, gender_race_block, first_language_block, breakfast_block, last_cafe_block, hours_slept_block, happiness_block, comfort_block, behere_block, science_block, pre_controlled_instructions, concept_one_text, fact_one_text, fact_two_text, concept_two_text, fact_three_text, fact_four_text, concept_three_text, fact_five_text, fact_six_text, concept_four_text, fact_seven_text, fact_eight_text, concept_five_text, fact_nine_text, fact_ten_text, pre_game_instructions, run_pacman_game, pre_quiz_instructions, fact_question_eight_block, fact_question_five_block, concept_question_two_block, fact_question_seven_block, concept_question_five_block, fact_question_one_block, concept_question_three_block, fact_question_ten_block, fact_question_nine_block, fact_question_four_block, fact_question_six_block, concept_question_one_block, fact_question_three_block, fact_question_two_block, concept_question_four_block, post_quiz_instructions, final_yn_facts_concepts_block, final_submit_end],
    on_finish: function(data){ saveData(afranco, jsPsych.data.dataAsCSV()); }
});
