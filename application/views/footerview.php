 
 
 <!--<div class="subNav" style="margin-left:180px;">
            	<ul>
                	<li><a href="<?php //echo site_url();?>/home/aboutus"><img src="<?php //echo base_url();?>/data/images_front/about.png" alt="about" id="img" /></a></li>
                    <li><a href="<?php //echo site_url();?>/gallery"><img src="<?php //echo base_url();?>/data/images_front/images.png" alt="images" id="#img" /></a></li>
                    <li><a href="<?php //echo site_url();?>/gallery/papersgallery"><img src="<?php //echo base_url();?>/data/images_front/prints.png" alt="print" id="#img" /></a></li>
                    <li><a href="<?php //echo site_url();?>/gallery/framegallery"><img src="<?php //echo base_url();?>/data/images_front/frames.png" alt="frames" id="#img" /></a></li>
                </ul>
                <br clear="all" />
          </div>
  --><div class="footerWrapper">
    	<div class="footer">
        <div class="logoPanel">
            <ul><!--
                
                <li class="credits">
                    Copyright 2012 - 2013 photostop.in<br />
                    <a href="<?php //echo site_url();?>/home/terms">Terms</a> and <a href="<?php //echo site_url();?>/home/terms">Privacy Policy</a> under which<br />
                    this service is provided to you
                </li>
            --></ul>
        </div>
        <div class="FooterCommunity">
        	<ul>
            	 <li style="width:800px; margin-left:250px;"><a href="<?php echo site_url();?>contactus"><img src="<?php echo base_url();?>data/images_front/contactUs.png" width="150px;"  alt="Contact us" /></a>
            	 <a href="<?php echo site_url();?>home/terms" style="margin-left:40px;"><img src="<?php echo base_url();?>data/images_front/terms.png" width="150px;"  alt="Terms and conditions"  /></a>
            	 <a href="<?php echo site_url();?>home/faq" style="margin-left:40px;"><img src="<?php echo base_url();?>data/images_front/asktheexpert.png" width="150px;"  alt="Ask the expert" /></a>
            	 <!--<a href="#"><img src="<?php echo base_url();?>/data/images_front/FAQs.jpg" alt="photostop" /></a>
            	 
            	 --></li>
            	
            	 
            </ul>
            <div class="logoPanel">
            <center>
		            <ul>
		             <li  style="width:500px; margin-left:110px;" class="credits">
		             
		              Copyright 2012 - 2013 photostop.in<br />
		            <span style="position:absolute;left:640px;">Powered By <a href="http://www.odopix.com" target="_blank">Odopixel</a></span> 
		              </li>
		            </ul>
		            <br>
		            <div align='center' style="position:absolute;left:625px;">
		            <a href='http://www.hit-counts.com'>
		            <img src='http://www.hit-counts.com/counter.php?t=MTI0NDI4Mw==' border='0' alt='Visitor Counter'></a>
		            <BR>Visitors visited this site.</div>
		           </center>
              </div>
        </div>
        
         
       </div>
    </div>
    
    <script>
  $(function(){
    
    var $isocontainer = $('#isocontainer');
    
    
      // add randomish size classes
      $isocontainer.find('.element').each(function(){
        var $this = $(this),
            number = parseInt( $this.find('.number').text(), 10 );
        if ( number % 7 % 2 === 1 ) {
          $this.addClass('width2');
        }
        if ( number % 3 === 0 ) {
          $this.addClass('height2');
        }
      });
    
    $isocontainer.isotope({
      itemSelector : '.element',
      masonry : {
        columnWidth : 120
      },
      masonryHorizontal : {
        rowHeight: 120
      },
      cellsByRow : {
        columnWidth : 240,
        rowHeight : 240
      },
      cellsByColumn : {
        columnWidth : 240,
        rowHeight : 240
      },
      getSortData : {
        symbol : function( $elem ) {
          return $elem.attr('data-symbol');
        },
        category : function( $elem ) {
          return $elem.attr('data-category');
        },
        number : function( $elem ) {
          return parseInt( $elem.find('.number').text(), 10 );
        },
        weight : function( $elem ) {
          return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
        },
        name : function ( $elem ) {
          return $elem.find('.name').text();
        }
      }
    });
    
    
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $isocontainer.isotope( options );
        }
        
        return false;
      });


    
      // change layout
      var isHorizontal = false;
      function changeLayoutMode( $link, options ) {
        var wasHorizontal = isHorizontal;
        isHorizontal = $link.hasClass('horizontal');

        if ( wasHorizontal !== isHorizontal ) {
          // orientation change
          // need to do some clean up for transitions and sizes
          var style = isHorizontal ? 
            { height: '80%', width: $isocontainer.width() } : 
            { width: 'auto' };
          // stop any animation on container height / width
          $isocontainer.filter(':animated').stop();
          // disable transition, apply revised style
          $isocontainer.addClass('no-transition').css( style );
          setTimeout(function(){
            $isocontainer.removeClass('no-transition').isotope( options );
          }, 100 )
        } else {
          $isocontainer.isotope( options );
        }
      }


    
      // change size of clicked element
      $isocontainer.delegate( '.element', 'click', function(){
        $(this).toggleClass('large');
        $isocontainer.isotope('reLayout');
      });

      // toggle variable sizes of all elements
      $('#toggle-sizes').find('a').click(function(){
        $isocontainer
          .toggleClass('variable-sizes')
          .isotope('reLayout');
        return false;
      });


    
      $('#insert a').click(function(){
        var $newEls = $( fakeElement.getGroup() );
        $isocontainer.isotope( 'insert', $newEls );

        return false;
      });

      $('#append a').click(function(){
        var $newEls = $( fakeElement.getGroup() );
        $isocontainer.append( $newEls ).isotope( 'appended', $newEls );

        return false;
      });


    var $sortBy = $('#sort-by');
    $('#shuffle a').click(function(){
      $isocontainer.isotope('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });


  });
</script>
    
</body>
</html>
