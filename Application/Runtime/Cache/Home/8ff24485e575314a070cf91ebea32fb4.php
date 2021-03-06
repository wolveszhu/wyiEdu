<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($configs["title"]); ?></title>
<meta name="keywords" content="<?php echo ($configs["keywords"]); ?>">
<meta name="description" content="<?php echo ($configs["description"]); ?>">
<script type="text/javascript" async src="/Public/Home/js/ga.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/course_list.js"></script>

<link href="/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/course_list.css" type="text/css" rel="stylesheet">

<!--微专业major css/js-->
<script src="/Public/Home/js/SpryAssets/SpryDOMUtils.js" type="text/javascript"></script>
<script src="/Public/Home/js/major_small.js" type="text/javascript"></script>
<link href="/Public/Home/css/major_small.css" type="text/css" rel="stylesheet">

<!--计算机专业 css/js-->
<script src="/Public/Home/js/major_inter.js" type="text/javascript"></script>
<link href="/Public/Home/css/major_inter.css" type="text/css" rel="stylesheet">

<!--互联网职业技能 css/js-->
<script src="/Public/Home/js/major_skill.js" type="text/javascript"></script>
<link href="/Public/Home/css/major_skill.css" type="text/css" rel="stylesheet">

<!--金融专业 css/js-->
<script src="/Public/Home/js/major_money.js" type="text/javascript"></script>
<script src="/Public/Home/js/specialWebCommon.js" type="text/javascript"></script>
<link href="/Public/Home/css/major_money.css" type="text/css" rel="stylesheet">

<!--联系我们 css-->
<link href="/Public/Home/css/advice/advice.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/advice/core.css" type="text/css" rel="stylesheet">

<!--退出登录 css/js-->
<script src="/Public/Home/js/loginout.js" type="text/javascript"></script>
<link href="/Public/Home/css/loginout.css" type="text/css" rel="stylesheet"></head>

<!--个人中心personal css/js-->
<script src="/Public/Home/js/personalcenter.js" type="text/javascript"></script>
<link href="/Public/Home/css/personalcenter.css" type="text/css" rel="stylesheet">

<!--下载页download css/js-->
<link href="/Public/Home/css/core.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/download/download.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/css/download/b5m-plugin.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/css/download/b5m.botOrTopBanner.css" type="text/css">

<!--广告information css/js-->
<script src="/Public/Home/js/information.js" type="text/javascript"></script>
<link href="/Public/Home/css/information.css" type="text/css" rel="stylesheet">

