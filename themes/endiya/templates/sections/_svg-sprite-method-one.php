<!-- For getting svg content from HTTP request -->
<?php 
    $templateUrl = get_template_directory_uri(); 
?>

<script>
    (function svgSprite(doc) {
        var svgs = svgsToLoad;
        for(var i = 0; i < svgs.length; i++){
            var scripts = doc.getElementsByTagName('script')
            var script = scripts[scripts.length - 1]
            var xhr = new XMLHttpRequest()
            xhr.onload = function (response) {
                //- If success
                // srcElement is for chrome and IE
                // originalTarget is for Firefox
                var target = response.srcElement || response.originalTarget;
                var statusText = target.statusText.toLowerCase();
                // If success
                // statusText will not be "ok" but empty string in ios safari.
                if(statusText == "ok" || statusText == "" ){
                    var div = doc.createElement('div')
                    div.innerHTML = this.responseText
                    div.style.display = 'none'
                    script.parentNode.insertBefore(div, script)
                }
            }
            xhr.open('get', '<?php echo get_stylesheet_directory_uri(); ?>/assets/images/'+ svgs[i] +'.svg', true)
            xhr.send()
        }
    })(document)
</script>
