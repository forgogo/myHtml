<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="generator" content=""  data-variable=",cn,10001" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>{pboot:sitetitle}</title>
<meta name="keywords" content="{pboot:sitekeywords}">
<meta name="description" content="{pboot:sitedescription}">
<meta name="author" content="www.adminbuy.cn K86" />
<link rel='stylesheet' href='{pboot:sitedomain}/pc/css/index.css'>
</head>
<body class=" nav-header">
<!--[if lte IE 8]>
<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
<p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="#">升级您的浏览器</a>，以提高您的体验。</p></div>
<![endif]-->
<!-- <header class="">
  <div class="head-box">
    <div class="container">
      <div class="head-left">
        <div class="head-left-wrapper">
          <div class="head-left-slide">
            <p> {label:top}，微信号：{label:wx}</p>
            <font>
            <hr>
            <a id="met-weixins"> <i class="fa fa-weixin" data-plugin="webuiPopover" data-trigger="hover" data-animation="pop" data-placement='bottom' data-width='130' data-padding='0' data-content="<img src='{pboot:companyweixin}' alt='{pboot:companyname} ' style='width: 120px;display:block;margin:auto;'>"> </i> </a>
            <hr>
            <a href="http://wpa.qq.com/msgrd?v=3&uin={pboot:companyqq}&site=qq&menu=yes"  target="_blank" rel="nofollow"> <i class="fa fa-qq"> </i> </a>
            </font> </div>
        </div>
      </div>
      <div class="head-right">
        <div class="head-other"> <b> 更多关注 <i class="caret"> </i> </b> <span> <a class="bookmark" data-alert="加入收藏失败，请使用Ctrl+D进行添加"> <i class="fa fa-bookmark"> </i> 收藏本站 </a>
          <hr />
          {pboot:sort scode=10}<a href="[sort:link]" title="[sort:name]"> <i class="fa fa-book"> </i> [sort:name] </a> {/pboot:sort}</span> </div>
      </div>
    </div>
  </div>
</header> -->
<nav class="navbar navbar-default met-nav" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button
        type="button"
        class="navbar-toggle hamburger hamburger-close collapsed"
        data-target="#navbar-default-collapse"
        data-toggle="collapse"
      >
        <span class="sr-only"> Toggle navigation </span>
        <span class="hamburger-bar"> </span>
      </button>
      <a
        href="{pboot:sitedomain}/"
        class="navbar-brand navbar-logo vertical-align"
        title="{pboot:companyname} "
      >
        <h1 class="hide">{pboot:companyname}</h1>
        <div class="vertical-align-middle">
          <img
            src="{pboot:sitelogo}"
            alt="{pboot:companyname} "
            title="{pboot:companyname}"
          />
        </div>
      </a>
      <h2 class="hide"></h2>
    </div>
    <div
      class="collapse navbar-collapse navbar-collapse-toolbar"
      id="navbar-default-collapse"
    >
      <!-- <div class="navbar-right search-box">
        <div class="search-button"><i class="wb-search"> </i></div>
        <div class="search-form">
          <form action="{pboot:scaction}" method="get">
            <input
              type="text"
              placeholder="请输入搜索关键词！"
              name="keyword"
              value=""
            />
            <button type="submit" class="wb-search"></button>
          </form>
        </div>
      </div> -->
      <ul class="nav navbar-nav navbar-right navlist">
        <!-- <li class="margin-right-20"> <a href="{pboot:sitedomain}/" title="首页" class="link active"> 首页 </a> </li> -->
        {pboot:nav num=15 parent=0}
        <li class="dropdown margin-right-20">
          <a
            data-toggle="dropdown"
            data-hover="dropdown"
            aria-expanded="false"
            class="dropdown-toggle link"
            href="[nav:link]"
          >
            [nav:name] {pboot:if([nav:soncount]>0)}
            <span class="caret"> </span>
            {/pboot:if}
          </a>
          {pboot:if([nav:soncount]>0)}
          <ul class="dropdown-menu dropdown-menu-right bullet">
            {pboot:2nav num=10 parent=[nav:scode]}
            <li><a href="[2nav:link]" class=""> [2nav:name] </a></li>
            {/pboot:2nav}
          </ul>
          {/pboot:if}
        </li>
        {/pboot:nav}
      </ul>
      <a href="{pboot:lgpath}&lg=cn" style=" position: absolute;right: -10px; top: 27px;">CN</a>
    </div>
  </div>
  <div class="container">
    <div>
      {pboot:sort scode=1}
      <p class="aboutServeTitle">[sort:name]</p>
      {/pboot:sort}
    </div>
    <div>
      <ul class=" navbar-nav navbar-right navlist listItemNav" style="float: left !important;">
        {pboot:nav num=1 parent=0} {pboot:3nav num=15 parent=1}
        <li class="dropdown margin-right-20 listItem" style="font-weight: 900; height: 70px;">
          <a href="[3nav:link]" class=""> [3nav:name] </a>
        </li>
        {/pboot:3nav} {/pboot:nav}
      </ul>
    </div>
  </div>
