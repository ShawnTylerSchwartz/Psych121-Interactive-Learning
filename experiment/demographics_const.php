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
  var first_language_options = [ "English", "Spanish",  "Mandarin", "Hindi/Urdu", "Arabic", "Portuguese", "Bengali", "Russian", "Japanese", "Punjabi", "Other" ];
  var yn_options = [ "Yes", "No" ];
  var cafe_options = [ "This Morning", "Yesterday Evening", "Yesterday Afternoon", "Yesterday Morning", "I haven't consumed caffeine in the last 48 hours." ];
  var sleep_options = [ "0-2 Hours", "2-4 Hours", "4-6 Hours", "6-8 Hours", "8 or more Hours" ];

  // Likert Question Scaling Sets - After the Demographic Question Sets
  var happiness_scale_questions = [ "I am happy today." ];
  var comfort_scale_questions = [ "I am comfortable at this moment in time." ];
  var behere_scale_questions = [ "I would rather be somewhere else." ];
  var science_scale_questions = [ "I am comfortable with complex scientific concepts." ];
  var level_of_agreement_scale = [ "Strongly Disagree", "Disagree", "Somewhat Disagree", "Neither Agree Nor Disagree", "Somewhat Agree", "Agree", "Strongly Agree" ];

  var effort_scale_vid_questions = [ "Level of effort exerted for video tasks. (1=Least,5=Most)" ];
  var effort_scale_still_questions = [ "Level of effort exerted for still image tasks. (1=Least,5=Most)" ];
  var effort_scale = [ "1", "2", "3", "4", "5" ];
  
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
    labels: [level_of_agreement_scale]
  };

  var video_effort_block = {
    type: 'survey-likert',
    questions: effort_scale_vid_questions,
    labels: [effort_scale]
  };

  var still_effort_block = {
    type: 'survey-likert',
    questions: effort_scale_still_questions,
    labels: [effort_scale]
  };