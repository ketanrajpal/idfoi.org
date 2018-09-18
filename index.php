<?php
$page="home";
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("inc/head.php"); ?>
</head>
<body>
<?php require_once("inc/header.php"); ?>
<section id="content" class="clear">
  <article>
   <h1>In India's growth story,<span>You write the next chapter.</span></h1>
   <p>India Development Foundation of Overseas Indians (IDF-OI) is a not-for-profit trust registered by the Ministry of Overseas Indian Affairs, Government of India, to provide a credible window for Overseas Indian Philanthropy in India&rsquo;s Social Development. [<a href="../about-idf">Read More</a>]</p>
   <br><br>
  
  <h5>Photo Gallery</h5>
  <ul id="home_tabs">
  <li>
    <a href="../documents/press-release-5-meeting.pdf" class="clear" target="_blank">
     <img src="img/5-board-meeting.jpg" width="100%">
     <div>
      <p>Smt. Sushma Swaraj, Hon'ble Minister of Overseas Indian Affairs Chairs the Fifth Board Meeting of IDF-OI on 5 December 2015 in Delhi</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
  <li>
    <a href="../media-corner/photo-gallery" class="clear" target="_blank">
     <img src="img/gallery/dubai_1.jpg" width="100%">
     <div>
      <p>Vice Chairman, IDF-OI and Secretary, Ministry of Overseas Indian Affairs, addressing members of Indian Community at IDF-OI outreach event in Dubai, 16 October 2015 at Consulate General of India, Dubai.</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
   <li>
    <a href="../media-corner/photo-gallery" class="clear" target="_blank">
     <img src="img/gallery/dubai_2.jpg" width="100%">
     <div>
      <p>Vice Chairman, IDF-OI and Secretary, Ministry of Overseas Indian Affairs, interacting with the members of Indian Community at IDF-OI outreach event in Dubai, 16 October 2015 at Consulate General of India, Dubai</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
   <li>
    <a href="../media-corner/photo-gallery" class="clear" target="_blank">
     <img src="img/gallery/dubai_3.jpg" width="100%">
     <div>
      <p>CEO, IDF-OI and Joint Secretary (FS), MOIA, addressing members of Indian Community in Dubai on 16 October 2015</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
   <li>
    <a href="../media-corner/photo-gallery" class="clear" target="_blank">
     <img src="img/gallery/dubai_4.jpg" width="100%">
     <div>
      <p>CEO, IDF-OI and Joint Secretary (FS), MOIA, interacting with the members of Indian Community in Dubai on 16 October 2015</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
   <li>
    <a href="../media-corner/photo-gallery" class="clear" target="_blank">
     <img src="img/gallery/1_thumb.jpg" width="100%">
     <div>
      <p>Interaction of Vice Chairman IDF OI and Secretary, MOIA, with the members of Indian Community at Indian Social and Cultural Center, Abu Dhabi, 14 October 2015.</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
   <li>
    <a href="../media-corner/photo-gallery" class="clear" target="_blank">
     <img src="img/gallery/2_thumb.jpg" width="100%">
     <div>
      <p>Vice Chairman, IDF OI and Secretary, MOIA, addressing members of Indian Community at Indian Social and Cultural Center, Abu Dhabi on 14 October 2015</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
   <li>
    <a href="../media-corner/photo-gallery" class="clear" target="_blank">
     <img src="img/gallery/7_thumb.jpg" width="100%">
     <div>
      <p>Vice Chairman, IDF OI and Secretary, MOIA, interacting with the members of Indian Association Sharjah, UAE, 16 October 2015. Photo Credits: K Vashukkur</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
   <li>
    <a href="../media-corner/photo-gallery" class="clear" target="_blank">
     <img src="img/gallery/8_thumb.jpg" width="100%">
     <div>
      <p>CEO, IDF-OI and Joint Secretary (FS), MOIA, addressing members of Indian Association Sharjah, UAE on 16 October 2015. Photo Credits: K Vashukkur</p>
      <h6><span class="fa fa-chevron-circle-right"></span></h6>
     </div>
    </a> 
   </li>
   <!--<li>
    <a href="../media-corner/india-inspired">
    <div>
     <h5>India Inspired</h5>
     <p>$1mn gift for Nalanda chair- NRI couple come up with more funds than many countries</p>
     <h6><span class="fa fa-chevron-circle-right"></span></h6>
    </div>
     <img src="img/home-2.jpg" width="100%">
    </a> 
   </li>-->
  </ul>
  <!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <center>
 <a href="https://swachhbharaturban.gov.in/ISNAHome.aspx" target="_blank"><img src="../home-logo-1.jpg" style="height:100px;border:2px solid #ededed;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="https://nmcg.nic.in/" target="_blank"><img src="../home-logo-2.jpg" style="height:100px;border:2px solid #ededed;"></a>
</center>-->
  
  <script>
$(document).ready(function(){
  $('#home_tabs').bxSlider({auto:false,captions:false,pager:false,mode:'fade',infiniteLoop:false,hideControlOnEnd:true});
});
  
  
   //$("#home_tabs li a").hover(function(){
	
	//$(this).children("div").slideToggle("fast");
	   
   //});
  </script>
  
  
  
  </article>
  <article>
   <?php require_once("inc/widget.php"); ?>
  </article>
</section>
<?php require_once("inc/footer.php"); ?>
</body>
</html>
