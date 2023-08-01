<?php

require_once __DIR__ . '/vendor/autoload.php';
/*
$cname = "";
$address = "";
$city = "";
$tel = "";
$cEmail = "";
$SystemCap = 0;
$Price = 0;
$priceDiscount = 0;
$panalCount = 0;
$panelPWR = 0;
$inverterLine = "";
$panelLine ="";
$pvmod ="";
$invtr="";
$inverterB = "";
$otherInverterBrands = "";
$panelB = "";
$otherPanelBrands = "";
*/


$qtype = $_POST['Qtype'];
$date = $_POST['date'];
$quatNo = $_POST['quatNo'];
$cname = $_POST['cname'];
$address = $_POST['address'];
$city = $_POST['city'];
$tel = $_POST['tel'];
$district = $_POST['district'];
$cEmail = $_POST['cemail'];
$SystemCap = $_POST['sysCap'];
$panelPWR = $_POST['panelPower'];
$panalCount = $_POST['panelcount'];
$inverterB= $_POST['inverterBrands'];
$otherInverterBrands = $_POST['otherInverterBrands'];
$panelB = $_POST['PanelBrands'];
$otherPanelBrands = $_POST['OtherPanelBrands'];
$MountingPara = $_POST['mountingPara'];
$phase = $_POST['phase'];
$elecAccesories = $_POST['elecAcc'];
$structure = $_POST['structure'];
$structureAcce = $_POST['structureBOX'];
$billingCategory = $_POST['billingCategory'];
$scheme = $_POST['scheme'];
$powerUsage = $_POST['powerUsage'];
$elecBill = $_POST['elecBill'];
$Price = $_POST['Price'];
$priceDiscount = $_POST['discount'];



