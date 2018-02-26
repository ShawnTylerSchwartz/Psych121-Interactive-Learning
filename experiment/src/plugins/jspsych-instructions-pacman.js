/* jspsych-instructions-pacman.js
 * Shawn Tyler Schwartz
 *
 */

jsPsych.plugins.instructions-pacman = (function() {

  var plugin = {};

  plugin.trial = function(display_element, trial) {

    trial.show_clickable_nav = (typeof trial.show_clickable_nav === 'undefined') ? false : trial.show_clickable_nav;

    // if any trial variables are functions
    // this evaluates the function and replaces
    // it with the output of the function
    trial = jsPsych.pluginAPI.evaluateFunctionParameters(trial);

    var current_page = 0;

    var view_history = [];

    var start_time = (new Date()).getTime();

    var last_page_update_time = start_time;

    function show_current_page() {
      display_element.html(trial.pages[current_page]);

      if (trial.show_clickable_nav) {

        var nav_html = "<div class='jspsych-instructions-nav'>";
      
        nav_html += "<button id='jspsych-instructions-next-pacman' class='jspsych-btn'>Next &gt;</button></div>"

        display_element.append(nav_html);
        
        function showIt() {
          document.getElementById("jspsych-instructions-next-pacman").style.visibility = "visible";
        }
        setTimeout("showIt()", 3000); //after 3 secs

        $('#jspsych-instructions-next-pacman').on('click', function() {
          clear_button_handlers();
          next();
        });

      }
    }

    function clear_button_handlers() {
      $('#jspsych-instructions-next').off('click');
    }

    function next() {

      add_current_page_to_view_history()

      current_page++;

      // if done, finish up...
      if (current_page >= trial.pages.length) {
        endTrial();
      } else {
        show_current_page();
      }

    }

    function back() {

      add_current_page_to_view_history()

      current_page--;

      show_current_page();
    }

    function add_current_page_to_view_history() {

      var current_time = (new Date()).getTime();

      var page_view_time = current_time - last_page_update_time;

      view_history.push({
        page_index: current_page,
        viewing_time: page_view_time
      });

      last_page_update_time = current_time;
    }

    function endTrial() {

      if (trial.allow_keys) {
        jsPsych.pluginAPI.cancelKeyboardResponse(keyboard_listener);
      }

      display_element.html('');

      var trial_data = {
        "view_history": JSON.stringify(view_history),
        "rt": (new Date()).getTime() - start_time
      };

      jsPsych.finishTrial(trial_data);
    }


    show_current_page();


  };

  return plugin;
})();
