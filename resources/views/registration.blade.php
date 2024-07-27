@extends('layouts.index')
@section('styles')
    <style>
        .preview{

            width: 250px;
            height: 250px;
            border: 2px dotted #9e9e9e;
            margin-bottom: 10px;

        }
        .preview img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            margin:auto;

        }
        .content-center{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endsection
@section('content')
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/breadcrumbs/inner2.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Registration Form</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">Registration Form</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Account Login Start -->
    <div id="rs-my-account" class="rs-my-account pt-100 md-pb-80 md-pt-80">
        <div class="container">
            <div class="row pb-100 md-pb-72">
                <div class="col-lg-12 md-mb-70">
                    <div class="regi-side">
                        <div class="sec-title">
                            <h2 class="title">Registration</h2>
                        </div>
                        <form class="register-form" id="register-form" method="post" action="{{route('registration.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <label class="input-label">Name <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="text" name="name" required="">

                                    <label class="input-label">Email Address <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="email" name="email" required="">

                                    <label class="input-label">Contact Number <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="text" name="contact" required="">
                                </div>
                                <div class="col-md-4">
{{--                                    profile picture with preview--}}
                                    <div class="content-center">
                                    <div class="preview">
                                        <img id="preview-image" src="images/player.png" alt="Image Preview">
                                        <span id="profile-text"
{{--                                        align text in center both horizontally and vertically--}}
                                                style="display: flex; justify-content: center; align-items: center; height: 100%;"
                                        >Profile Picture</span>
                                    </div>

                                    </div>
                                    <div class="content-center">
                                    <input  type="file" id="profile_picture" name="profile_picture" required="">
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="input-label">Password <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="password" name="password" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">Confirm Password <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="password" name="password_confirmation" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
{{--                                    playing postion drop down--}}

                                    <div class="margin-space">
                                    <label class="input-label">Position <span class="req">*</span></label>
                                    <br>
                                    <select name="position" style="border-radius: 20px; width: 100%" class="date" required="">
                                        <option value="" selected="" disabled="disabled">Select Position</option>
                                        <option value="Goalkeeper">Goalkeeper</option>
                                        <option value="Defender">Defender</option>
                                        <option value="Midfielder">Midfielder</option>
                                        <option value="Forward">Forward</option>
{{--                                        also add volunteer, coaches, media partners, etc--}}
                                        <option value="Volunteer">Volunteer</option>
                                        <option value="Coach">Coach/Trainer</option>
                                        <option value="Media Partner">Media Partner</option>
                                        <option value="Other">Other</option>

                                    </select>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="margin-space gender-detect">
                                        <label class="input-label">Gender <span class="req">*</span></label>
                                        <br>
                                        <label>
                                            <input class="radio-btn" type="radio" name="gender" value="male" required=""><span>Male</span>
                                        </label>
                                        <label>
                                            <input class="radio-btn" type="radio" name="gender" value="female" required=""><span>Female</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="margin-space">
                                            <span data-type="selectors" data-name="birthday_wrapper">
                                                <label class="input-label">Date of Birth <span class="req">*</span></label>
                                                <br>
                                                <span>
                                                    <select name="birth_day" class="date" required="">
                                                        <option value="" selected="" disabled="disabled">Day</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>

                                                    <select name="birth_month" class="date" required="">
                                                        <option value="" selected="" disabled="disabled">Month</option>
                                                        <option value="1">Jan</option>
                                                        <option value="2">Feb</option>
                                                        <option value="3">Mar</option>
                                                        <option value="4">Apr</option>
                                                        <option value="5">May</option>
                                                        <option value="6">Jun</option>
                                                        <option value="7">Jul</option>
                                                        <option value="8">Aug</option>
                                                        <option value="9">Sept</option>
                                                        <option value="10">Oct</option>
                                                        <option value="11">Nov</option>
                                                        <option value="12">Dec</option>
                                                    </select>

                                                    <select name="birth_year" class="date" required="">
                                                        <option value="" selected="" disabled="disabled">Year</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1960">1960</option>
                                                    </select>
                                                </span>
                                            </span>
                                    </div>
                                </div>
                            </div>

{{--                            Height and weight--}}
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="input-label">Height (cm) <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="number" name="height" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="input-label">Weight (kg) <span class="req">*</span></label>
                                    <input class="custom-placeholder" type="number" name="weight" required="">
                                </div>
                            </div>
                            <label class="input-label">Address* <span class="req">*</span></label>
                            <input class="custom-placeholder" type="text" name="address" required="">


                            <div class="row">
                                {{--                                why you want to join us?--}}
                                <div class="col-md-12">
                                    <label class="input-label">Why you want to join us? </label>
                                    <input class="custom-placeholder"  name="why_join" required=""></input>
                                </div>
                            </div>

{{--                            Social links--}}
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="input-label">Facebook Link</label>
                                    <input class="custom-placeholder" type="text" name="facebook">
                                </div>
                                <div class="col-md-4">
                                    <label class="input-label">Instagram Link</label>
                                    <input class="custom-placeholder" type="text" name="instagram">
                                </div>
                                <div class="col-md-4">
                                    <label class="input-label">Twitter Link</label>
                                    <input class="custom-placeholder" type="text" name="twitter">
                                </div>
                            </div>


                            <label>
                                <input class="checkbox" type="checkbox" name="agreement" required=""> I agree the User Agreement and <a href="#">Terms & Condition.</a>
                            </label>

                            <div class="submit-btn">
                                <button class="readon" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Subscribe Section Start -->
            <div class="rs-subscribe bg7 md-margin-0">
                <form class="subscribe-form">
                    <div class="row rs-vertical-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="title-part">
                                <h2 class="title white-color"> Subscribe Our Newsletter</h2>
                                <p class="desc margin-0 white-color"> Subscribe to our newsletter for getting regular updates.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="subscribe-form-fields">
                                <input type="submit" class="news-submit" value="Subscribe">
                                <input type="email" class="news-email" name="EMAIL" placeholder="EMAIL ADDRESS" required="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Subscribe Section End -->
        </div>
    </div>
    <!-- Account Login End -->

@endsection

@section('scripts')
    <script>

        document.getElementById('profile_picture').addEventListener('change', function (event) {
            const preview = document.querySelector('.preview');
            const previewImage = document.getElementById('preview-image');
            const profileText = document.getElementById('profile-text');
            const file = event.target.files[0];


            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    preview.style.display = 'block';
                    profileText.style.display = 'none';
                }

                reader.readAsDataURL(file);
            }
        });
        // handle form submit
        $('#register-form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            let url = form.attr('action');
            let type = form.attr('method');
            let data = new FormData(form[0]);
            $.ajax({
                url: url,
                type: type,
                data: data,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                    if (response.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Application Submitted',
                            text: response.message,
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    }
                }
            });
        });
    </script>
@endsection