</head>
<body id="find" class="auto-1449466894298-parent" style="padding-top: 60px;">
<div class="f-pf g-headwrap" id="j-fixed-head">
  <div id="j-appbanner" class="u-appbannerwrap"></div>
  <div class="g-hd f-bg1 m-yktNav " id="j-topnav" style="background:#2F3440">
    <div class="g-flow">
      <div class="f-pr f-cb">
        <div class="m-logo f-cb"> <a class="f-fl" hidefocus="true" href="/index.php" target="_self" data-index="网易云课堂logo"> <img class="f-fl img" src="/Public/Home/imgs/logo3.png" title="云课堂" width="153" height="28"> </a> </div>
        <div class="u-navcatebtn"> <a href="" target="_blank" class="cbtn" id="j-nav-catebtn"></a> </div>
        <div class="m-navrgt f-fr f-cb f-pr j-navright">
          <div class="userinfo f-fr f-cb f-pr">
		  <?php if($_SESSION["id"] == null): ?><div class="unlogin f-fr">
				<a href="/index.php/login/index.html" class="j-nav-loginBtn" id="j-login" data-index="登陆注册">登录/注册</a>
			</div><?php endif; ?>
          </div>

          <div class="nav-search u-navsearchUI j-searchP">
            <div class="box off j-search f-cb" onmouseover="this.style.background='white'" onmouseout="this.style.background='#5C5F68'" style="right:200px;" >
              <div class="submit j-submit f-hide f-fl" id="auto-id-1449466894323">搜索课程、计划或用户</div>
              <input  type="text" class="j-input f-fl" data-index="搜索" placeholder="搜索" id="auto-id-1449466894329">
            </div>
            <div class="j-suggest u-navsearchsug"></div>
          </div>
		  
		 <?php if($_SESSION["id"] != null): ?><div id="login">
			<div><a href="<?php echo ($_SESSION["id"]); ?>">消息</a></div>
			<div><a href="<?php echo ($_SESSION["id"]); ?>">课程包</a></div>
			<img src="/Public/Upload/<?php echo ($_SESSION["pic"]); ?>"/>
			<div id="login1">
				<div><a href="/index.php/Detail/personal/id/<?php echo ($_SESSION["id"]); ?>"><?php echo ($_SESSION["username"]); ?></a></div>
				<div><a href="/index.php/Detail/personalCenter/id/<?php echo ($_SESSION["id"]); ?>">个人主页</a></div>
				<div><a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>">反馈意见</a></div>
				<div><a href="/index.php/Detail/index/id/<?php echo ($_SESSION["id"]); ?>">设置</a></div>
				<div><a href="/index.php/Index/logout/id/<?php echo ($_SESSION["id"]); ?>">退出</a></div>
			</div>
		 </div><?php endif; ?>

        </div>
        <div class="m-nav f-cb j-navFind"> <a data-index="首页" class="nitem" href="/index.php"" hidefocus="true">首页</a>
			<div class="f-pr f-cb nitem x-hoverItem">
				<span>课程体系</span>
				<div class="f-pa u-navdropmenu x-child">
					<span class="arrr f-pa"></span>
					<a data-index="大学计算机专业" class="dropitem f-f0" href="/index.php/major/major_inter" hidefocus="true">
						<span>大学计算机专业</span>
					</a>
					<a data-index="互联网职业技能" class="dropitem f-f0" href="/index.php/major/major_skill" hidefocus="true">
						<span>互联网职业技能</span></a>
					<a data-index="金融专业" class="dropitem f-f0 last" href="/index.php/major/major_money" hidefocus="true">
						<span>金融专业</span>
					</a>
				</div>
			</div>
          <a data-index="微专业" class="nitem" href="/index.php/major/major_small" hidefocus="true">微专业</a>
		  <div class="nitem f-f0 x-hoverItem" hidefocus="true"> <span class="j-dropmenubtn" data-href="/client/download.htm" id="auto-id-1449466857063">下载APP</span>
            <div class="u-navapptip f-pa x-child">
              <div class="arrr f-pa"></div>
              <img src="/Public/Home/imgs/nav_qrcode.png" class="ewm f-fl" alt="下载APP" title="下载APP">
              <div class="rcon f-fr">
                <h4 class="txt">扫码下载官方App</h4>
                <a data-index="appstore下载" href="/index.php/User/download" class="store apple"><img src="/Public/Home/imgs/upload(1).png" width="150px"></a> <a data-index="android下载" href="/index.php/User/download" class="store android"><img src="/Public/Home/imgs/upload(2).png"></a> </div>
            </div>
          </div>
          <a data-index="学习中心" class="nitem" href="" hidefocus="true">学习中心</a>
          <div class="xxzxtip f-pa f-dn" id="j-xxzxtip-black-nav">
            <div class="arrr f-pa"></div>
            <div class="text f-fl">
              <p>“我的云课堂”改名为“学习中心”啦！</p>
              <p>你可以在学习中心查看所有学习记录和进度。</p>
            </div>
            <div class="xxzxtip-close f-pa" id="j-xxzxtip-close-black-nav">X</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="m-maintainInfo" style="display:none">
  <div id="maintain_info_box" class="g-flow"></div>
</div>
<div id="advertisement_box" class="advertisement_box f-pf" style="display:none;"></div>

