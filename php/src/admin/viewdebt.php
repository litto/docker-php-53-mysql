<?php
include("db.php");

$id=$_GET['id'];
$act=new Debt();
$cusdet=$act->getdetails($id);
$docs=$act->getdocdetails($id);
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Admin|Debt Details</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->
<?php include("script.php");  ?>

	</head>

<style>
 #editor {overflow:scroll; max-height:300px}
</style>
<script type="text/javascript">
function reset(){
	document.getElementById("addproduct").reset();
}
</script>
	<body>
		<?php include("topheader.php");  ?>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<?php include("sidebar.php"); ?>
			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="home.php">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Debt Details</li>
					</ul><!-- .breadcrumb -->

					<div class="nav-search" id="nav-search">
					
					</div><!-- #nav-search -->
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Activity Details
						
						</h1>
					</div><!-- /.page-header -->

					<div class="row-fluid">
						<div class="span12">
							<!-- PAGE CONTENT BEGINS -->
								 <?php $message  =   new Message('','');
                    $message->showMessage();
        ?>





							<div class="space-6"></div>
<div class="row-fluid">
		

											<div class="space-4"></div>
											<div class="width-80 label label-info label-large">
												<div class="inline position-relative">
													<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
														<i class="icon-circle light-green middle"></i>
														&nbsp;
					<span class="white middle bigger-120">Customer Details</span>
													</a>

										
												</div>
											</div>
															<div class="space-6"></div>

						
																	<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> Customer Name </div>

												<div class="profile-info-value">
													<span class="editable" id="username"><?php echo $cusdet[0]['name']; ?></span>
												</div>
											</div>

							

											<div class="profile-info-row">
												<div class="profile-info-name"> Email </div>

												<div class="profile-info-value">
													<span class="editable" id="age"><?php  echo $cusdet[0]['mail']; ?></span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Designation </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['designation'];  ?></span>
												</div>
											</div>

<div class="profile-info-row">
												<div class="profile-info-name"> Nationality </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['nationality'];  ?></span>
												</div>
											</div>
<div class="profile-info-row">
												<div class="profile-info-name">Organization</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['organization'];  ?></span>
												</div>
											</div>
<div class="profile-info-row">
												<div class="profile-info-name">Mobile</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['cell'];  ?></span>
												</div>
											</div>

<div class="profile-info-row">
												<div class="profile-info-name">Location</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['location'];  ?></span>
												</div>
											</div>


<div class="profile-info-row">
												<div class="profile-info-name">Address</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['postaladdress'];  ?></span>
												</div>
											</div>


<div class="profile-info-row">
												<div class="profile-info-name">Fax</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['fax'];  ?></span>
												</div>
											</div>

<div class="profile-info-row">
												<div class="profile-info-name">Telephone</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['phone'];  ?></span>
												</div>
											</div>



<div class="profile-info-row">
												<div class="profile-info-name">Type of service </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['service_type'];  ?></span>
												</div>
											</div>




<div class="profile-info-row">
												<div class="profile-info-name">Additional Info </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['additional_info'];  ?></span>
												</div>
											</div>


											
										
										</div>
										</div>






<div class="row-fluid">
		

											<div class="space-4"></div>
											<div class="width-80 label label-info label-large">
												<div class="inline position-relative">
													<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
														<i class="icon-circle light-green middle"></i>
														&nbsp;
					<span class="white middle bigger-120">Debtor Details</span>
													</a>

										
												</div>
											</div>
															<div class="space-6"></div>

						
																	<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> Name </div>

												<div class="profile-info-value">
													<span class="editable" id="username"><?php echo $cusdet[0]['debtor_name']; ?></span>
												</div>
											</div>

							

											<div class="profile-info-row">
												<div class="profile-info-name"> Email </div>

												<div class="profile-info-value">
													<span class="editable" id="age"><?php  echo $cusdet[0]['debtor_mail']; ?></span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Designation </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_designation'];  ?></span>
												</div>
											</div>

<div class="profile-info-row">
												<div class="profile-info-name"> Nationality </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_nationality'];  ?></span>
												</div>
											</div>
