<?php require_once 'inc/bootstrap.php'; ?>
<?php include 'inc/header.php'; ?>
        <h2>Impressum von weltraumschaf.de</h2>

        <div id="impressum">
            <p>Sollten Sie mich aus irgendwelchen Gr&uuml;nden kontaktiern wollen,
               dann k&ouml;nnen Sie das per E-Mail tun. Klicken Sie
               <a class="contact" title="hier">ich(at)weltraumschaf(dot)de</a>.</p>

            <p>Wollen Sie mehr Informationen &uuml;ber dies Domain, dann k&ouml;nnen
               Sie diese bei der <a href="http://www.denic.de/" target="_blank">DeNIC</a> abrufen.</p>

            <p>Alles auf dieser Website wird unter der <a href="the-beer-ware-license.txt" target="_blank">
               Beer-Ware license</a> ver&ouml;ffentlicht.</p>
        </div>
        <script type="text/javascript">
        /* <![CDATA[ */
            (function(){
                $(function() {
                        $('.contact').amail('(at)','(dot)');
                });
            }());
        /* ]]> */
        </script>
<?php if ( ! isAjax()): ?>
        <?php include 'inc/backlink.html'; ?>
        <?php include 'inc/footer.php'; ?>
<?php endif; ?>