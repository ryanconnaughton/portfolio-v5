/*!
 * imagesLoaded PACKAGED v4.1.1
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */

"use strict";

!(function (t, e) {
	"function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", e) : "object" == typeof module && module.exports ? module.exports = e() : t.EvEmitter = e();
})("undefined" != typeof window ? window : undefined, function () {
	function t() {}var e = t.prototype;return e.on = function (t, e) {
		if (t && e) {
			var i = this._events = this._events || {},
			    n = i[t] = i[t] || [];return -1 == n.indexOf(e) && n.push(e), this;
		}
	}, e.once = function (t, e) {
		if (t && e) {
			this.on(t, e);var i = this._onceEvents = this._onceEvents || {},
			    n = i[t] = i[t] || {};return n[e] = !0, this;
		}
	}, e.off = function (t, e) {
		var i = this._events && this._events[t];if (i && i.length) {
			var n = i.indexOf(e);return -1 != n && i.splice(n, 1), this;
		}
	}, e.emitEvent = function (t, e) {
		var i = this._events && this._events[t];if (i && i.length) {
			var n = 0,
			    o = i[n];e = e || [];for (var r = this._onceEvents && this._onceEvents[t]; o;) {
				var s = r && r[o];s && (this.off(t, o), delete r[o]), o.apply(this, e), n += s ? 0 : 1, o = i[n];
			}return this;
		}
	}, t;
}), (function (t, e) {
	"use strict";"function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter"], function (i) {
		return e(t, i);
	}) : "object" == typeof module && module.exports ? module.exports = e(t, require("ev-emitter")) : t.imagesLoaded = e(t, t.EvEmitter);
})(window, function (t, e) {
	function i(t, e) {
		for (var i in e) t[i] = e[i];return t;
	}function n(t) {
		var e = [];if (Array.isArray(t)) e = t;else if ("number" == typeof t.length) for (var i = 0; i < t.length; i++) e.push(t[i]);else e.push(t);return e;
	}function o(t, e, r) {
		return this instanceof o ? ("string" == typeof t && (t = document.querySelectorAll(t)), this.elements = n(t), this.options = i({}, this.options), "function" == typeof e ? r = e : i(this.options, e), r && this.on("always", r), this.getImages(), h && (this.jqDeferred = new h.Deferred()), void setTimeout((function () {
			this.check();
		}).bind(this))) : new o(t, e, r);
	}function r(t) {
		this.img = t;
	}function s(t, e) {
		this.url = t, this.element = e, this.img = new Image();
	}var h = t.jQuery,
	    a = t.console;o.prototype = Object.create(e.prototype), o.prototype.options = {}, o.prototype.getImages = function () {
		this.images = [], this.elements.forEach(this.addElementImages, this);
	}, o.prototype.addElementImages = function (t) {
		"IMG" == t.nodeName && this.addImage(t), this.options.background === !0 && this.addElementBackgroundImages(t);var e = t.nodeType;if (e && d[e]) {
			for (var i = t.querySelectorAll("img"), n = 0; n < i.length; n++) {
				var o = i[n];this.addImage(o);
			}if ("string" == typeof this.options.background) {
				var r = t.querySelectorAll(this.options.background);for (n = 0; n < r.length; n++) {
					var s = r[n];this.addElementBackgroundImages(s);
				}
			}
		}
	};var d = { 1: !0, 9: !0, 11: !0 };return o.prototype.addElementBackgroundImages = function (t) {
		var e = getComputedStyle(t);if (e) for (var i = /url\((['"])?(.*?)\1\)/gi, n = i.exec(e.backgroundImage); null !== n;) {
			var o = n && n[2];o && this.addBackground(o, t), n = i.exec(e.backgroundImage);
		}
	}, o.prototype.addImage = function (t) {
		var e = new r(t);this.images.push(e);
	}, o.prototype.addBackground = function (t, e) {
		var i = new s(t, e);this.images.push(i);
	}, o.prototype.check = function () {
		function t(t, i, n) {
			setTimeout(function () {
				e.progress(t, i, n);
			});
		}var e = this;return this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? void this.images.forEach(function (e) {
			e.once("progress", t), e.check();
		}) : void this.complete();
	}, o.prototype.progress = function (t, e, i) {
		this.progressedCount++, this.hasAnyBroken = this.hasAnyBroken || !t.isLoaded, this.emitEvent("progress", [this, t, e]), this.jqDeferred && this.jqDeferred.notify && this.jqDeferred.notify(this, t), this.progressedCount == this.images.length && this.complete(), this.options.debug && a && a.log("progress: " + i, t, e);
	}, o.prototype.complete = function () {
		var t = this.hasAnyBroken ? "fail" : "done";if ((this.isComplete = !0, this.emitEvent(t, [this]), this.emitEvent("always", [this]), this.jqDeferred)) {
			var e = this.hasAnyBroken ? "reject" : "resolve";this.jqDeferred[e](this);
		}
	}, r.prototype = Object.create(e.prototype), r.prototype.check = function () {
		var t = this.getIsImageComplete();return t ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this.proxyImage = new Image(), this.proxyImage.addEventListener("load", this), this.proxyImage.addEventListener("error", this), this.img.addEventListener("load", this), this.img.addEventListener("error", this), void (this.proxyImage.src = this.img.src));
	}, r.prototype.getIsImageComplete = function () {
		return this.img.complete && void 0 !== this.img.naturalWidth;
	}, r.prototype.confirm = function (t, e) {
		this.isLoaded = t, this.emitEvent("progress", [this, this.img, e]);
	}, r.prototype.handleEvent = function (t) {
		var e = "on" + t.type;this[e] && this[e](t);
	}, r.prototype.onload = function () {
		this.confirm(!0, "onload"), this.unbindEvents();
	}, r.prototype.onerror = function () {
		this.confirm(!1, "onerror"), this.unbindEvents();
	}, r.prototype.unbindEvents = function () {
		this.proxyImage.removeEventListener("load", this), this.proxyImage.removeEventListener("error", this), this.img.removeEventListener("load", this), this.img.removeEventListener("error", this);
	}, s.prototype = Object.create(r.prototype), s.prototype.check = function () {
		this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src = this.url;var t = this.getIsImageComplete();t && (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), this.unbindEvents());
	}, s.prototype.unbindEvents = function () {
		this.img.removeEventListener("load", this), this.img.removeEventListener("error", this);
	}, s.prototype.confirm = function (t, e) {
		this.isLoaded = t, this.emitEvent("progress", [this, this.element, e]);
	}, o.makeJQueryPlugin = function (e) {
		e = e || t.jQuery, e && (h = e, h.fn.imagesLoaded = function (t, e) {
			var i = new o(this, t, e);return i.jqDeferred.promise(h(this));
		});
	}, o.makeJQueryPlugin(), o;
});
var isMobile = false; //initiate as false
// device detection
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
var vidExists = !!document.getElementById("homeVideo");

function showOverlayWindow(data) {
	$('body').addClass('disable-scroll');
	$('#workData').show().addClass('show-window');

	$.get('includes/work/' + data + '.php', function (data) {
		$('#workData .content').html(data);
		triggerSlickSlider();
	});
}

function closeOverlayWindow() {
	var overlayWindowElem = $('.open-window');
	overlayWindowElem.each(function () {
		$(this).removeClass('show-window');
	});
	overlayWindowElem.hide();
	$('body').removeClass('disable-scroll');

	//unslick
	// $('.slide-inner-window').each(function(){
	//     $(this).slick('unslick');
	// });
}

function triggerSlickSlider() {
	var slickInOverlay = $('#work-slick');
	var slickTrack = $('.slick-track', slickInOverlay);
	slickInOverlay.slick({
		infinite: true,
		dots: true,
		autoplay: false,
		autoplaySpeed: 4000,
		pauseOnDotsHover: true,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				infinite: true
			}
		}, {
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				dots: true
			}
		}, {
			breakpoint: 300,
			settings: "unslick"
		}],
		prevArrow: '<div class="slick-prev"><div class="arrow-left"></div></div>',
		nextArrow: '<div class="slick-next"><div class="arrow-right"></div></div>'
	});

	$('.close-overlay-window').bind('click', function (e) {
		e.preventDefault();
		$('header').show();
		closeOverlayWindow();
		return false;
	});
}

