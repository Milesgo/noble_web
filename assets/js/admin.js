$(document).ready(function() {

    // 개인정보 수정 페이지 > 완료
    $("#myinfo_update_submit").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        if (isEmpty($("#admin_name").val())) {
            swal("이름을 입력해주세요", "", "error");
            return 0;
        }
        formData.append("admin_name", $("#admin_name").val());  

        if($("#admin_photo").length>0) { 
            formData.append("admin_photo", $("#admin_photo")[0].files[0]);                
            formData.append("pic_div", "PRFIL");  
        }

        $.ajax({
            url: "/admin/myinfoupdate_process",
            type: "post",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (res) {
                var data = JSON.parse(res) ;

                if (data.result == "SUCCESS") {
                    document.location.href = "/admin/myinfoupdate";
                } else {
                    swal(data.message) ;
                }
            }
        }) ;      

    }) ;    
});