<?php
/* Smarty version 3.1.30, created on 2017-09-25 03:22:09
  from "F:\wamp\www\myMVC\Project\View\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c85a41104299_60596172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc0aec00fbff802ff781e9339ae9d7bf00e55d7b' => 
    array (
      0 => 'F:\\wamp\\www\\myMVC\\Project\\View\\index.html',
      1 => 1506302526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c85a41104299_60596172 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GOOD</title>
    <link rel="stylesheet" href="/Public/Css/style.css">
    <link rel="stylesheet" href="/Public/Css/bootstrap.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="/Public/JavaScript/js.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Public/JavaScript/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/Public/JavaScript/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<!--全屏布局-->
<div class="container-fluid">
    <!--------------------头部导航------------------------>
    <nav class="navbar navbar-fixed-top " style="background: #00CFFF">
        <div class="navbar-header">
            <a role="button" class="navbar-brand" href="#">GD</a>
            <button type="button" class="collapsed navbar-toggle bg-white" data-toggle="collapse" data-target="#coll-div">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="coll-div">
            <form action="" class="navbar-form navbar-right">
                <div class="">
                    <input type="text" class="form-control" placeholder="Scan" style="text-indent: 10px;margin-right: 20px"/>
                </div>
            </form>
        </div>
    </nav>



    <div class="row">
        <!------------------------------左侧导航------------------------------------>
        <div class="col-sm-2 hidden-xs left-nav">
            <ul class="nav nav-pills nav-stacked fonts" role="tablist">
                <li class="active"><a href="#tab" data-toggle="tab">简介</a></li>
                <li class=""><a href="#tab1" role="tab" data-toggle="tab">路由</a></li>
                <li class=""><a href="#tab2" role="tab" data-toggle="tab">M函数CURD</a></li>
                <li class=""><a href="#tab3" role="tab" data-toggle="tab">Coneroll方法</a></li>
                <br/>
                <li class=""><a href="#tab4" role="tab" data-toggle="tab">Model方法</a></li>
                <li class=""><a href="#tab5" role="tab" data-toggle="tab">模板操作</a></li>
                <li class=""><a href="#tab6" role="tab" data-toggle="tab">One moro nav</a></li>
                <li class=""><a href="#tab7" role="tab" data-toggle="tab">Anther nav item</a></li>
                <li class=""><a href="#tab8" role="tab" data-toggle="tab">Moce navigation</a></li>
                <br/>
                <li class=""><a href="#tab9" role="tab" data-toggle="tab">Nav item again</a></li>
                <li class=""><a href="#tab10" role="tab" data-toggle="tab">One more nav</a></li>
                <li class=""><a href="#tab11" role="tab" data-toggle="tab">Another nav item</a></li>
            </ul>
        </div>

        <!-----------------------------------右侧面板------------------------------------>
        <div class="tab-content" id="myTab">
            <div  class="row col-sm-push-2 col-sm-10 col-xs-12 tab-pane fade in active" id="tab">
                <h3>GD框架是一款 MVC 设计模式的轻量级框架</h3>
                <div class="col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading ">
                            M
                        </div>
                        <div class="panel-body">
                            <p>M的设计是使用了 PDO 预处理机制有效的防止SQL注入</p>
                        </div>
                        <div class="panel-footer">
                            <a href="http://php.net/manual/zh/book.pdo.php">PDO简介</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            V
                        </div>
                        <div class="panel-body">
                            <p>V的设计是使用了 Smarty 的开源模板引擎</p>
                        </div>
                        <div class="panel-footer">
                            <a href="https://www.smarty.net/">Smarty官方网站</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            C
                        </div>
                        <div class="panel-body">
                            <p>User -> Controller -> Model -> View -> User</p>
                        </div>
                        <div class="panel-footer">
                            <a href="javascript:;" id="thinkImg">思维导图</a>
                        </div>
                    </div>
                </div>

                <!--<a href="javascript:;" ><img src="/index.php/index/getImg" alt="" onclick="this.src = '/index.php/index/getImg?' + Math.random()"></a>-->
            </div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab1">1</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab2">2</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab3">3</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab4">4</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab5">5</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab6">6</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab7">7</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab8">8</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab9">9</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab10">10</div>
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab11">11</div>
        </div>

    </div>
</div>
<div class="bgImg"><img src="/Public/Img/MVC.jpg" alt=""></div>
</body>
</html><?php }
}
