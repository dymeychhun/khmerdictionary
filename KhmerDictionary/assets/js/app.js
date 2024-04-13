$(document).ready(function () {
  getdata();
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = $(".needs-validation");

  // Loop over them and prevent submission
  forms.each(function () {
    $(this).on("submit", function (event) {
      if (!this.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      $(this).addClass("was-validated");
    });
  });

  // Ajax insert data to database
  $("#submit").on("click", function (e) {
    e.preventDefault();
    var word = $("#word").val();
    var def = $("#definition").val();
    var formData = {
      submit: true,
      word: word,
      def: def,
    };
    // console.log(formData);
    $.ajax({
      type: "post",
      url: location.origin + "/process.php",
      data: formData,
      success: function (response) {
        console.log(response);
        let toastLive = $("#liveToast");
        let toast = new bootstrap.Toast(toastLive);
        if (response.status == 200) {
          $(".toast-body").text(response.message);
          toast.show();
        }
        $("#word").val("");
        $("#definition").val("");
        getdata();
      },
      error: function (response) {
        console.log(response);
      },
    });
  });

  //Ajax getdata
  function getdata() {
    $.ajax({
      type: "get",
      url: location.origin + "/getdata.php",
      dataType: "json",
      success: function (response) {
        // console.log(response);
        $("#latestWords").html("");
        if (response.status == 200) {
          $("#latestWords").html(response.def);
        }
      },
    });
  }
});
