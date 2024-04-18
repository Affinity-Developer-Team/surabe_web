document.addEventListener("DOMContentLoaded", function() {
	const videoListItems = document.querySelectorAll(".list");
  
	videoListItems.forEach(function(item) {
	  item.addEventListener("click", function() {
		const videoSrc = this.querySelector(".list-video").getAttribute("src");
		const mainVideo = document.querySelector(".main-video");
		
		mainVideo.setAttribute("src", videoSrc);
		mainVideo.play();
  
		// Remove yellow background color from all items
		videoListItems.forEach(function(item) {
		  item.style.backgroundColor = "";
		});
  
		// Add yellow background color to the clicked item
		this.style.backgroundColor = "gray";
	  });
	});
  });


  

  
  