<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Course</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
 </head>
 <body>
        <form action="/action_page.php">
  <div class="container">    
     <br />
     <h3>Register Course</h3>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
           <thead>
            <tr>
                <th>Course</th>
                <th>Package</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            
           </thead>
           <tbody>
           @foreach($data as $datas)
            <tr>
             <td>{{ $datas->course_name }}</td>
             <td>{{ $datas->package_name }}</td>
             <td>{{ $datas->price }}</td>
             <td><input type="checkbox" name="price" class="checks" value="{{ $datas->price }}"></td>
            </tr>
           @endforeach
            <tr>
                <th><h4>Total: RM <span id="tots">0.00</span></h4> </th>
            </tr>

            
           </tbody>
       </table>
       <input type="submit" value="Pay">
            </form>
   </div>
  </div>
    <script>
        var total = 0;
            // $(document).on("click", ".checks", function() {
            //     if ($(this).prop('checked') == true) {
            //         total += Number($(this).data("value"));
            //     } else if ($(this).prop('checked') == false) {
            //         total -= Number($(this).data("value"));   
            //     }
            // $('#tots').text(Math.round(total * 100) / 100);
            // });
            var setPrice = 0;

$( document ).on( "click", ".checks", function() {

 if ($(this).prop('checked')==true){ 
       
var harga = $(this).attr("value");

var tots = $('#tots').html();

var setHarga = Number(harga) + Number(tots);
	 
var ffp = Math.round(setHarga * 100) / 100;
	
$('#tots').text(ffp);
	   
	   
}else if ($(this).prop('checked')==false){ 
      
	  
var harga = $(this).attr("value");

var tots = $('#tots').html();
	
var setHarga = Number(tots) - Number(harga);
	 
	 
    var ffp = Math.round(setHarga * 100) / 100;
	
	$('#tots').text(ffp);
	  
    }

});
    </script>
 </body>
</html>