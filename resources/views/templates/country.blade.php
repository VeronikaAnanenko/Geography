
<div class="col-md-12 bodycon">
    <div class="main_page">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-mama" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-country="{{$name}}" id="info"
                                                      data-toggle="tab">Info</a></li>
            <li role="presentation"><a href="#news" id="link_news" data-country="{{$name}}" aria-controls="profile" role="tab"
                                       data-toggle="tab">News</a></li>
            <li role="presentation"><a href="#services" aria-controls="calculate" role="tab"
                                       data-toggle="tab">Regions</a></li>
			<li role="presentation"><a href="#cities" id="link_cities" data-country="{{$name}}" aria-controls="cities" role="tab"
                                       data-toggle="tab">Cities</a></li>
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
 <div id="empty_info"> 
 
 </div>
<div align="right">
	<a href="https://google.{{$obj->country_iso_code}}" target="_blank">
		Google.{{$obj->country_iso_code}}
	</a>
</div>
            </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="services">
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
                <br style="clear: both;">
                <div class="text">
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="news">
				<div class="empty"><img src="/media/orig.gif"  /></div>
            </div>
			<div role="tabpanel" class="tab-pane" id="cities">
				<div class="empty"><img src="/media/orig.gif"  /></div>
            </div>
        </div>
    </div>

</div>