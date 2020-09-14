function pickpoint_castom_function(result)
{
result['address']= result['address'].replace(/[()]/g,'');
jQuery('#order_comments').val(result['id']);
jQuery('#billing_address_1').val(result['name']+"\n"+result['address']);
var lzone=result['zone'];
var area=300;var data={zone:lzone};
var url=shipselect.ajaxurl.concat("?action=get_and_set_shipping_rate");
jQuery.ajax({url:url,method:'POST',data:data,success:function(result,status,XHR){jQuery("body").trigger('update_checkout');},});
jQuery('#address_pp').html(result['name']+'<br />'+result['address']);
return false;
}