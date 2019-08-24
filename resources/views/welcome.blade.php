@extends ('layouts.frontend')

@section('content')

<header>
	<!---Start of Header----->
	<div class="mmenu">
		<!---Start of Menu----->
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg">
				<button class="navbar-toggler pull-left" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">          	
				<i class="fa fa-bars" aria-hidden="true"></i>            
				</button>
				<a class="navbar-brand mlgo" href="index.html"><img class="logo" src="images/logo.png"></a>
				<button type="button" class="btn blckk" data-toggle="modal" data-target="#myModal">
				<i class="fa fa-search" aria-hidden="true"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">হোম<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">শিক্ষা পদ্ধতি</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							প্রকাশনা
							</a>
							<div class="dropdown-menu drp" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">তারকা হিসেবে</a>
								<a class="dropdown-item" href="#">অধিনায়ক বিরাট</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">অধিনায়ক বিরাট</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" tabindex="-1" aria-disabled="true">কর্মসূচি</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" tabindex="-1" aria-disabled="true">যোগাযোগ</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0 authForm">
						<div class=" swo">
							<button type="button" class="btn clr" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-search" aria-hidden="true"></i>
							</button>
							<button class="lng-bar">
								<i class="fa fa-globe" aria-hidden="true"></i>
								<div class="dropdown">
							<button class="lngb btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							BN
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Bangla</a>
							<a class="dropdown-item" href="#">ENG</a>
							<a class="dropdown-item" href="#">Arabian</a>
							</div>
							</div>
							</button>
							<a class="login btn" type="button" href="{{ route('login') }}" target="_blank">লগইন</a>
							<a class="subscription-top btn" type="button" href="{{ route('register') }}">এখন সাবস্ক্রাইব করুন</a>
						</div>
					</form>
				</div>
			</nav>
		</div>
	</div>
	<!---End of Menu----->
</header>
<!---End of Header----->
<!---Start of full-width-cont-area----->
<section class="full-width-cont-area">
	<a href="{{ route('video_landing_page') }}"><img src="images/money-honey.jpg" alt="Blank-Image"></a>
	<div class="section-foot-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="section-foot">
						<div class="info"><span class="title">মানি হানি</span><span class="more">হেইস্ট</span></div>
						<div class="cta"><a href="{{ route('video_landing_page') }}">এখন দেখো</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!---End of full-width-cont-area----->
<!---Start of full-width-cont-area----->
<section class="full-width-cont-area">
	<a href="video.html"><img src="images/rohossho-romance.jpg" alt="Blank-Image"></a>
	<div class="section-foot-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="section-foot">
						<div class="info"><span class="title">রহস্য রোমাঞ্চ সিরিজ</span><span class="more">THRILLER</span></div>
						<div class="cta"><a href="video.html">এখন দেখো</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!---End of full-width-cont-area----->
<!---Start of full-width-cont-area----->
<section class="full-width-cont-area">
	<a href="video.html"><img src="images/ak-raja.jpg" alt="Blank-Image"></a>
	<div class="section-foot-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="section-foot">
						<div class="info"><span class="title">এক যে ছিল রাজা</span><span class="more">145MINS | 2018 | ড্রামা</span></div>
						<div class="cta"><a href="video.html">এখন দেখো</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!---End of full-width-cont-area----->
