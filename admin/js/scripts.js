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

function _toggle_profile_pix_div() {
    $(".toggle-profile-div").toggle("slow");
}
function _close_profile_pix_div(event) {
    if (!$(event.target).closest(".toggle-profile-div, .right-icon-div").length) {
        $(".toggle-profile-div").hide("slow");
    }
}
$(document).on("click", _close_profile_pix_div);


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

function _nextPage(next_id, icon, divid) {
	$("#account_settings_id,#account_detail,#change_password").hide();
	$("#" + next_id).fadeIn(1000);
	$("#panel-title").html($("#" + icon).html() + $("#" + divid).html());
}
  
function _prevPage(next_id) {
	$("#account_settings_id,#account_detail,#change_password").hide();
	$("#" + next_id).fadeIn(1000);
	$("#panel-title").html(
	  '<i class="bi-gear"></i> </span id="app_text"> APP SETTINGS'
	);
}

function _closeNav(){
	$('.side-nav-bg-sub-div').animate({'left':'-100%'},400);
    $('#side-nav-div').animate({'left':'-100px'},200);
}

function _closeAllNav(){
	_closeNav();
	_removeClass();
}

function _removeClass(){
	$('#side-dashboard, #side-staff, #side-customers, #side-products, #side-orders, #side-publish, #side-reports, #side-branches, #top-dashboard').removeClass('active-li');
}

function _getNav(nav){
	if(nav==''){
		_closeNav();
	}else{
	   	$('#link-products, #link-orders, #link-publish, #link-publish, #link-reports').css({'display':'none'});
		$('#link-'+nav).css({'display':'block'});
	   	$('.side-nav-bg-sub-div').animate({'left':'100px'},200);
	}
}

function _getActiveLink(divid, nav) {
	_removeClass()
	$('#side-'+divid).addClass('active-li');
	$('#top-'+divid).addClass('active-li');
	$("#page-title").html($("#_" + divid).html());
	_getNav(nav);
}


function _getPage(page, divid, nav) {
	_getActiveLink(divid, nav);
	if(page==''){
		//do nothing
	}else{
		$("#page-content").html('<div class="ajax-loader"><img src="'+ website_url +'/all-images/images/spinner.gif"/></div>').fadeIn(500);
		const action = "get_page";
		const dataString = "action=" + action + "&page=" + page;

		$.ajax({
			type: "POST",
			url: adminLocalUrl,
			data: dataString,
			cache: false,
			success: function (html) {
				$("#page-content").html(html);
			},
		});
	}
}

function _getForm(page) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
		const action = "get_form";
		const dataString = "action=" + action + "&page=" + page;
		$.ajax({
		type: "POST",
		url: adminLocalUrl,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#get-form-more-div").html(html);
		},
	});
}


function _getFormWithId(page, ids) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
		const action = "get_form_with_id";
		const dataString = "action=" + action + "&page=" + page + "&ids=" + ids;
		$.ajax({
		type: "POST",
		url: adminLocalUrl,
		data: dataString,
		cache: false,
		success: function (html) {
			$("#get-form-more-div").html(html);
		},
	});
}

function _editPage(page, publish_id){
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
		const action='get_edit_page_form';
		const dataString ='action='+ action + '&page=' + page + '&publish_id=' + publish_id;
		$.ajax({
		type: "POST",
		url: adminLocalUrl,
		data: dataString,
		cache: false,
		success: function(html){
			$('#get-form-more-div').html(html);
		}
	});
}
  

function _getActiveModalLink(menu_id){
	$('#page_content, #picture_page').removeClass('active-li');
	$('#' + menu_id).addClass('active-li');
}

function _checkPageContent(menu_id, page, publish_id) {
	_getActiveModalLink(menu_id);
	$('#get_pages_details').html('<div class="ajax-loader"><img src="'+ website_url +'/all-images/images/spinner.gif" alt="Loading"/></div>').fadeIn("slow");
	const action = 'get_edit_page_form';
	const dataString = 'action=' + action + '&page=' + page + '&publish_id=' + publish_id;
	$.ajax({
	  type: "POST",
	  url: adminLocalUrl,
	  data: dataString,
	  cache: false,
	  success: function (html) {
		$('#get_pages_details').html(html);
	  }
	});
}



function _getUserActiveLink(menu_id){
	$('#user_profile_details, #transaction_history, #domain_history, #hosting_history').removeClass('active');
	$('#' + menu_id).addClass('active');
}

function _getUserPageContents(menu_id, page, ids) {
	_getUserActiveLink(menu_id);
	$('#get_user_details').html('<div class="ajax-loader other-pages-ajax-loader"><img src="'+ website_url +'/all-images/images/spinner.gif" alt="Loading"/></div>').fadeIn("slow");
	const action = 'get_user_details';
	const dataString = 'action=' + action + '&page=' + page + '&ids=' + ids;
	$.ajax({
	  type: "POST",
	  url: adminLocalUrl,
	  data: dataString,
	  cache: false,
	  success: function (html) {
		$('#get_user_details').html(html);
	  }
	});
}


function _passwordResetSuccesful(page) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
	const action = "password_reset_successful";
	const dataString = "action=" + action + "&page=" + page;

	$.ajax({
		type: "POST",
		url: adminLocalUrl,
		data: dataString,
		cache: false,
		success: function (html) { 
			$("#get-form-more-div").html(html);
		},
	});
}


function _nextLoginPage(next_id, divid) {
    $("#view_login, #view_forgot_password, #send_link_info").hide();
	$('#login_id, #reset_pass_id').removeClass('active-li');

    $("#" + next_id).fadeIn(1000);
	$('#' + divid).addClass('active-li');
}



function _getFormDetails(next_id) {
	$('#user-form-details').hide();
	$("#" + next_id).fadeIn(1000);
	$('#user-details, #edit_btn').fadeOut(500);
}

function filter(selectBoxId) {
	var valThis = $('#search'+selectBoxId).val();
	$('#fetchAll'+selectBoxId+' > tbody .tb-row, .grid-div, .faq-back-div').each(function() {
		var text = $(this).text();
		(text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
    });
 };


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
	const selectContainer = document.querySelector('#selectContainer');
	const searchPanel = document.querySelector('.searchPanel');
	if (!selectContainer.contains(e.target)) {
	  searchPanel.style.display = 'none';
	}
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

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
