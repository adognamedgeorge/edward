<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页-云蚂蚁批发平台</title>
    <link href="/statics/<?= $version; ?>/css/home.css" rel="stylesheet"/>
    <link href="/statics/<?= $version; ?>/css/style.css" rel="stylesheet"/>
    <link href="/statics/<?= $version; ?>/css/iconfont.css" rel="stylesheet"/>
    <link href="/statics/<?= $version; ?>/img/favicon.ico" rel="shortcut icon"/>
    <script src="/statics/<?= $version; ?>/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<!--导航栏-->
<nav>
    <div class="wrapper">
        <p class="h-left">
            <a href="http://www.yunmayi.com">云蚂蚁官网</a>Hi,<a href="" class="user_name active"><?php echo $base_user["username"]; ?></a><a href="<?php echo $this->help("url", "logout", "passport"); ?>">退出</a>
        </p>

        <div class="h-right">
            <ul>
                <li><a href="<?php echo $this->help("url"); ?>">批发首页</a></li>
                <li><a href="<?php echo $this->help("url", "index/ucenter"); ?>">会员中心</a></li>
                <li><a href="<?php echo $this->help("url", "cashier/application"); ?>">当面付申请</a></li>
                <li><a href="http://dd.v2.yunmayi.com/seller/express/arrivalsMail" onclick="<?php if (!$expressIsActive):?>alert('请先开通该服务');return false;<?php endif;?>">快递代收</a></li>
                <li><a href="<?php echo $this->help("url", "product/collect"); ?>">收藏夹</a></li>
                <li><a href="<?php echo $this->help("url", "notice/help"); ?>" class="highlight" target="_blank">帮助中心</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--头部搜索栏-->
<header>
    <div class="wrapper">
        <div class="box">

            <div class="search_logo">
                <main>
                    <a class="logo_img" href=""><img src="http://pifa.yunmayi.com/statics/images/new_log.png" title="云蚂蚁www.yunmayi.com"/></a>
                    <a class="logo_font" href=""><img src="http://pifa.yunmayi.com/statics/images/index/04171124.png" title="云蚂蚁批发平台"/></a>
                </main>
            </div>

            <div class="search_form">
                <form action="<?php echo $this->help("url", "search/index"); ?>" method="GET">
                    <input type="text" name="q" placeholder="搜索商品关键字，品牌"/>
                    <button type="submit">搜索</button>
                </form>
            </div>

            <div class="search_cart">
                <span class="cart-p"><a class="cart-bg1" href=""> </a>进货单<i> </i></span>
                <span class="cart-span">90</span>
                <a class="cart-bg2" href="javascript:;"> </a>

                <div class="cart-hide">
                    <h3 class="flow">新加入的商品</h3>
                    <ul class="flow">
                    </ul>
                    <div class="deny">
                        <p>当前未进货，快去抢购吧</p>
                    </div>
                    <div class="hide-footer flow">
                        共计<span>￥<strong>198</strong></span>
                        <a href="" target="_blank">去结算</a>
                    </div>
                </div>
            </div>

            <div class="search_img">
                <a href=""> <img src="/statics/<?= $version; ?>/img/2.png" alt="云蚂蚁app二维码"/></a>
            </div>
        </div>

        <div class="search_bar">
            <h2>全部商品分类</h2>
            <ul>
                <li>
                    <a href="<?php echo $this->help("url"); ?>">首页</a>
                </li>
                <?php foreach ($header_var_menu_category_list as $value) : ?>
                    <?php if($value["name"]=="便民服务"&&$this->user['agent_number']=="31000000"): ?>
                        <li><a href="http://www.xiangjishop.com"><?php echo $value["name"]; ?></a></li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo $this->help("url", "product/list?cid={$value['id']}"); ?>"><?php echo $value["name"]; ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</header>
