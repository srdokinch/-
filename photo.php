<!DOCTYPE html>
<html>
  <head>
    <title>TagCanvas example</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fuck.css">
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
            depth: 0.8 ,
            maxSpeed: 0.05,
            outlineColour : 'rgb(222, 205, 185)',
            imageScale: 0.18
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
$word = 'Great Otaru canal';
$word2 = 'Beautiful Mt.Tengu';
$word3 = 'Otaru aquarium soft';
$word4 = 'Lovely wind chime';
$word5 = 'Nice townscape';
$word6 = 'Stunning night view';
$word7 = 'Wonderful street in Otaru';
$word8 = 'Beautoful snow bowl';
$word9 = 'Rickshaw is nice';
$word10 = 'Nice sunset at Otaru';

?>
    <div id="myCanvasContainer">
      <canvas width="600" height="600" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags">
      <ul>
        <li><a href="https://www.flickr.com/photos/everyphoto/2544725556/in/photolist-4SSofy-gWfpiA-4T5Wbr-WavNRn-9GDDkN-8rYvL5-cCejw3-pTzFfW-eNXPfi-gWb4nw-iUS5Bw-8bLnBP-9GQibp-eNXPrr-pTAySq-cCeimG-eNXQcc-eNXPNM-2LGYY-cCeixh-8rYAfU-eNXP3R-2dfH9-gWfph5-C7KedS-Z9yVUG-Y9nuiB-ePacSS-4Srnca-dcXcav-8rVxMP-gWfmEj-ePad5C-YPYme5-ePadhb-cCeiL9-8SrkLG-4C8Dzd-9c9rMD-8rYwLd-8rYu33-Y9ntKx-MCec3S-8rVuj4-8rYyuQ-ov1ZUr-8rYy7s-V8wpj2-Z9yUuY-eNXN4a"><img src="img/word3.jpg"></a></li>
          <li><a href="https://www.flickr.com/photos/shantibasauri/8093205969/in/photolist-dkaNaX-W64uHJ-jYpTen-csKD9b-5ZmHmb-9QcyYr-6ESF1u-QUNDMZ-RXRreD-EEemVQ-Xxm2UQ-qKwH5s-pxUtrU-brFthK-qhCQGx-a4qaVz-pw8guA-5aga3B-PvaDus-xQ6Gvg-qotvSf-rp5TbT-k9373G-F7PgGK-yC67RQ-Skbsuo-xVboEZ-NqUu8s-Ga6X3m-yGGGiL-M4Y3ch-QGGD11-EEenXQ-TySKcH-WUqazJ-NqUsmm-4FyFcc-95RjvH-qvUd5W-nAxunu-PfRVfK-D49YmF-pR6KPR-weTvBJ-ExzsJe-NZLHFD-Q2d8Sk-fvY9xn-QzwYg9-WS26qM"><img src="img/word9.jpg"></a></li>
            <li><a href="https://www.flickr.com/photos/jjying/4941756249/in/photolist-NT6imv-8jcCrb-geA4xu-21Hzcnq-StNom3-bqZSRB-dVRGbQ-qXU1P8-L6qJLL-TqjBRc-rrcy5t-aC4dcd-d9Zkwj-ZXDamM-a4o6Ye-6VbDRg-6mBL2t-dUmkQ-azr868-WD8Byu-bYBGj-PvaDUW-xEbGVQ-9QcLnP-6VrWbH-eXLgFK-dZxhdp-rpkbGH-HgAL8f-GzfTMr-PPfReM-rdMxNJ-Pbmtws-r54s8r-4nDQaM-w1pYvP-RF9uqr-duTWg5-H97rHK-nM6yUc-Gdd9RJ-8wFMXX-yZ8hMd-EEQ8o8-qqPiTn-fzXCUg-kbk1a2-GcssqS-cN2YCw-gSNVEN"><img src="img/word10.jpg"></a></li>
          <li><a href="https://www.flickr.com/photos/sasakei/3274508678/in/photolist-5ZmHmb-9QcyYr-6ESF1u-QUNDMZ-RXRreD-EEemVQ-Xxm2UQ-qKwH5s-pxUtrU-brFthK-qhCQGx-a4qaVz-pw8guA-5aga3B-PvaDus-xQ6Gvg-qotvSf-rp5TbT-k9373G-F7PgGK-yC67RQ-Skbsuo-xVboEZ-NqUu8s-Ga6X3m-yGGGiL-M4Y3ch-QGGD11-EEenXQ-TySKcH-WUqazJ-NqUsmm-4FyFcc-95RjvH-qvUd5W-nAxunu-PfRVfK-D49YmF-pR6KPR-weTvBJ-ExzsJe-NZLHFD-Q2d8Sk-fvY9xn-QzwYg9-WS26qM-6XFe2a-GzfUkk-RtCEud-D5YFey"><img src="img/word8.jpg"></a></li>
          <li><a href="https://www.flickr.com/photos/ee770503/15651836955/in/photolist-pR6KPR-21tsjgh-pwETn9-9i7T9L-9cA1G8-6MDR8q-78ZnrT-738ftW-crMtaN-6L5C8q-58LMq2-9CKpPw-7mBy9k-5Zyif1-Tkuh1-4tRvef-6Va3EU-2HCCzG-4B4J8e-Wsb1xw-5p5rdP-5Z8ygm-2konnn-7ghq4o-4B6XZ-5p5pWB-FELSQu-5p5q2c-6revY-BScP7-cMTfHY-BScMb-2DAHnv-5p5qhc-5SdSHB-5p9G6G-jE7HXt-2mg8LD-cMTfhN-5p5qEM-5SFvtR-5p9GLC-cMTg8h-8mJVb5-5p9G9h-TkuFm-5p9FWu-4tRvWS-5p5qNe-5p5qk8"><img src="img/word4.jpg"></a></li>
            <li><a href="https://www.flickr.com/photos/ee770503/15251510419/in/photolist-peHYGc-dkaNaX-W64uHJ-jYpTen-csKD9b-5ZmHmb-9QcyYr-6ESF1u-QUNDMZ-RXRreD-EEemVQ-Xxm2UQ-qKwH5s-pxUtrU-brFthK-qhCQGx-a4qaVz-pw8guA-5aga3B-PvaDus-xQ6Gvg-qotvSf-rp5TbT-k9373G-F7PgGK-yC67RQ-Skbsuo-xVboEZ-NqUu8s-Ga6X3m-yGGGiL-M4Y3ch-QGGD11-EEenXQ-TySKcH-WUqazJ-NqUsmm-4FyFcc-95RjvH-qvUd5W-nAxunu-PfRVfK-D49YmF-pR6KPR-weTvBJ-ExzsJe-NZLHFD-Q2d8Sk-fvY9xn-QzwYg9"><img src="img/word7.jpg"></a></li>
            <li><a href="https://www.flickr.com/photos/photo-bear/4856418552/in/photolist-8p9q3m-oRxgvh-4ZNaFD-p8ZJuw-dVTuw1-dUtbCD-peHYGc-23to49-p6YmH3-agq8zj-VjQ9yb-Tjc9V-5wa3n-c93MnA-oRxgEq-3r3ppM-4ETZB1-oRxcoC-kUn6HG-6obkUR-9prwbE-oRxcfw-f4Apw6-dtdLd5-oRxcgJ-9iAs7V-755zHQ-5g52Sx-4YHgFY-sjsEf-JADVJ-EyZKG-dkHMx3-dkHLKm-2kpDjP-4tLLzi-8nU8ai-8np3WP-FvAzq-3cFfgk-3r84nw-3r85jG-6njs9E-p6Z5EQ-6MDR8q-TkrQ3-3r7Wp9-2LcrH3-7uBsb7-xa1mV"><img src="img/word5.jpg"></a></li>
              <li><a href="https://www.flickr.com/photos/photo-bear/4856418552/in/photolist-8p9q3m-oRxgvh-4ZNaFD-p8ZJuw-dVTuw1-dUtbCD-peHYGc-23to49-p6YmH3-agq8zj-VjQ9yb-Tjc9V-5wa3n-c93MnA-oRxgEq-3r3ppM-4ETZB1-oRxcoC-kUn6HG-6obkUR-9prwbE-oRxcfw-f4Apw6-dtdLd5-oRxcgJ-9iAs7V-755zHQ-5g52Sx-4YHgFY-sjsEf-JADVJ-EyZKG-dkHMx3-dkHLKm-2kpDjP-4tLLzi-8nU8ai-8np3WP-FvAzq-3cFfgk-3r84nw-3r85jG-6njs9E-p6Z5EQ-6MDR8q-TkrQ3-3r7Wp9-2LcrH3-7uBsb7-xa1mV"><img src="img/word6.jpg"></a></li>
        <li><a href="https://www.flickr.com/photos/37195641@N03/8375070241/in/photolist-C3f6k6-pbwW3y-2JMbfw-dL5qAM-dXEnT6-USJ68R-dV2FoY-dUN9P7-daigdh-TDbaJT-jE2ciS-6aX8Fx-4xnWjq-4xiJrF-4xiJRa-hXTynv-jDZXyD-YWZvwz-4xnUSf-5tcUz4-4xnVSJ-4xiJGi-4xiKjn-4xiKqF-YJqcFZ-VUAx2L-VUAx1o-VUAx3Y-ofsu2t-4xiJW8-4xnVgS-daiaoJ-bpUVD8-4xnVYw-aA7ywk-YWZvy8-anBD9k-icMwcX-4xiJaF-6SmXSm-bAi4Wr-dqSEHM-8k5BDh-4xiHUv-5TszZt-qRBZH-WrfBFW-4xiJP6-6Dz7iC-4xiHWt"><img src="img/word2.jpg"></a></li>
        <li><a href="https://www.flickr.com/photos/90309606@N02/12793845895/in/photolist-kuxNDV-kwfAF8-YftCta-21yZbTq-VDXeHN-pPkMsH-qtGnWZ-psBYiP-qpp6s5-9Wz9B2-22dUwuv-jUBp-sr5eS2-UETAGc-X2Q8Xo-kCdLa-qtyuw1-qVWCG6-9q3LhP-21rBGkm-21HucSC-rjFyNw-nD8h7A-SnfL8Z-pttB1s-qURHx4-f1aW7a-8cEz2L-WUqazJ-ZroAKA-9QczT6-nfJJhU-qvUd5W-pddkGK-VNE1Yb-CvDS2e-8ADx9P-o9ZdDw-XWyNJi-nJugBH-U65XqG-8myycr-92xMfJ-SM1v3F-niVb3-VTtDzX-duU14o-riQMcX-WWjQie-92xBnw"><img src="img/word.jpg"></a></li>
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
