<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<?php 
  $name = "Firse Modi Sarkar";
  $st = "27-4-2019 12:00:00";
  $desc = "Narendra Damodardas Modi (pronounced [ˈnəɾendrə dɑmodəɾˈdɑs ˈmodiː] (About this soundlisten); born 17 September 1950) is an Indian politician serving as the 14th and current Prime Minister of India since 2014. He was the Chief Minister of Gujarat from 2001 to 2014, and is the Member of Parliament for Varanasi. Modi is a member of the Bharatiya Janata Party (BJP) and the Rashtriya Swayamsevak Sangh (RSS), a Hindu nationalist volunteer organisation."; ?>
<?php $pic="\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/PM_Modi_2015.jpg/220px-PM_Modi_2015.jpg\"";
      $cover="\"http://allspecenclosures.com/wp-content/uploads/2014/02/dark-bg.jpg\"";
  ?>

<style>
  @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

*, *:before, *:after {
  box-sizing: border-box;
}

body {
  background: #43423E;
}

a {
  text-decoration: none;
  color: #5C7FB8
}

a:hover {
  text-decoration: underline;
}

.movie-card {
  font: 14px/22px "Lato", Arial, sans-serif;
  color: #A9A8A3;
  padding: 40px 0;
}

.container {
  margin: 0 auto;
  width: 780px;
  height:800px;
  background: #F0F0ED;
  border-radius: 5px;
  position: relative;
}

.hero {
  height: 342px;  
  margin:0;
  position: relative;
  overflow: hidden;
  z-index:1;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
    
}

.hero:before {
  content:'';
  width:100%; height:100%;
  position:absolute;
  overflow: hidden;
  top:0; left:0;
  background:red;
  background: url(<?php echo  $cover ;?>);
  z-index:-1;
 
  transform: skewY(-2.2deg);
  transform-origin:0 0;
  
  //chrome antialias fix
  -webkit-backface-visibility: hidden; 
  
}

.cover {
  position: absolute;
  top: 160px;
  left: 40px;
  z-index: 2;
  width:180px;
}

.details {
  
  padding: 190px 0 0 280px;
  
  
  .title1 {
    color: white;
    font-size: 44px;
    margin-bottom: 13px;
    position: relative;
    
    span {
      position: absolute;
      top: 3px;
      margin-left: 12px;
      background: #C4AF3D;
      border-radius: 5px;
      color: #544C21;
      font-size: 14px;
      padding: 0px 4px;
      
    }
  }

  .title2 {    
    color: #C7C1BA;
    font-size: 23px;    
    font-weight: 300;
    margin-bottom: 15px;
  }
  
  
  .likes {
    margin-left: 24px;
  }
  
  
  .likes:before {
    content: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/icon_like.png");
    position: relative;
    top: 2px;
    padding-right: 7px;
  }

}

.description {
  
  bottom: 0px;
  height: 200px;
  font-size: 16px;
  line-height: 26px;
  color: #B1B0AC;
  
}

.column1 {
  padding-left: 50px;
  padding-top: 120px;
  width: 220px;
  float: left;
  text-align: center;
}

.tag {
  background: white;
  border-radius: 10px;
  padding: 3px 8px;
  font-size: 14px;
  margin-right: 4px;
  line-height: 35px;
  cursor: pointer;
}

.tag:hover {
  background: #ddd;
}

.column2 {
  padding-left: 41px;
  padding-top: 30px;
  margin-left: 20px;
  width: 480px;
  float: left;
}

.avatars {
  margin-top: 23px;
  
  img {
    cursor: pointer;
  }
  
  img:hover {
    opacity: 0.6;
  }
  
  a:hover {
    text-decoration: none;
  }
}


fieldset, label { margin: 0; padding: 0; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  margin-top: 0;
  font-size: 1em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 


a[data-tooltip] {
  position: relative;
}
a[data-tooltip]::before,
a[data-tooltip]::after {
  position: absolute;
  display: none;
  opacity: 0.85;
}
a[data-tooltip]::before {
  /*
   * using data-tooltip instead of title so we 
   * don't have the real tooltip overlapping
   */
  content: attr(data-tooltip);
  background: #000;
  color: #fff;
  font-size: 13px;
  padding: 5px;
  border-radius: 5px;
  /* we don't want the text to wrap */
  white-space: nowrap;
  text-decoration: none;
}
a[data-tooltip]::after {
  width: 0;
  height: 0;
  border: 6px solid transparent;
  content: '';
}

a[data-tooltip]:hover::before,
a[data-tooltip]:hover::after {
  display: block;
}

/** positioning **/

/* top tooltip */
a[data-tooltip][data-placement="top"]::before {
  bottom: 100%;
  left: 0;
  margin-bottom: 40px;
}
a[data-tooltip][data-placement="top"]::after {
  border-top-color: #000;
  border-bottom: none;
  bottom: 50px;
  left: 20px;
  margin-bottom: 4px;
}
</style>
<div class="movie-card">
  
  <div class="container">
    
    <a href="#"><img src=<?php echo $pic; ?> alt="cover" class="cover" /></a>
        
    <div class="hero">
            
      <div class="details">
      
        <div class="title1" style ="font-weight:bold;color:white;font-size:230%;padding:1%"><?php echo $name ?></div>
        
        <div class="title2" style ="font-weight:bold;color:white;font-size:130%;padding:1%" ><?php echo $st ?></div>    
       
        
        <span class="likes" style="padding:1%;color:white;font-size:100%;"><i class="fas fa-heart"></i>109 likes</span>
        
      </div> <!-- end details -->
      
    </div> <!-- end hero -->
    
    <div class="description">
      
      <div class="column1">
        <!-- <span class="tag">action</span>
        <span class="tag">fantasy</span>
        <span class="tag">adventure</span> -->
      </div> 
      
      <div class="column2">
        <div> 
          <a href="#" class="invite" style="align=right"><img style = "width:40px;height:40px;align=right" src="icons/addpart.png"></a>
        </div>  
        <p><?php echo $desc ?></p>
        
      
      </div> <!-- end column2 -->
    </div> <!-- end description -->
    
   
  </div> <!-- end container -->
</div> <!-- end movie-card -->