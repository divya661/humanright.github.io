var newsContainer = document.getElementById("news");
var btn = document.getElementById("btn");

	
btn.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
   
      var ourData = JSON.parse(ourRequest.responseText);
	   renderHTML(ourData.articles);
     
	  
    };
    ourRequest.send();
  });


  function renderHTML(data){
	  var htmlString = "";
	  
	  
	  
	  for(i=0; i<data.length;i++){
		  
		 
		  htmlString  =htmlString+ "<div>" + data[i].publishedAt+ "</br>"+data[i].title+
		 "</br>"+data[i].description+"</br><a href="+data[i].url+"' target='_blank'>Read More About IT Click Here</a></br>"+ 
		 '</br><img src ="' + data[i].urlToImage + '" class="img-rounded" height="150" width="304" /></br>' +
			"<a href='https://www.facebook.com/sharer/sharer.php?u=' 'target='_blank'>Share on Facebook</a>"+
			"<span><a class='button' id='tweet-news'  target='_blank' href ="">Tweet</i></a></span>" ;
		
		  
	  }
	 

	  
	 newsContainer.insertAdjacentHTML('beforeend',htmlString);
  }
  
  