<div><img src="/Public/Home/imgs//major_inter.png"></div>
<div class="u-mainTit">部分专家讲师介绍</div>
<!--     <div class="b-40"></div> <div class="b-40"></div> <h2 style="text-align: center; font-size:28px;">部分专家讲师介绍</h2> <div class="b-20"></div>-->
<div id="j-userSayNode" class="usersay">
  <div class="m-userSayList f-pr">
    <div class="j-leftItm changeItm left f-cb disabled" id="auto-id-1450263195702"></div>
    <div class="j-content content f-cb">
      <div class="container-intro"  style="color:#000">
	  <a href="#" target="_blank">
	  <img src="/Public/Home/imgs/2445736072656098045.jpg" alt="">
        <div class="name"  style="color:#000">彭国军</div>
        </a>
        <div class="title">副教授，博士生导师</div>
        <div class="text-intro">
          <p>武汉大学计算机学院副教授，博士生导师，全国网络与信息安全防护峰会联合发起人、执行主席，中国网络空间安全协会（筹）竞评演练工作组成员；主要研究领域包括：恶意代码及可信软件等。主持国家自然科学基金等各类国家级、省部级及横向合作类信息安全科研项目20余项。获得高等教育国家级教学成果奖一等奖1次，湖北省高等学校教学成果奖一等奖1次，武汉大学优秀教学成果奖一等奖2次，以及武汉大学青年教师教学竞赛二等奖等；编写出版《恶意代码取证》（译著）、《计算机病毒分析与对抗》等著作。近年来个人指导本科生获全国大学生电子设计竞赛信息安全技术专题邀请赛一等奖1项、全国大学生信息安全竞赛一等奖3项，二等奖5项。</p>
          <p>个人页面：<a href="#"></a> </p>
          <p>微博：<a href="http://weibo.com/d202" _href="http://weibo.com/d202" _src="http://weibo.com/d202"></a></p>
        </div>
      </div>
      <div class="container-intro"  style="color:#000"><a href="#" target="_blank"><img src="/Public/Home/imgs/1149262329927080756.jpg" alt="">
        <div class="name" style="color:#000">何钦铭</div>
        </a>
        <div class="title">教授</div>
        <div class="text-intro">
          <p>浙江大学计算机科学与技术学院教授，教育部大学计算机课程教学指导委员会副主任委员、浙江省高校计算机类专业教学指导委员会主任委员。主要研究方向为数据挖掘、虚拟计算系统技术，主讲“程序设计基础”、“数据结构基础”、“高级数据结构与算法分析”等课程。为国家精品课程与精品资源共享课程“程序设计基础”负责人、国家十一五及十二五规划教材“C语言程序设计”负责人。曾获国家优秀教学成果二等奖3项、浙江省优秀教学成果一等奖5项，以及霍英东优秀青年教师奖、宝钢优秀教师奖、浙江省高等学校教学名师等荣誉。</p>
          <p><br>
          </p>
        </div>
      </div>
      <div class="container-intro" style="color:#000"><a href="#" target="_blank"><img src="/Public/Home/imgs/634163122546928642.jpg" alt="">
        <div class="name" style="color:#000">翁恺</div>
        </a>
        <div class="title">教师</div>
        <div class="text-intro">
          <p>计算机博士，浙江大学计算机学院教师，ACM-ICPC优秀教练奖得主，2011世界总决赛金牌教练。主要讲授包括C、C++、Java程序设计，程序设计语言原理，计算机体系结构，嵌入式系统等课程。</p>
          <p>专业方向为嵌入式操作系统和嵌入式系统应用，是国内Arduino和树莓派应用的鼓吹者，翻译出版了多本相关书籍，在创客界交友广泛。</p>
          <p>2004年前后的Java教学视频在网络上流传甚广，现在在网易云课堂 上开设有Java、C++、Arduino等多门课程。</p>
          <p>业余爱好无线电，1988年开始玩业余电台，电台呼号BA5AG，主要玩莫尔斯码、短波、数据通信和卫星通信。是浙大传统毅行的发起者和早期组织者之一。</p>
          <p><br>
          </p>
        </div>
      </div>
	  </div>
    <div class="j-rightItm changeItm right f-cb" id="auto-id-1450263195703"></div>
    <div></div>
  </div>
