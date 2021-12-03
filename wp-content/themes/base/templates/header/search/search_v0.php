<!-- Hearder Search -->
<div class="search-container">
	<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="input-group">
		<div class="input-group flex--align-center ">
			<input type="search" class="form-control border-0" placeholder="Search" aria-label="search nico" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
			<button class="btn btn-search text-white" type="submit">
					<i class="fa fa-search"></i>
			</button>
		</div>
	</form>
</div>