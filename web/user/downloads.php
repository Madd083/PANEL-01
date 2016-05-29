<?php
$title='下载中心';
include './down.php';
?>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12">
          <div class="row" style="margin: 1em auto;">
            <div class="col-md-12">
              <img src="/user/images/logo.png" class="img-responsive center-block" alt="Flipwalls Logo" width="257" height="77"></div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-12 text-center text-muted">
              <h3 class="h2-sep">第一步：注册并激活</h3>
              <p>已成功激活帐户，点击购买流量。</p>
            </div>
          </div>
        
             <div class="row vmargin-15">
            <div class="col-md-12 text-center ">
              <h3 class="h2-sep text-center">第二步：购买充值流量卡</h3>
<a href="#" class="btn btn-success btn-large"><i class="icon-shopping-cart icon-white"></i>支 付 宝 在 线</a>&nbsp;&nbsp;<a href="#" class="btn btn-success btn-large"><i class="icon-shopping-cart icon-white"></i>购 卡 平 台</a>
          <div class="row vmargin-15">
            <div class="col-md-12 text-center ">
              <h2 class="h2-sep text-center">第三步：下载连线软件</h2>
              <p>以下是
                <strong>系统自动侦测</strong>到适合的软件。</p>
              <p class="text-center">
                <div class="os os-xp-32">
                  <button class="btn btn-success" type="button" id="xp-32" onclick=" ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('flipwalls_xp_32_bits_1.1.0.zip'); ">绿色稳定版 1.1.0（ 32位 XP系统 ）</button></div>
                <div class="os os-xp-64">
                  <button class="btn btn-success" type="button" id="xp-64" onclick=" ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('flipwalls_xp_64_bits_1.1.0.zip'); ">绿色稳定版 1.1.0（ 64位 XP系统 ）</button></div>
                <div class="os os-vista-32">
                  <button class="btn btn-success" type="button" id="vista-32" onclick=" ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('flipwalls_win7_32_bits_1.1.0.zip'); ">绿色稳定版 1.1.0（ 32位 Win7 或以上系统 ）</button></div>
                <div class="os os-vista-64">
                  <button class="btn btn-success" type="button" id="vista-64" onclick=" ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('flipwalls_win7_64_bits_1.1.0.zip'); ">绿色稳定版 1.1.0（ 64位 Win7 或以上系统 ）</button></div>
                <div class="os os-osx">
                  <button class="btn btn-success" type="button" id="os-osx" onclick=" ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('Tunnelblick_3.5.5_build_4270.4461.dmg'); ">下载 OS X 软件（Tunnelblick)</button></div>
                <div class="os os-android">
                  <button class="btn btn-success" type="button" id="os-android" onclick=" ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('openvpn-connect-1.1.16.apk'); ">安装 OpenVPN Connect 软件</button></div>
                <div class="os os-ios">
                  <button class="btn btn-success" type="button" id="os-ios" onclick=" ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); window.open('https://itunes.apple.com/us/app/openvpn-connect/id590379981', '_blank'); ">安装 OpenVPN Connect 软件</button></div>
              </p>
              <p>若要在其他设备上使用，请用该设备再次访问本网站的下载页。</p>
            </div>
          </div>
          <div class="row os os-osx os-xp-32 os-xp-64 os-vista-32 os-vista-64">
            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 ">
              <div class="text-center vmargin-15">
                <a class="icon-chevron-down" data-toggle="collapse" href="#more-downloads" aria-expanded="false" aria-controls="more-downloads">
                  <span class="glyphicon glyphicon-plus"></span>&nbsp; 更多版本客户端 或 线路配置</a>
              </div>
              <div class="collapse" id="more-downloads">
                <div class="card card-block">
                  <ul>
                    <li>
                      <a href="javascript: ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('flipwalls_xp_32_bits_1.1.0.zip');">Winows XP 32位 绿色稳定版 v1.1.0</a></li>
                    <li>
                      <a href="javascript: ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('flipwalls_xp_64_bits_1.1.0.zip');">Windowsp XP 64位 绿色稳定版 v1.1.0</a></li>
                    <li>
                      <a href="javascript: ga('send', 'event', 'Downloads Page', 'download', 'Marketing Research', 1); download_sw('flipwalls_win7_32_bits_1.1.0.zip');">Windows 7 或以上 32位 绿色稳定版 v1.1.0</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">&nbsp;</div></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center footer">
              <small>&copy; kangml.com 版权所有© 康师傅免流™</small></div>
          </div>
        </div>
      </div>
    </div>
    <script>(function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] ||
        function() { (i[r].q = i[r].q || []).push(arguments)
        },
        i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-68906813-1', 'auto');
      ga('send', 'pageview');</script>
    <script>ga('send', 'event', 'Downloads Page', 'entry', 'Marketing Research', 1);</script></body>

</html>