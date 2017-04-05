
<html>
<head>
	<title>작은 별</title> 
</head>
	
	<body>		
		<img src="../note_images/star1.jpg" id="mainImage">
		
		<script>
			// slide-show
			var myImage=document.getElementById("mainImage");
			var imageArray=["../note_images/star2.jpg",
							"../note_images/star3.jpg",
							"../note_images/star4.jpg" ];
			var imageIndex=0;
			
			function changeImage(){
				myImage.setAttribute("src",imageArray[imageIndex]);
				imageIndex++;
				if(imageIndex==imageArray.length){
					clearInterval(refreshIntervalId);
				}
			}
			var refreshIntervalId = setInterval(changeImage,3500);		

		</script>
	</body>
</html>






