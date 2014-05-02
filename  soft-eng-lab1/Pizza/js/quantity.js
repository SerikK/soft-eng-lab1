/**
 * @author User
 */
$(document).ready(function(){
	
	totalquant = $("#total_quantity").val();
	$(".quant").keyup(function(){
		tot = 0;
		for (i=0; i < totalquant; i++) {
		tot = tot*1 + $('#price'+i).html() * $("#quantity"+i).val();
		
		}
	$("#total").html(tot);	
	});
	
	//}
});