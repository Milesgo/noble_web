$(document).ready(function() {
     
    $("#song_title").focus();

    // 곡등록
    $("#song_upload_publish").on("click", function(e) {
        e.preventDefault() ;              

        var formData = new FormData() ; 

        if (isEmpty($("#song_title").val())) {
            swal("곡명을 입력해주세요", "", "error");
            return 0;
        }

        if (isEmpty($("#song_inst_code").val())) {
            swal("악기를 입력해주세요", "", "error");
            return 0;
        }

        if (isEmpty($("#song_genre_code").val())) {
            swal("장르를 입력해주세요", "", "error");
            return 0;
        }

        if (isEmpty($("#song_duet_code").val())) {
            swal("중주를 설정해주세요", "", "error");
            return 0;
        }

        if (isEmpty($("#song_key_code").val())) {
            swal("키를 설정해주세요", "", "error");
            return 0;
        }

        if (isEmpty($("#song_price").val())) {
            swal("가격을 설정해주세요", "", "error");
            return 0;
        }

        // if ($("#mode").val()=="new" && isEmpty($("#song_img").val())) {
        //     swal("곡 이미지를 등록해주세요", "", "error");
        //     return 0;
        // }

        swal({
            title: "확인",
            text: "등록하시겠습니까?",
            type: "success",
            showCancelButton: true,
            confirmButtonText: "완료",
            cancelButtonText: "취소"
        }).then(function(e) {

            if(e.value==true) { 
              
                formData.append("song_no", $("#song_no").val());  
                formData.append("song_title", $("#song_title").val());  
                formData.append("song_title_eng", $("#song_title_eng").val());  
                formData.append("song_title_jpn", $("#song_title_jpn").val());  
                formData.append("song_title_chn", $("#song_title_chn").val());  
                formData.append("song_lyricist", $("#song_lyricist").val());  
                formData.append("song_composer", $("#song_composer").val());  
                formData.append("song_arranger", $("#song_arranger").val());  
                formData.append("song_inst_code", $("#song_inst_code").val());
                formData.append("song_genre_code", $("#song_genre_code").val());
                formData.append("song_duet_code", $("#song_duet_code").val());
                formData.append("song_key_code", $("#song_key_code").val());
                formData.append("song_key_multi", $("#song_key_multi").val());
                formData.append("song_price", $("#song_price").val());
                formData.append("song_pdfprice", $("#song_pdfprice").val());
                formData.append("song_copyright_code", $("#song_copyright_code").val());
                formData.append("song_ispublicdomain", $("#song_ispublicdomain").val());
                formData.append("song_islive", $("#song_islive").val());
                                
                formData.append("song_keyword_1", $("#song_keyword_1").val());
                formData.append("song_keyword_2", $("#song_keyword_2").val());
                formData.append("song_keyword_3", $("#song_keyword_3").val());
                formData.append("song_keyword_4", $("#song_keyword_4").val());
                formData.append("song_keyword_5", $("#song_keyword_5").val());
                formData.append("song_keyword_6", $("#song_keyword_6").val());
                formData.append("song_keyword_7", $("#song_keyword_7").val());
                formData.append("song_keyword_8", $("#song_keyword_8").val());
                formData.append("song_keyword_9", $("#song_keyword_9").val());
                formData.append("song_keyword_10", $("#song_keyword_10").val());


                if($("#song_url_ar").length>0) { 
                    formData.append("song_url_ar", $("#song_url_ar")[0].files[0]);
                }

                if($("#song_url_mr").length>0) { 
                    formData.append("song_url_mr", $("#song_url_mr")[0].files[0]);
                }

                if($("#song_mp3_ar").length>0) { 
                    formData.append("song_mp3_ar", $("#song_mp3_ar")[0].files[0]);
                }

                if($("#song_mp3_mr").length>0) { 
                    formData.append("song_mp3_mr", $("#song_mp3_mr")[0].files[0]);
                }

                if($("#song_pdf").length>0) { 
                    formData.append("song_pdf", $("#song_pdf")[0].files[0]);
                }

                // if($("#song_img").length>0) { 
                //     formData.append("song_img", $("#song_img")[0].files[0]);                
                //     formData.append("pic_div", "BANNER");  
                // }

                $.ajax({
                    url: "/admin/song/upload/process",
                    type: "post",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        console.log("res : " + res);
                        var data = JSON.parse(res) ;
                        
                        if (data.result == "SUCCESS") {
                            document.location.href = "/admin/song";
                        } else {
                            swal(data.message) ;
                        }
                    }
                }) ;


            }

        })                    

    }) ;
});