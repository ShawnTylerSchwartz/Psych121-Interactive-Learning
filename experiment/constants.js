var intro_instructions = {
  type: 'instructions',
  pages: [
    'Welcome to the Psych 121 Experiment.'
  ],
  show_clickable_nav: true
}

jsPsych.init({
  display_element: $('#jspsych-target'), timeline:[intro_instructions], on_finish: function(){ jsPsych.data.displayData();} 
});