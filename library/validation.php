<?php
    function redirect_to($page_name = "?page=home"){
        if(!empty($page_name)){
            header("Location: $page_name");
        }else{
            return false;
        }
        }

        function show_error($error_field){
            global $error;
            if(!empty($error[$error_field])){?>
                <p class="error"><?php echo $error[$error_field] ?></p>
           <?php }
        }
?>