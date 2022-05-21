<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="generator" content="" data-variable=",cn,10001" />
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
  <!-- <a href="{pboot:lgpath}&lg=en">切换英文</a>
<a href="{pboot:lgpath}&lg=cn">切换中文</a>  -->
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
          <li class="margin-right-20" style="display: flex;
        justify-content: center;
        align-items: center;
        padding-left: 10px;"> <svg t="1652968408167" class="icon" viewBox="0 0 1024 1024" version="1.1" p-id="3092"
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
          <li style="display: flex;
            justify-content: center;
            align-items: center;"><svg t="1653103935347" class="icon" viewBox="0 0 1024 1024" version="1.1"
              xmlns="http://www.w3.org/2000/svg" p-id="1865" width="23" height="23">
              <path
                d="M78.572 78.572v131.343h866.857v-131.343h-866.857zM78.572 577.67h866.857v-131.343h-866.857v131.343zM78.572 945.428h866.857v-131.343h-866.857v131.343z"
                p-id="1866"></path>
            </svg> <a></a>



            <ul class="expandMenuUl">
              {pboot:nav num=15 parent=0}
              {pboot:if([nav:n]>3)}
              <li class="listStyle expandMenu"> <a style="font-size: 20px;    "  href="[nav:link]">[nav:name]
                </a></li>
              {/pboot:if}

              {/pboot:nav}
              <li class="listStyle expandMenu expandMenuClose" style="color: red;font-weight: 700; padding-top: 40px;"> X</li>
            </ul>



          </li>
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
    <div class="container">
      {pboot:sort scode=21}
      <div class="title-box" >
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
                  <img src="[nav:ico]">
                  <!-- <img class="icon" src="[nav:ico]"> -->
                  <h3> [nav:name] <span>></span></h3>
                  <div class="fadeInUpBig" style="height: 100%; position: relative;" >
                  <p>
                  <span style="    font-size: 35px;
                  font-weight: 200;
                  display: block;
                  margin-top: 58px;
                  margin-left: 19px;
                  text-align: left;
                  color: #000;">[nav:name]</span>
                  <span style="    font-size: 20px;
                  font-weight: 200;
                  padding: 0 19px;
                  height: 280px;
                  display: block;
                  color: #000;
                  text-align: left;
              "> [nav:description]</span>
                  <span style="display: block;
                  color: #CF1F38;
                  font-size: 20px;
                  text-align: right;
                  padding: 0 20px;
              ">了解更多></span>
                    
                    
                  
                  
                  </p>
                </div>
                </b>
               
           
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
          <div class="about-title title-box" >
            <h2> [content:title] </h2>
          </div>
          <div class="about-box">
            [content:content drophtml=1 len=280]
          </div>
          <div class="about-link"> <a href="[content:link]" title="关于我们"> 查看更多 <i class="fa fa-angle-double-right"> </i>
            </a> </div>
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
            <li class="product-slide"> <a href="[list:link]" title="[list:title]"> <span> <img
                    data-original="[list:ico]" alt="[list:title]"> </span>
                <h4> [list:title] </h4>
              </a> </li>
            {/pboot:list}
          </ul>
        </div>
        <div class="product-link"> {pboot:sort scode=17} <a href="[sort:link]"> 查看更多 <i
              class="fa fa-angle-double-right"> </i> </a>{/pboot:sort} </div>
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
        {/pboot:sort}
      </div>
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
                </a>
              </span>
              <ol>
                {pboot:list scode=[nav:scode] num=2}
                <li>
                  <h4> <a href="[list:link]" title="[list:title]"> [list:title] </a> </h4>
                  <p> [list:description] </p>
                  <b> <i> [list:date style=Y-m-d] </i> <em class="fa fa-tag"> </em> <strong></strong>[list:sortname]
                  </b>
                  
                </li>
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

  <!-- <div class="met-footnav">
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
    aria-hidden="true"> </i> </button> -->
