<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Add Remove Dynamic HTML Fields using JQuery Plugin in PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="repeater.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <br>
        <h3 align="center">Add Remove Dynamic HTML Fields </h3>
        <br>
        <div style="width:100%; max-width:600px;margin:0 auto;">
           <div class="panel panel-default">
               <div class="panel-heading">Add Programming Skills Details</div>
               <div class="panel-body">
                   <span id="success_result"></span>
                       <form action="" id="repeater_form" method="post">
                           <div class="form-group">
                               <label for="">Enter Programmer Name</label>
                               <input type="text" name="name" id="name" class="form-control" required>  
                           </div>
                           <div id="repeater">
                               <div class="repeater-heading" align="right">
                                   <button type="button" class="btn btn-primary" repeater-add-btn>
                                       Add More Skill
                                   </button>
                               </div>
                               <div class="clearfix"></div>
                               <div class="items" data-group="programming_languages">
                                   <div class="item-content">
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-md-9">
                                                   <label for="">Select Programming Skills</label>
                                                   <select name="" id="" data-skip-name="true" data-name="skill[]" class="form-control" required>
                                                       <option value="">Select</option>
                                                       <option value="PHP">PHP</option>
                                                       <option value="MYSQL">MYSQL</option>
                                                       <option value="AJAX">AJAX</option>
                                                       <option value="ANGULAR">ANGULAR</option>
                                                       <option value="LARAVEL">LARAVEL</option>
                                                       <option value="BOOTSTRAP">BOOTSTRAP</option>
                                                   </select>
                                               </div>
                                               <div class="col-md-3" style="margin-top:24px;" align="center">
                                                     <button id="remove-btn" class="btn btn-danger" onclick="$(this).parents('.items').remove()">Remove</button>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="clearfix"></div>
                                 <div class="form-group" align="center">
                                     <br><br>
                                      <input type="submit" name="insert" class="btn btn-success" value="insert">
                                 </div>
                           </div>
                       </form>
               </div>
           </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#repeater').createRepeater();

            $('#repeater_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:$(this).serialize(),
                    success:function(data)
                     {
                        $('#repeater_form')[0].reset();
                        $('#repeater').createRepeater();
                        $('#success_result').html(data);
                     }
                });
            });
        });
    </script>
</body>
</html>