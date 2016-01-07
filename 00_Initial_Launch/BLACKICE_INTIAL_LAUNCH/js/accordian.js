$(document).ready(function() {

	jQuery('.collapse_all').click(function() {	    

	  // $('.expand').next().slideToggle(200);
	  $expand = $('.expand').find(">:first-child");
      $expand.text("+");
      jQuery(".content").hide();
    });

    jQuery('.expand_all').click(function() {
       // $('.expand').next().slideToggle(200);
       $expand = $('.expand').find(">:first-child");
       $expand.text("-");
       jQuery(".content").show();
    });

    $(function() 
	{
	  $(".expand").on( "click", function() 
	  {
	    $(this).next().slideToggle(200);

	    $expand = $(this).find(">:first-child");
	    
	    if($expand.text() == "+") 
	    {
	      $expand.text("-");
	    } 
	    else 
	    {
	      $expand.text("+");
	    }
	    return false;
	  });
	  return false;
	});

       $expand = $('.expand').find(">:first-child");
       $expand.text("+");
    jQuery(".content").hide();
});





