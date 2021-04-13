<!DOCTYPE html>
<html>
<head>
<title>Card Effect</title>
</head>
<body>
     <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
     <style>
         body{
  display:flex;
  margin:0;
  padding:0;
  min-height: 100vh;
  justify-content: center;
  align-items: center;
  font-family: arial;
}

.container{
  width: 1000px;
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-wrap:wrap;
  
}

.container .card{
  position: relative;
}

.container .card .face{
  width:300px;
  height: 200px;
  transition:.4s;
  
}

.container .card .face.face1{
  position: relative;
  background: none;
  display: flex;
  justify-content: center;
  align-content:center;
  align-items: center;
  z-index: 1;
  transform: translateY(100px);
}

.container .card:hover .face.face1{
  transform: translateY(0);
  box-shadow:
    inset 0 0 60px whitesmoke,
    inset 20px 0 80px #f0f,
    inset -20px 0 80px #0ff,
    inset 20px 0 300px #f0f,
    inset -20px 0 300px #0ff,
    0 0 50px #fff,
    -10px 0 80px #f0f,
    10px 0 80px #0ff;
   
}


.container .card .face.face1 .content{
  opacity: .2;
  transition:  0.5s;
  text-align: center;
}

.container .card:hover .face.face1 .content{
  opacity: 1;
 
}

.container .card .face.face1 .content i{
  font-size: 3em;
  color: white;
  display: inline-block;
   
}

.container .card .face.face1 .content h3{
  font-size: 1em;
  color: white;
  text-align: center;
  

}

.container .card .face.face1 .content a{
   transition: .5s;
}
.content .fa{
  height: 30px;
  width: 30px;
  border: 2px solid black;
  background-color: black;
  color: #fff;
  border-radius: 50%;
  border: 4px solid rgb(94, 16, 221);
  padding-top: 8px;
  padding-left: 8px;
}

.container .card .face.face2{
   position: relative;
   background: whitesmoke;
   display: flex;
   align-items: center;
   justify-content: center;
   padding: 20px;
  box-sizing: border-box;
  box-shadow: 0 20px 50px rgba(0,0,0,.8);
  transform: translateY(-100px);
}

.container .card:hover .face.face2{
    transform: translateY(0);


}

.container .card .face.face2 .content p, a{
  font-size: 10pt;
  margin: 0 ;
  padding: 0;
  color:#333;
}

.container .card .face.face2 .content a{
  text-decoration:none;
  color: black;
  box-sizing: border-box;
  outline : 1px dashed #333;
  padding: 10px;
  margin: 15px 0 0;
  display: inline-block;
}

.container .card .face.face2 .content a:hover{
  background: #333 ;
  color: whitesmoke; 
  box-shadow: inset 0px 0px 10px rgba(0,0,0,0.5);
}

     </style>

  <div class="container">

     <div class="card">
        <div class="face face1">
          <div class="content">
             <img src="https://th.bing.com/th/id/OIP.GbeY7LcGHyTFk-GQBJB75QHaFj?w=240&h=180&c=7&o=5&dpr=1.25&pid=1.7" alt="">          
            <h3>Windows</h3>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
            <i class="fa fa-facebook"></i>            
             <i class="fa fa-linkedin"></i>            
             <i class="fa fa-envelope"></i>            
             <i class="fa fa-phone"></i>            
             <i class="fa fa-youtube"></i>  
          </div>
        </div>
     </div>
     <div class="card">
        <div class="face face1">
          <div class="content">
       <img src="https://th.bing.com/th/id/OIP.ex5i3ytDv0nJUUu0YXyLbQHaHa?w=205&h=205&c=7&o=5&dpr=1.25&pid=1.7" alt="">              <h3>Android</h3>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
            <i class="fa fa-facebook"></i>            
             <i class="fa fa-linkedin"></i>            
             <i class="fa fa-envelope"></i>            
             <i class="fa fa-phone"></i>            
             <i class="fa fa-youtube"></i>  
          </div>
        </div>
     </div>   
     <div class="card">
        <div class="face face1">
          <div class="content">
            <img src="data:image/jpeg;base64,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Tp7PdWrqPcwkiRmfvk5Pnkg9q/RaVn6xdr82t9Vs54pCZgrPc75muPUs8cLySb0EcykAnPGFP7Z45SLp00qxCBp06Akx0rUoZkJHWZ4m3KMEE5HbC4zyP0aezsbkEXNtbzDGPzoo3/8AyFVsv4W/DUpJNgiEnP5Mk0QB+QqMB/apfiawU0Fs+CbWCDaEZEjeYL+Wu0nqwFuWOSTzjNdrjTtMjeRVh2JCsKlxNLLFJJKQMvPwSPggZOPgVsW/CmjldiS38aZzsS5Ypnj+FwR8f0r7/wAs2v8A6hqZG9ZMNMjDepJVwCvcZOD9afWrsY9LXRussGVbayuvvnYPBKWcKN6dMFP0nnHf7VPubfSYIFaCK3Y3E6QlYbOKWGP3ozO5diQcnjB/h7YNaIfhjT9xZrrUGJGGzMvuGCPdhefNdE/DOgrt3QSSbSSOpNJ5GOykCp9abGSa6WRkibppHEpt2S3lNtHMqsGwxj3cnAyR34BAxivomv55ikEOqXF0J5SWAedFDJ0wJZ32rjGAwC4/etzBpOj2+OjYWqEdj0kLD/uYE1MAAAAAAHAA4A/ar9TWNXQNbvWVp2gtI9kMY3gTTCONdijC+3IH1H960VjpNpZdNg0s00auiS3DbmRXxuEYxgA45qxpWpJGSlKVQpSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlApSlB//Z" alt="">
             <h3>Apple</h3>
          </div>
        </div>
        <div class="face face2">
          <div class="content">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ab repudiandae, explicabo voluptate et hic cum ratione a. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
            <i class="fa fa-facebook"></i>            
             <i class="fa fa-linkedin"></i>            
             <i class="fa fa-envelope"></i>            
             <i class="fa fa-phone"></i>            
             <i class="fa fa-youtube"></i>  
          </div>
        </div>
     </div>
     
     
     
      
    
    
  </div>
  
</body>
</html><?php /**PATH G:\laravelproject\resources\views/portfolio.blade.php ENDPATH**/ ?>