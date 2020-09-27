<script type="text/javascript">

	function getCities(id,city='')
	{
		var send = 'states=' + id;
		if(city!='')
		{
			var send = 'states=' + id + '&city=' + city;
		}
		$.ajax({
			type: "GET",
			url: "{{ url('get-cities') }}",
			data: send,
			success: function(response){
				$('#city').html(response);
			}
		});
	}

function getstates(id ,states = '')
{	
var send = 'country=' + id + '&states='+states;
$.ajax({
        type: "GET",
        url: "{{ url('get-states') }}",
        data: send,
        success: function(response){
        $('#states').html(response);
        },
        error: function(errormessage) {
        //you would not show the real error to the user - this is just to see if everything is working
        
        }
});
}



$("body").on("change","#country",function(){
    var country = $(this).val();
    getstates(country);
});

$("body").on("change","#states",function(){
    var states = $(this).val();
    getCities(states);
});

</script>