<div class="container homefoot">
  <div class="footLeft">
    <div class="footLeftText">与奋斗者同行,</div>
    <div class="footLeftText">创造长期价值。</div>
    <div class="footLeftLine"></div>
  </div>
  <div class="footMid">
    <div class="footMidText">联系我们</div>
    <div class="footMidText">法律信息</div>

  </div>
  <div class="footRight">
    <div class="footRightText">在社交媒体上关注我们</div>
    <div class="footRightIcon">
      <svg t="1653116168649" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
        p-id="3585" width="30" height="30">
        <path
          d="M224 149.28a75.2 75.2 0 0 0-79.04 80A75.04 75.04 0 0 0 224 307.36a76.96 76.96 0 0 0 80-78.4 76.96 76.96 0 0 0-80-79.68zM878.72 874.72V575.04c0-148.8-74.08-216.96-172.96-216.96a176 176 0 0 0-149.28 80h-3.04l-6.88-69.12H416c1.92 44.48 4 98.08 4 161.12v344.64h150.24V583.36A112 112 0 0 1 576 544a80 80 0 0 1 76-58.88c54.4 0 76.16 44.48 76.16 109.6v280zM149.28 369.44h150.24v505.28H149.28z"
          fill="#d81e06" p-id="3586"></path>
      </svg>
      <svg style="    margin: 0 20px;" t="1653116277185" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
        p-id="4592" width="30" height="30">
        <path
          d="M715.542857 358.171429c6.742857 0 13.485714 0.228571 20.114286 0.571428-27.885714-147.085714-180.914286-259.542857-365.6-259.542857C165.714286 99.2 0 237.028571 0 407.085714c0 92.685714 49.828571 176.228571 127.885714 232.685715a24.571429 24.571429 0 0 1 10.4 20.114285c0 2.742857-0.571429 5.257143-1.257143 7.885715-6.285714 23.2-16.228571 60.342857-16.685714 62.057142-0.8 2.971429-1.942857 5.942857-1.942857 9.028572 0 6.742857 5.485714 12.342857 12.342857 12.342857 2.628571 0 4.8-1.028571 7.085714-2.285714l81.028572-46.742857c6.057143-3.542857 12.571429-5.714286 19.657143-5.714286 3.657143 0 7.314286 0.571429 10.857143 1.6 37.828571 10.857143 78.628571 16.914286 120.8 16.914286 6.857143 0 13.6-0.114286 20.342857-0.457143-8.114286-24-12.457143-49.257143-12.457143-75.428572 0-155.2 151.085714-280.914286 337.485714-280.914285z m-222.057143-98.857143c27.2 0 49.371429 22.057143 49.371429 49.257143s-22.057143 49.257143-49.371429 49.257142c-27.2 0-49.371429-22.057143-49.371428-49.257142s22.171429-49.257143 49.371428-49.257143z m-246.742857 98.514285c-27.2 0-49.371429-22.057143-49.371428-49.257142s22.057143-49.257143 49.371428-49.257143 49.371429 22.057143 49.371429 49.257143-22.171429 49.257143-49.371429 49.257142z m670.628572 474.971429c65.028571-47.085714 106.514286-116.571429 106.514285-193.942857 0-141.714286-138.057143-256.571429-308.457143-256.571429-170.285714 0-308.457143 114.857143-308.457142 256.571429S545.028571 895.428571 715.428571 895.428571c35.2 0 69.257143-5.028571 100.685715-14.057142 2.971429-0.914286 5.942857-1.371429 9.028571-1.371429 5.942857 0 11.314286 1.828571 16.342857 4.685714l67.542857 38.857143c1.942857 1.142857 3.771429 1.942857 5.942858 1.942857a10.285714 10.285714 0 0 0 7.314285-2.971428 10.285714 10.285714 0 0 0 2.971429-7.314286c0-2.514286-1.028571-5.028571-1.6-7.542857-0.342857-1.371429-8.685714-32.342857-13.942857-51.771429-0.571429-2.171429-1.028571-4.342857-1.028572-6.514285 0.114286-6.742857 3.542857-12.8 8.685715-16.571429zM612.8 597.942857c-22.742857 0-41.142857-18.4-41.142857-41.028571 0-22.628571 18.4-41.028571 41.142857-41.028572s41.142857 18.4 41.142857 41.028572c0 22.628571-18.514286 41.028571-41.142857 41.028571z m205.6 0c-22.742857 0-41.142857-18.4-41.142857-41.028571 0-22.628571 18.4-41.028571 41.142857-41.028572s41.142857 18.4 41.142857 41.028572a41.234286 41.234286 0 0 1-41.142857 41.028571z"
          p-id="4593" fill="#d81e06"></path>
      </svg>

      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 35.455 31.707">
    
          <path id="路径_329" data-name="路径 329" d="M35.455,7.364a54.389,54.389,0,0,1-5.119,21.3,7.5,7.5,0,0,1-1.37,2.033,2.619,2.619,0,0,1-3.928.237,13.868,13.868,0,0,1-2.58-2.625,57.071,57.071,0,0,1-4-5.833c-.508-.889-.886-.915-1.467-.025-.784,1.2-1.474,2.463-2.2,3.7A16.711,16.711,0,0,1,10.9,30.86c-1.856,1.479-3.923.987-5.185-1.318a38.819,38.819,0,0,1-3.044-7.385A72.882,72.882,0,0,1,.08,8.148,12.433,12.433,0,0,1,.613,2.772,4.329,4.329,0,0,1,2.393.58,2.9,2.9,0,0,1,5.583.39a17.384,17.384,0,0,1,5.475,4.72,84.636,84.636,0,0,1,5.927,8.749c.625,1.017.929,1.009,1.524-.017A73.889,73.889,0,0,1,26.814,2.649,8.848,8.848,0,0,1,30.264.3a3.206,3.206,0,0,1,4.2,1.454,11.639,11.639,0,0,1,.99,5.611M2.706,7.1c.056.45.135.924.173,1.4A53.175,53.175,0,0,0,7.943,28.343c.3.6.673.881,1.27.379a9.392,9.392,0,0,0,1.28-1.181,55.528,55.528,0,0,0,5.078-8.183A2.658,2.658,0,0,0,15.5,16.7a73.144,73.144,0,0,0-5.074-7.967A26.919,26.919,0,0,0,5.428,3.321c-1.217-1-2.076-.754-2.374.8-.187.971-.234,1.969-.348,2.984m30.042.548a15.769,15.769,0,0,0-.211-3.4c-.428-1.625-1.128-1.9-2.483-.91a22.768,22.768,0,0,0-4.727,5.226c-1.91,2.617-3.518,5.454-5.281,8.18a2.229,2.229,0,0,0-.081,2.589c.872,1.43,1.745,2.861,2.576,4.315A19.889,19.889,0,0,0,26.05,28.3c.862.819.965.864,1.6-.145A25.274,25.274,0,0,0,30.2,21.807a57.2,57.2,0,0,0,1.577-6.995,47.083,47.083,0,0,0,.974-7.162" transform="translate(0 0)" fill="#cf1f38"/>
      
      </svg>
      
    </div>
    
    <div class="footRightText">Copyright©2022鼎晖投资，保留所有权利。</div>
    <div class="footRightText">京ICP：19057411号</div>
  </div>
  </div>
</div>
<script src="{pboot:sitedomain}/pc/js/index.js"></script>
</body>
<script>
  $("#navbar-default-collapse > ul > li:nth-child(6)>svg").hover(function(e){
$(".expandMenuUl").css("display","block")

  })

$(".expandMenuClose").click(function(e){
  console.log(e)
  $(".expandMenuUl").css("display","none")


})

$("body > div.service-background > div > div.row > div > ul > li").hover(function(){
  console.log(this)
  $(this).find(".fadeInUpBig").show();
  //  $(".fadeInUpBig").show();
  $(this).find("p").stop(true,true).animate({bottom:"0"},500);  
             
},function(){
  $(this).find(".fadeInUpBig").hide();
  $(this).find("p").stop(true,true).animate({bottom:"-100%"},500);  
})

</script>
</html><?php return array (
  0 => 'E:/phpstudy_pro/WWW/new/template/cn/comm/head.html',
  1 => 'E:/phpstudy_pro/WWW/new/template/cn/comm/foot.html',
); ?>