$(function () {
	var windowHeight = $(window).outerHeight();
	$('.full-height').css('height', windowHeight);

	if (!isMobile && vidExists) {
		document.getElementById("homeVideo").innerHTML = '<source src="img/bg.mp4" type="video/mp4"><source src="img/bg.webm" type="video/webm">';
	}

	$('img').closest('article, figure, div').addClass('is-loading');
	$('body').imagesLoaded().progress(function (instance, image) {
		if (image.isLoaded) {
			$(image.img).fadeIn('fast');
			$(image.img).closest('article, figure, div').removeClass('is-loading');
		}
	});

	// Folio filter
	$(window).on('load', function () {

		$('article').on('click', function () {
			url = '';
			if ($(this).hasClass('ux')) {
				url = $(this).data('url');
			} else {
				url = $(this).data('work');
			}
			var identifier = $(this).data('identifier');
			var slickId = $(this).data('slick');

			//We want to show overlay window on if visual design
			if ($(this).hasClass('ux')) {
				window.location.href = url;
			} else {
				$('header').hide();
				showOverlayWindow(url);
			}

			return false;
		});

		highlightNavLink();
		scrollToSection();
		// init Isotope
		var $container = $('.isotope').isotope({
			itemSelector: 'article',
			layoutMode: 'fitRows'
		});
		// filter functions
		var filterFns = {
			// show if number is greater than 50
			numberGreaterThan50: function numberGreaterThan50() {
				var number = $(this).find('.number').text();
				return parseInt(number, 10) > 50;
			}
		};
		// bind filter button click
		$('.work-filter').on('click', 'li a', function (e) {
			e.preventDefault();
			var filterValue = $(this).attr('data-filter');
			// use filterFn if matches value
			filterValue = filterFns[filterValue] || filterValue;
			$container.isotope({ filter: filterValue });
		});
		// change is-checked class on buttons
		$('.work-filter').each(function (i, filter) {
			var $filter = $(filter);
			$filter.on('click', 'li a', function () {
				$('.work-filter a').removeClass('active');
				$(this).addClass('active');
			});
		});
	});

	// On click <a> with class .scroll - Animate scroll to the elements
	$('.scroll-down, .scroll').on('click', function (e) {
		e.preventDefault();
		var url = $(this).attr('href');
		$("html, body").animate({
			scrollTop: $(url).offset().top - 75
		}, 1000);
		// window.location.hash = $(this).attr("href");
		return false;
	});

	// Scroll top
	$('.scroll-top').on('click', function (e) {
		scrollTop();
		return false;
	});

	// Scroll bottom
	$('.scroll-bottom').on('click', function (e) {
		e.preventDefault();
		scrollBottom();
		return false;
	});

	// Set active nav link
	$('body').on('click', function () {
		highlightNavLink();
	});

	// Remove active on nav click
	$('header nav a').on('click', function () {
		$('nav li').removeClass('active');
	});

	// Play/pause header vid
	$('.video-control a').on('click', function (e) {
		e.preventDefault();
		if ($(this).hasClass('active')) {
			$('#homeVideo').get(0).play();
			$(this).removeClass('active');
		} else {
			$('#homeVideo').get(0).pause();
			$(this).addClass('active');
		}
	});

	// On scroll up, below fold - Add class to header
	var lastScrollTop = 0;
	$(window).scroll(function () {
		var sticky = $('header'),
		    scroll = $(window).scrollTop(),
		    mainDiv = $('#main'),
		    tempDiv = '<div id="temp-div"></div>',
		    comp = $('section.full-height');

		var st = $(this).scrollTop();
		if (st > lastScrollTop && scroll >= 500) {
			comp.removeClass('comp');
			sticky.removeClass('fixed');
		} else {
			comp.addClass('comp');
			sticky.addClass('fixed').css('height', 'auto');
		}
		lastScrollTop = st;
	});

	// Mobile navigation
	$('.mobile-nav').on('click', function (e) {
		e.preventDefault();
		$(this).toggleClass('open');
		$('.mobile-nav-bar').toggleClass('open');
		//$('nav ul').slideToggle('fast');
	});

	// var lastScrollTop = 0;
	// $(window).scroll(function (event) {
	//     var st = $(this).scrollTop();
	//     if (st > lastScrollTop) {
	//         $('header').css('top', '-100%')
	//     } else {
	//         $('header').css('top', '0')
	//     }
	//     lastScrollTop = st;
	// });

	// Form validation
	var nameValid = false;
	var emailValid = false;
	var messageValid = false;
	// Validate on keypress
	$('#name').on('keydown', function (e) {
		if ($(this).val() == "") {
			$(this).addClass('error').removeClass('pass');
			nameValid = false;
		} else {
			$(this).removeClass('error').addClass('pass');
			nameValid = true;
		}
	});
	$('#email').on('keydown', function (e) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var isValid = regex.test($(this).val());
		if ($(this).val() != "" && isValid) {
			$(this).removeClass('error').addClass('pass');
			emailValid = true;
		} else {
			$(this).addClass('error').removeClass('pass');
			emailValid = false;
		}
	});
	$('#message').on('keydown', function (e) {
		if ($(this).val() == "") {
			$(this).addClass('error').removeClass('pass');
			messageValid = false;
		} else {
			$(this).removeClass('error').addClass('pass');
			messageValid = true;
		}
	});
	// Validate on blur
	$('#name').on('blur', function (e) {
		if ($(this).val() == "") {
			$(this).addClass('error').removeClass('pass');
			nameValid = false;
		} else {
			$(this).removeClass('error').addClass('pass');
			nameValid = true;
		}
	});
	$('#email').on('blur', function (e) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var isValid = regex.test($(this).val());
		if ($(this).val() != "" && isValid) {
			$(this).removeClass('error').addClass('pass');
			emailValid = true;
		} else {
			$(this).addClass('error').removeClass('pass');
			emailValid = false;
		}
	});
	$('#message').on('blur', function (e) {
		if ($(this).val() == "") {
			$(this).addClass('error').removeClass('pass');
			messageValid = false;
		} else {
			$(this).removeClass('error').addClass('pass');
			messageValid = true;
		}
	});
	$('form input').on('keydown blur', function () {
		showSubmit(nameValid, emailValid, messageValid);
	});
	$('form textarea').on('keydown blur', function () {
		var message = $('message').val();
		if (nameValid && emailValid && message != "") {
			showSubmit(nameValid, emailValid, true);
		}
	});

	$('aside#contact').delegate("*", "focus blur", function () {
		var fields = $(this);
		setTimeout(function () {
			if (fields.val() == '') {
				fields.parents('.has-float-label').find('label').toggleClass('focused', fields.is(":focus"));
				fields.toggleClass('has-input', fields.is(":focus"));
			}
		}, 0);
	});
});

