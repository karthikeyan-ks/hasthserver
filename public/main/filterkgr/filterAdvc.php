
<?php 

//index.php

include('database_connection.php');

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
		<h1 style="margin-top:0px">Residential Details Filtering System</h1>
        
        
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

				<h3>Age</h3>
                    <input type="hidden" id="hidden_minimum_age" value="0" />
                    <input type="hidden" id="hidden_maximum_age" value="100" />
                    <p id="age_show">1 - 100</p>
                    <div id="age_range"></div>

				<div class="cd-filter-block">
					<h4 class="closed">Sex</h4>

					<ul class="cd-filter-content cd-filters list" style="display:none;">
						<?php

                        $query = "
                        SELECT DISTINCT(gender) FROM per_details  
                        ";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row)
                        {
                        ?>
                        <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector gender" value="<?php echo $row['gender']; ?>" > <?php echo $row['gender']; ?> </label>
                        </div>
                        <?php    
                        }
                        ?>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
				
				<div class="cd-filter-block">
					<h4>Family Head / Member</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector head" value="head"  > Head Only</label>  
                        </div>
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Income</h4>
					
					<div class="cd-filter-content " style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector income_belo" value="100000"  > below 100000</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector income_betw"   > between 100000 and 500000</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector income_betw2"   > between 500000 and 1000000</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector income_abov" value="1000000"  > above 1000000</label> 
                        </div>	  <!-- cd-select -->
                        
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Job Sector</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector sector" value="government"  > government</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector sector" value="private sector"  > private sector</label> 
                        </div>
                     <!--    <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector sector" value="anything else"  > anything else</label> 
                        </div> -->
					</div>
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Marital</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector marital" value="single"  > single</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector marital" value="married"  > married</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector marital" value="widow"  > widow</label> 
                        </div>
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Education</h4>
					
					<div class="cd-filter-content" style="display:none;">
					<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector education" value="SSLC"  > SSLC</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector education" value="plus two"  > plus two</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector education" value="VHSE"  > VHSE</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector education" value="ITI"  > ITI</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector education" value="polytechnic"  > polytechnic</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector education" value="UG degree"  > UG degree</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector education" value="PG Degree"  > PG Degree</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector education" value="PHD"  > PHD</label> 
                        </div>	
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Blood group</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector blood" value="A+"  > A+</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector blood" value="A-"  > A-</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector blood" value="B+"  > B+</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector blood" value="B-"  > B-</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector blood" value="O+"  > O+</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector blood" value="O-"  > O-</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector blood" value="AB+"  > AB+</label> 
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector blood" value="AB-"  > AB-</label> 
                        </div>			
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

                
                <div class="cd-filter-block">
					<h4>Ex-Service</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector x_ser" value="yes"  > yes</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector x_ser" value="no"  >no</label> 
                        </div>
                    
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

                <div class="cd-filter-block">
					<h4>BP</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector bp" value="yes"  > yes</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector bp" value="no"  > no</label> 
                        </div>                                           			
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

                <div class="cd-filter-block">
					<h4>sugar</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector sugar" value="yes"  > yes</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector sugar" value="no"  > no</label> 
                        </div>                                           			
					</div> <!-- cd-filter-content -->
				</div> 

                <div class="cd-filter-block">
					<h4>bedridden</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector bedridden" value="yes"  > yes</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector bedridden" value="no"  > no</label> 
                        </div>                                           			
					</div> <!-- cd-filter-content -->
				</div>                
					
				<div class="cd-filter-block">
					<h4>Cancer</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox" >
                        <label><input type="checkbox" class="common_selector cancer" value="yes"  > yes</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector cancer" value="no"  > no</label> 
                        </div>                                           			
					</div> <!-- cd-filter-content -->
				</div> 
						
                <div class="cd-filter-block">
					<h4>pension</h4>
					
					<div class="cd-filter-content" style="display:none;">
						<div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector pension" value="yes"  > yes</label>  
                        </div>
                        <div class="list-group-item checkbox">   <label><input type="checkbox" class="common_selector pension" value="no"  > no</label> 
                        </div>                                           			
					</div> <!-- cd-filter-content -->
				</div> 

				<div class="cd-filter-block">
					<h4>Radio buttons</h4>

					<ul class="cd-filter-content cd-filters list" style="display:none;">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">Choice 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Choice 3</label>
						</li>
					</ul> <!-- cd-filter-content -->
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
        var action = 'fetch_data';
        var minimum_age = $('#hidden_minimum_age').val();
        var maximum_age = $('#hidden_maximum_age').val();
        var brand = get_filter('brand');
        var gender = get_filter('gender');
        var income_belo = get_filter('income_belo');
        var income_betw = get_filter('income_betw');
        var income_betw2 = get_filter('income_betw2');
        var income_abov = get_filter('income_abov');
        var marital = get_filter('marital');
        var education = get_filter('education');
        var sector = get_filter('sector');
        var blood = get_filter('blood');
        var x_ser = get_filter('x_ser');
        var bp = get_filter('bp');
        var sugar = get_filter('sugar');
        var bedridden = get_filter('bedridden');
        var cancer = get_filter('cancer');
        var pension = get_filter('pension');
        var head = get_filter('head');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_age:minimum_age, maximum_age:maximum_age, brand:brand, gender:gender, income_belo:income_belo, income_betw:income_betw, income_betw2:income_betw2, income_abov:income_abov, marital:marital, education:education, sector:sector,blood:blood,x_ser:x_ser, bp:bp,sugar:sugar,bedridden:bedridden,cancer:cancer,pension:pension, head:head},
            success:function(data){
                $('.filter_data').html(data);
                $(document).find("#example23").DataTable({
                    dom: 'Blfrtip',
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
        min:1,
        max:110,
        values:[1, 110],
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