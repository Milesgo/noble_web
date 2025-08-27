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
                  // 로그인 성공 시 DataTables localStorage 초기화
                  console.log('로그인 성공 - DataTables localStorage 초기화 시작');
                  
                  // DataTables 관련 localStorage 항목들을 찾아서 삭제
                  var keysToRemove = [];
                  for (var i = 0; i < localStorage.length; i++) {
                      var key = localStorage.key(i);
                      if (key && (key.startsWith('DataTables_') || key.includes('datatable'))) {
                          keysToRemove.push(key);
                      }
                  }
                  
                  // 찾은 키들 삭제
                  keysToRemove.forEach(function(key) {
                      console.log('삭제하는 localStorage 키:', key);
                      localStorage.removeItem(key);
                  });
                  
                  console.log('localStorage 초기화 완료. 총 ' + keysToRemove.length + '개 항목 삭제');
                  
                  location.href="/admin";
              } else {
                  alert(data.message) ;
              }
          }
      }) ;
    }) ;
});