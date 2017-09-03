<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-xlarge">
	<div id="footer_inner">
	    <a href="https://www.facebook.com/uoftace/" target="_blank"><i class="fa fa-facebook-official w3-hover-text-indigo"></i></a>
	    <a id="wechatLogo"><i class="fa fa-wechat w3-hover-text-indigo"></i></a>	
	    <a id="wechatQR"><img src="img/wechatQR.jpeg" style=""></a>
	    <p class="w3-medium">Created by <a href="https://www.linkedin.com/in/nan-wu-328198b1/" target="_blank">Nan Wu</a></p>
    </div>
</footer>

</body>

<script>
var e = document.getElementById('wechatLogo');
e.onmouseover = function() {
  document.getElementById('wechatQR').style.display = 'block';
}
e.onmouseout = function() {
  document.getElementById('wechatQR').style.display = 'none';
}
</script>
<style>
#footer_inner{
	position: relative;
	display: inline-block;
}
#wechatQR {
	display: none;
	position: absolute;
	bottom:0;
	right:0;
	-webkit-transform: translateX(100%);
	-moz-transform: translateX(100%);
	-o-transform: translateX(100%);
	transform: translateX(100%);
}
#wechatQR img{
	width:140px;
}

@media only screen and (max-width: 470px) {
	#wechatQR {
		bottom: auto;
		left:-10px;
		right:auto;
		top:0;
		-webkit-transform: translateY(-100%);
		-moz-transform: translateY(-100%);
		-o-transform: translateY(-100%);
		transform: translateY(-100%);
	}
}

</style>