<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AjaxCRUD</title>
  </head>
  <body>
   

    
    <!-- Modal -->
<div class="modal fade" id="student_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add student data using jquery ajax</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="row">
             <div class="col-md-12">
                 <div class="error-message">

                 </div>
             </div>
             <div class="col-md-6">
                 <label for="">firstname</label>
                 <input type="text" class="form-control firstname">
             </div>
             <div class="col-md-6">
                 <label for="">lastname</label>
                 <input type="text" class="form-control lastname">
             </div>
             <div class="col-md-6">
                 <label for="">class</label>
                 <input type="text" class="form-control class">
             </div>
             <div class="col-md-6">
                 <label for="">section</label>
                 <input type="text" class="form-control section">
             </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_add_ajax">Save</button>
      </div>
    </div>
  </div>
</div>      
       <div class="container mt-5">
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <div class="card-header">
                           <h4>php-AJAX-CRUD

                                  <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#student_AddModal">
                                       Add
                                  </button>
                           </h4>
                       </div>
                       <div class="card-body">
                           <div class="message-show">

                           </div>
                           <table class="table table-bordered table-striped">
                               <thead>
                                   <tr>
                                       <th>id</th>
                                       <th>firstname</th>
                                       <th>lastname</th>
                                       <th>class</th>
                                       <th>section</th>
                                       <th>action</th>
                                   </tr>
                               </thead>
                               <tbody class="studentdata">
                                  
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   


    <script>
        $(document).ready(function () {
            getdata();
               
               $('.student_add_ajax').click(function (e) { 
                   e.preventDefault();
                   
                   var fname = $('.firstname').val();
                   var lname = $('.lastname').val();
                   var stu_class = $('.class').val();
                   var section = $('.section').val();


                //    console.log(fname);


                    $.ajax({
                    type: "POST",
                    url: "ajax.crud/code.php",
                    data: {
                        'checking_add':true,
                        'fname':fname,
                        'lname':lname,
                        'class':stu_class,
                        'section':section,
                    },
                    dataType: "text",
                    success: function (response) {
                        console.log(response);
                        if(response) {
                            window.location.reload();
                        } else {
                            alert("Error occured");
                        }
                       
                    }
                 });
               
               });
            
        });

        function getdata()
            {
               $.ajax({
                   type: "GET",
                   url: "ajax.crud/fetch.php",
                   success: function (response) {
                    
                    $.each(response, function (key, value) {
                        //    console.log(value['firstname']);
                        $('.studentdata').append('<tr>'+'<td>'+value['id']+'</td>\
                                       <td>'+value['firstname']+'</td>\
                                       <td>'+value['lastname']+'</td>\
                                       <td>'+value['class']+'</td>\
                                       <td>'+value['section']+'</td>\
                                       <td>\
                                           <a href="" class="badge btn-info">view</a>\
                                           <a href="" class="badge btn-primary">edit</a>\
                                           <a href="" class="badge btn-danger">delete</a>\
                                       </td>\
                                   </tr>');
                         
                    });
                   }
               });   
            }
    </script>


  </body>
</html>