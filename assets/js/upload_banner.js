$(document).ready(function() {
     
    $("#banner_title").focus();

    showDetail($("#banner_target").val().toLowerCase());

    // 배너등록
    $("#banner_upload_publish").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        if (isEmpty($("#banner_name").val())) {
            swal("배너명을 입력해주세요", "", "error");
            return 0;
        }

        if (isEmpty($("#banner_target").val())) {
            swal("카테고리를 설정해주세요", "", "error");
            return 0;
        }

        switch($("#banner_target").val()) {
            case "URL":
                if (isEmpty($("#banner_detail_url").val())) {
                    swal("링크를 입력해주세요", "", "error");
                    return 0;
                }
                break;
            case "SONG":
                if (isEmpty($("#banner_detail_song").val())) {
                    swal("곡을 선택해주세요", "", "error");
                    return 0;
                }
                break;
            case "NOTICE":
                if (isEmpty($("#banner_detail_notice").val())) {
                    swal("공지사항을 선택해주세요", "", "error");
                    return 0;
                }
                break;
        }

        if ($("#mode").val()=="new" && isEmpty($("#banner_img").val())) {
            swal("배너 이미지를 등록해주세요", "", "error");
            return 0;
        }

        swal({
            title: "확인",
            text: "등록하시겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "완료",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) { 
              
                formData.append("banner_no", $("#banner_no").val());  
                formData.append("banner_name", $("#banner_name").val());  
                formData.append("banner_target", $("#banner_target").val());

                switch($("#banner_target").val()) {
                    case "URL":
                        formData.append("banner_detail", $("#banner_detail_url").val());
                        break;
                    case "SONG":
                        formData.append("banner_detail", $("#banner_detail_song").val());
                        break;
                    case "NOTICE":
                        formData.append("banner_detail", $("#banner_detail_notice").val());
                        break;
                }
                
                formData.append("banner_display", $("#banner_display").val());

                if($("#banner_img").length>0) { 
                    formData.append("banner_img", $("#banner_img")[0].files[0]);                
                    formData.append("pic_div", "BANNER");  
                }

                $.ajax({
                    url: "/admin/banner/upload/process",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        var data = JSON.parse(res) ;
                        if (data.result == "SUCCESS") {
                            document.location.href = "/admin/banner";
                        } else {
                            swal(data.message) ;
                        }
                    }
                }) ;


            }

        })                    

    }) ;


    $("#banner_target").on("change", function() { // 상태 변경시 입력창 제어
        var targetvalue = $(this).val().toLowerCase();
        showDetail(targetvalue);
        $("#banner_detail_"+targetvalue).val("");
    }),    

    // 게시글 작성 페이지에서 썸네일 삭제
    $(document).on('click', '.delete-banner-image', function(e) { 
    
        e.preventDefault() ;

        var formData = new FormData() ; 
        formData.append("banner_no", $(this).attr("banner_no"));

        swal({
            title: "확인",
            text: "이미지를 삭제하시겠습니까?",
            type: "error",
            showCancelButton: true,
            confirmButtonText: "삭제",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) {               
                deleteBannerImage(formData);
            }

        })

    });

});

// 타겟 선정시 관련된 항목 표시
function showDetail(targetvalue) { 
    $("#row_url").hide();
    $("#row_notice").hide();
    $("#row_song").hide();

    $("#row_"+targetvalue).show();    
}



function deleteBannerImage(formData) { 

    var formData = new FormData() ; 
    formData.append("banner_no", $("#banner_no").val());

    $.ajax({
        url: "/admin/boardupload_delete_banner",
        type: "post",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (res) {
            var data = JSON.parse(res) ;

            if (data.result == "SUCCESS") {
                $("#img_thumbnail").remove();
            }
        }
    }) ;
}