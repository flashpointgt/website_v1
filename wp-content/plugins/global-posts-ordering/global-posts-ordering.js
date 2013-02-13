(function(){
	var $ = jQuery;
	
	jQuery(document).ready(function(){
		addFirstAndLastClass();
		sorting();
	})
	function addFirstAndLastClass(){
		removeFirstAndLastClass();
		$("#global_posts_ordering_list li:first").next("tr").addClass("first");
		$("#global_posts_ordering_list li:last").prev("tr").addClass("last");
	}
	function removeFirstAndLastClass(){
		$("#global_posts_ordering_list li").removeClass("first last");
	}
	function sorting(){
		$("#global_posts_ordering_list").sortable({
			items: 'tbody tr:not(.disabled)',
			cursor: 'move',
			containment: '#global_posts_ordering_list',
			scrollSensitivity: 40,
			placeholder: "ui-state-highlight",
			helper: function(e, ui) {
				ui.children().each(function() { 
					$(this).width($(this).width());
					$(this).css({
						"margin": "0px !important"
					});
				});
				return ui;
			},
			start: function(event, ui) {
				removeFirstAndLastClass();
				$("#global_posts_ordering_list").addClass("sorting");
			},
			stop: function(event, ui) {
				addFirstAndLastClass();
				$("#global_posts_ordering_list").removeClass("sorting");
			},
			update: function(event, ui) {
				$("#global_posts_ordering_list").sortable('disable');
				
				ui.item.find(".menu_order_content").html("&nbsp;").append('<img alt="" src="images/wpspin_light.gif" class="waiting" />');
				
				var postid = ui.item.find('.post_id').text();	// this post id
				var prevpostid = ui.item.prev().find('.post_id').text();
				var nextpostid = ui.item.next().find('.post_id').text();
				
				$.post(ajaxurl, {action: "global_posts_ordering", id: postid, previd: prevpostid, nextid: nextpostid }, function(response){
					var changes = jQuery.parseJSON(response);
					
					$("#global_posts_ordering_list tbody tr").each(function(index){
						$(this).find(".menu_order_content").text(index+1);
						/*if(index % 2 == 0){
							$(this).addClass("alternate");
						} else {
							$(this).removeClass("alternate");
						}*/
					})
					$("#global_posts_ordering_list .waiting").remove();
					$("#global_posts_ordering_list").sortable('enable');
				})
				
			}
		})
	}
})();