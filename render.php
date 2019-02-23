Sketch in psuedocode!

read posts directory to array
override output buffer
include template
iterate over posts
include each (check precedence--will the $ stuff in the post bodies override rhe $ stuff in the template? look into it)
output buffer to file with ${permalink}.html
clear buffer

Variables:
$description
$page_title
$body_content
$unix_date (timezone/format/whatever can be set in settings.php)

