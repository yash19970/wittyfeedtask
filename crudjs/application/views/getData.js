myapp.factory('getData',function($resource){
	return  $resource('Angulardata/viewall',{},{read_data:{method : 'GET'}
});
});