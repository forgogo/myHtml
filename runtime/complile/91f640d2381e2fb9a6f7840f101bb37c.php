<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{sort:title}</title>
<meta name="keywords" content="{sort:keywords}">
<meta name="description" content="{sort:description}">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="generator" content=""  data-variable=",cn" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
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
  <div class="container headContainer">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close collapsed"
        data-target="#navbar-default-collapse" data-toggle="collapse">
        <span class="sr-only"> Toggle navigation </span>
        <span class="hamburger-bar"> </span>
      </button>
      <a href="{pboot:sitedomain}/" class="navbar-brand navbar-logo vertical-align" title="{pboot:companyname} ">
        <h1 class="hide">{pboot:companyname}</h1>
        <div class="vertical-align-middle">
          <img src="{pboot:sitelogo}" alt="{pboot:companyname} " title="{pboot:companyname}" />
        </div>
      </a>
      <h2 class="hide"></h2>
    </div>
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="navbar-default-collapse">
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
        {pboot:if([nav:n]<4)} <li class="dropdown margin-right-20">
          <a data-toggle="dropdown" data-hover="dropdown" aria-expanded="false" class="dropdown-toggle link"
            href="[nav:link]">
            [nav:name] {pboot:1if([nav:soncount]>0)}
            <span class="caret"> </span>
            {/pboot:1if}
          </a>
          {pboot:1if([nav:soncount]>0)}

          <ul class="dropdown-menu dropdown-menu-right bullet">
            <span style="position: absolute;
            /* display: block; */
            top: -10px;
            left: 130px; font-size: 30px; font-family: Alibaba-PuHuiTi-Heavy;"> [nav:name]</span>
            {pboot:2nav num=10 parent=[nav:scode]}
            <li><a href="[2nav:link]" class=""> [2nav:name] </a></li>
            {/pboot:2nav}
          </ul>
             {/pboot:1if}
          </li>
          {/pboot:if}
          {/pboot:nav}
          <li style="display: flex;
        justify-content: center;
        align-items: center;"> <svg t="1652968408167" class="icon" viewBox="0 0 1024 1024" version="1.1" p-id="3092"
              width="23" height="23">
              <path
                d="M512 929.959184c-230.4 0-417.959184-187.559184-417.959184-417.959184s187.559184-417.959184 417.959184-417.959184 417.959184 187.559184 417.959184 417.959184-187.559184 417.959184-417.959184 417.959184z m0-794.122449c-207.412245 0-376.163265 168.75102-376.163265 376.163265s168.75102 376.163265 376.163265 376.163265 376.163265-168.75102 376.163265-376.163265-168.75102-376.163265-376.163265-376.163265z"
                p-id="3093"></path>
              <path
                d="M512 929.959184c-11.493878 0-20.897959-9.404082-20.897959-20.89796V114.938776c0-11.493878 9.404082-20.897959 20.897959-20.89796s20.897959 9.404082 20.897959 20.89796v794.122448c0 11.493878-9.404082 20.897959-20.897959 20.89796z"
                p-id="3094"></path>
              <path
                d="M909.061224 532.897959H114.938776c-11.493878 0-20.897959-9.404082-20.89796-20.897959s9.404082-20.897959 20.89796-20.897959h794.122448c11.493878 0 20.897959 9.404082 20.89796 20.897959s-9.404082 20.897959-20.89796 20.897959z"
                p-id="3095"></path>
              <path
                d="M227.787755 809.795918c-5.22449 0-10.971429-2.089796-15.15102-6.269387C136.359184 725.159184 94.040816 621.191837 94.040816 512s42.318367-213.159184 118.595919-291.526531c7.836735-8.359184 21.420408-8.359184 29.779592-0.522449 8.359184 7.836735 8.359184 21.420408 0.522449 29.779592C173.97551 320.261224 135.836735 413.257143 135.836735 512s38.138776 191.738776 106.579592 262.269388c7.836735 8.359184 7.836735 21.420408-0.522449 29.779592-3.657143 3.657143-8.881633 5.746939-14.106123 5.746938z"
                p-id="3096"></path>
              <path
                d="M504.163265 929.959184c-0.522449 0-0.522449 0 0 0-110.759184-2.089796-214.204082-47.020408-291.52653-126.432653-7.836735-8.359184-7.836735-20.897959 0-29.257143 39.183673-40.228571 84.636735-71.57551 135.836734-92.995919 5.22449-2.089796 10.971429-2.089796 16.195919 0s9.404082 6.269388 11.493877 11.493878c29.779592 76.8 78.889796 146.285714 141.583674 200.097959 6.791837 5.746939 8.881633 15.15102 5.746939 23.510204-3.134694 7.836735-10.971429 13.583673-19.330613 13.583674z m-246.595918-141.061225c53.289796 49.110204 118.073469 80.979592 188.604082 93.518368-42.318367-44.930612-76.277551-97.17551-100.832653-153.6-31.869388 15.673469-61.64898 35.526531-87.771429 60.081632zM356.310204 344.293878c-2.612245 0-5.746939-0.522449-8.359184-1.567347-51.2-21.942857-96.653061-53.289796-135.836734-92.995919-7.836735-8.359184-7.836735-20.897959 0-29.257143C289.959184 141.061224 392.881633 96.653061 503.640816 94.040816c8.881633-0.522449 16.718367 5.22449 19.853062 13.583674s0.522449 17.763265-5.746939 23.510204C454.530612 184.946939 405.420408 253.910204 375.640816 331.232653c-2.089796 5.22449-6.269388 9.404082-11.493877 11.493878-2.089796 1.044898-5.22449 1.567347-7.836735 1.567347zM257.567347 235.102041c26.644898 24.555102 55.902041 44.408163 87.771429 60.604081 24.555102-56.42449 59.036735-108.669388 100.832653-153.6-70.530612 12.016327-135.314286 43.885714-188.604082 92.995919zM796.212245 809.795918c-5.22449 0-10.44898-2.089796-14.628572-5.746938-8.359184-7.836735-8.359184-21.420408-0.522449-29.779592C850.02449 703.738776 888.163265 610.742857 888.163265 512s-38.138776-191.738776-106.579592-262.269388c-7.836735-8.359184-7.836735-21.420408 0.522449-29.779592 8.359184-7.836735 21.420408-7.836735 29.779592 0.522449C887.640816 298.840816 929.959184 402.808163 929.959184 512s-42.318367 213.159184-118.595919 291.526531c-4.179592 4.179592-9.404082 6.269388-15.15102 6.269387z"
                p-id="3097"></path>
              <path
                d="M514.612245 929.959184c-8.881633 0-16.718367-5.22449-19.330612-13.583674-3.134694-8.359184-0.522449-17.240816 5.746938-22.987755 63.738776-54.334694 112.84898-124.342857 142.628572-202.187755 2.089796-5.22449 6.269388-9.404082 11.493877-11.493878 5.22449-2.089796 10.971429-2.089796 16.195919 0 52.767347 21.942857 100.310204 53.812245 140.538775 95.085715 7.836735 8.359184 7.836735 20.897959 0 29.257143-78.889796 80.457143-184.42449 124.865306-297.273469 125.910204z m159.869388-203.755102c-25.077551 57.991837-59.559184 111.281633-102.922449 157.257142 72.620408-11.493878 140.016327-43.885714 194.873469-94.563265-27.689796-25.6-58.514286-46.497959-91.95102-62.693877zM662.987755 346.383673c-2.612245 0-5.746939-0.522449-8.359184-1.567346-5.22449-2.089796-9.404082-6.269388-11.493877-11.493878-29.779592-77.844898-78.889796-147.853061-142.628572-202.187755-6.791837-5.746939-8.881633-15.15102-5.746938-22.987755 3.134694-8.359184 10.971429-13.583673 19.330612-13.583674 112.84898 0.522449 217.861224 45.453061 296.75102 126.432653 7.836735 8.359184 7.836735 20.897959 0 29.257143-40.228571 41.273469-87.24898 73.142857-140.538775 95.085715-1.567347 0.522449-4.702041 1.044898-7.314286 1.044897z m-91.428571-205.844897c42.840816 45.97551 77.844898 99.265306 102.922449 157.257142 33.436735-16.195918 64.783673-37.093878 91.95102-62.693877-54.857143-50.677551-122.253061-83.069388-194.873469-94.563265z"
                p-id="3098"></path>
              <path
                d="M356.310204 721.502041c-2.612245 0-5.746939-0.522449-8.359184-1.567347-5.22449-2.089796-9.404082-6.269388-11.493877-11.493878-24.032653-62.693878-36.571429-128.522449-36.571429-195.918367s12.016327-133.22449 36.571429-195.918367c2.089796-5.22449 6.269388-9.404082 11.493877-11.493878s10.971429-2.089796 16.195919 0c47.020408 19.330612 96.653061 29.257143 147.853061 29.257143 49.632653 0 97.697959-9.404082 143.15102-28.212245 5.22449-2.089796 10.971429-2.089796 16.195919 0s9.404082 6.269388 11.493877 11.493878c23.510204 62.171429 35.526531 127.477551 35.526531 193.828571 0 66.873469-12.016327 132.179592-35.526531 193.828571-2.089796 5.22449-6.269388 9.404082-11.493877 11.493878-5.22449 2.089796-10.971429 2.089796-16.195919 0-45.453061-18.808163-93.518367-28.212245-143.15102-28.212245-51.2 0-100.832653 9.926531-147.330612 29.779592-2.612245 2.612245-5.746939 3.134694-8.359184 3.134694z m12.538776-370.416327c-17.763265 51.722449-26.644898 106.057143-26.644898 160.914286s8.881633 109.191837 26.644898 160.914286c45.97551-16.718367 94.040816-25.077551 143.15102-25.077551 47.542857 0 94.040816 7.836735 138.44898 23.510204 17.240816-51.2 26.122449-105.012245 26.122449-159.346939 0-54.857143-8.881633-108.146939-26.122449-159.346939-44.408163 15.673469-90.906122 23.510204-138.44898 23.510204-49.632653 0-97.697959-8.359184-143.15102-25.077551z"
                p-id="3099"></path>
            </svg><a href="{pboot:lgpath}&lg=en"> EN</a></li>
      </ul>

    </div>
  </div>
  <!-- <div class="container" style="
  padding-left: calc(100vw * 130 / 1920)
