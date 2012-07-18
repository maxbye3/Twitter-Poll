
<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<!--[if IE]><![endif]-->
<title>Max Test</title>
<style>

body {
width: 990px;
color: #000;
font-family: helvetica;
text-align: left;
padding: 0px 0px 0 7%;
}

#wrapper {
border-left:1px solid #dddddd;
padding:0 0 20px 0; 
margin:0 0 10px 0; 
position:relative;
}
</style>

	
<?php
$jsonurl = "http://otter.topsy.com/searchcount.json?q=yohan%20blake&type=tweet";
$json = file_get_contents($jsonurl,0,null,null);
$json_output = json_decode($json, true);
?>


<?php
$json_output = array_values($json_output);
foreach($json_output as $key=>$val) {
$hash_Blake = $val["a"];
}
?>

<?php
$jsonurl = "http://otter.topsy.com/searchcount.json?q=usainbolt&type=tweet";
$json = file_get_contents($jsonurl,0,null,null);
$json_output = json_decode($json, true);
?>


<?php
$json_output = array_values($json_output);
foreach($json_output as $key=>$val) {
$hash_Bolt = $val["a"];
}
?>

</head>


<body>



<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=3.3.2'></script>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 

<script type="text/javascript">
var tabScore = <?php echo $percent_Bolt = round((($hash_Blake/$hash_Bolt)*100)); ?>;
var sonyScore = <?php echo $percent_Blake = (100 - $percent_Bolt); ?>;
var tabPercent = <?php $percent_Bolt = round((($hash_Blake/$hash_Bolt)*100)).'%'; 
echo '"'.str_replace("\n", "\"\n\"",$percent_Bolt).'"'; ?>;

var sonyPercent = <?php $percent_Blake = (100 - $percent_Bolt).'%'; 
echo '"'.str_replace("\n", "\"\n\"",$percent_Blake).'"'; ?>;

		function addCommas(nStr)

{

    nStr += '';

    x = nStr.split('.');

    x1 = x[0];

    x2 = x.length > 1 ? '.' + x[1] : '';

    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1)) {

        x1 = x1.replace(rgx, '$1' + ',' + '$2');

    }

    return x1 + x2;

}



var x = 1;

    var interval = setInterval( 

    function(){

        if (x < sonyScore){

            x = parseInt(x) + 1;

            if(x > sonyScore){x = sonyScore}

            $('#count').html(addCommas(x));

            }},

            40);

			

var xtwo = 1;

    var interval = setInterval( 

    function(){

        if (xtwo < tabScore){

            xtwo = parseInt(xtwo) + 1;

            if(xtwo > tabScore){xtwo = tabScore}

            $('#count2').html(addCommas(xtwo));

            }},

            40);

            </script>

            

<div style="position:relative; width:0px; height:400px; top:-233px; margin-bottom:-300px;"><div style="position:absolute; width:1230px; height:190px; padding: 127px 10px 10px 10px; background:url(http://sporttest.mcsaatchi.com/website.png) no-repeat center; border: 1px solid #e4e4e4; top:0px; left:50%;">

<div style="width:960px; height:28px; padding: 5px; position:absolute; bottom:0; left:50%; margin-left:-480px;">

<div  id="count" style="color:#104966; background:url(http://androidandme.com/wp-content/uploads/2011/10/vs-total-1.png) no-repeat; width:72px; height:62px; top:-57px; left:0; font-size:42px; line-height:normal; position:absolute; z-index:100; font-weight:bold; padding:1px 0 0 3px; letter-spacing:-0.02em; ">sonyScore</div>

<div id="count2" style="color:#1d34aa; background:url(http://androidandme.com/wp-content/uploads/2011/10/vs-total-2.png) no-repeat; width:69px; height:62px; top:-57px; right:0; font-size:42px; line-height:normal; position:absolute; z-index:100; font-weight:bold; padding:1px 0 0 5px; letter-spacing:-0.02em; ">tabscore</div>

<div class="sony" style="background:#38e4ff; width:0%; height:28px; position:absolute; top:0; left:0;"></div>

<div class="tab" style="background:#5870e8; width:0%; height:28px;  position:absolute; top:0; right:0;"></div>

</div>

