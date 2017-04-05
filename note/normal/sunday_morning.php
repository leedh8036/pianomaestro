
<html>
<head>
	<title>Sunday Morning</title> 
</head>
	
	<body>		
		<img src="../note_images/sundaymorning1.jpg" id="mainImage">
		
		<script>
			// slide-show
			var myImage=document.getElementById("mainImage");
			var imageArray=["../note_images/sundaymorning2.jpg",
							"../note_images/sundaymorning3.jpg",
							"../note_images/sundaymorning4.jpg", 
							"../note_images/sundaymorning5.jpg",
							"../note_images/sundaymorning6.jpg",
							"../note_images/sundaymorning7.jpg",
							"../note_images/sundaymorning8.jpg",
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






