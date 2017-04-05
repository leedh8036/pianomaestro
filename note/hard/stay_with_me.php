
<html>
<head>
	<title>Stay with me</title> 
</head>
	
	<body>		
		<img src="../note_images/staywithme1.jpg" id="mainImage">
		
		<script>
			// slide-show
			var myImage=document.getElementById("mainImage");
			var imageArray=["../note_images/staywithme2.jpg",
							"../note_images/staywithme3.jpg",
							"../note_images/staywithme4.jpg",
							"../note_images/staywithme5.jpg",
							"../note_images/staywithme2.jpg", // 시간 다름(한마디 적음)
							"../note_images/staywithme3.jpg",
							"../note_images/staywithme6.jpg",
							"../note_images/staywithme7.jpg",
							"../note_images/staywithme8.jpg",
							"../note_images/staywithme9.jpg",
							"../note_images/staywithme10.jpg"];
			var imageIndex=0;
			
			function changeImage(){
				myImage.setAttribute("src",imageArray[imageIndex]);
				imageIndex++;
				if(imageIndex==imageArray.length){
					clearInterval(refreshIntervalId);
				}
				else if(imageIndex==4){ // 한마디 적은 시간 적용 필요(두번째 2.jpg)
					clearInterval(refreshIntervalId); 
					refreshIntervalId = setInterval(changeImage,1700); 
				}
				else{
					clearInterval(refreshIntervalId);
					refreshIntervalId = setInterval(changeImage,2000);	
				}
			}
			var refreshIntervalId = setInterval(changeImage,2000);		
		</script>
	</body>
</html>






