/*
 * jQuery scripts for complex dynamic form
 * do not change anything except form specific commands!
 */
jQuery(document).ready(function(){	  
	$(".add").click(function(){
		var i =  $(this).siblings(".template").val()
		var template = jQuery.format(jQuery.trim($(this).siblings(".template").val()));
		var place = $(this).parents(".templateFrame:first");
		var i = $(this).parents(".templateFrame:first").children(".templateContent").size();
		$(template(i)).appendTo(place);
		// start form specific commands
				
		// end form specific commands
    }); 
	$(".remove").live("click", function() {
		$(this).parents(".templateContent:first").remove();
	});
});