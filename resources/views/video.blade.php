@extends('layouts.frontend')

@section('content')

<!---Start of full-width-cont-area----->
<section class="full-width-cont-area">
	<img src="{{ asset('images/money-honey.jpg') }}" alt="Blank-Image">
</section>
<!---End of full-width-cont-area----->
<section class="video-inner-social">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="show__details">
					<div class="show__title__box">
						<span class="title">মানি হানি</span>
						<span class="meta-data">12 পর্ব|  হেইস্ট</span>
					</div>
					<div class="desktop-share">
						<div class="show__share">
							<div class="sharing_icons">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="video-hor-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6  col-12">
				<h3><strong>DIRECTOR</strong> Tanim Noor, Krishnendu Chattopadhyay</h3>
				<p><strong>STARRING</strong> Shaymol Mawla, Mostafizur Noor Imran, Lutfar Rahman George, Sumon Anwar</p>
				<p>এক স্টক বিনিয়োগকারীর জীবনে ঘটে যায় অপ্রত্যাশিত এক ঘটনা। এবং তার পরই শহরকে কাঁপিয়ে দেয় ১২১ কোটি টাকার এক সারা জাগানো ব্যাঙ্ক ডাকাতি!</p>
			</div>
			<div class="col-lg-6 col-md-6  col-12 dplnon">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-4">
						<div class="next-episode-img">
							<div class="image">
								<img src="{{ asset('images/MH1.jpg') }}">
								<i class="fa fa-play" aria-hidden="true"></i>
							</div>
							<progress class="site-color" value="0" max="100"></progress>
							<button class="button cta">এখন দেখো</button>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-8">
						<div class="details">
							<div class="episode-name">
								<span class="season-episode-details">মৌসুম 1 : E1</span>
								<span class="name">মাইনকার চিপা </span>
							</div>
							<div class="next-episode-desc">ডিটেক্টিভ অমিতাভ এবং সহযোগী মারিয়ার হাতে তুলে দেয়া হয় ব্যাঙ্ক ডাকাতির তদন্তের দায়িত্ব। অন্যদিকে ডাকাতরা প্রায় ধরা পড়ার ধরা পরার মুখে!
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!---Start of ffeatures----->
<section id="features" class="blue">
	<h2>মৌসুম 1</h2>
	<div class="content">
		<div class="slider responsive3">
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH1.jpg') }}">
					<h4><span>1</span>মিসেস সান্যাল</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH2.jpg') }}">
					<h4><span>2</span>Birpurush - The Hero Within</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH3.jpg') }}">
					<h4><span>3</span>বিলয়া</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH4.jpg') }}">
					<h4><span>4</span>অক্ষর</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH5.jpg') }}">
					<h4><span>5</span>Aalo</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH6.jpg') }}">
					<h4><span>6</span>ময়ূরপঙ্খী</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH7.jpg') }}">
					<h4><span>7</span>বিউলির ডাল ও আলুপোস্ত</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH8.jpg') }}">
					<h4><span>8</span>সবুজ চশমা</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH9.jpg') }}">
					<h4><span>9</span>ফ্লাই</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH10.jpg') }}">
					<h4><span>10</span>কালী</h4>
				</h3>
			</div>
			<div>
				<h3>
					<i class="fa fa-play" aria-hidden="true"></i><img src="{{ asset('images/MH11.jpg') }}">
					<h4><span>11</span>পকেটমার</h4>
				</h3>
			</div>
		</div>
	</div>
</section>
<!---End of ffeatures----->
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