</div>
<div class="g-flow indicate">
  <div class="u-mainTit">请选择您感兴趣的岗位</div>
  <div id="j-smartSpec" style="margin:40px 0 80px 0;">
    <table class="m-spectable">
      <tbody>
        <tr>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">产品经理</div>
            <div class="f-icon icon-1025"></div>
            <div class="org f-f0">网易杭州研究院</div>
            <div class="f-pa des">
              <p class="cnt">网易云音乐、LOFTER、考拉海购、易信、邮箱等亿级产品的产品负责人亲授，只为打造国内顶尖产品经理课程。带你掌握从需求挖掘、产品设计到数据分析、产品运营的全部技能，帮你成为一个合格产品人</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">Java 开发工程师（Web方向）</div>
            <div class="f-icon icon-1023"></div>
            <div class="org f-f0">网易杭州研究院</div>
            <div class="f-pa des">
              <p class="cnt">聚焦Java 开发工程师（Web方向）必知必会的知识技能。既有系统的知识体系保证学生吸收，又有大量网易内部案例和实践，保证学生无缝对接企业需求。优秀学生还可获得工作推荐。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">产品经理</div>
            <div class="f-icon icon-1018"></div>
            <div class="org f-f0">极客班</div>
            <div class="f-pa des">
              <p class="cnt">结合前两届学员的综合反馈，课程再次升级！联合多位产品大牛打磨研究，涵盖产品经理核心技能矩阵：产品管理、商业模式、用户体验到敏捷方法、创新策略，全面掌握一个优秀产品经理所需技能。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">iOS开发工程师</div>
            <div class="f-icon icon-1019"></div>
            <div class="org f-f0">极客班</div>
            <div class="f-pa des">
              <p class="cnt">结合前两届学员的综合反馈，课程再次升级！联合多位iOS技术大牛打磨研究，通过作业练习和项目实战，助力学员全面掌握一个iOS应用从无到有的构建过程、编码技巧和重点难点的攻克。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
        </tr>
        <tr>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">C++系统工程师</div>
            <div class="f-icon icon-1020"></div>
            <div class="org f-f0">极客班</div>
            <div class="f-pa des">
              <p class="cnt">结合前两届学员的综合反馈，课程再次升级！联合多位C++技术大牛研究，精选五大系统级C++课程，通过实践训练，学员不仅掌握C++开发的关键技能，同时培养系统级工程师的思维方法和设计素养。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">Android开发工程师</div>
            <div class="f-icon icon-1021"></div>
            <div class="org f-f0">极客班</div>
            <div class="f-pa des">
              <p class="cnt">结合前两届学员的综合反馈，课程再次升级！联合多位Android技术大牛打造，深入学习Android应用开发、性能优化、以及高级进阶所需要的核心技术，掌握一个Android应用从无到有的构建过程。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">IT项目经理</div>
            <div class="f-icon icon-1016"></div>
            <div class="org f-f0">光环国际​</div>
            <div class="f-pa des">
              <p class="cnt">本微专业旨在帮助新手IT项目经理建立广阔的全局观和统筹协作意识，借助一系列核心方法和工具提升团队工作效率，最终成为一名被业务认可的卓越项目经理。【重要】2015年底前仅售999元！</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">自动化测试工程师</div>
            <div class="f-icon icon-1015"></div>
            <div class="org f-f0">网易杭州研究院</div>
            <div class="f-pa des">
              <p class="cnt">测试自动化是实现高效率软件测试的必由之路。加入自动化测试微专业，从开发者阶段的测试开始，逐步掌握Web自动化测试、移动App自动化测试，最终驾驭自动化测试框架的使用乃至设计和开发。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
        </tr>
        <tr>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">移动应用测试工程师</div>
            <div class="f-icon icon-1014"></div>
            <div class="org f-f0">网易杭州研究院</div>
            <div class="f-pa des">
              <p class="cnt">移动应用测试微专业集网易、支付宝资深测试工程师及著名高校一线教师，从基础理论到前沿实操，一站式掌握移动应用测试工程师必知必会全部技能！</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">MySQL数据库管理工程师</div>
            <div class="f-icon icon-1007"></div>
            <div class="org f-f0">网易杭州研究院</div>
            <div class="f-pa des">
              <p class="cnt">MySQL是互联网行业使用最广泛的关系型数据库，管理MySQL是互联网应用开发工程师和数据库管理员必知必会的技能。本微专业由网易一线DBA团队打造，助你掌握MySQL的企业应用方法，胜任工作。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">大数据工程师</div>
            <div class="f-icon icon-1006"></div>
            <div class="org f-f0">Wiley</div>
            <div class="f-pa des">
              <p class="cnt">本微专业由世界顶级行业专家主持，国际学术出版商Wiley开发，面向全球化需求。通过学习，您将帮助掌握大数据技术必备技能和核心技术，包括工具选择，存储、编程、处理和管理数据架构等。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">移动开发工程师</div>
            <div class="f-icon icon-1005"></div>
            <div class="org f-f0">Wiley</div>
            <div class="f-pa des">
              <p class="cnt">本微专业由HTML5与跨平台开发、Android开发、iOS开发三个模块（含实验）组成；适合初学者全面体验，快速入门。微专业学习者将能够熟练使用当前流行的工具，开发出以用户为中心的移动应用。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
        </tr>
        <tr>
          <td><a class="link f-pr" href="#" target="_blank">
            <div class="name f-f0">前端开发工程师</div>
            <div class="f-icon icon-1002"></div>
            <div class="org f-f0">网易杭州研究院</div>
            <div class="f-pa des">
              <p class="cnt">网易一线资深前端开发工程师倾情打造！助你完成普通程序员到优秀工程师的华丽升级！更有最高¥1999奖学金！考核未通过免费重修一次。付费后视频随时观看，永久有效。</p>
              <p class="more">查看详情</p>
            </div>
            </a></td>
          <td colspan="3"><div class="name2 f-f0">更多微专业正在制作敬请期待</div></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="block g-wrap cert c2 f-cb" style="line-height:35px; width:80%;font-size:20px ;margin-top:180px;background:#EEEEEE">
    <div class="f-fl img"></div>
    <div class="f-fr text f-f0">
      <h2 class="f-f0">广泛认可的证书支持</h2>
      <div class="detail s-fc5"> 当你完成课程学习后，还可以获得老师签名的证书。<br>
        这些证书不仅仅是一种荣耀，更是你成长路上的一个里程碑。<br>
        <a class="f-fcgreen" href="#" style="color:#70C5D3" target="_blank">点击查看详情&gt;</a> </div>
    </div>
  </div>
  <div class="bd"></div>
  <div class="block g-wrap cert c1 f-cb" style="line-height:35px;width:80%; font-size:20px ;margin-top:180px;background:#EEEEEE">
    <div class="f-fl text f-f0">
      <h2 class="f-f0">先进的在线学习方式</h2>
      <div class="detail s-fc5"> 应用时下最流行的MOOC教学方式，定期开课，简短视频、在线测试和作业评估。<br>
        比起通过书籍自学，更快速有效。 </div>
    </div>
    <div class="f-fr img"></div>
  </div>
  <div class="bd"></div>
  <div class="block g-wrap cert c3 f-cb" style="line-height:35px; width:80%;font-size:20px ;margin-top:180px;background:#EEEEEE">
    <div class="f-fl img"></div>
    <div class="f-fr text f-f0">
      <h2 class="f-f0">随时随地掌握学习进度</h2>
      <div class="detail s-fc5"> 下载云课堂App，将课程统统装进你的口袋。<br>
        无论是在家里，还是在咖啡馆，随时随地，学习进度轻松掌握。 </div>
    </div>
  </div>
