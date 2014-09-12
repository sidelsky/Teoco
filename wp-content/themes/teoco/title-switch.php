<?php if(get_field('subtitle')) {
	the_field('subtitle');
} else {
	the_title();
} ?>