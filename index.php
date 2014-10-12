<!DOCType html>
<html>
<head>
<meta charset="utf-8"/>
<title>Simple Contact Form | A M Reddy's</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">A M Reddy's</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
           <p class="navbar-text">Demo Script of Contact Us</p>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www.amreddys.com/">Home</a></li>
            <li><a href="http://www.amreddys.com/14-technology/web-technologies/9-responsive-contact-form-for-web-sites-using-bootstrap-php-and-mysql">Original Article</a></li>
          </ul>

        </div>
      </div>
    </div>
<div class="container" style="margin-top:80px">

	 <div class="col-md-7">
          <h2 class="page-heading">Get in <span class="text-muted">touch</span></h2>
		  <br>
		  <form name="contact" action="process.php" method="post">
			<div class="input-group input-group-lg">
				<span class="input-group-addon glyphicon glyphicon-user"></span>
					<input type="text" name="name" class="form-control" placeholder="Your Name" required>
			</div>
			<br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon glyphicon glyphicon-earphone"></span>
					<input type="text" name="number" class="form-control" placeholder="Your Mobile">
			</div>
			<br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon">@</span>
					<input type="email" name="email" class="form-control" placeholder="Your Email" required>
			</div>
			<br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon glyphicon glyphicon-question-sign"></span>
					<textarea class="form-control" name="query" style="height: 100px;" placeHolder="Your queries here" required></textarea>
			</div>
			<br>
				
					  <button type="submit" class="pull-right btn-lg btn-primary">Submit Query</button>
				
		  </form>	
        </div>
        <div class="col-md-5">
        
        	<h2 class="page-heading">A M Reddy's</h2>
        	<p>
        		A M Reddy's is a chain of online services with a vision to serve the needs of every internet user. Have a look at our <a href="http://www.amreddys.com">home</a> page and let us serve your needs. 
        	</p>
        	

        	<p>
        		This is the demo of the article published <a href="http://www.amreddys.com/14-technology/web-technologies/9-responsive-contact-form-for-web-sites-using-bootstrap-php-and-mysql">here</a> about contact us form to simply mail the entries submitted.
        	</p>
        </div>
</div>
<div class="clearfix" style="height:40px"></div>
<hr>
<div class="container" style="padding:10px">
<p>
Copyright &copy; A M Reddy's
</p>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
</body>
</html>
