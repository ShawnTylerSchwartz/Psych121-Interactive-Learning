<script>
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

  // Demographic Question Arrays
  var age_college = [ "Age", "How many years have you been in college?", "What is your major?" ];
  var gender_race = [ "Gender", "Race/Ethnicity" ];
  var first_language = [ "What was your first language learned?" ];
  var breakfast = [ "Have you eaten breakfast today?" ];
  var last_cafe = [ "When did you last have caffeine?" ];
  var hours_slept = [ "How many hours did you sleep last night?" ];

  // Demographic Question Choice Scales
  var gender_options = [ "Male", "Female", "Other" ];
  var race_options = [ "White", "Hispanic/Latino", "African American", "American Indian", "Asian", "Other" ];
  var first_language_options = [ "English", "Spanish",  "Mandarin", "Hindi/Urdu", "Arabic", "Portuguese", "Bengali", "Russian", "Japanese", "Punjabi" ];
  var yn_options = [ "Yes", "No" ];
  var cafe_options = [ "This Morning", "Yesterday Evening", "Yesterday Afternoon", "Yesterday Morning", "I haven't consumed caffeine in the last 48 hours." ];
  var sleep_options = [ "0-2 Hours", "2-4 Hours", "4-6 Hours", "6-8 Hours", "8 or more Hours" ];

  // Likert Question Scaling Sets - After the Demographic Question Sets
  var happiness_scale_questions = [ "I am happy today." ];
  var comfort_scale_questions = [ "I am comfortable at this moment in time." ];
  var behere_scale_questions = [ "I would rather be somewhere else." ];
  var science_scale_questions = [ "I am comfortable with complex scientific concepts." ];
  var level_of_agreement_scale = [ "Strongly Disagree", "Disagree", "Somewhat Disagree", "Neither Agree Nor Disagree", "Somehwat Agree", "Agree", "Strongly Agree" ];
  
  // Demographic Question Blocks
  var age_college_block = {
    type: 'survey-text',
    questions: age_college
  };
  
  var gender_race_block = {
    type: 'survey-multi-choice',
    questions: gender_race,
    options: [gender_options, race_options],
    required: [true, true]
  };
  
  var first_language_block = {
    type: 'survey-multi-choice',
    questions: first_language,
    options: [first_language_options],
    required: [true]
  };
  
  var breakfast_block = {
    type: 'survey-multi-choice',
    questions: breakfast,
    options: [yn_options],
    required: [true]
  };
  
  var last_cafe_block = {
    type: 'survey-multi-choice',
    questions: last_cafe,
    options: [cafe_options],
    required: [true]
  };
  
  var hours_slept_block = {
    type: 'survey-multi-choice',
    questions: hours_slept,
    options: [sleep_options],
    required: [true]
  };
  
  var happiness_block = {
    type: 'survey-likert',
    questions: happiness_scale_questions,
    labels: [level_of_agreement_scale]
  };
  
  var comfort_block = {
    type: 'survey-likert',
    questions: comfort_scale_questions,
    labels: [level_of_agreement_scale]
  };
  
  var behere_block = {
    type: 'survey-likert',
    questions: behere_scale_questions,
    labels: [level_of_agreement_scale]
  };
  
  var science_block = {
    type: 'survey-likert',
    questions: science_scale_questions,
    lables: [level_of_agreement_scale]
  };
</script>