<?php
/* Smarty version 3.1.30, created on 2017-09-29 09:11:05
  from "F:\wamp\www\myMVC\Project\Home\View\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cdf209a1a556_65658322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '129aa92367e7c4c09b181c50b680ee670043a026' => 
    array (
      0 => 'F:\\wamp\\www\\myMVC\\Project\\Home\\View\\index.html',
      1 => 1506665996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cdf209a1a556_65658322 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li class=""><a href="#tab4" role="tab" data-toggle="tab">M函数CURD</a></li>
                <br/>
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
                <p class="alert alert-info">这是一个简单的页面跳转并且传递的参数 -> <a href="<?php echo U('test/ech',array('id'=>1,'name'=>'tao'));?>
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
    //具体操作请参考Smarty官网
                </pre>
            </div>

            <!--第四块-->
            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab3">
                <h3>Controller方法</h3>
                <div class="panel-group" style="margin-top:20px" id="myPanel">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><a href="#collOne" data-parent="#myPanel" data-toggle="collapse">Controller::jsonReturn</a></div>
                        </div>
                        <div class="panel-collapse collapse in" id="collOne">
                            <div class="panel-body">
                                public string Controller::jsonReturn(Mixed $value) <br>
                                $value 可传入数组和字符串 <br>
                                返回json格式的字符串
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><a data-parent="#myPanel" href="#collTwo" data-toggle="collapse">Controller::getDisturb</a></div>
                        </div>
                        <div class="panel-collapse collapse" id="collTwo">
                            <div class="panel-body">
                                public image Controller::getDisturb(Array $config) <br>
                                $config 传入数组类型的配置文件<br>
                                返回图片格式验证码<br>
                                <a href="javascript:;"><img src="<?php echo U('index/getImg');?>
" alt="" onclick="this.src = '/Home/index/getImg?' + Math.random()"></a><br>
                                它会自动存放在$_SESSION['Disturb']下
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="fade col-sm-push-2 tab-pane col-sm-10 col-xs-12" id="tab4">
                <h3>M函数CURD</h3>
                <p class="alert alert-success">
                    因为M函数涉及到数据库 那么你必须去修改数据库的配置文件 它在Project下的Config目录里 <br>
                    //实例化模型 并且模型继承基类 Model<br>
                    $model = M('test');
                    //操作M对象 格式 obj -> 操作(del | add | up ) -> [where] <br>
                    //查询 obj -> que -> [where] -> 返回模式(find | select)
                </p>
                <div class="panel-group" style="margin-top:20px" id="myPanelModel">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><a href="#collModelOne" data-parent="#myPanelModel" data-toggle="collapse">ADD</a></div>
                        </div>
                        <div class="panel-collapse collapse in" id="collModelOne">
                            <div class="panel-body">
                                <pre>
        //add 函数只允许存放一维数组
        $add = [
            'name' => 'TAOLIFENG',
            'item' => '789'
        ];

        //执行并返回受影响的行数
        $addRows = $model->add($add);
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><a data-parent="#myPanelModel" href="#collModelTwo" data-toggle="collapse">DELETE</a></div>
                        </div>
                        <div class="panel-collapse collapse" id="collModelTwo">
                            <div class="panel-body">
                                <pre>
        //删除单个
        $del = [
            'id' => 32
        ];
        //删除多个
        $del = [
            'id' => '28,29,30'
        ];
        //执行并返回受影响的行数
        $delRows = $model -> del($del);

        //del 配合 where 使用
        $where = ['id'=>33];
        $delRows = $model -> del() -> where($where);
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><a data-parent="#myPanelModel" href="#collModelThree" data-toggle="collapse">UPDATE</a></div>
                        </div>
                        <div class="panel-collapse collapse" id="collModelThree">
                            <div class="panel-body">
                                <pre>
        $up = [
            'name' => 'aaaaa123',
            'item' => 'bbbbb123'
        ];

        $where = [
            'id' => 36,
            'name' => 'aaaaa'
        ];

        //开启 $model::PATT_AND 模式 这是默认的
        // where id = 33 and item = 123

        //开启 $model::PATT_OR 模式
        // where id = 33 or item = 123

        $upRows = $model -> up($up) -> where($where, $model::PATT_AND);
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><a data-parent="#myPanelModel" href="#collModelFour" data-toggle="collapse">QUERY</a></div>
                        </div>
                        <div class="panel-collapse collapse" id="collModelFour">
                            <div class="panel-body">
                                <pre>
        $where = [
            'id' => 38,
            'item' => 666666
        ];
        //字段
        $field = 'a.id,a.name,a.item';
        //别名
        $as = 'a';
        //取一维数组
        $res = $model -> que($field, $as) -> where($where) -> find();
        //取二维数组
        $res1 = $model -> que() -> select();
        //打印
        var_dump($res);
        var_dump($res1);
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><a data-parent="#myPanelModel" href="#collModelFive" data-toggle="collapse">JOIN</a></div>
                        </div>
                        <div class="panel-collapse collapse" id="collModelFive">
                            <div class="panel-body">
                                <pre>
        //单表左连接
        $join = 'left join news n on t.id = n.id';
        //多表左连接
        $join = [
            'left join news n on n.id = t.id',
            'left join username u on u.id = t.id'
        ];
        $filed = 't.id,t.name tname,t.item,n.name nname,n.mess,u.user,u.pwd';
        $as = 't';

        $arr = $model -> que($filed, $as) -> join($join) -> select();

        var_dump($arr);
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><a data-parent="#myPanelModel" href="#collModelSix" data-toggle="collapse">ORDER</a></div>
                        </div>
                        <div class="panel-collapse collapse" id="collModelSix">
                            <div class="panel-body">
                                <pre>
        //order写法
        $arr = $model -> que() -> order('id desc') -> select();

        var_dump($arr);
                                </pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


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
