<?php
/* Smarty version 3.1.30, created on 2017-09-26 03:17:07
  from "F:\wamp\www\myMVC\Project\home\View\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c9aa93504c41_68574733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74f12b00d8b72c2fa863881830e98d27ed0de761' => 
    array (
      0 => 'F:\\wamp\\www\\myMVC\\Project\\home\\View\\index.html',
      1 => 1506388624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c9aa93504c41_68574733 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li class=""><a href="#tab2" role="tab" data-toggle="tab">模板操作</a></li>
                <br/>
                <li class=""><a href="#tab3" role="tab" data-toggle="tab">Coneroll方法</a></li>
                <li class=""><a href="#tab4" role="tab" data-toggle="tab">Model方法</a></li>
                <br/>
                <li class=""><a href="#tab5" role="tab" data-toggle="tab">M函数CURD</a></li>
            </ul>
        </div>

        <!-----------------------------------右侧面板------------------------------------>
        <div class="tab-content" id="myTab">
            <!--第一块-->
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
                            <a target="_blank" href="http://php.net/manual/zh/book.pdo.php">PDO简介</a>
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
                            <a target="_blank" href="https://www.smarty.net/">Smarty官方网站</a>
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
                            <a  href="javascript:;" id="thinkImg">思维导图</a>
                        </div>
                    </div>
                </div>
                <!--<a href="javascript:;" ><img src="/index.php/index/getImg" alt="" onclick="this.src = '/index.php/index/getImg?' + Math.random()"></a>-->
            </div>

            <!--第二块-->
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab1">
                <h3>GD URL 模式</h3>
                <p class="alert alert-info">模式1 : www.mvc.com?b=Home&c=index&m=index</p>
                <p class="alert alert-success">模式2 : www.mvc.com/Home/index/index(推荐)</p>
                <p class="alert alert-warning">b(block)是指你调用<code>类</code>所在的区块 &nbsp;&nbsp;c(controller)是指你调用<code>类</code> &nbsp;&nbsp;m(method)是指你调用<code>类</code>的方法</p>
                <p class="alert alert-danger">使用到的技术Apache重定向 : RewriteRule ^index.php/([a-zA-z0-9]*)/([a-zA-z0-9]*)/([a-zA-z0-9]*)$ index.php?b=$1&c=$2&m=$3 [QSA]</p>
                <p class="alert alert-info">这是一个简单的页面跳转 -> <a href="<?php echo U('test/ech',array('id'=>1,'name'=>'tao'));?>
" class="alert-link">跳转</a></p>
            </div>

            <!--第三块-->
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab2">
                <h3>模板操作</h3>
                <pre>
    //控制器中index方法
    //一个简单的跳转
    public function index()
    {
        //声明 assign 数组
        $assign = [
            'name' => 'GD',
            'as' => 'Good'
        ];
        //assign方法 只接受数组;
        $this->assign($assign);
        //传递到当前区块的View模板
        $this->display('index.html');
    }
    //需要注意的是你所定义的类必须继承 Controller 但是在继承之前需要引入命名空间如下;
    //use ClassFile\Controller
                </pre>
                <h3>Controller类中display和assign的源码</h3>
                <pre>
    private $smarty;

    public function display($point)
    {
        $this->smarty->display($point);
    }

    public function assign($arr = [])
    {
        if (!is_array($arr)) {
            getErrInfo('You need to pass in an array parameter');
        }
        foreach ($arr as $name => $var) {
            $this->smarty->assign($name, $var);
        }
    }
                </pre>
                <h3>HTML中如何使用</h3>
                <pre>
    &lt;html>
    &lt;head>
         &lt;meta charset="utf-8"/>
         &lt;title>使用Smarty变量&lt;/title>
    &lt;/head>
    &lt;body>
         框架名{ $name} 别名{ $as}
    &lt;/body>
    &lt;/html>
    //把$前面空格去掉就行 我这里是为了防止解析
                </pre>
            </div>
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
