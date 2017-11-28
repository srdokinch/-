<!DOCTYPE html>
<html>
  <head>
    <title>TagCanvas example</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="tagcanvas.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{
            textColour: '#ff0000',
            outlineColour: '#ff00ff',
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
    <?php

    //ファイルを開く
    //モード[r]の読み込み専用
    if (! ($fp = fopen ( "list.txt", "r" ))) {
       echo "ファイルが開けません。";
    }

    //ファイルの読み込みと表示
    //１行ずつファイルを読み込んで、表示する。
    while (! feof ($fp)) {
       $load = fgets ($fp, 4096);
       echo $load;
    }
    //ファイルを閉じる
    fclose ($fp)

    ?>
    <h1>TagCanvas example page</h1>
    <div id="myCanvasContainer">
      <canvas width="600" height="600" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags">
      <ul>
        <li><a href="https://www.flickr.com/photos/juhoholmi/34597019733/in/photolist-UHdLCe-RJJWCT-qnA7Cy-rRhvRD-ARb4RX-TF2cmD-RF8Lkp-SQ1upT-D4o6NK-F2apgE-ZmsFPU-ZVuqSS-Kv1HCU-CzmHQq-213mEGz-TUdewr-DBvPLf-drEcgx-ZsNUkt-YaQwSy-THjd7f-LZ628w-SGJgk1-ZkNUen-T7G2fb-wtu4TA-TRNobx-rhNCP3-rQoDEi-zs2fAx-s2KSbt-Gs5frK-rSYJq5-TiavkQ-VAUiWp-VWK7DE-FSZLHS-U5yhhm-USm9CA-z5YSkT-NkLwYu-QrfHn3-pN4GmE-H85zhK-QxRbo2-MR67Gy-EnrnfE-TRNJzG-rbMvxB-HKNrbQ"><img src="img/sample4.jpg"></a></li>
        <li><a href="https://www.flickr.com/photos/xaanoca/25606245924/in/photolist-F1JGNG-FC5D9J-KQd2kn-H6RHQc-wK7qFD-AURkSd-e14BGv-rvy7F2-sfzAKp-qpntrn-Tq6F7b-DGB7a8-V3vM5q-qnKUVc-upsuCE-F95sJC-rjuP9p-ZkmSzT-WJqSiq-xZUtSV-YWsGb8-S3DNwm-FQhCqn-z9eXZY-pNKt9B-tJjXru-AhV1ue-V32frD-THKzie-UeC4N8-UHdLCe-RJJWCT-qnA7Cy-rRhvRD-ARb4RX-TF2cmD-RF8Lkp-SQ1upT-D4o6NK-F2apgE-ZmsFPU-ZVuqSS-Kv1HCU-CzmHQq-213mEGz-TUdewr-DBvPLf-drEcgx-ZsNUkt-YaQwSy"><img src="img/sample.jpg"></a></li>
        <li><a href="https://www.flickr.com/photos/54100950@N02/22219243620/in/photolist-zRrr2f-QQFbBb-qDhUVZ-F1JGNG-FC5D9J-KQd2kn-H6RHQc-wK7qFD-AURkSd-e14BGv-rvy7F2-sfzAKp-qpntrn-Tq6F7b-DGB7a8-V3vM5q-qnKUVc-upsuCE-F95sJC-rjuP9p-ZkmSzT-WJqSiq-xZUtSV-YWsGb8-S3DNwm-FQhCqn-z9eXZY-pNKt9B-tJjXru-AhV1ue-V32frD-THKzie-UeC4N8-UHdLCe-RJJWCT-qnA7Cy-rRhvRD-ARb4RX-TF2cmD-RF8Lkp-SQ1upT-D4o6NK-F2apgE-ZmsFPU-ZVuqSS-Kv1HCU-CzmHQq-213mEGz-TUdewr-DBvPLf"><img src="img/sample2.jpg"></a></li>
        <li><a href="https://www.flickr.com/photos/juhoholmi/25689316304/in/photolist-F95sJC-rjuP9p-ZkmSzT-WJqSiq-xZUtSV-YWsGb8-S3DNwm-FQhCqn-z9eXZY-pNKt9B-tJjXru-AhV1ue-V32frD-THKzie-UeC4N8-UHdLCe-RJJWCT-qnA7Cy-rRhvRD-ARb4RX-TF2cmD-RF8Lkp-SQ1upT-D4o6NK-F2apgE-ZmsFPU-ZVuqSS-Kv1HCU-CzmHQq-213mEGz-TUdewr-DBvPLf-drEcgx-ZsNUkt-YaQwSy-THjd7f-LZ628w-SGJgk1-ZkNUen-T7G2fb-wtu4TA-TRNobx-rhNCP3-rQoDEi-zs2fAx-s2KSbt-Gs5frK-rSYJq5-TiavkQ-VAUiWp"><img src="img/sample3.jpg"></a></li>
        <li><a href="https://www.flickr.com/photos/tlindfors/34524316660/in/photolist-UAN9wY-UmWuE7-zXYJi3-sAsGXB-sjksiX-fMn7T-zZqfto-BNqSZG-DFs72u-SrdUXR-UdsB13-KTCeC2-w5kEUb-vFw7sG-SK77wP-xn5Mdq-RKkfiX-sSfpTV-RQ9YY5-UxqSeP-FKCNSS-GBSmWc-QKLsrb-DboYqM-SXoibu-rt55W9-LvAwMP-ReznQE-smPeQV-rmpix3-QCmh36-JeDKBd-CyH9y3-PFHH7S-U7JGaW-UbzQRN-TwFh4F-RsES4z-VC3ti4-Gp1qhF-zNqWU5-SRRNBj-riM6Cx-rEDyXr-SP3fMc-YpU5XX-LFjs66-Gbtd8P-pjfkJd-UZSZcE"><img src="img/sample5.jpg"></a></li>
      </ul>
    </div>
  </body>
</html>
