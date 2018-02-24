var intro_instructions = {
    type: 'instructions',
    pages: ['Welcome to S.K.C. Psych 121 Experiment',
      'Please follow all instructions throughout the experiment and silence all cell phones.',
      'Your integrity in the study is important for valid results. Please click next to continue and digitally sign the informed consent.'],
    show_clickable_nav: true
  }
  
  var check_consent = function(elem) {
      if ($('#consent_checkbox').is(':checked')) {
        return true;
      } else {
        alert("If you agree to all of the instructions presented wish to participate in our Psych 121 Experiment, you must check the box next to the statement 'I agree to participate in this Psych 121 Experiment.' All data will be submitted anonymously and no identifying information will be attached to your data file. All results are for Psych 121 purposes only. IF YOU DECLINE TO ACCEPT, YOU WILL BE UNABLE TO MOVE FORWARD AND WILL NOT BE ABLE TO PARTICIPATE IN OUR PSYCH 121 STUDY!!");
        return false;
      }
      return false;
    };

  var consent_block = {
    "type": "html",
    "force_refresh": true,
    "url": "src/external_html/simple_consent.html",
    "cont_btn": "start",
    "check_fn": check_consent
  }