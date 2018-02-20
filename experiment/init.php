jsPsych.init({
  display_element: $('#jspsych-target'), timeline:[intro_instructions], on_finish: function(){ jsPsych.data.displayData();} 
});