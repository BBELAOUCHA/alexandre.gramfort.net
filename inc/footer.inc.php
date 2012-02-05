
        </div>
        <!-- end div.content -->

        <div id="last_update">
            <?php echo _("Last update : ")." 01-01-2011"; ?>
        </div>

        </div>
        <!-- end div.main -->

        <!-- begin div.footer -->
        <div id="footer">
            <a href="http://validator.w3.org/check?uri=referer">
                <img src="img/xhtml_valid.png" alt="valid xhtml" class="" />
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img src="img/css_valid.png" alt="css xhtml" class="" />
            </a>
        </div>
        <!-- end div.footer -->

    </div>
    <!-- end div.full -->

    <?php  if ($_SERVER['HTTP_HOST'] != 'localhost') { ?>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    _uacct = "UA-112258-6";
    urchinTracker();
    </script>
    <?php } ?>

    </body>
</html>