</div>
<div class="question">
  <div class="g-wrap f-cb f-f0" style="line-height:30px; font-size:17px; width:80%; margin-top:180px;background:#EEEEEE">
    <div class="u-mainTit">常见问题</div>
    <div class="list">
      <div class="itm">
        <p class="tit">Q：课程是免费的吗？</p>
        <p class="s-fc5">A ：是的，现在计算机专业体系都是免费的，你可以自由选择喜欢的课程进行学习。</p>
      </div>
      <div class="itm itm2">
        <p class="tit">Q：如何获得认证证书？</p>
        <p class="s-fc5">A ：要想获得证书，你需要完成相关学习内容，包括观看视频，提交作业，参与互评和讨论等等。你需要及时查看课程大纲及公告，了解获得课程证书的具体要求。课程团队将根据你的最后得分判断是否颁发证书。</p>
      </div>
    </div>
    <a class="link" href="#" target="_blank" style="color:#70C5D3">查看全部 &gt;</a> </div>
</div>
<br/>
<br/>

<div class="g-ft">
  <div class="m-yktFoot" id="j-yktfoot">
    <div class="g-flow ftwrapper f-cb">
      <div class="f-fl ftlf">
        <div class="logo"></div>
        <p class="txt f-fs0"> 网易公司(163.com)旗下实用技能学习平台。与顶级机构、院校和优秀讲师合作，为您提供海量优质课程，以及创新的在线学习体验，帮助您获得全新的个人发展和能力提升。</p>
        <div class="share f-cb">
			<p class="tit">关注我们：</p>
			<a href="#" class="weibo" target="_blank" data-index="关注我们_微博">
				<img src="/Public/Home/imgs/1.png">
			</a> 
			<a href="#" class="renren" target="_blank" data-index="关注我们_人人">
				<img src="/Public/Home/imgs/2.png">
			</a>
			<a href="javascript:void(0)" class="yixin f-pr" data-index="关注我们_易信">
				<img src="/Public/Home/imgs/3.png">
				<div class="tipQrcode f-pa">
					<div class="qrImag"> <img src="/Public/Home/imgs/yixin.png" width="120px" height="120px" alt="加云课堂易信好友"> </div>
					<p class="qrTitle">易信号：study163</p>
					<div class="tip f-pa"></div>
				</div>
			</a>
			<a href="javascript:void(0)" class="weixin f-pr" data-index="关注我们_微信">
				<img src="/Public/Home/imgs/4.png">
				<div class="tipQrcode f-pa">
					<div class="qrImag">
						<img src="/Public/Home/imgs/weixin.png" width="120px" height="120px" alt="加云课堂微信好友">
					</div>
					<p class="qrTitle">微信号：study163</p>
					<div class="tip f-pa"></div>
				</div>
			</a>
		</div>
        <div class="copy">©<span>1997-2015</span> <?php echo ($configs["copyright"]); ?></div>
      </div>
      <div class="ftrt f-fr">
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="关于我们">关于我们</a>
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="联系我们">联系我们</a>
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="帮助中心">帮助中心</a>
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="内容招募">内容招募</a>
		<a href="/index.php/User/advice/id/<?php echo ($_SESSION["id"]); ?>" target="_blank" data-index="意见反馈">意见反馈</a>
		<a href="" target="_blank" data-index="中国大学MOOC">中国大学MOOC</a>
        <div class="f-cb mobile f-fr">
          <div class="tit f-fl">移动App:</div>
          <a target="_blank" class="mlogo1" href=""></a>
		  <a target="_blank" class="mlogo2" href=""></a>
		</div>
      </div>
    </div>
  </div>
