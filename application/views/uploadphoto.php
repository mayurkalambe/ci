<html>    
    <head>
        <script>
            function validateForm(){
                var image = document.getElementById("image").value;
                var name = document.getElementById("name").value;
                if (image =='')
                {
                    return false;
                }
                if(name =='')
                {
                    return false;
                } 
                else 
                {
                    return true;
                } 
                return false;
            }
        </script>
    </head>

    <body>
        <form method="post" action="save" enctype="multipart/form-data">
            <input type="hidden" name="ext" value="jpg" size="30"/>
            <input type="hidden" name="name" id="name" value=<?php echo $this->session->userdata['username']; ?> size="30"/>
            <input type="file" accept="image/*" name="image" id="image" />
            <input type="submit" value='Save' onclick="return validateForm()"/>
        </form>
    </body>
</html>