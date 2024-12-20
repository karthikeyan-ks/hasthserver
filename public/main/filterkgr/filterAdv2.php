
<?php 

//index.php

include('database_connection2.php');

$servername = "localhost";
$username = "cek";
$password = "hastha@123";
$dbname = "elephant_py2";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>


<!doctype html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="content-filter-master/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="content-filter-master/css/style.css"> <!-- Resource style -->
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

  

	<script src="content-filter-master/js/modernizr.js"></script> <!-- Modernizr -->
  	


<script src="content-filter-master/js/jquery-2.1.1.js"></script>
<script src="content-filter-master/js/jquery.mixitup.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="content-filter-master/js/main.js"></script> <!-- Resource jQuery -->

    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    


	<title>Content Filters</title>
	
	
	
	<style>
	/*
 * Table styles
 */

	
	</style>
</head>
<body>
    <div class="contentalll">
        
	<header class="cd-header">
       <span style="float: right;">
                <button id="btn-increase"style="float:right; padding:5px; margin:2px; " class="up btn btn-primary btn-md ">Increase Font</button>
                
                <button id="btn-decrease"style="float:right; padding:5px; margin:2px; ;" class="down btn btn-primary btn-md ">Decrease Font</button>
            </span>
		<h1 style="margin-top:0px">Commercial Details Filtering System</h1>
        
        
	</header>
	<main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
<div class="cd-tab-filter">
</div> 
</div> 

 
      
<u><a  href="../index.php"><h5 style="margin-top:0px; padding-top:15px; position: absolute; right: 20px; color:#301198; text-decoration:underline" >Back to Dashboard</h5></a></u>


        <section class="cd-gallery">

		
			<div class="col-md-10">
             <br />
                              <p>
    </p>
             <div id="tab">

                <div class="row filter_data">
                 
                </div>
                </div>
            </div>
		</section>
		
		
		
		<div class="cd-filter">
			<form>
		
				

				<div class="cd-filter-block">
					
					<input type='button' value="clear" onClick="window.location.reload()"  />
					
				</div> <!-- cd-filter-block -->

				<h3>Year Of Establishment</h3>
                    <input type="hidden" id="hidden_minimum_age" value="1950" />
                    <input type="hidden" id="hidden_maximum_age" value="2021" />
                    <p id="age_show">1950 - 2021</p>
                    <div id="age_range"></div>

				
				
				<div class="cd-filter-block">
					<h4>Type Of Business</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector type" value="workshop"  > Workshop</label>  
                        </div>
                        <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector type" value="medicals"  > Medicals</label>  
                        </div>
                        <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector type" value="store"  > store</label>  
                        </div>
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>License Availability</h4>
					
					<div class="cd-filter-content " style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector license" value="yes"  >Yes</label>  
                        </div>
                        <div class="list-group-item checkbox">  
                        <label><input type="checkbox" class="common_selector license" value="no"  >No</label> 
                        </div>
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>CC Tv</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector cctv" value="yes"  >Yes</label>  
                        </div>
                        <div class="list-group-item checkbox">  
                        <label><input type="checkbox" class="common_selector cctv" value="no"  >No</label> 
					    </div>
                     <!--    <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector sector" value="anything else"  > anything else</label> 
                        </div> -->
					</div>
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Emergency Security System</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector emergency" value="yes"  >Yes</label>  
                        </div>
                        <div class="list-group-item checkbox">  
                        <label><input type="checkbox" class="common_selector emergency" value="no"  >No</label> 
					    </div> <!-- cd-filter-content -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
	</main> <!-- cd-main-content -->
	
	</div>

    <style>
#loading
{
 text-align:center; 
 background: url('loader.gif') no-repeat center; 
 height: 150px;
}
</style>

	<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data2';
        var minimum_age = $('#hidden_minimum_age').val();
        var maximum_age = $('#hidden_maximum_age').val();
        var type = get_filter('type');
        var license = get_filter('license');
        var cctv = get_filter('cctv');
        var emergency = get_filter('emergency');
        
        $.ajax({
            url:"fetch_data2.php",
            method:"POST",
            data:{action:action, minimum_age:minimum_age, maximum_age:maximum_age, type:type, license:license, cctv:cctv, emergency:emergency},
            success:function(data){
                $('.filter_data').html(data);
                $(document).find("#example23").DataTable({
                    dom: 'Bfrtip',
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    buttons: [
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                });
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#age_range').slider({
        range:true,
        min:1950,
        max:2021,
        values:[1950, 2021],
        step:1,
        stop:function(event, ui)
        {
            $('#age_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_age').val(ui.values[0]);
            $('#hidden_maximum_age').val(ui.values[1]);
            filter_data();
        }
    });
});

function uncheckAll() 
    {
        $("input[type='checkbox']:checked").prop("checked", false)
    }
    $(':button').on('click', uncheckAll);
    
</script>





<script>
    function createPDF() {
        var sTable = document.getElementById('tab').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
</script>
<script>
    $("[id$=myButtonControlID]").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent( $('div[id$=tab]').html()));
    e.preventDefault();
});
</script>


<script>
    
    
    $('.up').on('click', function () {
    $('.contentalll').animate({'font-size': '+=5'});
});

$('.down').on('click', function () {
    $('.contentalll').animate({'font-size': '-=5'});
});
</script>

</body>
</html>
