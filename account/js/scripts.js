
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

function _actionAlert(message,status ){
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

function _alertClose(){
	let text = '';
	  text +=
	  '<div class="alert-loading-div">' +
		'<div class="icon"><img src="'+ website_url +'/all-images/images/loading.gif" width="20px" alt="Loading"/></div>' +
		'<div class="text"><p>LOADING...</p></div>'+
		'</div>';
	$('#get-form-more-div').html(text).fadeOut(200);
}

function _alert_secondary_close(){
  let text = '';
	text +=
	'<div class="alert-loading-div">' +
	  '<div class="icon"><img src='+ website_url +'/all-images/images/loading.gif" width="20px" alt="Loading"/></div>' +
	  '<div class="text"><p>LOADING...</p></div>'+
	  '</div>';
  $('#get-more-div-secondary').html(text).fadeOut(200);
}

function _next_page(next_id) {
    $("#view_login,#reset_password_info,#send_link_info").hide();
    $("#" + next_id).fadeIn(1000);
}

function _toggle_profile_pix_div() {
	$(".toggle-profile-div").toggle("slow");
}

function _tableToggle() {
	$('.switch input').on('change', function () {
		const label = $(this).next().next();
		label.text($(this).is(':checked') ? 'ON' : 'OFF');
	});
}

function select_search() {
	$(".srch-select").toggle("fast");
}
  
function srch_custom(text){
	$('#srch-text').html(text);
	$('.custom-srch-div').fadeIn(500);
};


function isNumber_Check(e) {
    var key = e.keyCode || e.which;

    if (!((key >= 48 && key <= 57))) {
        if (e.preventDefault) {
            e.preventDefault();
        } else {
            e.returnValue = false;
        }
    }
}


function _counDownOtp(timer){
	$('#resendOtpBtn').hide();
	$('#resendCountdown').fadeIn(500);
	const countdown = setInterval(() => {
		if (timer > 0) {
		  timer = timer - 1;
		  $('#timer').html(timer);
		} else {
			$('#resendCountdown').hide();
			$('#resendOtpBtn').fadeIn(500);
		  clearInterval(countdown);
		}
	  }, 1000);
	  return () => clearInterval(countdown);
}

function textField(id, title, type = "text") {
    const template = type === "textarea"
        ? `
          <textarea class="text_area" id="${id}" placeholder="" rows="2"></textarea>
          <div class="placeholder">${title}:</div>
        `
        : `
          <input class="text_field" type="${type}" id="${id}" placeholder=""/>
          <div class="placeholder">${title}:</div>
        `;
    $('#' + id + '_container').html(template);
}


$(function () {
	profilePixPreview = {
	UpdatePreview: function (obj) {
		if (!window.FileReader) {
		// Handle browsers that don't support FileReader
		console.error("FileReader is not supported.");
		} else {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#profile_preview_pix').prop("src", e.target.result);
		};
		reader.readAsDataURL(obj.files[0]);
		}
	},
	};
});


function _passwordResetSuccesful(page) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
	const action = "password_reset_successful";
	const dataString = "action=" + action + "&page=" + page;

	$.ajax({
		type: "POST",
		url: accountLocalUrl,
		data: dataString,
		cache: false,
		success: function (html) { 
			$("#get-form-more-div").html(html);
		},
	});
}


function _getOtpForm(email) {
	$("#get-form-more-div").html('<div class="ajax-loader"><img src="' + website_url +'/all-images/images/ajax-loader.gif"/></div>').css({'display': 'flex','justify-content': 'center','align-items': 'center'}).fadeIn(500);
	const action = "otp_form";
	const dataString ="action=" + action +"&email=" + email;
	$.ajax({
	  type: "POST",
	  url: accountLocalUrl,
	  data: dataString,
	  cache: false,
	  success: function (html) {
		$("#get-form-more-div").html(html);
		$("#useremail").html(email);
	  },
	});
}


function _getForm(page) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
		const action = "get_form";
		const dataString = "action=" + action + "&page=" + page;
		$.ajax({
		type: "POST",
		url: accountLocalUrl,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#get-form-more-div").html(html);
		},
	});
}

function _getFormWithId(page, ids) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}).fadeIn(500);
	const action = "get_form_with_id";
	const dataString = "action=" + action + "&page=" + page + "&ids=" + ids;

	$.ajax({
		type: "POST",
		url: accountLocalUrl,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#get-form-more-div").html(html);
		},
	});
}


function _getContent(content) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}).fadeIn(500).fadeOut(500);
	const action = 'get_content';
	const dataString = 'action=' + action + '&content=' + content;
	$.ajax({
		type: "POST",
		url: accountLocalUrl,
		data: dataString,
		cache: false,
		success: function (html) {
			$('#get-content').html(html);
		}
	});
}