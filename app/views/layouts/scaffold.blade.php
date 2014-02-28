<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Devil's Isle - The best and worst of Australia</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Australia is an ancient country with unique and beautiful wildlife, most of which would like to kill you">
	<meta name="author" content="Matt Burgess">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/flexslider.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800,600' rel='stylesheet' type='text/css'>
	<script src="/js/jquery.js"></script>
	<script src="/js/jquery-migrate-1.1.1.js"></script>
	<script src="/js/superfish.js"></script>
	<script src="/js/jquery.flexslider.js"></script>
	<script src="/js/jquery.mobilemenu.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script>
	<script src="/js/jquery.equalheights.js"></script>
	<script src="/js/sForm.js"></script>
	<script>	
   $(document).ready(function(){	
		
	 if (($.browser.msie) && ($.browser.version < '9.0')) { 
	 
     $('.flexslider').flexslider({
				animation: "slide",			
				slideshow: true,			
				slideshowSpeed: 7000,
				animationDuration: 600,
				prevText: "",
				nextText: "",
				controlNav: true
			})	 
	 
	 } else{	 
					
			$('.flexslider').flexslider({
				animation: "fade",			
				slideshow: true,			
				slideshowSpeed: 7000,
				animationDuration: 600,
				prevText: "",
				nextText: "",
				controlNav: true
			})
		}
					
      });
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--<![endif]-->
	<!--[if lt IE 9]>   
   <script src="js/html5shiv.js"></script>  
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
      <link href='//fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
      <link href='//fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>
      <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
<div class="bg-main"> 
      <!--============================== header =================================-->

<?php $path = Route::getCurrentRoute()->getPath() ?>

  <header>
    <div class="container">
     <div class="navbar navbar_ clearfix">
        <h1 class="brand"><a href="/"><img alt="Devil's Isle" id="logo" src="/img/logo.png"></a></h1>
        <div class="nav-collapse nav-collapse_  collapse">
              <ul class="nav sf-menu">
            <li{{$path == '/'? ' class="current"': ''}}><a href="/">Home</a></li>
            <li{{$path == '/About'? ' class="current"': ''}}><a href="/About/">What is Devil's Isle</a></li>
            <li{{ Request::is('Animals/*')|| $path == '/Animals'? ' class="current"' : ''}}><a href="/Animals/">Animals</a>
                  <ul>
                @foreach($categories as $category)
                    <li><a href="/Animals/{{$category->slug}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
           </li>
            <li{{$path == '/Contact'? ' class="current"': ''}}><a href="/Contact">Contact</a></li>
          </ul>
       </div>
      </div>
     </div>
  </header>


@yield('main')



<!--============================== aside =================================-->

<aside>
      <div class="block-main">
    <div class="container">
          <div class="row">
        <article class="span2 offset3" style="opacity: 0">
              <ul class="list-1">
            <li><a href="#">Contact</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Legal Notice</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">About us</a></li>
          </ul>
            </article>
        <article class="span2" style="opacity: 0">
              <ul class="list-1">
            <li><a href="#">Science &amp; Safety</a></li>
            <li><a href="#">Product Overview</a></li>
            <li><a href="#">Our Brands</a></li>
            <li><a href="#">Agricultural Seeds</a></li>
            <li><a href="#">Traits &amp; Technologies</a></li>
          </ul>
            </article>
        <article class="span2" style="opacity: 0">
              <ul class="list-1">
            <li><a href="#">New products</a></li>
            <li><a href="#">Top sellers</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="#">Manufacturers</a></li>
            <li><a href="#">Suppliers</a></li>
          </ul>
            </article>
        <article class="span3">
              <div class="box-newsletter" style="opacity: 0">
            <h3>newsletter:</h3>
            <form id="form1">
                  <div class="success"><span>Your subscribe request<br>
                    has been sent!</span></div>
                  <fieldset class="clearfix">
                <label class="email"> <span class="error">*This is not a valid email address.</span>
                      <input type="email" value="Enter your email here">
                    </label>
                <a href="#" data-type="submit" class="btn">subscribe</a>
              </fieldset>
                </form>
          </div>
            </article>
      </div>
        </div>
         <div id="base-block">
      
         <p>While effort has been taken to ensure the accuracy of data here, accurately sorting animals into useful and navigable groups without making a mess of it is beyond the scope of a site like this. Some animal groupings, such as separating arachnids and spiders, is to help non-experts find animals of interest, rather than to be strictly accurate.</p>

         <p>Also, poisonous means something you eat. Snakes and spiders are venomous. Just saying.</p>
    </div>
    <div class="box-aside">
    
          <h3>NOTES ON TAXONOMY AND TERMINOLOGY</h3>
       <a href="/About" class="link1">read more</a></div>
  </div>

 
 </aside>

<!--============================== footer =================================-->
<footer>
      <div class="container">
    <div class="privacy"> <img src="/img/logo-footer.png" alt="" class="logo-footer"/> &copy; 2014  &nbsp;<!-- {%FOOTER_LINK} --> 
     </div>
  </div>
</footer>
<script  src="/js/bootstrap.js"></script>
</body>
</html>