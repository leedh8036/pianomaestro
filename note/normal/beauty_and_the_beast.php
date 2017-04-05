
<html>
<head>
	<title>Beauty and The Beast</title> 
</head>
	
	<body>		
		<img src="../note_images/beautyandthebeast1.jpg" id="mainImage">
		
		<script>
			// slide-show
			var myImage=document.getElementById("mainImage");
			var imageArray=["../note_images/beautyandthebeast2.jpg",
							"../note_images/beautyandthebeast3.jpg",
							"../note_images/beautyandthebeast4.jpg", 
							"../note_images/beautyandthebeast5.jpg",
							"../note_images/beautyandthebeast6.jpg", 
							"../note_images/beautyandthebeast7.jpg",
							"../note_images/beautyandthebeast8.jpg", 
							"../note_images/beautyandthebeast9.jpg"];
			var imageIndex=0;
			
			function changeImage(){
				myImage.setAttribute("src",imageArray[imageIndex]);
				imageIndex++;
				if(imageIndex==imageArray.length){
					clearInterval(refreshIntervalId);
				}
			}
			var refreshIntervalId = setInterval(changeImage,2000);	// 악보 전체 2줄	
		</script>
	</body>
</html>






