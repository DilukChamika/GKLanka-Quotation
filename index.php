<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Quatation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="asset/css/animate.min.css">
	<link rel="stylesheet" href="asset/css/fontawesome-all.css">
	<link rel="stylesheet" href="asset/css/style.css">

	<link rel="stylesheet" type="text/css" href="asset/css/colors/switch.css">
	<!-- Color Alternatives -->
	<link href="asset/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
	<link href="asset/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
	<link href="asset/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
	<link href="asset/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">

	<style>
		input[type='number']{
    	width: 70%;
		height: 50px;
		} 
		.units{
			display:inline;
		}
		.setDEFbtn{
			border: solid 1px #bdbfbe;
			padding: 1px left right;
			cursor: pointer;
			width: 24%;
			text-align: center;
			box-shadow: 2px 2px lightblue;
		}
		#mdef, #mclear
		{
			display:inline;
		}
	</style>


</head>



<body>


	

	<div class="clearfix"></div>

	
	<div class="wrapper">
		<div class="steps-area steps-area-fixed">
			<div id="image-holder">
				<img src="asset/img/side-img5.png" alt="">
			</div>
			<div class="steps clearfix">
				<ul class="tablist multisteps-form__progress">
					<li class="multisteps-form__progress-btn js-active current">
						<span>1</span>
					</li>
					<li class="multisteps-form__progress-btn">
						<span>2</span>
					</li>
					<li class="multisteps-form__progress-btn">
						<span>3</span>
					</li>
					<li class="multisteps-form__progress-btn">
						<span>4</span>
					</li>
					<li class="multisteps-form__progress-btn last">
						<span>5</span>
					</li>
				</ul>
			</div>
		</div>

		<form class="multisteps-form__form" action="ongrid2.php" id="wizard" method="POST">
			

			<div class="form-area position-relative">
				<!-- div 1 -->
				<div class="multisteps-form__panel js-active" data-animation="slideHorz">
					<div class="wizard-forms">
						<div class="inner pb-100 clearfix">
							<div class="form-content pera-content">
								<div class="step-inner-content">
									<span class="step-no">Step 1</span>
									<div class="step-progress float-right">
										<span>Page 1 of 5 </span>
										<div class="step-progress-bar">
											<div class="progress">
												
											</div>
										</div>
									</div>
									<h2>Quotation Type</h2>
									<p>Please Select the Quotation Type</p>
									<div class="step-box">
										<div class="row">
											<div class="col-md-4">
												<label class="step-box-content bg-white text-center relative-position active">
													<span class="step-box-icon">
														<img src="asset/img/d12.jpg" alt="">
													</span>
													<span class="step-box-text">
														ON Grid
													</span>
													<span class="service-check-option">
														<span><input type="radio" name="Qtype" id="ongrid" value="ongrid" checked></span>
													</span>
												</label>
											</div>
											<div class="col-md-4">
												<label class="step-box-content bg-white text-center relative-position">
													<span class="step-box-icon">
														<img src="asset/img/d22.jpg" alt="">
													</span>
													<span class="step-box-text">
														OFF Grid
													</span>
													<span></span>
													<span class="service-check-option">
														<span><input id="condition1" type="radio" id="offgrid" name="Qtype" value="offgrid"></span>
													</span>
												</label>
											</div>
											<div class="col-md-4">
												<label class="step-box-content bg-white text-center relative-position">
													<span class="step-box-icon">
														<img src="asset/img/d32.png" alt="">
													</span>
													<span class="step-box-text"><br>
														Hybrid
													</span>
													<span class="service-check-option">
														<span><input type="radio" name="Qtype" id="hybrid" value="hybrid"></span>
													</span>
												</label>
											</div>
											
										</div>
									</div>


								</div>
							</div>
						</div>
						<!-- /.inner -->
						<div class="actions">
							<ul>
								<li class="disable" aria-disabled="true"><span class="js-btn-next" title="NEXT">Backward <i class="fa fa-arrow-right"></i></span></li>
								<li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
							</ul>
						</div>
					</div>
				</div>



				<!--////////////////////////////////////////////////////PAGE 2//////////////////////////////////////////////////////////////////////////////////////////////////////-->
				<!-- div 2 -->
				<div class="multisteps-form__panel" data-animation="slideHorz">
					<div class="wizard-forms">
						<div class="inner pb-100 clearfix">
							<div class="form-content pera-content">
								<div class="step-inner-content">
									<span class="step-no bottom-line">Step 2</span>
									<div class="step-progress float-right">
										<span>2 of 5 completed</span>
										<div class="step-progress-bar">
											<div class="progress">
												<div class="progress-bar">
													<div class="progress-bar" style="width:20%"></div>
												</div>
											</div>
										</div>
									</div>

									<h2>Enter Quotation Details</h2>
								
									<div class="form-inner-area">

										
										<div class="step-content-field">
											<h3>Quotation Date:</h3>
											<div class="date-picker date datepicker">
												<input type="text" name="date" class="form-control">
												<div class="input-group-append"></div>
											</div>

											<h3>Quotation ID:</h3>
											<input type="text" name="quatNo" class="form-control" minlength="2" value="GKS" placeholder="Quotation ID" >
											

										</div>

										<div><br><br>
										<h3>Enter Customer Details</h3>
										<input type="text" name="cname" class="form-control " placeholder="Customer Name " >
										<input type="email" name="cemail" class="form-control " placeholder="Email Address " >
										<input type="text" name="tel" class="form-control " placeholder="Phone No">
										<input type="text" name="address" class="form-control " placeholder="Address (Full)" >
										<input type="text" name="city" class="form-control " placeholder="Nearest City" >
										</div>

										<div class="budget-area">

											<h3 style="font-size: 25px; margin-bottom: 5px;">District</h3>
											
											<select name="district" id="selectdistrict">
												<option value=""></option>
												<option value="Ampara">Ampara</option>
												<option value="Anuradhapura">Anuradhapura</option>
												<option value="Badulla">Badulla</option>
												<option value="Batticaloa">Batticaloa</option>
												<option value="Colombo">Colombo</option>
												<option value="Galle">Galle</option>
												<option value="Gampaha">Gampaha</option>
												<option value="Hambantota">Hambantota</option>
												<option value="Jaffna">Jaffna</option>
												<option value="Kalutara">Kalutara</option>
												<option value="Kandy">Kandy</option>
												<option value="Kegalle">Kegalle</option>
												<option value="Kilinochchi">Kilinochchi</option>
												<option value="Kurunegala">Kurunegala</option>
												<option value="Mannar">Mannar</option>
												<option value="Matale">Matale</option>
												<option value="Matara">Matara</option>
												<option value="Moneragala">Moneragala</option>
												<option value="Mullaitivu">Mullaitivu</option>
												<option value="Nuwaraeliya">Nuwara Eliya</option>
												<option value="Polonnaruwa">Polonnaruwa</option>
												<option value="Puttalam">Puttalam</option>
												<option value="Ratnapura">Ratnapura</option>
												<option value="Trincomalee">Trincomalee</option>
												<option value="Vavuniya">Vavuniya</option>
												
											</select>
										</div>



									</div>

									
								</div>
							</div>
						</div>
						<!-- /.inner -->
						<div class="actions">
							<ul>
								<li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
								<li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- div 3 -->
				<!--//////////////////////////////////////////////////PAGE 3 //////////////////////////////////////////////////////////-->

				<div class="multisteps-form__panel" data-animation="slideHorz">
					<div class="wizard-forms">
						<div class="inner pb-100 clearfix">
							<div class="form-content pera-content">
								<div class="step-inner-content">
									<span class="step-no bottom-line">Step 3</span>
									<div class="step-progress float-right">
										<span>3 of 5 completed</span>
										<div class="step-progress-bar">
											<div class="progress">
												<div class="progress-bar" style="width:40%"></div>
											</div>
										</div>
									</div>
									<h2>System Information</h2><br><br>


									<div class="language-select">
										<h3>System Capacity</h3>
										<input type="number" id="systemCap" name="sysCap"><h3 class="units"> kW</h3> 
									</div>
									<br>
									<div class="language-select">
										<h3>Panel Capacity</h3>
										<input type="number" id="panelCapacity" name="panelPower" value="500"><h3 class="units"> W</h3> 
									</div>

									<br>
									<div class="form-inner-area">
										<h3>Panel Count</h3>
										<input type="number" id="panelCount"  class="form-control "  name="panelcount" >
										<div class="setDEFbtn" onClick="cal();">Calculate</div>
										<br>
									</div>
									<script>
										function cal(){
										var systemCapa,panelCapa,panelCount;
										systemCapa = (document.getElementById("systemCap").value)*1000;
										panelCapa = document.getElementById("panelCapacity").value;
										panelCount = systemCapa/panelCapa;
										//panelCount= parseInt(panelCount);
										document.getElementById("panelCount").value=panelCount;
										}
									</script>

									<div class="services-select-option">
										<hr>

										<h3>Inverter Brands</h3>

										<ul>
											<li class="bg-white active"><label>Solis / Solax / Fox <input type="radio" name="inverterBrands" value="Solis,Solax,Fox" checked></label></li>
											<li class="bg-white"><label>ABB / SMA<input type="radio" name="inverterBrands" value="ABB/SMA"></label></li>
											<li class="bg-white "><label>Other<input type="radio" id="condition2" name="inverterBrands" value="otherinverters" ></label></li>
									
										</ul>
									</div>

									<div class="conditional" data-condition="#condition2 && inverterBrands == 'otherinverters'">
										<div class="form-inner-area">
											<div class="comment-box">
												<label> <h4>Other Inverter Brands</h4>Seperate from Comma(,)</label><br>
												<textarea name="otherInverterBrands"></textarea>
											</div>
										</div>
									</div>

	

									<br><br>


									<div class="services-select-option2">

										<h3>Panel Brands</h3>

										<ul>

											<li class="bg-white active"><label>JA Solar / Trinasolar / Jinko<input type="radio" name="PanelBrands" value="JA Solar,Trinasolar,Jinko" checked></label></li>
											<li class="bg-white "><label>Other<input type="radio" id="condition3" name="PanelBrands" value="otherPanels" ></label></li>
									
										</ul>
									</div>
									<div class="conditional" data-condition="#condition3 && PanelBrands == 'otherPanels'">
										<div class="form-inner-area">
											<div class="comment-box">
												<label> <h4>Other Panel Brands</h4>Seperate from Comma(,)</label><br>
												<textarea name="OtherPanelBrands"></textarea>
											</div>
										</div>
									</div>

									

			

								</div>
							</div>
						</div>
						<!-- ./inner -->
						<div class="actions">
							<ul>
								<li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
								<li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- div 4 -->
				<!--//////////////////////////////////////////////////////////////////PAGE 4 //////////////////////////////////////////////////////////////-->
				<div class="multisteps-form__panel" data-animation="slideHorz">
					<div class="wizard-forms">
						<div class="inner pb-100 clearfix">
							<div class="form-content pera-content">
								<div class="step-inner-content">
									<span class="step-no bottom-line">Step 4</span>
									<div class="step-progress float-right">
										<span>4 of 5 completed</span>
										<div class="step-progress-bar">
											<div class="progress">
												<div class="progress-bar" style="width:70%"></div>
											</div>
										</div>
									</div>

									<div class="step-content-area">

									<script>
										function mountingDet(){
											document.getElementById("mountingPara").value="Mounting, DC MCB, Isolator, SPD CEB/LECO Clearing Chargers & metering Connection, Labor charges, Steel Structure (If the AC,DC cable length (Solar Panel to Inverter) is more than 30m, the cost for the increased cable length will have to be charged additional)";
										}
									

										function phase(){

											if((document.getElementById("phaseSel").value)=="SinglePhase"){
												if((document.getElementById("systemCap").value)>6){
													document.getElementById("elecAcc").value="No default values!";
												}else if((document.getElementById("systemCap").value)<=6){
													document.getElementById("elecAcc").value="4pole 32A Isolator,4pole AC SPD,DC MCB 2pole,DC SPD 2pole,MC4 Connectors,Earth rod,ABC box,3 Phase bus bar box,IP 65 box,10mm2 4C Cu/PVC/PVC cable,4mm2 TVU Cable Black,4mm2 TVU Cable,6mm2 Earth Cable";  
												}
											}
											if((document.getElementById("phaseSel").value)=="ThreePhase"){
												if((document.getElementById("systemCap").value)>45){
													document.getElementById("elecAcc").value="No default values!";
												}else if((document.getElementById("systemCap").value)>20){
													document.getElementById("elecAcc").value="DC 2pole 20A MCB,DC 2pole SPD,DC SPD 4pole,AC MCB 63A,AC Isolator 63A,DC cable 4mm brown,63A 4pole Busbar box,DC Cable 4mm blue,MC4 Connectors,12way ABC IP box,8way ABC IP Box,4way ABC Lockable IP box,16mm cable meter 25x4,16mm Earth wire,PVC pipe & Casing & Earth rod";  
												}else if((document.getElementById("systemCap").value)>6){
													document.getElementById("elecAcc").value="4pole 32A Isolator,4pole AC SPD,DC MCB 2pole,DC SPD 2pole,MC4 Connectors,Earth rod,ABC box,3 Phase bus bar box,IP 65 box,10mm2 4C Cu/PVC/PVC cable,4mm2 TVU Cable Black,4mm2 TVU Cable,6mm2 Earth Cable";
												}else{
													document.getElementById("elecAcc").value="No default values!";
												}
											}		
										}

										function stru(){
												if((document.getElementById("structure").value)=="Aluminum"){
													document.getElementById("structureBOX").value="Alu s58 solar railing 14’,L bracket,Asbestoses roof base,L clamps,T clamps,Connector clamps";
												}else if ((document.getElementById("structure").value)=="Steel"){
													document.getElementById("structureBOX").value="4\"×2\"×2mm GI Box bar,2\"×2\"×1.6mm GI Box bar,1.5\"×1.5\"×1.6mm GI Box bar,2\"×1\"×1.6mm GI Box bar,3\"×1.5\"×1.6mm GI Box bar,1.5\"×1.5\"×4mm L Angel,2\"×1/4\" Flat Iron,Welding rod 12 pket,Cutting wheel 14\",6\"×4\"×8mm Iron plate,Paint,Nut & bolt,Thread bar,Silicon and other";
										}}


									</script>




										<div class="comment-box">
											<h3>Installation Details</h3>
											<textarea id="mountingPara"  name="mountingPara" ></textarea>
											<div id="mdef" class="setDEFbtn" onClick="mountingDet();">Set Default </div> &emsp;
											<div id="mclear" class="setDEFbtn"  onclick="document.getElementById('mountingPara').value = ''">Clear</div>
										</div>
	
										
	
										<div class="budget-area">
											<br><br><hr>
											<h3>Phase</h3>
											<select name="phase" id="phaseSel">
												<option value="SinglePhase">Single Phase</option>
												<option value="ThreePhase">Three Phase</option>
												
											</select>
										</div>
	
										<br><br>
	
										<h3>Electronic & Electrical Accessories</h3>
	
										<div class="comment-box" >
											<label> Seperate from Comma(,)</label><br>
											<textarea name="elecAcc" id="elecAcc" ></textarea>
											<div class="setDEFbtn" onClick="phase();">Set Default </div>
										</div>
	
										
	
										<div class="budget-area">
											<br><br><hr>
											<h3>Structure</h3>
											<select name="structure" id="structure">
											
												<option value="Aluminum">Aluminum</option>
												<option value="Steel">Steel</option>
												
											</select>
										</div>

										<div class="comment-box">
											<label> Seperate from Comma(,)</label><br>
											<textarea name="structureBOX" id="structureBOX" ></textarea>
											<div class="setDEFbtn" onClick="stru();">Set Default </div>
										</div>

									</div>

								</div>
							</div>
						</div>
						<!-- /.inner -->
						<div class="actions">
							<ul>
								<li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
								<li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- div 5 -->
				<!--//////////////////////////////////////////////////////////////////////PAGE 5//////////////////////////////////////////////////-->
				<div class="multisteps-form__panel" data-animation="slideHorz">
					<div class="wizard-forms">
						<div class="inner pb-100 clearfix">
							<div class="form-content pera-content">
								<div class="step-inner-content">
									<span class="step-no bottom-line">Step 5</span>
									<div class="step-progress float-right">
										<span>5 of 5 completed</span>
										<div class="step-progress-bar">
											<div class="progress">
												<div class="progress-bar" style="width:100%"></div>
											</div>
										</div>
									</div>

									<h2>Financial Details</h2>
									<div class="step-content-area">
										
										<div class="budget-area">
											<h3>Electricity Billing Category</h3>
											<select name="billingCategory" id="billcategory">
												<option value="domestic">Domestic</option>
												<option value="religious">Religious & Charity</option>
												
											</select>
										</div>

										<div class="budget-area"  >
											<h3>Scheme</h3>
											<select name="scheme" id="scheme">
												<option value="netAccounting" id="condition4">Net Accounting</option>
												<option value="netMetering" id="condition4">Net Metering</option>
												<option value="netPlus">Net Plus</option>
												
											</select>
										</div>
										

									

										<div class="language-select" id="usage" >
											

											<div class="conditional" data-condition="#condition4 && (scheme == 'netMetering' || scheme == 'netAccounting')">
											<br><br><hr>
												<h3>Monthly Average Electricity Usage</h3><br>
												<input type="number" id="powerUsage" name="powerUsage" value="0"> kWh(Units)<br><br>

												<h3>Monthly Average Electricity Bill Value</h3><br>
												<input type="number" id="elecBill" name="elecBill"> LKR <br><br>
												<div class="setDEFbtn" onClick="BillCal();">Calculate</div>
												<br>
											</div>
											<script>
												function BillCal(){
												var category,unit,fixed,energyChar,billamount;
												category = (document.getElementById("billcategory").value);
												unit = (document.getElementById("powerUsage").value);
												if(category == "domestic"){
													if(unit>180){
														fixed=1500;
														block= unit-180;
														energyChar=(block*75)+5940;
													}else if(unit>90){
														fixed=960;
														block= unit-90;
														energyChar=(block*50)+1440;
													}else if(unit>60){
														fixed=360;
														block= unit-60;
														energyChar=(block*16)+960;
													}else if(unit>30){
														fixed=240;
														block= unit-30;
														energyChar=(block*10)+240;
													}else if(unit>0){
														fixed=120;
														block= unit-0;
														energyChar=(block*8);
													}
												}else if(category=="religious"){
													if(unit>180){
														fixed=1500;
														block= unit-180;
														energyChar=(block*65)+3540;
													}else if(unit>120){
														fixed=450;
														block= unit-120;
														energyChar=(block*30)+1740;
													}else if(unit>90){
														fixed=120;
														block= unit-90;
														energyChar=(block*20)+1140;
													}else if(unit>30){
														fixed=120;
														block= unit-30;
														energyChar=(block*15)+240;
													}else if(unit>0){
														fixed=90;
														block= unit-0;
														energyChar=(block*8);
													}
												}

												billamount=fixed+energyChar;

												document.getElementById("elecBill").value=billamount;
												}
											</script>




											
										</div>
										


										<div class="language-select" id="amount" >
										<br><br><br><hr>
											

											<h3>System Amount Value:</h3><br>
											<input type="number" id="systemValue" name="Price"> LKR
											<br><br>

											<h3>Discount:</h3><br>
											<input type="number" id="discount" name="discount" value="0.00"> LKR
											<br>

										</div>

										


		
									</div>
									




								</div>
							</div>
						</div>
						<!-- /.inner -->
						<div class="actions">
							<ul>
								<li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK </span></li>
								<li><button type="submit" title="NEXT">SUBMIT <i class="fa fa-arrow-right"></i></button></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<script src="asset/js/jquery-3.3.1.min.js"></script>
	<script src="asset/js/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/conditionize.flexible.jquery.min.js"></script>
	<script src="asset/js/main.js"></script>
	<script src="asset/js/switch.js"></script>
	<script>
		$("#files").change(function() {
			filename = this.files[0].name
			// console.log(filename);
		});

		function UploadFile() {
			var reader = new FileReader();
			var file = document.getElementById('attach').files[0];
			reader.onload = function() {
				document.getElementById('fileContent').value = reader.result;
				document.getElementById('filename').value = file.name;
				document.getElementById('wizard').submit();
			}
			reader.readAsDataURL(file);
		}

		$(document).ready(function() {
			$('.conditional').conditionize();
		});
	</script>
</body>

</html>