</div>
<script src="/Public/Home/css/reuglar.0.3.1.js"></script>
<div class="f-dn">玩转 C语言 基础课堂,Fenby,IT与互联网 编程语言,玩转 C语言 基础课堂，用最基础易懂的形象比喻方式来学习和理解C语言的基础知识点，去掉冗繁的基础概念知识，最大化的在线练习编写代码中找到知识重点，以练为主，以学为辅，两者在快乐和最快时间里都可兼得，省去学习C语言看书和找习题的麻烦。  适用人群：喜欢编程，担心编程很难的零基础人群，想快速学好C语言基础，想用新鲜学习方式和不喜欢看书的C语言初学者。</div>
<div class="m-side-operation auto-1449466944905" id="j-side-operation">
  <div class="side-service-item">
	<a class="item-link-block" data-name="留言" href="" target="_blank">
		<i class="side-service-icon feedback-icon"></i>
		<span class="item-hover-text feedback-text">反馈意见</span>
	</a>
  </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item ">
	<a class="item-link-block app-download" data-name="手机课堂" href="javascript:void(0)">
		<i class="side-service-icon phone-icon"></i>
		<span class="item-hover-text">手机课堂</span>
		<div class="qrcode-bubble">
        <div class="qrcode">
			<div class="download"><img src="/Public/Home/imgs/sideBar90.png">
			  <p>下载App</p>
			</div>
			<div class="follow-weixin"><img src="/Public/Home/imgs/weixin.png">
			  <p>关注微信</p>
			</div>
		</div>
      <div class="arrow">
        <div class="arrow-border"></div>
        <div class="arrow-cnt"></div>
      </div>
    </div>
    </a> </div>
  <div class="line-wrap">
    <div class="line"></div>
  </div>
  <div class="side-service-item "> <a class="item-link-block side-service-top" data-name="回到顶部" href="javascript:void(0)" id="auto-id-1449466944916"> <i class="side-service-icon top-icon"></i> <span class="item-hover-text scrtop-text">返回顶部</span> </a> </div>
</div>
<div>
  <div id="loadingMask" class="loading-mask" style="z-index: 10001; display: none;"></div>
  <div id="loadingPb" class="ui-loading f-cb" style="z-index: 10002; display: none;"></div>
</div>
<div class="u-userCard" id="auto-id-1449466944964">
  <div class="j-cardMain main">
    <div class="base f-cb">
      <div class="face f-fl"><a class="j-imglink"><img class="j-img" width="80" height="80" src=""></a></div>
      <div class="info f-fl">
        <p class="nameloginfo"><a target="_blank" class="f-thide f-ib j-name name" title="进入个人主页"></a></p>
        <p class="j-gztxt gztxt"></p>
      </div>
    </div>
    <p class="j-des des"></p>
    <div class="j-gzbtn gz"></div>
  </div>
  <div class="j-loading loading"></div>
</div>
</body>
<script type="text/javascript"charset="utf-8">
	$("#login > img").hover(function(){
		$("#login1").fadeIn(1000,function(){
			$("#login1").css("display","block");
		});
	},function(){
		$("#login1").hover(function(){
			var time=setInterval(function(){
				$("#login1").css("display","none");
			},3000);
		},function(){
			$("#login1").fadeOut(1000,function(){
				$("#login1").css("display","none");
			});
		});
	});
	
</script>
</html>