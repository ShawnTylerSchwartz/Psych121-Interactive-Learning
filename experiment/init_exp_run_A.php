jsPsych.init({
    display_element: $('#jspsych-target'), timeline: [run_pacman_game, final_yn_facts_concepts_block],
    on_finish: function(){ jsPsych.data.displayData(); }
});
