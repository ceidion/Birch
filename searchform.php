<form method="get" class="search-form" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<input type="search" class="search-field" placeholder="搜索" name="s" id="s" /> 
<a id="searchsubmit" class="search-button" onclick="document.getElementById('search-form').submit(); return false;">&rarr;</a>
</form>