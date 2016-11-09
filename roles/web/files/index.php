<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My site dummy</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="header-limiter">
            <h1><a href="#"><span>Dummy:</span> Site in production</a></h1>
            <nav>
                <a href="#">LOGIN</a>
            </nav>
        </div>
    </header>
    <section class="main-content">
        <div class="card">
            <h1>Main text</h1>
            <h3>This page demonstrates basic understanding of HTMLand CSS.</h3>
		<a href='#' id="add-content">Test</a>
			<div class="dummy-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id orci sapien. Donec tincidunt fringilla fermentum. Cras cursus dictum tellus. In hac habitasse platea dictumst. Nulla facilisi. Vestibulum aliquet accumsan libero vitae semper. Pellentesque felis velit, semper vitae arcu lobortis, placerat sollicitudin risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<img src="https://mariadb.org/wp-content/uploads/2015/05/MariaDB-Foundation-horizontal-x52.png" alt="MariaDB">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id orci sapien. Donec tincidunt fringilla fermentum. Cras cursus dictum tellus. In hac habitasse platea dictumst. Nulla facilisi. Vestibulum aliquet accumsan libero vitae semper. Pellentesque felis velit, semper vitae arcu lobortis, placerat sollicitudin risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
				<a href='info.php'>Verify PHP</a></p>

			</div>
	</div>
    </section>
    <footer>
        <div class="footer-limiter">
            <div class="footer-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        <div class="footer-left">
            <p class="footer-links">This is your sticky footer</p>
            <p>Company Name © 2016</p>
        </div>
        </div>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		var dummyContent = $('.dummy-content').children(),
			i;


		$('#add-content').click(function(e){
			e.preventDefault();

			if($(dummyContent[0]).is(":visible")){
				for(i=0;i<dummyContent.length;i++){
					$(dummyContent[i]).fadeOut(600);
				}
			}
			else{
				for(i=0;i<dummyContent.length;i++){
					$(dummyContent[i]).delay(600*i).fadeIn(600);
				}
			}

		});
	</script>
</body>
</html>
