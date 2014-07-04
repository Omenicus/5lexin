//<script>
 function split( val ) {
return val.split( /,\s*/ );
}
function extractLast( term ) {
return split( term ).pop();
}        
$(document).ready(function() {

			$(".elgg-input-autocomplete").each(function(){
				$(this)
        //$('#organisation')
				// don't navigate away from the field on tab when selecting an item
				
				.autocomplete({
          source:  //elgg.get_site_url() + "resume/data"
          function( request, response ) {
            $.getJSON(  elgg.get_site_url() + "resume/data", {
							term: extractLast( request.term ),
              type: $(this.element[0]).attr('datatype'),         
              
              },
              response //gets set by input/autocomplete view
              )
              },
				   /*search: function() {
            // custom minLength
            var term = extractLast( this.value );
            if ( term.length < 2 ) {
            return false;
            }
            },
            focus: function() {
            // prevent value inserted on focus
            return false;
            }, */
            /*select: function( event, ui ) {
              var terms = split( this.value );
              // remove the current input
              terms.pop();
              // add the selected item
              terms.push( ui.item.value );
              // add placeholder to get the comma-and-space at the end
              terms.push( "" );
              this.value = terms.join( ", " );
              return false;
            }, */
          messages: {
              noResults: '',
              results: function() {}
          },
					minLength: 2
				})
        /*.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
					var list_body = "";
					list_body = item.content;
					
				
					return $( "<li></li>" )
					.data( "item.autocomplete", item )
					.append( "<a>" + list_body + "</a>" )
					.appendTo( ul );
				}*/;
			});
});

var test=2;
      
