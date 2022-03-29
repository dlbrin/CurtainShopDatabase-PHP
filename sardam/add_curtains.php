<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="first">
	<div class="first-img">
		<img src="assets/img/add_curtains.png">
	</div>
	<div class="first-txt">
		<h1>بەشێ زێدەکرنا پەردان </h1>
	    <p>ئەڤ بەشە تایبەتە ب زێدەکرنا پەردا، هیڤیدارین ئاگەهداربەو دەستکاریێ نەکە.</p>
	</div>
</div>
<center>
<div class="add_container">
	<form method="POST" action="modal/curtains.inc.php">
		<div class="header-add">
			<div class="header-name">
				<h3>کومپانیا سەردەم</h3>
				<h4>بۆ درۆستکرنا پەردێن </h4>
				<h5>زیبرا ، دەبل ستور ، 3d , TUL , PRINT</h5>
			</div>
			<div class="header-img">
				<img class="image" src="assets/img/sardamlogoo.png">
			</div>
			<div class="header-phone">
				<h2>حەمدی  ٠٧٥٠٨٥٧٨٠٨٩</h2>
				<h2>حەمدی  ٠٧٥٠٨٥٧٨٠٨٩</h2>
				<h2>حەمدی  ٠٧٥٠٨٥٧٨٠٨٩</h2>
			</div>
		</div>
		<div class="add_name_day">
			<table>
				<tr>
					<td style="background-color: #7f8c8d;">بەرێز</td>
					<td style="background-color: #7f8c8d;">ژ.موبایل</td>
					<td style="background-color: #7f8c8d;">ناڤونیشان</td>
					<td style="background-color: #7f8c8d;">تاريخ الفاتورة:</td>
				</tr>
				<tr>
					<td><input type="text" name="name"></td>
					<td><input type="number" name="phone"></td>
					<td><input type="text" name="address"></td>
					<td><input type="date" name="date"></td>
				</tr>
			</table>
	    </div>
	    <hr>
	    <div class="add_curtains">
		    <table>
			    <tr>
				    <td style="background-color: #7f8c8d;">رقم كود</td>
				    <td style="background-color: #7f8c8d;">ملاحظات</td>
				    <td style="background-color: #7f8c8d;">عرض</td>
				    <td style="background-color: #7f8c8d;">طول</td>
				    <td style="background-color: #7f8c8d;">عدد</td>
				    <td style="background-color: #7f8c8d;">مجموع متر</td>
				    <td style="background-color: #7f8c8d;">سعر متر</td>
				    <td style="background-color: #7f8c8d;">الأجمالي</td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number"></td>
					<td><input type="text" name="note"></td>
				    <td><input type="text" class="product-buying-price" name="show"></td>
				    <td><input type="text" class="product-selling-price" name="length"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr"></td>
				    <td><select name="all_mtr">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr"></td>
				    <td><select name="all_price">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_1"></td>
					<td><input type="text" name="note_1"></td>
				    <td><input type="text" class="product-buying-price" name="show_1"></td>
				    <td><input type="text" class="product-selling-price" name="length_1"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_1"></td>
				    <td><select name="all_mtr_1">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_1"></td>
				    <td><select name="all_price_1">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_2"></td>
					<td><input type="text" name="note_2"></td>
				    <td><input type="text" class="product-buying-price" name="show_2"></td>
				    <td><input type="text" class="product-selling-price" name="length_2"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_2"></td>
				    <td><select name="all_mtr_2">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_2"></td>
				    <td><select name="all_price_2">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_3"></td>
					<td><input type="text" name="note_3"></td>
				    <td><input type="text" class="product-buying-price" name="show_3"></td>
				    <td><input type="text" class="product-selling-price" name="length_3"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_3"></td>
				    <td><select name="all_mtr_3">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_3"></td>
				    <td><select name="all_price_3">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_4"></td>
					<td><input type="text" name="note_4"></td>
				    <td><input type="text" class="product-buying-price" name="show_4"></td>
				    <td><input type="text" class="product-selling-price" name="length_4"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_4"></td>
				    <td><select name="all_mtr_4">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_4"></td>
				    <td><select name="all_price_4">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_5"></td>
					<td><input type="text" name="note_5"></td>
				    <td><input type="text" class="product-buying-price" name="show_5"></td>
				    <td><input type="text" class="product-selling-price" name="length_5"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_5"></td>
				    <td><select name="all_mtr_5">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_5"></td>
				    <td><select name="all_price_5">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_6"></td>
					<td><input type="text" name="note_6"></td>
				    <td><input type="text" class="product-buying-price" name="show_6"></td>
				    <td><input type="text" class="product-selling-price" name="length_6"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_6"></td>
				    <td><select name="all_mtr_6">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_6"></td>
				    <td><select name="all_price_6">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_7"></td>
					<td><input type="text" name="note_7"></td>
				    <td><input type="text" class="product-buying-price" name="show_7"></td>
				    <td><input type="text" class="product-selling-price" name="length_7"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_7"></td>
				    <td><select name="all_mtr_7">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_7"></td>
				    <td><select name="all_price_7">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_8"></td>
					<td><input type="text" name="note_8"></td>
				    <td><input type="text" class="product-buying-price" name="show_8"></td>
				    <td><input type="text" class="product-selling-price" name="length_8"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_8"></td>
				    <td><select name="all_mtr_8">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_8"></td>
				    <td><select name="all_price_8">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
					<td><input type="text" name="code_number_9"></td>
					<td><input type="text" name="note_9"></td>
				    <td><input type="text" class="product-buying-price" name="show_9"></td>
				    <td><input type="text" class="product-selling-price" name="length_9"></td>
				    <td><input type="text" class="product-number-price" name="number_mtr_9"></td>
				    <td><select name="all_mtr_9">
				    	<option class="net-profit"></option>
				    </select></td>
				    <td><input type="text" class="product-pricing-price" name="price_mtr_9"></td>
				    <td><select name="all_price_9">
				    	<option class="total-all"></option>
				    </select></td>
			    </tr>
			    <tr>
			    	<td style="text-align: left; padding: 10px;" colspan="8"><label>المجموع: <select name="all_data_price">
				        <option id="total-all-data"></option>
			        </select></label></td>
			    </tr>
			    <tr>
			        <td style="text-align: left; padding: 10px;" colspan="8"><label>مبلغ الخصم : <input type="text" name="help_price" class="dec"></label></td>
			    </tr>
			    <tr>
			        <td style="text-align: left; padding: 10px;" colspan="8"><label>مبلغ الفاتورة: <select name="final_price">
				        <option id="after"></option>
			        </select></label></td>
			    </tr>
		   </table>
		   <div class="all-cuntainer-details">
		   	<div class="all-money">
		   		<label>الرصيد السابق:  </label> <input type="text" name="old_price">
		   		<br>
		   		<br>
		   		<label>الرصيد النهائي:  </label> <input type="text" name="final_old_price">
		   	</div>
		   	<div class="all-cuntainer-note">
		   		<label>ملاحظات: </label>
		   		<br>
		   		<textarea cols="50" rows="3" name="all_note"></textarea>
		   	</div>
		   </div>
		   <button name="submit">داخلکرن</button>
		</div>
	</form>
