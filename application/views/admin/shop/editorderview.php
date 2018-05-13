
<?php 
$orderId="";
$orderNo="";
$totalPrice="";
$shipperPrice="";
$paymentStatus="";
$deliveryStatus="";
$shipperId="";
$imageId="";
$paperId="";
$frameId="";
$unitPrice="";
$quantity="";
$size="";

foreach ($order->result()as $or){
	$orderId=$or->orderId;
	$orderNo=$or->orderNo;
	$totalPrice=$or->totalPrice;
	$shipperPrice=$or->shipperPrice;
	$paymentStatus=$or->paymentStatus;
	$deliveryStatus=$or->deliveryStatus;
	$shipperId=$or->shipperId;
	$imageId=$or->imageId;
	$paperId=$or->paperId;
	$frameId=$or->frameId;
	$unitPrice=$or->unitPrice;
	$quantity=$or->quantity;
	$size=$or->size;
}
?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Process/Edit Order</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="updateorderform" class="form_container left_label">
						<input type="hidden" name="orderId" value="<?php echo $orderId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="orderNo">Order No<span class="req">*</span></label>
									<div class="form_input">
										<input name="orderNo" id="orderNo" value="<?php echo $orderNo;?>" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="username">Select Courier </label>
									<div class="form_input">
										<select name="shipperId">
										<option value="">Select</option>
										<?php foreach ($shipper->result()as $sh){?>
										<option value="<?php echo $sh->shipperId;?>" <?php if ($shipperId==$sh->shipperId){?>selected<?php }?>><?php echo $sh->shipperName;?></option>
										<?php }?>
										</select>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
								<?php 
								$image=$this->photoadminmodel->getimagebyimageid($imageId);
								$frame=$this->photoadminmodel->getframebyid($frameId);
								$paper=$this->photoadminmodel->getpaperbyid($paperId);
									?>
									<label class="field_title" for="totalPrice">Image,Frame,paper and Size </label>
									<div class="form_input">
									<?php echo $image->row()->imageName." , ".$frame->row()->frameName." , ".$paper->row()->paperName." and ".$size;?>
										<!--<input  id="totalPrice" name="totalPrice" type="text" value="" class="clear_fields" tabindex="2" />
									--></div>
								</div>
								</li>
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="totalPrice">Quantity * Unit Price </label>
									<div class="form_input">
										<?php echo $quantity." * ".$unitPrice;?>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="totalPrice">Total Price </label>
									<div class="form_input">
										<input  id="totalPrice" name="totalPrice" type="text" value="<?php echo $totalPrice;?>" class="clear_fields" tabindex="2" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="username">Courier Price </label>
									<div class="form_input">
										<input  id="shipperPrice" name="shipperPrice" type="text" value="<?php echo $shipperPrice;?>" class="clear_fields" tabindex="2"  />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imageResolution">Payment Status <span class="req">*</span></label>
									<div class="form_input">
										<select name="paymentStatus">
										
										<?php if ($paymentStatus=="pending"){?>
										<option value="">Select</option>
										<option value="pending" selected>Pending</option>
										<option value="done">Done</option>
										<?php }elseif($paymentStatus=="done"){?>
										<option value="">Select</option>
										<option value="pending" >Pending</option>
										<option value="done" selected>Done</option>
										<?php }else{?>
										<option value="">Select</option>
										<option value="pending" >Pending</option>
										<option value="done" >Done</option>
										<?php }?>
										</select>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="deliveryStatus">Delivery Status <span class="req">*</span></label>
									<div class="form_input">
										<select name="deliveryStatus">
										
										<?php if ($deliveryStatus=="notdelivered"){?>
										<option value="">Select</option>
										<option value="notdelivered" selected>Not Delivered</option>
										<option value="processing">Processing</option>
										<option value="delivered">Delivered</option>
										<?php }elseif($deliveryStatus=="processing"){?>
										<option value="">Select</option>
										<option value="notdelivered" >Not Delivered</option>
										<option value="processing" selected>Processing</option>
										<option value="delivered">Delivered</option>
										<?php }elseif($deliveryStatus=="delivered"){?>
										<option value="">Select</option>
										<option value="notdelivered" >Not Delivered</option>
										<option value="processing" >Processing</option>
										<option value="delivered" selected>Delivered</option>
										<?php }else{?>
										<option value="">Select</option>
										<option value="notdelivered" >Not Delivered</option>
										<option value="processing" >Processing</option>
										<option value="delivered" >Delivered</option>
										<?php }?>
										</select>
									</div>
								</div>
								</li>
								
								
								
								
								<li>
								<div class="form_grid_12">
									<div class="form_input">
										<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="button" class="btn_small btn_blue clear_button"><span>Reset</span></button>
									</div>
								</div>
								</li>
							</ul>
						</form>
					</div>
				</div>