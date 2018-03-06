function random() {
  var x = Math.random();
  return x;
};
    
var bls_output = "BLS_GROUP_A-Phys-Action-";
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
    display_element: $('#jspsych-target'), timeline: [intro_instructions, consent_block, age_college_block, gender_race_block, first_language_block, breakfast_block, last_cafe_block, hours_slept_block, happiness_block, comfort_block, behere_block, science_block, pre_vid_action_instructions, concept_one_text, prestim_moving_action, concept_one_stim_moving, fact_one_text, fact_one_stim_moving, fact_two_text, fact_two_stim_moving, concept_two_text, concept_two_stim_moving, fact_three_text, fact_three_stim_moving, fact_four_text, fact_four_stim_moving, concept_three_text, concept_three_stim_moving, fact_five_text, fact_five_stim_moving, pre_still_action_instructions, concept_four_text, prestim_still_action, concept_four_stim_still_f1, concept_four_stim_still_f2, fact_six_text, fact_six_stim_still_f1, fact_six_stim_still_f2, fact_seven_text, fact_seven_stim_still_f1, fact_seven_stim_still_f2, concept_five_text, concept_five_stim_still_f1, concept_five_stim_still_f2, fact_eight_text, fact_eight_stim_still_f1, fact_eight_stim_still_f2, fact_nine_text, fact_nine_stim_still_f1, fact_nine_stim_still_f2, fact_ten_text, fact_ten_stim_still_f1, fact_ten_stim_still_f2, pre_game_instructions, run_pacman_game, pre_quiz_instructions, fact_question_eight_block, fact_question_five_block, concept_question_two_block, fact_question_seven_block, concept_question_five_block, fact_question_one_block, concept_question_three_block, fact_question_ten_block, fact_question_nine_block, fact_question_four_block, fact_question_six_block, concept_question_one_block, fact_question_three_block, fact_question_two_block, concept_question_four_block, video_effort_block, still_effort_block, post_quiz_instructions, final_yn_facts_concepts_block],
    on_finish: function(data){ saveData(afranco, jsPsych.data.dataAsCSV()); }
});