<!--轮播页-->
<div id="slider">
    <div class="wrapper">
        <div class="mulu">
            <!--<h2>全部商品分类</h2>-->
            <div class="list">
                <ul>
                    <?php foreach ($header_var_category_list as $value): ?>
                    <li>
                        <div class="list-a">
                            <a href="<?php echo $this->help("url", "product/list?cid={$value['id']}"); ?>"><?= $value['name'];?></a>
                            <?php for($i = 0; $i < 3; $i++): ?>
                                <?php if(isset($value['children'][$i]['name'])): ?>
                                    <a href="<?php echo $this->help("url", "product/list?cid={$value['children'][$i]['id']}"); ?>">
                                        <?= $value['children'][$i]['name']; ?>
                                    </a>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                        <div class="mulu-hide">
                            <p><?= $value['name'];?></p>
                            <div>
                                <?php foreach($value['children'] as $item): ?>
                                    <a href="<?php echo $this->help("url", "product/list?cid={$item['id']}"); ?>"><?= $item['name']; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!--JQuery轮播-->
        <div class="lunb">
            <ul class="lunbo-img">
                <?php foreach ($HOME_POSTER_INFO as $v) : ?>
                    <li>
                        <a href="<?php echo $v["link"]; ?>" target="_blank">
                            <img src="<?php echo $v["pic_url"]; ?>" />
                        </a>
                    </li>
                <?php endforeach; ?>
                <?php foreach ($HOME_POSTER_INFO as $v) : ?>
                    <li>
                        <a href="<?php echo $v["link"]; ?>" target="_blank">
                            <img src="<?php echo $v["pic_url"]; ?>" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="list-li"> </ul>
        </div>

        <div class="ads">
            <div class="ad1">
                <div class="ad1-img"><img src=""/></div>
                <?php if(!$is_checkin): ?>
                    <div class="ad1-text">
                        <h3>Hi, <a href="<?php echo $this->help("url", "index/ucenter"); ?>" class="active"><?= $user['name'];?></a></h3>
                        <p id="J_CheckinInfo">今日签到可领取<?= $getable_integral_num; ?>积分</p>
                    </div>
                    <button><a id="J_IntegralCheckin">签到</a></button>
                <?php else: ?>
                    <div class="ad1-text">
                        <h3>Hi, <a href="<?php echo $this->help("url", "index/ucenter"); ?>" class="active"><?= $user['name'];?></a></h3>
                        <p>明日签到可领取<?= $getable_integral_num; ?>积分</p>
                    </div>
                    <button><a>已签到</a></button>
                <?php endif; ?>
            </div>
            <ul class="ads-ul">
                <li><h3><?= sprintf("%.2f", $user_extra["balance"]/100); ?></h3><a href="">余额</a></li>
                <li><h3><?= $header_var_user_coupon_count; ?></h3><a href="">优惠券</a></li>
                <li><h3 id="J_TotalIntegral"><?php echo $user_extra["integral"]; ?></h3><a href="">积分</a></li>
            </ul>
            <div class="ad2">
                <ul>
                    <li><a class="ad-bg1" href="<?= $this->help("url", "index/ucenter"); ?>">会员中心</a></li>
                    <li><a class="ad-bg2" href="<?= $this->help("url", "coupon/center"); ?>">领券中心</a></li>
                    <li><a class="ad-bg3" href="<?= $this->help("url", "integral/gift"); ?>">积分兑换</a></li>
                </ul>
            </div>
            <div class="ad3">
                <div class="ad-t">
                    <h3>公告</h3>
                    <a class="gengduo" href="/notice?new=0">更多<i></i></a>
                </div>
                <div class="ad-b">
                    <ul>
                        <?php foreach ($notice_list as $value) : ?>
                            <li>
                                <?php $var=$value["id"]?>
                                <a href="<?php echo "/notice?new=".$var?>" class="J_Notice" target="_blank">
                                    <?php echo $value["title"]; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--限时特价-->
