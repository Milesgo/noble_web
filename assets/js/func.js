//// 자주 쓰는 함수들
function isEmpty(_v) {
  if (_v === undefined || _v == null) return true ;
  return ! _v.replace(/(^\s*)|(\s*$)/gi, "").length > 0 ;
}

function isNotEmpty(_v) {
  return ! isEmpty(_v) ;
}

function stripTags(input, allowed) {
  allowed = (((allowed || "") + "").toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join(''); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
  var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi, commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
  return input.replace(commentsAndPhpTags, '').replace(tags, function ($0, $1) { return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : ''; });
}

function isEmailFormat(emailValue) {
  var regExp = /[0-9a-zA-Z][_0-9a-zA-Z-\.\+]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;
  if (emailValue == null || emailValue.length == 0) return false ;
  if (!emailValue.match(regExp)) return false ;
  return true ;
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function getSelectedNo(variableName) {
    var selectedNo = [];
        
    $("#datatable tbody tr").each(function() {
        if(($(this).attr("class")).indexOf("selected") != -1) {
            var data = $('#datatable').DataTable().row( this ).data();                
            selectedNo.push(data[variableName]);
        }
    });
    
    return selectedNo;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////  삭제 시작
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 게시판에서 삭제할 때 호출
function deleteThing(fname, returnlocation, formData) { 
    $.ajax({
      url: "/admin/" + fname,
      type: "post",
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function (res) {
          var data = JSON.parse(res) ;

          if (data.result == "SUCCESS") {
              document.location.href = "/admin/" + returnlocation;
          } else {
              swal(data.message,"","error") ;
          }
      }
  }) ;
}

/*
// 게시글 목록에서 휴지통 버튼 클릭
$(document).on('click', '.delete-thing', function(e) { 

    e.preventDefault() ;

    var formData = new FormData() ; 
    var board_id = $(this).attr("board_id");

    switch(board_id) { 
      case "banner":
        formData.append("banner_no", $(this).attr("no"));
        break;
      case "notice":
        formData.append("post_no", $(this).attr("no"));
        break;
      case "member":
        formData.append("mem_no", $(this).attr("no"));
        break;
      case "song":
        formData.append("song_no", $(this).attr("no"));
        break;
    }
    formData.append("board_id", board_id);

    var message = "";
    if(board_id=="member")
      message = "탈퇴 처리하시겠습니까? 모든 데이터가 삭제되며 복구하실 수 없습니다.";
    else
      message = "삭제하시겠습니까?";

    swal({
        title: "확인",
        text: message,
        type: "error",
        showCancelButton: true,
        confirmButtonText: "삭제",
        cancelButtonText: "취소"
    }).then(function(e) {

        if(e.value==true) {

            switch(board_id) { 
              case "banner":
                deleteThing('banner/delete', board_id, formData);
                break;
              case "notice":
                deleteThing('boardupload_delete', board_id, formData);
                break;
              case "member":
                deleteThing('member/delete', board_id, formData);
                break;
              case "song":
                deleteThing('song/delete', board_id, formData);
                break;
            }
        }

    })                    

});
*/


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////  삭제 끝
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////  상태값 변경 시작
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function changeThing(fname, returnlocation, formData) { 
    $.ajax({
      url: "/admin/" + fname,
      type: "post",
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function (res) {
          var data = JSON.parse(res) ;

          if (data.result == "SUCCESS") {
              document.location.href = "/admin/" + returnlocation;
          } else {
              alert(data.message) ;
          }
      }
  }) ;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////  상태값 변경 끝
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
