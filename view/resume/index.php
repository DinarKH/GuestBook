<!DOCTYPE html>
<html lang="ru-RU" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Гостевая книга</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="../../vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/animate.css" rel="stylesheet">
        <link href="../../vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/layout.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header class="header">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only"></span>
                            <span class="toggle-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item">
                                    <a class="nav-item-child" href="../vacans/1">
                                        Гостевая книга
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child" href="./">
                                        Вход/Регистрация
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <?php if(isset($_SESSION['name'])): ?>
            <p>
                <?php echo $_SESSION['name']; ?>
            </p>
        <?php endif; ?>
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Отправить резюме</h2>                        
                    </div>
                </div>
                <?php if(isset($errors) && is_array($errors)):?>
        			<li>
        				<?php foreach ($errors as $error):?>
        				<ul> 
        					<?php echo $error;?>
        				</ul>
        				<?php endforeach;?>
        			</li>
    			<?php endif;?>
                <div class="row">
                    <div class="col-md-5 col-sm-7">
                        <form method="post">
                            <div class="margin-b-10">
                                <?php if(isset($_SESSION['name'])): ?>
                                    <input type="text" name="name" class="form-control" placeholder=<?php echo $_SESSION['name']?>; readonly>   
                                <?php else: ?>    
                                    <input type="text" name="name" class="form-control" placeholder="Имя">                               
                                <?php endif; ?>
                            </div>
                            <div class="margin-b-10">
                                <?php if(isset($_SESSION['name'])): ?>
                                    <input type="password" name="password" class="form-control" placeholder="Password" readonly>     
                                <?php else: ?>    
                                    <input type="password" name="password" class="form-control" placeholder="Password">             
                                <?php endif; ?>
                            </div>
                            <?php if(isset($_SESSION['name'])): ?>
                                <button type="submit" name="exit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Выход</button>
                            <?php else: ?>    
                                <button type="submit" name="login" value="login123" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Вход</button>
                                <button type="submit" name="exit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Выход</button>
                                <br><br>
                                <button type="submit" name="registration" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Регистрация</button>            
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-me-12 text-right">
                        <p class="margin-b-0"><a class="fweight-700">Гостевая книга</p>
                    </div>
                </div>
            </div>
        </footer> 
    </body>
</html>