<!---Start of full-width-cont-area----->
<section class="full-width-cont-area">
	<a href="video.html"><img src="images/dhaka-metro.jpg" alt="Blank-Image"></a>
	<div class="section-foot-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="section-foot">
						<div class="info"><span class="title">ঢাকা মেট্রো</span><span class="more">ড্রামা</span></div>
						<div class="cta"><a href="video.html">এখন দেখো</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!---End of full-width-cont-area----->
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>পপুলার ছবি</h2>
	<div class="content">
		<div class="slider responsive">
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/ami-fire.jpg">
					<h4>আমি আসবো ফিরে</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/guptodhon.jpg">
					<h4>গুপ্তধনের সন্ধানে</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/vut.jpg">
					<h4>ভূত চতুর্দশী</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/mati.jpg">
					<h4>মাটি</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/vinchi-da.jpg">
					<h4>ভিঞ্চি দা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/shonkor-mudy.jpg">
					<h4>শঙ্কর মুদি</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/kalo-vromor.jpg">
					<h4>কিরীটি ও কালো ভ্রমর</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/mon-janena.jpg">
					<h4>মন জানে না</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/shahjahan.jpg">
					<h4>শাহ জাহান রিজেন্সি</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/Villan.jpg">
					<h4>ভিলেন</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jojo.jpg">
					<h4>Adventures of Jojo</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>হৈচৈ অরিজিনাল ছবি</h2>
	<div class="content">
		<div class="slider responsive">
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/ami-fire.jpg">
					<h4>আমি আসবো ফিরে</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/guptodhon.jpg">
					<h4>গুপ্তধনের সন্ধানে</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/vut.jpg">
					<h4>ভূত চতুর্দশী</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/mati.jpg">
					<h4>মাটি</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/vinchi-da.jpg">
					<h4>ভিঞ্চি দা</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/shonkor-mudy.jpg">
					<h4>শঙ্কর মুদি</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/kalo-vromor.jpg">
					<h4>কিরীটি ও কালো ভ্রমর</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/mon-janena.jpg">
					<h4>মন জানে না</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/shahjahan.jpg">
					<h4>শাহ জাহান রিজেন্সি</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/Villan.jpg">
					<h4>ভিলেন</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jojo.jpg">
					<h4>Adventures of Jojo</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of full-width-cont-area----->
<section class="full-width-cont-area">
	<a href="video.html"><img src="images/gupto.jpg" alt="Blank-Image"></a>
	<div class="section-foot-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="section-foot">
						<div class="info"><span class="title">গুপ্তধনের সন্ধানে</span><span class="more">131মিনিট | 2018 | এডভেঞ্চার</span></div>
						<div class="cta"><a href="video.html">এখন দেখো</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!---End of full-width-cont-area----->
<!---Start of ffeatures----->
<section id="features" class="blue hoichoi-shorts">
	<h2>হৈচৈ শর্টস</h2>
	<div class="content">
		<div class="slider responsive2">
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/sanyal.jpg">
					<h4>মিসেস সান্যাল</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/birpurush.jpg">
					<h4>Birpurush - The Hero Within</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/biloy.jpg">
					<h4>বিলয়া</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/okkhor.jpg">
					<h4>অক্ষর</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/alo.jpg">
					<h4>Aalo</h4>
				</h3>
			</div>
			<div>
				<h3>
					<img src="images/moyur-ponkhi.jpg">
					<h4>ময়ূরপঙ্খী</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/biulir-dal.jpg">
					<h4>বিউলির ডাল ও আলুপোস্ত</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/shbuj-chosma.jpg">
					<h4>সবুজ চশমা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/fly.jpg">
					<h4>ফ্লাই</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/kali.jpg">
					<h4>কালী</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/poketmar.jpg">
					<h4>পকেটমার</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>EDITOR'S PICK</h2>
	<div class="content">
		<div class="slider responsive">
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/accident.jpg">
					<h4>আক্সিডেন্ট</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/sanyasiraja.jpg">
					<h4>সন্ন্যাসী রাজা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/utshob.jpg">
					<h4>ছোট্ট জিজ্ঞাসা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/pach-oddhay.jpg">
					<h4>পাঁচ অধ্যায়ঃ</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/ak-nodir-golpo.jpg">
					<h4>এক নদির গলপো</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/kony.jpg">
					<h4>কোনি</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/utshob.jpg">
					<h4>সব চরিত্র কাল্পনিক</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/golpo-holeo-shotto.jpg">
					<h4>গল্প হলেও সত্যি (১৯৬৬)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/shpner-din.jpg">
					<h4>স্বপ্নের দিন </h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/khoj.jpg">
					<h4>খোঁজ</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/janala.jpg">
					<h4>জানালা</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of full-width-cont-area----->
