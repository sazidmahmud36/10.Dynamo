	<footer>
		<p>Copyright &copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></p>
	</footer>
	




<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/unslider-min.js"></script>


<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.my-slider').unslider({
			arrows:{
				prev: '<a class= "unslider-arrow prev"><i class="fa fa-arrow-circle-left"></i></a>',
				next: '<a class= "unslider-arrow next"><i class="fa fa-arrow-circle-right"></i></a>'
			}
		});
	});
</script>

<script>
	const tabs = document.querySelectorAll(".tabs");
	const tab = document.querySelectorAll(".tab");
	const panel = document.querySelectorAll(".panel");

	function onTabClick(event) {

	  // deactivate existing active tabs and panel

	  for (let i = 0; i < tab.length; i++) {
	    tab[i].classList.remove("active");
	  }

	  for (let i = 0; i < panel.length; i++) {
	    panel[i].classList.remove("active");
	  }


	  // activate new tabs and panel
	  event.target.classList.add('active');
	  let classString = event.target.getAttribute('data-target');
	  console.log(classString);
	  document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
	}

	for (let i = 0; i < tab.length; i++) {
	  tab[i].addEventListener('click', onTabClick, false);
	}
</script>


<?php wp_footer(); ?>
</body>
</html>