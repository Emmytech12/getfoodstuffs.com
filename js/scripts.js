function _call_carousel(cnt) {
	// INIT CAROUSEL
	window["carousel_" + cnt] = new CgCarousel(
	  "#js-carousel_" + cnt,
	  window["carousel_options_" + cnt],
	  {}
	);
	// Navigation
	window["next_" + cnt] = document.getElementById("js-carousel__next_" + cnt);
	window["next_" + cnt].addEventListener("click", () =>
	  window["carousel_" + cnt].next()
	);
	window["prev_" + cnt] = document.getElementById("js-carousel__prev_" + cnt);
	window["prev_" + cnt].addEventListener("click", () =>
	  window["carousel_" + cnt].prev()
	);
}


$(window).scroll(function () {
	const scrollHeight = $(window).scrollTop();
	const windowWidth = $(window).width();
  
	if (scrollHeight >= 100) {
		$("#back2Top").fadeIn(1000);
	} else {
		$("#back2Top").fadeOut(1000);
	}
  
	if (scrollHeight >= 300) {
		$("header").addClass("scrolled");
	} else {
		$("header").removeClass("scrolled");
	}

	if (windowWidth <= 870) {
		$(".sticky-div").css({
			"position": "relative",
			"top": "0",
			"height": "auto", 
			"overflow": "visible" 
		});
	} else {
		if (scrollHeight >= 100) {
			$(".sticky-div").css({
				"position": "sticky",
				"top": "80px",
				"min-height": "280px",
				"border-radius": "10px",
			});
		} else {
			$(".sticky-div").css({
				"position": "relative",
				"top": "0",
				"height": "auto",
			});
		}
	}
});
  

function _back_to_top(){
	event.preventDefault();
	$("html, body").animate({ scrollTop: 0 }, "slow");
	return false;
}

