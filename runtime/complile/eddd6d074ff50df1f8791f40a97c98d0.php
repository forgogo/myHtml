<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{sort:title}</title>
<meta name="keywords" content="{sort:keywords}">
<meta name="description" content="{sort:description}">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<link rel='stylesheet' href='{pboot:sitedomain}/pc/css/index.css'>
</head>
<body class=" nav-header">
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
    </div>
  </div>
  <div class="container">
    <div>
      {pboot:sort scode=1}
      <p class="aboutServeTitle">[sort:name]</p>
      {/pboot:sort}
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right navlist " style="float: left !important;">
        {pboot:nav num=1 parent=0} {pboot:3nav num=15 parent=1}
        <li class="dropdown margin-right-20 listItem" style="font-weight: 900; height: 70px;">
          <a href="[3nav:link]" class=""> [3nav:name] </a>
        </li>
        {/pboot:3nav} {/pboot:nav}
      </ul>
    </div>
  </div>
</nav>

<div class="met-banner banner-ny-h" data-height='' style=''>
  {pboot:sort scode={sort:tcode}}<div class="slick-slide"> <img class="cover-image" src="[sort:pic]" sizes="(max-width: 767px) 767px" > </div>{/pboot:sort}
</div>

<section class="met-content animsition">
  <div class="container">
    <div class="row">
      <div class="col-md-9 met-cons">
        <div class="met-position  pattern-show">
          <div class="container">
            <div class="row">
              <ol class="breadcrumb">
                {pboot:position separator=>> indextext=首页}
              </ol>
            </div>
          </div>
        </div>
        <div class="met-editor lazyload clearfix"> {content:content} </div>
      </div>
      <div class="col-md-3 met-conx">
  <div class="met-service">
    <h3> {pboot:sort scode=18}[sort:name]{/pboot:sort} </h3>
    <ul>
      {pboot:list scode=18 num=6 order=sorting}
      <li> <a href="[list:link]"​ title="[list:title]"> <span> <img src="[list:ico]" alt="[list:title]"> </span>
        <h6> [list:title] </h6>
        </a> </li>
      {/pboot:list}
    </ul>
  </div>
  <div class="met-information">
    <h3> {pboot:sort scode=2}[sort:name]{/pboot:sort} </h3>
    <ul>
      {pboot:list scode=2 num=6 order=sorting}
      <li>
        <h6> <a href="[list:link]"​ title="[list:title]"> [list:title len=12] </a> </h6>
      </li>
      {/pboot:list}
    </ul>
  </div>
</div>
 </div>
  </div>
</section>
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
        {/pboot:if} </div>
      {/pboot:nav}
      <div class="col-md-4 col-ms-12 col-xs-12 info masonry-item">
        <div class="info-phone"> <b> 服务热线 </b> <em> <a> {pboot:companyphone} </a> </em>
          <p> 客服服务时段：周一至周五，9:30 - 20:30，节假日休息 </p>
          <span> <a href="http://wpa.qq.com/msgrd?v=3&uin={pboot:companyqq}&site=qq&menu=yes" target="_blank" rel="nofollow"> <i class="fa fa-qq"> </i> </a> <a id="met-weixin"> <i class="fa fa-weixin" data-plugin="webuiPopover" data-trigger="hover" data-animation="pop" data-placement='top' data-width='160' data-padding='0' data-content="<img src='{pboot:companyweixin}' alt='微信' style='width: 150px;height:150px;display:block;margin:auto;'>"> </i> </a> </span> </div>
      </div>
    </div>
  </div>
</div>
<div class="met-links text-center">
  <div class="container">
    <ol class="breadcrumb">
      <li> 友情链接 : </li>
      {pboot:link num=50 gid=1}
      <li><a href='[link:link]' target='_blank'>[link:name]</a></li>
      {/pboot:link}
    </ol>
  </div>
</div>
<footer>
  <div class="container text-center">
    <div class="powered_by_pb2345"> {pboot:sitecopyright} <a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">{pboot:siteicp}</a> <a href="{pboot:sitedomain}/sitemap.xml" target="_blank">XML地图</a> {pboot:sitestatistical} <a href="https://www.adminbuy.cn/" target="_blank">网站模板</a></div>
  </div>
</footer>
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"> <i class="icon wb-chevron-up" aria-hidden="true"> </i> </button>
<script src="{pboot:sitedomain}/pc/js/index.js"></script>
</body>
</html><?php return array (
  0 => 'E:/phpstudy_pro/WWW/new/template/default/comm/head.html',
  1 => 'E:/phpstudy_pro/WWW/new/template/default/comm/list_banner.html',
  2 => 'E:/phpstudy_pro/WWW/new/template/default/comm/left.html',
  3 => 'E:/phpstudy_pro/WWW/new/template/default/comm/foot.html',
); ?>