<!Doctype HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Welcome to Rate Gigs, where you rate that gig you went to.">
		<meta name="keywords" content="live music, rate music, etc" />
		<meta name="robots" content="index, follow">
		<meta name="author" content="Megan Tran">
		<meta name="copyright" content="Megan Tran">
		<title> Rate Gigs - Home </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>	
		<div id="wrap">
		<h1><img src="images/header1.jpg" alt="header image" style="width:auto; height:auto;"></h1>
        <div id="nav">    
		<nav>
			<ul>
			<li><a href="index.php" title="Home">Home</a></li>
			<li><a href="rateartist.html" title="Rate an Artist">Rate an Artist</a></li>
			<li><a href="ratevenue.html" title="Rate a Venue">Rate a Venue</a></li>
			<li><a href="links.html" title="Read a Mlog">Read a mlog</a></li>
            <li><a href="photos.html" title="Photos">Photos</a></li>
			<li><a href="events.html" title="Social">Social</a></li>
			</ul>
				
            </nav>
            </div>
		
		<div id="main">
        
        <script>
		(function() {
		var cx = '003928375708619866348:tqzefrhp6xo';
		var gcse = document.createElement('script');
		gcse.type = 'text/javascript';
		gcse.async = true;
		gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(gcse, s);
		})();
		</script>
        
        <div class="gcse-search"></div>

		<div class=box>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lobortis neque et orci eleifend, non auctor orci bibendum. Vivamus feugiat est in ligula rutrum, quis tincidunt sapien molestie. Suspendisse scelerisque hendrerit dolor sed semper. Cras risus ipsum, accumsan nec nisi convallis, tincidunt venenatis magna. Mauris vestibulum augue et maximus scelerisque. Sed bibendum, libero id sagittis mollis, dui ex dignissim neque, id dignissim purus ante id ipsum. Etiam at erat sapien. Sed in urna et nisi venenatis auctor. Sed id urna sit amet mi viverra ullamcorper. Praesent condimentum placerat purus, eu mollis turpis consectetur in. Nunc ac sollicitudin elit. Fusce sit amet aliquet quam.

Sed ut mollis ipsum. Sed ipsum tortor, tempus ut mi sit amet, egestas molestie sem. Vivamus vitae ornare metus. Cras sodales eros a augue condimentum, quis efficitur mauris tempor. Mauris posuere ullamcorper sem a blandit. Aliquam sed enim risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed nec nisi ut metus finibus aliquam. Nullam ullamcorper tellus ut pulvinar mattis. Morbi in metus eget lorem ullamcorper iaculis vitae ac dolor. Proin vitae risus vitae lectus posuere sodales.
		</div>
		<div class=leftbox>
		<h3>New Blog: Living it Up at Lolla</h3>
		</div>
        <div class=rightbox>
		<h3>Lady Gaga's New Tour - Worth the Hype?</h3>
		</div>

		</div>
		
		
	  
		<br>
		
		<footer>
		<hr>
        <div>
              <p>© Copyright Rate Gigs. See our <a href="privacy-policy.html">Privacy Policy</a><br>
			  Blah Blah <br>
			<a href="mailto:megan.t.a.g@gmail.com">contact@rategigs.com</a> <br>
			</p>
    
        </div> 
		</footer>
		</div>
		
		<script>
		function date() {
		var d = new Date(),
		minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
		hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
		ampm = d.getHours() >= 12 ? 'PM' : 'AM',
		months = ['January','February','March','April','May','June','July','August','September','October','November','December'],
		days = ['Sunday,','Monday,','Tuesday,','Wednesday,','Thursday,','Friday,','Saturday,'];
		
		return 'Today is ' + days[d.getDay()]+' '+months[d.getMonth()]+' '+d.getDate()+' '+d.getFullYear()+' '+hours+':'+minutes+ampm;
		}
		
		
		document.getElementById("time").innerHTML = date(); 
		</script>
	 </body>
	  
</html>