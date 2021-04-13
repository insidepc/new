<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8"> 
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>downloadcalculater</title>
  <meta name="Description" content="download,time,calculate, Estimate,bandwidth,broadband,downloadspeed,speed,upload,upload time calculator"/>
<meta name="Keywords" content="download,time,calculate, Estimate,bandwidth,broadband,downloadspeed,speed,upload,upload time calculator">
<link rel="stylesheet" type="" href="./pro 1/style.css">	
<link rel="stylesheet" type="" href="./fontawesome-free-5.15.2-web/css/all.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preload" href="./pro 1/style.css" as="style">
<link rel="preload" href="./pro 1/main.js" as="script">
<link rel="preload" href="./fontawesome-free-5.15.2-web/" as="fa-folder">
<link rel="stylesheet" href="./pro 1/style.css" media="print" onload="this.media='all'">
<script data-ad-client="ca-pub-5709272849899120" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<meta name="google-site-verification" content="AMjGGoryFAQxCi2-FCCnXoR5VCtVCAesAI2fxaRozTE" />
</head>
<body>
	<script async src="./pro 1/main.js"></script>
	<script defer src="./pro 1/main.js"></script>
	<section id="calcsec"></section>
<nav>
	<input id="nav-toggle" type="checkbox">
	<div class="logo"><strong>DownloadCalculator</strong></div>
	<ul class="links">
		<li><a href="#calcsec"><i class="fas fa-calculator"></i></a></li>
		<li><a href="#speedtestsec">Speed test</a></li>
		<li><a href="#Dataunitssec">Data units</a></li>
		<li><a style="text-align: center;" href="#mbpssec">Difference between Mpbs and MB/s</a></li>
		<li><a href="#connectsec">Connections speed</a></li>
		<li><a href="#asksec">Ask the community</a></li>
		<li><a href="./help.html"><i class="fas fa-question-circle"></i></a></li>
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>
	
		<div class="desktopcenter">
		<div class="content">

	<form onsubmit="return false">
	<div id="speed" style="padding-top: 40px; margin-top: 80px;">
		<div id="section1">
		<h3>Enter your download/upload speed <i class="fas fa-wifi"></i></h3>

		<p>
			<input id="internetSpeed_p1" type="button" value="+" onclick="internetSpeed.value = (parseInt(internetSpeed.value)+1).toFixed(2)">
            <input id="internetSpeed" type="number" min="0" step="0.01" value="10" placeholder="" autofocus>


			<input id="internetSpeed_p2" type="button" value="-" onclick="internetSpeed.value = (parseInt(internetSpeed.value)-1).toFixed(2)">

			<select id="internetSpeedBase" aria-label="Unit of speed like Kbps, Mbps, Gbps" style="padding:18px 22px; border: #fff solid 3px;background-color: #f0f0e6;">
				<option value="10^3">Kbps</option>
				<option value="10^6" selected>Mbps</option>
            	<option value="10^9">Gbps</option>
				<option value="10^12">Tbps</option>
				<option value="8000^1">KB/s</option>
				<option value="8000000^1">MB/s</option>
				<option value="8000000000^1">GB/s</option>
				<option value="8000000000000^1">TB/s</option>

			</select>
		</p>

			<a href="#speedtestsec" style="color: #FF6A3D; text-decoration: none;"><i class="fas fa-exclamation-triangle"></i> Click here if you dont know your internet Speed to test it</a>
		</div>

		<div>
			
		</div>
		<div>
			<p class="overhead-p" style="display: none;"><label for="internetOverhead">Overhead</label>
				<select id="internetOverhead" style="display: none;">
					<option value="1" selected>None</option>
				</select>
			
			</p>
		</div>
	</div>

	
	<div id="file">
		<h3>Enter your file size <i class="fas fa-folder"></i></h3>
		<p>
			<input id="internetSpeed_p1" type="button" value="+" onclick="fileSize.value = (parseInt(fileSize.value)+1).toFixed(2)">

            <input type="number" id="fileSize" value="1" step="0.01" min="0" style="padding:18px 22px; border:#fff solid 3px;background-color:#f0f0e6;">

			<input id="internetSpeed_p2" type="button" aria-label="Data unit like KB, MB, GB" value="-" onclick="fileSize.value = (parseInt(fileSize.value)-1).toFixed(2)">
			<select id="fileSizeBase" style="padding:20px 22px; border: #fff solid 3px;background-color: #f0f0e6;">
				<option value="2^10">KB </option>
				<option value="2^20">MB </option>
				<option value="2^30" selected>GB </option>
				<option value="2^40">TB </option>
				<option value="2^50">PB </option>
				<option value="2^60">EB </option>
				<option value="2^70">ZB </option>
				<option value="2^80">YB </option>
			</select>
		</p>

		<p>
			<button id="calculateButton" style="border: #fff solid 3px;">=</button>
		</p>
	</div>

	</form>

	
	<div id="results">

		<div id="results_inner">
			<p class="time">0</p>
			<p class="">to download/upload <span class="size"></span> </p>
			<p class=""><i class="fas fa-exclamation-triangle"></i> if there isnt any result that means its eathier takes a very long time (more than 30000 year) or too short time (less than 1s) to download/upload the file</p>
		</div>


