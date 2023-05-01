window.onload = function() {
let docTitle = document.title;
window.addEventListener("blur", () =>{document.title = "Come back 😞";})
window.addEventListener("focus", () =>{document.title = docTitle;})

};


///// mobile screen menu ////
// let isHomeClicked = false;
// let isCategoriesClicked = false;
// let isUserClicked = false;

$(".footer_btns").on("click",function(){
		let selectedElement = $(this).children();
		///////////// To reset style//////
		selectedElement.each(function( index ){
			// console.log(selectedElement.length);
			selectedElement.attr('src','./assets/img/home.png');
			selectedElement.attr('src','./assets/img/user.png');
			selectedElement.attr('src','./assets/img/category.png');
		});
		$(".footer_home>img").attr('src','./assets/img/homed.png');
		$(".footer_categories>img").attr('src','./assets/img/categories.png');
		$(".footer_profile>img").attr('src','./assets/img/user (1).png');
	});

$(".footer_categories").on("click",function(){
	$(".categorig").css({"display":"flex"});
});


/////category///
// $(".mobile_screen_categories").on("click",function(){
// 	$(".categorig").css({"display":"flex"});
// });

////////// search start /////////
let myInput = document.getElementById('myInput');
let searchBtn = document.getElementsByClassName('search_btn')[0];

if (myInput="")
{
	searchBtn.style.cursor = "none";
}
else
{
	searchBtn.style.cursor = "pointer";
}



//////////////Add to wishlist start /////////

let isLikeClicked = false;
let add_to_wishlist = document.getElementsByClassName('add_to_wishlist')[0];
let wishlistIcon = document.getElementById('wishlist_icon');
  

function AddToWishlist()
      {
        if (isLikeClicked==false)
        {
         wishlistIcon.src = "./assets/img/heartf.png";
         add_to_wishlist.style.display = "flex";
         hideWishlist();
         add_to_wishlist.innerText = "Added to wishlist";
         isLikeClicked=true;
        }
        else
        {
          wishlistIcon.src = "./assets/img/heart.png";
          hideWishlist();
          add_to_wishlist.style.display = "flex";
          add_to_wishlist.innerText = "Remove to wishlist";
          isLikeClicked=false;
        }
      }

      function hideWishlist()
      {
        setTimeout(function(){
          add_to_wishlist.style.display = "none";
        },1000);
      }

////////// Add to Wishlist end //////////

//================ PRODUCTS DETAILS JS =============//


$("#add_to_cart").click(function(){
  $(this).text("Adding to cart...");
  setTimeout(function(){
    $("#add_to_cart").text("Added to cart");
  },500); 
});

// if (text = "Added to cart")
// {
// 	$("#add_to_cart").css("color":"red");
// }
//=====================================================//

$(function(){
  let itemCounter = 0;
  let JsonParsedObject;
  let previousOrderDetails;
  if(localStorage.getItem("orderDetail")!=null)
  {
    previousOrderDetails = localStorage.getItem("orderDetail");
    JsonParsedObject = JSON.parse(previousOrderDetails);
    for(let i=0;i<JsonParsedObject.length;i++)
    {
      itemCounter = itemCounter+parseInt(JsonParsedObject[i].qty);
      console.log(itemCounter);
    }
  }
  $(".addCart").on("click",function(){
     let orderId = parseInt($(this).attr("data-id"));
     let orderDetails= {productId:orderId,qty:1};
     let stringOrderDetails = JSON.stringify(orderDetails);
     if(localStorage.getItem("orderDetail")== null)
     {
       localStorage.setItem("orderDetail","["+stringOrderDetails+"]");
       itemCounter++;
     }
     else
     {
       previousOrderDetails = localStorage.getItem("orderDetail");
 	$(".card_empty").css({"display":"none"});
       let isFreshValue =  true;
       let updatedValueIndex = -1;
       let updatedOrderDetails;
       JsonParsedObject = JSON.parse(previousOrderDetails);
       for(let i=0;i<JsonParsedObject.length;i++)
       {
         if(JsonParsedObject[i].productId==orderId)
         {
           updatedValueIndex = i;
           isFreshValue = false;
           break;
         }
       }
       if(isFreshValue && updatedValueIndex==-1)
       {
         updatedOrderDetails = JSON.stringify(JsonParsedObject)+","+stringOrderDetails;
       }
       else if(!isFreshValue && updatedValueIndex>-1)
       {
        if (JsonParsedObject[updatedValueIndex].qty<10)
	     	{
	     		JsonParsedObject[updatedValueIndex].qty= JsonParsedObject[updatedValueIndex].qty+1;
	     	}
         updatedOrderDetails = JSON.stringify(JsonParsedObject);
       }
       updatedOrderDetails = updatedOrderDetails.replaceAll("[","").replaceAll("]","");
       updatedOrderDetails = "["+updatedOrderDetails+"]";
       localStorage.setItem("orderDetail",updatedOrderDetails);     
       $("#json-string").text(updatedOrderDetails);
       itemCounter++;
     }
  });
});


