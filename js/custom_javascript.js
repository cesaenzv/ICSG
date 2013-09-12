
var PageModule = (function(){
	var activeTabs = function(){
		$('#myTab').find('a').each(function(i,item){
			$(item).click(function(e){
				e.preventDefault();
				$(this).tab('show');
			});
		});
		$('#myTab a:first').tab('show');
	};
	return {
		activeTabs:activeTabs,
	}
})();
