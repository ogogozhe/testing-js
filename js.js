function calcul() {
	$.ajax({
    type: "POST",
    url: "ajax.php",
    dataType: "json",
    success: function (data) {
       	var result = jQuery.parseJSON(data);
       	alert(result[1]);
    }
});
