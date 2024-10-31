<?php
if(basename($_SERVER["PHP_SELF"]) == "rankings.php"){
	die("Access denied.");
}
?>
	<?php
if (isset($_GET['start'])) {
	if ($_GET['start'] >= 0 && $_GET['start'] <= 90) {
		$start = ($_GET['start']);
	} else {
		die("Input not allowed.");
	}
} else {
	$start = 0;
}
?>
<center>
<div class="well well2" style="margin: 10 auto; display: inline-block;margin-right:10px;">
 <center>Cygnus Knights</center>
	<img src="../images/rank/Dawn Warrior.png" data-toggle="tooltip" title="Dawn Warrior"/></a>
	<img src="../images/rank/Blaze Wizard.png" data-toggle="tooltip" title="Blaze Wizard"/></a>
	<img src="../images/rank/Wind Archer.png" data-toggle="tooltip" title="Wind Archer"/></a>
	<img src="../images/rank/Night Walker.png" data-toggle="tooltip" title="Night Walker"/></a>
	<img src="../images/rank/Thunder Breaker.png" data-toggle="tooltip" title="Thunder Breaker"/></a>
</div>
  <div class="well well2" style="margin: 10 auto; display: inline-block;margin-right:10px;">
  <center>Heroes</center>
	<img src="../images/rank/Aran.png" data-toggle="tooltip" title="Aran"/></a>
</div>
  <div class="well well2" style="margin: 10 auto; display: inline-block;margin-right:10px;">
	<center>Explorers</center>
	<img src="../images/rank/Beginner.png" data-toggle="tooltip" title="Beginner"/></a>
	<img src="../images/rank/Warrior.png" data-toggle="tooltip" title="Warrior"/></a>
	<img src="../images/rank/Magician.png" data-toggle="tooltip" title="Magician"/></a>
	<img src="../images/rank/Archer.png" data-toggle="tooltip" title="Bowman"/></a>
	<img src="../images/rank/Thief.png" data-toggle="tooltip" title="Thief"/></a>
	<img src="../images/rank/Pirate.png" data-toggle="tooltip" title="Pirate"/></a>
	</div>
</center>
<center>