<section class="full-width-cont-area">
	<a href="video.html"><img src="images/dupur-thakurpo.jpg" alt="Blank-Image"></a>
	<div class="section-foot-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="section-foot">
						<div class="info"><span class="title">Dupur Thakurpo (BD)</span><span class="more">COMEDY</span></div>
						<div class="cta"><a href="video.html">এখন দেখো</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!---End of full-width-cont-area----->
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>বক্সঅফিস হিটস</h2>
	<div class="content">
		<div class="slider responsive">
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/dadagiry.jpg">
					<h4>টোটাল দাদাগিরি</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/nakab.jpg">
					<h4>নাকাব</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/gangstar.jpg">
					<h4>গ্যাংস্টার</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/challenge-2.jpg">
					<h4>চ্যালেঞ্জ ২</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/amazon.jpg">
					<h4>আমাজন অভিযান</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/bojena-se-bojena.jpg">
					<h4>Bojhena Shey Bojhena</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/fida.jpg">
					<h4>ফিদা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/amije-ke-tomar.jpg">
					<h4>আমি যে কে তোমার</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/sudu-tomar-jonno.jpg">
					<h4>শুধু তোমারি জন্য</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jamay-420.jpg">
					<h4>জামাই ৪২০</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/phandeporiya.jpg">
					<h4>ফান্দে পরিয়া বগা কান্দে রে</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of ffeatures----->
<section id="features" class="blue hoichoi-shorts">
	<h2>মিউজিক ভিডিওস</h2>
	<div class="content">
		<div class="slider responsive">
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/ehsomoy.jpg">
					<h4>Eh Shomoy (Oriplast Originals)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/rongilaremon.jpg">
					<h4>Rongila Re Mon (Oriplast Originals)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/amisudhu.jpg">
					<h4>Ami Shudhu Tomar (Oriplast Originals)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/boundle.jpg">
					<h4>Baundule (Oriplast Originals)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/monkebojhai.jpg">
					<h4>মন কে বোঝাই (ওরিপ্লাস্ট অরিজিনালস)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/borno.jpg">
					<h4>Bornoporichoy Title Track (Bornoporichoy)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/aajocholechi.jpg">
					<h4>আজও চলেছি (ওরিপ্লাস্ট অরিজিনালস)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/sadadewal.jpg">
					<h4>Shada Dewal (Uraan)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/borno-pori.jpg">
					<h4>প্রতিবেশী (বর্ণপরিচয়)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/oidekha.jpg">
					<h4>ওই দেখা যায় (মানভঞ্জন)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/michirirdana.jpg">
					<h4>মিছরির দানা  (বিবাহ অভিযান)</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>ঋতুপর্ণ ঘোষের ছবি</h2>
	<div class="content">
		<div class="slider responsive">
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/dosor.jpg">
					<h4>দোসর</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/unisheapril.jpg">
					<h4>উনিশে এপ্রিল</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/raincoat.jpg">
					<h4>রেন কোট (হিন্দি)</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/chokherbali.jpg">
					<h4>চোখের বালি</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/satyanweshi.jpg">
					<h4>সত্যান্বেষী</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/bojena-se-bojena.jpg">
					<h4>Bojhena Shey Bojhena</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/fida.jpg">
					<h4>ফিদা</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/amije-ke-tomar.jpg">
					<h4>আমি যে কে তোমার</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/sudu-tomar-jonno.jpg">
					<h4>শুধু তোমারি জন্য</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jamay-420.jpg">
					<h4>জামাই ৪২০</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/phandeporiya.jpg">
					<h4>ফান্দে পরিয়া বগা কান্দে রে</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>সত্যজিৎ রায়ের ছবি</h2>
	<div class="content">
		<div class="slider responsive">
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/patherpnachali.jpg">
					<h4>পথের পাঁচালী</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/hirakrajardeshe.jpg">
					<h4>হীরক রাজার দেশে</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/gopibag.jpg">
					<h4>গুপী বাঘা  ফিরে এলো </h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/aparajitoportrait.jpg">
					<h4>অপরাজিত</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jalsaghar.jpg">
					<h4>জলসাঘর</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/bojena-se-bojena.jpg">
					<h4>Bojhena Shey Bojhena</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/fida.jpg">
					<h4>ফিদা</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/amije-ke-tomar.jpg">
					<h4>আমি যে কে তোমার</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/sudu-tomar-jonno.jpg">
					<h4>শুধু তোমারি জন্য</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jamay-420.jpg">
					<h4>জামাই ৪২০</h4>
				</h3>
			</div>
			<div class="onhov">
				<div class="movie-hov">
					<div class="details">
						<div class="title">Nayantara</div>
						<div class="info">2019 | 38mins</div>
						<div class="rated">NR</div>
						<div class="category">Drama</div>
						<div class="description">The story of a woman of the night, looking for her morning star!</div>
						<div class="crew">
							<div>
								<span class="role">director</span>
								<span class="people"> Aalok Hasan</span>
							</div>
							<div>
								<span class="role">starring</span>
								<span class="people"> Afran Nisho, Tanjin Tisha, Sohani Israt</span>
							</div>
						</div>
					</div>
				</div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/phandeporiya.jpg">
					<h4>ফান্দে পরিয়া বগা কান্দে রে</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>তপন সিনহা ছবি</h2>
	<div class="content">
		<div class="slider responsive">
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/boidurjo.jpg">
					<h4>বৈদুর্য রহস্য</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/golpo-holeo-shotto.jpg">
					<h4>গল্প হলেও সত্যি (১৯৬৬)</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jatugriha.jpg">
					<h4>জতুগৃহ</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jhinderbondi.jpg">
					<h4>ঝিন্দের বন্দী</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/kabuliwala.jpg">
					<h4>কাবুলিওয়ালা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/kshuditapashan.jpg">
					<h4>ক্ষুধিত পাষাণ</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/fida.jpg">
					<h4>ফিদা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/amije-ke-tomar.jpg">
					<h4>আমি যে কে তোমার</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/sudu-tomar-jonno.jpg">
					<h4>শুধু তোমারি জন্য</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jamay-420.jpg">
					<h4>জামাই ৪২০</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/phandeporiya.jpg">
					<h4>ফান্দে পরিয়া বগা কান্দে রে</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>ফ্রি ছবি</h2>
	<div class="content">
		<div class="slider responsive">
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/rajdando.jpg">
					<h4>রাজদণ্ড</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/protarak.jpg">
					<h4>প্রতারক</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/atpaakebadha.jpg">
					<h4>আট পাকে বাঁধা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/monchayetomay.jpg">
					<h4>মন চায় তোমায় </h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/eastbengaler.jpg">
					<h4>ইস্ট বেঙ্গলের ছেলে</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/mamasquare.jpg">
					<h4>মামা স্কয়ার</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/fida.jpg">
					<h4>ফিদা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/amije-ke-tomar.jpg">
					<h4>আমি যে কে তোমার</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/sudu-tomar-jonno.jpg">
					<h4>শুধু তোমারি জন্য</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/jamay-420.jpg">
					<h4>জামাই ৪২০</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="images/phandeporiya.jpg">
					<h4>ফান্দে পরিয়া বগা কান্দে রে</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
