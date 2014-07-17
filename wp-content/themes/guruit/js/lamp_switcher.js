if(typeof $ != 'function') {
    $ = jQuery;
}
if(typeof $ == 'function') {
    $(document).ready(function() {
        var $switcherOn = $('#elips_on');
        var $switcherOff = $('#elips_off');
        var $bulbOn = $('#bulb_on');
        var $bulbOff = $('#bulb_off');
        var $lampOn = $('#lamp_on');
        var $lampOff = $('#lamp_off');

        var left = $switcherOff.offset().left;
        var right = $switcherOn.offset().left;
        var width = $switcherOn.width();
        var center = (right + left ) / 2;

        $switcherOn.hide();

        $switcherOff.mousedown(function(e) {
            if($switcherOff.display != 'none') {
                $switcherOff.addClass('moving');
            }
            e.preventDefault();
        });
        $switcherOff.mousemove(function(e) {
            if(!$switcherOff.hasClass('moving')) {
                e.preventDefault();
                return;
            }
            $switcherOff.offset({'left': e.clientX - $switcherOff.width()/2});
            if($switcherOff.offset().left > center) {

                $switcherOff.hide();
                $switcherOn.show();

                $bulbOff.hide();
                $bulbOn.show();

                $lampOff.hide();
                $lampOn.show();

                $switcherOff.removeClass('moving');
                $switcherOff.offset({'left': left});
                $switcherOn.offset({'left': right});
            } else {
                if($switcherOff.offset().left < left-width/2) {
                    $switcherOff.offset({'left': left});
                    $switcherOn.offset({'left': right});
                    $switcherOff.removeClass('moving');
                }
            }
            e.preventDefault();
        });
        $switcherOff.mouseup(function(e) {
           $switcherOff.removeClass('moving');
            if($switcherOff.offset().left > center) {
                $switcherOff.hide();
                $switcherOn.show();
                $bulbOff.hide();
                $bulbOn.show();
                $lampOff.hide();
                $lampOn.show();
            }
            $switcherOff.offset({'left': left});
            $switcherOn.offset({'left': right});
        });


        $switcherOn.mousedown(function(e) {
            if ($switcherOn.display != 'none' ) {
                $switcherOn.addClass('moving');
            }
            e.preventDefault();
        });
        $switcherOn.mousemove(function(e) {
            if(!$switcherOn.hasClass('moving')) {
                e.preventDefault();
                return;
            }
            $switcherOn.offset({'left': e.clientX - $switcherOff.width()/2});
            if($switcherOn.offset().left < center) {
                $switcherOn.hide();
                $switcherOff.show();
                $bulbOn.hide();
                $bulbOff.show();
                $lampOn.hide();
                $lampOff.show();

                $switcherOn.removeClass('moving');
                $switcherOff.offset({'left': left});
                $switcherOn.offset({'left': right});
            } else {
                if($switcherOn.offset().left > right + width/2) {
                    $switcherOff.offset({'left': left});
                    $switcherOn.offset({'left': right});
                    $switcherOn.removeClass('moving');
                }
            }
        });
        $switcherOn.mouseup(function(e) {
            $switcherOn.removeClass('moving');
            if($switcherOn.offset().left < center) {
                $switcherOn.hide();
                $switcherOff.show();
                $bulbOn.hide();
                $bulbOff.show();
                $lampOn.hide();
                $lampOff.show();
            }
            $switcherOff.offset({'left': left});
            $switcherOn.offset({'left': right});
        });
    });
} else {
    console.log("No jquery");
}