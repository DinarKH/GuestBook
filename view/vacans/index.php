<!DOCTYPE html>
<html lang="ru-RU" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>Гостевая книга</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="../../vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../template/style.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/layout.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <header class="header">
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="menu-container">
                </div>
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item">
                                <a class="nav-item-child" href="./1">
                                    Гостевая книга
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item-child" href="../resume/">
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
                    <h2>Отправить сообщение</h2>                        
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-7">
                    <form method="post">
                        <div class="margin-b-10">
                            <?php if(isset($_SESSION['name'])): ?>
                                    <input type="text" name="name_message" class="form-control" placeholder="Имя" value="<?php echo $_SESSION['name'] ?>" readonly>
                                <?php else: ?>
                                    <input type="text" name="name_message" class="form-control" placeholder="Имя">
                            <?php endif; ?>
                            
                        </div>
                        <div class="margin-b-20">
                            <textarea  name="text_message" class="form-control" rows="5" placeholder="Текст"></textarea>
                        </div>
                        <button type="submit" name="send_message" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Отправить</button>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="page-header">
                    <h1>Гостевая книга </h1>
                </div> 
                <div class="comments-list">
                    <?php foreach ($vacansList as $vacVal): ?>
                        <div class="media">
                            <p class="pull-right"><small>5 days ago</small></p>
                            <a class="media-left" href="#"></a>
                            <div class="media-body">
                                <h4 class="media-heading user_name">
                                    <?php echo $vacVal['name']; ?>
                                    <?php if($vacVal['user_id']==-1): ?>
                                        (Аноним)
                                    <? endif; ?>     
                                </h4>                      
                                <?php echo $vacVal['text'];?>
                                <br>
                                <?php if(isset($_SESSION['name'])&&($_SESSION['status']==0)): ?>
                                        <button type="submit" name="delete_button" value="<?php echo $vacVal['id'] ?>" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Удалить</button>
                                        <button type="submit" name="edit_button" value="<?php echo $vacVal['id'] ?>" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Редактировать</button>
                                    
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </form>
                </div>
                <br>
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="./1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="./2">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="./3">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="./4">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="./5">5</a>
                        </li>
                    </ul>
                </nav>
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