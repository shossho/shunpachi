<?php
	if ( in_category(array('news'))) {
		get_template_part( 'single', 'news' );
  } else if ( in_category(array('university'))) {
    get_template_part( 'single', 'university' );
  } else if ( in_category(array('laboratory'))) {
    get_template_part( 'single', 'laboratory' );
	} else if ( in_category(array('kitchen'))) {
    get_template_part( 'single', 'kitchen' );
	}else{
    get_template_part( 'single', 'post' );
  }
?>
