
<html>
<head>
	<title>오랜날 오랜밤</title> 
</head>
	
	<body>		
		<img src="../note_images/lastgoodbye1.jpg" id="mainImage">
		
		<script>
			// slide-show
			var myImage=document.getElementById("mainImage");
			var imageArray=["../note_images/lastgoodbye2.jpg",
							"../note_images/lastgoodbye3.jpg",
							"../note_images/lastgoodbye4.jpg", 
							"../note_images/lastgoodbye5.jpg",
							"../note_images/lastgoodbye6.jpg", 
							"../note_images/lastgoodbye7.jpg",
							"../note_images/lastgoodbye8.jpg", 
							"../note_images/lastgoodbye9.jpg",
							"../note_images/lastgoodbye10.jpg", 
							"../note_images/lastgoodbye11.jpg", // 두마디 적음
							"../note_images/lastgoodbye12.jpg", 
							"../note_images/lastgoodbye13.jpg",
							"../note_images/lastgoodbye14.jpg",
							"../note_images/lastgoodbye15.jpg",
							"../note_images/lastgoodbye16.jpg"];
			var imageIndex=0;
			
			function changeImage(){
				myImage.setAttribute("src",imageArray[imageIndex]);
				imageIndex++;
				if(imageIndex==imageArray.length){
					clearInterval(refreshIntervalId);
				}
				else if(imageIndex==9){ // 두마디 적음(초 감소)
					clearInterval(refreshIntervalId);
					refreshIntervalId = setInterval(changeImage,4000);
				}
				else{ // 원래 속도
					clearInterval(refreshIntervalId);
					refreshIntervalId = setInterval(changeImage,2000);	
				}
			}
			var refreshIntervalId = setInterval(changeImage,2000);		
		</script>
	</body>
</html>