<div id="special">
    <div class="wrapper">
        <div class="sp-left">
            <img src="/statics/<?= $version; ?>/img/home_banner_discount@2x.png"/>
        </div>
        <div class="sp-slid">
            <ul>
                <?php foreach ($speciallist as $v) : ?>
                    <?php $sell_price = $this->help("getCustomerSellPrice", $v['product_list'], $customer_type); ?>
                <li class="item-box">
                    <a  href="javascript:;" class="item-bg cover"> </a>
                    <div class="item-img">
                        <a href="/product/detail?id=<?php echo $v['product_list']["id"]; ?>" target="_blank">
                            <img src="http://i8.yunmayi.com<?php echo $v['product_list']["pic_url"] ?>XXXXX!!!!!_300x300.jpg"/>
                        </a>
                    </div>
                    <div class="item-title">
                        <a href="/product/detail?id=<?php echo $v['product_list']["id"]; ?>" target="_blank"><?php echo $v['product_list']["title"] ?></a>
                    </div>
                    <div class="item-price">
                        <i>￥<?php echo $this->help("priceDecode", $sell_price); ?>/<?php echo $v['product_list']["unit"] ?>
                        <span>规格:<?php echo $v['product_list']["spec"]; ?></span>
                    </div>
                    <div class="item-action">
                        <a href="javascript:;">-</a>
                        <input type="text" value="1" data-min="1"/>
                        <a href="javascript:;">+</a>
                        <a href="">进货</a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>

            <a href=""><div class="btn fl iconfont"><i>&#xe600;</i></div></a>
            <a href=""><div class="btn fr iconfont"><i>&#xe600;</i></div></a>
        </div>
        <!-- 爆款预售 -->
        <div class="sp-right">
            <div class="r-img">
                <?php foreach ($presaleList as $v) : ?>
                    <a href="/coupon/presale?presaleId=<?php echo $v["id"]; ?>" target="_blank"><img src="http://i8.yunmayi.com<?php echo $v["pic_url"] ?>XXXXX!!!!!_300x300.jpg" /></a>
                <?php endforeach; ?>
            </div>
            <div class="r-title">
            </div>
        </div>
    </div>
</div>
<!--商品展示-->
<div id="categories">
    <div class="wrapper">
        <!-- 酒水饮料 -->
        <?php $header_var_category_list = \Core\Help::fieldMapping($header_var_category_list,"id");
//            var_dump($header_var_category_list);
        ?>
        <?php foreach ($floor_data as $k => $v):?>
        <div id="c1" class="category">
            <div class="c-left">
                <div class="left-t">
                    <div class="ca-title">
                        <a href="">
                            <?php echo isset($header_var_category_list[$v['fst_cat_id']])?$header_var_category_list[$v['fst_cat_id']]['name']:"";?>
                            <i class="i-bg"> </i>
                        </a>
                    </div>
                    <div class="ca-list">
                        <ul>
                            <?php foreach ($header_var_category_list[$v['fst_cat_id']]['children'] as $item):?>
                                <li><a href="<?php echo $this->help("url", "product/list?cid={$item['id']}"); ?>"><?= $item['name'];?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="left-b">
                    <img src="../../../public/statics/1/img/home_banner_L1.png"/>
                </div>
            </div>
            <?php if (!empty($v["product_list"])) : ?>
                <div class="c-right">
                    <ul>
                        <?php for($i =0;$i<8;$i++): ?>
                            <?php $item = $v['product_list'][$i];?>
                            <?php $sell_price = $this->help("getCustomerSellPrice", $item, $customer_type); ?>
                            <li class="item-box">
                                <a href="javascript:;" class="item-bg"> </a>
                                <div class="item-img">
                                    <a href="/product/detail?id=<?php echo $item["id"]; ?>" target="_blank"><img src="http://i8.yunmayi.com<?php echo $item["pic_url"] ?>XXXXX!!!!!_300x300.jpg"/></a>
                                </div>
                                <div class="item-title">
                                    <a href="/product/detail?id=<?php echo $item["id"]; ?>" target="_blank"><?= $item["title"] ?></a>
                                </div>
                                <div class="item-price">
                                    <i>￥</i><strong><?php echo $this->help("priceDecode", $sell_price); ?></strong>/<?= $item["unit"] ?>
                                    <span>规格:<?= $item["spec"]; ?></span>
                                </div>
                                <div class="item-action">
                                    <a href="javascript:;">-</a>
                                    <input type="text" value="<?php echo $item["min_sold_num"]; ?>" data-min="<?php echo $item["min_sold_num"]; ?>" data-max="<?php echo max($item['product_list']["stock_info"]["stock"], $item['product_list']["stock_info"]["warehouse_stock"]) ?>"/>
                                    <a href="javascript:;">+</a>
                                    <?php if($item["stock_info"]["stock"] < $item["min_sold_num"] && $item["stock_info"]["warehouse_stock"] < $item["min_sold_num"]):?>
                                        <a class="J_Nostock" data-id="<?php echo $item["id"]; ?>" style="background-color:grey;pointer-events:none;">售罄</a>
                                    <?php else:?>
                                        <a class="J_AddCartBtn add_cart_btn" data-id="<?php echo $item["id"]; ?>"  data-start="<?php echo $item["limit_start_time"];?>"  data-end="<?php echo $item["limit_end_time"];?>"  data-num="<?php echo $item["limit_buy_num"];?>" >进货</a>
                                    <?php endif;?>
                                </div>
                            </li>
                        <?php endfor;?>
                    </ul>
                </div>
            <?php endif;?>
        </div>
        <?php endforeach;?>
    </div>
