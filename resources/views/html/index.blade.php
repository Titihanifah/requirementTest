@extends('layouts.temp')
@section('title','Slicing Sederhana')
@section('content')

<nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">PartnerIklan.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="#">Homepage</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Google</a>
                        <a class="dropdown-item" href="#">Facebook Ads</a>
                        <a class="dropdown-item" href="#">SEO</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Training</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Start Banner -->
<div class="img-fluid" alt="Responsive image">
    <img class="d-block w-100" src="{{ url('img/background2.jpg') }}" alt="First slide" height="610px">
</div>
<!-- End Banner -->
<!-- Image Product -->
<section >
    <div class="container">
        <div class="row list-product ">
            <div class="col-lg-3 col-md-6 ">
                <div class="hovereffect">
                    <img src="{{ url('img/about1.jpg') }}" class="img-thumbnail">
                    <div class="overlay">
                        <a class="info" id="btn-google">Google adwords</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hovereffect">
                    <img src="{{ url('img/about2.jpg') }}" class="img-thumbnail">
                    <div class="overlay">
                        <a class="info" id="btn-facebook">Facebook Ads</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hovereffect">
                    <img src="{{ url('img/about1.jpg') }}" class="img-thumbnail">
                    <div class="overlay">
                        <a class="info" id="btn-seo">SEO</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="hovereffect">
                    <img src="{{ url('img/about2.jpg') }}" class="img-thumbnail">
                    <div class="overlay">
                        <a class="info" id="btn-training">Training</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Image Product -->

<!-- Section Google Adwords -->
<section id="google-adwords" >
    <div class="container">
        <div class="row details-product">
            <div class="col-md-4">
                <img src="{{ url('img/blog1.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h4>Google Adwords</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
        </div>
        <div class="row details-product">
            <div class="col-md-8">
                <h4>Google Adwords</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
            <div class="col-md-4">
                <img src="{{ url('img/blog2.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <div class="row details-product">
            <div class="col-md-4">
                <img src="{{ url('img/blog3.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h4>Google Adwords</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
        </div>
    </div>
</section>
<!-- End Section Google Adwords -->

<!-- Section Facebook Ads -->
<section id="facebook-ads" style="display:none;">
    <div class="container">
        <div class="row details-product">
            <div class="col-md-4">
                <img src="{{ url('img/blog1.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h4>Facebook Ads</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
        </div>
        <div class="row details-product">
            <div class="col-md-8">
                <h4>Facebook Ads</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
            <div class="col-md-4">
                <img src="img/blog1.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <div class="row details-product">
            <div class="col-md-4">
                <img src="img/blog1.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h4>Facebook Ads</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
        </div>
    </div>
</section>
<!-- End Section Facebook Ads -->

<!-- Section SEO -->
<section id="seo" style="display:none;">
    <div class="container">
        <div class="row details-product">
            <div class="col-md-4">
                <img src="img/blog1.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h4>SEOTraining</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
        </div>
        <div class="row details-product">
            <div class="col-md-8">
                <h4>SEOTraining</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
            <div class="col-md-4">
                <img src="img/blog1.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <div class="row details-product">
            <div class="col-md-4">
                <img src="img/blog1.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h4>SEOTraining</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
        </div>
    </div>
</section>
<!-- End Section SEO -->

<!-- Section Training -->
<section id="training" style="display:none;">
    <div class="container">
        <div class="row details-product">
            <div class="col-md-4">
                <img src="img/blog1.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h4>Training</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
        </div>
        <div class="row details-product">
            <div class="col-md-8">
                <h4>Trainings</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
            <div class="col-md-4">
                <img src="img/blog1.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <div class="row details-product">
            <div class="col-md-4">
                <img src="img/blog1.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h4>Training</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success float-right">Read More</button>
            </div>
        </div>
    </div>
</section>
<!-- End Section Training -->




<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready( function(){

        $('#btn-seo').click(function(){
            // $('#seo').show();
            $("#seo").css("display", "block");
        });

    });
</script>
@endsection