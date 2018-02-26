jsPsych.init({
    display_element: $('#jspsych-target'), timeline: [fact_one_text, prestim_moving_action, fact_one_stim_moving, fact_two_text],
    on_finish: function(){ jsPsych.data.displayData(); }
});