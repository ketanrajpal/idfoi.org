
<footer>
  <ul class="clear">
    <li><a href="../"><img src="../img/logo.gif" class="logo"></a>
    </li>
    <li>
      <h1>&copy; copyright 2015 India Development Foundation of Overseas Indians <br> An initiative of the Ministry of Overseas Indian Affairs <img src="../img/logo_moia.gif" id="moia"></h1>
    </li>
  </ul>
  <div style="color:#666;font-size:14px;padding-top:15px;display:block;text-align:center">
    
    
    
    <?php
	$filename;
	if($page=="home")
	{
		$filename="counter.txt";
	}
	else
	{
		$filename="../counter.txt";
	}
	$handle = fopen($filename,"r");
	$counter=fread($handle,1000);
	fclose ($handle);
	$counter++;
	?><strong style="font-weight:500;color:#F00">Visitor <?php echo $counter; ?></strong><?php
	$handle = fopen($filename,"w");
	fwrite($handle,$counter);
	fclose ($handle) ;
	?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Updated on:&nbsp;&nbsp;<span class="fa fa-calendar"></span> <strong style="font-weight:500;">12 January, 2016</strong>
    
    
    
    </div>
  
</footer>
<script src="../js/lightbox.js"></script>