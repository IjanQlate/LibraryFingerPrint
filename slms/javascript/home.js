$(document).ready(function(){

  $.ajax({
  	url: "objects/home.php",
  	dataType: "json",
  	success: function (response){

  		// console.log(response);
      if (response.status == "failed") {
        alert ("Error!, kindly refresh your pages");
      }
      else {
        $("#totalbook").text(response.TotalBook);
        $("#totalloan").text(response.TotalLoan);
        $("#totalpending").text(response.TotalPendingReturn);
        $("#totalmembers").text(response.TotalMembers);
      }
  	}
  })

});