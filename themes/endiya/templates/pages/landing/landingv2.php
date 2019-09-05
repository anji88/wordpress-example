<?php get_header(); ?>
<?php  $svgName = "'Home'" ?>
<?php  $pageTitle = "Software, Forums & Tools for IT Pros | Spiceworks"; ?>
<?php  $pageName = "landing page" ?>
<script>
        var svgsToLoad = [<?php echo $svgName; ?>];
</script>
<?php get_template_part("templates/sections/_headerv1");?>
<?php get_template_part("templates/sections/_svg-sprite-method-one");?>
<!-- page content here -->
<div class="main">
    <?php get_template_part("templates/template-parts/landing/_helpdesk"); ?>
    <?php get_template_part("templates/template-parts/landing/_it-tools"); ?>
    <?php get_template_part("templates/template-parts/landing/_press"); ?>
    <?php get_template_part("templates/template-parts/landing/_tech_insights"); ?>
</div>
<?php get_footer(); ?>
