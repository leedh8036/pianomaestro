
<html>
<head>
	<title>Galaxy</title> 
</head>
	
	<body>		
		<img src="../note_images/galaxy1.jpg" id="mainImage">
		
		<script>
			// slide-show
			var myImage=document.getElementById("mainImage");
			var imageArray=["../note_images/galaxy2.jpg",
							"../note_images/galaxy3.jpg",
							"../note_images/galaxy4.jpg", 
							"../note_images/galaxy5.jpg",
							"../note_images/galaxy6.jpg", 
							"../note_images/galaxy7.jpg", // 두 마디 많음
							"../note_images/galaxy8.jpg", // 두 마디 많음
							"../note_images/galaxy9.jpg",
							"../note_images/galaxy10.jpg"];
			var imageIndex=0;
			
			function changeImage(){
				myImage.setAttribute("src",imageArray[imageIndex]);
				imageIndex++;
				if(imageIndex==imageArray.length){
					clearInterval(refreshIntervalId);
				}
				else if(imageIndex==5 || imageIndex==6){ // 7,8 두마디씩 많음
					clearInterval(refreshIntervalId);
					refreshIntervalId = setInterval(changeImage,2400);
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






