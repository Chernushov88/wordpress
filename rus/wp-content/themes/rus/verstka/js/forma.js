/* Javscript Document  */
									
function send(url,form_id,result_div)
	{
		// Отсылаем параметры
		jQuery.ajax({
				type: "POST",
				url:  url,
				data: jQuery("#"+form_id).serialize(),
				// Выводим то что вернул PHP
				success: function(html)
				{
						jQuery("#"+result_div).empty();
						jQuery("#"+result_div).append(html);
				
						setTimeout(function() {
						jQuery(document).ready(function(){
						 jQuery("#"+result_div).fadeOut(1800);
						});
							}, 2200)
				},
				
				error: function()
				{
					jQuery("#"+result_div).empty();
					jQuery("#"+result_div).append("Ошибка!");
				}
				});
	}
	
	//эта часть скрипта отвечает за приданию блоку с id="result.." стиля display="block"
	
	//для первой формы
	function applyNow(){document.getElementById("result").style.display="block";}
	
	// function riki(){document.getElementById("result2").style.display="block";}

	// function kuku(){document.getElementById("result1").style.display="block";}

	// function ruru(){document.getElementById("result3").style.display="block";}

	// function mumu(){document.getElementById("result4").style.display="block";}