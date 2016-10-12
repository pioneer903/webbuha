
	<!DOCTYPE html>
<html>
    <head>
        <style>
            .team {
                display: block;
                margin-bottom: 20px;
            }
            .team__member {
                display: inline-block;
                width: 100px;
                height: 100px;
                background: #999;
                margin-right: 20px;
            }
            .wrapper {
                display: block;
                position: relative;
                height: 200px;
            }
            .team-content {
                display: block;
                position: absolute;
                width: 100%;
                transition: all 0.5s ease-in 0s;
                left: 0;
            }
            .team-content.hide {
                left: -100%;
                opacity: 0;
            }
            .team-content__member {
                display: none;
                background-color: #888;
                color: #FFF;
                font-size: 24px;
                text-align: center;
                padding: 10px;
            }
            .team-content__member.active {
                display: block;
            }
        </style>
    </head>
    <body>
        

        <div class="team">
            <div class="team__member" rel="1">1</div>
            <div class="team__member" rel="2">2</div>
            <div class="team__member" rel="3">3</div>
            <div class="team__member" rel="4">4</div>
            <div class="team__member" rel="5">5</div>
        </div>


        <div class="wrapper">
            <div class="team-content">
                <div class="team-content__member active" rel="1">1</div>
                <div class="team-content__member" rel="2">2</div>
                <div class="team-content__member" rel="3">3</div>
                <div class="team-content__member" rel="4">4</div>
                <div class="team-content__member" rel="5">5</div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>
            $('.team__member').on('mouseenter', function() {
                var num = $(this).attr('rel');

                if (!$('.team-content__member[rel="' + num + '"]').hasClass('active')) {
                    $('.team-content').addClass('hide');
                    setTimeout(function() {
                        $('.team-content__member').removeClass('active');
                        $('.team-content__member[rel="' + num + '"]').addClass('active');
                        $('.team-content').removeClass('hide');
                    }, 500);
                }
            });
        </script>
    </body>
</html>		
		