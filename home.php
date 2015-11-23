<head>
<script>
function abc()
{
var arr=new Array("usepics/homepageslids1.jpg","usepics/homepageslids2.jpg","usepics/homepageslids3.jpg","usepics/homepageslids4.jpg","usepics/homepageslids5.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
</head>
<body>
<div id="RightPart">
  <div id="Page"><img src="usepics/homepageslids1.jpg" alt="" width="100%" height="475" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  
  </div>
  </div>
  </body>