/////////// Add to Cart start ////////

$("#count").text(JSON.parse(localStorage.getItem("orderDetail")).length);

let orderDetails = localStorage.getItem("orderDetail");
let JsonParsedObject = JSON.parse(orderDetails);
let ProData;
let quantity;
for (var i = 0; i < JsonParsedObject.length; i++)
{
  ProData = 'p_id='+JsonParsedObject[i].productId;
  quantity = JsonParsedObject[i].qty;
  ajexCall(ProData,quantity);
    
}
function ajexCall(id,quantity)
{
  $.ajax({
      url: './addtocartajax.php',  
      type: 'POST',
      data: id,
      success: function(data)
      {
      	let totalPrice = quantity*data[0].pprice;
        $(".plist").append('<div class="p_details"><div class="product"><div class="pic"><img src="./assets/img/'+data[0].pimage1+'" alt=""></div><div class="pdetails"><div class="pname">'+data[0].pname+'</div><div class="pweight">5kg</div><div class="pprice price_money">₹ <span id="price">'+totalPrice+'</span> <strike>₹220</strike> <span class="green">₹20 Off</span></div></div></div><div class="inc_dec set_quantity"><button class="decrement" data-id="'+data[0].id+'">-</button><input type="text" name="" value="'+quantity+'" class="counting" id="textbox" disabled><button class="increment" data-id="'+data[0].id+'">+</button></div></div>');
      }
  });
}
////////// Add to cart counter /////////
$(function(){
  let itemCounter = 0;
  let JsonParsedObject;
  let previousOrderDetails;
	$(document).on("click",".increment",function(){
	   let orderId = parseInt($(this).attr("data-id"));
	   let orderDetails= {productId:orderId,qty:1};
	   let stringOrderDetails = JSON.stringify(orderDetails);
	   if(localStorage.getItem("orderDetail")== null)
	   {
	     localStorage.setItem("orderDetail","["+stringOrderDetails+"]");
	     itemCounter++;
	   }
	   else
	   {
	     previousOrderDetails = localStorage.getItem("orderDetail");
	     let isFreshValue =  true;
	     let updatedValueIndex = -1;
	     let updatedOrderDetails;
	     JsonParsedObject = JSON.parse(previousOrderDetails);
	     for(let i=0;i<JsonParsedObject.length;i++)
	     {
	       if(JsonParsedObject[i].productId==orderId)
	       {
	         updatedValueIndex = i;
	         isFreshValue = false;
	         break;
	       }
	     }
	     if(isFreshValue && updatedValueIndex==-1)
	     {
	       updatedOrderDetails = JSON.stringify(JsonParsedObject)+","+stringOrderDetails;
	     }
	     else if(!isFreshValue && updatedValueIndex>-1)
	     {
	     	if (JsonParsedObject[updatedValueIndex].qty<10)
	     	{
	     		JsonParsedObject[updatedValueIndex].qty= JsonParsedObject[updatedValueIndex].qty+1;
	     	}
	       updatedOrderDetails = JSON.stringify(JsonParsedObject);
	       $(this).parent().children(".counting").val(JsonParsedObject[updatedValueIndex].qty);
	     }
	     updatedOrderDetails = updatedOrderDetails.replaceAll("[","").replaceAll("]","");
	     updatedOrderDetails = "["+updatedOrderDetails+"]";
	     localStorage.setItem("orderDetail",updatedOrderDetails);     
	     $("#json-string").text(updatedOrderDetails);
	     itemCounter++;
	   }
	});
});