<footer>
	<!---Start of Footer--->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="footlogo">
					<img src="images/logo.png">
					<h2>Copyright 2019 Hoichoi Technologies. All rights reserved.</h2>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-6">
				<div class="foot_about">
					<h3>Learn More</h3>
					<ul>
						<li><a href="#">এবাউট আস</a></li>
						<li><a href="#">ক্যারিয়ার</a></li>
						<li><a href="#">এফ এ কিউ</a></li>
						<li><a href="#">প্রাইভেসি পলিসি</a></li>
						<li><a href="#">টার্মস অফ সার্ভিস </a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-6">
				<div class="foot_about">
					<h3>Latest Movies</h3>
					<ul>
						<li><a href="#">Haami</a></li>
						<li><a href="#">Bastu Shaap</a></li>
						<li><a href="#">Katmundu</a></li>
						<li><a href="#">Hercules</a></li>
						<li><a href="#">Hemanta</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12">
				<div class="foot_icon-top">
					<ul>
						<li><a href="#"><img src="images/app-store.svg"></a></li>
						<li><a href="#"><img src="images/google-play.png"></a></li>
					</ul>
				</div>
				<div class="foot_icon-bottom">
					<ul>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					</ul>
					<p>Powered by <a href="#">ViewLift</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!---End of Footer--->  
<!---Search Modal--->  
<div class="modal msearch" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<form action="/action_page.php">
					অনুসন্ধান<br>
					<input type="text" name="firstname" value="অনুসন্ধান">				  
				</form>
			</div>
		</div>
	</div>
</div>
<!---Search Modal---> 

@endsection