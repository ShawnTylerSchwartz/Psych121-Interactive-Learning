<script>
  var trial = {
    type: 'instructions',
    pages: ['Welcome to the experiment. Click next to begin.',
      'This is the second page of instructions.',
      'This is the final page.'],
    show_clickable_nav: true
  }
  jsPsych.init({
    timeline: [trial],
    on_finish: function(){ jsPsych.data.displayData(); }
  });
  </script>