function _open_menu(){
	$('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	$('.live-chat-back-div').animate({'margin-left':'-100%'},400);
	$('.index-menu-back-div').animate({'margin-left':'0'},400);
}

function _open_live_chat(){
	$('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	$('.index-menu-back-div').animate({'margin-left':'-100%'},400);
	$('.live-chat-back-div').animate({'margin-left':'0'},400);
}

function _close_side_nav(){
	$('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
	$('.index-menu-back-div,.live-chat-back-div').animate({'margin-left':'-100%'},400);
}

function _open_li(ids){
	$('#'+ids+'-sub-li').toggle('slow');
}

function _alertClose2(){
	$('#get-more-div').html('').fadeOut(200);
}

function _alertClose(event) {
	var targetElement = event.target;
	if (!targetElement.closest('.cart-form-back-div')) {
	  let text = '';
	  text +=
	  '<div class="alert-loading-div">' +
		'<div class="icon"><img src="'+ website_url +'/all-images/images/loading.gif" width="20px" alt="Loading"/></div>' +
		'<div class="text"><p>LOADING...</p></div>'+
		'</div>';
	  $('#get-more-div').html(text).fadeOut(200);
	}
}

function _actionAlert(message,status){
	let text = '';
	$('.all-alert-back-div').html(text).css('display', 'flex');
	if(status==true){
		text +=
		'<div class="success-alert-div animated fadeInDown">' +
			'<div class="icon"><i class="bi-check-all"></i></div>'+
			'<div class="text"><p>'+message+'</p></div>'+
		'</div>';
	}else{
		text +=
		'<div class="failed-alert-div animated fadeInDown">' +
			'<div class="icon"><i class="bi-exclamation-octagon-fill"></i></div>'+
			'<div class="text"><p>'+message+'</p></div>'+
		'</div>';
	}
	$('.all-alert-back-div').html(text).fadeIn(500).delay(3000).fadeOut(100);
}


///// for FAQs
function _collapse(div_id) {
    const $currentFaq = $('#' + div_id);
    const $currentIcon = $('#' + div_id + 'num');
    const $currentAnswer = $('#' + div_id + 'answer');

    $('.faq-toggle.active-faq').each(function () {
        if (this.id !== div_id) {
            $(this).removeClass('active-faq');
            $(this).find('.expand-div').html('&nbsp;<i class="bi-plus"></i>&nbsp;');
            $(this).find('.answer-div').slideUp('slow');
        }
    });

    const isActive = $currentFaq.toggleClass('active-faq').hasClass('active-faq');
    $currentIcon.html(isActive ? '&nbsp;<i class="bi-dash"></i>&nbsp;' : '&nbsp;<i class="bi-plus"></i>&nbsp;');
    $currentAnswer.slideToggle('slow');
}

function _navigateBtn(){
	$(document).ready(function () {
		const container = $(".btn-div-in ul");
		const items = $(".btn-div-in ul li");
		const itemWidth = items.outerWidth(true);
		const itemsCount = items.length;
		let currentIndex = 0;
		let visibleItems = 3;
	
		$(".right-btn").on("click", function () {
			if (currentIndex < itemsCount - visibleItems) {
				currentIndex++;
				container.css("transform", `translateX(-${currentIndex * itemWidth}px)`);
			}
		});
	
		$(".left-btn").on("click", function () {
			if (currentIndex > 0) {
				currentIndex--;
				container.css("transform", `translateX(-${currentIndex * itemWidth}px)`);
			}
		});
	});
	
}

function _viewPreviewImg(divid) {
	const view_pix = $("#" + divid).html();
	$("#product_preview").html(view_pix).fadeIn(3000);
}

function _viewBlogPreviewImg(divid) {
	const view_pix = $("#" + divid).html();
	$("#blog_preview").html(view_pix).fadeIn(3000);
}

function _slideImages(){
    $(document).ready(function () {
      var container = $(".inner-img-container");
      var imagesCount = $(".each-image-div").length;
      var currentIndex = 0;
      var visibleImages;
      var imageWidth = $('.each-image-div').outerWidth(true);
      
      function updateVisibleImages() {
          if ($(window).width() <= 767) {
              visibleImages = 1;
          } else {
              visibleImages = 3;
          }
      }

      updateVisibleImages();
      $(window).resize(updateVisibleImages);

      $(document).on("click", ".right-product-btn", function () {
          if (currentIndex < imagesCount - visibleImages) {
              currentIndex++;
              var translateValue = currentIndex * imageWidth;
              container.css("transform", "translateX(-" + translateValue + "px)");
          }
      });

      $(document).on("click", ".left-product-btn", function () {
          if (currentIndex > 0) {
              currentIndex--;
              var translateValue = currentIndex * imageWidth;
              container.css("transform", "translateX(-" + translateValue + "px)");
          }
      });
  });
}



function _selectOption(selectBoxId) {
	$('#txtSearchValue_'+selectBoxId).val('');
	filter(selectBoxId);

    if ($('#searchPanel_'+selectBoxId).is(":visible")) {
        $('#searchPanel_'+selectBoxId).css('display', 'none');
    } else {
        $('#searchPanel_'+selectBoxId).css('display', 'flex');
        $('#txtSearchValue_'+selectBoxId).focus();
    }
}
document.addEventListener('click', (e) => {
    document.querySelectorAll('.text_field_container').forEach(container => {
        // If the click is not inside the container, hide its search panel.
        if (!container.contains(e.target)) {
            const searchPanel = container.querySelector('.searchPanel');
            if (searchPanel) {
                searchPanel.style.display = 'none';
            }
        }
    });
});
function filter(selectBoxId) {
	var valThis = $('#txtSearchValue_'+selectBoxId).val();
	$('#searchList_'+selectBoxId+' > li').each(function() {
		var text = $(this).text();
		(text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
	});
};
function _clickOption(selectedOption, id, value) {
	selectBoxId = selectedOption.replace("searchList_", "");
	// Clear previous options and set the selected one
	$('#'+selectBoxId).html(`<option selected="selected" value="${id}">${value}</option>`);
	_selectOption(selectBoxId);
};
    

function filters(selectBoxId) {
	var valThis = $('#search'+selectBoxId).val();
	$('#fetchAll'+selectBoxId+' > a').each(function() {
		var text = $(this).text();
		(text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
      });
    };

function _increaseAndDecreaseCart() {
	$("#decrease").click(function () {
		let currentValue = parseInt($("#quantity").val(), 10) || 1;
		if (currentValue > 1) {
			$("#quantity").val(currentValue - 1);
		}
	});

	$("#increase").click(function () {
		let currentValue = parseInt($("#quantity").val(), 10) || 1;
		$("#quantity").val(currentValue + 1);
	});

	$("#quantity").on("input", function () {
		let value = $(this).val().replace(/[^0-9]/g, ""); // Remove non-numeric characters
		if (value === "" || parseInt(value, 10) < 1) {
			value = 1; // Prevent values below 1
		}
		$(this).val(value);
	});
}

function _starReview() {
	$(".star").click(function () {
		let rating = $(this).data("value");
		$(".star").removeClass("active");
		$(".star").each(function () {
			if ($(this).data("value") <= rating) {
				$(this).addClass("active");
			}
		});
	});
}

$(document).ready(function () {
    let testDiv = $("<div>").css({ display: "flex", gap: "10px" }).appendTo("body");

    if (testDiv.css("gap") !== "10px") {
        // If flex gap is NOT supported, apply margin fallback
        $("[style*='display: flex'], [style*='display:flex']").each(function () {
            $(this).children().not(":last-child").css("margin-right", "10px");
        });
    }

    testDiv.remove();
});


function textField(id, title, type = "text") {
    const template = type === "textarea"
        ? `
          <textarea class="text_area" id="${id}" placeholder=" " rows="2"></textarea>
          <div class="placeholder">${title}:</div>
        `
        : `
          <input class="text_field" type="${type}" id="${id}" placeholder=""/>
          <div class="placeholder">${title}:</div>
        `;
    $('#' + id + '_container').html(template);
}


function _getActiveNextCatPage(text) {
	$('#next-edible, #next-tubers').removeClass('active');
	$('#next-'+text).addClass('active');
}

function _nextCatPage(next_id,text) {
	_getActiveNextCatPage(text);
	$("#edible-hide-div, #tubers-hide-div").hide();
	$("#" + next_id).fadeIn(1000);
}

function _getActiveNextAboutProductPage(text) {
	$('#next-details, #next-reviews').removeClass('active');
	$('#next-'+text).addClass('active');
}

function _nextAboutProductPage(next_id,text) {
	_getActiveNextAboutProductPage(text);
	$("#details-hide-div, #reviews-hide-div").hide();
	$("#" + next_id).fadeIn(1000);
}


function _getActiveNextContactPage(text) {
	$('#next-ogun').removeClass('active');
	$('#next-'+text).addClass('active');
}

function _nextContactPage(next_id,text) {
	_getActiveNextContactPage(text);
	$("#ogun-hide-div").hide();
	$("#" + next_id).fadeIn(1000);
}

function _getLogistics(div_id) {
	$('#pickup-div, #delivery-div').hide();
	$('#' + div_id).fadeIn(1000);
}


function _get_form(page) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
	var action = "get_form";
	var dataString = "action=" + action + "&page=" + page;

	$.ajax({
		type: "POST",
		url: index_local_url,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#get-form-more-div").html(html);
		},
	});
}
  
  
function _getFormWithId(page, ids) {
	$("#get-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}).fadeIn(500);
	var action = "get_form_with_id";
	var dataString = "action=" + action + "&page=" + page + "&ids=" + ids;

	$.ajax({
		type: "POST",
		url: indexLocalUrl,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#get-more-div").html(html);
		},
	});
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
