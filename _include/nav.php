<!--<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">WebSiteName</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#" target="_blank">Home</a>
			</li>
			<li>
				<a href="#" target="_blank">Tutorials</a>
			</li>
			<li>
				<a href="#" target="_blank">News</a>
			</li>
			<li>
				<a href="#" target="_blank">Contact</a>
			</li>
		</ul>
	</div>
</nav>-->

<?php
echo '<nav class="navbar navbar-inverse">';
echo '<div class="container-fluid">';
echo '<div class="navbar-header"><a class="navbar-brand href="/index.php>'.PR_NAME.'</a></div>';

// Get the actual navbar contents

$nav = $db->query("SELECT * FROM nav");
if ($nav->num_rows > 0){

	$nav_array = array();
	$have_parents = array();

	while($row = $nav->fetch_assoc()){
		//print_r($row);
		if (is_null($row['parent'])){
			array_push($nav_array, $row);
		} else {
			array_push($have_parents, $row);
		}

	}

	foreach($have_parents as $sub_item){
		$parent_id = $sub_item['parent'];
		$arr_id = getParent($parent_id, $nav_array);
		array_push($nav_array[$arr_id], $sub_item);

	}

	echo '<ul class="nav navbar-nav">';

	for($i = 0; $i < count($nav_array); $i++){
		$current = $nav_array[$i];
		$is_active = is_active($current);
		
		if (count($current) == 4){
			//Has no children
			echo '<li';
			if ($is_active){
				echo ' class="active"';
			}
			echo '>';
			echo '<a href="'.$current['url'].'">'.$current['name'].'</a>';
		} else {
			//Has children
			echo '<li class="dropdown">';
			echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$current['name'];
			echo '<span class="caret"></span></a>';
			echo '<ul class="dropdown-menu">';

			for ($d = 0; $d + 4 < count($current); $d++){
				echo '<li><a href="';
				echo $current[$d]['url'].'">';
				echo $current[$d]['name'];
				echo '</a></li>';
			}

			echo '</ul></li>';

		}
		echo '</li>';
	}

	echo '</ul>';

}
// End of navbar
echo "</div></nav>";