</div>

<div id="line">
    <div class="wrapper">
        <div class="line-img-box">
            <img src="http://pifa.yunmayi.com/statics/images/index/0502.jpg"/>
        </div>
    </div>
</div>
<!--页脚-->
<footer>
    <div class="wrapper">
        <div class="footer-info">
            <p class="footer-tel">加盟咨询热线：<b>400-069-2666</b></p>
            <p class="footer-link">
                <a href="">批发平台</a>
                <a href="">零售商城</a>
                <a href="">蚂蚁小店</a>
                <a href="">区域加盟</a>
                <a href="">供应商合作</a>
            </p>
            <p class="footer-add">公司地址：浙江省杭州市拱墅区祥符街道祥园路108号中国智慧信息产业园3期G座2号楼5楼</p>
            <p class="footer-copy">Copyright&#169;2014-2017版权归浙江云之涞网络科技有限公司所有<span>网站备案/许可证号：湘ICP备14000706号-1</span></p>
        </div>
        <div class="footer-login">
            <a href=""><img src="http://www.yunmayi.com/image/app.png"/><p>云蚂蚁app</p></a>
            <a href=""><img src="http://www.yunmayi.com/image/weixin.jpg"/><p>微信公众号</p></a>
        </div>
    </div>
</footer>
<!--侧栏-->
<aside>
    <ul>
        <li class="scr-li selected"><a href="#special" class="iconfont">限时特价<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">酒水饮料<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">食品零食<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">粮油调味<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">日用洗护<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">家用百货<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">冰淇淋<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">速冻食品<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">尾品汇<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="" class="iconfont">特价区<i>&#xe600;</i></a></li>
        <li class="scr-li toTop"><a href="#" class="iconfont">返回顶部<i>&#xe62d;</i></a></li>
    </ul>
