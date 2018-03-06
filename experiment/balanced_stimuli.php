<?php include('fact_concept_consts.php'); ?>

/************ PRESTIM TEXT BLOCKS ************/

var prestim_moving_action = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $pre_action_vid; ?></p>',
    timing_response: <?php echo $pretext_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var prestim_still_action = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $pre_action_still; ?></p>',
    timing_response: <?php echo $pretext_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var prestim_moving_imagine = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $pre_imagine_vid; ?></p>',
    timing_response: <?php echo $pretext_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var prestim_still_imagine = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $pre_imagine_still; ?></p>',
    timing_response: <?php echo $pretext_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT ONE BLOCKS ************/

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
  };

var fact_one_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_01.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_one_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_01-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_one_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_01-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT TWO BLOCKS ************/

var fact_two_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_two; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_two_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_02.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_two_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_02-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_two_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_02-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT THREE BLOCKS ************/

var fact_three_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_three; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_three_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_03.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_three_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_03-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_three_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_03-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT FOUR BLOCKS ************/

var fact_four_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_four; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_four_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_04.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_four_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_04-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_four_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_04-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT FIVE BLOCKS ************/

var fact_five_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_five; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_five_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_05.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_five_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_05-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_five_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_05-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT SIX BLOCKS ************/

var fact_six_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_six; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_six_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_06.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_six_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_06-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_six_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_06-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT SEVEN BLOCKS ************/

var fact_seven_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_seven; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_seven_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_07.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_seven_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_07-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_seven_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_07-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT EIGHT BLOCKS ************/

var fact_eight_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_eight; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_eight_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_08.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_eight_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_08-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_eight_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_08-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT NINE BLOCKS ************/

var fact_nine_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_nine; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_nine_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_09.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_nine_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_09-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_nine_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_09-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ FACT TEN BLOCKS ************/

var fact_ten_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $fact_ten; ?></p>',
    timing_response: <?php echo $facts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_ten_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/fact_moving_10.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_ten_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_10-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var fact_ten_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/fact_still_10-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ CONCEPT ONE BLOCKS ************/

var concept_one_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $concept_one; ?></p>',
    timing_response: <?php echo $concepts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_one_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/concept_moving_01.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_one_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_01-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_one_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_01-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ CONCEPT TWO BLOCKS ************/

var concept_two_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $concept_two; ?></p>',
    timing_response: <?php echo $concepts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_two_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/concept_moving_02.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_two_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_02-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_two_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_02-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ CONCEPT THREE BLOCKS ************/

var concept_three_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $concept_three; ?></p>',
    timing_response: <?php echo $concepts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_three_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/concept_moving_03.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_three_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_03-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_three_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_03-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ CONCEPT FOUR BLOCKS ************/

var concept_four_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $concept_four; ?></p>',
    timing_response: <?php echo $concepts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_four_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/concept_moving_04.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_four_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_04-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_four_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_04-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

/************ CONCEPT FIVE BLOCKS ************/

var concept_five_text = {
    type: 'single-stim',
    stimulus: '<p class="fact"><?php echo $concept_five; ?></p>',
    timing_response: <?php echo $concepts_timing; ?>,
    timing_post_trial: <?php echo $post_trial_timing; ?>,
    is_html: true,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_five_stim_moving = {
    type: 'single-stim',
    stimulus: 'src/stim/gifs/concept_moving_05.gif',
    timing_response: <?php echo $stim_vids_length; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_five_stim_still_f1 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_05-1.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var concept_five_stim_still_f2 = {
    type: 'single-stim',
    stimulus: 'src/stim/stills/concept_still_05-2.jpg',
    timing_response: <?php echo $stim_vids_length_half; ?>,
    timing_post_trial: <?php echo $post_vid_timing; ?>,
    on_finish: function() {
      jsPsych.data.addDataToLastTrial({
        correct: true
      });
    }
  };

var facts_and_concepts = [ "<?php echo $fact_one; ?>", "<?php echo $fact_two; ?>", "<?php echo $fact_three; ?>", "<?php echo $fact_four; ?>", "<?php echo $fact_five; ?>", "<?php echo $fact_six; ?>", "<?php echo $fact_seven; ?>", "<?php echo $fact_eight; ?>", "<?php echo $fact_nine; ?>", "<?php echo $fact_ten; ?>", "<?php echo $concept_one; ?>", "<?php echo $concept_two; ?>", "<?php echo $concept_three; ?>", "<?php echo $concept_four; ?>", "<?php echo $concept_five; ?>" ];

var final_yn_facts_concepts_block = {
  type: 'survey-multi-choice',
  questions: facts_and_concepts,
  options: [yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options, yn_options],
  required: [true, true, true, true, true, true, true, true, true, true, true, true, true, true, true]
};