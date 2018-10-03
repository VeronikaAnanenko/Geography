<script>
 $(function(){
  $('#link_news').click(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
   $.ajax({
    type:'post',
	url: 'ajax/news',
	success: function(data){
	$('.empty').html(data);
	},
	error: function(data){
	$('.empty').html(data);
	}
	
   });
  }
 });
</script>
<div class="col-md-12 bodycon">
    <div class="main_page">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-mama" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                      data-toggle="tab">Info</a></li>
            <li role="presentation"><a href="#news" id="link_news" aria-controls="profile" role="tab"
                                       data-toggle="tab">News</a></li>
            <li role="presentation"><a href="#services" aria-controls="calculate" role="tab"
                                       data-toggle="tab">Cities</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                       data-toggle="tab">Weathers</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="alert" id="continent_code">
                    <table class="table table-bordered table-hover">
                    <tr>
                        <td>{{__('messages.continent')}}</td>
                        <td>{{__('messages.country')}}</td>
                        <td>{{__('messages.country_code')}}</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{asset('country/'.$obj->continent_name)}}">
                                {{$obj->continent_name}}
                            </a>
                        </td>
                        <td>
                            <a href="{{asset('country/'.$obj->country_name)}}">
                                {{$obj->country_name}}
                            </a>
                        </td>
                        <td>{{$obj->country_iso_code}}</td>
                    </tr>
                    </table>
                    {{__('messages.cities')}} <br />
<ul>
@foreach($states as $one)
<li>
<a href="{{asset($one)}}">
{{$one}}
</a>
</li>
@endforeach
</ul>
<div align="right">
<a href="https://google.{{$obj->country_iso_code}}" target="_blank">
Google.{{$obj->country_iso_code}}
</a>
</div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="services">
                


                <br style="clear: both;">
                <div class="text">
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="news">
                News 
				<div class="empty"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                Weathers
            </div>
        </div>
    </div>

</div>