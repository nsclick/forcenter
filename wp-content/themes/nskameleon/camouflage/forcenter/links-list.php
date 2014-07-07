<?php

include('../../../../../wp-load.php');

$links = array();
$posts = array();
$args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'post_title',
	'order'            => 'ASC',
	'post_type'        => 'page',
);

// Pages
$pages = get_posts($args);
$posts = array_merge($posts, $pages);


// Models
$args['post_type'] = 'modelo';
$models = get_posts($args);
$posts = array_merge($posts, $models);

// Models
$args['post_type'] = 'version';
$versions = get_posts($args);
$posts = array_merge($posts, $versions);

// Models
$args['post_type'] = 'accesorio';
$acc = get_posts($args);
$posts = array_merge($posts, $acc);

?>

<table>
	<thead>
		<tr>
			<td>Página</td>
			<td>Enlace</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($posts as $p): ?>
		<tr>
			<td><?php echo $p->post_title ?></td>
			<td><?php echo get_permalink($p->ID) ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	
</table>
