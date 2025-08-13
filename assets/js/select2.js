var Select2= {
    init:function() {
        $("#banner_detail_song, #banner_detail_song_validate").select2( {
            placeholder: "곡을 선택하세요",
            width: '100%'
        }
        )
    }
}

;
jQuery(document).ready(function() {
    Select2.init()
}

);