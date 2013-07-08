var pullouts_container = !1,
    pow_widgets = [],
    pow_opened = "",
    pow_mouse_is_inside = !1,
    trigger_on = !1,
    trigger_lunched = !1,
    processing = [];
if ("undefined" != typeof powVars) {
    for (i in powVars) document.getElementById(i) ? document.getElementById(i).style.display = "none" : delete powVars[i];
    jQuery(window).load(function () {
        setTimeout("pullouts();", 100);
        pullouts_container = jQuery('<div id="pullouts" />');
        jQuery("body").append(pullouts_container)
    });
    var pullouts = function () {
        function a(a) {
            var b = powVars[i].style.tab_offset ? parseInt(powVars[i].style.tab_offset) : 0;
            switch (powVars[i].style.tab_offset_type) {
            case "%":
                return b = Math.round(a * b / 100), c(powVars[i].position.side, b, a), b;
            case "px":
                return c(powVars[i].position.side, b, a), b
            }
        }
        function c(a, c, d) {
            if (!powVars[i].style.rounded) return !1;
            if (0 < c && c < d) {
                if ("left" == a || "right" == a) e.css("border-bottom-" + b[a] + "-radius", "10px"), e.css("border-top-" + b[a] + "-radius", "10px");
                if ("top" == a || "bottom" == a) e.css("border-" + b[a] + "-left-radius", "10px"), e.css("border-" + b[a] + "-right-radius", "10px")
            } else if (c == d) {
                if ("left" == a || "right" == a) e.css("border-bottom-" + b[a] + "-radius", "0px"), e.css("border-top-" + b[a] + "-radius", "10px");
                if ("top" == a || "bottom" == a) e.css("border-" + b[a] + "-left-radius", "10px"), e.css("border-" + b[a] + "-right-radius", "0px")
            }
        }
        var b = {
            top: "bottom",
            bottom: "top",
            left: "right",
            right: "left"
        }, d = !1;
        jQuery.browser.msie && 9 > parseInt(jQuery.browser.version, 10) && (d = !0);
        var k = 0;
        for (i in powVars) {
            k++;
            var m = jQuery("#" + i);
            m.css({
                display: "block"
            });
            m.css("width", "auto");
            var e = jQuery('<div id="pullout-' + k + '" class="pullouts"><div class="pullout-content clearfix">');
            e.find(".pullout-content").append(m);
            e.appendTo(pullouts_container);
            var j = !1,
                l = !1,
                n = !1,
                m = label_close = "";
            if (!powVars[i].style.no_label || !powVars[i].style.icon) m = powVars[i].style.open_label ? powVars[i].style.open_label : powVars[i].style.label ? powVars[i].style.label : "Open", label_close = powVars[i].style.close_label ? powVars[i].style.close_label : powVars[i].style.open_label ? powVars[i].style.open_label : powVars[i].style.label ? powVars[i].style.label : "Close";
            powVars[i].style.width && (j = parseInt(powVars[i].style.width));
            j || (j = e.outerWidth(!0));
            e.css("width", j + "px");
            var f = powVars[i].position.side;
            e.addClass("side_" + f);
            powVars[i].style.rounded && e.addClass("rounded");
            powVars[i].style.borders && e.addClass("borders");
            powVars[i].position.scroll && "bottom" != f && e.css("position", "absolute");
            if ("0" == powVars[i].position.anchor) var r = "top",
                s = "left";
            else r = "bottom", s = "right";
            var h = jQuery('<div class="pullout-button"><span>' + m + "</span></div>");
            e.append(h);
            if (powVars[i].style.icon) {
                var l = powVars[i].style.icon,
                    g = l.split("_"),
                    n = 36 * parseInt(g[0]),
                    g = 36 * parseInt(g[1]);
                h.prepend('<div class="icon ' + l + '"></div>');
                e.find(".icon." + l).css({
                    "background-position": "-" + n + "px  -" + g + "px"
                })
            }
            1 > m.length && (e.find(".pullout-button span").remove(), e.find(".icon").css("margin", "10px"));
            g = {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            };
            g.left = parseInt(h.css("border-left-width"));
            g.right = parseInt(h.css("border-right-width"));
            g.top = parseInt(h.css("border-top-width"));
            g.bottom = parseInt(h.css("border-bottom-width"));
            var p = h.outerWidth(!1),
                q = h.outerHeight(!1);
            h.css("min-width", p + "px");
            l = e.outerHeight(!1);
            if ("left" == f || "right" == f) {
                e.css("min-height", l + "px");
                var n = j + g[b[f]],
                    o = p + g[b[f]];
                btn_offset = a(l + 2 * g.top - q);
                j = -1 * g.top + btn_offset;
                h.css(b[f], "-" + o + "px").css("top", j + "px")
            } else e.css("height", l + "px"), n = l + g[b[f]], o = q, btn_offset = a(j - p), j = -1 * g.left + btn_offset, h.css(b[f], "-" + o + "px").css("left", j + "px");
            if (!d && powVars[i].style.rotate && ("left" == f || "right" == f)) h.addClass("rotate"), o = q - g[b[f]], btn_offset = a(l - p), j = -1 * q + btn_offset, h.css(b[f], "-" + o + "px").css("top", j + "px");
            "left" == f || "right" == f ? e.css(r, powVars[i].position.distance) : e.css(s, powVars[i].position.distance);
            e.css(f, "-" + n + "px").addClass("pullout-closed");
            powVars[i].style.color && (e.css("background-color", powVars[i].style.color), h.css("background-color", powVars[i].style.color));
            powVars[i].style.text_color && e.css("color", powVars[i].style.text_color);
            powVars[i].style.link_color && e.find("a").css("color", powVars[i].style.link_color);
            powVars[i].style.borders && powVars[i].style.border_color && e.css("border-color", powVars[i].style.border_color);
            h.css("border-color", powVars[i].style.border_color);
            pow_widgets.push({
                id: "pullout-" + k,
                position: n,
                side: f,
                label_open: m,
                label_close: label_close,
                trigger_on: powVars[i].style.show_on,
                speed: powVars[i].style.speed,
                timer: 1E3 * parseInt(powVars[i].behavior.timer),
                element: powVars[i].behavior.element,
                easing: powVars[i].behavior.easing,
                n_pages: powVars[i].behavior.n_pages
            })
        }
        pow_listen_appear();
        pow_start_page_count();
        pow_start_timer();
        jQuery(".pullouts").mouseenter(function () {
            pow_mouse_is_inside = !0;
            pow_reset_trigger();
            var a = jQuery(this).attr("id"),
                a = get_pow(a);
            "mouseover" == a.trigger_on ? pow_mouseover(a.id) : pow_click(a.id)
        }).mouseleave(function () {
            pow_mouse_is_inside = !1
        });
        jQuery("body").mouseup(function () {
            pow_mouse_is_inside || pow_close(pow_opened)
        })
    }
}
function pow_listen_appear() {
    for (i in pow_widgets) {
        var a = pow_widgets[i].id;
        if (("appear" == pow_widgets[i].trigger_on || "appear_once" == pow_widgets[i].trigger_on) && 0 < pow_widgets[i].element.length) {
            var c = !1;
            "appear_once" == pow_widgets[i].trigger_on && (c = !0);
            jQuery(pow_widgets[i].element).appear(function (a, c) {
                do_pullout(c)
            }, {
                one: c,
                data: [a]
            })
        }
    }
}
function pow_click(a) {
    jQuery(".pullout-button").click(function () {
        do_pullout(a)
    })
}
function pow_mouseover(a) {
    pow_opened != a && do_pullout(a);
    jQuery("#" + a).bind("mouseleave", function () {
        setTimeout("pow_delay_mouseout_close()", 500)
    })
}
function pow_delay_mouseout_close() {
    pow_mouse_is_inside || pow_close(pow_opened)
}
function pow_reset_trigger() {
    jQuery(".pullout-button").unbind("click");
    jQuery(".pullout-button").unbind("mouseover")
}
function get_pow(a) {
    for (i in pow_widgets) if (pow_widgets[i].id == a) return pow_widgets[i];
    return !1
}
function do_pullout(a) {
    if (!jQuery.inArray(a, processing)) return !1;
    jQuery("#" + a).is(".pullout-opened") ? pow_close(a) : pow_open(a)
}
function pow_open(a) {
    var c = get_pow(a);
    if (c) {
        0 < pow_opened.length && pow_opened != a && pow_close(pow_opened);
        var b = "#" + c.id;
        jQuery(b).removeClass("pullout-closed");
        jQuery(b).addClass("pullout-opened");
        jQuery(b + " .pullout-button span").html(c.label_close);
        pow_slide(c, "+");
        pow_opened = a
    }
}
function pow_close(a) {
    var c = get_pow(a);
    if (c) {
        0 < pow_opened.length && pow_opened == a && (pow_opened = "");
        var b = "#" + c.id;
        jQuery(b + " .pullout-button span").html(c.label_open);
        processing.push(a);
        pow_slide(c, "-");
        setTimeout(function () {
            jQuery(b).removeClass("pullout-opened");
            jQuery(b).addClass("pullout-closed");
            if (0 < processing.length) {
                var c = jQuery.inArray(a, processing); - 1 != c && processing.splice(c, 1)
            }
        }, parseInt(c.speed))
    }
}
function pow_slide(a, c) {
    var b = [];
    b[a.side] = c + "=" + a.position + "px";
    var d = parseInt(a.speed);
    jQuery("#" + a.id).animate(b, d, a.easing)
}
function pow_start_timer() {
    for (i in pow_widgets) {
        var a = pow_widgets[i].id,
            c = "pow_" + a + "_timer",
            b = pow_widgets[i].trigger_on;
        if ("timer" == b || "timer_once" == b) {
            "timer" == b && eraseCookie(c);
            var d = readCookie(c),
                k = parseInt(pow_widgets[i].timer);
            d ? -1 != d && (d = (new Date).getTime() - d, d < k ? (k -= d, setTimeout(function (a, b, c) {
                return function () {
                    do_pullout(a);
                    "timer_once" == c ? createCookie(b, - 1, 2592E3) : eraseCookie(b)
                }
            }(a, c, b), k)) : 3 > d - k && (do_pullout(a), "timer_once" == b ? createCookie(c, - 1, 2592E3) : eraseCookie(c))) : (d = new Date, createCookie(c, d.getTime(), 2592E3), setTimeout(function (a, b, c) {
                return function () {
                    do_pullout(a);
                    "timer_once" == c ? createCookie(b, - 1, 2592E3) : eraseCookie(b)
                }
            }(a, c, b), k))
        }
    }
}
function pow_count_pages() {
    var a = "pow_" + pow_widgets[i].id + "n_pages",
        c = readCookie(a);
    c ? c++ : c = 1;
    createCookie(a, c, 3600)
}
function pow_start_page_count() {
    for (i in pow_widgets) {
        var a = pow_widgets[i].id,
            c = "pow_" + a + "n_pages",
            b = pow_widgets[i].trigger_on;
        if ("n_pages" == b || "n_pages_once" == b) {
            var d = readCookie(c);
            d || (d = 0);
            d++;
            createCookie(c, d, 3600);
            d == pow_widgets[i].n_pages && (do_pullout(a), "n_pages" == b && eraseCookie(c));
            d > pow_widgets[i].n_pages && "n_pages" == b && eraseCookie(c)
        }
    }
}
function createCookie(a, c, b) {
    if (b) {
        var d = new Date;
        d.setTime(d.getTime() + 1E3 * b);
        b = "; expires=" + d.toGMTString()
    } else b = "";
    document.cookie = a + "=" + c + b + "; path=/"
}
function readCookie(a) {
    for (var a = a + "=", c = document.cookie.split(";"), b = 0; b < c.length; b++) {
        for (var d = c[b];
        " " == d.charAt(0);) d = d.substring(1, d.length);
        if (0 == jQuery.inArray(a, d)) return d.substring(a.length, d.length)
    }
    return null
}
function eraseCookie(a) {
    createCookie(a, "", - 1)
};