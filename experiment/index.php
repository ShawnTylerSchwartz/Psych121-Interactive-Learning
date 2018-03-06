<!doctype html>
<html lang="en">
  <head>
    <title>S.K.C. Psych 121 Experiment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/6c45dbaf5a.js"></script>
    <script type="text/javascript">
            function launchExpt() {
                var url = document.getElementById('exptgroup').value;
                if(url != 'none') {
                    window.location = url;
                }
            }
        </script>
  </head>
  <body>
    <br />
    <center>
      <h1 class="display-4">Welcome to the S.K.C. Psych 121 Experiment</h1>
      <medium class="text-muted">An Experiment by Shawn T. Schwartz, Kyndal B. Rucker, and Chawin Nakarangkul</medium>
    </center>
    <p></p>
      <p class="lead text-center"><mark>Please select your assigned experimental group below.</mark></p>
      <p class="lead text-center"><mark>*Please note</mark> that the <strong>initial loading</strong> of the experiment may take a few moments. Please let the page fully load to allow entire experiment to properly initialize.*</p>
    <div class="container">
      <div class="md-col-3"><br /></div>
      <div class="md-col-3">
        <center>
        <select class="custom-select" data-width="100%" name="exptgroup" id="exptgroup" accesskey="target">
          <option selected value='none'>Choose Experimental Group</option>
          <option value="A-PA-V-S.php">A-PA-V-S</option>
          <option value="B-PA-V-S.php">B-PA-V-S</option>
          <option value="C-PA-V-S.php">C-PA-V-S</option>
          <option value="D-PA-V-S.php">D-PA-V-S</option>
          <option value="E-PA-V-S.php">E-PA-V-S</option>
          <option value="F-IA-V-S.php">F-IA-V-S</option>
          <option value="G-IA-V-S.php">G-IA-V-S</option>
          <option value="H-IA-V-S.php">H-IA-V-S</option>
          <option value="I-IA-V-S.php">I-IA-V-S</option>
          <option value="J-IA-V-S.php">J-IA-V-S</option>
          <option value="C-NA-NV-NS.php">C-NA-NV-NS</option>
        </select>
        <br /><br />
        <button type="button" class="btn btn-primary" onclick="launchExpt()">Begin Experiment!</button>
        </center>
      </div>
      <div class="md-col-3"></div>
    </div>  

    <!-- JS Libs -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>