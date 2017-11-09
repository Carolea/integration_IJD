<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bons_plans.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body>

    <?php include 'include/header.php'; ?>

    <?php include 'include/accueil.php'; ?>
    <?php include 'include/footer.php'; ?>


    <!--<div data-include="header"></div>
		
		<div data-include="bons-plans"></div>
		
		<div data-include="footer"></div>-->

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/slider.js"></script>


    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.js"></script>
		<script>
			$(function(){
				let includes = $('[data-include]');
				jQuery.each(includes, function(){
					let file = 'include/' + $(this).data('include') + '.html';
					let div = this;
					$.get(file, function(data) {
						$(div).replaceWith(data);
					});
				});
			});
		</script>
		<script src="script.js"></script>-->
</body>

</html>