</div>
</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery-3.5.0.min.js"></script>


  <script>
  	$("document").ready(function(){
        $('.product-buying-price, .product-selling-price, .product-number-price,.product-pricing-price , .dec').on('blur', function(e) {
            var row = $(this).closest('tr');
            var buying_pr = $('.product-buying-price', row),
                selling_pr = $('.product-selling-price', row),
                numbering_pr = $('.product-number-price', row),
                price_pr = $('.product-pricing-price', row),
                net_profit = $('.net-profit', row),
                total_all = $('.total-all', row);
                
   
            buy_pr = parseFloat(buying_pr.val());
            num_pr = parseFloat(numbering_pr.val());
            sell_pr = parseFloat(selling_pr.val());
            pr_pr = parseFloat(price_pr.val());

            if (!isNaN(buy_pr) && !isNaN(sell_pr) && !isNaN(num_pr)) {

                net_profit.text((sell_pr * buy_pr * num_pr).toFixed(3));

                pr_pr = parseFloat(price_pr.val());
               total_all.text((sell_pr * buy_pr * num_pr * pr_pr).toFixed(3));
        	}
        	var totalsum = 0; 
			$(".total-all").each(function(){
			    var inputVal = $(this).val();
			    if($.isNumeric(inputVal)){
			        totalsum += parseFloat(inputVal);
			        var dece = $(".dec");
				    decs = parseFloat(dece.val());
				 

				    var show = $("#after");

				    $("#after").text(totalsum - decs);
			    }
			    $("#total-all-data").text(totalsum);

			});

			

   
        });

     

});
  
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
