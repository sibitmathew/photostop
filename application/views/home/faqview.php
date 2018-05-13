 <div class="container">
        	
        
      
            <div class="faqPanel">
            <h1>BUYER-FAQ</h1>
            <div id="accordion">
            <?php foreach ($user_faq->result() as $uf){?>
            	<h3><span><?php echo $uf->question;?></span></h3>
                <div>
                	<span style="font-family:babelsansregular;color:#767676;font-size:20px;"><?php echo $uf->answer;?></span>
                </div>
            <?php }?>    
            </div>
            </div>
            
            <div class="faqPanel">
            <h1>PHOTOGRAPHER-FAQ</h1>
            <div id="accordion_photo">
            <?php foreach ($photo_faq->result() as $pf){?>
            	<h3><span><?php echo $pf->question;?></span></h3>
                <div>
                	<span style="font-family:babelsansregular;color:#767676;font-size:20px;"><?php echo $pf->answer;?></span>
                </div>
            <?php }?>    
            </div>
            </div>
            
        </div>
    </div>