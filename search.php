<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>search</title>


  
<!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">


  <!-- Custom styles for this template -->
 <link href="css/resume.min.css" rel="stylesheet">


</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h2 class="text-center text-primary ">Welcome To Search</h2>

      <div class="form-group mt-5 table-bordered">
  <input type="text" class="form-control" name="" id="myinp"  placeholder="Search Name" onkeyup="searchFun()">
</div>

<table class=" table  table-bordered table-stripped table-hover " id="tbval">

  <tr class="header text-center">
    <th>Name</th>
    <th>Fname</th>
    <th>Country</th>
   
  </tr>

<tr>
  <td>Munesh</td>
  <td>Raj</td>
  <td>pakistan</td>
  
</tr>

<tr>
  <td>Aneel</td>
  <td>Teerth</td>
  <td>pakistan</td>
 
</tr>


<tr>
  <td>lalwani</td>
  <td>Raj</td>
  <td>pakistan</td>
  
</tr>

<tr>
  <td>kumar</td>
  <td>Raj</td>
  <td>pakistan</td>
  
</tr>

<tr>
  <td>Teerath</td>
  <td>Heman</td>
  <td>pakistan</td>
  
</tr>

  
</table>

</div>
  </div>
</div>







<!-- seach javascript-->







<script>




const searchFun =() =>{
  let filter = document.getElementById('myinp').value.toUpperCase();

  let tbval = document.getElementById('tbval');

  let tr = tbval.getElementsByTagName('tr');

  for(var i=0; i<tr.length; i++){

    let td= tr[i].getElementsByTagName('td')[0];

    if(td){

      let textvalue = td.textContent ||  td.innerHTML;
        if(textvalue.toUpperCase().indexOf(filter) >  -1){
                tr[i].style.display="";

        }
        else{
          tr[i].style.display="none";
        }
    }


  }

   
}


</script>
<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>