<?php include('fact_concept_consts.php'); ?>

var fact_one_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_one; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

var fact_one_stim = {
    type: 'single-stim',
    stimulus: 'src/stim/1.jpg',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    prompt: '<p class="center-content">Have you seen this face before? Y or N.</p>',
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

