$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
	location.href = student/index;
    }
  });
  $('#akshay').validate({
    rules: {
      class: {
        required: true,
       
      },
      file: {
        required: true,
      
      },
      
    },
    messages: {
      class: {
        required: "Please enter class",
        
      },
      file: {
        required: "Please provide a file",
      
      },
    
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});