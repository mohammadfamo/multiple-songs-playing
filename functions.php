function vbt_audio_stop() {
wp_enqueue_script( 'jquery' );
?>
<script>
    jQuery(document).ready(function (vbt) {
        vbt("audio").on("play", function () {
            vbt("audio")
                .not(this)
                .each(function (vbt, t) {
                    t.pause();
                });
        });
    });
</script>
<?php }
add_action('wp_enqueue_scripts', 'vbt_audio_stop');
