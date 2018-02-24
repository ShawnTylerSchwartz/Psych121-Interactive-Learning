var test_quest_one = {
    type: 'single-stim',
    stimulus: 'src/stim/giphy-downsized-large.gif',
    timing_response: 1000,
    timing_post_trial: 1,
    prompt: '<p class="center-content">Have you seen this face before? Y or N.</p>',
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

var test_quest_two = {
    type: 'single-stim',
    stimulus: '<center><h1 style='padding-top:100px;'>This is a test statement</h1></center>',
    timing_response: 1000,
    timing_post_trial: 2000,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }