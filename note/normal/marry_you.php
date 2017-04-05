
<html>
<head>
	<title>Marry You</title> 
</head>
	
	<body>		
		<img src="../note_images/marryyou1.jpg" id="mainImage">
		
		<script>
			// slide-show
			var myImage=document.getElementById("mainImage");
			var imageArray=["../note_images/marryyou2.jpg", 
							"../note_images/marryyou3.jpg",
							"../note_images/marryyou4.jpg", 
							"../note_images/marryyou5.jpg",
							"../note_images/marryyou6.jpg", 
							"../note_images/marryyou7.jpg",
							"../note_images/marryyou8.jpg",
							"../note_images/marryyou9.jpg",
							"../note_images/marryyou10.jpg", 
							"../note_images/marryyou6.jpg",
							"../note_images/marryyou7.jpg", 
							"../note_images/marryyou8.jpg",
							"../note_images/marryyou11.jpg",
							"../note_images/marryyou11.jpg",
							"../note_images/marryyou12.jpg",
							"../note_images/marryyou13.jpg"];
			var imageIndex=0;
			
			function changeImage(){
				myImage.setAttribute("src",imageArray[imageIndex]);
				imageIndex++;
				if(imageIndex==imageArray.length){
					clearInterval(refreshIntervalId);
				}
			}
			var refreshIntervalId = setInterval(changeImage,2000);
		</script>
	</body>
</html>






