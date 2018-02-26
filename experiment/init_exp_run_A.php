jsPsych.init({
    display_element: $('#jspsych-target'), timeline: [intro_instructions, consent_block, age_college_block, gender_race_block, first_language_block, breakfast_block, last_cafe_block, hours_slept_block, happiness_block, comfort_block, behere_block, science_block, fact_one_text, prestim_moving_action, fact_one_stim_moving],
    on_finish: function(){ jsPsych.data.displayData(); }
});