function showSubmit(nameValid, emailValid, messageValid) {
	if (nameValid && emailValid && messageValid) {
		$('form .btn-send-message').prop('disabled', false);
		$('form .btn-send-message').removeClass('invalid-btn');
	} else {
		$('form .btn-send-message').prop('disabled', true);
		$('form .btn-send-message').addClass('invalid-btn');
	}
}

// Highlight active nav link
function highlightNavLink() {
	var hash = window.location.hash;
	switch (hash) {
		case "#main":
			$('nav li a.work').parent().addClass('active');
			break;
		case "#contact":
			$('nav li a.contact').parent().addClass('active');
			break;
	}
}
function scrollToSection() {
	var hash = window.location.hash;
	switch (hash) {
		case "#home":
			scrollTop();
			break;
		case "#contact":
			scrollBottom();
			break;
	}
}
function scrollTop() {
	$("html, body").animate({
		scrollTop: $('html, body').offset().top
	}, 1000);
}

function scrollBottom() {
	$("html, body").animate({
		scrollTop: $(document).height()
	}, 1000);
}

$(document).ready(function () {
	if ($(window).width() <= 600) {
		//Trigger click UX
		var targetContainer = $('.work-filter');
		var targetToClick = $("a[data-filter='.ux']", targetContainer);
		targetToClick.addClass('active');
		targetToClick.click();
		targetToClick.trigger('click');
	}
});

