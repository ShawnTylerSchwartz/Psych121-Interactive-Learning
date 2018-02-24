var test_quest_one = {
    type: 'single-stim',
    stimulus: 'src/stim/giphy-downsized-large.gif',
    choices: [89, 78], // Y or N
    prompt: '<p class="center-content">Have you seen this face before? Y or N.</p>',
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }