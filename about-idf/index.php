<?php
ob_start();
$page="about-idf";
$slug=$_GET["slug"];
?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once("../inc/head.php"); ?>
</head>
<body>
<?php require_once("../inc/header.php"); ?>
<section id="content" class="clear">
  <article>
    <?php if($slug=="mandate"){ ?>
    <h1>Mandate</h1>
    <p>IDF-OI is presently promoting Government of  India&rsquo;s flagship programmes- Swachh Bharat and National Mission for Clean  Ganga. <br><br>
The Swachh Bharat Mission (Clean India  Mission), a national campaign by the Government of India, aims to accomplish  the vision of a 'Clean India' by October 2, 2019, the 150th birthday of Mahatma  Gandhi. Similarly, the National Mission for Clean Ganga aims to integrate the  efforts to clean and protect the river Ganga.<br><br>
IDF-OI is also partnering with the State Govts  to select projects identified by the State Governments and seek overseas  Indians&rsquo; engagement with these projects.
<br>
  <br>Objectives of the Trust:
</p>
    <ul class="list">
      <li>Lead overseas Indian philanthropy into India.</li>
      <li>Establish and maintain a 'Social Capital and Philanthropy Network' in India that can provide a list of credible institutions, projects and programmes.</li>
      <li>Partner with States in India and encourage credible Indian philanthropic organisations</li>
      <li>Promote accountability and 'good practices' in Diaspora philanthropy.</li>
    </ul>
    <?php }else if($slug=="chairpersons-profile"){ ?>
    <h1>Chairperson&rsquo;s Profile</h1>
    <img src="../img/sushma_swaraj.jpg" class="chairperson">
    <h3>Sushma Swaraj</h3>
    <h4>Minister of External Affairs</h4>
    <p>Sushma Swaraj, Minister of External Affairs, was born on 14 February 1952 in Ambala, Haryana. She has been elected seven times as a Member  of Parliament and three times as a Member of the Legislative Assembly. She is an Advocate by profession and educated at S.D.College, Ambala Cantt (Haryana) and Department of Laws, Panjab University, Chandigarh<br><br><strong>Political Career:</strong><br>Mrs Sushma Swaraj began her political career with the Akhil Bharatiya Vidyarthi Parishad in the 1970s. She became a member of the Haryana Legislative Assembly and a Cabinet Minister in Haryana at the age of 25 in 1977 and held 7 portfolios. She became State President of Janata Party (Haryana) in 1979, when she was 27. She was Education Minister, Haryana in the Bharatiya Janata Party-Lok Dal coalition government during 1987-90.<br><br>In April 1990, she was elected as a Member of the Rajya Sabha and remained there until she was elected to the 11th Lok Sabha from South Delhi constituency in 1996. She was Union Cabinet Minister for Information and Broadcasting in the first Atal Bihari Vajpayee
 Government in 1996. She was re-elected to 12th Lok Sabha from South Delhi Parliamentary constituency for a 2nd term in 1998. In the second Vajpayee Government, she was sworn in as Cabinet Minister for Information and Broadcasting with additional charge of the Ministry of Telecommunications from 19 March to 12 October 1998. She resigned from the Union Cabinet to take over as the first woman Chief Minister of Delhi in October 1998.<br><br>She resigned her Assembly seat to return to national politics and was Minister for Information &amp; Broadcasting from September 30, 2000 to January 29, 2003 and Minister of Health &amp; Family Welfare and Parliamentary Affairs from January 2003 until May 2004.<br><br>Mrs Swaraj was re-elected to the Rajya Sabha in April 2006 from Madhya Pradesh. She served as the Deputy Leader of BJP in Rajya Sabha till April 2009. She won the 2009 election to the 15th Lok Sabha from the Vidisha Lok Sabha constituency in Madhya Pradesh and became Leader of Opposition in the 15th Lok Sabha on 21 December 2009 and retained this position till May 2014. She has been re-elected to 16th Lok Sabha from Vidisha in 2014.<br><br><strong>Smt. Swaraj has held following positions during her political career:</strong></p>
<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
<thead>
</thead>
<tbody>
<tr>
<td valign="top">1992-94 </td>
<td valign="top">Chairperson, Joint Committee on Catering<br />
Member, Committee on Government Assurances, Rajya Sabha</td>
</tr>
<tr>
<td valign="top">1994-96 </td>
<td valign="top">Chairperson, Committee on Petitions, Rajya Sabha</td>
</tr>
<tr>
<td valign="top">1996-98</td>
<td valign="top">Member, Committee on Defence <br />
Chairperson, Sub-Committee on Upgradation and Modernisation of Naval Fleet<br />
Member, Committee of Privileges</td>
</tr>
<tr>
<td valign="top">Aug 2004-2009</td>
<td valign="top">Chairperson, Committee on Home Affairs, Rajya Sabha<br />
Member, Business Advisory Committee, Rajya Sabha<br />
Member, General Purposes Committee, Rajya Sabha</td>
</tr>
<tr>
<td valign="top">Sep 2004-2009</td>
<td valign="top">Member, Ethics Committee, Rajya Sabha</td>
</tr>
<tr>
<td valign="top">Oct 2004-2009</td>
<td valign="top">Member, Consultative Committee, Ministry of Defence</td>
</tr>
<tr>
<td valign="top">May 2006-2009</td>
<td valign="top">Member, Parliamentary Forum on Population and Public Health</td>
</tr>
<tr>
<td valign="top">May 2008-2009</td>
<td valign="top">Member, House Committee, Rajya Sabha</td>
</tr>
<tr>
<td valign="top">31 Aug 2009- 1 Jan 2010</td>
<td valign="top">Chairperson, Standing Committee on External Affairs</td>
</tr>
<tr>
<td valign="top">23 Sep 2009-</td>
<td valign="top">Member, Rules Committee</td>
</tr>
<tr>
<td valign="top">07 Oct. 2009 -</td>
<td valign="top">Member, Committee on Ethics</td>
</tr>
<tr>
<td valign="top">21 Dec 2009 - 18 May 2014 </td>
<td valign="top">Leader of Opposition, Lok Sabha</td>
</tr>
</tbody>
</table>
<br><br>
<p><strong>Personal Life:</strong><br>Sushma Swaraj is married to Swaraj Kaushal, a senior advocate of Supreme Court of India and a criminal lawyer who served as Governor of Mizoram from 1990 to 1993. Swaraj Kaushal was a Member of Parliament from 1998 to 2004. They have a daughter, Bansuri, who is a graduate from Oxford University and a Barrister at Law from Inner Temple</p>

    <?php }else if($slug=="board-of-trustees"){ ?>
    
    
    <?php
	function getdata($slug){
   		$xml=simplexml_load_file("bot.xml");
		foreach($xml->children() as $member){
			if($member->group==$slug){ ?>
      <li class="board-detailed"> <img src="../img/board-of-trustees/<?php echo $member->slug; ?>.jpg" class="bot">
        <div class="profile_div">
          <h3><?php echo $member->name; ?></h3>
          <h4><?php echo $member->designation; ?></h4>
          <span data-id="#<?php echo $member->slug; ?>_detailed" class="open_detailed fa fa-chevron-circle-right"></span> </div>
        <div class="detailed" id="<?php echo $member->slug; ?>_detailed"> <img src="../img/close-detailed.png" class="close" data-id="#<?php echo $member->slug; ?>_detailed"> <img src="../img/board-of-trustees/<?php echo $member->slug; ?>.jpg" class="bot">
          <div class="profile_div">
            <h3><?php echo $member->name; ?></h3>
            <h4><?php echo $member->designation; ?></h4>
            <p><?php echo $member->content; ?></p>
          </div>
        </div>
      </li>
      <?php }
		}}?>
    
    
    <div class="profile_bg"></div>
    <h1 class="main-heading">Board of Trustees</h1>
    <h2>Chairperson</h2>
    <ul class="board-of-trustees clear">
      <?php getdata("chairperson"); ?>
    </ul>
    <!--<h2>Vice Chairman</h2>
    <ul class="board-of-trustees clear">
      <?php getdata("vice-chairman"); ?>
    </ul>-->
    <h2>Ex-Officio Members</h2>
    <ul class="board-of-trustees clear">
     <?php getdata("official-members-ex-officio"); ?>
    </ul>
    <h2>Eminent Overseas Indians</h2>
    <ul class="board-of-trustees clear">
      <?php getdata("eminent-overseas-indians"); ?>
    </ul>
    <h2>Eminent Resident Indians</h2>
    <ul class="board-of-trustees clear">
      <?php getdata("eminent-resident-indians"); ?>
    </ul>
    <h2>CEO</h2>
    <ul class="board-of-trustees clear">
      <?php getdata("ceo"); ?>
    </ul>
    <script>
     $(".open_detailed").click(function(){
		 
		 var slug=$(this).attr("data-id");
		 $(".profile_bg").fadeIn("fast");
		 $(slug).fadeIn("slow");
		 
		 $(body).css("opacity",0.5);
		 
	 });
	 
	 $(".close").click(function(){
		 
		 var slug=$(this).attr("data-id");
		 
		 $(slug).fadeOut("fast");
		 $(".profile_bg").hide();
		 
     });
	 
	 $(document).ready(function(){

	var x=$(window).height();
	var y=$(window).width();
	var imgy=940;
	var finy=y-imgy;	
	$(".detailed").css({
		left: finy/2
	});
	
	$(".profile_bg").height(x);
	$(".profile_bg").width(y);
	
});
	 
    </script>
    <?php }else if($slug=="projects-funded"){ ?>
    <h1>Projects Funded</h1>
    
    <p>Since 2011, IDF-OI facilitated contributions from overseas Indians for social development projects in:</p>
    
    <ul class="list">
     <li>Water conservation & rainwater harvesting</li>
     <li>Educating and mainstreaming differently abled children</li>
     <li>Women's education</li>
     <li>States in which projects were funded: Assam, Rajasthan and Gujarat</li>
    </ul>
 
 <p>Focus was on: Donor advised projects</p>
    
    <?php }else{ ?>
    <h1>About IDF-OI<span>Causes. Champions. Change.</span></h1>
    <p>India Development Foundation of Overseas Indians (IDF-OI) is a not-for-profit trust registered under Government of India established to serve as a credible institutional avenue to enable overseas Indians to engage in philanthropy to supplement India's social and development efforts. IDF-OI channelises the philanthropic propensities and resources of the overseas Indian community into national development and social projects. Trust is chaired by Smt. Sushma Swaraj, Minister of External Affairs. The Trust is exempt from the provisions of Foreign Contribution Regulation Act (FCRA), 2010.<br><br>In 2015-16, IDF OI will focus its efforts on enhancing Diaspora's contribution to India's social & development programme and increase outreach to the Indian Diaspora. It will enhance engagement with overseas Indians and increase the number and variety of projects. IDF-OI will partner with the Government of India's flagship initiatives like the Swachh Bharat and Namami Gange and facilitate overseas Indian philanthropy into these projects. IDF-OI will also partner with the State Govts to select projects identified by the State Governments and seek overseas Indians' engagement with these projects.<!--
<br><br><a href="../brochure.pdf" target="_blank" style="font-size:16px">Download IDF-OI brochure</a>--></p>
    <?php } ?>
  </article>
  <article>
    <?php require_once("../inc/widget.php"); ?>
  </article>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>
