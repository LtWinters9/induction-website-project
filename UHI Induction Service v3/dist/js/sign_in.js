$(function() {

  $("#form-signin input,#form-signin textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM

      var emailadd = $("#inputEmail").val();
      var userpassword = $("#inputPassword").val();
      var thing = $("#signUp");
      thing.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "../php/processlogin.php",
        type: "POST",
        data: {
          emailadd: emailadd,
          userpass: userpassword

        }
      });
    }

  });
});
