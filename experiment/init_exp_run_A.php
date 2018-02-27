function random() {
  var x = Math.random();
  return x;
};
    
var bls_output = "BLS_GROUP_P-4-4-";
var rand_output = random();
var the_dot = ".";
var csv_name = "csv";
    
var afranco = bls_output + rand_output + the_dot + csv_name;
    
function saveData(filename, filedata){
  $.ajax({
    type:'post',
    cache: false,
    url: 'save_data.php',
    data: {filename: filename, filedata: filedata}
  });
};

jsPsych.init({
    display_element: $('#jspsych-target'), timeline: [run_pacman_game, final_yn_facts_concepts_block],
    on_finish: function(data){ saveData(afranco, jsPsych.data.dataAsCSV()); }
});
