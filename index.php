<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
</head>
<!-bootstrp css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <div class="form-group">
                <label for="completename">Name</label>
                <input type="text" class="form-control" id="completename" aria-describedby="emailHelp" placeholder="Enter name">
             </div>
               <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="completeEmail" aria-describedby="emailHelp" placeholder="Enter email">
             </div>
              <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="completepassword" aria-describedby="emailHelp" placeholder="Enter password">
             </div>
              <div class="form-group">
                <label for="email">contact</label>
                <input type="text" class="form-control" id="completecontact" aria-describedby="emailHelp" placeholder="Enter Number">
             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="adduser();" class="btn btn-primary">SUBMIT</button>
      </div>
    </div>
  </div>
</div>
   
<div class="container">
    
    <h1 class="text-center">CRUD OPERATION USING AJAX</h1>
  <button type="button" class="btn btn-dark my-4" data-toggle="modal" data-target="#exampleModal">
 Add user
</button>
<button  id="displaydata" type="button" class="btn btn-dark my-4">
show data
</button>
</div>
 
<div class="container">
<table class=" table table-striped table  borded text-center">
    <thead>
        <th> id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>contact</th>
        <th>action</th>
    </thead>
    <tbody id="response">
        
    </tbody>


</table>
</div>








 <!--------- javascript links---->
<!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





<script>
$(document).ready(function(){

    $('#displaydata').click(function(){
        $.ajax({
            url:'display.php',
            type:'post',
            success:function(responsedata){
                $('#response').html(responsedata);

            }
        });
    });
})



    // function displayData(){
    //      var displayData="true";
    //      $.ajax({
    //         url:'display.php',
    //         type:'post',
    //         data:{
    //             displaysend:displayData
    //         },
    //         success:function(response){
                 

    //         }
    //      });
    // }
    
    function adduser()
    {
        var nameadd=$('#completename').val();
         var emailadd=$('#completeEmail').val();
          var passwordadd=$('#completepassword').val();
           var contactadd=$('#completecontact').val();
            $.ajax({
        url:"insert.php",
        type:"post",
        data:{
            namesend:nameadd,
            emailsend:emailadd,
            passwordsend:passwordadd,
            contactsend:contactadd
        },
        success:function(data,status){
            console.log(status);

        }
    });

    }
    
    function deletedata(deleteid){
        $.ajax({
            url:'delete.php',
            type:'post',
            data:{
                deletesend:deleteid
            },
            success:function(data,status)
            {
                console.log(status);
            }
        });
    }
   

</script>
</body>
</html>