<?php 
$jobs = array( 
  1000 =>'Noblesse', 
  1100 =>'Dawn Warrior', 
  1110 =>'Dawn Warrior', 
  1111 =>'Dawn Warrior', 
  1112 =>'Dawn Warrior', 
  1200 =>'Blaze Wizard', 
  1210 =>'Blaze Wizard', 
  1211 =>'Blaze Wizard', 
  1212 =>'Blaze Wizard', 
  1300 =>'Wind Archer', 
  1310 =>'Wind Archer', 
  1311 =>'Wind Archer', 
  1312 =>'Wind Archer', 
  1400 =>'Night Walker', 
  1410 =>'Night Walker', 
  1411 =>'Night Walker', 
  1412 =>'Night Walker', 
  1500 =>'Thunder Breaker', 
  1510 =>'Thunder Breaker', 
  1511 =>'Thunder Breaker', 
  1512 =>'Thunder Breaker', 
  2000 =>'Legend',
  2001 =>'Farmer',
  2002 =>'Elf',  
  2003 =>'Miser',
  2100 =>'Aran', 
  2110 =>'Aran', 
  2111 =>'Aran', 
  2112 =>'Aran',
  2200 =>'Evan',
  2210 =>'Evan',
  2211 =>'Evan',
  2212 =>'Evan',
  2213 =>'Evan',
  2214 =>'Evan',
  2215 =>'Evan',
  2216 =>'Evan',
  2217 =>'Evan',
  2218 =>'Evan',
  2300 =>'Mercedes',
  2310 =>'Mercedes',
  2311 =>'Mercedes',
  2312 =>'Mercedes',
  2400 =>'Phantom',
  2410 =>'Phantom',
  2411 =>'Phantom',
  2412 =>'Phantom',
  2700 =>'Luminous',
  2710 =>'Luminous',
  2711 =>'Luminous',
  2712 =>'Luminous',
  3000 =>'Citizen',
  3100 =>'Demon Slayer',
  3110 =>'Demon Slayer',
  3111 =>'Demon Slayer',
  3112 =>'Demon Slayer',
  3101 =>'Demon Avenger',
  3120 =>'Demon Avenger',
  3121 =>'Demon Avenger',
  3122 =>'Demon Avenger',
  3200 =>'Battle Mage',
  3210 =>'Battle Mage',
  3211 =>'Battle Mage',
  3212 =>'Battle Mage',
  3300 =>'Wild Hunter',
  3310 =>'Wild Hunter',
  3311 =>'Wild Hunter',
  3312 =>'Wild Hunter',
  3500 =>'Mechanic',
  3510 =>'Mechanic',
  3511 =>'Mechanic',
  3512 =>'Mechanic',
  3600 =>'Xenon',
  3610 =>'Xenon',
  3611 =>'Xenon',
  3612 =>'Xenon',
  4100 =>'Hayato',
  4110 =>'Hayato',
  4111 =>'Hayato',
  4112 =>'Hayato',
  4200 =>'Kanna',
  4210 =>'Kanna',
  4211 =>'Kanna',
  4212 =>'Kanna',
  5100 =>'Mihile',
  5110 =>'Mihile',
  5111 =>'Mihile',
  5112 =>'Mihile',
  6100 =>'Kaiser',
  6110 =>'Kaiser',
  6111 =>'Kaiser',
  6112 =>'Kaiser',
  6500 =>'Angelic Buster',
  6510 =>'Angelic Buster',
  6511 =>'Angelic Buster',
  6512 =>'Angelic Buster',
  10000 =>'Zero',
  10110 =>'Zero',
  10111 =>'Zero',
  10112 =>'Zero',
  11200 =>'Beast Tamer',
  11210 =>'Beast Tamer',
  11211 =>'Beast Tamer',
  11212 =>'Beast Tamer',
  500 =>'Pirate', 
  510 =>'Brawler', 
  520 =>'Gunslinger', 
  511 =>'Marauder', 
  521 =>'Outlaw', 
  512 =>'Buccaneer', 
  522 =>'Corsair', 
  0 =>'Beginner', 
  100 =>'Warrior', 
  110 =>'Fighter', 
  120 =>'Page', 
  130 =>'Spearman', 
  111 =>'Crusader', 
  121 =>'White Knight', 
  131 =>'Dragon Knight', 
  112 =>'Hero', 
  122 =>'Paladin', 
  132 =>'Dark Knight', 
  200 =>'Magician', 
  210 =>'Fire/Poison Wizard', 
  220 =>'Ice/Lightning Wizard', 
  230 =>'Cleric', 
  211 =>'Fire/Poison Mage', 
  221 =>'Ice/Lightning Mage', 
  231 =>'Priest', 
  212 =>'Fire/Poison Arch Mage', 
  222 =>'Ice/Lightning Arch Mage', 
  232 =>'Bishop', 
  300 =>'Bowman', 
  310 =>'Hunter', 
  320 =>'Crossbowman', 
  311 =>'Ranger', 
  321 =>'Sniper', 
  312 =>'Bow Master', 
  322 =>'Crossbow Master', 
  400 =>'Thief', 
  410 =>'Assassin', 
  420 =>'Bandit', 
  411 =>'Hermit', 
  421 =>'Chief Bandit', 
  412 =>'Nights Lord', 
  422 =>'Shadower',
  430 =>'DualBlade',
  431 =>'DualBlade',
  432 =>'DualBlade',
  433 =>'DualBlade',
  434 =>'DualBlade',
  501 =>'Cannoneer',
  530 =>'Cannoneer',
  531 =>'Cannoneer',
  532 =>'Cannoneer',
  508 =>'Jett',
  570 =>'Jett',
  571 =>'Jett',
  572 =>'Jett',   
); 

