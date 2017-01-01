<?php
/*
 * Plugin Name: Correct wordpress Spelling
 * Plugin URI: https://github.com/siruguri/correct_wp_spelling
 * Description: Changes 'wordpress' to 'WordPress' in all posts
 * Version: 0.1
 * Author: Sameer Siruguri
 * Author URI: http://www.dstrategies.org/
 * License: GPLv2
*/

/* Copyright 2017 Sameer Siruguri (email: sameers.public@gmail.com)
(Correct wordpress Spelling) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Correct wordpress Spelling is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Correct wordpress Spelling. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
*/

function correct_spelling($text) {
  return str_replace('wordpress', 'WordPress', $text);
}

add_filter('the_content', 'correct_spelling');

?>
