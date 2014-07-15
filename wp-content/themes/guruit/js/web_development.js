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
                $tooltip_div.html(
                    ($('#'+e.target.id+'_tooltip').html())
                );
                $tooltip_div.show();
                tooltip_div.style.marginLeft = 100*e.pageX/window.innerWidth - 35 +'vw';
                tooltip_div.style.marginTop = 100*e.pageY/window.innerHeight  - 25 +'vh';
                $el.parent().append(tooltip_div);
            });
            $el.mouseout(function(e) {
                    $tooltip_div.hide();
            });
        });
    });
} else {
    console.log("No jquery");
}