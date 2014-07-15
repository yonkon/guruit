if(typeof $ != 'function') {
    $ = jQuery;
}
if(typeof $ == 'function') {
    $(document).ready(function() {
        var tooltip_div = document.createElement('div');
        tooltip_div.className = 'service_tooltip faded';
        $tooltip_div = $(tooltip_div);
        $('li.site_development_service').each(function (i, el) {
            $el = $(el);
            $el.hover(function(e) {
                if($tooltip_div.hasClass('faded')) {
                    $tooltip_div.fadeIn(250);
                }
                tooltip_div.style.marginLeft = 100*e.pageX/window.innerWidth - 35 +'vw';
                tooltip_div.style.marginTop = 100*e.pageY/window.innerHeight  - 25 +'vh';
                $el.parent().append(tooltip_div);
                if(!$tooltip_div.hasClass('faded')) {
                    $tooltip_div.fadeOut(2000, 500);
                    $tooltip_div.addClass('faded');
                } else {
                    $tooltip_div.removeClass('faded');
                }
            });
        });
    });
} else {
    console.log("No jquery");
}