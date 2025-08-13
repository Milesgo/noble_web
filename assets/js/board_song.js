"use strict";
var KTDatatables = function() {

    var initTable = function() {
        var table = $('#datatable');

        // begin first table
        table.DataTable({            
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            stateSave: true,
            autoWidth: false,
            scrollX: false,
            dom: '<"toolbar">frtlip',
            select: {
                style: 'multi',
                selector: '.kt-checkable',
            },
            ajax: "https://noble.lemongstory.com/api_datatable/BoardpostNew/" + $("#board_id").val(),
            columns: [
                {data: 'song_no'},
                {data: 'song_no2'},
                {data: 'song_title'},
                {data: 'song_url_ar', width: '60px'},
                {data: 'song_url_mr', width: '60px'},
                {data: 'song_mp3_ar', width: '60px'},
                {data: 'song_mp3_mr', width: '60px'},
                {data: 'song_pdfprice', width: '60px'},
                {data: 'song_inst_text', width: '60px'},
                {data: 'song_genre_text', width: '80px'},
                {data: 'song_duet_text', width: '80px'},
                {data: 'song_key_text', width: '80px'},
                {data: 'song_price', width: '50px'},
                {data: 'download_total', width: '70px'},
                {data: 'song_download_ar_member'},
                {data: 'song_download_mr_member'},
                {data: 'song_download_mp3ar_member'},
                {data: 'song_download_mp3mr_member'},
                {data: 'song_download_ar_guest'},
                {data: 'song_download_mr_guest'},
                {data: 'song_download_mp3ar_guest'},
                {data: 'song_download_mp3mr_guest'},
                {data: 'song_keyword'}
            ],
            order: [[ 1, "desc" ]],
            pageLength: 25,
            headerCallback: function(thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">
                        <input type="checkbox" value="" class="kt-group-checkable">
                        <span></span>
                    </label>`;
            },
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return `
                        <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">
                            <input type="checkbox" value="" class="kt-checkable">
                            <span></span>
                        </label>`;
                    },
                }, {
                    targets: 3,
                    className: 'text-center',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var temp_title;
                        if(full.song_url_ar == "")
                            temp_title = "<a href='song/upload/"+full.song_no+"'><font color='red'>미등록</font></a>";
                        else 
                            temp_title = "등록";                
                        return temp_title;
                    },
                }, 
                {
                    targets: 4,
                    className: 'text-center',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var temp_title;
                        if(full.song_url_mr == "")
                            temp_title = "<a href='song/upload/"+full.song_no+"'><font color='red'>미등록</font></a>";
                        else 
                            temp_title = "등록";                
                        return temp_title;
                    },
                },
                {
                    targets: 5,
                    className: 'text-center',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var temp_title;
                        if(full.song_mp3_ar == "")
                            temp_title = "<a href='song/upload/"+full.song_no+"'><font color='red'>미등록</font></a>";
                        else 
                            temp_title = "등록";                
                        return temp_title;
                    },
                }, {
                    targets: 6,
                    className: 'text-center',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var temp_title;
                        if(full.song_mp3_mr == "")
                            temp_title = "<a href='song/upload/"+full.song_no+"'><font color='red'>미등록</font></a>";
                        else 
                            temp_title = "등록";                
                        return temp_title;
                    },
                }, 
                {
                    targets: 7,
                    className: 'text-center',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var temp_title;
                        if(full.song_pdf == "")
                            temp_title = "<a href='song/upload/"+full.song_no+"'><font color='red'>악보없음</font></a>";
                        else {
                            switch(full.song_pdfprice) { 
                                case "1000":
                                    temp_title = "<font color='blue'>1,000원</font>";
                                    break;
                                case "2000":
                                    temp_title = "<font color='green'>2,000원</font>";
                                    break;
                                case "0":
                                    temp_title = "<font color='black'>0원</font>";
                                    break;
                                default:
                                    temp_title = "<font color='red'>"+full.song_pdfprice+"원</font>";
                                    break;
                            }
                        }
                        return temp_title;
                    },
                }, {
                    targets: 12,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        var temp_title;
                        switch(full.song_price) { 
                            case "PAID":
                                temp_title = "유료";
                                break;
                            case "FREE":
                                temp_title = "무료";
                                break;
                        }
                        return temp_title;
                    }
                }, {
                    targets: 13,
                    className: 'text-center',
                    render: function(data, type, full, meta) {
                        var download_total = parseInt(full.song_download_ar_member) + parseInt(full.song_download_mr_member) 
                            + parseInt(full.song_download_ar_guest) + parseInt(full.song_download_mr_guest) 
                            + parseInt(full.song_download_mp3ar_member) + parseInt(full.song_download_mp3mr_member) 
                            + parseInt(full.song_download_mp3ar_guest) + parseInt(full.song_download_mp3mr_guest);
                        return download_total;
                    }
                }
            ]
        });

        $('#datatable').on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
            alert('x');
            console.log( 'Details for row ' + row.index() + ' ' + (showHide ? 'shown' : 'hidden') );
        } );


        $('#datatable').on('change', '.kt-group-checkable', function() {
            
            if ($(this).is(':checked')) {
                $('.kt-checkable').prop('checked', true);
                $('#datatable').DataTable().rows({ search: 'applied' }).select();
            } else {
                $('.kt-checkable').prop('checked', false);    
                $('#datatable').DataTable().rows({ search: 'applied' }).deselect();
            }
        });
    
        $('#datatable').on('change', '.kt-checkable', function() {
            var allRows = $('#datatable').DataTable().rows({ search: 'applied' }).count(); // get total count of rows
            var selectedRows = $('#datatable').DataTable().rows({ selected: true, search: 'applied' }).count(); // get total count of selected rows
            
            $(this).parent().parent().trigger("click");

            if(allRows == selectedRows)
                $('.kt-group-checkable').prop('checked', true);
            else
                $('.kt-group-checkable').prop('checked', false);
        });    

        $("#datatable_filter > label > input").unbind().keyup( function (e) {
            if (e.keyCode == 13) {
                $('#datatable').DataTable().search( this.value ).draw();
            }
        } );

        $("div.toolbar").html('<button class="btn btn-sm btn-danger" type="button" id="m_datatable_delete_all" board_id="<?=$board_id?>">삭제</button>'
            + ' &nbsp; <button class="btn btn-sm btn-success" type="button" id="m_datatable_download">다운로드</button>'
            + ' &nbsp; <button type="button" class="btn btn-accent btn-sm dropdown-toggle" data-toggle="dropdown">가격 변경</button>'
            + ' &nbsp; <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item m_datatable_pdfprice_all" href="#" song_pdfprice="2000">2,000원으로 변경</a>'
            + ' &nbsp; <a class="dropdown-item m_datatable_pdfprice_all" href="#" song_pdfprice="1000">1,000원으로 변경</a>'
            + ' &nbsp; <a class="dropdown-item m_datatable_pdfprice_all" href="#" song_pdfprice="0">무료로 변경</a></div>'
            );


        $("#m_datatable_delete_all").on("click", function(t) { // 게시글 일괄 삭제
            var selectedNo = getSelectedNo('song_no');

                if(selectedNo.length==0) {
                    swal({
                        text: '삭제할 항목을 선택하세요',
                        type: 'warning',
                        showCancelButton: false,
                        confirmButtonText: '확인'
                    });
                } else { 
                    swal({
                        title: '확인',
                        text: '삭제하시겠습니까?',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '확인',
                        cancelButtonText: '취소'
                    }).then(function(e) {
            
                        if(e.value==true) { 
                            var formData = new FormData();
                            formData.append('selectedNo', selectedNo);            
                            deleteThing('song/delete', 'song', formData);
                        }
                    })  
                }
        });


        $(".m_datatable_pdfprice_all").on("click", function(t) { // 게시글 일괄 상태변경

            var selectedNo = getSelectedNo('song_no');

            var formData = new FormData();
            formData.append("song_pdfprice", $(this).attr("song_pdfprice"));
            formData.append('selectedNo', selectedNo);


            if(selectedNo.length==0) {
                swal({
                    text: '악보 가격 변경할 항목을 선택하세요',
                    type: 'warning',
                    showCancelButton: false,
                    confirmButtonText: '확인'
                });
            } else { 
                swal({
                    title: "확인",
                    text: "가격을 변경하시겠습니까?",
                    type: "question",
                    showCancelButton: true,
                    confirmButtonText: "변경",
                    cancelButtonText: "취소"
                }).then(function(e) {
                    if(e.value==true) {                                   
                        changeThing('song/pdfprice', 'song', formData);
                    }
                })
            }                 
        });

        $('#m_datatable_download').on("click", function(t) {
            location.href="/download?board_id="+$("#board_id").val()+"&keyword="+$('.dataTables_filter input').val();
        });        

    };


    return {
        //main function to initiate the module
        init: function() {
            initTable();
        },
    };
}();


jQuery(document).ready(function() {
    KTDatatables.init();    

    $("#datatable tbody").css("cursor","pointer");
    
    $('#datatable tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        var data = $('#datatable').DataTable().row($(this).closest('tr')).data();
        $(location).attr('href', "/admin/song/upload/"+data['song_no']);
    } );    

});
