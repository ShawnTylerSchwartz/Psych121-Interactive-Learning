
jsPsych.init({
    display_element: $('#jspsych-target'), timeline: [ science_block, test_quest_one, test_quest_two],
    on_finish: function(){ jsPsych.data.displayData(); }
});