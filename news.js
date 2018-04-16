var newsContainer = document.getElementById("news");
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var btn3 = document.getElementById("btn3");
var btn4 = document.getElementById("btn4");
var btn5 = document.getElementById("btn5");
var btn6 = document.getElementById("btn6");
var btn7 = document.getElementById("btn7");
var btn8 = document.getElementById("btn8");


btn1.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
	   renderHTML(ourData.articles);  
    };
    ourRequest.send();
  });
$('body').on("click", 'btn2', function(){
//btn2.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&q=children-rights&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
	   renderHTML(ourData.articles);  
    };
    ourRequest.send();
});

btn3.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&q=womens-rights&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
	   renderHTML(ourData.articles);  
    };
    ourRequest.send();
  });

btn4.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&q=torture&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
	   renderHTML(ourData.articles);  
    };
    ourRequest.send();
  });

btn5.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&q=torture&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
	   renderHTML(ourData.articles);  
    };
    ourRequest.send();
  });

btn6.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&q=business&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
     renderHTML(ourData.articles);  
    };
    ourRequest.send();
  });

btn7.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&q=environment&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
     renderHTML(ourData.articles);  
    };
    ourRequest.send();
  });

btn8.addEventListener("click", function() {
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://newsapi.org/v2/everything?domains=hrw.org&q=health&language=en&pageSize=30&apiKey=6268be546c1446beb36190df108255f3');
  ourRequest.onload = function() {
      var ourData = JSON.parse(ourRequest.responseText);
     renderHTML(ourData.articles);  
    };
    ourRequest.send();
  });


  function renderHTML(data){
	  var htmlString = "";
	  
	  for(i=0; i<data.length;i++){
		  htmlString  ='<div class="cont"><center><b>'+htmlString+ "<p>" + data[i].publishedAt+ 
		  "</br>"+data[i].title+
		 "</br></b><p></center>"+data[i].description+ 
		 '</br><img src ="' + data[i].urlToImage + '" class="img-rounded"height="236" width="304" /></br>' +"</p><a href="+
		 data[i].url+"' target='_blank'>Read More About IT Click Here</a></br>"
		+ "</br></p></div>";
		  
	  }
	  
	 newsContainer.insertAdjacentHTML('beforeend',htmlString);
  }

  
  
