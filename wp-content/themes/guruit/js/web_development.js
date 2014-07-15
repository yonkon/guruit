if(typeof $ == 'function') {
    $(document).ready(function() {
        $('li.site_development_service').each(i, el) {
            $el = $(el);
            $el.onmouseover(function(e) {
                var div = document.createElement('div');
                div.cssName = 'service_tooltip';
                document.appendChild(div);
            });
        }
    }
} else {
    console.log("No jquery");

}