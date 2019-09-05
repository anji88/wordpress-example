
<?php get_header(); ?>
<?php  $svgName = "'Home'" ?>
<script>
    var svgsToLoad = [<?php echo $svgName; ?>];
</script>
<?php get_template_part("templates/sections/_header");?>
<?php get_template_part("templates/sections/_svg-sprite-method-one");?>

<!-- page content here -->
<div class="main">
    <?php get_template_part("templates/template-parts/landing/_helpdesk"); ?>
    <?php get_template_part("templates/template-parts/landing/_it-tools"); ?>
    <?php get_template_part("templates/template-parts/landing/_press"); ?>
    <?php get_template_part("templates/template-parts/landing/_tech_insights"); ?>
</div>
<?php get_footer(); ?>