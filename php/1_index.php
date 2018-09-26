<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页-云蚂蚁批发平台</title>
    <link href="/statics/<?= $version; ?>/css/home.css" rel="stylesheet"/>
    <link href="/statics/<?= $version; ?>/css/style.css" rel="stylesheet"/>
    <link href="/statics/<?= $version; ?>/css/iconfont.css" rel="stylesheet"/>
    <link href="/statics/<?= $version; ?>/img/favicon.ico" rel="shortcut icon"/>
    <?php include $this->getGlobalViewPath("css.php"); ?>
    <?php include $this->getViewPath("common/css.php"); ?>
    <?php $this->loadCss("/statics/css/pages/home/index/overlay.css?04260915"); ?>
    <script src="/statics/<?= $version; ?>/js/jquery-3.3.1.min.js"></script>
    <style>
        .c-left_1 {background-color:#96D3FA;}
        .c-left_2 {background-color:#FCC89A;}
        .c-left_3 {background-color:#B199FF;}
        .c-left_4 {background-color:#81E3CE;}
        .c-left_5 {background-color:#DCC38E;}
        .c-left_6 {background-color:#FFA8A8;}
        .c-left_7 {background-color:#89BAF5;}
        .c-left_8 {background-color:#F7D67C;}
        .c-left_9 {background-color:#FB8F8F;}
        .explain{
            position: fixed;
            width: 100%;
            height:100%;
            background:rgba(0,0,0,.2) ;
            z-index:99;
            top:0;
            left:0;
            padding-top: 10%;
            display: none;
        }
        .explain .explain_mian{
            vertical-align: middle;
            background: white;
            width: 690px;
            min-height: 140px;
            margin: 0 auto;
            font-size: 14px;
            line-height: 25px;
            position : relative;
            overflow-y : scroll;
            height :400px;
        }
        .explain .header {
            height :40px;
            width: 100%;
            line-height :40px;
        }
        .explain  span, .explain_mian div {
            width: 24%;
            display: inline-block;
            text-align : center;
        }
        .explain_mian .items {
            padding :10px 0;
        }
        .explain_mian div input {
            width :15%;
            text-align : center;
        }
        .explain_mian a {
            font-size: 20px;
            vertical-align : middle;
            border: 1px solid #dddddd;
            background-color: #fafafa;
            width: 20px;
            display: inline-block;
            height: 20px;
            line-height: 20px;
        }
        .explain_mian a:first-child{
            margin-right: -5px;
        }
        .explain_mian a:last-child{
            margin-left: -5px;
        }
        .explain_mian .buyButton {
            height: 26px;
            line-height: 26px;
            padding: 0 12px;
            color: #ffffff;
            background: #e62d2d;
        }
        .explain  .coloseButton{
            border:0;
            width: 35px;
            height:30px;
            line-height: 10px;
            position: absolute;
            top: 0;
            right: 0;
            font-size: 22px;
            z-index: 99;
        }
        .j_display{
            display: block;
        }
        .focus_within {
            height:36px;
            width:100%;
            border-bottom:2px solid rgba(230,45,45,1);
            margin-bottom:10px;
        }
        button {
            width: 100px;
            height:36px;
            font-size: 16px;
            display: inline-block;
            outline:none;
            box-sizing: border-box;
            background-color:inherit;
            color:rgba(230,45,45,1);
            border:1px solid rgba(230,45,45,1);
            cursor:pointer;
            border-bottom:none;
            float:left;
        }
        .focus-within {
            background-color: rgba(230,45,45,1);
            color:rgba(255,255,255,1);
        }
        .sp_left_recommend {
            display:none;
        }
        .sp-slid ul {
            position:absolute;
        }
        .disabled {
            pointer-events:none;
        }
    </style>
</head>
<body>
<!--导航栏-->
<?php include $this->getGlobalViewPath("navigation.php"); ?>
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
                <span class="cart-p"><a class="cart-bg1" href="<?php echo $this->help("url", "cart1"); ?>"> </a><a href="<?php echo $this->help("url", "cart1"); ?>" style="cursor:pointer;color: #333333;">进货单</a><i> </i></span>
                <span class="cart-span">0</span>
                <a class="cart-bg2" style="cursor:pointer;" @click="getData"></a>

                <div class="cart-hide">
                    <section class="cart_hide_section1">
                        <p>当前您还未进货，快去抢购吧</p>
                    </section>

                    <section class="cart_hide_section2" id="J_CartArea">
                        <h3>新加入的商品</h3>
                        <ul></ul>
                        <div class="hide-footer">
                            共计<span>￥<strong>0</strong></span>
                            <form action="/trade/confirm" method="post" id="J_GoConfirmForm">
                                <a href="javascript:;" id="J_GoConfirmBtn">去结算</a>
                            </form>
                        </div>
                    </section>
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
        <div class="focus_within">
            <button class="focus-within button_first">限时特价</button>
            <button class="button_second">新品推荐</button>
        </div>
    </div>

    <div class="wrapper">
        <div class="sp-left sp_left_special">
            <img src="/statics/<?= $version; ?>/img/home_banner_discount@2x.png"/>
        </div>
        <div class="sp-left sp_left_recommend">
            <img src="/statics/<?= $version; ?>/img/home_banner_new@2x.png"/>
        </div>

        <div class="sp-slid" id="sp_special">
            <!-- 限时特价start-->
            <ul class="sp_slid_special">
                <?php foreach ($speciallist as $v) : ?>
                    <?php $sell_price = $this->help("getCustomerSellPrice", $v['product_list'], $customer_type); ?>
                <li class="item-box">
                    <a  href="javascript:;" class="J_AddCollectBtn item-bg" id="<?php echo $v['product_list']["id"]; ?>" data-id="<?php echo $v['product_list']["id"]; ?>"> </a>
                    <div class="item-img">
                        <a href="/product/detail?id=<?php echo $v['product_list']["id"]; ?>" target="_blank">
                            <img src="http://i8.yunmayi.com<?php echo $v['product_list']["pic_url"] ?>XXXXX!!!!!_300x300.jpg"/>
                        </a>
                    </div>
                    <div class="item-title">
                        <a href="/product/detail?id=<?php echo $v['product_list']["id"]; ?>" target="_blank"><?php echo $v['product_list']["title"] ?></a>
                    </div>
                    <div class="item-price">
<!--                        <i>￥--><?php //echo $this->help("priceDecode", $sell_price); ?><!--/--><?php //echo $v['product_list']["unit"] ?>
                        <i>￥</i><strong><?php echo $this->help("priceDecode", $sell_price); ?></strong>/<?= $item["unit"] ?>
                        <span>规格:<?php echo $v['product_list']["spec"]; ?></span>
                    </div>
                    <div class="item-action item_quantity">
                        <a href="javascript:;" class="J_Decrement">-</a>
                        <input type="text" value="<?php echo $v['product_list']["min_sold_num"]; ?>" data-min="<?php echo $v['product_list']["min_sold_num"]; ?>" data-max="<?php echo max($v['product_list']["stock_info"]["stock"], $v['product_list']["stock_info"]["warehouse_stock"]) ?>" class="J_QuantityInput"/>
                        <a href="javascript:;" class="J_Increment">+</a>
                        <?php if($v['product_list']["stock_info"]["stock"] < $v['product_list']["min_sold_num"] && $v['product_list']["stock_info"]["warehouse_stock"] < $v['product_list']["min_sold_num"]):?>
                            <span class="J_Nostock" data-id="<?php echo $v['product_list']["id"]; ?>">售罄</span>
                        <?php else:?>
                            <a href="#" class="J_AddCartBtn add_cart_btn" data-id="<?php echo $v['product_list']["id"]; ?>" data-start="<?php echo $v['product_list']["limit_start_time"];?>"  data-end="<?php echo $v['product_list']["limit_end_time"];?>"  data-num="<?php echo $v['product_list']["limit_buy_num"];?>">进货</a>
                        <?php endif;?>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <!--限时特价end-->
            <a href="javascript:;"><div class="btn fl iconfont" id="left"><i>&#xe600;</i></div></a>
            <a href="javascript:;"><div class="btn fr iconfont" id="right"><i>&#xe600;</i></div></a>
        </div>

        <div class="sp-slid" id="sp_recommend">
            <!--  新品推荐start-->
            <ul class="sp_slid_recommend">
                <?php foreach ($recommend_list as $v) : ?>
                    <?php $sell_price = $this->help("getCustomerSellPrice", $v['product_list'], $customer_type); ?>
                    <li class="item-box">
                        <a  href="javascript:;" class="J_AddCollectBtn item-bg" id="<?php echo $v['product_list']["id"]; ?>" data-id="<?php echo $v['product_list']["id"]; ?>"> </a>
                        <div class="item-img">
                            <a href="/product/detail?id=<?php echo $v['product_list']["id"]; ?>" target="_blank">
                                <img src="http://i8.yunmayi.com<?php echo $v['product_list']["pic_url"] ?>XXXXX!!!!!_300x300.jpg"/>
                            </a>
                        </div>
                        <div class="item-title">
                            <a href="/product/detail?id=<?php echo $v['product_list']["id"]; ?>" target="_blank"><?php echo $v['product_list']["title"] ?></a>
                        </div>
                        <div class="item-price">
                            <!--                        <i>￥--><?php //echo $this->help("priceDecode", $sell_price); ?><!--/--><?php //echo $v['product_list']["unit"] ?>
                            <i>￥</i><strong><?php echo $this->help("priceDecode", $sell_price); ?></strong>/<?= $item["unit"] ?>
                            <span>规格:<?php echo $v['product_list']["spec"]; ?></span>
                        </div>
                        <div class="item-action item_quantity">
                            <a href="javascript:;" class="J_Decrement">-</a>
                            <input type="text" value="<?php echo $v['product_list']["min_sold_num"]; ?>" data-min="<?php echo $v['product_list']["min_sold_num"]; ?>" data-max="<?php echo max($v['product_list']["stock_info"]["stock"], $v['product_list']["stock_info"]["warehouse_stock"]) ?>" class="J_QuantityInput"/>
                            <a href="javascript:;" class="J_Increment">+</a>
                            <?php if($v['product_list']["stock_info"]["stock"] < $v['product_list']["min_sold_num"] && $v['product_list']["stock_info"]["warehouse_stock"] < $v['product_list']["min_sold_num"]):?>
                                <span class="J_Nostock" data-id="<?php echo $v['product_list']["id"]; ?>">售罄</span>
                            <?php else:?>
                                <a href="#" class="J_AddCartBtn add_cart_btn" data-id="<?php echo $v['product_list']["id"]; ?>" data-start="<?php echo $v['product_list']["limit_start_time"];?>"  data-end="<?php echo $v['product_list']["limit_end_time"];?>"  data-num="<?php echo $v['product_list']["limit_buy_num"];?>">进货</a>
                            <?php endif;?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!--新品推荐end-->

            <a href="javascript:;"><div class="btn fl iconfont" id="left"><i>&#xe600;</i></div></a>
            <a href="javascript:;"><div class="btn fr iconfont" id="right"><i>&#xe600;</i></div></a>
        </div>

        <!-- 爆款预售start -->
        <div class="sp-right">
            <ul class="r-img">
                <?php foreach ($presaleList as $v) : ?>
                <li>
                    <a href="/coupon/presale?presaleId=<?php echo $v["id"]; ?>" target="_blank">
                        <img src="http://i8.yunmayi.com<?php echo $v["pic_url"] ?>XXXXX!!!!!_300x300.jpg" />
                    </a>
                </li>
                <?php endforeach; ?>
                <?php foreach ($presaleList as $v) : ?>
                    <li>
                        <a href="/coupon/presale?presaleId=<?php echo $v["id"]; ?>" target="_blank">
                            <img src="http://i8.yunmayi.com<?php echo $v["pic_url"] ?>XXXXX!!!!!_300x300.jpg" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="r-title">
                <ul></ul>
            </div>
        </div>
<!--        爆款预售end-->
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
        <div id="floor_<?=$v['floor_id']?>" class="category">
            <div class="c-left c-left_<?=$v['floor_id']?>">
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
                    <img src="http://pifa.yunmayi.com/statics/1/img/home_banner_L<?=$v['floor_id']?>.png"/>
                </div>
            </div>
            <?php if (!empty($v["product_list"])) : ?>
                <div class="c-right">
                    <ul>
                        <?php for($i =0;$i<8;$i++): ?>
                            <?php $item = $v['product_list'][$i];?>
                            <?php $sell_price = $this->help("getCustomerSellPrice", $item, $customer_type); ?>
                            <li class="item-box">
                                <a href="javascript:;" class="J_AddCollectBtn item-bg" id="<?php echo $item["id"]; ?>" data-id="<?php echo $item["id"]; ?>"> </a>
                                <div class="item-img">
                                    <a href="/product/detail?id=<?php echo $item["id"]; ?>" target="_blank"><img src="http://i8.yunmayi.com<?php echo $item["pic_url"] ?>XXXXX!!!!!_300x300.jpg"/></a>
                                </div>
                                <div class="item-title">
                                    <a href="/product/detail?id=<?php echo $item["id"]; ?>" target="_blank"><?= $item["title"] ?></a>
                                </div>
                                <div class="item-price">
                                    <i>￥</i><strong><?php echo $this->help("priceDecode", $sell_price); ?></strong>
                                    <?php if ($item['spec'] != '') :?>
                                        <i class="slash_i" style="color:black;">/</i><b style="font-weight:normal;"><?= $item["unit"] ?></b>
                                        <span>规格:<?= $item["spec"]; ?></span>
                                    <?php endif;?>
                                </div>
                                <div class="item-action item_quantity">
                                        <a href="javascript:;" class="J_Decrement">-</a>
                                        <input type="text" value="<?php echo $item["min_sold_num"]; ?>" data-min="<?php echo $item["min_sold_num"]; ?>" data-max="<?php echo max($item['product_list']["stock_info"]["stock"], $item['product_list']["stock_info"]["warehouse_stock"]) ?>" class="J_QuantityInput"/>
                                        <a href="javascript:;" class="J_Increment">+</a>
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
    <div class="explain clearfix" id="explain"></div>
    <div id="msg">已成功加入购物车！</div>
</div>
<div id="line">
    <div class="wrapper">
        <div class="line-img-box">
            <img src="http://pifa.yunmayi.com/statics/images/index/0502.jpg"/>
        </div>
    </div>
</div>
<!--页脚-->
<?php include $this->getViewPath("common/footer/global.php"); ?>
<!--侧栏-->
<aside>
    <ul>
        <li class="scr-li selected"><a href="#special" class="iconfont">限时特价<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_1" class="iconfont">特色专区<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_2" class="iconfont">酒水饮料<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_3" class="iconfont">日用洗护<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_4" class="iconfont">粮油调味<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_5" class="iconfont">家用百货<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_6" class="iconfont">散称专区<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_7" class="iconfont">速冻食品<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_8" class="iconfont">尾品汇<i>&#xe600;</i></a></li>
        <li class="scr-li"><a href="#floor_9" class="iconfont">特价区<i>&#xe600;</i></a></li>
        <li class="scr-li toTop"><a href="#" class="iconfont">返回顶部<i>&#xe62d;</i></a></li>
    </ul>
</aside>
<?php include $this->getGlobalViewPath("js.php"); ?>
<?php include $this->getViewPath("common/js.php"); ?>
<?php $this->loadJs("/statics/js/lib/jquery.flexslider-min.js"); ?>
<?php $this->loadJs("/statics/js/lib/YMY_scroll.js"); ?>
<?php $this->loadJs("/statics/js/lib/jquery.fly.min.js"); ?>
<?php $this->loadJs("/statics/js/lib/requestAnimationFrame.js"); ?>
<script type="text/javascript">

    $(function(){
        // 签到
        $("#J_IntegralCheckin").on("click", function(){
            $.getJSON("/integral/checkin", {}, function(result){
                console.log(result)

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

        //侧栏
        (function(){
            //1.楼梯什么时候显示，800px scroll--->scrollTop
            $(window).on('scroll',function(){
                $scroll=$(this).scrollTop();
                if($scroll>=500){
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

        // 购物车数据
        var newArr = [];
        $.ajax({
            "url": "/cart/data",
            "type": "get",
            "dataType": "json",
            "success": function(res){
                cartData =res;
                $("#J_GoConfirmBtn").on("click", function(){
                    var minimumAmount = cartData.agent.minSellPrice;
                    var originTotal = cartData.total.origin;
                    for (var key in cartData.groups) {
                        if (cartData.groups[key].total < minimumAmount) {
                            /*build("red","订单金额不足"+(minimumAmount / 100).toFixed(2)+"元","allOrder",);*/
                            build("red","订单金额不足" + (minimumAmount / 100).toFixed(2)  + "元","pressaleError");
                            return false;
                        }
                    }

                    $("#J_GoConfirmForm").submit();
                    return false;
                })

                $.get("/cart/getShopCartNumber", function(data){
                    $(".cart-span").html(data);
                    if(data>0) {
                        $('.cart_hide_section1').hide()
                        $('.cart_hide_section2').show()
                    }
                });
                if(!res.error) {
                    for (var item in res.groups) {
                        var json = res.groups[item];
                        // console.log(json.items)
                        var arr = json.items;
                        var str = "";
                        var arrr = [];
                        var total = null;
                        newArr.push(arr);
                        // console.log(newArr);
                        for (var j=0;j<newArr.length;j++) {
                            for(var k=0;k<newArr[j].length;k++) {
                                // console.log(newArr[j][k])
                                arrr.push(newArr[j][k])
                            }
                        }
                        for (var i=0;i<arrr.length;i++) {
                            var picUrl = arrr[i].picUrl
                            var title = arrr[i].title
                            var quantity = arrr[i].quantity
                            var priceHuman = arrr[i].priceHuman
                            var minSoldNum = arrr[i].minSoldNum
                            var maxSoldNum = arrr[i].stock.stock
                            var productId = arrr[i].productId
                            var totalHuman = arrr[i].totalHuman
                            total+=parseInt(totalHuman)
                            str+=`<li><a class="ch-img" href=""><img src="http://i8.yunmayi.com${picUrl}XXXXX!!!!!_300x300.jpg"></a>
                                                            <div class="ch-content">
                                                                <p class="ch-text"><a href="#">${title}</a></p>
                                                                <div class="item-buy">
                                                                    <a href="javascript:;" class="q-minus">-</a>
                                                                    <input type="text"  value="${quantity}"  data-min="${minSoldNum}" data-max="${maxSoldNum}" data-pid="${productId}" class="J_QuantityInput q-input"/>
                                                                    <a href="javascript:;" class="q-add">+</a>
                                                                    <span>￥<strong>${priceHuman}</strong></span>
                                                                </div>
                                                            </div></li>`;
                        }
                        $('.cart-hide ul').html(str);
                        $('.cart-hide ul').next().find("strong").text(total);

                        // var quantityTimer;


                    }
                }
            }
        });

        // 商品加入购物相关操作
        $(".J_Decrement").on("click", function(){
            var _input = $(this).siblings("input.J_QuantityInput");
            var min = parseInt(_input.data("min"));
            var max = parseInt(_input.data("max"));
            if (max < min) {
                build("red","商品库存不足","Decrement");
                return false;
            }
            var quantity = parseInt(_input.val());
            --quantity;
            quantity = quantity > max ? max : quantity;
            quantity = quantity < min ? min : quantity;
            _input.val(quantity);
        });
        $(".J_Increment").on("click", function(){
            var _input = $(this).siblings("input.J_QuantityInput");
            var min = parseInt(_input.data("min"));
            var max = parseInt(_input.data("max"));
            if (max < min) {
                build("red","商品库存不足","Increment");
                return false;
            }
            var quantity = parseInt(_input.val());
            ++quantity;
            quantity = quantity > max ? max : quantity;
            quantity = quantity < min ? min : quantity;
            _input.val(quantity);
        });
        $(".J_QuantityInput").on("blur", function(){
            var _this = $(this);
            var max = _this.data("max");
            var min = _this.data("min");
            var quantity = _this.val();
            quantity = quantity > max ? max : quantity;
            quantity = quantity < min ? min : quantity;
            _this.val(quantity);
        });
        // 加入购物车
        $(".J_AddCartBtn").on("click", function(event){
            $('.add_cart_btn').removeClass("J_AddCartBtn");
            var _this = $(this);
            var _input = _this.siblings("input.J_QuantityInput");
            var quantity = _input.val();
            var limit_start_time = _this.data("start");
            var limit_end_time = _this.data("end");
            var limit_buy_num = _this.data("num");
            var curentTime = Date.parse(new Date())/1000;
            var productId = _this.data("id");
            var html = "";
            var items = [];
            var newArr = [];
            $.ajax({
                "type": 'post',
                "dataType": 'json',
                "url": '/cart/isPresaleItem',
                "data": {
                    "pid": productId
                },
                "success": function(res) {
                    items = res;
                    if (items.length != 0){
                        presaleShow = true;
                        $(".explain").addClass('j_display');
                        html += '   <ul class="explain_mian">';
                        html += '       <li class="header">';
                        html += '           <span>预售活动</span>';
                        html += '           <span>商品剩余数量</span>';
                        html += '           <span>购买数量</span>';
                        html += '           <span>加入购物车</span>';
                        html += '       </li>';
                        for (var k in items){
                            html += '       <li class="items">';
                            html += '           <span>' + items[k].title + '</span>';
                            html += '           <span class="amountNum">' + items[k].amount + '</span>';
                            html += '           <div class="presaleItems">';
                            html += '               <a  href="javascript:;" class="decrementPresales"> - </a>';
                            html += '               <input type="text" value="1" class="presaleInput" data-max='+ items[k].amount + '>';
                            html += '               <a  href="javascript:;" class="addPresale"> + </a>';
                            html += '           </div>';
                            html += '           <button class="buyButton addPresaleCart" data-id='+ items[k].id + ' data-product-id=' + items[k].product_id + '>进货</button>';
                            html += '       </li>';
                        }
                        html += '       <button class="closeButton" onclick="closeExplain()"> x </button>';
                        html += '   </ul>';
                        $('.add_cart_btn').addClass("J_AddCartBtn");
                        $(".explain").html(html);
                    }
                    else {
                        if(limit_start_time > 0 && limit_end_time > 0){
                            if(curentTime >= limit_start_time && curentTime <= limit_end_time){
                                if(quantity > limit_buy_num){
                                    build("red","该商品限购",productId,limit_buy_num);
                                    return false;
                                }
                            }
                        }
                        if(limit_start_time == 0 && limit_end_time == 0 && limit_buy_num > 0){
                            if(quantity > limit_buy_num){
                                build("red","该商品限购",productId,limit_buy_num);
                                return false;
                            }
                        }
                        $.ajax({
                            "type": "POST",
                            "url": "/cart/ajaxAddItemToCart",
                            "dataType": "json",
                            "data": {
                                "product_id": productId,
                                "quantity": quantity, //_input.val()
                                "is_cart": 1
                            },
                            "success": function(result){
                                $('.add_cart_btn').addClass("J_AddCartBtn");
                                GlobalCartItemNum();

                                $.ajax({
                                    "url": "/cart/data",
                                    "type": "get",
                                    "dataType": "json",
                                    "success": function(res){
                                        $('.cart_hide_section1').hide()
                                        $('.cart_hide_section2').show()
                                        $.get("/cart/getShopCartNumber", function(data){
                                            $(".cart-span").html(data);
                                        });
                                        if(!res.error) {
                                            for (var item in res.groups) {
                                                var json = res.groups[item];
                                                // console.log(json.items)
                                                var arr = json.items;
                                                var str = "";
                                                var arrr = [];
                                                var total = null;
                                                newArr.push(arr);
                                                // console.log(newArr);
                                                for (var j=0;j<newArr.length;j++) {
                                                    for(var k=0;k<newArr[j].length;k++) {
                                                        // console.log(newArr[j][k])
                                                        arrr.push(newArr[j][k])
                                                    }
                                                }
                                                for (var i=0;i<arrr.length;i++) {
                                                    var picUrl = arrr[i].picUrl
                                                    var title = arrr[i].title
                                                    var quantity = arrr[i].quantity
                                                    var priceHuman = arrr[i].priceHuman
                                                    var minSoldNum = arrr[i].minSoldNum
                                                    var maxSoldNum = arrr[i].stock.stock
                                                    var productId = arrr[i].productId
                                                    var totalHuman = arrr[i].totalHuman
                                                    total+=parseInt(totalHuman)
                                                    str+=`<li><a class="ch-img" href=""><img src="http://i8.yunmayi.com${picUrl}XXXXX!!!!!_300x300.jpg"></a>
                                                            <div class="ch-content">
                                                                <p class="ch-text"><a href="#">${title}</a></p>
                                                                <div class="item-buy">
                                                                    <a href="javascript:;" class="q-minus">-</a>
                                                                    <input type="text"  value="${quantity}"  data-min="${minSoldNum}" data-max="${maxSoldNum}" data-pid="${productId}" class="J_QuantityInput q-input"/>
                                                                    <a href="javascript:;" class="q-add">+</a>
                                                                    <span>￥<strong>${priceHuman}</strong></span>
                                                                </div>
                                                            </div></li>`;
                                                }
                                                $('.cart-hide ul').html(str);
                                                $('.cart-hide ul').next().find("strong").text(total);

                                                // var quantityTimer;


                                            }
                                        }
                                    }
                                });

                                if(!result.error){
                                    var addcar = _this;
                                    var img = addcar.parent().parent().find('img').attr('src');
                                    var flyer = $('<img class="u-flyer" src="'+ img +'">');
                                    var address1 = $('#C_GlobalCartItemNum_fixed');
                                    var address2 = $('#C_GlobalCartItemNum');
                                    var scrollTop = $(document).scrollTop();
                                    if(scrollTop>130){
                                        flyer.fly({
                                            start: {
                                                left:event.clientX,
                                                top:event.clientY,
                                            },
                                            end: {
                                                // left:   address1[0].offsetLeft ,
                                                // top:  address1[0].offsetTop ,
                                                left:1010,
                                                top:0,
                                                width: 0 ,
                                                height: 0
                                            },
                                            onEnd: function () {
                                                $("#msg").show().animate({width:'250px'},200).fadeOut(1000);
                                                this.destory();
                                                build("green","加购成功！",productId);
                                            }
                                        })
                                    }else{
                                        flyer.fly({
                                            start: {
                                                left:event.clientX,
                                                top:event.clientY,
                                            },
                                            end: {
                                                // left: address2[0].offsetLeft ,
                                                // top:  address2[0].offsetTop-20 ,
                                                left:1010,
                                                top:0,
                                                width: 0 ,
                                                height: 0
                                            },
                                            onEnd: function () {
                                                $("#msg").show().animate({width:'250px'},200).fadeOut(1000);
                                                this.destory();
                                                build("green","加购成功！",productId);
                                            }
                                        })
                                    }
                                }
                                else{
                                    build("red",result.info,productId);
                                }
                            }
                        });
                    }
                },
                error: function (error) {
                    console.log(error)
                }
            });
            return false;
        });

    });

    //点击/取消收藏
    $(function() {
        $(".J_AddCollectBtn").on("click",function(){
            var productId=$(this).attr("data-id");
            $("#"+productId).addClass('disable')
            if($(this).hasClass("cover")){
                $.post("/index/delCollect",{"pid":productId},function(data){
                    if(data.state){
                        $("#"+productId).removeClass('cover').removeClass("disable");
                        build("green","已取消收藏！",productId);
                    }
                },'json')
            }else{
                $.get("/index/productFav",{"id":productId},function(data){
                    if(data.state){
                        $("#"+productId).addClass('cover').removeClass("disable");
                        build("green","收藏成功！",productId);
                    }
                },'json')
            }
        });
    })

    // 轮播
    $(function(){
        (function(){
            i=0;
            aImgli=$('.lunbo-img li');
            len=aImgli.length;
            for(j = 0;j<aImgli.length;j++){
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
                        i = 0;
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
    });


    // 预售轮播
    $(function(){
        (function(){
            i=0;
            aImgli = $('.r-img li');
            len = aImgli.length;
            var presale = $('.sp-right');
            len>0 ? presale.show() : presale.hide();

            for(j = 0;j<aImgli.length;j++){
                $(".r-title ul").append('<li style="cursor:pointer;"> </li>');
            }
            $(".r-title ul li").first().addClass('active');

            firstimg = aImgli.first().clone(); //复制第一张图片
            $('.r-img').append(firstimg).width(aImgli.length*($('.r-img img').width()));
            timer = setInterval(function(){
                i++;
                if (i === len) {
                    i = 0;
                    $('.r-img').css({left:0});//保证无缝轮播，设置left值
                }

                $('.r-img').stop().animate({left:-i*240},3000);

                if(i === len){
                    $('.r-title ul li').eq(0).addClass('active').siblings().removeClass('active');
                }else {
                    $('.r-title ul li').eq(i).addClass('active').siblings().removeClass('active');
                }
            },4000);

            //鼠标移入，暂停自动播放，移出，开始自动播放
            $('.r-img').hover(function(){
                clearInterval(timer);
            },function(){
                timer=setInterval(function(){
                    i++;
                    if (i===len) {
                        i = 0;
                        $('.r-img').css({left:0});
                    }
                    //进行下一张图片
                    $('.r-img').stop().animate({left:-i*240},2000);
                    //圆点跟着变化
                    if (i===len) {
                        $('.r-title ul li').eq(0).addClass('active').siblings().removeClass('active');
                    }else{
                        $('.r-title ul li').eq(i).addClass('active').siblings().removeClass('active');
                    }
                },6000)
            });

            $('.r-title ul li').mouseover(function(){
                let _index=$(this).index();
                //维持i变量控制的对应关系不变
                i = _index;
                $('.r-img').stop().animate({left:-_index*240},300);
                $('.r-title ul li').eq(_index).addClass('active').siblings().removeClass('active');
            });

        })();
    });

    // $(function() {
    //     $a = $('.item-price').find('.slash_i');
    //     $b = $('.item-price').find('b');
    //     if($b.html()) {
    //         $a.hide()
    //     }
    // })

    // $(function() {
    //     $('.cart-bg2').mouseenter(function() {
    //         $('.search_cart').addClass('search_cart_border')
    //         return false
    //     })
    //     // $('.search_cart').mouseout(function() {
    //     //     $('.search_cart').removeClass('search_cart_border')
    //     // })
    // })

    function quantityHandler(productId, quantity) {
        $.ajax({
            url: "/cart/ajaxAddItemToCart",
            type: "post",
            dataType: "json",
            data: {
                "product_id": productId,
                "quantity": quantity,
                "load_info": 1,
                "remark": "",
                "mode": 2
            }
        });
    }

    var quantityTimer;
    $("#J_CartArea")
        .on("click", ".q-add", function(){   //添加商品数量
            clearTimeout(quantityTimer);
            var _input = $(this).siblings(".q-input");
            // var _hidden = $(this).siblings("input[type=hidden]");
            var total = parseInt($(this).parent().parent().parent().parent().next().find("strong").text());
            var q = _input.val();
            var pid = _input.data("pid");
            var price = parseInt(_input.next().next().find("strong").text());
            ++q;
            _input.val(q);
            total+=price;
            $('.cart-hide ul').next().find("strong").text(total);
            quantityTimer = setTimeout(function(){
                quantityHandler(pid, q);
            }, 500);
        })
        .on("click", ".q-minus", function(){//减少商品数量
            clearTimeout(quantityTimer);
            var _input = $(this).siblings(".q-input");
            // var _hidden = $(this).siblings("input[type=hidden]");
            var q = _input.val();
            var cid =  _input.data('cid');
            var pid = _input.data("pid");
            var min = _input.data("min");
            var total = parseInt($(this).parent().parent().parent().parent().next().find("strong").text());
            var price = parseInt(_input.next().next().find("strong").text());
            --q;
            _input.val(q);
            // console.log(min)
            if(q < min){
                build("red","进货量不能小于批发量！","pressaleError");
                q=min;
                _input.val(q);
            }
            else {
                total-=price;
                $.ajax({
                    url:'/cart/removeProsaleItemToCart',
                    type: 'post',
                    dataType: 'json',
                    data:{
                        cartId: cid,
                        productId: pid,
                        productTotal: q+1,
                        removeProductNum: 1
                    },
                    success: function(res){
                        if(!res.error){
                            q = q < min ? min : q;
                            _input.val(q);
                            quantityTimer = setTimeout(function(){
                                quantityHandler(pid, q);
                            }, 500);
                        }
                    }
                })
            }
            $('.cart-hide ul').next().find("strong").text(total);
        })

    //关闭预售html 弹出框
    function closeExplain(){
        $('.explain').removeClass('j_display');
    }
    //预售加减数量
    $("#explain").on("click", ".decrementPresales", function(){
        var _input = $(this).siblings("input.presaleInput");
        var quantity =_input.val();
        quantity--;
        quantity = quantity > 0 ? quantity : 1;
        _input.val(quantity);
    })
        .on('click', '.addPresale', function(){
            var _input = $(this).siblings("input.presaleInput");
            var max = parseInt(_input.data("max"));
            var quantity =_input.val();
            quantity++;
            quantity = quantity > max ? max : quantity;
            _input.val(quantity);
        })
        .on('click', '.addPresaleCart', function() {//加入购物车
            var id = $(this).data("id");
            var productId = $(this).data("productId");
            var _input = $(this).prev(".presaleItems").children(".presaleInput");
            var quantity = _input.val();
            var _amount = $(this).siblings('.amountNum');
            $.ajax({
                type      : "post",
                url       : "/cart/addPresaleItemToCart",
                dataType  : "json",
                data      : {
                    product_id: productId,
                    quantity  : quantity, //_input.val()
                    mode      : 1,
                    presaleId : id
                },
                success: function (res) {
                    if(res.error) {
                        build("red",res.info,"pressaleError")
                    }
                    else{
                        GlobalCartItemNum();
                        _amount.html(_amount.html() - quantity);
                        $("#msg").show().animate({width:'250px'},200).fadeOut(1000);
                    }
                },
                error: function(error) {
                    console.log(error)
                }
            });
        });

    function GlobalCartItemNum() {
        $.get("/cart/getShopCartNumber", function(data){
            $("#C_GlobalCartItemNum").html(data);
            $("#C_GlobalCartItemNum_fixed").html(data);
        });
    }

    // 限时特价&&新品推荐轮播
    $(function() {
        var $button1 = $(".focus_within").find(".button_first");
        var $button2 = $(".focus_within").find(".button_second");
        var $recommend = $('#sp_recommend');
        var $special = $('#sp_special');
        var reList = $recommend.find('li').length;
        var spList = $special.find('li').length;

        if(spList && reList) {
            $recommend.hide() && $('.sp_left_recommend').hide()
        }else if(spList && !reList) {
            $recommend.hide() && $('.sp_left_recommend').hide() && $button2.hide()
        }else if(!spList) {
            $special.hide() && $('.sp_left_special').hide() && $button1.hide() && $button2.addClass('focus-within')
        }


        $button2.click(function() {
            $(this).addClass('focus-within');
            $button1.removeClass('focus-within');
            $('.sp_left_special, #sp_special').hide();
            $('.sp_left_recommend, #sp_recommend').show();
        });
        $button1.click(function() {
            $(this).addClass('focus-within');
            $button2.removeClass('focus-within');
            $('.sp_left_special, #sp_special').show();
            $('.sp_left_recommend, #sp_recommend').hide()
        })

      // 手动点击start
            var LIWIDTH=240,moved=0,interval=1000,timer=null;//LIWIDTH->li的长度
            $ul=$(".sp_slid_recommend");
            $li=$(".sp_slid_recommend").find('li');
            var length=$li.length;

            $ul.css("width",length*LIWIDTH);//ul的长度
            //左右键
            $("#sp_recommend>a").on("click",".fl,.fr",function(e){
                e.preventDefault();
                $a = $(this);
                if($a.is(".fr")){//右键
                        moved++;
                        $ul.animate({
                            left:-LIWIDTH*moved
                        },interval);
                        console.log(moved,length)
                        if(moved === length-3){
                            alert(1)
                        }


                }else{//左键
                    if(!this.className.endsWith("disabled")){
                        moved--;
                        //console.log(moved);
                        $(".fr").removeClass("disabled");
                        if(moved<0){
                            moved=0;
                            $a.addClass("disabled");
                        }else{
                            $ul.animate({
                                left:-LIWIDTH*moved
                            },interval);
                        }
                    }
                }
                return false;
            });

            //自动轮播
            // function lunbo(){
            //     timer=setInterval(function(){
            //         moved++;
            //         $ul.animate({
            //             left:-LIWIDTH*moved*3
            //         },interval,function(){
            //             if(moved*3>=length){
            //                 moved=0;
            //                 $ul.css("left",0);
            //             }
            //         })
            //     },2000);
            // }
            // lunbo();//调用
            // $(".sp-slid").hover(
            //     function(){
            //         clearInterval(timer);
            //         timer=null;
            //     },
            //     function(){
            //         lunbo();
            //     }
            // )
        // 手动end

    })


</script>
</body>
</html>