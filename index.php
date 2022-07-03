<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button  onclick="func1()">
      tik</button>
<div class="" id="table">

</div>
<script src="jquery-3.6.0.min.js">

</script>
<script type="text/javascript">


    function func1()
    {var str="<ul>";
      //alert('123');
      $.ajax({
          method: "GET",
          url: "https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json",
          success: function (data) {
for (var i = 0; i < data.length; i++) {
  str+="<li>"+data[i]['rate']+" "+data[i]['txt']+"</li>";
}
str+="</ul>";
//alert(data[0]['rate']);
 //var arr= new Array();
 //arr= JSON.parse(data);
 //alert(arr);
        $("#table").html("");
               $("#table").html(str);

          }
          });

    }
            </script>
</body>
</html>
