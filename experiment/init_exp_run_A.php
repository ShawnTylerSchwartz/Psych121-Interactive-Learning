
jsPsych.init({
    display_element: $('#jspsych-target'), timeline: [ science_block, fact_one_text, fact_one_stim, trial],
    on_finish: function(){ jsPsych.data.displayData(); }
});