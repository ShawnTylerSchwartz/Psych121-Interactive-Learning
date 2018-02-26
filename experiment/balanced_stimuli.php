<?php include('fact_concept_consts.php'); ?>

/************ FACT ONE BLOCK ************/

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

var fact_one_prestim = {
    type: 'single-stim',
    stimulus: '<video src="src/stim/movs/fact_moving_05.mp4" autoplay poster="src/stim/stills/fact_still_05-1.jpg"></video>',
    timing_response: <?php echo $pretext_timing; ?>,
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
    stimulus: 'src/stim/fact_one_moving.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  }

/************ FACT TWO BLOCK ************/