<div class="profile-info-row">
												<div class="profile-info-name">Organization</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_organization'];  ?></span>
												</div>
											</div>
<div class="profile-info-row">
												<div class="profile-info-name">Mobile</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_cell'];  ?></span>
												</div>
											</div>

<div class="profile-info-row">
												<div class="profile-info-name">Location</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_location'];  ?></span>
												</div>
											</div>


<div class="profile-info-row">
												<div class="profile-info-name">Address</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_postaladdress'];  ?></span>
												</div>
											</div>


<div class="profile-info-row">
												<div class="profile-info-name">Fax</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_fax'];  ?></span>
												</div>
											</div>

<div class="profile-info-row">
												<div class="profile-info-name">Telephone</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_phone'];  ?></span>
												</div>
											</div>

<?php
$obj    =   new Auth();
?>

<div class="profile-info-row">
												<div class="profile-info-name">Due Amount </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_currrency'];  ?> <?php echo $cusdet[0]['debtor_dueamount'];  ?></span>
												</div>
											</div>

<div class="profile-info-row">
												<div class="profile-info-name">Indebt date</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $cusdet[0]['debtor_date_indebt'];  ?></span>
												</div>
											</div>
<div class="profile-info-row">
												<div class="profile-info-name"> Login Ip </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $ip=$cusdet[0]['ip'];  ?></span>
												</div>
											</div>

<?php
$dt=$obj->geoCheckIP($ip);
?>

<div class="profile-info-row">
												<div class="profile-info-name"> Login Country</div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php echo $dt['country'];  ?></span>
												</div>
											</div>


<div class="profile-info-row">
												<div class="profile-info-name">Debtor History </div>

												<div class="profile-info-value">
													<span class="editable" id="signup"><?php 

													if($cusdet[0]['checkreturn']==1){
														echo "Check Returned,";
													}
														if($cusdet[0]['inability']==1){
														echo "Inability to pay Debt,";
													}
                                                  
                                                  		if($cusdet[0]['mailreturn']==1){
														echo "Mail Returned,";
													}
													if($cusdet[0]['phonedisconnect']==1){
														echo "Phone Disconnected,";
													}
	if($cusdet[0]['others']==1){
														echo $cusdet[0]['other_reason'];
													}


													?>


													</span>
												</div>
											</div>


											
										
										</div>
										</div>













																	<div class="space-6"></div>	

<div class="width-80 label label-info label-large">
												<div class="inline position-relative">
													<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
														<i class="icon-circle light-green middle"></i>
														&nbsp;
					<span class="white middle bigger-120">Other  Details</span>
													</a>

										
												</div>
											</div>
										
							<div class="space-6"></div>	
														<div class="space-6"></div>	

							<div class="row-fluid">






								
			<div class="control-group">
									<label class="control-label" for="form-field-1">Remarks</label>

									<div class="controls">

								<?php echo $cusdet[0]['comment']; ?>
									
									</div>
								</div>
								<h5><b>Documents Attached</b></h5>				

<?php  for($i=0;$i<count($docs);$i++){?>
	<div class="control-group">
									<label class="control-label" for="form-field-1"></label>

									<div class="controls">

							<a href="download.php?file=<?php echo $docs[$i]['file']; ?>"  class="btb btn-primary">&nbsp; &nbsp;	Download &nbsp; &nbsp;</a>  <?php echo $docs[$i]['file']; ?>
									
									</div>
								</div>	



<?php } ?>



								<div class="hr"></div>

								<div class="vspace"></div>

								<div class="span5">
							
								</div><!-- /span -->
							</div><!-- /row -->


							<div class="row-fluid">


					
							</div><!-- /row -->

							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.span -->
					</div><!-- /.row-fluid -->
				</div><!-- /.page-content -->


			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
<script type="text/javascript">

