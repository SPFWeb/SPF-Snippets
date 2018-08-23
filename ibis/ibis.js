/*Ibis FIT5 Cart Widget : v1.1 - 16 Aug 2018*/
function ibisCallbackCart(a, i, t, s) {
    $ibisCart = jQuery(".ibis-widget-cart"), $ibisCart.html(""), jQuery.each(a.CartSummary, function(a, r) {
        $ibisCart.append('<div class="" id="fit5-cart-widget"><span uk-icon="icon: cart;ratio: 2" class="uk-icon" style="color: white;"><span class="badge cart-widget-badge">' + r.TotalUnits + "</span></span></div>"), r.TotalUnits > 0 && (jQuery("#fit5-cart-widget").addClass("has-item"), jQuery("#fit5-cart-widget").on("click", function() {
            // window.location.hostname will grab the current domain name
          	// the site is sitting on console.log(location.hostname); for testing
          	i = "https://" + window.location.hostname + "/";
          	// Remove tekapo/ once domain has been assigned to tekaposprings.co.nz
          	// or the link will return a 404
          	if ("sa" == t) var a = i + "tekapo/cart";
            else a = "//" + window.location.hostname + s;
            jQuery("#fit5-cart-widget").click(location.href = a)
        }))
    })
}

function ibisRefreshCart(a) {
    if (void 0 !== a.mode) var i = a.cartDir,
        t = a.appURL,
        s = "if";
    else t = a.appURL, s = "sa";
    jQuery.ajax({
        url: t + "/Cart/jsonP_Summary",
        dataType: "jsonp",
        jsonpCallback: "ibisCallbackCart",
        success: function(a) {
            ibisCallbackCart(a, t, s, i)
        }
    })
}
jQuery.noConflict();
/*Ibis Departures Widget : v1.01 - 23 July 2018*/
function ibisCallbackDepartures(i, e, r, a, s, t, o) {
    $ibisDepartures = jQuery(".ibis-widget-departures"), $ibisDepartures.html(""), jQuery.each(i.products, function(i, u) {
        jQuery.each(u.departures, function(i, d) {
            var n = d.time.substring(0, 2),
                l = d.time.substring(3, 5),
                p = n > 11 ? "pm" : "am";
            if (1 == r) var c = n + ":" + l;
            else n > 12 ? n -= 12 : 0 == n ? n = 12 : n < 10 && (n = n.substring(1, 2)), c = n + ":" + l + " " + p;
            var b = '<div class="ibis-avail">' + d.space + "</div>";
            0 == a && (b = "");
            var v = '<div class="ibis-book"><a href="' + e + d.bookurl + '">' + t + "</a></div>";
            0 == s && (v = ""), 1 == o && (v = '<div class="ibis-book"><a href="' + e + d.bookurl + '" target="_blank">' + t + "</a></div>"), $ibisDepartures.append('<div class="ibis-clearfix"><div class="ibis-dept">' + c + '</div><div class="ibis-prod">' + u.name + "</div>" + b + v + "</div>")
        })
    });
    var u = Math.max.apply(null, jQuery(".ibis-dept").map(function() {
        return jQuery(this).outerWidth(!0)
    }).get());
    jQuery(".ibis-dept").css("width", u), u = Math.max.apply(null, jQuery(".ibis-prod").map(function() {
        return jQuery(this).outerWidth(!0)
    }).get()), jQuery(".ibis-prod").css("width", u), u = Math.max.apply(null, jQuery(".ibis-avail").map(function() {
        return jQuery(this).outerWidth(!0)
    }).get()), jQuery(".ibis-avail").css("width", u), $ibisDepartures.wrap('<div class="ibis-clearfix" id="ibis-departures-container"></div>')
}

function ibisWidgetDepartures(i) {
    var e = i.appURL,
        r = new Date;
    void 0 != i.defaultDate && (r = i.defaultDate);
    var a = r.getDate(),
        s = r.getMonth() + 1,
        t = r.getFullYear() + "-" + s + "-" + a,
        o = "";
    void 0 != i.prodCode && (o = i.prodCode);
    var u = "Book Now";
    void 0 != i.bookLinkText && (u = i.bookLinkText), jQuery.ajax({
        url: e + "/departures/ByProduct_Json?workingdate=" + t + "&productcode=" + o,
        dataType: "jsonp",
        jsonpCallback: "ibisCallbackDepartures",
        success: function(e) {
            ibisCallbackDepartures(e, i.appURL, i.showIn24H, i.showAvail, i.showBookLink, u, i.linkOpenNewWindow)
        },
        error: function(i, e) {
            console.log(i), console.log("errorThrown:" + e)
        }
    })
}
jQuery.noConflict();
/*Ibis Iframe ScrollToElement : v.1.0 - 21 Aug 2018*/
function ibisScrollToElement(o) {
    var t = 0;
    void 0 !== o.offset && (t = o.offset);
    var i = "auto";
    1 == o.animation && (i = "smooth");
    var a = jQuery(o.target).position().top + t;
    window.scrollTo({
        top: a,
        behavior: i
    })
}
