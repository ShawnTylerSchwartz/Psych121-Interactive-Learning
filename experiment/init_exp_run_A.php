jsPsych.init({
    display_element: $('#jspsych-target'), timeline: [intro_instructions, consent_block],
    on_finish: function(){ jsPsych.data.displayData(); }
});
