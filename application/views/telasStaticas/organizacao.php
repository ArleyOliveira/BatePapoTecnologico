<h1>jQuery MDL Modal Dialog Plugin Demo</h1>
<div class="jquery-script-ads" style="margin:50px auto;"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<button id="show-info" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
    Show Info
</button>
<button id="show-action" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
    Show Action
</button>
<button id="show-not-cancelable"
        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
    Show not cancelable
</button>
<button id="show-loading" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
    Show loading
</button>
<script>
    var lorem = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';
    $('#show-info').click(function () {
        showDialog({
            title: 'Information',
            text: lorem
        })
    });
    $('#show-action').click(function () {
        showDialog({
            title: 'Action',
            text: 'Duis eu nunc at nunc ultrices volutpat et et tellus. Nunc ultrices sollicitudin arcu, et lacinia lectus euismod nec. Curabitur luctus malesuada erat blandit auctor. Nunc interdum vehicula iaculis. Nunc dolor orci, tincidunt ac interdum a, malesuada sit amet nulla. In nibh nunc, tincidunt eu arcu at, fermentum facilisis mauris. Vestibulum rutrum pulvinar imperdiet. Sed sapien erat, molestie ut sem nec, luctus egestas eros. Ut interdum felis at auctor interdum. Curabitur eu mattis libero. Suspendisse non rhoncus ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed a metus vitae ante commodo tincidunt.',
            negative: {
                title: 'Nope'
            },
            positive: {
                title: 'Yay',
                onClick: function (e) {
                    alert('Action performed!');
                }
            }
        });
    });
    $('#show-not-cancelable').click(function () {
        showDialog({
            title: 'Not cancelable',
            text: 'This dialog can only be closed by using one of the buttons.',
            negative: {
                title: 'Nope'
            },
            positive: {
                title: 'Yay'
            },
            cancelable: false
        });
    });
    $('#show-loading').click(function () {
        showLoading();
        setTimeout(function () {
            hideLoading();
        }, 3000);
    });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
