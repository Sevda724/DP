<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<a href="{{ route('indexpage') }}" class="smoothScroll navbar-brand"><img src="images/logo.png" style="height: 50px; width: auto; margin-top: -10px;"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">

				<!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->


				<li><a href="{{ route('indexpage') }}#work" class="smoothScroll">{{__('local.HOME')}}</a></li>
                <li><a href="{{ route('indexpage') }}#about" class="smoothScroll">{{__('local.ABOUT')}}</a></li>
                <li><a href="{{ route('indexpage') }}#portfolio" class="smoothScroll">{{__('local.SHOWCASE')}}</a></li>
                <li><a href="{{ route('indexpage') }}#locations" class="smoothScroll">{{__('local.LOCATIONS')}}</a></li>
                <li><a href="{{ route('indexpage') }}#contact" class="smoothScroll">{{__('local.CONTACT')}}</a></li>
                <li>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                            @php $current_locale = request()->cookie('locale') @endphp
                            <img src="{{ $current_locale == 'en' ? 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Flag_of_the_United_Kingdom.png/1200px-Flag_of_the_United_Kingdom.png' : 'https://upload.wikimedia.org/wikipedia/commons/d/d4/Flag_of_Russia.png' }}" style="height:16px;" />
                            {{ $current_locale == 'en' ? 'EN' : 'RU' }}
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <form action="{{ route('setLocale', 'en')}}" method="POST">
                                @csrf
                                <button type="submit" style="border: none; background-color: transparent; color: #FFFFFF; padding: 7px 15px; " ><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Flag_of_the_United_Kingdom.png/1200px-Flag_of_the_United_Kingdom.png" style="height:16px; margin-right: 5px;" />EN</button>
                            </form>
                            <form action="{{ route('setLocale', 'ru')}}" method="POST">
                                @csrf
                                <button type="submit" style="border: none; background-color: transparent; color: #FFFFFF; padding: 7px 15px; " ><img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Flag_of_Russia.png" style="height:16px; margin-right: 5px;" />RU</button>
                            </form>
                        </div>
                    </div>
                </li>
			</ul>
		</div>

	</div>
</section>