<?php
$projects = array(
	'gbd-compare' => array(
		'title' 			=> 'GBD Compare',
		'description' => 'Analyze the world’s health levels and trends in one comprehensive and interactive tool.',
		'img'         => 'gbd-compare.png',
		'url'					=> 'http://vizhub.healthdata.org/gbd-compare/'
	),
	'ebola' => array(
		'title' 			=> 'Spatial epidemiology of Ebola',
		'description' => 'Interactive map showing environmental suitability for Ebola virus disease within Africa.',
		'img'         => 'ebola.png',
		'url'					=> 'http://vizhub.healthdata.org/ebola/'
	),
	'nigeria-health-map' => array(
		'title'       => 'Nigeria Health Map',
		'description' => 'Nigeria state-level interventions and outcomes.',
		'img'         => 'nigeria-health-map.png',
		'url'         => 'http://vizhub.healthdata.org/health-map/nigeria'
	),
	'sdh' => array(
		'title'       => 'Social Determinants of Health',
		'description' => 'Explore the relationships between social determinants and health indicators across countries.',
		'img'         => 'sdh.png',
		'url'         => 'http://vizhub.healthdata.org/sdh/'
	),
	'life-expectancy' => array(
		'title' 			=> 'Life Expectancy',
		'description' => 'Visualize how causes contributed to change in life expectancy between 1990 and 2013.',
		'img'         => 'life-expectancy.png',
		'url'					=> 'http://vizhub.healthdata.org/le/'
	),
	'epi' => array(
		'title' 			=> 'epi',
		'description' => 'Epidemiological estimates and input data for the GBD 2013 project.',
		'img'         => 'epi.png',
		'url'					=> 'http://vizhub.healthdata.org/epi/'
	),
);
?>

<?php foreach($projects as $id => $project): ?>
<div class="project-container" id="project-container-<?php print $id; ?>">
	<div class="project-sizer"></div>
	<a href="<?php print $project['url']; ?>" target="_BLANK">
		<div class="project" id="project-<?php print $id; ?>" style="background-image: url('img/projects/<?php print $project['img']; ?>');">
			<div class="project-content">
				<h3 class="project-title"><?php print $project['title']; ?></h3>
				<div class="project-description"><?php print $project['description']; ?></div>
			</div>
		</div>
	</a>
</div>

<?php endforeach; ?>