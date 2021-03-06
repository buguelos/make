<div class="row  ">
        <nav style="margin-bottom: 0;" role="navigation" class="navbar navbar-static-top gray-bg">
        <div class="navbar-header">
            <a href="javascript:void(0)" class="navbar-minimalize minimalize-btn btn btn-primary "><i class="fa fa-bars"></i> </a>
            
        </div>

            <ul class="nav navbar-top-links navbar-right">
            <li>

            </li>
		@if(CNF_MULTILANG ==1)
		<li  >
			<select class="form-control" name="language" onchange="window.location.href = this.value; ">
				@foreach(SiteHelpers::langOption() as $lang)
				<option value="{{ URL::TO('home/lang/'.$lang['folder']) }}" @if(Session::get('lang') == $lang['folder']) selected="selected" @endif>  {{  $lang['name'] }}</option>
				@endforeach

			</select>
		</li>	
		@endif
		@if(!Auth::check())  
			<li><a href="{{ URL::to('user/login')}}"><i class="icon-arrow-right12"></i> {{ Lang::get('core.signin'); }}</a></li>   
		@else
		@if(Session::get('gid') ==1)
		<li class="user dropdown"><a class="dropdown-toggle" href="javascript:void(0)"  data-toggle="dropdown"><i class="fa fa-desktop"></i> <span>{{ Lang::get('core.m_controlpanel'); }}</span><i class="caret"></i></a>
		  <ul class="dropdown-menu dropdown-menu-right icons-right">
		   
		  	<li><a href="{{ URL::to('config')}}"><i class="fa  fa-wrench"></i> {{ Lang::get('core.m_setting'); }}</a></li>
			

					<li><a href="{{ URL::to('users')}}"><i class="fa fa-user"></i> {{ Lang::get('core.m_users'); }} </a></li>
					<li><a href="{{ URL::to('groups')}}"><i class="fa fa-users"></i> {{ Lang::get('core.m_groups'); }} </a></li>
					<li><a href="{{ URL::to('config/blast')}}"><i class="fa fa-envelope"></i> {{ Lang::get('core.m_blastemail'); }} </a></li>	

			<li><a href="{{ URL::to('logs')}}"><i class="fa fa-clock-o"></i> {{ Lang::get('core.m_logs'); }}</a></li>	
			<li class="divider"></li>
			<li><a href="{{ URL::to('pages')}}"><i class="fa fa-copy"></i> {{ Lang::get('core.m_pagecms'); }}</a></li>
			<li><a href="{{ URL::to('blogadmin')}}"><i class="fa fa-folder-open"></i> Blog Posts </a></li>	
			<li><a href="{{ URL::to('menu')}}"><i class="fa fa-sitemap"></i> {{ Lang::get('core.m_menu'); }}</a></li>
			<li class="divider"></li>
			<li><a href="{{ URL::to('module')}}"><i class="fa fa-cogs"></i> {{ Lang::get('core.m_codebuilder'); }}</a></li>		
			<li class="divider"></li>			
			<li><a href="{{ URL::to('config/help')}}"><i class="fa fa-book"></i> {{ Lang::get('core.m_manual'); }}</a></li>
		  </ul>
		</li>
		@endif	
		<li class="user dropdown"><a class="dropdown-toggle" href="javascript:void(0)"  data-toggle="dropdown"><i class="fa fa-user"></i> <span>{{ Lang::get('core.m_myaccount'); }}</span><i class="caret"></i></a>
		  <ul class="dropdown-menu dropdown-menu-right icons-right">
		  	<li><a href="{{ URL::to('dashboard')}}"><i class="fa  fa-laptop"></i> {{ Lang::get('core.m_dashboard'); }}</a></li>
			<li><a href="{{ URL::to('')}}" target="_blank"><i class="fa fa-desktop"></i>  Main Site </a></li>
			<li><a href="{{ URL::to('user/profile')}}"><i class="fa fa-user"></i> {{ Lang::get('core.m_profile'); }}</a></li>
			<li><a href="{{ URL::to('user/logout')}}"><i class="fa fa-sign-out"></i> {{ Lang::get('core.m_logout'); }}</a></li>
		  </ul>
		</li>			
		
	@endif 				
				
            </ul>

        </nav>
        </div>