<div class="content">
	<div class="productpage">
		<h1><?php echo $produto['name']; ?></h1><br>

		<img src="<?php echo $produto['imagem']['principal']; ?>">

		<?php if(isset($produto['imagem']['diversas']) && !empty($produto['imagem']['diversas'])){ ?>
			<?php foreach($produto['imagem']['diversas'] as $imagem){ ?>
				<img src="<?php echo $imagem; ?>">
			<?php } ?>
		<?php } ?>

		<h4><?php echo $produto['brand']; ?></h4><br>
		<h4><?php echo $produto['category']; ?></h4><br>
		<h4><?php echo $produto['description']; ?></h4><br>
		<h4><?php echo $produto['price']; ?></h4><br>
		<h4><?php echo $produto['stock']; ?></h4><br>
		<div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum faucibus erat ut urna tincidunt, eget semper nibh porta. Integer commodo turpis vitae sodales mattis. Sed dignissim quam congue, sodales metus vel, pellentesque dolor. Donec sit amet nisi mi. Suspendisse potenti. Morbi vestibulum lobortis nulla nec blandit. Morbi dictum nulla in risus mattis euismod. Fusce sed faucibus nisl, in laoreet enim. Suspendisse ut tellus vel erat vestibulum venenatis.

			Ut bibendum urna purus, vel semper risus tempor eu. In sed condimentum diam. Proin efficitur odio semper tortor porttitor ullamcorper. Mauris molestie metus in aliquet rhoncus. Cras viverra lorem lorem, vel mollis orci cursus a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis iaculis lorem nec pellentesque placerat. Mauris a sem dapibus, lacinia mi at, egestas libero. Vestibulum sed iaculis ligula, quis dictum mi.</p>
		</div>
	</div>
</div>