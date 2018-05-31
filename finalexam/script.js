$(document).ready(function(){


  $('#subject-list').on('change', function(){
	$('#form1').submit();
  });

  $('#location-list').on('change', function(){
	$('#form2').submit();
  });

});
