
<script type="text/javascript">
(function($) {
    $(document).ready(function() {
        var mainTitle = $('#title');
        var mainTitleHeight = mainTitle.css('height');
        mainTitleHeight = mainTitleHeight.substr(0, mainTitleHeight.length -2);
        var headerTitle = $('header h1');

        $(window).scroll(function() {
            if ($(window).scrollTop() > (mainTitleHeight/2)) {
                headerTitle.addClass('visible');
            } else {
                headerTitle.removeClass('visible');
            }
        });

        $('.pause-toggle').click(function() {
            $(this).toggleClass('fa-play-circle-o');
            $(this).toggleClass('fa-pause-circle-o');
        });
    });
})(jQuery);
</script>

<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-76143742-1', 'auto');
ga('send', 'pageview');
</script>
