@extends('frontend.master')
@section('contentt')
<section>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="about-uslogo">
                <a href="/"><img src="/assets/frontend/img/y.png"></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="ad-form">
                <form method="post" action="/dvertisingform">
                  @csrf
                <div class="container">
                <h2 class="text-danger">Advertising Booking Form</h2>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                        <input type="text" name="first_name" placeholder="First Name..." class="form-control" required>
                        </div>        
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="form-group">
                        <input type="text" name="last_name" placeholder="Last Name..." class="form-control" required>
                        </div>        
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                        <input type="email" name="email" placeholder="Email..." class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                        <input type="text" name="phone_no" placeholder="Phone Number..." class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                        <input type="text" name="company_name" placeholder="Company Name..." class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                        <input type="text" name="company_website" placeholder="Company Website..." class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                        <input type="file" name="image" class="form-control adfile" required>
                        </div>
                    </div>
                    <div class="container">
                    <!-- Default inline 1-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" name="120X600" id="defaultInline1">
                    <label class="custom-control-label" for="defaultInline1">120X600</label>
                    </div>
                    <!-- Default inline 2-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="160X600" id="defaultInline2">
                      <label class="custom-control-label" for="defaultInline2">160X600</label>
                    </div>

                    <!-- Default inline 3-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="200X200" id="defaultInline3">
                      <label class="custom-control-label" for="defaultInline3">200X200</label>
                    </div>

                    <!-- Default inline 4-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="250X250" id="defaultInline4">
                      <label class="custom-control-label" for="defaultInline4">250X250</label>
                    </div>
                    <!-- Default inline 5-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="300X250" id="defaultInline5">
                      <label class="custom-control-label" for="defaultInline5">300X250</label>
                    </div>
                    <!-- Default inline 6-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="336X280" id="defaultInline6">
                      <label class="custom-control-label" for="defaultInline6">336X280</label>
                    </div>
                     <!-- Default inline 7-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="450X50" id="defaultInline7">
                      <label class="custom-control-label" for="defaultInline7">450X50 &nbsp; </label>
                    </div>
                    <!-- Default inline 8-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="468X60" id="defaultInline8">
                      <label class="custom-control-label" for="defaultInline8">468X60 &nbsp;</label>
                    </div>
                    <!-- Default inline 9-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="480X70" id="defaultInline9">
                      <label class="custom-control-label" for="defaultInline9">480X70 &nbsp;</label>
                    </div>
                    <!-- Default inline 10-->
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" name="728X90" id="defaultInline10">
                      <label class="custom-control-label line10" for="defaultInline10">728X90</label>
                    </div>
                    <div class="form-group pt-4">
                        <input type="url" name="url" placeholder="Attach Video Ad Url" class="form-control" required>
                    </div>
                    <div class="form-info">
                      <ul>
                          <h5>Assets overview</h5>
                          <li>Video URL: must be uploaded to YouTube</li>
                          <li>Image: Choose from 4 autogenerated thumbnails</li>
                          <li>Headline: 25 characters maximum</li>
                          <li>Description: two lines 35 characters maximum</li>
                          <h5>Video ad settings</h5>
                          <li>Platform: Desktop and mobile</li>
                          <li>File format: AVI, ASF, Quick time, Windows Media, MP4 or MPEG</li>
                          <li>Preferred video codec: H.264, MPEG-2 or MPEG-4</li>
                          <li>Preferred audio codec: MP3 or AAC</li>
                          <li>Resolution: 640 pixels by 360 pixels or 480 pixels by 360 pixels recommended</li>
                          <li>Frame rate: 30 FPS</li>
                          <li>Aspect ratio: native aspect ratio without letter-boxing (examples 4:3, 16:9)</li>
                          <li>Maximum file size: 1GB</li>
                      </ul>
                    </div>
                    <p>TrueView ads run before content on dailyboil and the display network.</p>
                    <h6>Media Channel</h6>
                    <div class="form-group">
                    <select name="media_channel" class="form-control">
                        <option value="Social Media">Social Media</option>
                        <option value="News Sites">News Sites</option>
                        <option value="Blog">Blog</option>
                        <option value="Web services">Web services</option>
                        <option value="Technology Sites">Technology Sites</option>
                    </select>
                    </div>
                    <p>Information about your product *</p>
                    <div class="form-group">
                        <textarea name="information" class="form-control"></textarea>
                    </div>
                    <button type="Submit" class="btn">Submit</button>
                    <i class="fas fa-print" onclick="window.print()"></i>
                    </div>
                </div>
                </div>
            </form>    
            </div>
            
        </div>
        </div>
    </div>
</section>
@endsection