</aside>
<script type="text/javascript">
    var c =[];
    $(function(){
        // 签到
        $("#J_IntegralCheckin").on("click", function(){
            $.getJSON("/integral/checkin", {}, function(result){
                if(result.error==false){
                    $("#J_IntegralCheckin").html("已签到");
                    $("#J_CheckinInfo").html('明日签到获得<b>'+result.data.num+'</b>积分');
                    $("#J_TotalIntegral").text(result.data.integral_total);
                    $("#J_TotalIntegral").removeAttr("id");
                }else{
                    alert("签到失败!");
                }
            });
            return false;
        });

        //点击/取消收藏
        $(".item-box").on("click","a.item-bg",function(e){
            e.preventDefault();//阻止默认行为
            $a=$(this);
            if($a.hasClass("cover")){  //判断 a 的class属性里有没有 cover
                $a.removeClass("cover");
            }else{
                $a.addClass("cover");
            }
        });

        //进货单
        function search(){//创建一个函数
            var len=$(".cart-hide>ul>li").length; //判断  li的个数
            $(".cart-span").html(len);//将 此数据放入 .cart-span中
            if(len>0){//如果 len>0
                //就给.deny添加 flow 属性给其余所有兄弟元素 删除flow 属性  /* ps: flow{ display:none } */
                $(".deny").addClass("flow").siblings().removeClass("flow");
            }else{//否则
                $(".cart-span").html("0");//.cart-span里输出为0
                //就给.deny删除 flow 属性给其余所有兄弟元素 添加flow 属性
                $(".deny").removeClass("flow").siblings().addClass("flow");
            }
        }
        search();//调用这个函数

        //商品数量的加减 && 进货
        $(".item-action").on("click","a",function(e){
            e.preventDefault(); //取消事件默认行为
            $a = $(this);
            var a1=$a.index(); //取得 子元素中的每个下标
            var val = $a.siblings("input").val(); //获取input框里的值
            var datamin = $a.siblings("input").attr("data-min")
            //console.log(a1);
            if(a1 === 0){//减
                val--;
                if(val < datamin){
                    val = datamin;
                }
            }else if(a1 === 2){//加
                val++;
            }else if(a1 === 3){//进货
                var price = $a.parent().prev().children("strong").text(); //拿到 商品单价
                var title = $a.parent().prev().prev().children().text(); //拿到 商品描述
                var img=$a.parent().prev().prev().prev().children().children().attr("src"); //拿到 商品图片
                var obj={price,title,img,val};//将所有数据 放入一个对象中 ，用es6省略了相同的名字 -->es5 :obj={price:price,....}
                c.push(obj); //将对象打入数组中！
                alert("进货成功！");
                var html="",total=0;//创建新的变量 html准备保存html片段 ,total保存总价
                for(var arr of c){//遍历
                    total += arr.price*arr.val;//拿到总价
                    var {title,price,img,val}=arr;  //es6解构
                    html+=`<li><a class="ch-img" href=""><img src="${img}"></a>
                            <div class="ch-content">
                                <p class="ch-text"><a href="#">${title}</a></p>
                                <div class="item-buy">
                                    <a href="javascript:;">-</a>
                                    <input type="text" value="${val}" data-min="${datamin}"/>
                                    <a href="javascript:;">+</a>
                                    <span>￥<strong>${price}</strong></span>
                                </div>
                            </div></li>`;//模板字符串
                }
                $(".cart-hide>ul").html(html);//将模板放入 .cart-hide>ul 中
                $(".hide-footer>span>strong").html(total);//将总价放入 .hide-footer>span>strong中
            }
            $a.siblings("input").val(val);//将 数量放入 input里
            search();//调用这个函数
        });

        //进货单中的点击添加
        $(".cart-hide").on("click","ul li .item-buy a",function(e){
            e.preventDefault();//取消事件默认行为
            var len=$(this).index();//判断元素的下标
            var $a=$(this).parent().parent().parent();//获得 .cart-hide> ul >li 里的 li
            var ls=$a.index();//判断li的下标
            var val=$(this).siblings("input").val();//获取input里的值 （商品的数量）
            var datamin = $(this).siblings("input").attr("data-min")
            var price=$(this).siblings("span").children().html();//获取单价
            var p=parseFloat(price);//将字符串转换为number(小数)
            var total=$(".hide-footer>span>strong").html();//获取总价
            var t=parseFloat(total);//同上
            if(len==0){  //减号 -
                val--;  //商品数量--
                t-=p;  //总价=总价-当前商品的单价
                if(val=== datamin-1){//如果商品数量为0
                    $(this).parent().parent().parent().remove(); //删除li的html片段
                    c.splice(ls,1);//数组去除这个下标里的所有数据
                }
                search();//调用这个函数
                $(this).siblings("input").val(val);//将值放入input
                $(".hide-footer>span>strong").html(t.toFixed(1));//将值放入总价中
            }else if(len==2){//加号 +
                val++; //商品数量++
                t+=p; //总价=总价+当前商品的单价
                $(this).siblings("input").val(val);//将值放入input
                $(".hide-footer>span>strong").html(t.toFixed(1));//将值放入总价中
            }

        })


        // 轮播
        (function(){
            i=0;
            aImgli=$('.lunbo-img li');
            len=aImgli.length;
            for(j=0;j<aImgli.length;j++){
                $(".list-li").append('<li> </li>');
                $(".list-li li").eq(j).html(j+1);
            }
            $(".list-li li").first().addClass('active');

            firstimg=aImgli.first().clone(); //复制第一张图片
            $('.lunbo-img').append(firstimg).width(aImgli.length*($('.lunbo-img img').width()));
            timer=setInterval(function(){
                i++;
                if (i===len) {
                    i=0;
                    $('.lunbo-img').css({left:0});//保证无缝轮播，设置left值
                }

                $('.lunbo-img').stop().animate({left:-i*700},2000);

                if(i===len){
                    $('.list-li li').eq(0).addClass('active').siblings().removeClass('active');
                }else {
                    $('.list-li li').eq(i).addClass('active').siblings().removeClass('active');
                }
            },6000);

            //鼠标移入，暂停自动播放，移出，开始自动播放
            $('.lunb').hover(function(){
                clearInterval(timer);
            },function(){
                timer=setInterval(function(){
                    i++;
                    if (i===len) {
                        i=0;
                        $('.lunbo-img').css({left:0});
                    }
                    //进行下一张图片
                    $('.lunbo-img').stop().animate({left:-i*700},2000);
                    //圆点跟着变化
                    if (i===len) {
                        $('.list-li li').eq(0).addClass('active').siblings().removeClass('active');
                    }else{
                        $('.list-li li').eq(i).addClass('active').siblings().removeClass('active');
                    }
                },6000)
            });

            $('.list-li li').mouseover(function(){
                let _index=$(this).index();
                //维持i变量控制的对应关系不变
                i = _index;
                $('.lunbo-img').stop().animate({left:-_index*700},300);
                $('.list-li li').eq(_index).addClass('active').siblings().removeClass('active');
            });

        })();

        //侧栏
        (function(){
            //1.楼梯什么时候显示，800px scroll--->scrollTop
            $(window).on('scroll',function(){
                $scroll=$(this).scrollTop();
                if($scroll>=390){
                    $('aside').show();
                    if ($scroll >= 660) {
                        $('.scr-li').first().removeClass('selected')
                    }else {
                        $('.scr-li').first().addClass('selected')
                        $('.scr-li:eq(1)').removeClass('selected')
                    }
                }else{
                    $('aside').hide();
                }

                // 4.拖动滚轮，对应的楼梯样式进行匹配
                $('.category').each(function(){
                    $loutitop = $('.category').eq($(this).index()).offset().top + 351;
                    Ali=$('.scr-li').not(':first,:last');
                    if($loutitop > $scroll && $scroll >= 660){//楼层的top大于滚动条的距离
                        Ali.removeClass('selected');
                        Ali.eq($(this).index()).addClass('selected');
                        return false;//中断循环
                    }
                });
            });

            //3.回到顶部
            $('.toTop').on('click',function(){
                $('html,body').animate({//$('html,body')兼容问题body属于chrome
                    scrollTop:0
                })
            });
        })();
        $(window).trigger('scroll');


    });
</script>
</body>
</html>