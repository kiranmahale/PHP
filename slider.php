<html>
<head>
  
    <style type="text/css">
    
    #slider{
    overflow: hidden;
    margin: 20% auto;
    width: 20%;
    height: 20%;
    background-image: url(dba.jpg);
    background-repeat: no-repeat;
    background-position: center;
    }
    #slider img{
    width:90%;
    height: 90%;
    display: none;
    }
    
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript">
        function slider(){
            $("#slider #1").show("fade",500);
            $("#slider #1").delay(5000).hide("slide",{direction:'left'},500);
            var sc=$("#slider img").size();
            var count =2;
            setInterval(function(){
                $("#slider #"+count).show("slide",{direction:'right'},500);
                $("#slider #"+count).delay(5000).hide("slide",{direction:'left'},500);
                if(sc==count)
                    count=1;
                else{
                    count+=1;
                }
            
            },6500);
        }
    
    </script>
</head>
<body onload="slider()">
<div class="wrapper">
	<div id="slider">
			<img id="1" src="video5.png">
			<img id="2" src="hkaur.JPG">
			<img id="3" src="video4.png">
    </div>
    <a class="left" href="#">previous</a>
    <a href="#" class="right">next</a>
</div>
</body>
</html>