$job = array( 
  1000 =>'<img src="./images/rank/noblesse.png">', 
  1100 =>'<img src="./images/rank/Dawn Warrior.png">', 
  1110 =>'<img src="./images/rank/Dawn Warrior.png">',
  1111 =>'<img src="./images/rank/Dawn Warrior.png">', 
  1112 =>'<img src="./images/rank/Dawn Warrior.png">', 
  1200 =>'<img src="./images/rank/Blaze Wizard.png">',  
  1210 =>'<img src="./images/rank/Blaze Wizard.png">', 
  1211 =>'<img src="./images/rank/Blaze Wizard.png">',  
  1212 =>'<img src="./images/rank/Blaze Wizard.png">',  
  1300 =>'<img src="./images/rank/Wind Archer.png">', 
  1310 =>'<img src="./images/rank/Wind Archer.png">', 
  1311 =>'<img src="./images/rank/Wind Archer.png">',  
  1312 =>'<img src="./images/rank/Wind Archer.png">',  
  1400 =>'<img src="./images/rank/Night Walker.png">', 
  1400 =>'<img src="./images/rank/Night Walker.png">',
  1411 =>'<img src="./images/rank/Night Walker.png">', 
  1412 =>'<img src="./images/rank/Night Walker.png">', 
  1500 =>'<img src="./images/rank/Thunder Breaker.png">', 
  1510 =>'<img src="./images/rank/Thunder Breaker.png">', 
  1511 =>'<img src="./images/rank/Thunder Breaker.png">', 
  1512 =>'<img src="./images/rank/Thunder Breaker.png">', 
  2100 =>'<img src="./images/rank/Aran.png">', 
  2110 =>'<img src="./images/rank/Aran.png">', 
  2111 =>'<img src="./images/rank/Aran.png">', 
  2112 =>'<img src="./images/rank/Aran.png">', 
  500 =>'<img src="./images/rank/Pirate.png">', 
  510 =>'<img src="./images/rank/Pirate.png">', 
  511 =>'<img src="./images/rank/Pirate.png">', 
  512 =>'<img src="./images/rank/Pirate.png">', 
  520 =>'<img src="./images/rank/Pirate.png">', 
  521 =>'<img src="./images/rank/Pirate.png">', 
  522 =>'<img src="./images/rank/Pirate.png">', 
  0 =>'<img src="./images/rank/Beginner.png">', 
  100 =>'<img src="./images/rank/Warrior.png">',
  110 =>'<img src="./images/rank/Warrior.png">',
  111 =>'<img src="./images/rank/Warrior.png">',
  112 =>'<img src="./images/rank/Warrior.png">',
  120 =>'<img src="./images/rank/Warrior.png">',
  121 =>'<img src="./images/rank/Warrior.png">',
  122 =>'<img src="./images/rank/Warrior.png">',
  130 =>'<img src="./images/rank/Warrior.png">',
  131 =>'<img src="./images/rank/Warrior.png">',
  132 =>'<img src="./images/rank/Warrior.png">',
  200 =>'<img src="./images/rank/Magician.png">', 
  210 =>'<img src="./images/rank/Magician.png">', 
  211 =>'<img src="./images/rank/Magician.png">', 
  212 =>'<img src="./images/rank/Magician.png">', 
  220 =>'<img src="./images/rank/Magician.png">', 
  221 =>'<img src="./images/rank/Magician.png">', 
  222 =>'<img src="./images/rank/Magician.png">', 
  230 =>'<img src="./images/rank/Magician.png">', 
  231 =>'<img src="./images/rank/Magician.png">', 
  232 =>'<img src="./images/rank/Magician.png">', 
  300 =>'<img src="./images/rank/Archer.png">', 
  310 =>'<img src="./images/rank/Archer.png">', 
  311 =>'<img src="./images/rank/Archer.png">', 
  312 =>'<img src="./images/rank/Archer.png">', 
  320 =>'<img src="./images/rank/Archer.png">', 
  321 =>'<img src="./images/rank/Archer.png">', 
  322 =>'<img src="./images/rank/Archer.png">', 
  400 =>'<img src="./images/rank/Thief.png">', 
  410 =>'<img src="./images/rank/Thief.png">', 
  411 =>'<img src="./images/rank/Thief.png">', 
  412 =>'<img src="./images/rank/Thief.png">', 
  420 =>'<img src="./images/rank/Thief.png">', 
  421 =>'<img src="./images/rank/Thief.png">', 
  422 =>'<img src="./images/rank/Thief.png">', 
  430 =>'<img src="./images/rank/Blade Master.png">', 
  431 =>'<img src="./images/rank/Blade Master.png">', 
  432 =>'<img src="./images/rank/Blade Master.png">', 
  433 =>'<img src="./images/rank/Blade Master.png">', 
  434 =>'<img src="./images/rank/Blade Master.png">', 
  2003 =>'<img src="./images/rank/Phantom.png">',
  2002 =>'<img src="./images/rank/Mercedes.png">', 
  2001 =>'<img src="./images/rank/Evan.png">', 
  2200 =>'<img src="./images/rank/Evan.png">', 
  2210 =>'<img src="./images/rank/Evan.png">', 
  2211 =>'<img src="./images/rank/Evan.png">', 
  2212 =>'<img src="./images/rank/Evan.png">', 
  2213 =>'<img src="./images/rank/Evan.png">', 
  2214 =>'<img src="./images/rank/Evan.png">', 
  2215 =>'<img src="./images/rank/Evan.png">', 
  2216 =>'<img src="./images/rank/Evan.png">', 
  2217 =>'<img src="./images/rank/Evan.png">', 
  2218 =>'<img src="./images/rank/Evan.png">', 
  2300 =>'<img src="./images/rank/Mercedes.png">', 
  2310 =>'<img src="./images/rank/Mercedes.png">', 
  2311 =>'<img src="./images/rank/Mercedes.png">', 
  2312 =>'<img src="./images/rank/Mercedes.png">', 
  2400 =>'<img src="./images/rank/Phantom.png">',
  2410 =>'<img src="./images/rank/Phantom.png">',
  2411 =>'<img src="./images/rank/Phantom.png">',
  2412 =>'<img src="./images/rank/Phantom.png">',
  2700 =>'<img src="./images/rank/Luminous.png">',
  2710 =>'<img src="./images/rank/Luminous.png">',
  2711 =>'<img src="./images/rank/Luminous.png">',
  2712 =>'<img src="./images/rank/Luminous.png">',
  3000 =>'<img src="./images/rank/Beginner.png">',
  3100 =>'<img src="./images/rank/Demon Slayer.png">',
  3110 =>'<img src="./images/rank/Demon Slayer.png">',
  3111 =>'<img src="./images/rank/Demon Slayer.png">',
  3112 =>'<img src="./images/rank/Demon Slayer.png">',
  3101 =>'<img src="./images/rank/Demon Avenger.png">',
  3120 =>'<img src="./images/rank/Demon Avenger.png">',
  3121 =>'<img src="./images/rank/Demon Avenger.png">',
  3122 =>'<img src="./images/rank/Demon Avenger.png">',
  3200 =>'<img src="./images/rank/Battle Mage.png">',
  3210 =>'<img src="./images/rank/Battle Mage.png">',
  3211 =>'<img src="./images/rank/Battle Mage.png">',
  3212 =>'<img src="./images/rank/Battle Mage.png">',
  3300 =>'<img src="./images/rank/Wild Hunter.png">',
  3310 =>'<img src="./images/rank/Wild Hunter.png">',
  3311 =>'<img src="./images/rank/Wild Hunter.png">',
  3312 =>'<img src="./images/rank/Wild Hunter.png">',
  3500 =>'<img src="./images/rank/Mechanic.png">',
  3510 =>'<img src="./images/rank/Mechanic.png">',
  3511 =>'<img src="./images/rank/Mechanic.png">',
  3512 =>'<img src="./images/rank/Mechanic.png">',
  3600 =>'<img src="./images/rank/Xenon.png">',
  3610 =>'<img src="./images/rank/Xenon.png">',
  3611 =>'<img src="./images/rank/Xenon.png">',
  3612 =>'<img src="./images/rank/Xenon.png">',
  4100 =>'<img src="./images/rank/Hayato.png">',
  4110 =>'<img src="./images/rank/Hayato.png">',
  4111 =>'<img src="./images/rank/Hayato.png">',
  4112 =>'<img src="./images/rank/Hayato.png">',
  4200 =>'<img src="./images/rank/Kanna.png">',
  4210 =>'<img src="./images/rank/Kanna.png">',
  4211 =>'<img src="./images/rank/Kanna.png">',
  4212 =>'<img src="./images/rank/Kanna.png">',
  5100 =>'<img src="./images/rank/Mihile.png">',
  5110 =>'<img src="./images/rank/Mihile.png">',
  5111 =>'<img src="./images/rank/Mihile.png">',
  5112 =>'<img src="./images/rank/Mihile.png">',
  6100 =>'<img src="./images/rank/Kaiser.png">',
  6110 =>'<img src="./images/rank/Kaiser.png">',
  6111 =>'<img src="./images/rank/Kaiser.png">',
  6112 =>'<img src="./images/rank/Kaiser.png">',
  6500 =>'<img src="./images/rank/Angelic Buster.png">',
  6510 =>'<img src="./images/rank/Angelic Buster.png">',
  6511 =>'<img src="./images/rank/Angelic Buster.png">',
  6512 =>'<img src="./images/rank/Angelic Buster.png">',
  501 =>'<img src="./images/rank/Cannon Shooter.png">',
  530 =>'<img src="./images/rank/Cannon Shooter.png">',
  531 =>'<img src="./images/rank/Cannon Shooter.png">',
  532 =>'<img src="./images/rank/Cannon Shooter.png">',
  508 =>'<img src="./images/rank/Jett.png">',
  570 =>'<img src="./images/rank/Jett.png">',
  571 =>'<img src="./images/rank/Jett.png">',
  572 =>'<img src="./images/rank/Jett.png">',
  11200 =>'<img src="./images/rank/Beast Tamer.png">',
  11210 =>'<img src="./images/rank/Beast Tamer.png">',
  11211 =>'<img src="./images/rank/Beast Tamer.png">',
  11212 =>'<img src="./images/rank/Beast Tamer.png">',
  10000 =>'<img src="./images/rank/Zero.png">',
  10110 =>'<img src="./images/rank/Zero.png">',
  10111 =>'<img src="./images/rank/Zero.png">',
  10112 =>'<img src="./images/rank/Zero.png">',
); 

