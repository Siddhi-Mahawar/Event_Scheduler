<?php
session_start();
extract($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh5U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=K2D:300" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  
</head>
<!--                          _
                          .-'` `}
                  _./)   /       }
                .'o   \ |       }
                '.___.'`.\    {`
                /`\_/  , `.    }
                \=' .-'   _`\  {
                 `'`;/      `,  }
                    _\       ;  }
  O HAI THERE      /__`;-...'--'

-->
<script>
  function searchpage(params) {
    window.location='venuetry.php'
  }
  function requestspage(params) {
    window.location='requests.php'
  }
</script>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#f5f5f5;border-bottom:1px solid #ccc">
      <div class="container-fluid" >
        <div class="navbar-header">
          <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> -->
            <!-- <span class="sr-only">Toggle navigation</span> -->
            <!-- <span class="icon-bar" style="background-color: black !important;"></span> -->
            <!-- <span class="icon-bar" style="background-color: black !important;"></span> -->
            <!-- <span class="icon-bar" style="background-color: black !important;"></span> -->
          </button>

          <a class="navbar-brand" href="user.php" style="color:#337ab7"><?php echo "Welcome ".$user;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="logout.php" style="color:#337ab7"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
         
        </div>
      </div>
    </nav>
<button style="margin-top:1%;" onclick="searchpage()">Search Here! </button>
<button style="margin-top:1%;" onclick="requestspage()">Requests Page </button>
<div >
    
        <script>
                var Event = ["VrakshRopan","Film Promotion","Get Together","VrakshRopan","Film Promotion","VrakshRopan","Film Promotion","VrakshRopan","Film Promotion"];
                var Venue = ["Madhaav Udhyan","M P Hall","Athletic Ground","Madhaav Udhyan","M P Hall","Madhaav Udhyan","M P Hall","Madhaav Udhyan","M P Hall"];
                var tate1 = ["2018-12-21 7:00:00","2018-12-21 2:00:00","2020-1-21 18:00:00","2019-2-21 23:00:00","2028-2-21 12:00:00","2018-12-21 13:00:00","2018-12-21 14:00:00","2018-12-21 15:00:00","2018-12-21 1:00:00"];
                var tate2 = ["2018-12-21 7:00:00","2018-12-21 2:00:00","2020-1-21 18:00:00","2019-2-21 23:00:00","2028-2-21 12:00:00","2018-12-21 13:00:00","2018-12-21 14:00:00","2018-12-21 15:00:00","2018-12-21 1:00:00"];
                var images=["https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg","https://materializecss.com/images/sample-1.jpg"]
                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var date1 = ['soccer'];
                var date2 = ['soccer'];
                
                
                
                
                
                
                var date_sort_asc = function (date1, date2) {
                // This is a comparison function that will result in dates being sorted in
                // ASCENDING order. As you can see, JavaScript's native comparison operators
                // can be used to compare dates. This was news to me.
                if (date1 > date2) return 1;
                if (date1 < date2) return -1;
                  return 0;
                };
                
                var Upcoming = '<center><p>Upcoming Events/Running</p></center>'
                document.write(Upcoming);
                
                
                for ( var i = 0 ;  i < Event.length; i++)
                {
                  var a=tate1[i].split(" ");
                  var d=a[0].split("-");  
                  var t=a[1].split(":");
                
                  // document.write(today);
                  var dt1=new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);
                  
                   a=tate2[i].split(" ");
                   d=a[0].split("-");  
                   t=a[1].split(":");
                  
                   var dt2 = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);
                 
                  // if( today >= dt)
                  {
                    
                  // document.write("Heyyyyy");
                  // document.write(new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]));
                  if(i!=0)
                    {date1.push(dt1);
                      date2.push(dt2);
                    }
                  else{
                    date1[0]=dt1;
                    
                    date2[0]=dt2;
                  }
                  }
                }     
                
                date1.sort(date_sort_asc);
                var k=0;
                var t = '<center><div class="row">'
                for ( var i = 0 ;  i < Event.length; i++)
                {
                  var today= new Date();
                  if(today <= date1[i])
                   {  if (k%4==0 && k!=0) {
                        t+='</div>'
                        t += '<div class="row">'
                    }
                    var dat1=date1[i].getDate()+' '+months[date1[i].getMonth()]+' '+date1[i].getFullYear();
                    var t1= date1[i].getHours()+':'+date1[i].getMinutes()+':'+date1[i].getSeconds();
                    var t2= date2[i].getHours()+':'+date2[i].getMinutes()+':'+date2[i].getSeconds();
                    var dat2=date2[i].getDate()+' '+months[date2[i].getMonth()]+' '+date2[i].getFullYear();
                    
                    t+='<div class="col s12 m7">'
                    t+='<div class="card small">'
                    t+='<div class="card-image">'
                      t+='<img src="'+images[i]+'">'
                      t+='<span class="card-title">'+Event[i]+'</span>'
                      t+='</div>'
                      t+='<div class="card-content">'
                            t+='<strong>'+Venue[i]+'</strong>'
                            t+='<br>'
                            t+='Date:\t'+dat1+'\t'+t1+'-'+dat2+'\t'+t2
                      t+='</div>'
                            t+='</div>'
                            t+='</div>'
                    k++;
                   }
                }
                document.write(t+'</center>');
            
                document.write('<center>Past<center>');
                k=0;
                t="";
                document.write('<br>');
                t = '<div class="row">'
                var l = Event.length;    
                l--;           
                for ( var i = l ;  i >= 0; i--)
                {
                  var today= new Date();
                  if(today > date1[i])
                   {  if (k%4==0 && k!=0) {
                        t+='</div>'
                        t += '<div class="row">'
                    }
                    var dat1=date1[i].getDate()+' '+months[date1[i].getMonth()]+' '+date1[i].getFullYear();
                    var t1= date1[i].getHours()+':'+date1[i].getMinutes()+':'+date1[i].getSeconds();
                    var t2= date2[i].getHours()+':'+date2[i].getMinutes()+':'+date2[i].getSeconds();
                    var dat2=date2[i].getDate()+' '+months[date2[i].getMonth()]+' '+date2[i].getFullYear();
                   
                    t+='<div class="col s12 m7">'
                    t+='<div class="card small">'
                    t+='<div class="card-image">'
                      t+='<img src="'+images[i]+'">'
                      t+='<span class="card-title">'+Event[i]+'</span>'
                      t+='</div>'
                      t+='<div class="card-content">'
                            t+='<strong>'+Venue[i]+'</strong>'
                            t+='<br>'
                            t+='Date:\t'+dat1+'\t'+t1+'-'+dat2+'\t'+t2
                      t+='</div>'
                            t+='</div>'
                            t+='</div>'
                    k++;
                   }
                }
            document.write(t);
                </script>
  <!-- <center>
      <div class="container-fluid" >
          <div class="row">
            <div class="col-md-3" style="margin:10px">
                <img src="http://vwpthemes.com/tf/listka-preview/img/listing/2.jpg">
                
            </div>      
            
            <div class="col-md-3" style="margin:10px">
                    <img src="http://vwpthemes.com/tf/listka-preview/img/listing/2.jpg">
                    
            </div>      
            
            <div class="col-md-3" style="margin:10px">
                    <img src="http://vwpthemes.com/tf/listka-preview/img/listing/2.jpg">
                    
            </div>          
        </div>
      </div>   
    </center> -->
</div>
</body>
</html>

<!-- <form action="/action_page.php">
  Birthday:
  <input type="date" name="bday">
  <input type="submit">
</form> -->