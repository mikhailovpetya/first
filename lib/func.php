<?php
function showRegForm(){
    echo '<form action=';
}
function checkRegInfo(){
}
function showLoginForm(){
    echo '<form action="/admin/index.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control"  name="login" placeholder="Enter Login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>  
  <button type="submit" name="btnLogin" class="btn btn-primary">LogIn</button>
</form>';
}
function logIn(){
    if (isset($_POST['btnLogin'])){
        $login=$_POST['login'];
        $password=$_POST['password'];
        if ($login=='user' && $password=='user'){
            $_SESSION['userName']=$login;
            showAlert('Welcom - '.$login);
            goUri('/admin/index.php');
        }else{
            showAlert( 'Login or Password incorrect!!!');
        }
    }
}
function logOut(){

}
function checkAuth(){
    if (isset($_SESSION['userName'])&& !empty( $_SESSION['userName'])){
        return $_SESSION['userName'];
    }else{
        return false;
    }
}
function goUri($uri){
    echo '<script language="JavaScript">
        document.location.href = \''.$uri.'\'</script>';
}
function showAlert($text){
    echo '<script language="JavaScript">
    alert( \''.$text.'\' );
</script>';
}
function connectDb(){
    $link= mysqli_connect('192.168.10.10','homestead','secret','homestead');
    $link->set_charset("utf8");
    return $link;
}
function showAllArticle(){
    $link= connectDb();
    $sql = 'SELECT * FROM article';
    $result = $link->query($sql);
    foreach ($result as $res){
        echo '<h1>'.$res['title'].'</h1><br>';
        echo '<p>'.$res['intro'].'</p><br>';
        echo $res['ftext'].'<br>';
    }
    //print_r($result);
}
function breadCrumb($pageTitle){
    echo '<div class="breadcrumb-holder">
        <h1 class="main-title float-left">'.$pageTitle.'</h1>
        <ol class="breadcrumb float-right">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">'.$pageTitle.'</li>
        </ol>
        <div class="clearfix"></div>
	</div>';
}
function sidebarMenu(){
    echo '<ul>
            <li class="submenu">
				<a href="index.html"><i class="fa fa-fw fa-bars"></i><span> Статистика </span> </a>
            </li>
			<li class="submenu">
                 <a href="charts.html"><i class="fa fa-fw fa-area-chart"></i><span> Статьи </span> </a>
            </li>
					
			<li class="submenu">
                 <a href="#"><i class="fa fa-fw fa-table"></i> <span> Категории </span> </a>
            </li>
										
            <li class="submenu">
                 <a href="#"><i class="fa fa-fw fa-tv"></i> <span> Меню </span> <span class="menu-arrow"></span></a>
            </li>
			<li class="submenu">
                 <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Настройки </span> <span class="menu-arrow"></span></a>
            </li>
					
            <li class="submenu">
				<a href="#"><i class="fa fa-fw fa-th"></i> <span> Пользователи </span> <span class="menu-arrow"></span></a>
            </li>
			<li class="submenu">
                <a href="#"><i class="fa fa-fw fa-image"></i> <span> Файлы </span> <span class="menu-arrow"></span></a>
            </li>					
            </ul>';
}
function main(){
}
function createArticle(){
}
function updateArticle(){
}
function showEditFormArticle(){
    echo '';
}