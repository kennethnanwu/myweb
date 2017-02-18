<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-xlarge">
    <a href="https://www.facebook.com/uoftace/" target="_blank"><i class="fa fa-facebook-official w3-hover-text-indigo"></i></a>
    <a id="wechatLogo"><i class="fa fa-wechat w3-hover-text-indigo"></i></a>	
    <a id="wechatQR" style="margin-left:20%"><img src="img/wechatQR.jpg" style="width:20%"></a>
    <p class="w3-medium">Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
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
#wechatQR {
	display: none;
}

</style>