if($qtype == "ongrid"){


if($inverterB=="otherinverters"){
	$inverterB = $otherInverterBrands;
}
if($panelB=="otherPanels"){
	$panelB = $otherPanelBrands;
}


$inverterBrands = preg_split ("/\,/", $inverterB); 
$panelBrands = preg_split ("/\,/", $panelB); 
$elecAcce = preg_split ("/\,/", $elecAccesories); 
$structureDetails = preg_split("/\,/", $structureAcce);



/////////////////////////////////////////////////////////////////// PAGE 01 CAL \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\


if($priceDiscount>0){
	$lastPrice= $Price-$priceDiscount;
	$totalPrice= "LKR ".$Price ."<br><br>Discount<br>LKR ".$priceDiscount ."<br><br><b>Total Amount</b><br>LKR ".$lastPrice .".00";
}elseif($priceDiscount==0 || $priceDiscount== NULL ){
	$lastPrice= $Price;
	$totalPrice= "<br> LKR ".$Price ;
}

foreach($inverterBrands as $line1){
  	$inverterLine .= " " .$line1 .","; 
}
foreach($panelBrands as $line9){
  	$panelLine .= " " .$line9 .","; 
}

/////////////////////////////////////////////////////////////////// PAGE 02 CAL \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

if($scheme == "netAccounting" ){
//CALCULATIONS FOR ROW 1
$deg1 = 0.99;
$C1 = number_format(($SystemCap*$deg1*1440),1);
$D1 = number_format(($powerUsage*12),1);
$E1 = number_format((($SystemCap*$deg1*1440)-($powerUsage*12)),1);
$F1 = number_format(($elecBill*12),2);
$H1RAW = ((($SystemCap*$deg1*1440)-($powerUsage*12))*37);
$H1 = number_format($H1RAW,2);
$I1RAW = (((($SystemCap*$deg1*1440)-($powerUsage*12))*37)+($elecBill*12));
$I1 = number_format($I1RAW,2);
$J1RAW = (-($lastPrice)+(((($SystemCap*$deg1*1440)-($powerUsage*12))*37)+($elecBill*12)));
$J1 = number_format($J1RAW,2);

//CALCULATIONS FOR ROW 2
$deg2 = 0.975;
$C2 = number_format(($SystemCap*$deg2*1440),1);
$D2 = number_format(($powerUsage*12),1);
$E2 = number_format((($SystemCap*$deg2*1440)-($powerUsage*12)),1);
$F2 = number_format(($elecBill*12),2);
$H2RAW = ((($SystemCap*$deg2*1440)-($powerUsage*12))*37);
$H2 = number_format($H2RAW,2);
$I2RAW = (((($SystemCap*$deg2*1440)-($powerUsage*12))*37)+($elecBill*12));
$I2 = number_format($I2RAW,2);
$J2RAW = ($J1RAW+(((($SystemCap*$deg2*1440)-($powerUsage*12))*37)+($elecBill*12)));
$J2 = number_format($J2RAW,2);

//CALCULATIONS FOR ROW 3
$deg3 = 0.96;
$C3 = number_format(($SystemCap*$deg3*1440),1);
$D3 = number_format(($powerUsage*12),1);
$E3 = number_format((($SystemCap*$deg3*1440)-($powerUsage*12)),1);
$F3 = number_format(($elecBill*12),2);
$H3RAW = ((($SystemCap*$deg3*1440)-($powerUsage*12))*37);
$H3 = number_format($H3RAW,2);
$I3RAW = (((($SystemCap*$deg3*1440)-($powerUsage*12))*37)+($elecBill*12));
$I3 = number_format($I3RAW,2);
$J3RAW = ($J2RAW+(((($SystemCap*$deg3*1440)-($powerUsage*12))*37)+($elecBill*12)));
$J3 = number_format($J3RAW,2);

//CALCULATIONS FOR ROW 4
$deg4 = 0.945;
$C4 = number_format(($SystemCap*$deg4*1440),1);
$D4 = number_format(($powerUsage*12),1);
$E4 = number_format((($SystemCap*$deg4*1440)-($powerUsage*12)),1);
$F4 = number_format(($elecBill*12),2);
$H4RAW = ((($SystemCap*$deg4*1440)-($powerUsage*12))*37);
$H4 = number_format($H4RAW,2);
$I4RAW = (((($SystemCap*$deg4*1440)-($powerUsage*12))*37)+($elecBill*12));
$I4 = number_format($I4RAW,2);
$J4RAW = ($J3RAW+(((($SystemCap*$deg4*1440)-($powerUsage*12))*37)+($elecBill*12)));
$J4 = number_format($J4RAW,2);

//CALCULATIONS FOR ROW 5
$deg5 = 0.93;
$C5 = number_format(($SystemCap*$deg5*1440),1);
$D5 = number_format(($powerUsage*12),1);
$E5 = number_format((($SystemCap*$deg5*1440)-($powerUsage*12)),1);
$F5 = number_format(($elecBill*12),2);
$H5RAW = ((($SystemCap*$deg5*1440)-($powerUsage*12))*37);
$H5 = number_format($H5RAW,2);
$I5RAW = (((($SystemCap*$deg5*1440)-($powerUsage*12))*37)+($elecBill*12));
$I5 = number_format($I5RAW,2);
$J5RAW = ($J4RAW+(((($SystemCap*$deg5*1440)-($powerUsage*12))*37)+($elecBill*12)));
$J5 = number_format($J5RAW,2);

//CALCULATIONS FOR ROW 6
$deg6 = 0.915;
$C6 = number_format(($SystemCap*$deg6*1440),1);
$D6 = number_format(($powerUsage*12),1);
$E6 = number_format((($SystemCap*$deg6*1440)-($powerUsage*12)),1);
$F6 = number_format(($elecBill*12*1.25),2);
$H6RAW = ((($SystemCap*$deg6*1440)-($powerUsage*12))*37);
$H6 = number_format($H6RAW,2);
$I6RAW = (((($SystemCap*$deg6*1440)-($powerUsage*12))*37)+($elecBill*12*1.25));
$I6 = number_format($I6RAW,2);
$J6RAW = ($J5RAW+(((($SystemCap*$deg6*1440)-($powerUsage*12))*37)+($elecBill*12*1.25)));
$J6 = number_format($J6RAW,2);

//CALCULATIONS FOR ROW 7
$deg7 = 0.90;
$C7 = number_format(($SystemCap*$deg7*1440),1);
$D7 = number_format(($powerUsage*12),1);
$E7 = number_format((($SystemCap*$deg7*1440)-($powerUsage*12)),1);
$F7 = number_format(($elecBill*12*1.25),2);
$H7RAW = ((($SystemCap*$deg7*1440)-($powerUsage*12))*37);
$H7 = number_format($H7RAW,2);
$I7RAW = (((($SystemCap*$deg7*1440)-($powerUsage*12))*37)+($elecBill*12*1.25));
$I7 = number_format($I7RAW,2);
$J7RAW = ($J6RAW+(((($SystemCap*$deg7*1440)-($powerUsage*12))*37)+($elecBill*12*1.25)));
$J7 = number_format($J7RAW,2);

//CALCULATIONS FOR ROW 8
$deg8 = 0.885;
$C8 = number_format(($SystemCap*$deg8*1440),1);
$D8 = number_format(($powerUsage*12),1);
$E8 = number_format((($SystemCap*$deg8*1440)-($powerUsage*12)),1);
$F8 = number_format(($elecBill*12*1.25),2);
$H8RAW = ((($SystemCap*$deg8*1440)-($powerUsage*12))*37);
$H8 = number_format($H8RAW,2);
$I8RAW = (((($SystemCap*$deg8*1440)-($powerUsage*12))*37)+($elecBill*12*1.25));
$I8 = number_format($I8RAW,2);
$J8RAW = ($J7RAW+(((($SystemCap*$deg8*1440)-($powerUsage*12))*37)+($elecBill*12*1.25)));
$J8 = number_format($J8RAW,2);

//CALCULATIONS FOR ROW 9
$deg9 = 0.87;
$C9 = number_format(($SystemCap*$deg9*1440),1);
$D9 = number_format(($powerUsage*12),1);
$E9 = number_format((($SystemCap*$deg9*1440)-($powerUsage*12)),1);
$F9 = number_format(($elecBill*12*1.25),2);
$H9RAW = ((($SystemCap*$deg9*1440)-($powerUsage*12))*37);
$H9 = number_format($H9RAW,2);
$I9RAW = (((($SystemCap*$deg9*1440)-($powerUsage*12))*37)+($elecBill*12*1.25));
$I9 = number_format($I9RAW,2);
$J9RAW = ($J8RAW+(((($SystemCap*$deg9*1440)-($powerUsage*12))*37)+($elecBill*12*1.25)));
$J9 = number_format($J9RAW,2);

//CALCULATIONS FOR ROW 10
$deg10 = 0.855;
$C10 = number_format(($SystemCap*$deg10*1440),1);
$D10 = number_format(($powerUsage*12),1);
$E10 = number_format((($SystemCap*$deg10*1440)-($powerUsage*12)),1);
$F10 = number_format(($elecBill*12*1.25),2);
$H10RAW = ((($SystemCap*$deg10*1440)-($powerUsage*12))*37);
$H10 = number_format($H10RAW,2);
$I10RAW = (((($SystemCap*$deg10*1440)-($powerUsage*12))*37)+($elecBill*12*1.25));
$I10 = number_format($I10RAW,2);
$J10RAW = ($J9RAW+(((($SystemCap*$deg10*1440)-($powerUsage*12))*37)+($elecBill*12*1.25)));
$J10 = number_format($J10RAW,2);

//CALCULATIONS FOR ROW 11
$deg11 = 0.84;
$C11 = number_format(($SystemCap*$deg11*1440),1);
$D11 = number_format(($powerUsage*12),1);
$E11 = number_format((($SystemCap*$deg11*1440)-($powerUsage*12)),1);
$F11 = number_format(($elecBill*12*1.5625),2);
$H11RAW = ((($SystemCap*$deg11*1440)-($powerUsage*12))*37);
$H11 = number_format($H11RAW,2);
$I11RAW = (((($SystemCap*$deg11*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625));
$I11 = number_format($I11RAW,2);
$J11RAW = ($J10RAW+(((($SystemCap*$deg11*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625)));
$J11 = number_format($J11RAW,2);

//CALCULATIONS FOR ROW 12
$deg12 = 0.825;
$C12 = number_format(($SystemCap*$deg12*1440),1);
$D12 = number_format(($powerUsage*12),1);
$E12 = number_format((($SystemCap*$deg12*1440)-($powerUsage*12)),1);
$F12 = number_format(($elecBill*12*1.5625),2);
$H12RAW = ((($SystemCap*$deg12*1440)-($powerUsage*12))*37);
$H12 = number_format($H12RAW,2);
$I12RAW = (((($SystemCap*$deg12*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625));
$I12 = number_format($I12RAW,2);
$J12RAW = ($J11RAW+(((($SystemCap*$deg12*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625)));
$J12 = number_format($J12RAW,2);

//CALCULATIONS FOR ROW 13
$deg13 = 0.81;
$C13 = number_format(($SystemCap*$deg13*1440),1);
$D13 = number_format(($powerUsage*12),1);
$E13 = number_format((($SystemCap*$deg13*1440)-($powerUsage*12)),1);
$F13 = number_format(($elecBill*12*1.5625),2);
$H13RAW = ((($SystemCap*$deg13*1440)-($powerUsage*12))*37);
$H13 = number_format($H13RAW,2);
$I13RAW = (((($SystemCap*$deg13*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625));
$I13 = number_format($I13RAW,2);
$J13RAW = ($J12RAW+(((($SystemCap*$deg13*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625)));
$J13 = number_format($J13RAW,2);

//CALCULATIONS FOR ROW 14
$deg14 = 0.795;
$C14 = number_format(($SystemCap*$deg14*1440),1);
$D14 = number_format(($powerUsage*12),1);
$E14 = number_format((($SystemCap*$deg14*1440)-($powerUsage*12)),1);
$F14 = number_format(($elecBill*12*1.5625),2);
$H14RAW = ((($SystemCap*$deg14*1440)-($powerUsage*12))*37);
$H14 = number_format($H14RAW,2);
$I14RAW = (((($SystemCap*$deg14*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625));
$I14 = number_format($I14RAW,2);
$J14RAW = ($J13RAW+(((($SystemCap*$deg14*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625)));
$J14 = number_format($J14RAW,2);

//CALCULATIONS FOR ROW 15
$deg15 = 0.78;
$C15 = number_format(($SystemCap*$deg15*1440),1);
$D15 = number_format(($powerUsage*12),1);
$E15 = number_format((($SystemCap*$deg15*1440)-($powerUsage*12)),1);
$F15 = number_format(($elecBill*12*1.5625),2);
$H15RAW = ((($SystemCap*$deg15*1440)-($powerUsage*12))*37);
$H15 = number_format($H15RAW,2);
$I15RAW = (((($SystemCap*$deg15*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625));
$I15 = number_format($I15RAW,2);
$J15RAW = ($J14RAW+(((($SystemCap*$deg15*1440)-($powerUsage*12))*37)+($elecBill*12*1.5625)));
$J15 = number_format($J15RAW,2);

//CALCULATIONS FOR ROW 16
$deg16 = 0.765;
$C16 = number_format(($SystemCap*$deg16*1440),1);
$D16 = number_format(($powerUsage*12),1);
$E16 = number_format((($SystemCap*$deg16*1440)-($powerUsage*12)),1);
$F16 = number_format(($elecBill*12*1.953125),2);
$H16RAW = ((($SystemCap*$deg16*1440)-($powerUsage*12))*37);
$H16 = number_format($H16RAW,2);
$I16RAW = (((($SystemCap*$deg16*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125));
$I16 = number_format($I16RAW,2);
$J16RAW = ($J15RAW+(((($SystemCap*$deg16*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125)));
$J16 = number_format($J16RAW,2);

//CALCULATIONS FOR ROW 17
$deg17 = 0.75;
$C17 = number_format(($SystemCap*$deg17*1440),1);
$D17 = number_format(($powerUsage*12),1);
$E17 = number_format((($SystemCap*$deg17*1440)-($powerUsage*12)),1);
$F17 = number_format(($elecBill*12*1.953125),2);
$H17RAW = ((($SystemCap*$deg17*1440)-($powerUsage*12))*37);
$H17 = number_format($H17RAW,2);
$I17RAW = (((($SystemCap*$deg17*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125));
$I17 = number_format($I17RAW,2);
$J17RAW = ($J16RAW+(((($SystemCap*$deg17*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125)));
$J17 = number_format($J17RAW,2);

//CALCULATIONS FOR ROW 18
$deg18 = 0.735;
$C18 = number_format(($SystemCap*$deg18*1440),1);
$D18 = number_format(($powerUsage*12),1);
$E18 = number_format((($SystemCap*$deg18*1440)-($powerUsage*12)),1);
$F18 = number_format(($elecBill*12*1.953125),2);
$H18RAW = ((($SystemCap*$deg18*1440)-($powerUsage*12))*37);
$H18 = number_format($H18RAW,2);
$I18RAW = (((($SystemCap*$deg18*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125));
$I18 = number_format($I18RAW,2);
$J18RAW = ($J17RAW+(((($SystemCap*$deg18*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125)));
$J18 = number_format($J18RAW,2);

//CALCULATIONS FOR ROW 19
$deg19 = 0.72;
$C19 = number_format(($SystemCap*$deg19*1440),1);
$D19 = number_format(($powerUsage*12),1);
$E19 = number_format((($SystemCap*$deg19*1440)-($powerUsage*12)),1);
$F19 = number_format(($elecBill*12*1.953125),2);
$H19RAW = ((($SystemCap*$deg19*1440)-($powerUsage*12))*37);
$H19 = number_format($H19RAW,2);
$I19RAW = (((($SystemCap*$deg19*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125));
$I19 = number_format($I19RAW,2);
$J19RAW = ($J18RAW+(((($SystemCap*$deg19*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125)));
$J19 = number_format($J19RAW,2);

//CALCULATIONS FOR ROW 20
$deg20 = 0.705;
$C20 = number_format(($SystemCap*$deg20*1440),1);
$D20 = number_format(($powerUsage*12),1);
$E20 = number_format((($SystemCap*$deg20*1440)-($powerUsage*12)),1);
$F20 = number_format(($elecBill*12*1.953125),2);
$H20RAW = ((($SystemCap*$deg20*1440)-($powerUsage*12))*37);
$H20 = number_format($H20RAW,2);
$I20RAW = (((($SystemCap*$deg20*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125));
$I20 = number_format($I20RAW,2);
$J20RAW = ($J19RAW+(((($SystemCap*$deg20*1440)-($powerUsage*12))*37)+($elecBill*12*1.953125)));
$J20 = number_format($J20RAW,2);

$TotGenUnit = (($SystemCap*$deg1*1440)+($SystemCap*$deg2*1440)+($SystemCap*$deg3*1440)+($SystemCap*$deg4*1440)+($SystemCap*$deg5*1440)+($SystemCap*$deg6*1440)+($SystemCap*$deg7*1440)+($SystemCap*$deg8*1440)+($SystemCap*$deg9*1440)+($SystemCap*$deg10*1440)+($SystemCap*$deg11*1440)+($SystemCap*$deg12*1440)+($SystemCap*$deg13*1440)+($SystemCap*$deg14*1440)+($SystemCap*$deg15*1440)+($SystemCap*$deg16*1440)+($SystemCap*$deg17*1440)+($SystemCap*$deg18*1440)+($SystemCap*$deg19*1440)+($SystemCap*$deg20*1440));
$TotUsage = ($powerUsage*240);
$TotBalance = ((($SystemCap*$deg1*1440)-($powerUsage*12))+ (($SystemCap*$deg2*1440)-($powerUsage*12))+ (($SystemCap*$deg3*1440)-($powerUsage*12))+ (($SystemCap*$deg4*1440)-($powerUsage*12))+ (($SystemCap*$deg5*1440)-($powerUsage*12))+ (($SystemCap*$deg6*1440)-($powerUsage*12))+ (($SystemCap*$deg7*1440)-($powerUsage*12))+ (($SystemCap*$deg8*1440)-($powerUsage*12))+ (($SystemCap*$deg9*1440)-($powerUsage*12))+ (($SystemCap*$deg10*1440)-($powerUsage*12))+ (($SystemCap*$deg11*1440)-($powerUsage*12))+ (($SystemCap*$deg12*1440)-($powerUsage*12))+ (($SystemCap*$deg13*1440)-($powerUsage*12))+ (($SystemCap*$deg14*1440)-($powerUsage*12))+ (($SystemCap*$deg15*1440)-($powerUsage*12))+ (($SystemCap*$deg16*1440)-($powerUsage*12))+ (($SystemCap*$deg17*1440)-($powerUsage*12))+ (($SystemCap*$deg18*1440)-($powerUsage*12))+ (($SystemCap*$deg19*1440)-($powerUsage*12))+ (($SystemCap*$deg20*1440)-($powerUsage*12)));
$TotElecBill = ((($elecBill*12)*5)+ (($elecBill*12*1.25)*5)+ (($elecBill*12*1.5625)*5)+ (($elecBill*12*1.953125)*5));
$TotReve = ($H1RAW + $H2RAW + $H3RAW + $H4RAW + $H5RAW + $H6RAW + $H7RAW + $H8RAW + $H9RAW + $H10RAW + $H11RAW + $H12RAW + $H13RAW + $H14RAW + $H15RAW + $H16RAW + $H17RAW + $H18RAW + $H19RAW + $H20RAW);
$TotProfit = ($I1RAW + $I2RAW + $I3RAW + $I4RAW + $I5RAW + $I6RAW + $I7RAW + $I8RAW + $I9RAW + $I10RAW + $I11RAW + $I12RAW + $I13RAW + $I14RAW + $I15RAW + $I16RAW + $I17RAW + $I18RAW + $I19RAW + $I20RAW);
$TotCumala = $J20;

($J1RAW < 0)?($bgcolJ1="#f0c141"):($bgcolJ1="#9df5a5");
($J2RAW < 0)?($bgcolJ2="#f0c141"):($bgcolJ2="#f5df9d");
($J3RAW < 0)?($bgcolJ3="#f0c141"):($bgcolJ3="#9df5a5");
($J4RAW < 0)?($bgcolJ4="#f0c141"):($bgcolJ4="#f5df9d");
($J5RAW < 0)?($bgcolJ5="#f0c141"):($bgcolJ5="#9df5a5");
($J6RAW < 0)?($bgcolJ6="#f0c141"):($bgcolJ6="#f5df9d");
($J7RAW < 0)?($bgcolJ7="#f0c141"):($bgcolJ7="#9df5a5");
($J8RAW < 0)?($bgcolJ8="#f0c141"):($bgcolJ8="#f5df9d");
($J9RAW < 0)?($bgcolJ9="#f0c141"):($bgcolJ9="#9df5a5");
($J10RAW < 0)?($bgcolJ10="#f0c141"):($bgcolJ10="#f5df9d");
($J11RAW < 0)?($bgcolJ11="#f0c141"):($bgcolJ11="#9df5a5");
($J12RAW < 0)?($bgcolJ12="#f0c141"):($bgcolJ12="#f5df9d");
($J13RAW < 0)?($bgcolJ13="#f0c141"):($bgcolJ13="#9df5a5");
($J14RAW < 0)?($bgcolJ14="#f0c141"):($bgcolJ14="#f5df9d");
($J15RAW < 0)?($bgcolJ15="#f0c141"):($bgcolJ15="#9df5a5");
($J16RAW < 0)?($bgcolJ16="#f0c141"):($bgcolJ16="#f5df9d");
($J17RAW < 0)?($bgcolJ17="#f0c141"):($bgcolJ17="#9df5a5");
($J18RAW < 0)?($bgcolJ18="#f0c141"):($bgcolJ18="#f5df9d");
($J19RAW < 0)?($bgcolJ19="#f0c141"):($bgcolJ19="#9df5a5");
($J20RAW < 0)?($bgcolJ20="#f0c141"):($bgcolJ20="#f5df9d");


}

/////////////////////////////////////////////////////////////////// PAGE 03 CAL \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

$price75 = $lastPrice*0.75;
$price20 = $lastPrice*0.20;
$price5 = $lastPrice*0.05;

/////////////////////////////////////////////////////////////////// PAGE 04 CAL \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

foreach($panelBrands as $val1){
	$pvmod .= " <li>" .$val1 ."</li>"; 
}
foreach($inverterBrands as $val2){
	$invtr .= " <li>" .$val2 ."</li>"; 
} 

foreach($elecAcce as $val3){
  $elec .= " <li>" .$val3 ."</li>"; 
} 

foreach($structureDetails as $val4){
  $structureParts .= " <li>" .$val4 ."</li>"; 
}



if($phase == "SinglePhase"){
  $phasetype = "Single Phase";
}else if($phase == "ThreePhase"){
  $phasetype = "Three Phase";
}



//////////////////////////////////////////////////////////////////////////////// Page Settings \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

$border = '
	<img src= "asset/border.jpg" id="pageborder">
';

$gklogo= '
	<img src = "asset/gklogo.jpg" height="110" >
';

$logoset = '
	<img src = "asset/logoset.jpg"  height="80px" > 
';

$warrentyIcon = '
	<img src = "asset/warranty.jpeg" width="45%">
';


$pageset1 = '
<style>

body{
	background : url(\'asset/border.jpg\') no-repeat 0 0;
	background-image-resize: 6;
}
table.titletab{
	padding-left :105px;
	text-align: center;
	font-size: 13px;
}
#table1{
	font-family: calibri;
	font-size: 13px;
}
#table2{
	font-family: calibri;
	font-size: 12px;
}
#netAccTable{
	font-family: calibri;
	font-size: 12px;
	text-align: center;
}
#netaccSUMtable{
	font-family: calibri;
	font-size: 13px;
}

.table2head{
	background-color: #009345;
	color: white;
	font-family: calibri;
	text-align: center;
	padding : 6px;
}
.RecoPlanTablehead{
	background-color: #ffa500;
	color: black;
	text-align: center;
	font-size: 14px;
}

#tnc{
	padding-left : 15px;
	text-align: justify;
	font-size: 10px;
}
#condi{
	font-family: calibri;
	font-size: 8px;
}
#wrnty{
	border-style: dashed;
	border-width: 2px;
	padding-left : 15px;
	padding-right :15px;
	padding-top : 15px;
	text-align: justify;
	font-size: 10px;
}
#page2CnA{
	border-style: dashed;
	border-width: 2px;
	padding-left : 15px;
	padding-right :15px;
	padding-top : 15px;
	text-align: justify;
}

#thirdpagediv{
	text-align: center;
}
#secpagediv{
	text-align: center;
}

#agreement{
	 background : url(\'asset/watermark.jpg\') no-repeat 0 0;
	 background-repeat: no-repeat;
	 background-attachment: fixed;
	 background-size: 100% 100%;
}
#usematerial{
	position : absolute;
	top : 200px;
	bottom : 100;
	left :50;
	right : 50;
	background : url(\'asset/watermark.jpg\') no-repeat 0 0;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 90%;
}

#warrantytable{
	font-family: calibri;
	font-size: 20px;
	margin-left:auto;
	margin-right:auto;
	width: 60%;
}
#logoset{
	text-align:center;
}
#sign{
	text-align: center;
	position: absolute;
	bottom:100px;
	font-size: 13px;
	padding-left : 3%;
	padding-right : -18%;
}
#footer{
	text-align: center;
	padding-left : 6%;
	font-size: 13px;
	position: absolute;
	bottom:44px;
}
div.absolute {
	font-size: 11px;
	position: absolute;
	bottom: 2%;
	right: 0px;
  }

</style>
';

$mpdf = new \Mpdf\Mpdf();

///////////////////////////////////////////////////////////////// FIRST PAGE ///////////////////////////////////////////////////////////////////////////////



$mpdf->AddPage('P');
$firstpage = $pageset1;
//$mpdf->setFooter('{PAGENO}');

$firstpage .= "<br> <table class='titletab'> <tr> <td> "  .$gklogo ." </td> <td> <h1> Quatation For On Grid<br> Solar Electricity System <br>" .$SystemCap  ."kW </h1> </td> </tr>  </table> <hr style='color:#009345; height:5px'>
";
$firstpage1 = " <table style='width:100%' id='table1'> <tr> <td> Date </td> <td> : </td> <td> " .$date ." </td> <td rowspan='8' valign='top' style='width:29%'> GK Lanka International (Pvt) Ltd <br> No: 15/1/1,Kandawatta Road, <br>  Pelawatta, Battaramulla, <br> Sri Lanka. <br> 011 4 392 425 / 0777 006 325 <br> info@gklanka.lk <br> www.gklanka.lk </td> </tr> <tr>  <td> Quatation No</td> <td> : </td> <td> <b>" .$quatNo ." </b></td> </tr> <tr> <td colspan='3'> <b><br> Valid Only For 7 (Seven) Days <br> </b>  </td> </tr> <tr> <td> Client Name </td> <td>: </td> <td> " .$cname ."</td> </tr> <tr> <td> Address </td> <td> :</td> <td> " .$address ." </td> </tr> <tr> <td> Tel </td> <td> :</td> <td> ".$tel ." </td></tr> <tr> <td> Email </td> <td> : </td> <td>".$cEmail ." </td>  </tr> </table>  
";

$firstpage2 = "<br> <table style='width:100%' id='table2'> <tr> <td class='table2head' colspan='4'  style='height:25px'><b> GK LANKA INTERNATIONAL PVT LTD </b></td> <td id='tnc' rowspan='11' style='width:20%'> <b> Payment Method </b> <ul> <br> <li> 75% of the total amount should be paid before installing at the system. </li> <br> <li>  20% of the rest of total amount should be paid during the installation. </li><br> <li>Remaining balance 5% will be taken soon after the connection is given by the electricity board.</li> </ul> <p id='condi'> <br> *Conditons Apply </p> <td> </tr> <tr> <td colspan='3' bgcolor='#ffa500' style='padding: left 10px;'> System Capacity </td> <td bgcolor='#ffa500' style='padding: left 10px;'> ". $SystemCap ."kW </td> </tr> <tr> <td colspan='3' bgcolor='#ffa500' style='padding: left 10px;'> AC Voltage </td> <td bgcolor='#ffa500' style='padding: left 10px;'> 230V </td> </tr> <tr> <td colspan='3' bgcolor='#ffa500' style='padding: left 10px;'> AC Frequency </td> <td bgcolor='#ffa500' style='padding: left 10px;'> 50Hz <br> </td> </tr> <tr> <td class='table2head' > Name </td> <td class='table2head' style='text-align:center'> Qty </td> <td class='table2head'> Brand(s) </td> <td class='table2head'> Amount </td> </tr> <tr> <td bgcolor='#ffa500' style='padding: left 10px;'> Inverter </td> <td bgcolor='#ffa500' style='text-align:center'> 01 </td> <td bgcolor='#ffa500'> ". $inverterLine ." :" .$SystemCap ."kW inverter </td> <td rowspan='4' bgcolor='#ffa500' style='text-align:center; font-size:11px'>" .$totalPrice ." </td> </tr> <tr> <td bgcolor='#ffa500' style='padding:left 10px'> Panels </td> <td bgcolor='#ffa500' style='text-align:center'> " .$panalCount ." </td> <td bgcolor='#ffa500'>" .$panelLine ." :".$panelPWR ."W </td> </tr> <tr> <td colspan='3' bgcolor='#ffa500' style='font-size:11px; padding:6px' >" .$MountingPara ."</td> </tr> <tr> <td colspan='3' bgcolor='#009345' color='white' style='text-align:center'> Expected Monthly Generation " .($SystemCap*110) ." kWh - ".($SystemCap*130). " kWh </td> </tr> </table> <br>
";

$firstpage3 = "<div id='wrnty'> <b> Warrenty </b> <br> <br> To make any warranty claim, the purchaser shall report the defect by email or registered post within two weeks of its discovery. The full warranty period for the solar power system is 02 years from the date of the purchaser taking possession of the system This warranty covers manufacturing defects and installation defects when installation has been performed by GK LANKA INTERNATIONAL (PVT) LTD (its contractors, employees and / or authorized agents), and under normal conditions of use. <br> <br> <b> Guarantee </b>  <br> <br>The electrical output of each photovoltaic module shall never be lower than; <br> <ul> <li> For the first 10 years form the date of taking possession of the product; 90% of the specified minimum power </li> <li>  Between 10 and 25 years after the date of taking possession of the product 80% of the specified minimum power. </li> </ul> </div> <br>
";

$firstpage4 = "<div id='logoset'>".$logoset ."</div> <br> <br>";

$firstpage5 = " <div id='footer'> If You Have any Question about This Quotation, <br>Please Contact [Mr.Gayan 0777 006 325] <br> <b> Thanking for your quotation request, we pleased to give below our quotation from the above<br> as per your requirements. </b> </div>
";

$firstpage5 .= "<div class='absolute'> Page {PAGENO} of {nb} </div>";


$mpdf->WriteHTML($firstpage);
$mpdf->WriteHTML($firstpage1);
$mpdf->WriteHTML($firstpage2);
$mpdf->WriteHTML($firstpage3);
$mpdf->WriteHTML($firstpage4);
$mpdf->WriteHTML($firstpage5);

//////////////////////////////////////////////////////////////////// SECOND PAGE FOR NET ACCOUNTING ////////////////////////////////////////////////////////////////////////////




if($scheme == "netAccounting"){



$mpdf->AddPage('L');
$mpdf->forcePortraitHeaders = true;

$secondpage = $pageset1;
$secondpage .= "<div id='secpagediv'>  " .$gklogo ." <h1 style='font-size:20px'>GK LANKA INTERNATIONAL (PVT) LTD </h1> No.15/1/1, Kandawatta Road, Pelawatta, Battaramulla, Sri Lanka. <br> info@gklanka.lk | www.gklanka.lk | 011 4 392 425 | 0777 006 325 <hr style='color:#009345; height:5px'> <br> <table style='width:100%'> <tr> <td bgcolor='#fce156' style='padding:12px; text-align:center'  > <h1 style='font-size:20px'> NET ACCOUNTING RECOVERY PLAN </h1> </td> </tr> </table>  </div> 
";
$secondpage1 = "<br> <table style='width:100%' id='netaccSUMtable'> <tr> <td colspan='2' class='table2head' style='height:25px' > <b> BASIC SYSTEM DETAILS </b> </td> <td rowspan='14' style='width:50%; padding:14px'> <div id='page2CnA'> CONDITIONS AND ASSUMPTIONS </div> </td> </tr> <tr> <td bgcolor='#ffa500' style='padding: left 10px;'> System Capacity </td> <td bgcolor='#ffa500' style='padding: left 10px; text-align:right'>" .$SystemCap ." kW</td> </tr> <tr> <td bgcolor='#60fc8a' style='padding: left 10px;'> Monthly Average Usage Units </td> <td bgcolor='#60fc8a' style='padding: left 10px; text-align:right'> " .$powerUsage ." kWh</td> </tr> <tr> <td bgcolor='#ffa500' style='padding: left 10px;'> Monthly Average Electricity Bill </td> <td bgcolor='#ffa500' style='padding: left 10px; text-align:right'>LKR " .number_format($elecBill,2)  ."</td> </tr> <tr> <td bgcolor='#60fc8a' style='padding: left 10px;'> System Price </td> <td bgcolor='#60fc8a' style='padding: left 10px; text-align:right'>LKR " . number_format($lastPrice,2) ."</td> </tr> <tr><td> <br> </td> </tr> <tr> <td colspan='2' class='table2head' style='height:25px' ><b> SUMMARIZED RECOVERY PLAN DETAILS</b> </td> </tr> <tr> <td bgcolor='#ffa500' style='padding: left 10px;'>Total Generated Units for 20 years </td> <td bgcolor='#ffa500' style='padding: left 10px; text-align:right'> ". number_format($TotGenUnit,1) ." kWh </td> </tr> <tr> <td bgcolor='#60fc8a' style='padding: left 10px;'>Total Elecricity Usage Units for 20 years </td> <td bgcolor='#60fc8a' style='padding: left 10px; text-align:right'> " .number_format($TotUsage,1) ." kWh </td> </tr> <tr> <td bgcolor='#ffa500' style='padding: left 10px;'>Total Balance Units For Grid (20 years)</td> <td bgcolor='#ffa500' style='padding: left 10px; text-align:right'> " .number_format($TotBalance,1) ." kWh</td> </tr> <tr> <td bgcolor='#60fc8a' style='padding: left 10px;'>Total Electricity Bill for 20 years </td> <td bgcolor='#60fc8a' style='padding: left 10px; text-align:right'> LKR ". number_format($TotElecBill,2) ."</td> </tr> <tr> <td bgcolor='#ffa500' style='padding: left 10px;'> Total Revenue For 20 Years</td> <td bgcolor='#ffa500' style='padding: left 10px; text-align:right'>LKR ". number_format($TotReve,2) ."</td> </tr> <tr> <td bgcolor='#60fc8a' style='padding: left 10px;'>Total Profit For 20 years </td> <td bgcolor='#60fc8a' style='padding: left 10px; text-align:right'> LKR ".number_format( $TotProfit,2) ."</td> </tr> <tr> <td bgcolor='#ffa500' style='padding: left 10px;'>Total Cumalative for 20 years </td> <td bgcolor='#ffa500' style='padding: left 10px; text-align:right'> LKR ". $TotCumala ." </td> </tr> </table>
";
$secondpage1 .= "<div class='absolute'> Page {PAGENO} of {nb} </div>";

$mpdf->WriteHTML($secondpage);
$mpdf->WriteHTML($secondpage1);



//////////////////////////////////////////////////////////////////// SECOND PAGE PART TWO ////////////////////////////////////////////////////////////////////////////


$mpdf->AddPage('L');
$mpdf->forcePortraitHeaders = true;

$secpagePART2 = $pageset1;
$secpagePART2 .= "<div id='secpagediv'>  " .$gklogo ." <hr style='color:#009345; height:5px'>  
";
$secpagePART2_1= "<table id='netAccTable'> <tr> <td class='RecoPlanTablehead'>Year </td> <td class='RecoPlanTablehead'> Degradation </td> <td class='RecoPlanTablehead'> Electricity Generated Units(kWh) per Year </td><td class='RecoPlanTablehead'>Electricity Usage Units(kWh) per Year</td> <td class='RecoPlanTablehead'> Balance Units per Grid </td><td class='RecoPlanTablehead'>Electricity Bill per Year</td><td class='RecoPlanTablehead'>Purchase Electricity Rate (LKR)</td> <td class='RecoPlanTablehead'> Total Revenue per Year</td><td class='RecoPlanTablehead'>Total Profit per Year (Revenue+Covered Electricity Bill)</td><td class='RecoPlanTablehead'>Cumulative</td></tr> <tr> <td colspan='9' style='text-align:right; padding:12px' bgcolor='#0ff8fc'>System Price</td> <td style='padding:12px' bgcolor='#0ff8fc'>LKR ".-($lastPrice) .".00</td></tr>  <tr style='background-color:#9df5a5'> <td>1</td> <td>99.0%</td> <td>". $C1 ." kWh</td> <td>" .$D1 ." kWh</td> <td>".$E1 ." kWh</td> <td>LKR ". $F1 ."</td> <td>LKR 37.00</td> <td>LKR ". $H1 ."</td> <td>LKR ". $I1 ."</td> <td  bgcolor='$bgcolJ1' >LKR ". $J1 ."</td> </tr>   <tr style='background-color:#f5df9d'> <td>2</td> <td>97.5%</td> <td>". $C2 ." kWh</td> <td>" .$D2 ." kWh</td> <td>".$E2 ." kWh</td> <td>LKR ". $F2 ."</td> <td>LKR 37.00</td> <td>LKR ". $H2 ."</td> <td>LKR ". $I2 ."</td> <td  bgcolor='$bgcolJ2' >LKR ". $J2 ."</td> </tr>      <tr style='background-color:#9df5a5'> <td>3</td> <td>96.0%</td> <td>". $C3 ." kWh</td> <td>" .$D3 ." kWh</td> <td>".$E3 ." kWh</td> <td>LKR ". $F3 ."</td> <td>LKR 37.00</td> <td>LKR ". $H3 ."</td> <td>LKR ". $I3 ."</td> <td  bgcolor='$bgcolJ3' >LKR ". $J3 ."</td> </tr>     <tr style='background-color:#f5df9d'> <td>4</td> <td>94.5%</td> <td>". $C4 ." kWh</td> <td>" .$D4 ." kWh</td> <td>".$E4 ." kWh</td> <td>LKR ". $F4 ."</td> <td>LKR 37.00</td> <td>LKR ". $H4 ."</td> <td>LKR ". $I4 ."</td> <td  bgcolor='$bgcolJ4' >LKR ". $J4 ."</td> </tr>      <tr style='background-color:#9df5a5'> <td>5</td> <td>93.0%</td> <td>". $C5 ." kWh</td> <td>" .$D5 ." kWh</td> <td>".$E5 ." kWh</td> <td>LKR ". $F5 ."</td> <td>LKR 37.00</td> <td>LKR ". $H5 ."</td> <td>LKR ". $I5 ."</td> <td  bgcolor='$bgcolJ5' >LKR ". $J5 ."</td> </tr>        <tr style='background-color:#f5df9d'> <td>6</td> <td>91.5%</td> <td>". $C6 ." kWh</td> <td>" .$D6 ." kWh</td> <td>".$E6 ." kWh</td> <td>LKR ". $F6 ."</td> <td>LKR 37.00</td> <td>LKR ". $H6 ."</td> <td>LKR ". $I6 ."</td> <td  bgcolor='$bgcolJ6' >LKR ". $J6 ."</td> </tr>      <tr style='background-color:#9df5a5'> <td>7</td> <td>90.0%</td> <td>". $C7 ." kWh</td> <td>" .$D7 ." kWh</td> <td>".$E7 ." kWh</td> <td>LKR ". $F7 ."</td> <td>LKR 37.00</td> <td>LKR ". $H7 ."</td> <td>LKR ". $I7 ."</td> <td  bgcolor='$bgcolJ7' >LKR ". $J7 ."</td> </tr>     <tr style='background-color:#f5df9d'> <td>8</td> <td>88.5%</td> <td>". $C8 ." kWh</td> <td>" .$D8 ." kWh</td> <td>".$E8 ." kWh</td> <td>LKR ". $F8 ."</td> <td>LKR 37.00</td> <td>LKR ". $H8 ."</td> <td>LKR ". $I8 ."</td> <td  bgcolor='$bgcolJ8' >LKR ". $J8 ."</td> </tr>     <tr style='background-color:#9df5a5'> <td>9</td> <td>87.0%</td> <td>". $C9 ." kWh</td> <td>" .$D9 ." kWh</td> <td>".$E9 ." kWh</td> <td>LKR ". $F9 ."</td> <td>LKR 37.00</td> <td>LKR ". $H9 ."</td> <td>LKR ". $I9 ."</td> <td  bgcolor='$bgcolJ9' >LKR ". $J9 ."</td> </tr>     <tr style='background-color:#f5df9d'> <td>10</td> <td>85.5%</td> <td>". $C10 ." kWh</td> <td>" .$D10 ." kWh</td> <td>".$E10 ." kWh</td> <td>LKR ". $F10 ."</td> <td>LKR 37.00</td> <td>LKR ". $H10 ."</td> <td>LKR ". $I10 ."</td> <td  bgcolor='$bgcolJ10' >LKR ". $J10 ."</td> </tr>    <tr style='background-color:#9df5a5'> <td>11</td> <td>84.0%</td> <td>". $C11 ." kWh</td> <td>" .$D11 ." kWh</td> <td>".$E11 ." kWh</td> <td>LKR ". $F11 ."</td> <td>LKR 37.00</td> <td>LKR ". $H11 ."</td> <td>LKR ". $I11 ."</td> <td  bgcolor='$bgcolJ11' >LKR ". $J11 ."</td> </tr>    <tr style='background-color:#f5df9d'> <td>12</td> <td>82.5%</td> <td>". $C12 ." kWh</td> <td>" .$D12 ." kWh</td> <td>".$E12 ." kWh</td> <td>LKR ". $F12 ."</td> <td>LKR 37.00</td> <td>LKR ". $H12 ."</td> <td>LKR ". $I12 ."</td> <td  bgcolor='$bgcolJ12' >LKR ". $J12 ."</td> </tr>    <tr style='background-color:#9df5a5'> <td>13</td> <td>81.0%</td> <td>". $C13 ." kWh</td> <td>" .$D13 ." kWh</td> <td>".$E13 ." kWh</td> <td>LKR ". $F13 ."</td> <td>LKR 37.00</td> <td>LKR ". $H13 ."</td> <td>LKR ". $I13 ."</td> <td  bgcolor='$bgcolJ13' >LKR ". $J13 ."</td> </tr>    <tr style='background-color:#f5df9d'> <td>14</td> <td>79.5%</td> <td>". $C14 ." kWh</td> <td>" .$D14 ." kWh</td> <td>".$E14 ." kWh</td> <td>LKR ". $F14 ."</td> <td>LKR 37.00</td> <td>LKR ". $H14 ."</td> <td>LKR ". $I14 ."</td> <td  bgcolor='$bgcolJ14' >LKR ". $J14 ."</td> </tr>    <tr style='background-color:#9df5a5'> <td>15</td> <td>78.0%</td> <td>". $C15 ." kWh</td> <td>" .$D15 ." kWh</td> <td>".$E15 ." kWh</td> <td>LKR ". $F15 ."</td> <td>LKR 37.00</td> <td>LKR ". $H15 ."</td> <td>LKR ". $I15 ."</td> <td  bgcolor='$bgcolJ15' >LKR ". $J15 ."</td> </tr>    <tr style='background-color:#f5df9d'> <td>16</td> <td>76.5%</td> <td>". $C16 ." kWh</td> <td>" .$D16 ." kWh</td> <td>".$E16 ." kWh</td> <td>LKR ". $F16 ."</td> <td>LKR 37.00</td> <td>LKR ". $H16 ."</td> <td>LKR ". $I16 ."</td> <td  bgcolor='$bgcolJ16' >LKR ". $J16 ."</td> </tr>   <tr style='background-color:#9df5a5'> <td>17</td> <td>75.0%</td> <td>". $C17 ." kWh</td> <td>" .$D17 ." kWh</td> <td>".$E17 ." kWh</td> <td>LKR ". $F17 ."</td> <td>LKR 37.00</td> <td>LKR ". $H17 ."</td> <td>LKR ". $I17 ."</td> <td  bgcolor='$bgcolJ17' >LKR ". $J17 ."</td> </tr>    <tr style='background-color:#f5df9d'> <td>18</td> <td>73.5%</td> <td>". $C18 ." kWh</td> <td>" .$D18 ." kWh</td> <td>".$E18 ." kWh</td> <td>LKR ". $F18 ."</td> <td>LKR 37.00</td> <td>LKR ". $H18 ."</td> <td>LKR ". $I18 ."</td> <td  bgcolor='$bgcolJ18' >LKR ". $J18 ."</td> </tr>    <tr style='background-color:#9df5a5'> <td>19</td> <td>72.0%</td> <td>". $C19 ." kWh</td> <td>" .$D19 ." kWh</td> <td>".$E19 ." kWh</td> <td>LKR ". $F19 ."</td> <td>LKR 37.00</td> <td>LKR ". $H19 ."</td> <td>LKR ". $I19 ."</td> <td  bgcolor='$bgcolJ19' >LKR ". $J19 ."</td> </tr>    <tr style='background-color:#f5df9d'> <td>20</td> <td>70.5%</td> <td>". $C20 ." kWh</td> <td>" .$D20 ." kWh</td> <td>".$E20 ." kWh</td> <td>LKR ". $F20 ."</td> <td>LKR 37.00</td> <td>LKR ". $H20 ."</td> <td>LKR ". $I20 ."</td> <td rowspan='2'  bgcolor='$bgcolJ20' >LKR ". $J20 ."</td> </tr>    <tr style='background-color:#6ff76d'> <td colspan='2'> Total: </td> <td>" . number_format($TotGenUnit,1) ." kWh </td> <td> " . number_format($TotUsage,1) ." kWh </td> <td>" . number_format($TotBalance,1) ." kWh </td> <td>LKR ". number_format($TotElecBill,2) ."</td> <td> </td> <td>LKR " . number_format($TotReve,2) ."</td> <td>LKR " . number_format($TotProfit,2) ."</td> </tr> </table>";
$secpagePART2_1 .= "<div class='absolute'> Page {PAGENO} of {nb} </div>";

$mpdf->WriteHTML($secpagePART2);
$mpdf->WriteHTML($secpagePART2_1);


}else if($scheme=="netMetering"){


}else if($scheme=="netPlus"){

}



//////////////////////////////////////////////////////////////////// THIRD PAGE ////////////////////////////////////////////////////////////////////////////



$mpdf->AddPage('P');

$thirdpage = $pageset1;
$thirdpage .= "<div id='thirdpagediv'>  " .$gklogo ." <h1 style='font-size:20px'> GK LANKA INTERNATIONAL (PVT) LTD </h1> No.15/1/1, Kandawatta Road, Pelawatta, Battaramulla, Sri Lanka. <br> info@gklanka.lk | www.gklanka.lk | 011 4 392 425 | 0777 006 325 <hr style='color:#009345; height:5px'> </div> ";

$thirdpage1 = "<div id='agreement'> <br> This AGREEMENT is made on the " .$date .", Between GK LANKA INTERNATIONAL (PVT) LTD and other parties of " .$cname .", " .$address ." <br> <br>This agreement is valid until start the site installation process. After the site installation we will hand over final agreement and insurance for the system. <br> <br> <br> <b> <u> Terms & Conditions </u> </b> <ul> <li>  Here and after GK LANKA INTERNATIONAL (PVT) LTD is not allowed for verbal transactions. </li> <br> <li> All payments should be transferred via bank transfer to the bank account. </li> <br> <li> We are not responsible for any other verbal money transactions. </li> <br> <li> Bank Accounts Details - <ul style='list-style-type:none;'> <li> GK Lanka International </li> <li> Seylan Bank - Piliyandalla Branch </li> <li>0990-13297469-001 </li> </ul> </ul> <br> <b> <u> Payment Method for " .$SystemCap ."kW Solar Power System </u> </b> <br> <br> <ul> <li>  75% of the total amount LKR ".$lastPrice ." should be paid before installing at the system <br> – LKR ".$price75 .".00<br> </li> <br> <li> 20% of the rest of the total LKR ".$price20 .".00 should be paid during the installation. </li> <br> <li>5% Remaining Balance will be taken soon after the connection is given by the CEB, LKR " .$price5 .".00 </li> </ul> <br> <br> <b> When you made a 75% first installment within 7(seven) days, we will start our installation. <br><br> Further Apply for the CEB Clearance will charge Rs.100,000/= </b> </div> 
  ";
$thirdpage1 .= "<div class='absolute'> Page {PAGENO} of {nb} </div>";

$mpdf->WriteHTML($thirdpage);
$mpdf->WriteHTML($thirdpage1);

//////////////////////////////////////////////////////////////////// FORTH PAGE ////////////////////////////////////////////////////////////////////////////



$mpdf->AddPage('P');

  $forthpage = $pageset1;
  $forthpage .= "  <br> <br> <h1 style='font-size:20px; text-align:center'> USE MATERIALS FOR SOLAR POWER SYSTEM </h1><hr style='color:#009345; height:5px'>
  ";
  $forthpage1 = "<div id='usematerial'> <ol> <li> <b> PV Module (Solar Panel) Brands </b> <br> <br> <ul>". $pvmod ." </ul> </li> <br> <br> <li> <b> Inverter Brands </b> <br> <br> <ul>". $invtr ." </ul> </li> <br> <br> <li> <b> Electrical Accessories </b> - " .$phasetype ."<br> <br> <ul>" .$elec ." </ul> <br> </li> <br> <li> <b> Structure </b> - " .$structure ." <br><br> <ul> " .$structureParts ."</ul>  </li> </ol> </div>
  ";
  $forthpage1 .= "<div class='absolute'> Page {PAGENO} of {nb} </div>";


$mpdf->WriteHTML($forthpage);
$mpdf->WriteHTML($forthpage1);

//////////////////////////////////////////////////////////////////// FIFTH PAGE ////////////////////////////////////////////////////////////////////////////

$mpdf->AddPage('P');

  $fifthpage = $pageset1;
  $fifthpage .= "<div id='warrantypage' align='center'> " .$gklogo ." <hr style='color:#009345; height:5px'> <br> <br> <br><br> " .$warrentyIcon ." <br> <br> <br> <br> <table id='warrantytable'> <tr> <td style='border: 1px solid black; text-align:right; padding:6px'> Panel </td> <td style='border: 1px solid black; text-align:center; padding:6px'> 25 Years Warrenty </td> </tr> <tr> <td style='border: 1px solid black; text-align:right; padding:6px'> Inverter </td> <td style='border: 1px solid black; text-align:center; padding:6px'> 10 years Warrenty </td> </tr> <tr> <td style='border: 1px solid black; text-align:right; padding:6px'> Wiring </td> <td style='border: 1px solid black; text-align:center; padding:6px'> 10 Years Warrenty </td> </tr> <tr> <td style='border: 1px solid black; text-align:right; padding:6px'> Structure </td> <td style='border: 1px solid black; text-align:center; padding:6px'> 10 Years warranty </td> </tr> </table> </div>   
  ";

  $fifthpage1 = "<div id='sign'> <table style='width:100%'> <tr> <td> ...................................................... </td> <td> ...................................................... </td> </tr> <tr> <td> " .$cname ."</td> <td> GK Lanka International (Pvt) Ltd </td> </tr> </table> </div> ";
  $fifthpage1 .= "<div class='absolute'> Page {PAGENO} of {nb} </div>";

$mpdf->WriteHTML($fifthpage);
$mpdf->WriteHTML($fifthpage1);



$mpdf -> Output($quatNo.'-'.$cname.'-'.$city.'-'.$SystemCap.'kW-'.$qtype.'.pdf', 'I');


}else if($qtype == "offgrid"){
	echo "<h1> Offgrid type page is under construction </h1>";
}else if($qtype == "hybrid"){
	echo "Hybrid type page is under construction";
}








?>