</div></div>

 

 

 <style type="text/css">

 .css3button {

	font-family: Arial, Helvetica, sans-serif;

	font-size: 14px;

	color: #bd7800;

	background: -moz-linear-gradient(

		top,

		#ffffff 0%,

		#ffffff 30%,

		#d6d6d6);

	background: 
	
	
	-webkit-gradient(

		linear, left top, left bottom, 

		from(#ffffff),

		color-stop(0.30, #ffffff),

		to(#d6d6d6));
	
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#777777');
	

	border-radius: 5px;

	-moz-border-radius: 5px;

	-webkit-border-radius: 5px;

	-moz-box-shadow:

		0px 1px 2px rgba(000,000,000,0.3),

		inset 0px 0px 2px rgba(255,255,255,1);

	-webkit-box-shadow:

		0px 1px 2px rgba(000,000,000,0.3),

		inset 0px 0px 2px rgba(255,255,255,1);

	text-shadow:

		0px -1px 0px rgba(000,000,000,0.1),

		0px 1px 0px rgba(255,255,255,1);

		padding:40px 20px 40px 100px;

		text-align:center;

}



 .css3button:hover, .css3button:hover span.warn{color:#000 !important;}

 

 h1{font-size:2.82em; margin-top:0; line-height:1em;}



 </style>

 

 <script type="text/javascript">

 $(document).ready(function(){  



$(".sony").animate({width:sonyPercent},{duration:1800}) 

$(".tab").animate({width:tabPercent},{duration:1800}) 



});





 </script>

 


<table width="1250px">

<tr>
<td style="height:200px">
<a class="css3button" style="float:left; font-size:25px; color:#444; width:345px; display: block; border: 1px solid #ccc; position:relative;" href="https://twitter.com/share?text=I%20am%20voting%20for%20Yohan%20%23Blake%20FTW!&amp;url=http%3A%2F%2Fwww.sportandentertainment.mcsaatchi.com&amp;related=MCSaatchiSandE" target="_blank"><img src="http://androidandme.com/wp-content/uploads/2011/10/vs-bird-1.png" style="position:absolute; top:28px; left:20px;" />Tweet to vote <span style="color:#438a94;">#Blake</span>
  <span class="warn" style="position:absolute; bottom:-34px; color:#999; font-size:11px; display:block; width:460px; left:0; text-align:center;">Tweet to cast your vote for the Yohan Blake!</span></a>
</td>
<td>
  <a class="css3button" style="float:right; font-size:25px; color:#444; width:345px; display: block; border: 1px solid #ccc;  position:relative;" href="https://twitter.com/share?text=I%20am%20voting%20for%20Usain%20%23Bolt%20FTW!&amp;url=http%3A%2F%2Fwww.sportandentertainment.mcsaatchi.com&amp;related=MCSaatchiSandE" target="_blank"><img src="http://androidandme.com/wp-content/uploads/2011/10/vs-bird-2.png" style="position:absolute; top:28px; left:20px;" />Tweet to vote <span style="color:#16277f;">#Bolt</span>
  <span class="warn" style="position:absolute; bottom:-34px; color:#999; font-size:11px; display:block; width:460px; left:0; text-align:center;">Tweet to cast your vote for Usain Bolt!</span></a>
</td>
</tr>
<tr>
<td>




        

<style type="text/css">

 .twtr-widget{font-family:Arial !important;}

.twtr-widget .twtr-tweet-wrap {padding:8px 0; font-size:15px;}

.twtr-avatar, .twtr-img, .twtr-img img{width:48px !important; height:48px !important;}

.twtr-bd{padding:0;}

.twtr-tweet-text{background:#ECECEC; padding:20px; margin:0 0 0 70px !important; position:relative;}

.twtr-tweet-text:before{display:block; content:""; width: 0; height: 0;  border-bottom: 10px solid transparent; border-right:10px solid #ECECEC; position:absolute; left:-10px; top:16px;}

#twtr-widget-1 em{display:block; margin-top:10px;}

.twtr-widget .twtr-tweet{border:none; margin-bottom:20px;}

</style>



 <div style="width:440px; float:left; margin:30px 0 0 0;">


       <h2 style="font-family: Helvetica; color:#333; border-bottom:1px solid #dddddd; padding:0 0 20px 0; margin:0 0 10px 0; position:relative;">Votes for #Yohan Blake <span style="position:absolute; right:0; color:#999;"><?php echo $hash_Blake; ?></span></h2>

        

<script src="http://widgets.twimg.com/j/2/widget.js"></script>

<script>

new TWTR.Widget({

  version: 2,

  type: 'search',

  search: '#blake olympics',

  interval: 6000,
  
  title: '',

  subject: '',

  width: 'auto',

  height: 450,

  theme: {

    shell: {

      background: '#ffffff',

      color: '#ffffff'

    },

    tweets: {

      background: '#ffffff',

      color: '#444444',

      links: '#000033'

    }

  },

  features: {

    scrollbar: false,

    loop: true,

    live: true,

    hashtags: true,

    timestamp: true,

    avatars: true,

    toptweets: true,

    behavior: 'default'

  }

}).render().start();

</script>

</td>
<td>
     
<div id="wrapper" style="width:630px; float:right;  margin:30px 0 0 0;">

<div style="width:440px; float:right;  margin:30px 0 0 0;">

         

         <h2 style="font-family: Helvetica; color:#333; border-bottom:1px solid #dddddd; padding:0 0 20px 0; margin:0 0 10px 0; position:relative;">Votes for #Usain Bolt <span style="position:absolute; right:0; color:#999;"> <?php echo $hash_Bolt; ?> </span></h2>

        
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>

new TWTR.Widget({

  version: 2,

  type: 'search',

  search: '#Usain Bolt olympics',

  interval: 6000,
  
  title: '',

  subject: '',

  width: 'auto',

  height: 450,

  theme: {

    shell: {

      background: '#ffffff',

      color: '#ffffff'

    },

    tweets: {

      background: '#ffffff',

      color: '#444444',

      links: '#000033'

    }

  },

  features: {

    scrollbar: false,

    loop: true,

    live: true,

    hashtags: true,

    timestamp: true,

    avatars: true,

    toptweets: true,

    behavior: 'default'

  }

}).render().start();

</script>

</div>
</div>
</td>
</tr>
</table>


<!-- Begin comScore Tag -->

<script>

  var _comscore = _comscore || [];

  _comscore.push({ c1: "2", c2: "6036036" });

  (function() {

    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;

    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";

    el.parentNode.insertBefore(s, el);

  })();

</script>





</body>

</html>

