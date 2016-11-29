<?php
echo get_Pages_order_list($pages);

function get_Pages_order_list ($array, $child = FALSE)
{
	$str = '';
	
	if (count($array)) {
		$str .= $child == FALSE ? '<ol class="sortable">' : '<ol>';
		
		foreach ($array as $item) {
			$str .= '<li id="list_' . $item['id_page'] .'">';
			$str .= '<div>' . $item['title'] .'</div>';
			
			// Do we have any children?
			if (isset($item['children']) && count($item['children'])) {
				$str .= get_Pages_order_list ($item['children'], TRUE);
			}
			
			$str .= '</li>' . PHP_EOL;
		}
		
		$str .= '</ol>' . PHP_EOL;
	}
	
	return $str;
}
?>
<script>
$(document).ready(function(){
	alert("pppp");
    $('.sortable').nestedSortable({
        handle: 'div',
        items: 'li',
        toleranceElement: '> div',
        //maxLevels: 2
    });

});
</script>
