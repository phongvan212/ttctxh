		<footer id="footer">
                <div class="copyright container">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <address>
							  <strong>© <?php echo date('Y'); ?> <?php bloginfo( 'sitename' ); ?></strong><br>
							  Địa chỉ: Phòng F2.106, Trường Đại Học Thủ Dầu Một, số 06 Trần Văn Ơn, phường Phú Hòa, tp Thủ Dầu Một, Bình Dương<br>							  
							  <abbr title="Phone">Điện thoại:</abbr> (0650) 3.843.639<br>
							  <abbr title="Email">Email:</abbr> trungtamphattrienctxh@tdmu.edu.vn<br>
							  <abbr title="Website">Website:</abbr> <a href="http://trungtamphattrienctxh.tdmu.edu.vn" alt="trungtamphattrienctxh.tdmu.edu.vn">trungtamphattrienctxh.tdmu.edu.vn</a>
						</address>
                    </div>
                </div>
        </footer>
</div> <!--end #container -->
 <?php wp_footer(); ?>

<script type="text/javascript">
	$(document).ready(function () {
		   var docHeight = $(window).height();
		   var footerHeight = $('#footer').height();
		   var footerTop = $('#footer').position().top + footerHeight;

		   if (footerTop < docHeight) {
		    $('#footer').css('margin-top',  (docHeight - footerTop) + 'px');
		   }

		   $(".rpwe_widget").addClass("panel panel-primary");
		   $(".rpwe_widget>.widgettitle").addClass("panel-heading");
		   $(".rpwe_widget>.rpwe-block ").addClass("panel-body");
		   $(".widget_text").addClass("btn btn-info btn-block");
		   $(".widget_text:first").removeClass("btn-info").addClass("btn-warning");
		   $(".widget_text>a>h3").append("<spand class='badge pull-right'><i class='fa fa-long-arrow-right'></i></spand>");
		  });

</script>

</body> <!--end body-->
</html> <!--end html -->