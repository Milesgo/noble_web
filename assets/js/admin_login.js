$(document).ready(function() {

    // 어드민 로그인
    $("#m_login_signin_submit").on("click", function(e) {

      e.preventDefault() ;              

      var formData = new FormData() ; 

      if (isEmpty($("#admin_id").val())) {
          alert("아이디를 입력해주세요", "", "error");
          return 0;
      }

      if (isEmpty($("#admin_password").val())) {
          alert("비밀번호를 입력해주세요", "", "error");
          return 0;
      }
        
      formData.append("admin_id", $("#admin_id").val());  
      formData.append("admin_password", $("#admin_password").val());  

      $.ajax({
          url: "admin/loginprocess",
          type: "post",
          data: formData,
          cache: false,
          processData: false,
          contentType: false,
          success: function (res) {
              var data = JSON.parse(res) ;
              if (data.result == "SUCCESS") {
                //   location.href="https://noble.lemongstory.com/admin";
                  location.href="/admin";
              } else {
                  alert(data.message) ;
              }
          }
      }) ;
    }) ;
});