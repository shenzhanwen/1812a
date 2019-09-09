
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<tr>
		<td><button id='btn'>开始抽奖</button></td>
	</tr>

</body>
</html>
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$('#btn').click(function(){
		$.ajax({
		      headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
			url:"http://www.1812a.com/lucky/btn",
			success:function(res){
				console.log(res);
			}
		})
	})

</script>