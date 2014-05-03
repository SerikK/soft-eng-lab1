/**
 * @author User
 */
$(document).ready(function(){
	$("#next").hide();
	totalquant = $("#total_quantity").val();
	$(".quant").keyup(function(){
		tot = 0;
		for (i=0; i < totalquant; i++) {
		tot = tot*1 + $('#price'+i).html() * $("#quantity"+i).val();
		}
	$("#total").html(tot);
	if (tot*1 < 2000){
		$("#amount").show();
		$("#next").hide();
	}
	else {
		$("#amount").hide();
		$("#next").show();
	}
	});
	
	//}
});