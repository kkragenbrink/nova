<script type="text/javascript" src="<?php echo Url::base().MODFOLDER;?>/modules/assets/js/jquery.ajaxq.js"></script>
<script type="text/javascript" src="<?php echo Url::base().MODFOLDER;?>/modules/assets/js/jquery.tipTip.js"></script>

<link rel="stylesheet" href="<?php echo Url::base().MODFOLDER;?>/modules/assets/css/jquery.tipTip.css" />

<script type="text/javascript">
	$(document).ready(function(){
		$('#next').click(function(){
			$('.lower').fadeOut('fast');
			$('#loaded').fadeOut('fast', function(){
				$('#loading').removeClass('hidden');
			});
		});
		
		$('#start').live('click', function(){
			var send;
			
			var tipOpts = {
				defaultPosition: 'right',
				edgeOffset: 8
			}
			
			// get the password
			var password = $('input[name=password]').val();
			
			// new password
			$.ajaxq('queue', {
				beforeSend: function(){
					$('.loading-password').removeClass('hidden');
				},
				type: "POST",
				url: "<?php echo Url::site('setup/smsajax/upgrade_final_password');?>",
				data: { password: password },
				dataType: 'json',
				success: function(data){
					$('.loading-password').addClass('hidden');
					
					if (data.code == 1)
					{
						$('.success-password').removeClass('hidden');
					}
					else
					{
						$('.failure-password').removeClass('hidden');
						$('.failure-password img').attr('title', function(){
							return data.message
						});
						$('.tiptip').tipTip(tipOpts);
					}
				}
			});
			
			// get the admins
			var roles = $('select[name=admins]').val();
			
			// roles
			$.ajaxq('queue', {
				beforeSend: function(){
					$('.loading-admins').removeClass('hidden');
				},
				type: "POST",
				url: "<?php echo Url::site('setup/smsajax/upgrade_final_roles');?>",
				data: { roles: roles },
				dataType: 'json',
				success: function(data){
					$('.loading-admins').addClass('hidden');
					
					if (data.code == 1)
					{
						$('.success-admins').removeClass('hidden');
					}
					else
					{
						$('.failure-admin').removeClass('hidden');
						$('.failure-admin img').attr('title', function(){
							return data.message
						});
						$('.tiptip').tipTip(tipOpts);
					}
				}
			});
			
			$('#progress').ajaxStop(function(){
				$('.lower .control button').attr('id', 'next').html('Your Site');
				$('.lower .control-text').html('Go to your upgraded Nova site now');
			});
			
			return false;
		});
	});
</script>