</div>


</div>


	</div>	
<section id="speedtestsec"></section>
<div class="main">
	<iframe width="100%" height="650px" frameborder="0" src="https://hamza1224.speedtestcustom.com"></iframe>
</div>


<a href="" style="display: none;"></a>

<div class="desktopcenter">
	<section id="Dataunitssec"></section>
	<div class="content">
		<div id="speed">
			<h1>All the Data units</h1>
<p class="p123">b(bit)= 1 bit (1 or 0)</p>
<p class="p123">B(Byte)= 8b</p>
<p class="p123">KB(Kilobyte)= 1024B/ 10^3</p>
<p class="p123">MB(Megabyte)= 1024KB/ 10^6</p>
<p class="p123">GB(Gigabyte)= 1024MB/ 10^9</p>
<p class="p123">TB(Terabyte)= 1024GB/ 10^12</p>
<p class="p123">PB(Petabyte)= 1024TB/ 10^15</p>
<p class="p123">EB(Exabyte)= 1024PB/ 10^18</p>
<p class="p123">ZB(Zettabyte)= 1024EB/ 10^21</p>
<p class="p123">YB(Yottabyte)= 1024ZB/ 10^24</p>
		</div>
	</div>
	
</div>
<div class="desktopcenter">
	<section id="mbpssec"></section>
	<div class="content">
		<div id="speed">
			<h1>Difference between  Mbps MB/s</h1>
<p class="p123">A Lot of people may not know the difference between Mbps and MB/s, Mbps stands for Megabit per second but MB/s stands for Megabyte per second, (Byte > Bit)</p>
<p class="p123">To convert from Megabit to Megabyte Divide the number by 8 and to convert form Megabyte to Megabit Multiply the number by 8</p>
<p class="p123" style="text-align: center; color: #F4DB7D;font-size: x-large;"><b>Example :</b></p>
<p class="p123" style="text-align:center;"><B>20Mbps</B> <i class="fas fa-divide"></i><b> 8 <i class="fas fa-equals"></i> 2.5MB/s</b> </p>
<p class="p123" style="text-align: center;"><b>5Mb/s </b><i class="fas fa-times"></i><b> 8 <i class="fas fa-equals"></i> 40Mbps</b> </p>
<p class="p123">Same thing with all the another data units (Kbps,KB/s,Gbps,GB/s,Tbps,TB/s,etc)</p>
		</div>
	</div>
</div>

<div class="desktopcenter">
	<section id="connectsec"></section>
	<div class="content">
		<div id="speed">
			<h1>Different Connections speed</h1>
<p class="p123">OLD Modern = 29Kbps</p>
<p class="p123">2G = 40Kbps</p>
<p class="p123">DSL Modern = 56.6Kbps</p>
<p class="p123">ADSL = from 512Kbps up to 24Mbps (512Kbps,1Mbps,8Mbps,24Mbps)</p>
<p class="p123">3G = from 3Mbps up to 7.2Mbps</p>
<p class="p123">LAN = from 10Mbps up to 100Mbps</p>
<p class="p123">4G = form form 5Mbps up to 100Mbps</p>
<p class="p123">5G = from 200Mbps up to 1000Mbps(1Gbps)</p>
<p class="p123">Fiber optic = the maximum speed of the fiber optic is 10000 Mbps (10Gbps) (fiber optic speed depends on Your subscription, usuall internet providers offer speeds from 20Mbps up to 1000Mbps)</p>
		</div>
	</div>
</div>
<div id="disqus_thread"></div>
<section id="asksec"></section>
<script>
    var disqus_config = function () {
    this.page.url = 'https://downloadcalculator.herokuapp.com/';
    this.page.identifier = 'Downloadtime-calculater'; 
    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://download-calculator.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</body>
</html>