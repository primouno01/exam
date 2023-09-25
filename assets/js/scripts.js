function save() 
{
	$("#btnSubmit").on("click", function() {
		var $this 		    = $(this); 
        var $caption        = $this.html();
        var form 			= "#form"; 
        var formData        = $(form).serializeArray(); 
        var route 			= $(form).attr('action');

        var name = $("#name").val();
        var email = $("#email").val();
        var phonenumber = $("#phonenumber").val();
        var dob = $("#dob").val();
        var age = $("#age").val();
        var gender = $("#gender").val();
    	
        
        if(name=='' || email=='' || phonenumber=='' || dob=='' || age=='' || gender=='')
        {
             Swal.fire({
				  icon: 'error',
				  title: 'Something Wrong',
				  text: 'Please check the Form Correctly'
				});
        }
        else{
        $.ajax({
	        type: "POST", 
	        url: route,
	        data: formData, 
	        beforeSend: function () {
	            $this.attr('disabled', true).html("Processing...");
	        },
	        success: function (response) {
	            $this.attr('disabled', false).html($caption);


	            
	            Swal.fire({
				  icon: 'success',
				  title: 'Success.',
				  text: response
				});

	            
	            resetForm(form);
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	
	        }
	    });
	}});
}








$(document).ready(function() {

	
	// Submit form using AJAX To Save Data
	save();

	
});