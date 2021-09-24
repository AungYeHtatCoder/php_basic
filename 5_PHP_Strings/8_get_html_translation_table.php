<?php
	$string = "La pasta e` il piato piu` amato in Italia";
	$translate = get_html_translation_table(HTML_ENTITIES);
	echo strtr($string, $translate);