function loadnewcustomer(str){
document.getElementById("newcustomer").style.display='none';
if(str==0){
document.getElementById("newcustomer").style.display='block';
}
}
</script>
	<?php include("footerscript.php");  ?>
		<script src="assets/js/ace.min.js"></script>


		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($){
			
			try {
			  $(".dropzone").dropzone({
			    paramName: "file", // The name that will be used to transfer the file
			    maxFilesize: 1, // MB
			    maxFiles: 3,
                addRemoveLinks : true,
				dictDefaultMessage :
				'<span class="bigger-150 bolder"><i class="icon-caret-right red"></i> Drop files</span> to upload \
				<span class="smaller-80 grey">(or click)</span> <br /> \
				<i class="upload-icon icon-cloud-upload blue icon-3x"></i>'
			,
				dictResponseError: 'Error while uploading file!',
				
				//change the previewTemplate to use Bootstrap progress bars
				previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-details\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class=\"progress progress-small progress-success progress-striped active\"><span class=\"bar\" data-dz-uploadprogress></span></div>\n  <div class=\"dz-success-mark\"><span></span></div>\n  <div class=\"dz-error-mark\"><span></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n</div>"
			  });
			} catch(e) {
			  alert('Dropzone.js does not support older browsers!');
			}
			
			});


		</script>
