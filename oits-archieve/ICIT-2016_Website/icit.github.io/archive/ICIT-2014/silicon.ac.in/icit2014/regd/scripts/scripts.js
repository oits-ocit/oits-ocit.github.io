var app = app || {}
app.config = jQuery.extend(true, {}, app.config || {}, {
	baseURL:  "",
});

var demo = (function(){

	function _demo(){
		var _this = this,
		et = $("#bodyWrapper");
		
		this.init = function (){
			initEventHandlers();
		};
		
		var initEventHandlers = function (){
			$(window).bind("load", onWindowLoad);
		};

		var onWindowLoad = function (){
			et.delegate("#registration-frm input[type='submit']", "click", function(evt) {
				evt.preventDefault();
				$.ajax({
					url:'http://www.icit2014.in/regd/validate.php',
					type : 'POST',
					dataType: 'json',
					data: $("#registration-frm").serialize(),
					success: function(response){
						if(response.error){
							$('#error').html(response.msg);
							$('#error').css('display','block');
							window.scrollTo(0,0);
							return false;
						}else {
							$('#registration-frm').submit();
						}
					}
				});
			});
		}
		
		
	}
return new _demo;
})();


$(function () {
	demo.init();
});	