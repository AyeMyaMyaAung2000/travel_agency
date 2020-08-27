// Add To Cart
$(document).ready(function(){

 		getData();
 		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});	
	$(".addtocart").on('click',function(){
		// var id = $(this).data('id');
		var date = document.getElementById("date").value;
		var email = document.getElementById("email").value;
		var username = document.getElementById("username").value;
		var car = document.getElementById("car").value;
		var phoneno=document.getElementById("phoneno");
		var carprice=parseInt(car);
	
		var hotel = document.getElementById("hotel").value;
		var hotelprice=parseInt(hotel);
		console.log(hotelprice);
		var name = $(this).data('name');	
		var price = $(this).data('price');
		var packageprice=parseInt(price);
		console.log(packageprice);
		var pax = document.getElementById("pax").value;	
		var noofpax=parseInt(pax);	
		var description = document.getElementById("description").value;
		var total=(carprice+hotelprice+packageprice)*noofpax;
		console.log(total);
		var shop_item = {
			date:date,
			name:name,
			pax:pax,
			description:description,
			total:total,
			email:email,
			username:username,
			phoneno:phoneno,
			
		}
		console.log(shop_item);
		var shopString = localStorage.getItem("victorsoul");
		var shopArray;
		if (shopString==null) {
			shopArray=Array();
		}else {
			shopArray=JSON.parse(shopString);
			
		}
		shopArray.push(shop_item);
		var shopData = JSON.stringify(shopArray);
		localStorage.setItem("victorsoul", shopData);
		$('#mymodal').modal('show');

	});
	function getData(){
		var shopString = localStorage.getItem("victorsoul");
		if (shopString) {
			var shopArray = JSON.parse(shopString);
			var html='';
			$.each(shopArray,function(i,v){
				var name = v.name;
				var date=v.date;
				var total = v.total;
				var description= v.description;
				var pax=v.pax;
				html += `<h5>${name}</h5><h5>${total}</h5><h5>${date}</h5><h5>${pax}</h5><h5>${description}</h5>`;	
			});
			$("#text").html(html);
			
		}
	}

		// for buy now

		
		
});