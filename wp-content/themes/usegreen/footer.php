<footer class="footer">
    <div class="container">
        <div class="footer__container grid">
            <?php dynamic_sidebar('footer') ?>
            <button title="Retourner en haut de la page" class="scroll-to-top">
                <svg width="24" height="12" viewBox="0 0 24 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 10L12 2L2 10" stroke="#232323" stroke-width="2" stroke-linecap="square" />
                </svg>
            </button>
        </div>
</footer>
<?php wp_footer() ?>
<script>
    window.axeptioSettings = {
        clientId: "638f7f9ffe56135ec583846e",
        cookiesVersion: "usegreen-fr",
    };

    (function (d, s) {
        var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
        e.async = true; e.src = "//static.axept.io/sdk.js";
        t.parentNode.insertBefore(e, t);
    })(document, "script");
</script>
</body>

</html>