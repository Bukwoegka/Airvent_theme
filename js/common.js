jQuery(document).ready(function () {
    jQuery('.call-button-head').click(function () {
        jQuery('.hidden_form').fadeIn(400);
        jQuery('.bg_popup').fadeIn(400);

        jQuery('.bg_popup').click(function () {
            jQuery('.hidden_form').fadeOut(400);
            jQuery('.bg_popup').fadeOut(400);
        })
    });
    jQuery('.offer-button').click(function () {
        jQuery('.hidden_form_order').fadeIn(400);
        jQuery('.bg_popup').fadeIn(400);

        jQuery('.bg_popup').click(function () {
            jQuery('.hidden_form_order').fadeOut(400);
            jQuery('.bg_popup').fadeOut(400);
        })
    })
    jQuery('.menu_icon').click(function () {
        jQuery('.header__nav-list').toggleClass('active_menu');
    });
    jQuery("#top_form").submit(function () {
        jQuery.ajax({
            type: "POST",
            url: "/wp-content/themes/airvent/mail.php",
            data: jQuery(this).serialize()
        }).done(function () {
            jQuery(this).find("input").val("");
            alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
            jQuery("#top_form").trigger("reset");
            jQuery('.hidden_form').fadeOut(400);
            jQuery('.bg_popup').fadeOut(400);
        });
        return false;
    });
    jQuery("#bottom_form").submit(function () {
        jQuery.ajax({
            type: "POST",
            url: "/wp-content/themes/airvent/mailbigform.php",
            data: jQuery(this).serialize()
        }).done(function () {
            jQuery(this).find("input").val("");
            alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
            jQuery("#bottom_form").trigger("reset");
            jQuery('.hidden_form_order').fadeOut(400);
            jQuery('.bg_popup').fadeOut(400)
        });
        return false;
    });
        jQuery("#bottom_form2").submit(function () {
        jQuery.ajax({
            type: "POST",
            url: "/wp-content/themes/airvent/mailbigform.php",
            data: jQuery(this).serialize()
        }).done(function () {
            jQuery(this).find("input").val("");
            alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
            jQuery("#bottom_form2").trigger("reset");
        });
        return false;
    });
});