$(function(){
  let itemCounter = 0;
  let JsonParsedObject;
  let previousOrderDetails;
	$(document).on("click",".decrement",function(){
	   let orderId = parseInt($(this).attr("data-id"));
	   let orderDetails= {productId:orderId,qty:1};
	   let stringOrderDetails = JSON.stringify(orderDetails);
	   if(localStorage.getItem("orderDetail")== null)
	   {
	     localStorage.setItem("orderDetail","["+stringOrderDetails+"]");
	     itemCounter++;
	   }
	   else
	   {
	     previousOrderDetails = localStorage.getItem("orderDetail");
	     let isFreshValue =  true;
	     let updatedValueIndex = -1;
	     let updatedOrderDetails;
	     JsonParsedObject = JSON.parse(previousOrderDetails);
	     for(let i=0;i<JsonParsedObject.length;i++)
	     {
	       if(JsonParsedObject[i].productId==orderId)
	       {
	         updatedValueIndex = i;
	         isFreshValue = false;
	         break;
	       }
	     }
	     if(isFreshValue && updatedValueIndex==-1)
	     {
	       updatedOrderDetails = JSON.stringify(JsonParsedObject)+","+stringOrderDetails;
	     }
	     else if(!isFreshValue && updatedValueIndex>-1)
	     {
	     	if (JsonParsedObject[updatedValueIndex].qty>0)
	     	{
	     		JsonParsedObject[updatedValueIndex].qty= JsonParsedObject[updatedValueIndex].qty-1;
	     	}
	       updatedOrderDetails = JSON.stringify(JsonParsedObject);
	       $(this).parent().children(".counting").val(JsonParsedObject[updatedValueIndex].qty);
	     }
	     updatedOrderDetails = updatedOrderDetails.replaceAll("[","").replaceAll("]","");
	     updatedOrderDetails = "["+updatedOrderDetails+"]";
	     localStorage.setItem("orderDetail",updatedOrderDetails);     
	     $("#json-string").text(updatedOrderDetails);
	     itemCounter++;
	   }
	});
});

// Total Price

let price = document.getElementsByClassName("price")[0];
let counting = document.getElementsByClassName("counting")[0];
let tPrice = document.getElementsByClassName("t_price")[0];
tPrice.innerHTML = price*counting
// let totalP = tPrice.value;
// let dFees = document.getElementsByClassName("d_fees")[0];
// let deliFees = dFees.value;
// let totalCartAmt = document.getElementsByClassName("total_cart_amt")[0].innerText = totalP + deliFees;

////////// Add to cart counter end //////////

/////////// Add to Cart end ////////


$(".mobile_screen_profile").on("click",function(){
	$(".menu_conatiner").css({"width":"100%","height":"82%","margin-bottom":"50px"});
});



///////// Add Address ////////
$(".add_new_address").on("click",function(){
	$(".address_container").css({"height":"100%"});
});
$(".address_container").css({"height":"0%"});


$(".add_new_address>div>input").on("change",function(){

var input_str = $(this).val();
	if (input_str=="")
	{
		$(this).css({"border":"2px solid red"});
		$(this).parent().children(".error").css({"color":"red"});
	}
	else
	{
		$(this).css({"border":"2px solid #fff"});
		$(this).parent().children(".error").css({"color":"rgba(26,39,71,0)"});
	}
})