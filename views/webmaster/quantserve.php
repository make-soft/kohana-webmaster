<?php 
    if ($enabled && $account != '')
    {
?>
<script type="text/javascript"> 
	_qoptions={
	qacct:"<?php echo $account; ?>"
	};
</script> 
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<?php
    }
?>