<?php
	session_start();
$header="
	<meta charset='UTF-8' />
	<link rel='stylesheet' href='css/structure.css'/>
	<link rel='stylesheet' href='css/popup.css'/>
	<link rel='stylesheet' href='css/storybox.css'/>
	<script src='js/jquery-1.6.1.min.js' type='text/javascript'></script>
	<script src='js/jquery.timeago.js' type='text/javascript'></script>
	<script src='js/grayout.js' type='text/javascript' ></script>
	<script src='js/jquery.jkey.js' type='text/javascript' ></script>
	<script src='js/functions.js' type='text/javascript' ></script>";
	
	if(!isset($_SESSION['uid'])){
$topNotLoggedIn = "<div id='top'>
	<a href='/newPaathshaalaUI/' id='logo' title='Paathshaala'> <h1></h1> </a>
	<ul class='topbarLeft'>
		<li> 
			<form action='search.php' method='get'>
				<input type='search' name='tag' placeholder='Search' class='searchBox'/>
				 <button type='submit' class='searchButton'>
					<img src='pics/search.png' alt=''/>
				</button>
			</form>
		</li>
	</ul>
	
	<ul class='userBar'>
		<li><a href=''>Join</a></li>
		<li>|</li>
		<li onclick='showlogin()'><a>Login</a>&nbsp;&nbsp;<img src='pics/down.png' id='logChangeButton'/></li>
	</ul>

<form class='login' action='response/login.php' method='post' style='display:none;'>
		<img src='pics/user.png'> <input type='text' name='uname' placeholder='Username' style='margin-bottom:2px' /> <br />
		<img src='pics/key.png'> <input type='password' name='pass' placeholder='Password' style='margin-bottom:-4px' /> <br />
		<input type='hidden' name='page' value='".$_SERVER['PHP_SELF']."'>
	<button type='submit' class='tickButton'><img src='pics/tick.png'></button>
</form>

</div> <!-- /top -->";
	}
	else{

$topNotLoggedIn = "<div id='top'>
<a href='' id='logo' title='Paathshaala'> <h1></h1> </a>
<ul class='topbarLeft'>
<li>
<form action='search.php' method='get'>
<input type='search' name='tag' placeholder='Search' class='searchBox'/>
<button type='submit' class='searchButton'>
<img src='pics/search.png' alt=''/>
</button>
</form>
</li>
</ul>

<div class='loggedUser' onclick='showDash()'>
<img src='".$_SESSION['userpic']."' class='loggedImage'/>
<span class='loggedName' >".$_SESSION['fullname']."</span>
<img src='pics/down.png' id='logChangeButton' style='position:relative; top:-9px; height:10px;'>
</div>
<div class='dropDown' style='display:none'>
<a href='profile.php'><img src='pics/home.png'> Dashboard </a><br />
<a href='faq.php'><img src='pics/settings.png'> Help </a><br />
<a href='response/logout.php'><img src='pics/tick.png'> Sign off </a><br />
</div>
</div> <!-- /top -->";
}
$bottomBar = "<div id='bottom'>
	<a href='http://www.teamunwired.com/' id='logo' title='teamunwired'> <h1></h1> </a>
	<ul class='bottomLinks'>
		<li><a href=''>Credits</a></li>
		<li>|</li>
		<li><a href=''>Faq</a></li>
		<li>|</li>
		<li><a href=''>Contribute</a></li>
		<li>|</li>
		<li><a href=''>Feedback</a></li>
		<li>|</li>
		<li><a href=''>Teamunwired</a> &nbsp;&nbsp;<img src='pics/web.png'>&nbsp;&nbsp;<img src='pics/facebook.png'>&nbsp;&nbsp;<img src='pics/twitter.png'></li>
		<li>|</li>
		<li><a href=''>Paathshaala &nbsp;</a>&nbsp;<img src='pics/facebook.png'>&nbsp;&nbsp;<img src='pics/twitter.png'> </li>
		</ul>
</div> <!-- /bottom -->";

$commentSubmit = "<div class='commentBox'>
	<div class='commentBoxImage'> <img src='pics/me.png' class='fitin' /> </div>
	<div class='commentBoxText'>
			
			<span class='commentTitle' style='margin-left:5px;'>Jaseem Abid</span>
			<div class='data'>
				<textarea id='comment' rows='2' cols='57' placeholder='Comment here. Enter for submit and down key for new line.'></textarea>
			</div>
	</div>
</div>";

?>
