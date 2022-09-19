<?php 
    function active($page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
        if($page == $url){
            echo 'active'; //class name in css 
        } 
      }
?>

<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.php">Visitors</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.php">VS</a>
    </div>
    <ul class="sidebar-menu">
        <li class="<?php active('index.php') ?>"><a class="nav-link" href="index.php"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
    </ul>
    <ul class="sidebar-menu">
        <li class="<?php active('index-tamu.php') ?>"><a class="nav-link" href="index-tamu.php"><i class="fas fa-users"></i><span>Visitors</span></a></li>
    </ul>
</aside>