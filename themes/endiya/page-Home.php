

<?php get_header(); ?>
<?php  $svgName = "'Home'" ?>
<script>
    var svgsToLoad = [<?php echo $svgName; ?>];
</script>
<?php get_template_part("templates/templates/common/_svg-sprite-method-one");?>

<!-- page content here -->
<div class="main">
    <?php get_template_part("templates/template-parts/home/_helpdesk"); ?>

</div>
<?php get_footer(); ?>