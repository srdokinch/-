<!DOCTYPE html>
<html>
  <head>
    <title>TagCanvas example</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="js/scroll.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
    $('.flexslider').flexslider();
    });
    </script>
    <script src="tagcanvas.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{
            textColour: 'rgb(239, 122, 0)',
            reverse: true,
            depth: 0.8,
            maxSpeed: 0.05,
            imageScale: 1
          });
        } catch(e) {
          // something went wrong, hide the canvas container
          document.getElementById('myCanvasContainer').style.display = 'none';
        }
      };
    </script>
  </head>
  <body>

 <header>
  <h1>Otaru ver</h1>

  <nav>
    <ul>
      <a href="#"><li>menu1</li></a>
      <a href="#"><li>menu2</li></a>
      <a href="#"><li>menu3</li></a>
      <a href="#"><li>menu4</li></a>
      <a href="#"><li>menu5</li></a>
    </ul>
  </nav>
</header>


<div id="photos">
  <P><img src="img/IMG_4259.JPG"></P>
</div>

<div id="box2">
<div id="explain">
  <div class="item1"><h3>This website helps your sightseen with Tagcould.</h3><p>ここに、このWebsiteはどのようなものなのか説明文を加えます。</p></div>
  <div class="item2"><h3>How to use this website</h3><p>Click a word that you're interested in.</div>
  <div class="item3"><h3>characteristics</h3><p>This site uses Tagcould.</p></div>
</div>
</div>


<div id="php">
    <?php
//テキストファイルのパス指定
$list = file('list.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//検索ワード
$word = 'Wonderful(コメントで絞り込み)';
$word2 = 'Beautiful(タグで絞り込み)';
$word3 = 'Winter(タグで絞り込み)';
?>
    <div id="myCanvasContainer">
      <canvas width="600" height="600" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags">
      <ul>
        <li><a href="https://www.flickr.com/photos/mamako_k/8477415333/in/photolist-dV7Yek-SqBHFc-RnXux6-SqGz2t-Socjpd-RkriHd-SBYA5r-78Znoc-r6Un4Q-So87Zs-S3cX2j-SqDnWZ-r7GjsS-SqBASx-SocKo1-S34MLw-SqEFSB-RkpG1o-S3dB7Y-SqzXPB-5ZmHmb-rpcUFM-SqAog2-qotvSf-SBWQ1g-S39uxd-RkqYXC-jYpTen-So7o8W-So74cE-SBZU7r-RnZCNa-S3dw2Y-RkpHDU-SqFX9X-SC3zW2-S3bqzu-5ZEZoY-dxBWSB-62cfyQ-jSoozK-jYqjE2-VPQoZs-bHx8h4-95RjvH-5E1FMM-SynPew-SBWJ3p-Ro3a7T-SynLyw">
          <?php
          if (array_count_values($list)[$word] >= 1) {
              echo $word3;
              echo nl2br("\n");
          }
          ?></a></li>
        <li><a href="https://www.flickr.com/photos/xaanoca/25606245924/in/photolist-F1JGNG-FC5D9J-KQd2kn-H6RHQc-wK7qFD-AURkSd-e14BGv-rvy7F2-sfzAKp-qpntrn-Tq6F7b-DGB7a8-V3vM5q-qnKUVc-upsuCE-F95sJC-rjuP9p-ZkmSzT-WJqSiq-xZUtSV-YWsGb8-S3DNwm-FQhCqn-z9eXZY-pNKt9B-tJjXru-AhV1ue-V32frD-THKzie-UeC4N8-UHdLCe-RJJWCT-qnA7Cy-rRhvRD-ARb4RX-TF2cmD-RF8Lkp-SQ1upT-D4o6NK-F2apgE-ZmsFPU-ZVuqSS-Kv1HCU-CzmHQq-213mEGz-TUdewr-DBvPLf-drEcgx-ZsNUkt-YaQwSy"><img src="img/sample.jpg"></a></li>
        <li><a href="https://www.flickr.com/photos/ampamuka/14190057014/in/photolist-nBVKzq-VdB8HV-g74aYv-gngKQf-6h6RWR-ghXRav-gwrSJu-ga2tPq-gkE3b6-geA4xu-g5uZ7w-g5uVUE-g2PCie-g74aqM-gd3YuG-g8zNbz-gbzyg1-g3GprR-ghXwaQ-geAJPe-g754xR-ghXveb-g2Pbuo-gguLL2-gd4z2B-geAp2w-g3GrMn-geAoa1-ga2v2q-gbzpwZ-g5vwWv-g3FUpJ-g5uMhD-g5uN6T-8JM6jz-g2P6zH-33oKLs-g75NqX-g5rxLr-ga2mfP-g5rKLu-g5ruCc-gbzyUf-g5rzHH-g5rJ87-gguJNp-g76m8U-g76N5n-g5rGds-g76DoK"><p>aaa</p>
          <?php
          if (array_count_values($list)[$word] >= 1) {
              echo $word2;
              echo nl2br("\n");
          }
          ?></a></li>
        <li><a href="https://www.flickr.com/photos/ee770503/15407136846/in/photolist-pttB1s-5mEpqe-crMtaN-kfij2r-Titvkn-mH6Rua-cphBCf-2HCe13-UxdZVP-4DheNH-diGPbM-5E5iUj-76dstv-eex9Zf-61eHEf-cjENd3-xkkQ3-5XPpeR-5UC2yB-76dsnP-8rC8Ci-76dshr-76dsvt-4rMk8d-7fTUup-D5SRjd-D5NjQn-Dcb41h-CFWynV-D89WJM-y7Go9Y-xsjD6C-reUHtS-76hmNs-Tj4PB">
        <?php
        if (array_count_values($list)[$word] >= 1) {
            echo $word;
            echo nl2br("\n");
        }
        ?>
      </a></li>
      </ul>
    </div>
  </div>

<div id="footer">
  <div class="container">
      <div class="content"><h3>Contact</h3><p>Call:+358....<br>Email:xparux@gmail.com</p></div>
      <div class="sns"><h3>Social Media</h3><p></p></div>
      <div class="copyright"><h3>&copy; 2017 Ryoichi Sakagami.</h3><p></p></div>
  </div>
</div>
  </body>
</html>
