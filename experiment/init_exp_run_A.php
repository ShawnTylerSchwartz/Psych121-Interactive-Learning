function random() {
  var x = Math.random();
  return x;
};
    
var bls_output = "BLS_GROUP_A-Phys-Action-Pilot-";
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
    display_element: $('#jspsych-target'), timeline: [intro_instructions, consent_block, age_college_block, gender_race_block, first_language_block, breakfast_block, last_cafe_block, hours_slept_block, happiness_block, comfort_block, behere_block, science_block, pre_vid_action_instructions, fact_one_text, prestim_moving_action, fact_one_stim_moving, fact_two_text, prestim_moving_action, fact_two_stim_moving, concept_one_text, prestim_moving_action, concept_one_stim_moving, fact_three_text, prestim_moving_action, fact_three_stim_moving, fact_four_text, prestim_moving_action, fact_four_stim_moving, concept_two_text, prestim_moving_action, concept_two_stim_moving, fact_five_text, prestim_moving_action, fact_five_stim_moving, fact_six_text, prestim_moving_action, fact_six_stim_moving, concept_three_text, prestim_moving_action, concept_three_stim_moving, fact_seven_text, prestim_moving_action, fact_seven_stim_moving, fact_eight_text, prestim_moving_action, fact_eight_stim_moving, concept_four_text, prestim_moving_action, concept_four_stim_moving, pre_still_action_instructions, fact_nine_text, prestim_still_action, fact_nine_stim_still, fact_ten_text, prestim_still_action, fact_ten_stim_still, concept_five_text, prestim_still_action, concept_five_stim_moving, fact_eleven_text, prestim_still_action, fact_eleven_stim_still, fact_twelve_text, prestim_still_action, fact_twelve_stim_still, concept_six_text, prestim_still_action, concept_six_stim_still, fact_thirteen_text, prestim_still_action, fact_thirteen_stim_still, fact_fourteen_text, prestim_still_action, fact_fourteen_stim_still, concept_seven_text, prestim_still_action, concept_seven_stim_still, fact_fifteen_text, prestim_still_action, fact_fifteen_stim_still, fact_sixteen_text, prestim_still_action, fact_sixteen_stim_still, concept_eight_text, prestim_moving_action, concept_eight_stim_still, pre_game_instructions, run_pacman_game, pre_quiz_instructions, fact_question_eight_block, fact_question_five_block, concept_question_two_block, fact_question_seven_block, fact_question_thirteen_block, concept_question_five_block, fact_question_one_block, fact_question_sixteen_block, concept_question_three_block, fact_question_ten_block, fact_question_nine_block, concept_question_eight_block, fact_question_four_block, fact_question_six_block, concept_question_one_block, fact_question_three_block, fact_question_eleven_block, concept_question_six_block, fact_question_fourteen_block, fact_question_two_block, concept_question_seven_block, fact_question_fifteen_block, fact_question_twelve_block, concept_question_four_block, post_quiz_instructions, final_yn_facts_concepts_block],
    on_finish: function(data){ saveData(afranco, jsPsych.data.dataAsCSV()); }
});
