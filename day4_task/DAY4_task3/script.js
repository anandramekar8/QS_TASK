jQuery('#frm').validate({
	rules:{
		name:"required",
		email:{
			required:true,
			email:true
		},
		phone:{
			required:true,
                        digits:true,
			maxlength:10
                        
		},
		address:{
			required:true
			
		},
                gender:{
                        required:true
                },
	},messages:{
		name:"Please enter your name",
		email:{
			required:"Please enter email",
			email:"Please enter valid email",
		},
		phone:{
			required:"Please enter your number",
                        digits:"number must be only in digits",
			maxlength:"Number must be less than 10 digits"
		},
                address:{
			required:"Please enter your address"
		},
                gender:{
			required:"Please select your gender"
		},
	},
	submitHandler:function(form){
		form.submit();
	}
});