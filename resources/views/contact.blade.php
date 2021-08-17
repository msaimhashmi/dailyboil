@extends('frontend.master')
@section('contentt')
<section>
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="contact-uslogo">
				<a href="/"><img src="/assets/frontend/img/y.png"></a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="contact-usinfo">
			<h1>Contact Us</h1>
			<p>Want to get in contact with dailyboil professional video downloader Team? Here's how!</p>
            <h5>Technical Support</h5> 
            <p>If you need our technical & customer support, or have a question or problem about any of our products, please visit our Support Center. If you cannot find the solution there, then please use this online form.</p>
            <h5>Business Inquiry</h5>
            <p>Interested in reselling, distributing dailyboil professional video downloader, and other partnership or business opportunities, please contact us through: <a href="mailto:team@dailyboil.com"> team@dailyboil.com</a></p>
            <h5>Promotions</h5>
            <p>If you wish to promote our product or software with a competition based giveaway, please email or use Skype to contact us.
            Skype info:<a href="mailto:Support@dailyboil.com" class="support"> Support@dailyboil.com</a></p>
                <div class="contact-us-form">
                    <form name="ContactForm" action="/contactform" method="post">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12"><input class="form-control" type="text" name="name" placeholder="Name..." required></div>
                                <div class="col-lg-6 col-md-12 col-sm-12"><input class="form-control" type="email" name="email" placeholder="Email..." required></div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="message" placeholder="Message..." required></textarea>
                                </div>
                                <button type="Submit" class="btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
		</div>
	</div>
</section>
@endsection
