<?php
session_start(); 
?>
<style>
table tbody {
    padding:100%;
}
</style>
<body style=" background-color:powderblue;">
<div >
    
        <script>
                var Event = ["VrakshRopan","Film Promotion","Get Together"];
                var Venue = ["Madhaav Udhyan","M P Hall","Athletic Ground"];
                var date = ["27/12/19","27/12/19","27/12/19"];
                var time1 = ["7:00 am","10:00 am","7:00 pm"];

                var time2 = ["10:00 am","12:00 pm","10:00 pm"];
                function expand(){

                }     
            var t='<div id="inf">'
            t += '<center><div  >';
                
            t +='<table class="tabl" style="color: white; ">';    
            t +=' <thead><tr><th ><h4 style="color: white;">Event</h4></th>           <th ><h4 style="color: white">Venue</h4></th><th ><h4 style="color: white">Date</h4></th><th ><h4 style="color: white">Timing</h4></th></tr></thead>';   

                
                t +='<tbody style="font:1.1em Sans-serif">';
                
                for(var i = 0 ; i < Event.length ; i++)
                {
                    t += '<tr >';
                    t += '<td >'+ Event[i] +'</td>'
                    t += '<td >'+ Venue[i] +'</td>'
                    t += '<td >'+ date[i] +'</td>'
                    t += '<td >'+ time1[i] +'-'+time2[i]+'</td>'
                  
                    
                    t += '</tr>';

                    
                }
                t +=' </tbody></table></div></center>'
                
                document.write(t);
        </script>    
    
</div>


</body>
</html>