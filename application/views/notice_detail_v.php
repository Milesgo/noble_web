<!DOCTYPE html>
<?php
    header('X-XSS-Protection:0');
?>
<html lang="kr">
<head>
    <!-- Basic -->
    <title><?=$post['post_title']?> :: NOBLE 반주기</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <link rel="stylesheet" href="<?=SERVERURL?>/assets/css/style-notice.css" />
    <link rel="stylesheet" href="<?=SERVERURL?>/assets/polo/font-awesome.css" />
    <link rel="stylesheet" href="<?=SERVERURL?>/assets/polo/bootstrap4-table.css" />

    <!-- endbuild -->
</head>
<?php
    if(isset($post['post_no'])) {
?>
    <input type="hidden" id="post_no" value="<?=$post['post_no']?>">
<?php
    }
?>
<body> 
    <div class="row">
        <div class="content">
            <div class="pst-block">
                <div class="pst-block-main">
                    <div class="post-content">
                        <article>
                            <p><?=$post['post_content']?></p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor -->    
    <script src="<?=SERVERURL?>/assets/js/vendors.bundle.js" type="text/javascript"></script>
    <script src="<?=SERVERURL?>/assets/js/scripts.bundle.js" type="text/javascript"></script>
    <script>

    $(document).ready(function(){
        $("img").click(function(){
            document.location.href = "target-blank://" + $(this).attr("src");        
        });
    });

    //////////////////////////////////////////////////////////////////////////////////////////////
    /////////////  이미지 반응형 대응 시작
    //////////////////////////////////////////////////////////////////////////////////////////////

        // Find all YouTube videos
        var $allVideos = $("iframe[src*='//www.youtube.com'],iframe[src*='//www.youtube-nocookie.com']"),
            $allImages = $("img"),
            // The element that is fluid width
            $fluidEl = $("body");        

      // Figure out and save aspect ratio for each video
        $allImages.each(function() {

          if($(this)[0].width > $(window).width()) { 
              $(this)
                .data('aspectRatio', this.height / this.width)

                // and remove the hard coded width/height
                .removeAttr('style')
                .addClass('adaptive');
            }
        });  

        // When the window is resized
        $(window).resize(function() {

          var newWidth = Math.min($fluidEl.width(),767) - 20;

          // Resize all videos according to their own aspect ratio
          $allVideos.each(function() {

            var $el = $(this);
            $el
              .width(newWidth)
              .height(newWidth * $el.data('aspectRatio'));
          });

            $allImages.each(function() {

              if($(this)[0].naturalWidth >= $(window).width()) { 
                  $(this)
                    .data('aspectRatio', this.height / this.width)

                    // and remove the hard coded width/height
                    .removeAttr('style')
                    .addClass('adaptive');
               } else {                 
                    $(this).removeClass('adaptive');
               }
            });  


        // Kick off one resize to fix all videos on page load
        }).resize();        
    //////////////////////////////////////////////////////////////////////////////////////////////
    /////////////  이미지 반응형 대응 끝
    ////////////////////////////////////////////////////////////////////////////////////////////////
    </script>

</body>

</html>