?> 
<div id="main"> 
<div class="sidebartop"><h3>Rankings!</h3></div> 
<div class="sidebarbox"> 
<center> 

<br> 
<table border='1' bordercolor='#484846' style='border-style: solid;  border-collapse: collapse' > 

<tr > 

<div>
<th bgcolor='#484846' style='height: 10px;width: 80px; '><font color="#fff"> RANK </font></th> 
<th bgcolor='#484846' style='height: 10px;width: 80px; '><font color="#fff"> ICON </font></th> 
<th bgcolor='#484846' style='height: 10px;width: 50px; '><font color="#fff"> LEVEL </font></th> 
<th bgcolor='#484846' style='height: 10px;width: 110px;'><font color="#fff"> NAME </font></th> 
<th bgcolor='#484846' style='height: 10px;width: 100px;'><font color="#fff"> JOB </font></th> 
<th bgcolor='#484846' style='height: 10px;width: 90px; '><font color="#fff"> FAME </font></th> 

</div>
</tr> 
</table> 
<table border='1' bordercolor='#484846' style='border-style: solid;  border-collapse: collapse' > 
<?php
$number = 1;
$i = $start;
$q = mysqli_query($mysqli,"SELECT characters.name, characters.rank, characters.job , characters.level, characters.fame, characters.level FROM characters, accounts WHERE characters.accountid=accounts.id and characters.gm = 0 and accounts.banned = 0 ORDER BY characters.level DESC LIMIT ".($start).", 5") or die ($mysqli->error());
while ($r = mysqli_fetch_array($q)) {
?><tr>
<font color="#fff"> 
<td bgcolor='#fafafa'  style='width: 80px;  '><center> <?php echo $number; $number = $number+1;?> </center></td> 
<td bgcolor='#fafafa'  center style='width: 80px; height: 80px;'><center> <?php echo $job[$r['job']];?> </center></td> 
<td bgcolor='#fafafa'  style='width: 50px;  '><center> <?php echo $r['level'];?> </center></b></td> 
<td bgcolor='#fafafa'  style='width: 110px; '><center> <?php echo $r['name'];?> </center></td> 
<td bgcolor='#fafafa'  style='width: 100px; '><center> <?php echo $jobs[$r['job']];?> </center></td> 
<td bgcolor='#fafafa'  style='width: 90px;  '><center> <?php echo $r['fame'];?> </center></td> 
</font> 

</tr> 

<?php } 
if ($start >= 0 && $start <= 80) {
	$nextstart = $start + 5;
	if ($start >= 6) {
		$prevstart = $start - 5;
	} else {
		$prevstart = 0;
	}
} else if ($start > 80 && $start <= 90) {
	$prevstart = $start - 5;
	$nextstart = 90;
} else {
	die("Error");
}
	?>
</table> 

</center> 
</div> 
</div> 	
<a href="?p=rankings&start=<?php echo ($prevstart);?>"><div class="button normal">Prev</div></a> 
<a href="?p=rankings&start=<?php echo ($nextstart);?>"><div class="button normal">Next</div></a>
<center></p></div>