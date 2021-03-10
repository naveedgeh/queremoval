@extends('frontend.layout.masterlayout')
@section('Title')
Home Removal
@endsection
@section('mainbody')

<section id="page-title" class="page-title-mini">

    <div class="container clearfix">
        <h1>Home Removals</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Home Removals</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">

    <div class="content-wrap pb-0">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="badge badge-pill badge-default">Que Removals</div>
                    <h2 class="display-4 font-weight-bold">Home Removals.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia vitae mollitia dignissimos ab qui aspernatur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laborum, molestiae eum odit illo pariatur. Sapiente deserunt optio dignissimos maiores pariatur, expedita voluptate quibusdam distinctio beatae.</p>
                    <a href="#" class="button button-rounded button-large nott ls0">Get Started</a>
                    <a href="demo-seo-contact.html" class="button button-rounded button-large nott ls0">Contact Us</a>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="images/DSC_0051.jpg" alt="Image">
                </div>
            </div>
        
            <br><br><br><br><br>
            
            
            
            <div class="row align-items-center">
                
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="images/DSC_0023.jpg" alt="Image">
                </div>
                <div class="col-lg-6">
                    <div class="badge badge-pill badge-default">Que Removals</div>
                    <h2 class="display-4 font-weight-bold">Home Removals.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia vitae mollitia dignissimos ab qui aspernatur.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laborum, molestiae eum odit illo pariatur. Sapiente deserunt optio dignissimos maiores pariatur, expedita voluptate quibusdam distinctio beatae.</p>
                    <a href="#" class="button button-rounded button-large nott ls0">Get Started</a>
                    <a href="demo-seo-contact.html" class="button button-rounded button-large nott ls0">Contact Us</a>
                </div>
            </div>
            <div style="margin-top:100px;">
            @includeIf('frontend.Shared.howtowork')
        </div>
        </section>
@endsection