<script type="text/javascript">
			jQuery(function($) {
			
				$( "#datepicker" ).datepicker({
					showOtherMonths: true,
					selectOtherMonths: false,
					//isRTL:true,
			
					/**
					,
					changeMonth: true,
					changeYear: true,
					
					showButtonPanel: true,
					beforeShow: function() {
						//change button colors
						var datepicker = $(this).datepicker( "widget" );
						setTimeout(function(){
							var buttons = datepicker.find('.ui-datepicker-buttonpane')
							.find('button');
							buttons.eq(0).addClass('btn btn-mini');
							buttons.eq(1).addClass('btn btn-mini btn-success');
							buttons.wrapInner('<span class="bigger-110" />');
						}, 0);
					}
					*/
				});
			
				$( "#datepicker1" ).datepicker({
					showOtherMonths: true,
					selectOtherMonths: false,
					//isRTL:true,
			
					/**
					,
					changeMonth: true,
					changeYear: true,
					
					showButtonPanel: true,
					beforeShow: function() {
						//change button colors
						var datepicker = $(this).datepicker( "widget" );
						setTimeout(function(){
							var buttons = datepicker.find('.ui-datepicker-buttonpane')
							.find('button');
							buttons.eq(0).addClass('btn btn-mini');
							buttons.eq(1).addClass('btn btn-mini btn-success');
							buttons.wrapInner('<span class="bigger-110" />');
						}, 0);
					}
					*/
				});
				//override dialog's title function to allow for HTML titles
				$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
					_title: function(title) {
						var $title = this.options.title || '&nbsp;'
						if( ("title_html" in this.options) && this.options.title_html == true )
							title.html($title);
						else title.text($title);
					}
				}));
			
				$( "#id-btn-dialog1" ).on('click', function(e) {
					e.preventDefault();
			
					var dialog = $( "#dialog-message" ).dialog({
						modal: true,
						title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='icon-ok'></i> jQuery UI Dialog</h4></div>",
						title_html: true,
						buttons: [ 
							{
								text: "Cancel",
								"class" : "btn btn-mini",
								click: function() {
									$( this ).dialog( "close" ); 
								} 
							},
							{
								text: "OK",
								"class" : "btn btn-primary btn-mini",
								click: function() {
									$( this ).dialog( "close" ); 
								} 
							}
						]
					});
			
					/**
					dialog.data( "uiDialog" )._title = function(title) {
						title.html( this.options.title );
					};
					**/
				});
			
			
				$( "#id-btn-dialog2" ).on('click', function(e) {
					e.preventDefault();
				
					$( "#dialog-confirm" ).dialog({
						resizable: false,
						modal: true,
						title: "<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i> Empty the recycle bin?</h4></div>",
						title_html: true,
						buttons: [
							{
								html: "<i class='icon-trash bigger-110'></i>&nbsp; Delete all items",
								"class" : "btn btn-danger btn-mini",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
							,
							{
								html: "<i class='icon-remove bigger-110'></i>&nbsp; Cancel",
								"class" : "btn btn-mini",
								click: function() {
									$( this ).dialog( "close" );
								}
							}
						]
					});
				});
			
			
				
				//autocomplete
				 var availableTags = [
					"ActionScript",
					"AppleScript",
					"Asp",
					"BASIC",
					"C",
					"C++",
					"Clojure",
					"COBOL",
					"ColdFusion",
					"Erlang",
					"Fortran",
					"Groovy",
					"Haskell",
					"Java",
					"JavaScript",
					"Lisp",
					"Perl",
					"PHP",
					"Python",
					"Ruby",
					"Scala",
					"Scheme"
				];
				$( "#tags" ).autocomplete({
					source: availableTags,
					maxTags:'1'
				});
			
				//custom autocomplete (category selection)
				$.widget( "custom.catcomplete", $.ui.autocomplete, {
					_renderMenu: function( ul, items ) {
						var that = this,
						currentCategory = "";
						$.each( items, function( index, item ) {
							if ( item.category != currentCategory ) {
								ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
								currentCategory = item.category;
							}
							that._renderItemData( ul, item );
						});
					}
				});
				
		



		

         
           	   	$( "#searchprod" ).catcomplete({
					delay: 0,
					source: '../productautosuggestproduct.php'
				});
				//tooltips
				$( "#show-option" ).tooltip({
					show: {
						effect: "slideDown",
						delay: 250
					}
				});
			
				$( "#hide-option" ).tooltip({
					hide: {
						effect: "explode",
						delay: 250
					}
				});
			
				$( "#open-event" ).tooltip({
					show: null,
					position: {
						my: "left top",
						at: "left bottom"
					},
					open: function( event, ui ) {
						ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
					}
				});
			
			
				//Menu
				$( "#menu" ).menu();
			
			
				//spinner
				var spinner = $( "#spinner" ).spinner({
					create: function( event, ui ) {
						//add custom classes and icons
						$(this)
						.next().addClass('btn btn-success').html('<i class="icon-plus"></i>')
						.next().addClass('btn btn-danger').html('<i class="icon-minus"></i>')
						
						//larger buttons on touch devices
						if(ace.click_event == "tap") $(this).closest('.ui-spinner').addClass('ui-spinner-touch');
					}
				});
			
				//slider example
				$( "#slider" ).slider({
					range: true,
					min: 0,
					max: 500,
					values: [ 75, 300 ]
				});
			
			
			
				//jquery accordion
				$( "#accordion" ).accordion({
					collapsible: true ,
					heightStyle: "content",
					animate: 250,
					header: ".accordion-header"
				}).sortable({
					axis: "y",
					handle: ".accordion-header",
					stop: function( event, ui ) {
						// IE doesn't register the blur when sorting
						// so trigger focusout handlers to remove .ui-state-focus
						ui.item.children( ".accordion-header" ).triggerHandler( "focusout" );
					}
				});
				//jquery tabs
				$( "#tabs" ).tabs();
				
				
				//progressbar
				$( "#progressbar" ).progressbar({
					value: 37,
					create: function( event, ui ) {
						$(this).addClass('progress progress-success progress-striped ')
							   .children(0).addClass('bar');
					}
				});
					
			});
		</script>
		<script type="text/javascript">
			jQuery(function($) {
	var colorbox_params = {
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:'<i class="icon-arrow-left"></i>',
		next:'<i class="icon-arrow-right"></i>',
		close:'&times;',
		current:'{current} of {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = 'auto';
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").append("<i class='icon-spinner orange'></i>");//let's add a custom loading icon

	/**$(window).on('resize.colorbox', function() {
		try {
			//this function has been changed in recent versions of colorbox, so it won't work
			$.fn.colorbox.load();//to redraw the current frame
		} catch(e){}
	});*/
})
		</script>
		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chosen-select").chosen(); 
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target);
					var which = parseInt($.trim(target.text()));
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 6,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 11,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop images here or click to choose',
					btn_change:null,
					no_icon:'icon-picture',
					droppable:true,
					thumbnail:'small'
					//,icon_remove:null//set null, to hide remove/reset button
					,before_change:function(files, dropped) {
								var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
					}
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				})
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('show', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '200px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>
		
	</body>
</html>
