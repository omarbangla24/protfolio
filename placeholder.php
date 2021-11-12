<div>
<?php
if(isset($_GET["page"])){
    $page=strtolower($_GET["page"]);
    
    if($page=="home"){
        include("pages/home/home.php");
    }else if($page=="blog"){
        include("pages/blog/blog.php");
    }
}else{
    include("pages/home/home.php");
}

?>
</div>