</nav>

<div class="met-banner" data-height='' style=''> {pboot:slide num=6 gid=1}
  <div class="slick-slide"> <img class="cover-image" src="[slide:src]" alt="[slide:title]">
    <div class="banner-text p-[slide:i]">
      <div class='container'>
        <div class='banner-text-con'>
          <div>
            <h4 class="animation-slide-top" style='color:#eeeeee'> [slide:title] </h4>
            <p class="animation-slide-bottom animation-delay-300"> [slide:subtitle] </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/pboot:slide} </div>
<div class="service-background">
  <div class="container"> {pboot:sort scode=21}
    <div class="title-box">
      <h2> 关于我们</h2>
      {pboot:content id=45}
      <p>[content:content drophtml=1 len=280]</p>
      {/pboot:content}
    </div>
    {/pboot:sort}
    <div class="row">
      <div class="service-box">
        <ul class="service-wraper">
          {pboot:nav num=16 parent=1}
          <li class="service-slide1"> <a href="[nav:link]" title="[nav:name]"> <b>
             <img src="{pboot:sitedomain}/pc/picture/Sni.png"> 
             <!-- <img class="icon" src="[nav:ico]"> -->
             </b>
            <h3> [nav:name] </h3>
            <p> [nav:description] </p>
            </a> </li>
          {/pboot:nav}
        </ul>
      </div>
    </div>
  </div>
</div>
{pboot:content id=1}
<div class="about-background">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about-title title-box">
          <h2> [content:title] </h2>
        </div>
        <div class="about-box"> 
          [content:content drophtml=1 len=280]
        </div>
        <div class="about-link"> <a href="[content:link]" title="关于我们"> 查看更多 <i class="fa fa-angle-double-right"> </i> </a> </div>
      </div>
      <div class="col-md-6 about-video">
        <video src="{label:video}" autoplay controls loop width="100%"> </video>
      </div>
    </div>
  </div>
</div>
{/pboot:content}
<div class="product-background">
  <div class="container">
    <div class="title-box">
      <h2> {pboot:sort scode=17}[sort:name]{/pboot:sort} </h2>
      <p> </p>
    </div>
    <div class="row">
      <div class="product-box">
        <ul class="product-wraper">
          {pboot:list scode=17 num=8 order=sorting}
          <li class="product-slide"> <a href="[list:link]" title="[list:title]"> <span> <img data-original="[list:ico]" alt="[list:title]"> </span>
            <h4> [list:title] </h4>
            </a> </li>
          {/pboot:list}
        </ul>
      </div>
      <div class="product-link"> {pboot:sort scode=17} <a href="[sort:link]"> 查看更多 <i class="fa fa-angle-double-right"> </i> </a>{/pboot:sort} </div>
    </div>
  </div>
</div>
<!-- <div class="case-background">
  <div class="container">
    <div class="title-box active">
      <h2> {pboot:sort scode=18}[sort:name]{/pboot:sort} </h2>
      <p> </p>
    </div>
    <div class="row">
      <div class="case-box">
        <ul class="case-wraper">
          {pboot:list scode=18 num=10 order=sorting}
          <li class="case-slide"> <a href="[list:link]" title="[list:title]"> <span> <img data-original="[list:ico]" alt="[list:title]"> </span>
            <h4> [list:title] </h4>
            </a> </li>
          {/pboot:list}
        </ul>
      </div>
    </div>
    <div class="about-link text-center"> {pboot:sort scode=18} <a href="[sort:link]"> 查看更多 <i class="fa fa-angle-double-right"> </i> </a>{/pboot:sort} </div>
  </div>
</div> -->
<div class="info-cut">
  <div class="container">
    <div class="title-box"> {pboot:sort scode=2}
      <h2> [sort:name] </h2>
      <p> [sort:subname] </p>
      {/pboot:sort} </div>
    <div class="row">
      <div class="info-box">
        <ul class="info-wraper">
          {pboot:nav num=5 parent=2}
          <li class="info-slide"> <span>
            <h3> [nav:name] </h3>
            <a href="[nav:link]" title="查看更多">
            <hr>
            <hr>
            <hr>
            </a> </span>
            <ol>
              {pboot:list scode=[nav:scode] num=2}
              <li>
                <h4> <a href="[list:link]" title="[list:title]"> [list:title] </a> </h4>
                <p> [list:description] </p>
                <b> <i> [list:date style=Y-m-d] </i> <em class="fa fa-tag"> </em> <strong></strong>[list:sortname] </b> </li>
              {/pboot:list}
            </ol>
          </li>
          {/pboot:nav}
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- <div class="parent-background" data-original="/skin/img/1510737030.jpg">
  <div class="container">
    <div class="title-box active">
      <h2> {pboot:sort scode=19}[sort:name]{/pboot:sort} </h2>
      <p> </p>
    </div>
    <div class="row">
      <div class="parent-box">
        <ul class="parent-wraper">
          {pboot:list scode=19 num=3 order=sorting}
          <li class="parent-slide"> <a href="#" title="[list:title]"> <span> <img data-original="[list:ico]" alt="[list:title]"> </span>
            <h4> [list:title] </h4>
            <p> [list:description] </p>
            </a> </li>
          {/pboot:list}
        </ul>
      </div>
    </div>
    <div class="about-link text-center"> {pboot:sort scode=19} <a href="[sort:link]" title="[sort:name]"> 查看更多 <i class="fa fa-angle-double-right"> </i> </a>{/pboot:sort} </div>
  </div>