">
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
  </div> -->
</nav>
   <div class="met-banner banner-ny-h" data-height='' style=''>
  {pboot:sort scode={sort:tcode}}<div class="slick-slide"> <img class="cover-image" src="[sort:pic]" sizes="(max-width: 767px) 767px" > </div>{/pboot:sort}
</div>

<section class="met-content animsition">
  <div class="container">
    <div class="row">
      <div class="col-md-9 met-cons">        <div class="met-position  pattern-show">
                            <div class="container">
                                <div class="row">
                                    <ol class="breadcrumb">
                                 
{pboot:position separator=>> indextext=首页}
                                    </ol>
                                </div>
                            </div>
                        </div>
        <div class="met-news-list news-lists">
          <ul class="met-page-ajax" data-scale=''>
            {pboot:list num=10 order=sorting}
            <li> <a class="img" href="[list:link]" title="[list:title]"> <img src="[list:ico]" alt="[list:title]"> </a>
              <h4> <a href="[list:link]"​ title="[list:title]"> [list:title] </a> </h4>
              <p class="info"> <span><i class="fa fa-calendar"></i>[list:date style=Y-m-d]</span> <span><i class="fa fa-pencil-square"></i> [list:author]</span> <span><i class="icon wb-eye"></i>[list:visits]</span> </p>
              <p class="des"> [list:description lencn=60] </p>
              <p class="more"> <a href="[list:link]"​ title="[list:title]"> 阅读更多>> </a> </p>
            </li>
            {/pboot:list}
          </ul>
          <div class="ab_pages">
  <ul>
    {pboot:if({page:rows}>0)}
    <a href="{page:index}">首页</a>
    <a href='{page:pre}'>上一页</a>
    {page:numbar}
    <a href='{page:next}'>下一页</a>
    <a href='{page:last}'>末页</a>
    {/pboot:if}
  </ul>
</div> </div>
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
    </div>
  </div>
</footer>
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"> <i class="icon wb-chevron-up"
    aria-hidden="true"> </i> </button>
<script src="{pboot:sitedomain}/pc/js/index.js"></script>
</body>
</html><?php return array (
  0 => 'E:/phpstudy_pro/WWW/new/template/cn/comm/head.html',
  1 => 'E:/phpstudy_pro/WWW/new/template/cn/comm/list_banner.html',
  2 => 'E:/phpstudy_pro/WWW/new/template/cn/comm/position.html',
  3 => 'E:/phpstudy_pro/WWW/new/template/cn/comm/page.html',
  4 => 'E:/phpstudy_pro/WWW/new/template/cn/comm/left.html',
  5 => 'E:/phpstudy_pro/WWW/new/template/cn/comm/foot.html',
); ?>