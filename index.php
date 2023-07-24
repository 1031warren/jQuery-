<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JQuery Form</title>
</head>
<body>
    <form id="awesome_form" action="process.php" method="POST">
       <input type="text" name="name" placeholder="Name" /><br/>
       <input type="text" name="email" placeholder="Email" /><br/>
       <textarea name='message'></textarea><br/>
       <input type="submit"/>
</form>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#awesome_form').submit(function(e){
            console.log($(this))

           // $.ajax({
           //  type: "POST",
           //  url: "process.php",
           //  data: $("#awesome_form").serialize(),
           //  success: function(data){
           //      console.log(data)
           //   }
           // })

          e.preventDefault();
        })
    })
    </script>
</body>
</html>