</div> -->
<!-- <div class="feedback-box">
  <div class="container">
    <div class="title-box">
      <h2> 立即报名 </h2>
      <p> 让我们一起来分享瑜伽文化带给我们的美丽容颜、快乐心情、完美人生 </p>
    </div>
    <div class="feedback-cut">
      <div class="feedback-tag"> <span> <i> 免费报名 </i> </span> <img src="picture/bm.png"> <font> 免费报名 </font> </div>
      <div class="feedback-title"> <b> 填写表单 </b>
        <p> ( 提示： <i> * </i> 为必填选项 ) </p>
      </div>
      <div class="feedback-form">
        <form action="{pboot:msgaction}"  method="post">
          <div class="form-group">
            <label class="control-label ftype_input"> 您的姓名 </label>
            <div>
              <input name='name' class='form-control' type='text' placeholder='' required />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label ftype_input"> 联系电话 </label>
            <div>
              <input name='tel' class='form-control' type='text' placeholder='' required />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label ftype_textarea"> 备注 </label>
            <div>
              <textarea name='content' class='form-control' placeholder='' rows='5'></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label ftype_input"> 验证码 </label>
            <div>
              <input name='checkcode' class='form-control' type='text' placeholder='' />
              <img title="点击刷新" class="codeimg" style="height:33px;float:left;margin-top:10px;" src="{pboot:checkcode}" onclick="this.src='{pboot:checkcode}?'+Math.round(Math.random()*10);" /> </div>
          </div>
          <div class="form-group ftype_button">
            <label> &nbsp; </label>
            <div>
              <button type="submit" class="btn btn-primary btn-lg btn-block btn-squared"> 确认提交 </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->
<div class="met-footnav">
  <div class="container">
    <div class="row mob-masonry"> {pboot:nav num=4 parent=0}
      <div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
        <h4> <a href="[nav:link]" title="[nav:name]"> [nav:name] </a> </h4>
        {pboot:if([nav:soncount]>0)}
        <ul>
          {pboot:2nav num=10 parent=[nav:scode]}
          <li> <a href="[2nav:link]" title="[2nav:name]"> [2nav:name] </a> </li>
          {/pboot:2nav}
        </ul>
        {/pboot:if}
      </div>
      {/pboot:nav}
      <div class="col-md-4 col-ms-12 col-xs-12 info masonry-item">
        <div class="info-phone"> <b> 服务热线 </b> <em> <a> {pboot:companyphone} </a> </em>
          <p> 客服服务时段：周一至周五，9:30 - 20:30，节假日休息 </p>
          <span> <a href="http://wpa.qq.com/msgrd?v=3&uin={pboot:companyqq}&site=qq&menu=yes" target="_blank"
              rel="nofollow"> <i class="fa fa-qq"> </i> </a> <a id="met-weixin"> <i class="fa fa-weixin"
                data-plugin="webuiPopover" data-trigger="hover" data-animation="pop" data-placement='top'
                data-width='160' data-padding='0'
                data-content="<img src='{pboot:companyweixin}' alt='微信' style='width: 150px;height:150px;display:block;margin:auto;'>">
              </i> </a> </span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="met-links text-center">
  <div class="container">
    <ol class="breadcrumb">
      <li> 友情链接 : </li>
      {pboot:link num=50 gid=1}
      <!-- <li><a href='[link:link]' target='_blank'>[link:name]</a></li> -->
      {/pboot:link}
    </ol>
  </div>
</div>
<footer>
  <div class="container text-center">
    <div class="powered_by_pb2345"> {pboot:sitecopyright}
       <!-- <a href="https://beian.miit.gov.cn/" target="_blank"
        rel="nofollow">{pboot:siteicp}</a>
         <a href="{pboot:sitedomain}/sitemap.xml" target="_blank">XML地图</a>
      {pboot:sitestatistical} <a href="https://www.adminbuy.cn/" target="_blank">网站模板</a> -->
    </div>
  </div>
</footer>
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"> <i class="icon wb-chevron-up"
    aria-hidden="true"> </i> </button>
<script src="{pboot:sitedomain}/pc/js/index.js"></script>
</body>
</html><?php return array (
  0 => 'E:/phpstudy_pro/WWW/new/template/en/comm/head.html',
  1 => 'E:/phpstudy_pro/WWW/new/template/en/comm/foot.html',
); ?>